<?php 

namespace App\DDD\Application\Categoria\UseCases;

use App\DDD\Domain\Inventario\Ports\CategoriaRepository;

class GetCategoriaUseCase
{
    protected $repository;
    public function __construct(CategoriaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function GetCategoria($id)
    {
        return $this->repository->getCategoria($id);
    }
}