@extends('Layouts.Dash')

@section('Cabecera')
    Registro Empleado
@endsection

@section('Listar')
    <a href="{{url('/empleado')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>
@endsection

@section('Contenido')

    @include('empleado.search')
    <div style="margin-bottom: -5%;">

        {!! Form::open(array('url'=>'empleado', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Id Empleado</label>
                    <input type="text" class="form-control" name="id_empleado" placeholder="Id Empleado..."
                           required="required"
                           data-validation-required-message="Ingrese Id por favor" {{old('id_empleado')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre..."
                           required="required"
                           data-validation-required-message="Ingrese nombre por favor" {{old('nombre')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido..."
                           required="required"
                           data-validation-required-message="Ingrese apellido por favor" {{old('apellido')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Tipo Documento</label>
                    <select class="form-control" name="tipo_documento" required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('tipo_documento')}}>
                        <option value="CC">CC</option>
                        <option value="TI">TI</option>
                        <option value="CE">CE</option>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Numero Documento</label>
                    <input type="number" class="form-control" name="nro_documento" type="text" placeholder="Numero Documento..." required="required"
                           data-validation-required-message="Ingrese numero documento por favor" {{old('nro_documento')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="tel" class="form-control" name="telefono" placeholder="Telefono..."
                           required="required"
                           data-validation-required-message="Ingrese  Telefono por favor" {{old('telefono')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Celular</label>
                    <input type="tel" class="form-control" name="celular" placeholder="Celular..."
                           required="required"
                           data-validation-required-message="Ingrese  celular por favor" {{old('celular')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" name="correo" placeholder="Correo@ejemplo.com"
                           required="required"
                           data-validation-required-message="Ingrese correo por favor" {{old('correo')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion..."
                           required="required"
                           data-validation-required-message="Ingrese su Direccion por favor" {{old('direccion')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label> Cargo </label>
                    <select class="form-control" name="cargo" required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('cargo')}}>
                        <option value="Veterinario">Veterinario</option>
                        <option value="Secretaria">Secretaria</option>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento"
                           required="required"
                           data-validation-required-message="Ingrese su Fecha de Nacimiento por favor" {{old('fecha_nacimiento')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <hr width="1500" style="background: #99999961;">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-xl" id="Registrar">Siguiente</button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
@endsection
