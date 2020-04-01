@extends('Layouts.Dash')

@section('Cabecera')
    Listado Historia Clinica
@endsection

@section('Listar')
    <div class="btn-group mr-2">
<!--        <a href="{{url('/Mascota/historiaClinica/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>-->
        <a href="{{url('/Mascota/diagnostico/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Diagnostico</button></a>
        <a href="{{url('/Mascota/tratamiento/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Tratamiento</button></a>
        <a href="{{url('/Mascota/notasProgreso/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Notas Progreso</button></a>
        <a href="{{url('/Mascota/ExamenFisico/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Examen Fisico</button></a>
        <a href="{{url('/Mascota/infoAdd/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion Adicional</button></a>
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
                                <a href="" data-target="#modal-delete-{{$h->idHistoriaClinica}}" data-toggle="modal">
                                    <button class="bnt btn-outline-danger"><span data-feather="trash-2"></span></button>
                                </a>
                                <a href="" data-target="#modal-detalle-{{$h->idHistoriaClinica}}" data-toggle="modal">
                                    <button class="bnt btn-warning">Detalle</button>
                                </a>
                            </td>
                        </tr>
                         @include('Mascota.historiaClinica.modal')
                         @include('Mascota.historiaClinica.modalDetalle')
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$historiaClinica->render()}}
        </div>
    </div>
@endsection

