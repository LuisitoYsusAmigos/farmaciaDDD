<?php

namespace App\DDD\Domain\Inventario\Ports;
use App\DDD\Domain\Inventario\Entities\Cliente;

interface ClienteRepository
{
    public function addCliente(Cliente $cliente): bool;   

    public function updateCliente($id, Cliente $cliente): bool;

    public function deleteCliente($id): bool;

    public function getCliente($id): Cliente|null;

    public function getClienteAll(): array;
}