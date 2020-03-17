@extends('Layouts.Dash')

@section('Cabecera')
    Informacion Adicional
@endsection

@section('Listar')
    <a href="{{url('/infoAdd/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')

    @include('infoAdd.search')
    <div style="margin-bottom: 2%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table">
                    <table class="table table-striped table-bordered table-hover" data-tablesaw-mode="columntoggle">
                        <thead>
                        <tr>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="1">Detalles Examen</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="2">Lista Problemas</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="3">Diagnostico Definitivo</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="4">Ayudas Diagnostico</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Condicion Corporal</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Convivencia Con Otros Animales</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Enfermedades</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Temperamento</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Fecha Ultima Desparasitacion</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Frecuencia Baño</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Fecha ultima Vacuna</th>
                            <th data-tablesaw-sortable-col data-tablesaw-priority="0">Historia Clinica</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($info as $i)
                            <tr>
                                <td>{{$i->detallesExamen}}</td>
                                <td>{{$i->listaProblemas}}</td>
                                <td>{{$i->DiagDefinitivo}}</td>
                                <td>{{$i->ayudasDiagnostico}}</td>
                                <td>{{$i->condCorporal}}</td>
                                <td>{{$i->conv_OtrosAnimales}}</td>
                                <td>{{$i->enfermedades}}</td>
                                <td>{{$i->temperamento}}</td>
                                <td>{{$i->fecha_ultimaDesp}}</td>
                                <td>{{$i->frecuenciaBaño}}</td>
                                <td>{{$i->fecha_ultimaVacuna}}</td>
                                <td>{{$i->historiaClinica_id_historiaClinica}}</td>
                                <td>
                                    <a href="{{URL::action('InfoAdicionalController@edit', $i->idInfoAdd)}}">
                                        <button class="bnt btn-info"><span data-feather="edit"> </span></button>
                                    </a>
                                    <a href="" data-target="#modal-delete-{{$i->idInfoAdd}}" data-toggle="modal">
                                        <button class="bnt btn-danger"><span data-feather="trash-2"> </span></button>
                                    </a>
                                </td>
                            </tr>
                            {{--                        @include('almacen.categoria.modal')--}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$info->render()}}
            </div>
        </div>
    </div>
@endsection
