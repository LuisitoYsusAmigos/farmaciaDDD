@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('/proveedor/update/'.$proveedor->idProveedor) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Proveedor.form');
        </form>
    </div>
@endsection