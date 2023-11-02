<?php 

namespace App\DDD\Application\Laboratorio\UseCases;

use App\DDD\Domain\Inventario\Ports\LaboratorioRepository;

class GetLaboratorioUseCase
{
    protected $repository;
    public function __construct(LaboratorioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function GetLaboratorio($id)
    {
        return $this->repository->getLaboratorio($id);
    }
}