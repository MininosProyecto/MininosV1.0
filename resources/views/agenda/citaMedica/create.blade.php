@extends('Layouts.Dash')

@section('Cabecera')
    Registro Cita
@endsection

@section('Listar')

    <a href="{{url('/agenda/citaMedica')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

@include('agenda.citaMedica.search')
    <div style="margin-bottom: -2%;">
        {!! Form::open(array('url'=>'agenda/citaMedica', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Id Cita Medica</label>
                    <input type="number" class="form-control" name="id_cita" placeholder="Id Cita Medica..."
                           required="required"
                           data-validation-required-message="Ingrese id alimento por favor" {{old('id_cita')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="fecha" placeholder="Fecha..."
                           required="required"
                           data-validation-required-message="Ingrese producto por favor" {{old('fecha')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Nombre Mascota</label>
                    <select name="Clientes_id_cliente" class="selectpicker form-control" data-live-search="true">
                        @foreach($mascotas as $mas)
                            <option value="{{$mas->id_mascota}}">{{$mas->nombre_mascota}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Id Agenda</label>
                    <select name="Clientes_id_cliente" class="selectpicker form-control" data-live-search="true">
                        @foreach($agendas as $age)
                            <option value="{{$age->idAgenda}}">{{$age->nombre_mascota}}</option>
                        @endforeach
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <hr width="1500" style="background: #99999961;">

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

