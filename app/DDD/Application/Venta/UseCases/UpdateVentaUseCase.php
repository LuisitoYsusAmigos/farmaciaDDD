<?php
//namespace de los casos de uso
namespace App\DDD\Application\Venta\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Venta;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\VentaRepository;

class UpdateVentaUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de proveedor 
    public function __construct(VentaRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase proveedor
    public function UpdateVenta($id, Venta $venta)
    {
        //dd($categoria);

        return $this->repository->updateVenta($id, $venta);
    }
}