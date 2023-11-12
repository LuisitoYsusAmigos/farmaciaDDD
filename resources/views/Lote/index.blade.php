<?php 
//dd($lotes);
?>
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
                <th>id producto</th>
                <th>opciones</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($lotes as $lote )
                <tr>
                    <td>{{$lote->id_lote }}</td>
                    <td>{{$lote->fecha_expiracion}}</td>
                    <td>{{$lote->precio_compra}}</td>
                    <td>{{$lote->cantidad}}</td>
                    <td>{{$lote->precio}}</td>
                    <td>{{$lote->subtotal}}</td>
                    <td>{{$lote->id_compra}}</td>
                    <td>{{$lote->id_producto}}</td>

                    <td>
                        <a href="{{url('/lote/edit/'.$lote->id_lote)}}" class="btn btn-warning">Editar</a> 
                        
                       <form action="{{ url('/lote/delete/'.$lote->id_lote) }}" method="POST" class="d-inline">
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