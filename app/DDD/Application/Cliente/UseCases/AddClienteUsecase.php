<?php 

namespace App\DDD\Application\Cliente\UseCases;
use App\DDD\Domain\Inventario\Entities\Cliente;
use App\DDD\Domain\Inventario\Ports\ClienteRepository;

class AddClienteUsecase
{
    protected $repository;
    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function addProveedor(Cliente $cliente): bool
    {
        return $this->repository->addCliente($cliente);
    }
}