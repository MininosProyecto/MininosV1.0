@extends('Layouts.Dash')

@section('Cabecera')
    Listado Mascotas
@endsection

@section('Listar')
    <a href="{{url('/Mascota/mascota/create')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button>
    </a>
@endsection

@section('Contenido')

    @include('Mascota.mascota.search')
    <div class="row" style="margin-bottom: 5%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Nombre Mascota</td>
                        <td>Fecha Nacimiento</td>
                        <td>Dueño</td>
                        <td>Especie</td>
                        <td>Raza</td>
                        <td>Sexo</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mascotas as $mas)
                        <tr>
                            <td>{{$mas->nombre_mascota}}</td>
                            <td>{{$mas->fecha_nacimiento}}</td>
                            <td>{{$mas->Dueño}}</td>
                            <td>{{$mas->Especie}}</td>
                            <td>{{$mas->Raza}}</td>
                            <td>{{$mas->Sexo}}</td>

                            <td>
                                <a href="{{URL::action('MascotaController@edit', $mas->id_mascota)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$mas->id_mascota}}" data-toggle="modal">
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
