

@extends('layouts.app')
@section('content')
<body>
    <div class="container">

Detalle venta
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="mb-3 mt-3">
        <a href="/detalle_venta/create" class="btn btn-success">Agregar detalle_venta</a>
        </div>
        


        <table class="table table-light">
            <thead class="thead-light">
              <tr>
                
                <th>id_detalle_venta</th>
                <th>subtotal </th>
                <th>utilidad</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>opciones</th>

                
              </tr>
            </thead>
            <tbody>
                @foreach ($Detalle_ventas as $detalle_venta )
                <tr>
                    <td>{{$detalle_venta->id_detalle_venta }}</td>
                    <td>{{$detalle_venta->subtotal}}</td>
                    <td>{{$detalle_venta->utilidad}}</td>
                    <td>{{$detalle_venta->cantidad}}</td>
                    <td>{{$detalle_venta->precio}}</td>
                    <td>
                        <a href="{{url('/detalle_venta/edit/'.$detalle_venta->id_detalle_venta)}}" class="btn btn-warning">Editar</a> 
                        
                       <form action="{{ url('/detalle_venta/delete/'.$detalle_venta->id_detalle_venta) }}" method="POST" class="d-inline">
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
   
</body>
@endsection
