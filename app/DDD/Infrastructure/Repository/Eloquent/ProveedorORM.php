<?php 

namespace App\DDD\Infrastructure\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

class ProveedorORM extends Model
{
    protected $table = 'proveedor';
    
    protected $primaryKey = 'idproveedor';

    protected $fillable = ['idproveedor','nombre_proveedor','email','direccion','ruc'];
}