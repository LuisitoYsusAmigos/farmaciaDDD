<?php 

namespace App\DDD\Infrastructure\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

class LoteORM extends Model
{
    protected $table = 'lote';
    
    protected $primaryKey = 'id_lote';

    protected $fillable = ['id_lote','fecha_expiracion','precio_compra','cantidad','precio','subtotal','id_compra','id_producto'];
    public $timestamps = false;
}