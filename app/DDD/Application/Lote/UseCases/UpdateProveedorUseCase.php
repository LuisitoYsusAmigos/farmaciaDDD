<?php

namespace App\DDD\Application\Proveedor\UseCases;

use App\DDD\Domain\Inventario\Entities\Proveedor;
use App\DDD\Domain\Inventario\Ports\ProveedorRepository;



class UpdateProveedorUseCase
{
    protected $repository;

    public function __construct(ProveedorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function updateProveedor($id ,Proveedor $proveedor)
    {
        return $this->repository->updateProveedor($id, $proveedor);  
    }
}