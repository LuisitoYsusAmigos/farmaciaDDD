<?php 

namespace App\DDD\Application\Laboratorio\UseCases;

use App\DDD\Domain\Inventario\Entities\Laboratorio;
use App\DDD\Domain\Inventario\Ports\LaboratorioRepository;

class AddLaboratorioUseCase
{
    protected $repository;

    //Asignacion del repositorio de proveedor para uso de sus funciones
    public function __construct(LaboratorioRepository $repositorio)
    {
        $this->repository = $repositorio;
    }

    //Funcion booleana de adicion de un proveedor a la base de datos
    public function addLaboratorio(Laboratorio $laboratorio): bool
    {
        return $this->repository->addLaboratorio($laboratorio);
    }
}