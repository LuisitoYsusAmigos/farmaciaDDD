<?php

namespace App\Http\Controllers;

use App\DDD\Application\Lote\UseCases\DeleteLoteUseCase;
use App\DDD\Application\Lote\UseCases\UpdateLoteUseCase;
use DomainException;
use InvalidArgumentException;

use App\Http\Requests\StoreLoteRequest;
use App\DDD\Domain\Inventario\Entities\Lote;
use App\DDD\Infrastructure\Repository\LoteRepositoryImpl;
use App\DDD\Application\Lote\UseCases\AddLoteUseCase;
use App\DDD\Application\Lote\UseCases\CreateLoteUseCase;

use Symfony\Component\Routing\Exception\InvalidParameterException;
use App\DDD\Application\Lote\UseCases\GetAllLotesUseCase;
use App\DDD\Application\Lote\UseCases\GetLoteUseCase;

class LoteController extends Controller
{
    public function index()
    {
        $GetAllLotesUseCase = new GetAllLotesUseCase(new LoteRepositoryImpl());
        $provedores = $GetAllLotesUseCase->getLoteAll();
        return view('Lote.index', [
            'Lotees' => $provedores
        ]);
    }

    public function create()
    {
        return view('Lote.create');
    }

    //funcion del controlador para ingresar un registro de Lote a la base de datos
    public function store(StoreLoteRequest $request)
    {
        //valida los datos ingresados
        $validated = $request->validated();
        
        //el parametro de repositorio que se debe pasar al controlador instanciado
        $LoteRepository = new LoteRepositoryImpl();

        //instancia el caso de uso crear Lote que devuelve un Lote con los datos del formulario
        $casoDeUsoCrearLote = new CreateLoteUseCase($LoteRepository);

        //realiza la accion del caso de uso crear un Lote
        $Lote = $casoDeUsoCrearLote->createLote($validated); 

        //se crea una instancia del caso de uso agregar Lote
        $casoDeUsoAgregarLote = new AddLoteUseCase($LoteRepository);

        if($casoDeUsoAgregarLote->addLote($Lote))
        {
            return redirect()->route('Lote.index')->with('success','Lote Creado Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo crear al Lote');   
        }




    }

    public function show()
    {

    }

    public function edit($id)
    {
        $LoteRepository = new LoteRepositoryImpl();

        $casoDeUsoGetLote = new GetLoteUseCase($LoteRepository);

        $Lote = $casoDeUsoGetLote->getLote($id);

        if(empty($Lote))
        {
            throw new InvalidParameterException('El Lote no existe');
        }

        return view('Lote.edit', ['Lote' =>$Lote]);   

    }

    public function update(StoreLoteRequest $request, string $id)
    {
        $LoteRepository = new LoteRepositoryImpl();

        $casoDeUsoGetLote = new GetLoteUseCase($LoteRepository);

        $Lote = $casoDeUsoGetLote->getLote($id);

        //$Lote->idLote = $request->idLote;
        $Lote->nombreLote = $request->nombre_Lote;
        $Lote->email = $request->email;
        $Lote->direccion = $request->direccion;
        $Lote->ruc = $request->ruc;

        $casoDeUsoUpdateLote = new UpdateLoteUseCase($LoteRepository);
        
        if($casoDeUsoUpdateLote->updateLote($id, $Lote))
        {
        
           return redirect()->route('Lote.index')->with('success','Lote Modificado Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo modificar el Lote');
        }


    }

    public function delete($id)
    {
        $LoteRepository = new LoteRepositoryImpl();

        $casoDeUsoDeleteLote = new DeleteLoteUseCase($LoteRepository);

        if($casoDeUsoDeleteLote->deleteLote($id))
        {
            return redirect()->route('Lote.index')->with('success','El Lote se elimino exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo eliminar al Lote');   
        }
    }

}
