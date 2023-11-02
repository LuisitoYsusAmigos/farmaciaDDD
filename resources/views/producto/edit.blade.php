<?php 
print_r($producto);
?>

<div class="container">


<form action="{{ route('producto.update', ['id' => $producto->idProducto ]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    @include('producto.form')
</form>
</div>