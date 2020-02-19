@extends('Layouts.Dash')

@section('Cabecera')
    Listado Alimentacion
@endsection

@section('Listar')
    <a href="{{url('alimentacion/create')}}">
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
                        <td>Id Alimento</td>
                        <td>Producto</td>
                        <td>Id Historia Clinica</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alimento as $al)
                        <tr>
                            <td>{{$al->id_alimentacion}}</td>
                            <td>{{$al->producto}}</td>
                            <td>{{$al->historia}}</td>

                            <td>
                                <a href="{{URL::action('AlimentacionController@edit', $al->id_alimentacion)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$al->id_alimentacion}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        {{--                        @include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$mascotas->render()}}
        </div>
    </div>
@endsection
