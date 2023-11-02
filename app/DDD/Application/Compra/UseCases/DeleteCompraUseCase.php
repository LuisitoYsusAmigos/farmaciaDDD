<?php
namespace App\DDD\Application\Compra\UseCases;
use App\DDD\Domain\Inventario\Ports\CompraRepository;



class DeleteCompraUseCase
{
    protected $repository;

    public function __construct(CompraRepository $repository)
    {
        $this->repository = $repository;
    }

    public function deleteCompra($id): bool
    {
        return $this->repository->deleteCompra($id);
    }
}