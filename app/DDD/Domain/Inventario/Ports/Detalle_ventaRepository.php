<?php

//uso del espacio de los puertos
namespace App\DDD\Domain\Inventario\Ports;
use App\DDD\Domain\Inventario\Entities\Detalle_venta;
//importacion de las clases necesarias en este caso la entidad
//use App\Domain\Inventario\Entities\Detalle_venta;

interface Detalle_ventaRepository
{
    public function addDetalle_venta(Detalle_venta $Detalle_venta): bool;   

    public function updateDetalle_venta($id, Detalle_venta $Detalle_ventarDetalle_venta): bool;

    public function deleteDetalle_venta($id): bool;

    public function getDetalle_venta($id): Detalle_venta|null;

    public function getDetalle_ventaAll(): array;

}