<?php 

namespace App\DDD\Domain\Inventario\Entities;


//Clase Proveedor de Dominio
class Proveedor
{
    public $idProveedor;
    public $nombreProveedor;
    public $email;
    public $direccion;
    public $ruc;

    //Funcion de constructor de la clase Proveedor
    public function __construct(
        //Valores por defecto en caso de no pasar argumentos
        $idProveedor = null,
        $nombreProveedor = null,
        $email = null,
        $direccion = null,
        $ruc = null
    )
    {
        //Asignacion de los valores a la clase Proveedor
        $this->idProveedor = $idProveedor;
        $this->nombreProveedor = $nombreProveedor;
        $this->email = $email;
        $this->direccion = $direccion;
        $this->ruc = $ruc;
    }
}