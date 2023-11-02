@extends('layouts.app')
@section('content')
<body>
    <div class="container">


        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="mb-3 mt-3">
        <a href="/compra/create" class="btn btn-success">Agregar Compra</a>
        </div>
    

        <table class="table table-light">
            <thead class="thead-light">
              <tr>
                <th>ID Lote</th>
                <th>Precio de Compra</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
                <th>id Proveedor</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($compras as $compra )
                <tr>
                    <td>{{$compra->idLote}}</td>
                    <td>{{$compra->precioCompra}}</td>
                    <td>{{$compra->cantidad}}</td>
                    <td>{{$compra->precio}}</td>
                    <td>{{$compra->subtotal}}</td>
                    <td>{{$compra->idProveedor}}</td>
                    <td>
                        <a href="{{url('/compra/edit/'.$compra->idLote)}}" class="btn btn-warning">Editar</a> 
                        
                       <form action="{{ url('/compra/delete/'.$compra->idLote) }}" method="POST" class="d-inline">
                           @csrf
                           <input type="submit" onclick="return confirm('¿Realmente deseas borrar?')" value="Borrar" class="btn btn-danger">
                       </form>
                   </td>
        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
</body>
@endsection
