<?php

namespace App\DDD\Domain\Inventario\Entities;

class Producto {
    public $idProducto;
    public $nombreProducto;
    public $stock;
    public $stockMinimo;
    public $presentacion;
    public $medida;
    public $restriccionVenta;
    public $descripcion;
    public $locacion;
    public $codigoBarras;

    public $idLaboratorio;

    public $idCategoria;

    public function __construct(
        $idProducto = null,
        $nombreProducto = null,
        $stock = null,
        $stockMinimo = null,
        $presentacion = null,
        $medida = null,
        $restriccionVenta = null,
        $descripcion = null,
        $locacion = null,
        $codigoBarras = null,
        $idLaboratorio = null,
        $idCategoria = null
    )
    {
        $this->idProducto = $idProducto;
        $this->nombreProducto = $nombreProducto;
        $this->stock = $stock;
        $this->stockMinimo = $stockMinimo;
        $this->presentacion = $presentacion;
        $this->medida = $medida;
        $this->restriccionVenta = $restriccionVenta;
        $this->descripcion = $descripcion;
        $this->locacion = $locacion;
        $this->codigoBarras = $codigoBarras;
        $this->idLaboratorio = $idLaboratorio;
        $this->idCategoria = $idCategoria;
    }
}