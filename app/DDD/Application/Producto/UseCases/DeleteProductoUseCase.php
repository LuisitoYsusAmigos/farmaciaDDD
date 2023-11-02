<?php
//namespace de los casos de uso
namespace App\DDD\Application\Producto\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Producto;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\ProductoRepository;

class DeleteProductoUseCase
{
    protected $repository;

    public function __construct(ProductoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function DeleteProducto(string $idProducto)
    {

        return $this->repository->deleteProducto($idProducto);
    }
}