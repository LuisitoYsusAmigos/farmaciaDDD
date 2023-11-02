<?php

namespace App\DDD\Application\Compra\UseCases;

use App\DDD\Domain\Inventario\Entities\Compra;
use App\DDD\Domain\Inventario\Ports\CompraRepository;



class UpdateCompraUseCase
{
    protected $repository;

    public function __construct(CompraRepository $repository)
    {
        $this->repository = $repository;
    }

    public function updateCompra($id ,Compra $compra)
    {
        return $this->repository->updateCompra($id, $compra);
    }
}