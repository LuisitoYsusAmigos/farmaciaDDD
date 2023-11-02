@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('/cliente/update/'.$cliente->ci) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Cliente.form');
        </form>
    </div>
@endsection