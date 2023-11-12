<?php 

namespace App\DDD\Application\Lote\UseCases;
use App\DDD\Domain\Inventario\Entities\Lote;
//use App\DDD\Domain\Inventario\Ports\LoteRepository;
use App\DDD\Domain\Inventario\Ports\LoteRepository;


class GetLoteUseCase
{
    protected $repository;

    public function __construct(LoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getLote($id): Lote|null
    {
        return $this->repository->getLote($id);
    }
}