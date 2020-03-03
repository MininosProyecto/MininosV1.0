@extends('Layouts.Dash')

@section('Cabecera')
    Registro Citas
@endsection

@section('Listar')
    <a href="{{url('/agenda')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>
@endsection

@section('Contenido')

    @include('agenda.search')
    <div style="margin-bottom: -5%;">

        {!! Form::open(array('url'=>'agenda', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">


            <div class="col-md-12">
                <div class="form-group">
                    <label>Tipo Cita</label>
                    <select class="form-control" name="TipoReserva" id="TipoReserva"
                            required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('TipoReserva')}}>
                        @foreach($tipoCitas as $tc)
                        <option value="{{$tc->id_tipoCita}}">{{$tc->tipoCita}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="Fecha" id="Fecha">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Hora</label>
                    <input type="text" class="form-control" name="Hora" id="Hora">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Mascota</label>
                    <select class="form-control" name="idMascota" id="idMascota"
                            required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('idMascota')}}>
                        @foreach($mascotas as $mas)
                        <option value="{{$mas->id_mascota}}">{{$mas->nombre_mascota}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Empleado</label>
                    <select class="form-control" name="idEmpleado" id="idEmpleado"
                            required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('idEmpleado')}}>
                        @foreach($empleados as $em)
                        <option value="{{$em->idEmpelado}}">{{$em->nombre_empleado}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="Descripcion" class="form-control" id="Descripcion"
                              cols="30"
                              rows="2"></textarea>
                </div>
            </div>

        </div>

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="Registrar">Siguiente</button>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection
