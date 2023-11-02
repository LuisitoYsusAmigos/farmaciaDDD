<?php

namespace App\DDD\Domain\Inventario\Ports;

use App\DDD\Domain\Inventario\Entities\Producto;

interface ProductoRepository
{
    public function addProducto(Producto $producto): bool;

    public function updateProducto($id, Producto $producto): bool;

    public function deleteProducto($id): bool;

    public function getProducto($id): Producto|null;

    public function getProductoAll(): array;

}
