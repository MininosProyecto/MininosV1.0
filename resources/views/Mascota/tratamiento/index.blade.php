@extends('Layouts.Dash')

@section('Cabecera')
    Listado Tratamientos
@endsection

@section('Listar')
    <a href="{{url('/Mascota/tratamiento/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
    @include('Mascota.tratamiento.search')

    <div class="row" style="margin-bottom: -9%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Fecha Tratamiento</th>
                        <th>Descripcion</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tratamientos as $tra)
                        <tr>
                            <td>{{$tra->fecha}}</td>
                            <td>{{$tra->descripcion}}</td>
                            <td>
                                <a href="{{URL::action('TratamientoController@edit', $tra->idTratamiento)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$tra->idTratamiento}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        {{--@include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$tratamientos->render()}}
        </div>
    </div>

@endsection
