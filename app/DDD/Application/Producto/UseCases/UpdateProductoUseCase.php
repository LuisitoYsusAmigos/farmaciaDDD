<?php
//namespace de los casos de uso
namespace App\DDD\Application\Producto\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Producto;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\ProductoRepository;

class UpdateProductoUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de proveedor 
    public function __construct(ProductoRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase proveedor
    public function UpdateProducto($id, Producto $producto)
    {
        //dd($categoria);

        return $this->repository->updateProducto($id, $producto);
    }
}