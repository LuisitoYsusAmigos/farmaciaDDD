<?php 

namespace App\DDD\Infrastructure\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Detalle_ventaORM extends Model
{
    protected $table = 'Detalle_venta';
    
    protected $primaryKey = 'id_detalle_venta';

    protected $fillable = ['id_detalle_venta','subtotal','utilidad','cantidad','precio','id_producto','id_venta'];

    public $timestamps = false;
}