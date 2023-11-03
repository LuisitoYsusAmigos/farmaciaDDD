<?php 

namespace App\DDD\Infrastructure\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

class LoteORM extends Model
{
    protected $table = 'Lote';
    
    protected $primaryKey = 'id_lote';

    protected $fillable = ['id_lote','fecha_expiracion','precio_compras','cantidad','precio','subtotal','id_compra'];
}