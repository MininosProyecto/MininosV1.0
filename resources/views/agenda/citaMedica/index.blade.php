@extends('Layouts.Dash')

@section('Cabecera')
    Citas Agendadas
@endsection

@section('Listar')
    <a href="{{url('/agenda/citaMedica/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
    @include('Mascota.raza.search')

    <div class="row" style="margin-bottom: -9%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Fecha Agendada</th>
                        <th>Estado</th>
                        <th>Veterinario</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($agendas as $ag)
                        <tr>
                            <td scope="row">{{$ag->fecha_agenda}}</td>
                            <td>{{$ag->estado}}</td>
                            <td>{{$ag->Veterinario}}</td>
                            <td>
                                <a href="{{URL::action('AgendaController@edit', $ag->id_raza)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$ag->id_raza}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        {{--@include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$agendas->render()}}
        </div>
    </div>

@endsection
