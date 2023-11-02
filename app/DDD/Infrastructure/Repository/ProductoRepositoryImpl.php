<?php

namespace App\DDD\Infrastructure\Repository;

use App\DDD\Domain\Inventario\Entities\Producto;
use App\DDD\Domain\Inventario\Ports\ProductoRepository;
use App\DDD\Infrastructure\Repository\Eloquent\ProductoORM;

class ProductoRepositoryImpl implements ProductoRepository
{
    /**
     * {@inheritdoc}
     */
    public function addProducto(Producto $producto): bool
    {
        // aquí se usa el modelo de Eloquent para insertar los datos
        $model = new ProductoORM([
            'id' => $producto->idProducto,
            'nombre_producto' => $producto->nombreProducto,
            'stock' => $producto->stock,
            'stock_minimo' => $producto->stockMinimo,
            'presentacion' => $producto->presentacion,
            'medida' => $producto->medida,
            'restriccion_venta' => $producto->restriccionVenta,
            'descripcion' => $producto->descripcion,
            'locacion' => $producto->locacion,
            'codigo_barras' => $producto->codigoBarras,
            'id_laboratorio' => $producto->idLaboratorio,
            'id_categoria' => $producto->idCategoria
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
    public function updateProducto($id, Producto $producto): bool
    {
        $model = ProductoORM::query()->findOrFail($id);
        //dd($model);
        return $model->update([
            'id' => $producto->idProducto,
            'nombre_producto' => $producto->nombreProducto,
            'stock' => $producto->stock,
            'stock_minimo' => $producto->stockMinimo,
            'presentacion' => $producto->presentacion,
            'medida' => $producto->medida,
            'restriccion_venta' => $producto->restriccionVenta,
            'descripcion' => $producto->descripcion,
            'locacion' => $producto->locacion,
            'codigo_barras' => $producto->codigoBarras,
            'id_laboratorio' => $producto->idLaboratorio,
            'id_categoria' => $producto->idCategoria
        ]);
    }

    /**
     * {@inheritdoc}
     */

    public function deleteProducto($id): bool
    {
        $affected = ProductoORM::destroy($id);
        return $affected > 0;
    }

    /**
     * {@inheritdoc}
     */

    public function getProducto($id): Producto|null
    {
        $model = ProductoORM::query()->findOrFail($id);
        //dd($model);
        return $this->makeProductoFrom($model);
    }

    /**
     * {@inheritdoc}
     */

    public function getProductoAll(): array
    {
        $list = [];

        // obtiene los productos desde Eloquent (ProductoORM), los converte en producto 
        // y los adiciona a un arreglo cuya key es el id del producto
        foreach (ProductoORM::all() as $model) {
            $list[$model->id] = $this->makeProductoFrom($model);
        }
        //dd($list);
        return $list;
    }

    /**
     * Mapea el modelo de eloquent en la clase del dominio
     */
    protected function makeProductoFrom(ProductoORM $model): Producto
    {
        return new Producto($model->id, $model->nombre_producto, $model->stock, $model->stock_minimo, $model->presentacion, $model->medida, $model->restriccion_venta, $model->descripcion, $model->locacion, $model->codigo_barras, $model->idLaboratorio, $model->idCategoria);
    }
}
