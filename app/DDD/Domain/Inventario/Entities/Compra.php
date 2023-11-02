<?php 

namespace App\DDD\Domain\Inventario\Entities;

class Compra
{
    public $idLote;
    //public $nombreProveedor;
    //public $fechaExpiracion;
    public $precioCompra;
    public $cantidad;
    public $precio;
    public $subtotal;
    public $idProveedor;
    
    public function __construct
    (
        $idLote = null,
        //$nombreProveedor = null,
        //$fechaExpiracion = null,
        $precioCompra = null,
        $cantidad = null,
        $precio = null,
        $subtotal = null,
        $idProveedor = null
    )
    {
        $this->idLote = $idLote;
        //$this->nombreProveedor = $nombreProveedor;
        //$this->fechaExpiracion = $fechaExpiracion;
        $this->precioCompra = $precioCompra;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->subtotal = $subtotal;
        $this->idProveedor = $idProveedor;
    }
}