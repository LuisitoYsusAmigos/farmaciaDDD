<?php

namespace App\Http\Controllers;

use App\DDD\Application\Venta\UseCases\AddVentaUseCase;
use App\DDD\Application\Venta\UseCases\GetAllVentaUseCase;
use App\DDD\Application\Venta\UseCases\GetVentaUseCase;
use App\DDD\Application\Venta\UseCases\UpdateVentaUseCase;
use App\DDD\Application\Venta\UseCases\DeleteVentaUseCase;
use App\Http\Requests\StoreVentaRequest;

use App\DDD\Domain\Inventario\Entities\Venta;
use App\DDD\Infrastructure\Repository\VentaRepositoryImpl;
use DomainException;
use InvalidArgumentException;
use Symfony\Component\Routing\Exception\InvalidParameterException;

use App\DDD\Application\Venta\UseCases\CreateVentaUseCase;


class VentaController extends Controller
{
    public function index()
    {
        $GetAllVentaUseCase = new GetAllVentaUseCase(new VentaRepositoryImpl());
        $venta = $GetAllVentaUseCase->getVentaAll();
        //dd($producto);
        return view('venta.index', [
            'venta' => $venta
        ]);

    }

    public function create()
    {
        return view('venta.create');
    }

    //funcion del controlador para ingresar un registro de proveedor a la base de datos
    public function store(StoreVentaRequest $request)
    {
        //dd($request->all());
         //valida los datos ingresados
         $validated = $request->validated();
         //dd($validated);
         //el parametro de repositorio que se debe pasar al controlador instanciado
         $ventaRepository = new VentaRepositoryImpl();
 
         //instancia el caso de uso crear proveedor que devuelve un proveedor con los datos del formulario
         $casoDeUsoCrearVenta = new CreateVentaUseCase($ventaRepository);
 
         //realiza la accion del caso de uso crear un proveedor
         $venta = $casoDeUsoCrearVenta->createVenta($validated); 
 
         //se crea una instancia del caso de uso agregar proveedor
         $casoDeUsoAgregarVenta = new AddVentaUseCase($ventaRepository);
         
        //dd($venta);
         if($casoDeUsoAgregarVenta->addVenta($venta))
         {
             return redirect()->route('venta.index')->with('success','Venta Creado Exitosamente');
         }
         else
         {
             throw new DomainException('No se pudo crear al proveedor');   
         }




    }

    public function show()
    {

    }

    public function edit($idVenta)
    {
        $repository = new VentaRepositoryImpl();
        $casoDeUsoGetVenta = new GetVentaUseCase($repository);
        $venta = $casoDeUsoGetVenta->getVenta($idVenta);
        if(empty($venta)){
            throw new InvalidArgumentException('Venta no existe');
        }
        return view('venta.edit',['venta' => $venta]);

    }

    public function update(StoreVentaRequest $request, string $idVenta)
    {
        //dd($request);
        $validated = $request->validated();
        $ventaRepository = new VentaRepositoryImpl();
        $casoDeUsoGetVenta= new GetVentaUseCase($ventaRepository);
        $venta = $casoDeUsoGetVenta->GetVenta($idVenta);
        //$proveedor->idProveedor = $request->idProveedor;
        $venta->descuento= $request->descuento; 
        $venta->igv= $request->igv; 
        $venta->precioTotal= $request->precio_total; 
        $venta->fechaVenta= $request->fecha_venta; 
        $venta->idCliente= $request->id_cliente;
        $venta->idUsuario= $request->id_usuario;
        //dd($venta);
        $casoDeUsoActuaizarVenta = new UpdateVentaUseCase($ventaRepository);
        if($casoDeUsoActuaizarVenta->UpdateVenta($idVenta, $venta)){
                return redirect()->route('venta.index')->with('success','');
        }else{
            throw new DomainException('no se pudo actualizar');
        }

    }

    public function destroy(string $idVenta)
    {
        $ventaRepository = new VentaRepositoryImpl();
        $casoDeUsoEliminarVenta = new DeleteVentaUseCase($ventaRepository);

        if ($casoDeUsoEliminarVenta->DeleteVenta($idVenta)) {
        return redirect()->route('venta.index')->with('success', 'Venta eliminada exitosamente');
        } else {
        throw new DomainException('No se pudo eliminar el proveedor');
        }
    }
}