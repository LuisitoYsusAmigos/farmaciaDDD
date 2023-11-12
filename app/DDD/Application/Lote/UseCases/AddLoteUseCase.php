<?php 

namespace App\DDD\Application\Lote\UseCases;

use App\DDD\Domain\Inventario\Entities\Lote;
use App\DDD\Domain\Inventario\Ports\LoteRepository;

class AddLoteUseCase
{
    protected $repository;

    //Asignacion del repositorio de Lote para uso de sus funciones
    public function __construct(LoteRepository $repositorio)
    {
        $this->repository = $repositorio;
    }

    //Funcion booleana de adicion de un Lote a la base de datos
    public function addLote(Lote $Lote): bool
    {
        //dd($Lote);
        return $this->repository->addLote($Lote);
    }
}