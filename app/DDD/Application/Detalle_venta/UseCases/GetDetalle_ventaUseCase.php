<?php 

namespace App\DDD\Application\Detalle_venta\UseCases;
use App\DDD\Domain\Inventario\Entities\Detalle_venta;
//use App\DDD\Domain\Inventario\Ports\Detalle_ventaRepository;
use App\DDD\Domain\Inventario\Ports\Detalle_ventaRepository;


class GetDetalle_ventaUseCase
{
    protected $repository;

    public function __construct(Detalle_ventaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getDetalle_venta($id): Detalle_venta|null
    {
        return $this->repository->getDetalle_venta($id);
    }
}