<?php

//uso del espacio de los puertos
namespace App\DDD\Domain\Inventario\Ports;
use App\DDD\Domain\Inventario\Entities\Proveedor;
//importacion de las clases necesarias en este caso la entidad
//use App\Domain\Inventario\Entities\Proveedor;

interface ProveedorRepository
{
    public function addProveedor(Proveedor $proveedor): bool;   

    public function updateProveedor($id, Proveedor $proveedor): bool;

    public function deleteProveedor($id): bool;

    public function getProveedor($id): Proveedor|null;

    public function getProveedorAll(): array;

}