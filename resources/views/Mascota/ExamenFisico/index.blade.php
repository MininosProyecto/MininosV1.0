@extends('Layouts.Dash')

@section('Cabecera')
    Examen Fisico
@endsection

@section('Listar')
    <a href="{{url('/ExamenFisico/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')

    @include('ExamenFisico.search')
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
                            <th data-tablesaw-sortable-col data-tablesaw-priority="4">TLLC </th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Membrana Mucosa </th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Pulso</th>
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
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Historia Clinica</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($examen as $ex)
                            <tr>
                                <td>{{$ex->FC}}</td>
                                <td>{{$ex->FR}}</td>
                                <td>{{$ex->Temp}}</td>
                                <td>{{$ex->TLLC}}</td>
                                <td>{{$ex->Mem_Mucosa}}</td>
                                <td>{{$ex->Pulso}}</td>
                                <td>{{$ex->Peso}}</td>
                                <td>{{$ex->S_Cardiovascular}}</td>
                                <td>{{$ex->S_Respiratorio}}</td>
                                <td>{{$ex->S_Nervioso}}</td>
                                <td>{{$ex->S_Genitourinario}}</td>
                                <td>{{$ex->S_Musculo_Esqueletico}}</td>
                                <td>{{$ex->S_Digestivo}}</td>
                                <td>{{$ex->Ojo}}</td>
                                <td>{{$ex->Oido}}</td>
                                <td>{{$ex->S_Tegumentario}}</td>
                                <td>{{$ex->S_Linfatico}}</td>
                                <td>{{$ex->Actitud}}</td>
                                <td>{{$ex->Hidratacion}}</td>
                                <td>{{$ex->Historia_Clinica_id_historia_clinica}}</td>
                                <td>
                                    <a href="{{URL::action('ExamenFisicoController@edit', $ex->idExamen_Fisico)}}">
                                        <button class="bnt btn-info">Editar</button>
                                    </a>
                                    <a href="" data-target="#modal-delete-{{$ex->idExamen_Fisico}}" data-toggle="modal">
                                        <button class="bnt btn-danger">Eliminar</button>
                                    </a>
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
