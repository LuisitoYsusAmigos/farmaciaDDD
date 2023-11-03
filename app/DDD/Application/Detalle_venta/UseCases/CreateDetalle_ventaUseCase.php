<?php
//namespace de los casos de uso
namespace App\DDD\Application\detalle_venta\UseCases;

//importes necesarios para el funcionamiento la entidad detalle_venta del dominio
use App\DDD\Domain\Inventario\Entities\detalle_venta;
//importe necesario del repositorio de detalle_venta con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\detalle_ventaRepository;

class CreateDetalle_ventaUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de detalle_venta 
    public function __construct(detalle_ventaRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase detalle_venta
    public function createdetalle_venta(array $attributes = []): detalle_venta
    {
        //creacion de un objeto de la entidad de dominio
        $detalle_venta = new detalle_venta();
        //dd($attributes);
        $detalle_venta->id_detalle_venta = $attributes['id_detalle_venta'];
        $detalle_venta->subtotal = $attributes['subtotal'];
        $detalle_venta->utilidad = $attributes['utilidad'];
        $detalle_venta->cantidad = $attributes['cantidad'];
        $detalle_venta->precio = $attributes['precio'];
        $detalle_venta->id_producto = $attributes['id_producto'];
        $detalle_venta->id_venta = $attributes['id_venta'];


        //Regresa un detalle_venta con datos vacios
        //dd($detalle_venta);
        
        return $detalle_venta;
    }
}