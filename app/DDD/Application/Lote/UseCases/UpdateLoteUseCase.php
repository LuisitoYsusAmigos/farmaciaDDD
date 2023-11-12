<?php

namespace App\DDD\Application\Lote\UseCases;

use App\DDD\Domain\Inventario\Entities\Lote;
use App\DDD\Domain\Inventario\Ports\LoteRepository;



class UpdateLoteUseCase
{
    protected $repository;

    public function __construct(LoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function updateLote($id ,Lote $Lote)
    {
        return $this->repository->updateLote($id, $Lote);  
    }
}