<?php 

namespace App\DDD\Application\Venta\UseCases;

use App\DDD\Domain\Inventario\Entities\Venta;
use App\DDD\Domain\Inventario\Ports\VentaRepository;

class AddVentaUseCase
{
    protected $repository;

    //Asignacion del repositorio de proveedor para uso de sus funciones
    public function __construct(VentaRepository $repositorio)
    {
        $this->repository = $repositorio;
    }

    //Funcion booleana de adicion de un proveedor a la base de datos
    public function addVenta(Venta $venta): bool
    {
        return $this->repository->addVenta($venta);
    }
}