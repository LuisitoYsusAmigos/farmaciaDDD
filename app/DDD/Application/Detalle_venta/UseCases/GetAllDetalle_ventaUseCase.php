<?php 

namespace App\DDD\Application\Detalle_venta\UseCases;

use App\DDD\Domain\Inventario\Ports\Detalle_ventaRepository;

class GetAllDetalle_ventaUseCase
{
    protected $repository;
    public function __construct(Detalle_ventaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getDetalle_ventaAll(): array
    {
        return $this->repository->getDetalle_ventaAll();
    }
}
