<?php 

namespace App\DDD\Application\Proveedor\UseCases;

use App\DDD\Domain\Inventario\Entities\Proveedor;
use App\DDD\Domain\Inventario\Ports\ProveedorRepository;

class AddProveedorUseCase
{
    protected $repository;

    //Asignacion del repositorio de proveedor para uso de sus funciones
    public function __construct(ProveedorRepository $repositorio)
    {
        $this->repository = $repositorio;
    }

    //Funcion booleana de adicion de un proveedor a la base de datos
    public function addProveedor(Proveedor $proveedor): bool
    {
        return $this->repository->addProveedor($proveedor);
    }
}