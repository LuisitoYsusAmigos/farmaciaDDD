@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('/compra/update/'.$compra->idLote) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Compra.form');
        </form>
    </div>
@endsection