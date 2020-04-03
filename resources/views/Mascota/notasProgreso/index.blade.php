@extends('Layouts.Dash')

@section('Cabecera')
    Notas Progreso
@endsection

@section('Listar')
    <a href="{{url('/Mascota/notasProgreso/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')

    @include('Mascota.alimentacion.search')
    <div class="row" style="margin-bottom: 5%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Mascota</td>
                        <td>Fecha</td>
                        <td>Descripcion</td>
                        <td>Acciones</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alimentos as $al)
                        <tr>
                            <td>{{$al->nombre_mascota}}</td>
                            <td>{{$al->fecha}}</td>
                            <td>{{$al->descripcion}}</td>

                            <td>
                                <a href="{{URL::action('NotasProgresoController@edit', $al->idNotas_Progreso)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$al->idNotas_Progreso}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        {{--                        @include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$alimentos->render()}}
        </div>
    </div>
@endsection
