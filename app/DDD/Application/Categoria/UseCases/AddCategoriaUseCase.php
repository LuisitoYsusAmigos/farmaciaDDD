<?php 

namespace App\DDD\Application\Categoria\UseCases;

use App\DDD\Domain\Inventario\Entities\Categoria;
use App\DDD\Domain\Inventario\Ports\CategoriaRepository;

class AddCategoriaUseCase
{
    protected $repository;

    //Asignacion del repositorio de categoria para uso de sus funciones
    public function __construct(CategoriaRepository $repositorio)
    {
        $this->repository = $repositorio;
    }

    //Funcion booleana de adicion de categoria a la base de datos
    public function addCategoria(Categoria $categoria): bool
    {
        return $this->repository->addCategoria($categoria);
    }
}