@extends('Layouts.Dash')

@section('Cabecera')
    Examen Fisico
@endsection

@section('Listar')
    <a href="{{url('/ExamenFisico/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')

    @include('Mascota.ExamenFisico.search')
    <div style="margin-bottom: 2%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table">
                    <table class="table table-striped table-bordered table-hover" data-tablesaw-mode="columntoggle">
                        <thead>
                        <tr>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="1">FC</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="2">FR </th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="3">Temperatura</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="4">Membrana Mucosa </th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="5">Pulso</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Peso</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Sistema Cardiovascular</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Sistema Respiratorio</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Sistema Nervioso</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Sistema Genitourinario</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Sistema Esqueleto Musculoso</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Sistema  Digestivo</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Ojo</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Oido</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Sistema Tengumentario</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Sistema Linfaticp</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Actitud</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Hidratacion</th>
                            <th>Acciones</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($examen as $ex)
                            <tr>
                                <td>{{$ex->fc}}</td>
                                <td>{{$ex->fr}}</td>
                                <td>{{$ex->Temperatura}}</td>
                                <td>{{$ex->men_mucosa}}</td>
                                <td>{{$ex->pulso}}</td>
                                <td>{{$ex->peso}}</td>
                                <td>{{$ex->S_cardioVascular}}</td>
                                <td>{{$ex->S_respiratorio}}</td>
                                <td>{{$ex->S_nervioso}}</td>
                                <td>{{$ex->S_genitaurino}}</td>
                                <td>{{$ex->S_musculoEsqueletico}}</td>
                                <td>{{$ex->S_digestivo}}</td>
                                <td>{{$ex->ojo}}</td>
                                <td>{{$ex->oido}}</td>
                                <td>{{$ex->S_tegumentario}}</td>
                                <td>{{$ex->S_linfatico}}</td>
                                <td>{{$ex->actitud}}</td>
                                <td>{{$ex->hidratacion}}</td>
                                <td>
                                    <a href="{{URL::action('ExamenFisicoController@edit', $ex->idExamenFisico)}}">
                                        <button class="bnt btn-info">Editar</button>
                                    </a>
{{--                                    <a href="" data-target="#modal-delete-{{$ex->idExamenFisico}}" data-toggle="modal">--}}
{{--                                        <button class="bnt btn-danger">Eliminar</button>--}}
{{--                                    </a>--}}
                                </td>
                            </tr>
                            {{--                        @include('almacen.categoria.modal')--}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$examen->render()}}
            </div>
        </div>
    </div>
@endsection
