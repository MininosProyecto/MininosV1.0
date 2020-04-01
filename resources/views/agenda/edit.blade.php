@extends('Layouts.Dash')

@section('Cabecera')
    Editar Citas
@endsection

@section('Listar')
    <a href="{{url('/agenda')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>
@endsection

@section('Contenido')
    @php

    @endphp

    <div style="margin-bottom: -5%;">

        {!! Form::model($agenda,['method'=>'PATCH', 'action'=>['AgendaController@update', $agenda->idAgenda]]) !!}

        <div class="col-md-6">
            <div class="form-group">
                <label>Tipo Cita</label>
                <select class="form-control" name="TipoCita" id="TipoCita"
                        required="required"
                        data-validation-required-message="Seleccione una opcion" value="{{$agenda->TipoCita_id_tipoCita}}" >
                    @foreach($tipoCitas as $tc)
                        <option value="{{$tc->id_tipoCita}}">{{$tc->tipoCita}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Fecha y hora</label>
                <input type="datetime-local" class="form-control" name="fecha_agenda" placeholder="fecha_agenda" value="{{$agenda->fecha_agenda}}">

            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label>Mascota</label>
                <select class="form-control" name="idMascota" id="idMascota"
                        required="required"
                        data-validation-required-message="Seleccione una opcion"  value="{{$agenda->Mascota_id_mascota}}">
                    @foreach($mascotas as $mas)
                        <option value="{{$mas->id_mascota}}">{{$mas->nombre_mascota}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label>Profesional</label>
                <select class="form-control" name="idEmpleado" id="idEmpleado"
                        required="required"
                        data-validation-required-message="Seleccione una opcion" value="{{$agenda->Empleados_id_veterinario}}">
                    @foreach($empleados as $em)
                        <option value="{{$em->idEmpleado}}">{{$em->nombre_empleado}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-md-12">
            <div class="form-group">
                <label>Descripcion</label>
                <textarea name="Descripcion" class="form-control" id="Descripcion" value="{{$agenda->descripcion}}"
                          cols="30"
                          rows="2"></textarea>
            </div>
        </div>
    </div>

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary btn-xl" id="Registrar">Actualizar</button>
        </div>
    </div>

</div>
    {!! Form::close() !!}

@endsection
