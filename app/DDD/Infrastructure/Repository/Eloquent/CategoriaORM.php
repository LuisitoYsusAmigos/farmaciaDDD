<?php

namespace App\DDD\Infrastructure\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;

class CategoriaORM extends Model
{
    protected $table = 'categoria';  // nombre de la tabla en la bd

    protected $fillable = ['id','nombre'];
}
