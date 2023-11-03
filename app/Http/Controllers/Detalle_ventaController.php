<?php

namespace App\Http\Controllers;

use App\DDD\Application\Detalle_venta\UseCases\UpdateDetalle_ventaUseCase;
use DomainException;
use InvalidArgumentException;

use App\Http\Requests\StoreDetalle_ventaRequest;
use App\DDD\Domain\Inventario\Entities\Detalle_venta;
use App\DDD\Infrastructure\Repository\Detalle_ventaRepositoryImpl;
use App\DDD\Application\Detalle_venta\UseCases\AddDetalle_ventaUseCase;
use App\DDD\Application\Detalle_venta\UseCases\CreateDetalle_ventaUseCase;

use Symfony\Component\Routing\Exception\InvalidParameterException;
use App\DDD\Application\Detalle_venta\UseCases\GetAllDetalle_ventaUseCase;
use App\DDD\Application\Detalle_venta\UseCases\GetDetalle_ventaUseCase;
use App\DDD\Application\Detalle_venta\UseCases\DeleteDetalle_ventaUseCase;

class Detalle_ventaController extends Controller
{
    public function index()
    {
        //echo "hola mundo";
       // die();

        $GetAllDetalle_ventaUseCase = new GetAllDetalle_ventaUseCase(new Detalle_ventaRepositoryImpl());
        $detalle_ventas = $GetAllDetalle_ventaUseCase->getDetalle_ventaAll();
        //echo "informacion";
        //dd($detalle_ventas);
        //die();
        return view('Detalle_venta.index', [
            'Detalle_ventas' => $detalle_ventas
        ]);
    }

    public function create()
    {
        
        return view('Detalle_venta.create');
    }

    //funcion del controlador para ingresar un registro de Detalle_venta a la base de datos
    public function store(StoreDetalle_ventaRequest $request)
    {
      
        //valida los datos ingresados
        $validated = $request->validated();
        
        //dd($validated);
        //dd($validated);
        //die();
        //el parametro de repositorio que se debe pasar al controlador instanciado
        $Detalle_ventaRepository = new Detalle_ventaRepositoryImpl();

        //instancia el caso de uso crear Detalle_venta que devuelve un Detalle_venta con los datos del formulario
        $casoDeUsoCrearDetalle_venta = new CreateDetalle_ventaUseCase($Detalle_ventaRepository);
        //dd($Detalle_ventaRepository);
        //realiza la accion del caso de uso crear un Detalle_venta
        $Detalle_venta = $casoDeUsoCrearDetalle_venta->createDetalle_venta($validated); 

        //se crea una instancia del caso de uso agregar Detalle_venta
        $casoDeUsoAgregarDetalle_venta = new AddDetalle_ventaUseCase($Detalle_ventaRepository);
        //dd($Detalle_venta);
        if($casoDeUsoAgregarDetalle_venta->addDetalle_venta($Detalle_venta))
        {
            return redirect()->route('detalle_venta.index')->with('success','Detalle_venta Creado Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo crear al Detalle_venta');   
        }
    }

    public function show()
    {

    }

    public function edit($id)
    {
        
        $Detalle_ventaRepository = new Detalle_ventaRepositoryImpl();

        $casoDeUsoGetDetalle_venta = new GetDetalle_ventaUseCase($Detalle_ventaRepository);

        $Detalle_venta = $casoDeUsoGetDetalle_venta->getDetalle_venta($id);

        if(empty($Detalle_venta))
        {
            throw new InvalidParameterException('El Detalle_venta no existe');
        }

        return view('Detalle_venta.edit', ['Detalle_venta' =>$Detalle_venta]);   

    }

    public function update(StoreDetalle_ventaRequest $request, string $id)
    {
        dd($request);
        die();
        $Detalle_ventaRepository = new Detalle_ventaRepositoryImpl();

        $casoDeUsoGetDetalle_venta = new GetDetalle_ventaUseCase($Detalle_ventaRepository);

        $Detalle_venta = $casoDeUsoGetDetalle_venta->getDetalle_venta($id);

        //$Detalle_venta->idDetalle_venta = $request->idDetalle_venta;

        $Detalle_venta->id_detalle_venta = $request->id_detalle_venta;
        $Detalle_venta->subtotal=$request->subtotal;
        $Detalle_venta->utilidad=$request->utilidad;
        $Detalle_venta->cantidad=$request->cantidad;
        $Detalle_venta->precio=$request->precio;
        $Detalle_venta->id_producto=$request->id_producto;
        $Detalle_venta->id_venta=$request->id_venta;
        


        $casoDeUsoUpdateDetalle_venta = new UpdateDetalle_ventaUseCase($Detalle_ventaRepository);
        
        if($casoDeUsoUpdateDetalle_venta->updateDetalle_venta($id, $Detalle_venta))
        {
        
           return redirect()->route('Detalle_venta.index')->with('success','Detalle_venta Modificado Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo modificar el Detalle_venta');
        }


    }

    public function delete($id)
    {
        
        $detalle_ventaRepository = new Detalle_ventaRepositoryImpl();

        $casoDeUsoDeleteProveedor = new DeleteDetalle_ventaUseCase($detalle_ventaRepository);
        
        if($casoDeUsoDeleteProveedor->deleteDetalle_venta($id))
        {
            return redirect()->route('detalle_venta.index')->with('success','El detalle venta se elimino exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo eliminar al detalle ');   
        }
    }

}
