@extends('Layouts.Dash')

@section('Cabecera')
    Editar Cliente
@endsection

@section('Listar')
    <a href="{{url('/cliente')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>
@endsection

@section('Contenido')

    <div style="margin-bottom: -5%;">

        {!! Form::model($cliente,['method'=>'PUT', 'action'=>['ClienteController@update', $cliente->id_cliente]]) !!}

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Documento</label>
                    <input type="text" class="form-control @error('numero_doc') is-invalid @enderror" name="numero_doc" placeholder="Documento..." value="{{$cliente->nro_documento}}">

                    @error('numero_doc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Tipo Documento</label>
                    <select class="form-control" name="tipo_doc" required="required"
                            data-validation-required-message="Seleccione una opcion" value="{{$cliente->tipo_documento}}">
                        <option value="CC">CC</option>
                        <option value="TI">TI</option>
                        <option value="CE">CE</option>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control @error('nombre_cliente') is-invalid @enderror" name="nombre_cliente" type="text" placeholder="Nombre..." value="{{$cliente->nombre_cliente}}" >

                    @error('nombre_cliente')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Apellido</label>
                    <input class="form-control @error('apellido_cliente') is-invalid @enderror" name="apellido_cliente" type="text" placeholder="Apellido..." value="{{$cliente->apellido_cliente}}">

                    @error('apellido_cliente')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" placeholder="Telefono..." value="{{$cliente->telefono}}">

                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" placeholder="Correo@ejemplo.com" value="{{$cliente->correo}}">

                    @error('correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Celular</label>
                    <input type="tel" class="form-control @error('celular') is-invalid @enderror" name="celular" placeholder="Celular..." value="{{$cliente->celular}}">

                    @error('celular')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" placeholder="Direccion..." value="{{$cliente->direccion}}">

                    @error('direccion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <hr width="1500" style="background: #99999961;">

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-xl" id="Registrar">Actualizar</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
