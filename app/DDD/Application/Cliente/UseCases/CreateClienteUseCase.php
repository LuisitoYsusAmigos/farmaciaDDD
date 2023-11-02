<?php

namespace App\DDD\Application\Cliente\UseCases;
use App\DDD\Domain\Inventario\Entities\Cliente;
use App\DDD\Domain\Inventario\Ports\ClienteRepository;

class CreateClienteUseCase
{
    protected $repository;
    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createCliente(array $attributes = []): Cliente
    {
        $proveedor = new Cliente();
        //$proveedor->idCliente = $attributes['id_cliente'];
        $proveedor->ci = $attributes['ci'];
        $proveedor->nombreCliente = $attributes['nombre_cliente'];
        $proveedor->apellidoCliente = $attributes['apellido_cliente'];
        $proveedor->email = $attributes['email'];
        $proveedor->telefono = $attributes['telefono'];
        $proveedor->referencia = $attributes['referencia'];
        $proveedor->direccion = $attributes['direccion'];

        return $proveedor;
    }
}