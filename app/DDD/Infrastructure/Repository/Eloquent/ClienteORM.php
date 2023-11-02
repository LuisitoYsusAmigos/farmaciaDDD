<?php 

namespace App\DDD\Infrastructure\Repository\Eloquent;
use Illuminate\Database\Eloquent\Model;

class ClienteORM extends Model
{
    protected $table = "cliente";

    protected $primaryKey ="ci";
    protected $fillable = [
                            //"id_cliente",
                            "ci",
                            "apellido_cliente"
                            ,"nombre_cliente"
                            ,"email"
                            ,"telefono"
                            ,"referencia"
                            ,"direccion"
                            ];
}

