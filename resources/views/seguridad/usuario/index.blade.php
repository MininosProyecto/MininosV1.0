@extends('layouts.Dash')

@section('Cabecera')
    Usuarios
@endsection

@section('Listar')
    <a href="{{url('/seguridad/usuario/create')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button>
    </a>
@endsection

@section('Contenido')

    @include('seguridad.usuario.search')

    <div style="margin-bottom: 2%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @method('DELETE')
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $users)
                            <tr>
                                <td>{{$users->id}}</td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>
                                    <a href="{{URL::action('UsuarioController@edit', $users->id)}}">
                                        <button class="bnt btn-info">Editar</button>
                                    </a>
                                    <a href="" data-target="#modal-delete-{{$users->id}}" data-toggle="modal">
                                        <button class="bnt btn-danger">Eliminar</button>
                                    </a>
                                </td>
                            </tr>
                            @include('seguridad.usuario.modal')
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$usuarios->render()}}
            </div>
        </div>
    </div>
@endsection
