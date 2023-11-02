<?php

namespace App\DDD\Infrastructure\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

class ProductoORM extends Model
{
    protected $table = 'producto';  // nombre de la tabla en la bd

    protected $fillable = ['id','nombre_producto','stock','stock_minimo','presentacion','medida','restriccion_venta','descripcion','locacion','codigo_barras','id_laboratorio','id_categoria'];

    //public $timestamps = false;

    //public $incrementing = false;
}
