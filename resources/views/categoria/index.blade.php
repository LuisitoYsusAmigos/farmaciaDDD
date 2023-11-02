@extends('layouts.app')
@section('content')
<a href="categoria/create">crear</a>

<?php 
//print_r($categoria);
?>

<table class="table table-light">
    <thead class="thead-light">
      <tr>
        
        <th>id</th>
        <th>Nombre categoria</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($categoria as $categoria )
        
        <tr>
            <td>{{ $categoria->idCategoria }}</td>
            <td>{{$categoria->nombreCategoria}}</td>
            <td>
                <a href="{{url('/categoria/'.$categoria->idCategoria.'/edit')}}" class="btn btn-warning">Editar</a> 
                
               <form action="{{ url('/categoria/'.$categoria->idCategoria) }}" method="POST" class="d-inline">
                   @csrf
                   {{@method_field('DELETE')}}
                   <input type="submit" onclick="return confirm('¿Realmente deseas borrar?')" value="Borrar" class="btn btn-danger">
               
               </form>
           </td>

        </tr>
        @endforeach
    </tbody>
  </table>

</div>