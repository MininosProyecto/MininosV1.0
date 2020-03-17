@extends('Layouts.Dash')

@section('Cabecera')
    Listado de Empleados
@endsection

@section('Listar')
    <a href="{{url('/empleado/empleados/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
    @include('empleado.empleados.search')
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empleados as $emp)
                        <tr>
                            <td>{{$emp->nombre_empleado}}</td>
                            <td>{{$emp->apellido_empleado}}</td>
                            <td>{{$emp->nro_documento}}</td>
                            <td>{{$emp->telefono}}</td>
                            <td>{{$emp->celular}}</td>
                            <td>{{$emp->correo}}</td>
                            <td>{{$emp->direccion}}</td>
                            <td>
                                <a href="{{URL::action('EmpleadoController@edit', $emp->idEmpleado)}}">
                                    <button class="bnt btn-info"><span data-feather="edit"> </span></button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$emp->idEmpleado}}" data-toggle="modal">
                                    <button class="bnt btn-danger"><span data-feather="trash-2"> </span></button>
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
