@extends('Layouts.Dash')

@section('Cabecera')
    Listado Vacunas
@endsection

@section('Listar')
    <a href="{{url('/vacunas/create')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button>
    </a>
@endsection

@section('Contenido')


    <div class="row" style="margin-bottom: 5%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Id Vacuna</td>
                        <td>Nombre Vacuna</td>
                        <td>Fecha</td>
                        <td>Descripcion</td>
                        <td>Historia Clinica</td>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vacunas as $vas)
                        <tr>
                            <td>{{$vas->idVacunas}}</td>
                            <td>{{$vas->nombre_vacuna}}</td>
                            <td>{{$vas->fecha}}</td>
                            <td>{{$vas->descripcion}}</td>
                            <td>{{$vas->Historia}}</td>


                            <td>
                                <a href="{{URL::action('VacunaController@edit', $vas->idVacunas)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$vas->idVacunas}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        {{--                        @include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$vacunas->render()}}
        </div>
    </div>
@endsection
