<?php 

namespace App\DDD\Application\Producto\UseCases;

use App\DDD\Domain\Inventario\Ports\ProductoRepository;

class GetProductoUseCase
{
    protected $repository;
    public function __construct(ProductoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function GetProducto($id)
    {
        return $this->repository->getProducto($id);
    }
}