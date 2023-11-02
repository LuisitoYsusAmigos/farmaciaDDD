<?php

namespace App\DDD\Infrastructure\Repository;
use App\DDD\Domain\Inventario\Entities\Cliente;
use App\DDD\Domain\Inventario\Ports\ClienteRepository;
use App\DDD\Infrastructure\Repository\Eloquent\ClienteORM;

class ClienteRespositoryImpl implements ClienteRepository
{
    public function addCliente(Cliente $cliente): bool
    {
        $model = new CLienteORM([
            //'id_cliente' => $cliente->idCliente,
            'ci' => $cliente->ci,
            'nombre_cliente' => $cliente->nombreCliente,
            'apellido_cliente' => $cliente->apellidoCliente,
            'email' => $cliente->email,
            'telefono' => $cliente->telefono,
            'referencia' => $cliente->referencia,
            'direccion' => $cliente->direccion
        ]);

        return $model->save();
    } 

    public function updateCliente($id, Cliente $cliente): bool
    {
        $model = ClienteORM::query()->findOrFail($id);
        return $model->update(
            [
                //'idproveedor' => $cliente->idCliente,
                'nombre_cliente' => $cliente->nombreCliente,
                'apellido_cliente' => $cliente->apellidoCliente,
                'email' => $cliente->email,
                'telefono' => $cliente->telefono,
                'referencia' => $cliente->referencia,
                'direccion' => $cliente->direccion
            ]);
    }

    public function deleteCliente($id): bool
    {
        $affected = ClienteORM::destroy($id);
        return $affected > 0;
    }

    public function getCliente($id): Cliente|null
    {
        $model = CLienteORM::query()->findOrFail($id);
        return $this->makeClienteFrom($model);
    }

    public function getClienteAll(): array
    {
        $list = [];

        foreach (ClienteORM::all() as $model)
        {
            $list[$model->id_cliente] = $this->makeClienteFrom($model);
        }
        return $list;
    }

    protected function makeClienteFrom(ClienteORM $cliente):Cliente
    {
        return new Cliente(
                //$cliente->id_cliente, 
                $cliente->ci, 
                $cliente->apellido_cliente,
                $cliente->nombre_cliente, 
                $cliente->email,
                $cliente->telefono,
                $cliente->referencia,
                $cliente->direccion
            );
    }
}