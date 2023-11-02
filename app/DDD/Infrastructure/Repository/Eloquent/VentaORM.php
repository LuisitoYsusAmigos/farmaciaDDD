<?php

namespace App\DDD\Infrastructure\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

class VentaORM extends Model
{
    protected $table = 'venta';  // nombre de la tabla en la bd

    protected $primaryKey ="id_venta";

    protected $fillable = ['id_venta','descuento','igv','precio_total','fecha_venta','id_cliente','id_usuario'];

    //public $timestamps = false;

    //public $incrementing = false;
}