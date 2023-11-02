<?php

namespace App\DDD\Infrastructure\Repository;

use App\DDD\Domain\Inventario\Entities\Venta;
use App\DDD\Domain\Inventario\Ports\VentaRepository;
use App\DDD\Infrastructure\Repository\Eloquent\VentaORM;

class VentaRepositoryImpl implements VentaRepository
{
    /**
     * {@inheritdoc}
     */
    public function addVenta(Venta $venta): bool
    {
        // aquí se usa el modelo de Eloquent para insertar los datos
        $model = new VentaORM([
            'id_venta' => $venta->idVenta,
            'descuento' => $venta->descuento,
            'igv' => $venta->igv,
            'precio_total' => $venta->precioTotal,
            'fecha_venta' => $venta->fechaVenta,
            'id_cliente' => $venta->idCliente,
            'id_usuario' => $venta->idUsuario
        ]);
        //dd($model);
        return $model->save();
    }

    /*
     $this->id = $idProducto;
        $this->nombre = $nombreProducto;
        $this->stock = $stock;
        $this->stockMinimo = $stockMinimo;
        $this->presentacion = $presentacion;
        $this->medida = $medida;
        $this->restriccionVenta = $restriccionVenta;
        $this->descripcion = $descripcion;
        $this->locacion = $locacion;
        $this->codigoBarras = $codigoBarras;
    *¨/
    /**
     * {@inheritdoc}
     */
    public function updateVenta($id_venta, Venta $venta): bool
    {
        $model = VentaORM::query()->findOrFail($id_venta);
        //dd($model);
        return $model->update([
            'id_venta' => $venta->idVenta,
            'descuento' => $venta->descuento,
            'igv' => $venta->igv,
            'precio_total' => $venta->precioTotal,
            'fecha_venta' => $venta->fechaVenta,
            'id_cliente' => $venta->idCliente,
            'id_usuario' => $venta->idUsuario
        ]);
    }

    /**
     * {@inheritdoc}
     */

    public function deleteVenta($id_venta): bool
    {
        $affected = VentaORM::destroy($id_venta);
        return $affected > 0;
    }

    /**
     * {@inheritdoc}
     */

    public function getVenta($idVenta): Venta|null
    {
        $model = VentaORM::query()->findOrFail($idVenta);
        //dd($model);
        return $this->makeVentaFrom($model);
    }

    /**
     * {@inheritdoc}
     */

    public function getVentaAll(): array
    {
        $list = [];

        // obtiene los productos desde Eloquent (ProductoORM), los converte en producto 
        // y los adiciona a un arreglo cuya key es el id del producto
        foreach (VentaORM::all() as $model) {
            $list[$model->id_venta] = $this->makeVentaFrom($model);
        }
        //dd($list);
        return $list;
    }

    /**
     * Mapea el modelo de eloquent en la clase del dominio
     */
    protected function makeVentaFrom(VentaORM $model): Venta
    {
        return new Venta($model->id_venta, $model->descuento, $model->igv, $model->precio_total, $model->fecha_venta, $model->idCliente, $model->idUsuario);
    }
}