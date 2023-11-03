@extends('layouts.app')
@section('content')
    <div class="container">
        
        <form action="{{ url('/detalle_venta/update/'.$detalle_venta->id_detalle_venta) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('detalle_venta.form');
        </form>
           
        
    </div>
@endsection