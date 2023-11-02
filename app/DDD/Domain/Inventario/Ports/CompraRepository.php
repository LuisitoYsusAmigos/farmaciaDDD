<?php

namespace App\DDD\Domain\Inventario\Ports;
use App\DDD\Domain\Inventario\Entities\Compra;

interface CompraRepository
{
    public function addCompra(Compra $compra): bool;   

    public function updateCompra($id, Compra $compra): bool;

    public function deleteCompra($id): bool;

    public function getCompra($id): Compra|null;

    public function getCompraAll(): array;
}