@extends('Layouts.Dash')

@section('Cabecera')
    Historia Clinica
@endsection

@section('Listar')
    <div class="btn-group mr-2">
        <a href="{{url('/Mascota/diagnostico/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary"><span data-feather="plus"></span> &nbspDiagnostico</button></a>
        <a href="{{url('/Mascota/tratamiento/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary"><span data-feather="plus"></span> &nbspTratamiento</button></a>
        <a href="{{url('/Mascota/notasProgreso/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary"><span data-feather="plus"></span> &nbspNotas Progreso</button></a>
        <a href="{{url('/Mascota/ExamenFisico/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary"><span data-feather="plus"></span> &nbspExamen Fisico</button></a>
        <a href="{{url('/Mascota/infoAdd/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary"><span data-feather="plus"></span> &nbspInformacion Adicional</button></a>
        <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal"><span data-feather="search"></span> &nbspInformacion Mascota</button></a>
    </div>
@endsection

@section('Contenido')

@include('Mascota.historiaClinica.search')
    <div class="row" style="margin-bottom: 5%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Mascota</th>
                        <th>Sintomas</th>
                        <th>Alimentacion</th>
                        <th >Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($historiaClinica as $h)

                        <tr>
                            <td>{{$h->mascota}}</td>
                            <td>{{$h->sintomas}}</td>
                            <td>{{$h->producto}}</td>
                            <td>
                                <a href="{{URL::action('HistoriaClinicaController@edit', $h->idHistoriaClinica)}}">
                                    <button class="bnt btn-outline-info"><span data-feather="edit"></span></button>
                                </a>
{{--                                <a href="" data-target="#modal-delete-{{$h->idHistoriaClinica}}" data-toggle="modal">--}}
{{--                                    <button class="bnt btn-outline-danger"><span data-feather="trash"></span></button>--}}
{{--                                </a>--}}
                                <a href="" data-target="#modal-detalle-{{$h->idHistoriaClinica}}" data-toggle="modal">
                                    <button class="bnt btn-warning">Detalle</button>
                                </a>
                            </td>
                        </tr>
                         @include('Mascota.historiaClinica.modal')
                         @include('Mascota.historiaClinica.modalDetalle')
                         @include('Mascota.historiaClinica.modalMascotas')
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$historiaClinica->render()}}
        </div>
    </div>
@endsection

