@extends('Layouts.Dash')

@section('Cabecera')
    Registro Vacunas
@endsection

@section('Listar')
    <a href="{{url('/vacunas')}}" xmlns="http://www.w3.org/1999/html"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>
@endsection

@section('Contenido')


    <div style="margin-bottom: -5%;">

        {!! Form::open(array('url'=>'vacunas', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Id Vacuna</label>
                    <input type="number" class="form-control" name="idVacunas" placeholder="Id Vacuna..."
                           required="required"
                           data-validation-required-message="Ingrese id Vacuna por favor" {{old('idVacunas')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Nombre Vacuna</label>
                    <input class="form-control" name="nombre_vacuna" type="text" placeholder="Nombre Vacuna..." required="required"
                           data-validation-required-message="Ingrese nombre de vacuna por favor" {{old('nombre_vacuna')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Fecha</label>
                    <input class="form-control" name="fecha" type="date" placeholder="Fecha..." required="required"
                           data-validation-required-message="Ingrese nombre fecha por favor" {{old('fecha')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" name="descripcion" type="text" placeholder="Descripcion..."
                           required="required"
                           data-validation-required-message="Ingrese Descripcion por favor" {{old('descripcion')}}></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Id Historia Clinica</label>
                    <input class="form-control" name="Historia" type="text" placeholder="Historia..."
                              required="required"
                              data-validation-required-message="Ingrese Historia por favor" {{old('Historia')}}>
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
