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
        <a href="/lote/create" class="btn btn-success">Agregar lote</a>
        </div>
        


        <table class="table table-light">
            <thead class="thead-light">
              <tr>
                <th>id</th>
                <th>fecha de expiracion </th>
                <th>precio de compra</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>sub total</th>
                <th>id compra</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($lotes as $lote )
                <tr>
                    <td>{{ $lote->idlote }}</td>
                    <td>{{$lote->nombrelote}}</td>
                    <td>{{$lote->email}}</td>
                    <td>{{$lote->direccion}}</td>
                    <td>{{$lote->ruc}}</td>
                    <td>
                        <a href="{{url('/lote/edit/'.$lote->idlote)}}" class="btn btn-warning">Editar</a> 
                        
                       <form action="{{ url('/lote/delete/'.$lote->idlote) }}" method="POST" class="d-inline">
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
