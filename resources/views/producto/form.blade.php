<form action="{{ url('/producto') }}" method="POST" enctype="multipart/form-data">

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
    <label class="col-sm-1 col-form-label">Nombre del Producto</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('nombre_producto') is-invalid @enderror" name="nombre_producto" placeholder="Nombre Completo" value="{{ old('nombre_producto') }}">
        @error('nombre_producto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--stock-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Stock</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('stock') is-invalid @enderror" name="stock" placeholder="stock" value="{{ old('stock') }}">
        @error('stock')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--stock minimo-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Stock Minimo</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('stock_minimo') is-invalid @enderror" name="stock_minimo" placeholder="stock_minimo" value="{{ old('stock_minimo') }}">
        @error('stock_minimo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--presentacion-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Presentacion</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('presentacion') is-invalid @enderror" name="presentacion" placeholder="presentacion" value="{{ old('presentacion') }}">
        @error('presentacion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--medida-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Medida</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('stock') is-invalid @enderror" name="medida" placeholder="medida" value="{{ old('medida') }}">
        @error('medida')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--restriccion venta-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Restriccion Venta</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('restriccion_venta') is-invalid @enderror" name="restriccion_venta" placeholder="restriccion_venta" value="{{ old('restriccion_venta') }}">
        @error('restriccion_venta')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--descripcion-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Descripcion</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('descripcion') is-invalid @enderror" name="descripcion" placeholder="descripcion" value="{{ old('descripcion') }}">
        @error('descripcion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--locacion-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Locacion</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('locacion') is-invalid @enderror" name="locacion" placeholder="locacion" value="{{ old('locacion') }}">
        @error('locacion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--codigo de barras-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">Codigo de Barras</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('codigo_barras') is-invalid @enderror" name="codigo_barras" placeholder="codigo_barras" value="{{ old('codigo_barras') }}">
        @error('codigo_barras')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--idlaboratorio-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">IdLaboratorio</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('id_laboratorio') is-invalid @enderror" name="id_laboratorio" placeholder="id_laboratorio" value="{{ old('id_laboratorio') }}">
        @error('id_laboratorio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!--idcategoria-->
<div class="row mb-3">
    <label class="col-sm-1 col-form-label">IdCategoria</label>
    <div class="col-sm-4">
        <input type="text" class="form-control  @error('id_categoria') is-invalid @enderror" name="id_categoria" placeholder="id_categoria" value="{{ old('id_categoria') }}">
        @error('id_categoria')
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