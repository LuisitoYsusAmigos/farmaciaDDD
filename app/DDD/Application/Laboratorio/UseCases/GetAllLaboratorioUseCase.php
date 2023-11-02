<?php 

namespace App\DDD\Application\Laboratorio\UseCases;

use App\DDD\Domain\Inventario\Ports\LaboratorioRepository;

class GetAllLaboratorioUseCase
{
    protected $repository;
    public function __construct(LaboratorioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getLaboratorioAll(): array
    {
        return $this->repository->getLaboratorioAll();
    }
}