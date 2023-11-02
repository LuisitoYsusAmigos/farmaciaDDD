<?php 

namespace App\DDD\Infrastructure\Repository\Eloquent;
use Illuminate\Database\Eloquent\Model;

class CompraORM extends Model
{
    protected $table = "compra";

    protected $primaryKey ="id_lote";
    protected $fillable = [
                            "id_lote",
                            //"fecha_expiracion",
                            "precio_compra",
                            "cantidad",
                            "precio",
                            "subtotal",
                            "id_proveedor"
                          ];
}