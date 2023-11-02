<?php

namespace App\DDD\Application\Compra\UseCases;
use App\DDD\Domain\Inventario\Entities\Compra;
use App\DDD\Domain\Inventario\Ports\CompraRepository;

class CreateCompraUseCase
{
    protected $repository;
    public function __construct(CompraRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createCompra(array $attributes = []): Compra
    {
        $compra = new Compra();
        $compra->idLote = $attributes['id_lote'];
        //$compra->fechaExpiracion = $attributes['fecha_expiracion'];
        $compra->precioCompra = $attributes['precio_compra'];
        $compra->cantidad = $attributes['cantidad'];
        $compra->precio = $attributes['precio'];
        $compra->subtotal = $attributes['subtotal'];
        $compra->idProveedor = $attributes['id_proveedor'];
        return $compra;
    }
}