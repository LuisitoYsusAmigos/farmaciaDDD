<?php 

namespace App\DDD\Application\Producto\UseCases;

use App\DDD\Domain\Inventario\Entities\Producto;
use App\DDD\Domain\Inventario\Ports\ProductoRepository;

class AddProductoUseCase
{
    protected $repository;

    //Asignacion del repositorio de proveedor para uso de sus funciones
    public function __construct(ProductoRepository $repositorio)
    {
        $this->repository = $repositorio;
    }

    //Funcion booleana de adicion de un proveedor a la base de datos
    public function addProducto(Producto $producto): bool
    {
        return $this->repository->addProducto($producto);
    }
}