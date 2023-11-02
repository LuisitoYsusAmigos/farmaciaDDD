<?php 
print_r($venta);
?>

<div class="container">


<form action="{{ route('venta.update', ['id' => $venta->idVenta ]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    @include('venta.form')
</form>
</div>