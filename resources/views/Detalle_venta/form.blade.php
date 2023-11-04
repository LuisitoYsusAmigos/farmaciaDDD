
   
        
        <!--Cada uno de los atributos de proveedor para el formulario-->
        <!--id_detalle_venta-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">id detalle venta</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('id_detalle_venta') is-invalid @enderror" name="id_detalle_venta" placeholder="id detalle venta" value="{{ isset($Detalle_venta->id_detalle_venta)?$Detalle_venta->id_detalle_venta:old('id_detalle_venta')}}" id="id_detalle_venta">
                @error('id_detalle_venta')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <!--cantidad-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">cantidad</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('cantidad') is-invalid @enderror" name="cantidad" placeholder="cantidad" value="{{ isset($Detalle_venta->cantidad)?$Detalle_venta->cantidad:old('cantidad')}}" id="cantidad">
                @error('cantidad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <!--precio-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">precio</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('precio') is-invalid @enderror" name="precio" placeholder="precio" value="{{ isset($Detalle_venta->precio)?$Detalle_venta->precio:old('precio')}}" id="precio">
                @error('precio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <!--id_detalle-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">id detalle</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('id_detalle') is-invalid @enderror" name="id_detalle" placeholder="id_detalle" value="{{ isset($Detalle_venta->id_detalle)?$Detalle_venta->id_detalle:old('id_detalle')}}" id="id_detalle">
                @error('id_detalle')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <!--utilidad-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">utilidad</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('utilidad') is-invalid @enderror" name="utilidad" placeholder="utilidad" value="{{ isset($Detalle_venta->utilidad)?$Detalle_venta->utilidad:old('utilidad')}}" id="utilidad">
                @error('utilidad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <!--subtotal-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">detalle_venta</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('subtotal') is-invalid @enderror" name="subtotal" placeholder="subtotal" value="{{ isset($Detalle_venta->subtotal)?$Detalle_venta->subtotal:old('subtotal')}}" id="subtotal">
                @error('subtotal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <!--id_producto-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">id_producto</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('id_producto') is-invalid @enderror" name="id_producto" placeholder="id_producto" value="{{ isset($Detalle_venta->id_producto)?$Detalle_venta->id_producto:old('id_producto')}}" id="id_producto">
                @error('id_producto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <!--id_venta-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">id venta</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('id_venta') is-invalid @enderror" name="id_venta" placeholder="id venta" value="{{ isset($Detalle_venta->id_venta)?$Detalle_venta->id_venta:old('id_venta')}}" id="id_venta">
                @error('id_venta')
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


   
