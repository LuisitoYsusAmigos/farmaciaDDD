<?php 

namespace App\DDD\Domain\Inventario\Entities;

class Cliente
{
    //public $idCliente;
    public $ci;
    public $nombreCliente;
    public $apellidoCliente;
    public $email;
    public $telefono;
    public $referencia;
    public $direccion;
    public function __construct
    (
        //$idCliente = null,
        $ci = null,
        $nombreCliente = null,
        $apellidoCliente = null,
        $email = null,
        $telefono = null,
        $referencia = null,
        $direccion = null
    )
    {
        //$this->idCliente = $idCliente;
        $this->ci = $ci;
        $this->nombreCliente = $nombreCliente;
        $this->apellidoCliente = $apellidoCliente;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->referencia = $referencia;
        $this->direccion = $direccion;
    }
}