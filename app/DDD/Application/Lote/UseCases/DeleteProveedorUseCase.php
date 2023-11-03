<?php

namespace App\DDD\Application\Proveedor\UseCases;
use App\DDD\Domain\Inventario\Ports\ProveedorRepository;

class DeleteProveedorUseCase
{
    protected $repository;

    public function __construct(ProveedorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function deleteProveedor($id)
    {
        return $this->repository->deleteProveedor($id);
    }
}