<?php
//namespace de los casos de uso
namespace App\DDD\Application\Categoria\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Categoria;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\CategoriaRepository;

class UpdateCategoriaUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de proveedor 
    public function __construct(CategoriaRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase proveedor
    public function UpdateCategoria($id, Categoria $categoria)
    {
        //dd($categoria);

        return $this->repository->updateCategoria($id, $categoria);
    }
}