<?php

namespace App\DDD\Domain\Inventario\Entities;

class Venta {
    public $idVenta;
    public $descuento;
    public $igv;
    public $precioTotal;
    public $fechaVenta;
    public $idCliente;
    public $idUsuario;

    public function __construct(
        $idVenta = null,
        $descuento = null,
        $igv = null,
        $precioTotal = null,
        $fechaVenta = null,
        $idCliente = null,
        $idUsuario = null
    )
    {
        $this->idVenta = $idVenta;
        $this->descuento = $descuento;
        $this->igv = $igv;
        $this->precioTotal = $precioTotal;
        $this->fechaVenta = $fechaVenta;
        $this->idCliente = $idCliente;
        $this->idUsuario = $idUsuario;
    }
}