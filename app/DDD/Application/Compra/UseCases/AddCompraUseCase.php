<?php 

namespace App\DDD\Application\Compra\UseCases;
use App\DDD\Domain\Inventario\Entities\Compra;
use App\DDD\Domain\Inventario\Ports\CompraRepository;


class AddCompraUsecase
{
    protected $repository;
    public function __construct(CompraRepository $repository)
    {
        $this->repository = $repository;
    }

    public function addCompra(Compra $compra): bool
    {
        return $this->repository->addCompra($compra);
    }
}