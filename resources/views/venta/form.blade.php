<form action="{{ url('/venta') }}" method="POST" enctype="multipart/form-data">

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
        <input type="text" class="form-control  @error('id_venta') is-invalid @enderror" name="id_venta" placeholder="Identificador" value="{{ old('id_venta') }}">
        @error('id_venta')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--nombre_proveedor-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Descuento</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('descuento') is-invalid @enderror" name="descuento" placeholder="Descuento" value="{{ old('descuento') }}">
        @error('descuento')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--stock-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Igv</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('igv') is-invalid @enderror" name="igv" placeholder="igv" value="{{ old('igv') }}">
        @error('igv')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--stock minimo-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Precio Total</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('precio_total') is-invalid @enderror" name="precio_total" placeholder="precio_total" value="{{ old('precio_total') }}">
        @error('precio_total')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--presentacion-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Fecha Venta</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('fecha_venta') is-invalid @enderror" name="fecha_venta" placeholder="fecha_venta" value="{{ old('fecha_venta') }}">
        @error('fecha_venta')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--idlaboratorio-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">IdCliente</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('id_cliente') is-invalid @enderror" name="id_cliente" placeholder="id_cliente" value="{{ old('id_cliente') }}">
        @error('id_cliente')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--idcategoria-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">IdUsuario</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('id_usuario') is-invalid @enderror" name="id_usuario" placeholder="id_usuario" value="{{ old('id_usuario') }}">
        @error('id_usuario')
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