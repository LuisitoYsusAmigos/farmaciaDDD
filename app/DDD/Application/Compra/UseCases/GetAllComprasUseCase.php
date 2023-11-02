<?php 
namespace App\DDD\Application\Compra\UseCases;
use App\DDD\Domain\Inventario\Ports\CompraRepository;



class GetAllComprasUseCase
{
    protected $repository;
    public function __construct(CompraRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getCompraAll(): array
    {
        return $this->repository->getCompraAll();
    }
}