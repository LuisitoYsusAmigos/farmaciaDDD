@extends('layouts.app')
@section('content')
<a href="venta/create">crear</a>

<?php 
//print_r($producto);
?>

<table class="table table-light">
    <thead class="thead-light">
      <tr>
        
        <th>id</th>
        <th>Descuento</th>
        <th>igv</th>
        <th>PrecioTotal</th>
        <th>FechaVenta</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($venta as $venta )
        <tr>
        
            <td>{{$venta->idVenta }}</td>
            <td>{{$venta->descuento}}</td>
            <td>{{$venta->igv}}</td>
            <td>{{$venta->precioTotal}}</td>
            <td>{{$venta->fechaVenta }}</td>
            <?php 
        //dd($producto->nombreProducto);
        ?>
            <td>
                <a href="{{url('/venta/'.$venta->idVenta.'/edit')}}" class="btn btn-warning">Editar</a> 
                
               <form action="{{ url('/venta/'.$venta->idVenta) }}" method="POST" class="d-inline">
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