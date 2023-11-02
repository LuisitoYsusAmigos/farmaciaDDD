<?php 

namespace App\DDD\Application\Cliente\UseCases;
use App\DDD\Domain\Inventario\Entities\Cliente;
use App\DDD\Domain\Inventario\Ports\ClienteRepository;

class GetClienteUseCase
{
    protected $repository;

    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getCliente($id): Cliente|null
    {
        return $this->repository->getCliente($id);
    }
}