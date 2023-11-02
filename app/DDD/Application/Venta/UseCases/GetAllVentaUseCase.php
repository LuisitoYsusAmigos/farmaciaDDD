<?php 

namespace App\DDD\Application\Venta\UseCases;

use App\DDD\Domain\Inventario\Ports\VentaRepository;

class GetAllVentaUseCase
{
    protected $repository;
    public function __construct(VentaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getVentaAll(): array
    {
        return $this->repository->getVentaAll();
    }
}