@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('/lote/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Lote.form')
        </form>
    </div>
@endsection