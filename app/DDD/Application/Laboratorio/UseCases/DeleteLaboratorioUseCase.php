<?php
//namespace de los casos de uso
namespace App\DDD\Application\Laboratorio\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Laboratorio;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\LaboratorioRepository;

class DeleteLaboratorioUseCase
{
    protected $repository;

    public function __construct(LaboratorioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function DeleteLaboratorio(string $idLaboratorio)
    {

        return $this->repository->deleteLaboratorio($idLaboratorio);
    }
}