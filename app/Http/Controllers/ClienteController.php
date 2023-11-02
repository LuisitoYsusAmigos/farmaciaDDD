<?php

namespace App\Http\Controllers;
use DomainException;
use App\Http\Requests\StoreClienteRequest;
use App\DDD\Application\Cliente\UseCases\AddClienteUsecase;
use App\DDD\Application\Cliente\UseCases\GetClienteUseCase;
use App\DDD\Infrastructure\Repository\ClienteRespositoryImpl;
use App\DDD\Application\Cliente\UseCases\CreateClienteUseCase;
use App\DDD\Application\Cliente\UseCases\DeleteClienteUseCase;
use App\DDD\Application\Cliente\UseCases\UpdateClienteUseCase;
use App\DDD\Application\Cliente\UseCases\GetAllClientesUseCase;
use Symfony\Component\Routing\Exception\InvalidParameterException;

class ClienteController extends Controller
{
    public function index()
    {
        $GetAllProveedorsUseCase = new GetAllClientesUseCase(new ClienteRespositoryImpl);
        $clientes = $GetAllProveedorsUseCase->getClienteAll();
        return view('Cliente.index', [
            'clientes' => $clientes
        ]);
    }

    public function create()
    {
        return view('Cliente.create');
    }

    public function store(StoreClienteRequest $request)
    {
        $validated = $request->validated();
        $clienteRepository = new ClienteRespositoryImpl();
        $casoDeUsoCrearCliente = new CreateClienteUseCase($clienteRepository);
        $cliente = $casoDeUsoCrearCliente->createCliente($validated);
        $casoDeUsoAgregarCliente = new AddClienteUsecase($clienteRepository);
        if($casoDeUsoAgregarCliente->addProveedor($cliente)) 
        {
            return redirect()->route('cliente.index')->with('success','Cliente Creado Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo crear al cliente');
        }
    }

    public function show()
    {

    }

    public function edit($id)
    {
        $clienteRepository = new ClienteRespositoryImpl();

        $casoDeUsoGetCliente = new GetClienteUseCase($clienteRepository);

        $cliente = $casoDeUsoGetCliente->getCliente($id); //$casoDeUsoGetProveedor->getProveedor($id);

        if(empty($cliente))
        {
            throw new InvalidParameterException('El Cliente no existe');
        }

        return view('cliente.edit', ['cliente' =>$cliente]);   

    }

    public function update(StoreClienteRequest $request, string $id)
    {
        $clienteRepository = new ClienteRespositoryImpl();

        $casoDeUsoGetCliente = new GetClienteUseCase($clienteRepository);

        $cliente = $casoDeUsoGetCliente->getCliente($id);

        //$cliente->idCliente = $id;
        $cliente->ci = $request->ci;
        $cliente->apellidoCliente = $request->apellido_cliente;
        $cliente->nombreCliente = $request->nombre_cliente;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->referencia = $request->referencia;
        $cliente->direccion = $request->direccion;

        $casoDeUsoUpdateCliente = new UpdateClienteUseCase($clienteRepository);
        
        if($casoDeUsoUpdateCliente->updateCliente($id, $cliente))
        {
        
           return redirect()->route('cliente.index')->with('success','Cliente Modificado Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo modificar al cliente');
        }
    }

    public function delete($id)
    {
        $clientesRepository = new ClienteRespositoryImpl();

        $casoDeUsoDeleteCliente = new DeleteClienteUseCase($clientesRepository);

        if($casoDeUsoDeleteCliente->deleteCliente($id))
        {
            return redirect()->route('cliente.index')->with('success','El Cliente se elimino correctamente');
        }
        else
        {
            throw new DomainException('El cliente no pudo ser eliminado');
        }



    }
}