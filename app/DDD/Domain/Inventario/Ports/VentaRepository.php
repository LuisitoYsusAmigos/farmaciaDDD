<?php

namespace App\DDD\Domain\Inventario\Ports;

use App\DDD\Domain\Inventario\Entities\Venta;

interface VentaRepository
{
    public function addVenta(Venta $venta): bool;

    public function updateVenta($id, Venta $venta): bool;

    public function deleteVenta($id): bool;

    public function getVenta($id): Venta|null;

    public function getVentaAll(): array;

}