<?php

namespace App\DDD\Application\Detalle_venta\UseCases;

use App\DDD\Domain\Inventario\Entities\Detalle_venta;
use App\DDD\Domain\Inventario\Ports\Detalle_ventaRepository;



class UpdateDetalle_ventaUseCase
{
    protected $repository;

    public function __construct(Detalle_ventaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function updateDetalle_venta($id ,Detalle_venta $detalle_venta)
    {
        return $this->repository->updateDetalle_venta($id, $detalle_venta);  
    }
}