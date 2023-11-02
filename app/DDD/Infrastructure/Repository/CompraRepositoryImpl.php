<?php

namespace App\DDD\Infrastructure\Repository;
use App\DDD\Domain\Inventario\Entities\Compra;
use App\DDD\Domain\Inventario\Ports\CompraRepository;
use App\DDD\Infrastructure\Repository\Eloquent\CompraORM;



class CompraRepositoryImpl implements CompraRepository
{
    public function addCompra(Compra $compra): bool
    {
        $model = new CompraORM([
            'id_lote' => $compra->idLote,
            //'fecha_expiracion' => $compra->fechaExpiracion,
            'precio_compra' => $compra->precioCompra,
            'cantidad' => $compra->cantidad,
            'precio' => $compra->precio,
            'subtotal' => $compra->subtotal,
            'id_proveedor' => $compra->idProveedor
            ]);
        return $model->save();
    }

    public function updateCompra($id, Compra $compra): bool
    {
        $model = CompraORM::query()->findOrFail($id);
        return $model->update(
            [
                //'fecha_expiracion' => $compra->fechaExpiracion,
                'precio_compra' => $compra->precioCompra,
                'cantidad' => $compra->cantidad,
                'precio' => $compra->precio,
                'subtotal' => $compra->subtotal,
                'id_proveedor' => $compra->idProveedor
            ]);
    }

    public function deleteCompra($id): bool
    {
        $affected = CompraORM::destroy($id);
        return $affected > 0;
    }

    public function getCompra($id): Compra|null
    {
        $model = CompraORM::query()->findOrFail($id);
        return $this->makeCompraFrom($model);
    }

    public function getCompraAll(): array
    {
        $list = [];

        foreach (CompraORM::all() as $model)
        {
            //dd($model);
            $list[$model->id_lote] = $this->makeCompraFrom($model);
        }
        return $list;
    }

    protected function makeCompraFrom(CompraORM $compra):Compra
    {
        return new Compra($compra->id_lote,
                        //$compra->fecha_expiracion, 
                        $compra->precio_compra, 
                        $compra->cantidad,
                        $compra->precio,
                        $compra->subtotal,
                        $compra->id_proveedor);
    }
}