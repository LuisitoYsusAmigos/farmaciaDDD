<form action="{{ url('/categoria') }}" method="POST" enctype="multipart/form-data">

@csrf
<!--Cada uno de los atributos de proveedor para el formulario-->
<!--idproveedor-->

<!--<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Cedula de identidad</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('idproveedor') is-invalid @enderror" name="idproveedor" placeholder="Cedula de Identidad" value="{{ old('idproveedor') }}">
        @error('idproveedor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>-->

<!--email-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Id</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('id') is-invalid @enderror" name="id" placeholder="Identificador" value="{{ old('id') }}">
        @error('id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--nombre_proveedor-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Nombre de la Categoria</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('nombre') is-invalid @enderror" name="nombre" placeholder="Nombre Completo" value="{{ old('nombre') }}">
        @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--Boton de guardar en la vista-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label"></label>
    <div class="col-sm-4">
        <button type="submit" class="btn btn-success btn-block text-white">Guardar</button>
    </div>
</div>


</form>
