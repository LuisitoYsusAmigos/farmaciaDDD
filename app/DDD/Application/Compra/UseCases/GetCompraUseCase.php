<?php 
namespace App\DDD\Application\Compra\UseCases;
use App\DDD\Domain\Inventario\Entities\Compra;
use App\DDD\Domain\Inventario\Ports\CompraRepository;

class GetCompraUseCase
{
    protected $repository;

    public function __construct(CompraRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getCompra($id): Compra|null
    {
        return $this->repository->getCompra($id);
    }
}