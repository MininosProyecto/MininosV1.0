@extends('layouts.admin')

@section('contenido')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>
                Listado Nuevo de Categoria
                <a href="categoria/create">
                    <button class="btn btn-success">Nuevo</button>
                </a>
                @include('almacen.categoria.search')
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
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
                            <td>{{$users->password}}</td>
                            <td>
                                <a href="{{URL::action('UsuarioController@edit', $users->id)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$users->id}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        @include('almacen.categoria.modal')
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$categorias->render()}}
        </div>
    </div>
@endsection
