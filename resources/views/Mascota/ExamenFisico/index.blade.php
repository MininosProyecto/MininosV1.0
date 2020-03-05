@extends('Layouts.Dash')

@section('Cabecera')
    Listado Examen Fisico
@endsection

@section('Listar')
    <a href="{{url('/Mascota/ExamenFisico/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')

    @include('Mascota.ExamenFisico.search')
    <div class="row" style="margin-bottom: 5%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>FC</td>
                        <td>FR</td>
                        <td>Temp</td>
                        <td>Mem_Mucosa</td>
                        <td>Pulso</td>
                        <td>Peso</td>
                        <td>S_Cardiovascular</td>
                        <td>S_Respiratorio</td>
                        <td>S_Nervioso</td>
                        <td>S_Genitourinario</td>
                        <td>S_Musculo_Esqueletico</td>
                        <td>S_Digestivo</td>
                        <td>Ojo</td>
                        <td>Oido</td>
                        <td>S_Tegumentario</td>
                        <td>S_Linfatico</td>
                        <td>Actitud</td>
                        <td>Hidratacion</td>
                        <td>Historia_Clinica_id_historia_clinica</td>

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
                            <td>{{$ex->Pulso}}</td>
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
            {{$ex->render()}}
        </div>
    </div>
@endsection
