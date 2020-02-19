@extends('Layouts.Dash')

@section('Cabecera')
    Listado de Empleados
@endsection

@section('Listar')
    <a href="{{url('/empleado/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
    @include('empleado.search')
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
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Direccion</th>
                        <th>Cargo</th>
                        <th>Fecha Nacimiento</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empleados ?? '' as $emp)
                        <tr>
                            <td>{{$emp->nombre}}</td>
                            <td>{{$emp->apellido}}</td>
                            <td>{{$emp->nro_documento}}</td>
                            <td>{{$emp->telefono}}</td>
                            <td>{{$emp->celular}}</td>
                            <td>{{$emp->correo}}</td>
                            <td>{{$emp->direccion}}</td>
                            <td>{{$emp->fecha_nacimiento}}</td>
                            <td>
                                <a href="{{URL::action('EmpleadoController@edit', $emp->id_empleado)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$emp->id_empleado}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
{{--                        @include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$empleados->render()}}
        </div>
    </div>
</div>
@endsection
