<?php

namespace App\DDD\Application\Cliente\UseCases;

use App\DDD\Domain\Inventario\Entities\Cliente;
use App\DDD\Domain\Inventario\Ports\ClienteRepository;

class UpdateClienteUseCase
{
    protected $repository;

    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function updateCliente($id ,Cliente $cliente)
    {
        return $this->repository->updateCliente($id, $cliente);  
    }
}