@extends('Layouts.Dash')

@section('Cabecera')
    Listado Citas
@endsection

@section('Listar')
    <a href="{{url('/agenda/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
    @include('agenda.search')
    <div style="margin-bottom: 2%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Mascota</th>
                            <th>Fecha y hora Agendada</th>
                            <th>Descripcion</th>
                            <th>Profecional</th>
                            <th>Tipo Cita</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($agendas as $ag)
                            <tr>
                                <td>{{$ag->nombre_mascota}}</td>
                                <td>{{$ag->fecha_agenda}}</td>
                                <td>{{$ag->descripcion}}</td>
                                <td>{{$ag->nombre_empleado}}</td>
                                <td>{{$ag->tipoCita}}</td>
                                <td>
                                    <a href="{{URL::action('AgendaController@edit', $ag->idAgenda)}}">
                                        <button class="bnt btn-info">Editar</button>
                                    </a>
                                    <a href="" data-target="#modal-delete-{{$ag->idAgenda}}" data-toggle="modal">
                                        <button class="bnt btn-danger">Eliminar</button>
                                    </a>
                                </td>
                            </tr>
                            {{--                        @include('almacen.categoria.modal')--}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$agendas->render()}}
            </div>
        </div>
    </div>
@endsection
