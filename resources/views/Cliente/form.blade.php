

   
        
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Cedula de identidad</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('ci') is-invalid @enderror" name="ci" placeholder="Cedula de Identidad" value="{{ isset($cliente->ci)?$cliente->ci:old('ci')}}" id="ci">
                @error('ci')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Nombres</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('nombre_cliente') is-invalid @enderror" name="nombre_cliente" placeholder="Nombres" value="{{ isset($cliente->nombreCliente)?$cliente->nombreCliente:old('nombre_cliente')}}" id="nombre_cliente">
                @error('nombre_cliente')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Apellidos</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('apellido_cliente') is-invalid @enderror" name="apellido_cliente" placeholder="Apellidos" value="{{ isset($cliente->apellidoCliente)?$cliente->apellidoCliente:old('apellido_cliente')}}" id="apellido_cliente">
                @error('apellido_cliente')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Email</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Correo Electronico" value="{{ isset($cliente->email)?$cliente->email:old('email')}}" id="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        
        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Telefono</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('telefono') is-invalid @enderror" name="telefono" placeholder="Telefono" value="{{ isset($cliente->telefono)?$cliente->telefono:old('telefono')}}" id="telefono">
                @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Referencia</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('referencia') is-invalid @enderror" name="referencia" placeholder="Referencias del Cliente" value="{{ isset($cliente->referencia)?$cliente->referencia:old('referencia')}}" id="referencia">
                @error('referencia')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Direccion</label>
            <div class="col-sm-12">
                <input type="text" class="form-control  @error('direccion') is-invalid @enderror" name="direccion" placeholder="Direccion" value="{{ isset($cliente->direccion)?$cliente->direccion:old('direccion')}}" id="direccion">
                @error('direccion')
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