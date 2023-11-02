<?php 

namespace App\DDD\Application\Cliente\UseCases;
use App\DDD\Domain\Inventario\Ports\ClienteRepository;

class GetAllClientesUseCase
{
    protected $repository;
    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getClienteAll(): array
    {
        return $this->repository->getClienteAll();
    }
}