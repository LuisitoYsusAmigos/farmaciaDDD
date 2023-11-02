@extends('layouts.app')
@section('content')
<a href="producto/create">crear</a>

<?php 
//print_r($producto);
?>

<table class="table table-light">
    <thead class="thead-light">
      <tr>
        
        <th>id</th>
        <th>Nombre Producto</th>
        <th>stock</th>
        <th>stockMinimo</th>
        <th>presentacion</th>
        <th>medida</th>
        <th>restriccionVenta</th>
        <th>descripcion</th>
        <th>locacion</th>
        <th>codigoBarras</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($producto as $producto )
        <tr>
        <?php 
        //dd($producto);
        ?>
            <td>{{$producto->idProducto }}</td>
            <td>{{$producto->nombreProducto}}</td>
            <td>{{$producto->stock}}</td>
            <td>{{$producto->stockMinimo}}</td>
            <td>{{$producto->presentacion }}</td>
            <td>{{$producto->medida}}</td>
            <td>{{$producto->restriccionVenta }}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->locacion}}</td>
            <td>{{$producto->codigoBarras}}</td>
            <?php 
        //dd($producto->nombreProducto);
        ?>
            <td>
                <a href="{{url('/producto/'.$producto->idProducto.'/edit')}}" class="btn btn-warning">Editar</a> 
                
               <form action="{{ url('/producto/'.$producto->idProducto) }}" method="POST" class="d-inline">
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