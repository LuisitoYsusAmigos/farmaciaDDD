<?php 

namespace App\DDD\Application\Categoria\UseCases;

use App\DDD\Domain\Inventario\Ports\CategoriaRepository;

class GetAllCategoriaUseCase
{
    protected $repository;
    public function __construct(CategoriaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getCategoriaAll(): array
    {
        return $this->repository->getCategoriaAll();
    }
}