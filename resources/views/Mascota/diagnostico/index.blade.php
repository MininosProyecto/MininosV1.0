@extends('Layouts.Dash')

@section('Cabecera')
    Listado de Diagnosticos
@endsection

@section('Listar')
    <a href="{{url('/Mascota/diagnostico/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
@include('Mascota.diagnostico.search')

    <div class="row" style="margin-bottom: -9%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Fecha Sintoma</th>
                        <th>Descripcion</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($diagnosticos as $diag)
                        <tr>
                            <td>{{$diag->fecha}}</td>
                            <td>{{$diag->descripcion}}</td>
                            <td>
                                <a href="{{URL::action('DiagnosticoController@edit', $diag->idDiagnostico)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$diag->idDiagnostico}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        {{--@include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$diagnosticos->render()}}
        </div>
    </div>

@endsection
