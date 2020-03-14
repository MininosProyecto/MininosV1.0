@extends('Layouts.Dash')

@section('Cabecera')
    Registro Empleado
@endsection

@section('Listar')
    <a href="{{url('/empleado/horariosEmpleados')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>
@endsection

@section('Contenido')

    <div style="margin-bottom: -5%;">

        {!! Form::open(array('url'=>'empleado/horariosEmpleados', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Empleado</label>
                    <select class="form-control selectpicker" name="idEmpleado" required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('idEmpleado')}}>
                        @foreach($empleados as $em)
                            <option value="{{$em->idEmpleado}}">{{$em->nombre_empleado}}</option>
                         @endforeach
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Horario Ingreso</label>
                    <input type="time" class="form-control" name="hora_ingreso" placeholder="Hora ingreso..."
                           required="required"
                           data-validation-required-message="Ingrese Id por favor" {{old('hora_ingreso')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Horario Salida</label>
                    <input type="time" class="form-control" name="hora_salida" placeholder="Hora Salida..."
                           required="required"
                           data-validation-required-message="Ingrese nombre por favor" {{old('hora_salida')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Dias</label>
                    <input type="text" class="form-control" name="dias" placeholder="Dias de Trabajo..."
                           required="required"
                           data-validation-required-message="Ingrese nombre por favor" {{old('dias')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <hr width="1500" style="background: #99999961;">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-xl" id="Registrar">Registrar</button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
@endsection
