<?php 

namespace App\DDD\Domain\Inventario\Entities;


//Clase Lote de Dominio
class Lote
{
    public $id_lote;
    public $fecha_expiracion;
    public $precio_compra;
    public $cantidad;
    public $precio;
    public $subtotal;
    public $id_compra;
    public $id_producto;
    
    //Funcion de constructor de la clase Lote
    public function __construct(
        //Valores por defecto en caso de no pasar argumentos
        $id_lote = null,
        $fecha_expiracion = null,
        $precio_compra = null,
        $cantidad = null,
        $precio = null,
        $subtotal = null,
        $id_compra = null,
        $id_producto = null,
        
    )
    {
        //Asignacion de los valores a la clase Lote
        $this->id_lote = $id_lote;
        $this->fecha_expiracion = $fecha_expiracion;
        $this->precio_compra = $precio_compra;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->subtotal = $subtotal;
        $this->id_compra = $id_compra;
        $this->id_producto = $id_producto;
        



    }
}