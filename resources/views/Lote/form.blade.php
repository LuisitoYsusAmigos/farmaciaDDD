
   
        
        <!--Cada uno de los atributos de proveedor para el formulario-->
        <!--idproveedor-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Cedula de identidad</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('idproveedor') is-invalid @enderror" name="idproveedor" placeholder="Cedula de Identidad" value="{{ isset($proveedor->idProveedor)?$proveedor->idProveedor:old('idproveedor')}}" id="idproveedor">
                @error('idproveedor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <!--nombre_proveedor-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Nombre Completo</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('nombre_proveedor') is-invalid @enderror" name="nombre_proveedor" placeholder="Nombre Completo" value="{{ isset($proveedor->nombreProveedor)?$proveedor->nombreProveedor:old('nombre_proveedor')}}" id="nombre_proveedor">
                @error('nombre_proveedor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <!--email-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Email</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Correo Electronico" value="{{ isset($proveedor->email)?$proveedor->email:old('email')}}" id="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <!--direccion-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Direccion</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('direccion') is-invalid @enderror" name="direccion" placeholder="Direccion" value="{{ isset($proveedor->direccion)?$proveedor->direccion:old('direccion')}}" id="direccion">
                @error('direccion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <!--ruc-->
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">RUC</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('ruc') is-invalid @enderror" name="ruc" placeholder="RUC" value="{{ isset($proveedor->ruc)?$proveedor->ruc:old('ruc')}}" id="ruc">
                @error('ruc')
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


   
