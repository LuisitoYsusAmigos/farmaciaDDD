<?php 

namespace App\DDD\Application\Venta\UseCases;

use App\DDD\Domain\Inventario\Ports\VentaRepository;

class GetVentaUseCase
{
    protected $repository;
    public function __construct(VentaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function GetVenta($id)
    {
        return $this->repository->getVenta($id);
    }
}