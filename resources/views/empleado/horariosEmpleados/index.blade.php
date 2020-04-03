@extends('Layouts.Dash')

@section('Cabecera')
    Empleados
@endsection

@section('Listar')
    <a href="{{url('/empleado/horariosEmpleados/create')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Nuevo</button></a>
@endsection

@section('Contenido')
    @include('empleado.horariosEmpleados.search')
<div style="margin-bottom: 2%;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nombre Empleado</th>
                        <th>Cargo</th>
                        <th>Hora Ingreso</th>
                        <th>Hora Salida</th>
                        <th>Dias</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($horarios as $ho)
                        <tr>

                            <td>{{$ho->nombre_empleado}}</td>
                            <td>{{$ho->cargo}}</td>
                            <td>{{$ho->horario_ingreso}}</td>
                            <td>{{$ho->horario_salida}}</td>
                            <td>{{$ho->dias}}</td>

                            <td>
                                <a href="{{URL::action('HorarioEmpleadoController@edit', $ho->idHorarios_Empleados)}}">
                                    <button class="bnt btn-info">Editar</button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$ho->idHorarios_Empleados}}" data-toggle="modal">
                                    <button class="bnt btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
{{--                        @include('almacen.categoria.modal')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$horarios->render()}}
        </div>
    </div>
</div>
@endsection
