<?php

namespace App\DDD\Domain\Inventario\Entities;

class Categoria {
    public $idCategoria;
    public $nombreCategoria;

    public function __construct(
        $idCategoria = null,
        $nombreCategoria = null
    )
    {
        $this->idCategoria = $idCategoria;
        $this->nombreCategoria = $nombreCategoria;
    }

    //<form action="{{ url('/categoria/'.$categoria->id) }}" method="POST" enctype="multipart/form-data">
}