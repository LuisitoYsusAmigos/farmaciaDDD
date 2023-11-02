<?php
//namespace de los casos de uso
namespace App\DDD\Application\Categoria\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Categoria;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\CategoriaRepository;

class CreateCategoriaUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de proveedor 
    public function __construct(CategoriaRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase proveedor
    public function createCategoria(array $attributes = []): Categoria
    {
        //creacion de un objeto de la entidad de dominio
        $categoria = new Categoria();
        $categoria->idCategoria = $attributes['id'];
        $categoria->nombreCategoria = $attributes['nombre'];

        //Regresa un Proveedor con datos vacios
        return $categoria;
    }
}