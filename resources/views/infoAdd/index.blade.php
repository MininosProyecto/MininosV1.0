@extends('Layouts.Dash')

@section('Cabecera')
    Informacion Adicional
@endsection

@section('Listar')
    <a href="{{url('/infoAdd/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')

    <div style="margin-bottom: 2%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Detalles Examen</th>
                            <th>Lista Problemas</th>
                            <th>Diagnostico Definitivo</th>
                            <th>Ayudas Diagnostico</th>
                            <th>Condicion Corporal</th>
                            <th>Convivencia Con Otros Animales</th>
                            <th>Enfermedades</th>
                            <th>Temperamento</th>
                            <th>Fecha Ultima Desparasitacion</th>
                            <th>Frecuencia Baño</th>
                            <th>Fecha ultima Vacuna</th>
                            <th>Historia Clinica</th>

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
                                        <button class="bnt btn-info">Editar</button>
                                    </a>
                                    <a href="" data-target="#modal-delete-{{$i->idInfoAdd}}" data-toggle="modal">
                                        <button class="bnt btn-danger">Eliminar</button>
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
