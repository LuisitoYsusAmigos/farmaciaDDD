<?php

namespace App\Http\Controllers;

use App\DDD\Application\Producto\UseCases\AddProductoUseCase;
use App\DDD\Application\Producto\UseCases\GetAllProductoUseCase;
use App\DDD\Application\Producto\UseCases\GetProductoUseCase;
use App\DDD\Application\Producto\UseCases\UpdateProductoUseCase;
use App\DDD\Application\Producto\UseCases\DeleteProductoUseCase;
use App\Http\Requests\StoreProductoRequest;

use App\DDD\Domain\Inventario\Entities\Producto;
use App\DDD\Infrastructure\Repository\ProductoRepositoryImpl;
use DomainException;
use InvalidArgumentException;
use Symfony\Component\Routing\Exception\InvalidParameterException;

use App\DDD\Application\Producto\UseCases\CreateProductoUseCase;


class ProductoController extends Controller
{
    public function index()
    {
        $GetAllProductoUseCase = new GetAllProductoUseCase(new ProductoRepositoryImpl());
        $producto = $GetAllProductoUseCase->getProductoAll();
        //dd($producto);
        return view('producto.index', [
            'producto' => $producto
        ]);

    }

    public function create()
    {
        return view('producto.create');
    }

    //funcion del controlador para ingresar un registro de proveedor a la base de datos
    public function store(StoreProductoRequest $request)
    {
        //dd($request->all());
         //valida los datos ingresados
         $validated = $request->validated();
         //dd($validated);
         //el parametro de repositorio que se debe pasar al controlador instanciado
         $productoRepository = new ProductoRepositoryImpl();
 
         //instancia el caso de uso crear proveedor que devuelve un proveedor con los datos del formulario
         $casoDeUsoCrearProducto = new CreateProductoUseCase($productoRepository);
 
         //realiza la accion del caso de uso crear un proveedor
         $producto = $casoDeUsoCrearProducto->createProducto($validated); 
 
         //se crea una instancia del caso de uso agregar proveedor
         $casoDeUsoAgregarProducto = new AddProductoUseCase($productoRepository);
         
 
         if($casoDeUsoAgregarProducto->addProducto($producto))
         {
             return redirect()->route('producto.index')->with('success','Producto Creado Exitosamente');
         }
         else
         {
             throw new DomainException('No se pudo crear al proveedor');   
         }




    }

    public function show()
    {

    }

    public function edit($idProducto)
    {
        $repository = new ProductoRepositoryImpl();
        $casoDeUsoGetProducto = new GetProductoUseCase($repository);
        $producto = $casoDeUsoGetProducto->getProducto($idProducto);
        if(empty($producto)){
            throw new InvalidArgumentException('Producto no existe');
        }
        return view('producto.edit',['producto' => $producto]);

    }

    public function update(StoreProductoRequest $request, string $idProducto)
    {
        $validated = $request->validated();
        $productoRepository = new ProductoRepositoryImpl();
        $casoDeUsoGetProveedor= new GetProductoUseCase($productoRepository);
        $producto = $casoDeUsoGetProveedor->GetProducto($idProducto);
        //$proveedor->idProveedor = $request->idProveedor;
        $producto->nombreProducto= $request->nombre_producto; 
        $producto->stock= $request->stock; 
        $producto->stockMinimo= $request->stock_minimo; 
        $producto->presentacion= $request->presentacion; 
        $producto->medida= $request->medida; 
        $producto->restriccionVenta= $request->restriccion_venta; 
        $producto->descripcion= $request->descripcion; 
        $producto->locacion= $request->locacion; 
        $producto->codigoBarras= $request->codigo_barras;
        $producto->idLaboratorio= $request->id_laboratorio;
        $producto->idCategoria= $request->id_categoria;
        //dd($producto);
        $casoDeUsoActuaizarProducto = new UpdateProductoUseCase($productoRepository);
        if($casoDeUsoActuaizarProducto->UpdateProducto($idProducto, $producto)){
                return redirect()->route('producto.index')->with('success','');
        }else{
            throw new DomainException('no se pudo actualizar');
        }

    }

    public function destroy(string $idProducto)
    {
        $productoRepository = new ProductoRepositoryImpl();
        $casoDeUsoEliminarProducto = new DeleteProductoUseCase($productoRepository);

        if ($casoDeUsoEliminarProducto->DeleteProducto($idProducto)) {
        return redirect()->route('producto.index')->with('success', 'Producto eliminado exitosamente');
        } else {
        throw new DomainException('No se pudo eliminar el proveedor');
        }
    }
}    