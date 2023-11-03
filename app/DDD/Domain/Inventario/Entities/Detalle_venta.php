<?php 

namespace App\DDD\Domain\Inventario\Entities;

/*
id_detalle_venta int primary key,
subtotal double,
utilidad double,
cantidad int,
precio double,
id_producto int,
id_venta int
*/
//Clase Proveedor de Dominio
class Detalle_venta
{
    public $id_detalle_venta;
    public $subtotal;
    public $utilidad;
    public $cantidad;
    public $precio;
    public $id_producto;
    public $id_venta;
    

    //Funcion de constructor de la clase Proveedor
    public function __construct(


    $id_detalle_venta = null,
    $subtotal = null,
    $utilidad = null,
    $cantidad = null,
    $precio = null,
    $id_producto = null,
    $id_venta = null
    
    )
    {
        //Asignacion de los valores a la clase Proveedor
        $this->id_detalle_venta = $id_detalle_venta;
        $this->subtotal = $subtotal;
        $this->utilidad = $utilidad;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->id_producto = $id_producto;
        $this->id_venta = $id_venta;
    }
}