@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('/detalle_venta/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Detalle_venta.form')
        </form>
    </div>
@endsection