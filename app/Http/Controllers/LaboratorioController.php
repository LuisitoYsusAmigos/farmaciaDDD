<?php

namespace App\Http\Controllers;

use App\DDD\Application\Laboratorio\UseCases\AddLaboratorioUseCase;
use App\DDD\Application\Laboratorio\UseCases\GetAllLaboratorioUseCase;
use App\DDD\Application\Laboratorio\UseCases\GetLaboratorioUseCase;
use App\DDD\Application\Laboratorio\UseCases\UpdateLaboratorioUseCase;
use App\DDD\Application\Laboratorio\UseCases\DeleteLaboratorioUseCase;
use App\Http\Requests\StoreLaboratorioRequest;

use App\DDD\Domain\Inventario\Entities\Laboratorio;
use App\DDD\Infrastructure\Repository\LaboratorioRepositoryImpl;
use DomainException;
use InvalidArgumentException;
use Symfony\Component\Routing\Exception\InvalidParameterException;

use App\DDD\Application\Laboratorio\UseCases\CreateLaboratorioUseCase;


class LaboratorioController extends Controller
{
    public function index()
    {
        $GetAllLaboratorioUseCase = new GetAllLaboratorioUseCase(new LaboratorioRepositoryImpl());
        $laboratorio = $GetAllLaboratorioUseCase->getLaboratorioAll();
        return view('laboratorio.index', [
            'laboratorio' => $laboratorio
        ]);

    }

    public function create()
    {
        return view('laboratorio.create');
    }

    //funcion del controlador para ingresar un registro de proveedor a la base de datos
    public function store(StoreLaboratorioRequest $request)
    {
        //dd($request->all());
        //valida los datos ingresados
        $validated = $request->validated();

        //el parametro de repositorio que se debe pasar al controlador instanciado
        $laboratorioRepository = new LaboratorioRepositoryImpl();

        //instancia el caso de uso crear proveedor que devuelve un proveedor con los datos del formulario
        $casoDeUsoCrearLaboratorio = new CreateLaboratorioUseCase($laboratorioRepository);

        //realiza la accion del caso de uso crear un proveedor
        $laboratorio = $casoDeUsoCrearLaboratorio->createLaboratorio($validated); 

        //se crea una instancia del caso de uso agregar proveedor
        $casoDeUsoAgregarLaboratorio = new AddLaboratorioUseCase($laboratorioRepository);
        //dd($laboratorio);

        if($casoDeUsoAgregarLaboratorio->addLaboratorio($laboratorio))
        {
            return redirect()->route('laboratorio.index')->with('success','laboratorio Creada Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo crear la Laboratorio');   
        }




    }

    public function show()
    {

    }

    public function edit($idLaboratorio)
    {
        $repository = new LaboratorioRepositoryImpl();
        $casoDeUsoGetLaboratorio = new GetLaboratorioUseCase($repository);
        $laboratorio = $casoDeUsoGetLaboratorio->getLaboratorio($idLaboratorio);
        if(empty($laboratorio)){
            throw new InvalidArgumentException('Laboratorio no existe');
        }
        return view('laboratorio.edit',['laboratorio' => $laboratorio]);

    }

    public function update(StoreLaboratorioRequest $request, string $idLaboratorio)
    {
        $validated = $request->validated();
        
        $laboratorioRepository = new LaboratorioRepositoryImpl();
        $casoDeUsoGetLaboratorio= new GetLaboratorioUseCase($laboratorioRepository);
        $laboratorio = $casoDeUsoGetLaboratorio->GetLaboratorio($idLaboratorio);
        //$proveedor->idProveedor = $request->idProveedor;
        $laboratorio->nombreLaboratorio= $request->nombre_laboratorio; 
        //dd($laboratorio);
        $casoDeUsoActuaizarLaboratorio = new UpdateLaboratorioUseCase($laboratorioRepository);
        if($casoDeUsoActuaizarLaboratorio->UpdateLaboratorio($idLaboratorio, $laboratorio)){
                return redirect()->route('laboratorio.index')->with('success','');
        }else{
            throw new DomainException('no se pudo actualizar');
        }

    }

    public function destroy(string $idLaboratorio)
    {
        $laboratorioRepository = new LaboratorioRepositoryImpl();
        $casoDeUsoEliminarLaboratorio = new DeleteLaboratorioUseCase($laboratorioRepository);

        if ($casoDeUsoEliminarLaboratorio->DeleteLaboratorio($idLaboratorio)) {
        return redirect()->route('laboratorio.index')->with('success', 'Laboratorio eliminado exitosamente');
        } else {
        throw new DomainException('No se pudo eliminar el laboratorio');
        }
    }
}    