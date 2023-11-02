<?php 

namespace App\DDD\Application\Producto\UseCases;

use App\DDD\Domain\Inventario\Ports\ProductoRepository;

class GetAllProductoUseCase
{
    protected $repository;
    public function __construct(ProductoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getProductoAll(): array
    {
        return $this->repository->getProductoAll();
    }
}