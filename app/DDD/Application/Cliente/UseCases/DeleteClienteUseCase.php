<?php

namespace App\DDD\Application\Cliente\UseCases;
use App\DDD\Domain\Inventario\Ports\ClienteRepository;

class DeleteClienteUseCase
{
    protected $repository;

    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function deleteCliente($id): bool
    {
        return $this->repository->deleteCliente($id);
    }
}