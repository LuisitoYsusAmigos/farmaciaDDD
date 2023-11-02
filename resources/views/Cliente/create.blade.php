@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('/cliente/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Cliente.form')
        </form>
    </div>
@endsection