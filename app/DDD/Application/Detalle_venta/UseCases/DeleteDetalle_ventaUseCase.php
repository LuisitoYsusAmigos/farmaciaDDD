<?php

namespace App\DDD\Application\Detalle_venta\UseCases;
use App\DDD\Domain\Inventario\Ports\Detalle_ventaRepository;

class DeleteDetalle_ventaUseCase
{
    protected $repository;

    public function __construct(Detalle_ventaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function deleteDetalle_venta($id)
    {
        return $this->repository->deleteDetalle_venta($id);
    }
}