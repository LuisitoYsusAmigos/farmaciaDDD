<?php
//namespace de los casos de uso
namespace App\DDD\Application\Categoria\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Categoria;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\CategoriaRepository;

class DeleteCategoriaUseCase
{
    protected $repository;

    public function __construct(CategoriaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function DeleteCategoria(string $idCategoria)
    {

        return $this->repository->deleteCategoria($idCategoria);
    }
}