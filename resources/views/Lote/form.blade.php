
   
        
        <!--Cada uno de los atributos de proveedor para el formulario-->
        <!--id lote-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">id de lote</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('id_lote') is-invalid @enderror" name="id_lote" placeholder="id de lote" value="{{ isset($Lote->id_lote)?$Lote->id_lote:old('id_lote')}}" id="id_lote">
                @error('id_lote')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <!--fecha expiracion -->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">fecha de expiracion</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('fecha_expiracion') is-invalid @enderror" name="fecha_expiracion" placeholder="Fecha de expiracion" value="{{ isset($Lote->fecha_expiracion)?$Lote->fecha_expiracion:old('fecha_expiracion')}}" id="fecha_expiracion">
                @error('fecha_expiracion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <!--precio_compra -->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">precio compra</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('precio_compra') is-invalid @enderror" name="precio_compra" placeholder="precio compra" value="{{ isset($Lote->precio_compra)?$Lote->precio_compra:old('precio_compra')}}" id="precio_compra">
                @error('precio_compra')
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
                <input type="text" class="form-control  @error('cantidad') is-invalid @enderror" name="cantidad" placeholder="cantidad" value="{{ isset($Lote->cantidad)?$Lote->cantidad:old('cantidad')}}" id="cantidad">
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
                <input type="text" class="form-control  @error('precio') is-invalid @enderror" name="precio" placeholder="precio" value="{{ isset($Lote->precio)?$Lote->precio:old('precio')}}" id="precio">
                @error('precio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <!--subtotal-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">subtotal</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('subtotal') is-invalid @enderror" name="subtotal" placeholder="subtotal" value="{{ isset($Lote->subtotal)?$Lote->subtotal:old('subtotal')}}" id="subtotal">
                @error('subtotal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <!--id_compra-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">id_compra</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('id_compra') is-invalid @enderror" name="id_compra" placeholder="id_compra" value="{{ isset($Lote->id_compra)?$Lote->id_compra:old('id_compra')}}" id="id_compra">
                @error('id_compra')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <?php 
        //dd($Lote);
        ?>

        <!--id_producto-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">id_producto</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('id_producto') is-invalid @enderror" name="id_producto" placeholder="id_producto" value="{{ isset($Lote->id_producto)?$Lote->id_producto:old('id_producto')}}" id="id_producto">
                @error('id_producto')
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


   
