<?php 
print_r($laboratorio);
?>

<div class="container">


<form action="{{ route('laboratorio.update', ['id' => $laboratorio->idLaboratorio ]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    @include('laboratorio.form')
</form>
</div>