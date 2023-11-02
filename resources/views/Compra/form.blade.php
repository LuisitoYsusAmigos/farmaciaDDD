


<div class="row mb-3">
    <label class="col-sm-12 col-form-label">ID Lote</label>
    <div class="col-sm-12">
        <input type="text" class="form-control  @error('id_lote') is-invalid @enderror" name="id_lote" placeholder="Numero de Lote" value="{{ isset($compra->idLote)?$compra->idLote:old('id_lote')}}" id="id_lote">
        @error('id_lote')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-12 col-form-label">Precio de Compra</label>
    <div class="col-sm-12">
        <input type="text" class="form-control  @error('precio_compra') is-invalid @enderror" name="precio_compra" placeholder="Precio de Compra" value="{{ isset($compra->precioCompra)?$compra->precioCompra:old('precio_compra')}}" id="precio_compra">
        @error('precio_compra')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="row mb-3">
    <label class="col-sm-12 col-form-label">Cantidad</label>
    <div class="col-sm-12">
        <input type="text" class="form-control  @error('cantidad') is-invalid @enderror" name="cantidad" placeholder="Ingrese la cantidad" value="{{ isset($compra->cantidad)?$compra->cantidad:old('cantidad')}}" id="cantidad">
        @error('cantidad')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>



<div class="row mb-3">
    <label class="col-sm-12 col-form-label">Precio</label>
    <div class="col-sm-12">
        <input type="text" class="form-control  @error('precio') is-invalid @enderror" name="precio" placeholder="Ingrese el precio" value="{{ isset($compra->precio)?$compra->precio:old('precio')}}" id="precio">
        @error('precio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="row mb-3">
    <label class="col-sm-12 col-form-label">Subtotal</label>
    <div class="col-sm-12">
        <input type="text" class="form-control  @error('subtotal') is-invalid @enderror" name="subtotal" placeholder="Ingrese el subtotal" value="{{ isset($compra->subtotal)?$compra->subtotal:old('subtotal')}}" id="subtotal">
        @error('subtotal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-12 col-form-label">Id Proveedor</label>
    <div class="col-sm-12">
        <input type="text" class="form-control  @error('id_proveedor') is-invalid @enderror" name="id_proveedor" placeholder="Identificador de Proveedor" value="{{ isset($compra->idProveedor)?$compra->idProveedor:old('id_proveedor')}}" id="id_proveedor">
        @error('id_proveedor')
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