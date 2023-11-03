<?php 

namespace App\DDD\Application\Detalle_venta\UseCases;

use App\DDD\Domain\Inventario\Entities\Detalle_venta;
use App\DDD\Domain\Inventario\Ports\Detalle_ventaRepository;

class AddDetalle_ventaUseCase
{
    protected $repository;

    //Asignacion del repositorio de Detalle_venta para uso de sus funciones
    public function __construct(Detalle_ventaRepository $repositorio)
    {
        $this->repository = $repositorio;
    }

    //Funcion booleana de adicion de un Detalle_venta a la base de datos
    public function addDetalle_venta(Detalle_venta $Detalle_venta): bool
    {
        return $this->repository->addDetalle_venta($Detalle_venta);
    }
}