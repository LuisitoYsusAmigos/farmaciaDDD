<?php

namespace App\DDD\Infrastructure\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

class LaboratorioORM extends Model
{
    protected $table = 'laboratorio';  // nombre de la tabla en la bd

    protected $fillable = ['id','nombre_laboratorio'];

    //ublic $timestamps = false;

    //public $incrementing = false;
}
