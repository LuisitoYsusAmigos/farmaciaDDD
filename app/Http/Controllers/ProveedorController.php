<?php

namespace App\Http\Controllers;

use App\DDD\Application\Proveedor\UseCases\DeleteProveedorUseCase;
use App\DDD\Application\Proveedor\UseCases\UpdateProveedorUseCase;
use DomainException;
use InvalidArgumentException;

use App\Http\Requests\StoreProveedorRequest;
use App\DDD\Domain\Inventario\Entities\Proveedor;
use App\DDD\Infrastructure\Repository\ProveedorRepositoryImpl;
use App\DDD\Application\Proveedor\UseCases\AddProveedorUseCase;
use App\DDD\Application\Proveedor\UseCases\CreateProveedorUseCase;

use Symfony\Component\Routing\Exception\InvalidParameterException;
use App\DDD\Application\Proveedor\UseCases\GetAllProveedorsUseCase;
use App\DDD\Application\Proveedor\UseCases\GetProveedorUseCase;

class ProveedorController extends Controller
{
    public function index()
    {
        $GetAllProveedorsUseCase = new GetAllProveedorsUseCase(new ProveedorRepositoryImpl());
        $provedores = $GetAllProveedorsUseCase->getProveedorAll();
        return view('Proveedor.index', [
            'proveedores' => $provedores
        ]);
    }

    public function create()
    {
        return view('Proveedor.create');
    }

    //funcion del controlador para ingresar un registro de proveedor a la base de datos
    public function store(StoreProveedorRequest $request)
    {
        //valida los datos ingresados
        $validated = $request->validated();
        
        //el parametro de repositorio que se debe pasar al controlador instanciado
        $proveedorRepository = new ProveedorRepositoryImpl();

        //instancia el caso de uso crear proveedor que devuelve un proveedor con los datos del formulario
        $casoDeUsoCrearProveedor = new CreateProveedorUseCase($proveedorRepository);

        //realiza la accion del caso de uso crear un proveedor
        $proveedor = $casoDeUsoCrearProveedor->createProveedor($validated); 

        //se crea una instancia del caso de uso agregar proveedor
        $casoDeUsoAgregarProveedor = new AddProveedorUseCase($proveedorRepository);

        if($casoDeUsoAgregarProveedor->addProveedor($proveedor))
        {
            return redirect()->route('proveedor.index')->with('success','Proveedor Creado Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo crear al proveedor');   
        }




    }

    public function show()
    {

    }

    public function edit($id)
    {
        $ProveedorRepository = new ProveedorRepositoryImpl();

        $casoDeUsoGetProveedor = new GetProveedorUseCase($ProveedorRepository);

        $proveedor = $casoDeUsoGetProveedor->getProveedor($id);

        if(empty($proveedor))
        {
            throw new InvalidParameterException('El proveedor no existe');
        }

        return view('Proveedor.edit', ['proveedor' =>$proveedor]);   

    }

    public function update(StoreProveedorRequest $request, string $id)
    {
        $proveedorRepository = new ProveedorRepositoryImpl();

        $casoDeUsoGetProveedor = new GetProveedorUseCase($proveedorRepository);

        $proveedor = $casoDeUsoGetProveedor->getProveedor($id);

        //$proveedor->idProveedor = $request->idproveedor;
        $proveedor->nombreProveedor = $request->nombre_proveedor;
        $proveedor->email = $request->email;
        $proveedor->direccion = $request->direccion;
        $proveedor->ruc = $request->ruc;

        $casoDeUsoUpdateProveedor = new UpdateProveedorUseCase($proveedorRepository);
        
        if($casoDeUsoUpdateProveedor->updateProveedor($id, $proveedor))
        {
        
           return redirect()->route('proveedor.index')->with('success','Proveedor Modificado Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo modificar el proveedor');
        }


    }

    public function delete($id)
    {
        $proveedorRepository = new ProveedorRepositoryImpl();

        $casoDeUsoDeleteProveedor = new DeleteProveedorUseCase($proveedorRepository);

        if($casoDeUsoDeleteProveedor->deleteProveedor($id))
        {
            return redirect()->route('proveedor.index')->with('success','El proveedor se elimino exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo eliminar al proveedor');   
        }
    }

}
