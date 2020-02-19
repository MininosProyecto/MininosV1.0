@extends('Layouts.Dash')

@section('Cabecera')
    Listado de Clientes
@endsection

@section('Listar')
    <a href="{{url('/cliente/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
    @include('cliente.search')
<div style="margin-bottom: 2%;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Numero Documento</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cli)
                        <tr>
                            <td>{{$cli->nombre_cliente}}</td>
                            <td>{{$cli->apellido_cliente}}</td>
                            <td>{{$cli->nro_documento}}</td>
                            <td>{{$cli->telefono}}</td>
                            <td>{{$cli->direccion}}</td>
                            <td>
                                <a href="{{URL::action('ClienteController@edit', $cli->id_cliente)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$cli->id_cliente}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
{{--                        @include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$clientes->render()}}
        </div>
    </div>
</div>
@endsection
