<?php

namespace App\Http\Controllers;
use DomainException;
use App\Http\Requests\StoreCompraRequest;

use App\DDD\Application\Compra\UseCases\AddCompraUsecase;
use App\DDD\Application\Compra\UseCases\GetCompraUseCase;
use App\DDD\Infrastructure\Repository\CompraRepositoryImpl;
use App\DDD\Application\Compra\UseCases\CreateCompraUseCase;
use App\DDD\Application\Compra\UseCases\DeleteCompraUseCase;
use App\DDD\Application\Compra\UseCases\UpdateCompraUseCase;
use App\DDD\Application\Compra\UseCases\GetAllComprasUseCase;
use Symfony\Component\Routing\Exception\InvalidParameterException;

class CompraController extends Controller
{
    public function index()
    {
        $GetAllComprasUseCase = new GetAllComprasUseCase(new CompraRepositoryImpl);
        $compras = $GetAllComprasUseCase->getCompraAll();
        return view('Compra.index', [
            'compras' => $compras
        ]); 
    }
    public function create()
    {
        return view('Compra.create');
    }
    public function store(StoreCompraRequest $request)
    {
        $validated = $request->validated();
        $compraRepository = new CompraRepositoryImpl();
        $casoDeUsoCrearCompra = new CreateCompraUseCase($compraRepository);
        $compra = $casoDeUsoCrearCompra->createCompra($validated);
        $casoDeUsoAgregarCompra = new AddCompraUsecase($compraRepository);

        if($casoDeUsoAgregarCompra->addCompra($compra)) 
        {
            return redirect()->route('compra.index')->with('success','Compra registrada exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo realizar la compra');
        } 
    }
    public function show()
    {

    }
    public function edit($id)
    {
        $clienteRepository = new CompraRepositoryImpl();

        $casoDeUsoGetCompra = new GetCompraUseCase($clienteRepository);

        $compra = $casoDeUsoGetCompra->getCompra($id); //$casoDeUsoGetProveedor->getProveedor($id);

        if(empty($compra))
        {
            throw new InvalidParameterException('La compra no existe');
        }

        return view('Compra.edit', ['compra' =>$compra]);   

    }

    public function update(StoreCompraRequest $request, string $id)
    {
        $compraRepository = new CompraRepositoryImpl();

        $casoDeUsoGetCompra = new GetCompraUseCase($compraRepository);

        $compra = $casoDeUsoGetCompra->getCompra($id);

        //$cliente->idCliente = $id;
        $compra->precioCompra = $request->precio_compra;
        $compra->cantidad = $request->cantidad;
        $compra->precio = $request->precio;
        $compra->subtotal = $request->subtotal;
        $compra->idProveedor = $request->id_proveedor;

        $casoDeUsoUpdateCompra = new UpdateCompraUseCase($compraRepository);
        
        if($casoDeUsoUpdateCompra->updateCompra($id, $compra))
        {
        
           return redirect()->route('compra.index')->with('success','Compra Modificada Exitosamente');
        }
        else
        {
            throw new DomainException('No se pudo modificar la compra');
        }
    }

    public function delete($id)
    {
        $clientesRepository = new CompraRepositoryImpl();

        $casoDeUsoDeleteCliente = new DeleteCompraUseCase($clientesRepository);

        if($casoDeUsoDeleteCliente->deleteCompra($id))
        {
            return redirect()->route('compra.index')->with('success','La compra fue se elimino correctamente');
        }
        else
        {
            throw new DomainException('La compra no pudo ser eliminada');
        }
    }
}