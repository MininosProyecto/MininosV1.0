@extends('Layouts.Dash')

@section('Cabecera')
    Registro Datos
@endsection

@section('Listar')
    <a href="{{url('/cliente')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>
@endsection

@section('Contenido')




    <div id="accordion">

        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-default" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne">
                        Registro Cliente
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">

                    {!! Form::open(array('url'=>'cliente', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Tipo Documento</label>
                                <select class="form-control" name="tipo_doc" required="required"
                                        data-validation-required-message="Seleccione una opcion" {{old('tipo_doc')}}>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="CE">CE</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Documento</label>
                                <input type="text" class="form-control @error('numero_doc') is-invalid @enderror"
                                       name="numero_doc" placeholder="Documento..." {{old('numero_doc')}}>

                                @error('numero_doc')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control @error('nombre_cliente') is-invalid @enderror"
                                       name="nombre_cliente" type="text"
                                       placeholder="Nombre..." {{old('nombre_cliente')}}>

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
                                <input class="form-control @error('apellido_cliente') is-invalid @enderror"
                                       name="apellido_cliente" type="text"
                                       placeholder="Apellido..." {{old('apellido_cliente')}}>

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
                                <input type="tel" class="form-control @error('telefono') is-invalid @enderror"
                                       name="telefono" placeholder="Telefono..." {{old('telefono')}}>

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
                                <input type="email" class="form-control @error('correo') is-invalid @enderror"
                                       name="correo" placeholder="Correo@ejemplo.com" {{old('correo')}}>

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
                                <input type="tel" class="form-control @error('celular') is-invalid @enderror"
                                       name="celular" placeholder="Celular..." {{old('celular')}}>

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
                                <input type="text" class="form-control @error('direccion') is-invalid @enderror"
                                       name="direccion" placeholder="Direccion..." {{old('direccion')}}>

                                @error('direccion')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-xl" id="Registrar">Registrar</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                        Registro Raza
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">

                    {!! Form::open(array('url'=>'Mascota/raza', 'method'=>'POST', 'autocomplete'=>'off')) !!}
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="form-group">
                                <input name="descripcion" class="form-control" placeholder="Nombre Raza...">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>


                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                        Registro Mascota
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    {!! Form::open(array('url'=>'Mascota/mascota', 'method'=>'POST', 'autocomplete'=>'off')) !!}
                    <div class="row">


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Nombre Mascota</label>
                                <input type="text" class="form-control @error('nombre_mascota') is-invalid @enderror"
                                       name="nombre_mascota" placeholder="Nombre Mascota..." {{old('nombre_mascota')}}>

                                @error('nombre_mascota')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Fecha Nacimiento</label>
                                <input type="date" class="form-control @error('fecha_nac') is-invalid @enderror"
                                       name="fecha_nac" {{old('fecha_nac')}}>

                                @error('fecha_nac')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Cliente</label>
                                <select name="Clientes_id_cliente" class="selectpicker form-control"
                                        data-live-search="true" data-size="5" required="required"
                                        data-validation-required-message="Seleccione una opcion" {{old('Clientes_id_cliente')}}>
                                    @foreach($clientes as $cli)
                                        <option value="{{$cli->id_cliente}}">{{$cli->nombre_cliente}}</option>
                                    @endforeach
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>Raza</label>
                                <select name="Raza_id_raza" class="selectpicker form-control" data-live-search="true"
                                        data-size="5">
                                    @foreach($razas as $raz)
                                        <option value="{{$raz->id_raza}}">{{$raz->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>Sexo</label>
                                <select name="Sexo_id_sexo" class="selectpicker form-control" required="required"
                                        data-validation-required-message="Seleccione una opcion" {{old('Sexo_id_sexo')}}>
                                    @foreach($sexos as $sex)
                                        <option value="{{$sex->id_sexo}}">{{$sex->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>Especie</label>
                                <select name="Especie_id_especie" class="selectpicker form-control" data-size="5"
                                        required="required"
                                        data-validation-required-message="Seleccione una opcion" {{old('Raza_id_raza')}}>
                                    @foreach($especies as $esp)
                                        <option value="{{$esp->id_especie}}">{{$esp->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-xl" id="Registrar">Registrar</button>
                            </div>
                        </div>

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading4">
                <h5 class="mb-0">
                    <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapse4"
                            aria-expanded="false" aria-controls="collapse4">
                        Alimentacion
                    </button>
                </h5>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                <div class="card-body">

                    {!! Form::open(array('url'=>'Mascota/alimentacion', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>Producto</label>

                                <input name="producto" class="form-control" placeholder="Nombre producto...">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>Tipo Producto</label>
                                <input class="form-control " name="tipoProducto" type="text" placeholder="Ej: Adultos - Cachorros">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>Frecuencia Alimentacion</label>
                                <input class="form-control " name="frecuencia" type="text" placeholder="Ej: 2 veces al diá">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>

                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading7">
                <h5 class="mb-0">
                    <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapse7"
                            aria-expanded="false" aria-controls="collapse7">
                        Historia Clinica
                    </button>
                </h5>
            </div>
            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                <div class="card-body">

                    {!! Form::open(array('url'=>'Mascota/historiaClinica', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Mascota</label>
                                <select name="Mascotas_idMascotas" class="selectpicker form-control"
                                        data-live-search="true" data-size="5" required="required"
                                        data-validation-required-message="Seleccione una opcion" {{old('Mascotas_idMascotas')}}>
                                    @foreach($mascotas as $mas)
                                        <option value="{{$mas->id_mascota}}">{{$mas->nombre_mascota}}</option>
                                    @endforeach
                                        <p class="help-block text-danger"></p>
                                </select>

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Alimentacion</label>
                                <select name="id_alimentacion" class="selectpicker form-control" data-live-search="true"
                                        data-size="5" {{old('id_alimentacion')}}>
                                    @foreach($alimentacion as $a)
                                        <option value="{{$a->idAlimentacion}}">{{$a->producto}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Sintomas</label>
                                <select name="id_sintomas" class="selectpicker form-control" data-live-search="true"
                                        data-size="5" required="required"
                                        data-validation-required-message="Seleccione una opcion" {{old('id_sintomas')}}>
                                    @foreach($sintomas as $s)
                                        <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>
                                    @endforeach
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-outline-primary">Registrar</button>
                            </div>
                        </div>

                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>


@endsection
