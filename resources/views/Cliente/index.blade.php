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
        <a href="/cliente/create" class="btn btn-success">Agregar Cliente</a>
        </div>
        


        <table class="table table-light">
            <thead class="thead-light">
              <tr>
                <th>ci</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Referencia</th>
                <th>Direccion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente )
                <tr>
                    <td>{{ $cliente->ci }}</td>
                    <td>{{$cliente->nombreCliente}}</td>
                    <td>{{$cliente->apellidoCliente}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->referencia}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>
                        <a href="{{url('/cliente/edit/'.$cliente->ci)}}" class="btn btn-warning">Editar</a> 
                        
                       <form action="{{ url('/cliente/delete/'.$cliente->ci) }}" method="POST" class="d-inline">
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
