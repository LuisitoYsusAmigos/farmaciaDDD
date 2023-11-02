@extends('layouts.app')
@section('content')
<a href="laboratorio/create">crear</a>

<?php 
//print_r($laboratorio);
?>

<table class="table table-light">
    <thead class="thead-light">
      <tr>
        
        <th>id</th>
        <th>Nombre laboratorio</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($laboratorio as $laboratorio )
        <tr>
            <td>{{ $laboratorio->idLaboratorio }}</td>
            <td>{{$laboratorio->nombreLaboratorio}}</td>
            <td>
                <a href="{{url('/laboratorio/'.$laboratorio->idLaboratorio.'/edit')}}" class="btn btn-warning">Editar</a> 
                
               <form action="{{ url('/laboratorio/'.$laboratorio->idLaboratorio) }}" method="POST" class="d-inline">
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