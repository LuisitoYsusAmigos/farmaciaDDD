<?php
//namespace de los casos de uso
namespace App\DDD\Application\Producto\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Producto;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\ProductoRepository;

class CreateProductoUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de proveedor 
    public function __construct(ProductoRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase proveedor
    public function createProducto(array $attributes = []): Producto
    {
        //creacion de un objeto de la entidad de dominio
        $producto = new Producto();
        $producto->idProducto = $attributes['id'];
        $producto->nombreProducto = $attributes['nombre_producto'];
        $producto->stock = $attributes['stock'];
        $producto->stockMinimo = $attributes['stock_minimo'];
        $producto->presentacion = $attributes['presentacion'];
        $producto->medida = $attributes['medida'];
        $producto->restriccionVenta = $attributes['restriccion_venta'];
        $producto->descripcion = $attributes['descripcion'];
        $producto->locacion = $attributes['locacion'];
        $producto->codigoBarras = $attributes['codigo_barras'];
        $producto->idLaboratorio = $attributes['id_laboratorio'];
        $producto->idCategoria = $attributes['id_categoria'];

        //Regresa un Proveedor con datos vacios
        return $producto;
    }
}




        