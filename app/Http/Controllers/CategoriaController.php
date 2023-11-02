<?php

namespace App\Http\Controllers;

use App\DDD\Application\Categoria\UseCases\AddCategoriaUseCase;
use App\DDD\Application\Categoria\UseCases\GetAllCategoriaUseCase;
use App\DDD\Application\Categoria\UseCases\UpdateCategoriaUseCase;
use App\DDD\Application\Categoria\UseCases\DeleteCategoriaUseCase;
use App\Http\Requests\StoreCategoriaRequest;

use App\DDD\Domain\Inventario\Entities\Categoria;
use App\DDD\Infrastructure\Repository\CategoriaRepositoryImpl;
use DomainException;
use InvalidArgumentException;
use Symfony\Component\Routing\Exception\InvalidParameterException;

use App\DDD\Application\Categoria\UseCases\CreateCategoriaUseCase;
use App\DDD\Application\Categoria\UseCases\GetCategoriaUseCase;

class CategoriaController extends Controller
{
    public function index()
    {
        $GetAllCategoriaUseCase = new GetAllCategoriaUseCase(new CategoriaRepositoryImpl());
        $categoria = $GetAllCategoriaUseCase->getCategoriaAll();
        return view('categoria.index', [
            'categoria' => $categoria
        ]);

    }

    public function create()
    {
        return view('categoria.create');
    }

    //funcion del controlador para ingresar un registro de proveedor a la base de datos
    public function store(StoreCategoriaRequest $request)
    {
        //dd($request->all());
        //valida los datos ingresados
        $validated = $request->validated();

        //el parametro de repositorio que se debe pasar al controlador instanciado
        $categoriaRepository = new CategoriaRepositoryImpl();

        //instancia el caso de uso crear proveedor que devuelve un proveedor con los datos del formulario
        $casoDeUsoCrearCategoria = new CreateCategoriaUseCase($categoriaRepository);

        //realiza la accion del caso de uso crear un proveedor
        $categoria = $casoDeUsoCrearCategoria->createCategoria($validated); 

        //se crea una instancia del caso de uso agregar proveedor
        $casoDeUsoAgregarCategoria = new AddCategoriaUseCase($categoriaRepository);
        //dd($categoria);

        if($casoDeUsoAgregarCategoria->addCategoria($categoria))
        {
            return redirect()->route('categoria.index')->with('success','Categoria Creada Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo crear la categoria');   
        }




    }

    public function show()
    {

    }

    public function edit($idCategoria)
    {
        $repository = new CategoriaRepositoryImpl();
        $casoDeUsoGetCategoria = new GetCategoriaUseCase($repository);
        $categoria = $casoDeUsoGetCategoria->getCategoria($idCategoria);
        if(empty($categoria)){
            throw new InvalidArgumentException('Categoria no existe');
        }
        return view('categoria.edit',['categoria' => $categoria]);

    }

    public function update(StoreCategoriaRequest $request, string $idCategoria)
    {
        $validated = $request->validated();
        
        $categoriaRepository = new CategoriaRepositoryImpl();
        $casoDeUsoGetProveedor= new GetCategoriaUseCase($categoriaRepository);
        $categoria = $casoDeUsoGetProveedor->GetCategoria($idCategoria);
        //$proveedor->idProveedor = $request->idProveedor;
        $categoria->nombreCategoria= $request->nombre; 
        //dd($categoriaRepository);
        $casoDeUsoActuaizarCategoria = new UpdateCategoriaUseCase($categoriaRepository);
        if($casoDeUsoActuaizarCategoria->UpdateCategoria($idCategoria, $categoria)){
                return redirect()->route('categoria.index')->with('success','');
        }else{
            throw new DomainException('no se pudo actualizar');
        }

    }

    public function destroy(string $idCategoria)
    {
        $categoriaRepository = new CategoriaRepositoryImpl();
        $casoDeUsoEliminarCategoria = new DeleteCategoriaUseCase($categoriaRepository);

        if ($casoDeUsoEliminarCategoria->DeleteCategoria($idCategoria)) {
        return redirect()->route('categoria.index')->with('success', 'Proveedor eliminado exitosamente');
        } else {
        throw new DomainException('No se pudo eliminar el proveedor');
        }
    }
}    