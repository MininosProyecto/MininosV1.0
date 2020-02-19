@extends('Layouts.Dash')

@section('Cabecera')
    Listado Razas
@endsection

@section('Listar')
    <a href="{{url('/Mascota/raza/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
@include('Mascota.raza.search')

    <div class="row" style="margin-bottom: -9%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id Raza</th>
                        <th>Descripcion</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($razas as $raz)
                        <tr>
                            <td scope="row">{{$raz->id_raza}}</td>
                            <td>{{$raz->descripcion}}</td>
                            <td>
                                <a href="{{URL::action('RazaController@edit', $raz->id_raza)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$raz->id_raza}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        {{--@include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$razas->render()}}
        </div>
    </div>

@endsection
