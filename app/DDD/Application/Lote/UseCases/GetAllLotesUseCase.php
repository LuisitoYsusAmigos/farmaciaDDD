<?php 

namespace App\DDD\Application\Lote\UseCases;

use App\DDD\Domain\Inventario\Ports\LoteRepository;

class GetAllLotesUseCase
{
    protected $repository;
    public function __construct(LoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getLoteAll(): array
    {
        return $this->repository->getLoteAll();
    }
}
