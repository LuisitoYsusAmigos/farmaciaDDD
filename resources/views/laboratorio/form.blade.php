<form action="{{ url('/laboratorio') }}" method="POST" enctype="multipart/form-data">

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
        <input type="text" class="form-control  @error('id_laboratorio') is-invalid @enderror" name="id_laboratorio" placeholder="Identificador" value="{{ old('id_laboratorio') }}">
        @error('id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--nombre_proveedor-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Nombre del Laboratorio</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('nombre_laboratorio') is-invalid @enderror" name="nombre_laboratorio" placeholder="Nombre Completo" value="{{ old('nombre_laboratorio') }}">
        @error('nombre_laboratorio')
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