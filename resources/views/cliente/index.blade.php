@extends('Layouts.Dash')

@section('Cabecera')
    Clientes
@endsection

@section('Listar')
    <div class="btn-group mr-2">
        <a href="{{url('/Mascota/mascota')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Mascotas</button></a>
        <a href="{{url('/Mascota/historiaClinica')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Historia Clinica</button></a>
        <a href="{{url('/cliente/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
    </div>
@endsection

@section('Contenido')

<div style="margin-bottom: 2%;">
    @include('cliente.search')
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
                                    <button class="bnt btn-outline-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$cli->id_cliente}}" data-toggle="modal">
                                    <button class="bnt btn-outline-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        @include('cliente.modal')
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$clientes->render()}}
        </div>
    </div>
</div>
@endsection
