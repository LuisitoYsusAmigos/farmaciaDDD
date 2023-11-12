<?php

namespace App\DDD\Application\Lote\UseCases;
use App\DDD\Domain\Inventario\Ports\LoteRepository;

class DeleteLoteUseCase
{
    protected $repository;

    public function __construct(LoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function deleteLote($id)
    {
        return $this->repository->deleteLote($id);
    }
}