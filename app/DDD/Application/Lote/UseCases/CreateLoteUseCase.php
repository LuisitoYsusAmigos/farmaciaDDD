<?php
//namespace de los casos de uso
namespace App\DDD\Application\Lote\UseCases;

//importes necesarios para el funcionamiento la entidad Lote del dominio
use App\DDD\Domain\Inventario\Entities\Lote;
//importe necesario del repositorio de Lote con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\LoteRepository;

class CreateLoteUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de Lote 
    public function __construct(LoteRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase Lote
    public function createLote(array $attributes = []): Lote
    {
        //creacion de un objeto de la entidad de dominio
        $Lote = new Lote();
        
            $Lote->id_lote = $attributes['id_lote'];
            $Lote->fecha_expiracion = $attributes['fecha_expiracion'];
            $Lote->precio_compra = $attributes['precio_compra'];
            $Lote->cantidad= $attributes['cantidad'];
            $Lote->precio= $attributes['precio'];
            $Lote->subtotal= $attributes['subtotal'];
            $Lote->id_compra = $attributes['id_compra'];
            $Lote->id_producto = $attributes['id_producto'];

        //Regresa un Lote con datos vacios
        return $Lote;
    }
}