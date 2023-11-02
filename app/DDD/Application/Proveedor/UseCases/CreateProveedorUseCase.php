<?php
//namespace de los casos de uso
namespace App\DDD\Application\Proveedor\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Proveedor;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\ProveedorRepository;

class CreateProveedorUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de proveedor 
    public function __construct(ProveedorRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase proveedor
    public function createProveedor(array $attributes = []): Proveedor
    {
        //creacion de un objeto de la entidad de dominio
        $proveedor = new Proveedor();
        $proveedor->idProveedor = $attributes['idproveedor'];
        $proveedor->nombreProveedor = $attributes['nombre_proveedor'];
        $proveedor->email = $attributes['email'];
        $proveedor->direccion = $attributes['direccion'];
        $proveedor->ruc = $attributes['ruc'];

        //Regresa un Proveedor con datos vacios
        return $proveedor;
    }
}