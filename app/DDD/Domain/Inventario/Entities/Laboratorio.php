<?php

namespace App\DDD\Domain\Inventario\Entities;

class Laboratorio {
    public $idLaboratorio;
    public $nombreLaboratorio;

    public function __construct(
        $idLaboratorio = null, 
        $nombreLaboratorio = null
    )
    {
        $this->idLaboratorio = $idLaboratorio;
        $this->nombreLaboratorio = $nombreLaboratorio;
    }
}