@extends('Layouts.Dash')

@section('Cabecera')
    Listado Historia Clinica
@endsection

@section('Listar')
    <a href="{{url('/Mascota/historiaClinica/create')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button>
    </a>
@endsection

@section('Contenido')

@include('Mascota.historiaClinica.search')
    <div class="row" style="margin-bottom: 5%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Mascota</td>
                        <td>Dueño</td>
                        <td>Documento</td>
                        <td>Acciones</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($historiaClinica as $h)

                        <tr>
                            <td>{{$h->Mascota}}</td>
                            <td>{{$h->nombre_cliente}}</td>
                            <td>{{$h->nro_documento}}</td>

                            <td>
                                <a href="{{URL::action('HistoriaClinicaController@edit', $h->idHistoriaClinica)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$h->idHistoriaClinica}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        {{--                        @include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$historiaClinica->render()}}
        </div>
    </div>
@endsection

