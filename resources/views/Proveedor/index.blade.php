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
        <a href="/proveedor/create" class="btn btn-success">Agregar Proveedor</a>
        </div>
        


        <table class="table table-light">
            <thead class="thead-light">
              <tr>
                
                <th>id</th>
                <th>Nombre proveedor</th>
                <th>email</th>
                <th>dirrecion</th>
                <th>ruc</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor )
                <tr>
                    <td>{{ $proveedor->idProveedor }}</td>
                    <td>{{$proveedor->nombreProveedor}}</td>
                    <td>{{$proveedor->email}}</td>
                    <td>{{$proveedor->direccion}}</td>
                    <td>{{$proveedor->ruc}}</td>
                    <td>
                        <a href="{{url('/proveedor/edit/'.$proveedor->idProveedor)}}" class="btn btn-warning">Editar</a> 
                        
                       <form action="{{ url('/proveedor/delete/'.$proveedor->idProveedor) }}" method="POST" class="d-inline">
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
