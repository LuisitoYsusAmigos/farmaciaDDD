<?php 
print_r($categoria);
?>

<div class="container">


<form action="{{ route('categoria.update', ['id' => $categoria->idCategoria ]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    @include('categoria.form')
</form>
</div>

