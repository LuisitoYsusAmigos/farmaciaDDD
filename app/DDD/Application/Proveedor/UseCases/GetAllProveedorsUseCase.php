<?php 

namespace App\DDD\Application\Proveedor\UseCases;

use App\DDD\Domain\Inventario\Ports\ProveedorRepository;

class GetAllProveedorsUseCase
{
    protected $repository;
    public function __construct(ProveedorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getProveedorAll(): array
    {
        return $this->repository->getProveedorAll();
    }
}
