<?php
//namespace de los casos de uso
namespace App\DDD\Application\Venta\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Venta;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\VentaRepository;

class DeleteVentaUseCase
{
    protected $repository;

    public function __construct(VentaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function DeleteVenta(string $idVenta)
    {

        return $this->repository->deleteVenta($idVenta);
    }
}