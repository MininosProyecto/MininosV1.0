@extends('Layouts.Dash')

@section('Cabecera')
    Registro Cliente
@endsection

@section('Listar')
    <a href="{{url('/cliente')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>
@endsection

@section('Contenido')

    @include('cliente.search')
<div style="margin-bottom: -5%;">

    {!! Form::open(array('url'=>'cliente', 'method'=>'POST', 'autocomplete'=>'off')) !!}
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Documento</label>
                <input type="number" class="form-control" name="numero_doc" placeholder="Documento..."
                       required="required"
                       data-validation-required-message="Ingrese su Correo por favor" {{old('numero_doc')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

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

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" name="nombre_cliente" type="text" placeholder="Nombre..." required="required"
                       data-validation-required-message="Ingrese su nombre por favor" {{old('nombre_cliente')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Apellido</label>
                <input class="form-control" name="apellido_cliente" type="text" placeholder="Apellido..."
                       required="required"
                       data-validation-required-message="Ingrese su apelldio por favor" {{old('apellido_cliente')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Telefono</label>
                <input type="tel" class="form-control" name="telefono" placeholder="Telefono..."
                       required="required"
                       data-validation-required-message="Ingrese su Telefono por favor" {{old('telefono')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Celular</label>
                <input type="tel" class="form-control" name="celular" placeholder="Celular..."
                       required="required"
                       data-validation-required-message="Ingrese su celular por favor" {{old('celular')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Correo</label>
                <input type="email" class="form-control" name="correo" placeholder="Correo@ejemplo.com"
                       required="required"
                       data-validation-required-message="Ingrese su Telefono por favor" {{old('correo')}}>
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
                <label>Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechaNac"
                       required="required"
                       data-validation-required-message="Ingrese su Fecha de Nacimiento por favor" {{old('fechaNac')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <hr width="1500" style="background: #99999961;">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <button type="reset" class="btn btn-danger btn-xl" id="">Limpiar</button>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="Registrar">Siguiente</button>
            </div>
        </div>

    </div>
    {!! Form::close() !!}
</div>
@endsection
