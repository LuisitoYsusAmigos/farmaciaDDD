<?php 

namespace App\DDD\Application\Proveedor\UseCases;
use App\DDD\Domain\Inventario\Entities\Proveedor;
//use App\DDD\Domain\Inventario\Ports\ProveedorRepository;
use App\DDD\Domain\Inventario\Ports\ProveedorRepository;


class GetProveedorUseCase
{
    protected $repository;

    public function __construct(ProveedorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getProveedor($id): Proveedor|null
    {
        return $this->repository->getProveedor($id);
    }
}