@extends('Layouts.Dash')

@section('Cabecera')
    Editar Mascota
@endsection

@section('Listar')
    <a href="{{url('/Mascota/mascota')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>
@endsection

@section('Contenido')

    {!! Form::model($mascotas,['method'=>'PATCH', 'action'=>['MascotaController@update', $mascotas->id_mascota]]) !!}
<div class="row">


    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label>Nombre Mascota</label>
            <input type="text" class="form-control @error('nombre_mascota') is-invalid @enderror" name="nombre_mascota" placeholder="Nombre Mascota..." value="{{$mascotas->nombre_mascota}}">

            @error('nombre_mascota')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror

        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label>Fecha Nacimiento</label>
            <input type="date" class="form-control @error('fecha_nac') is-invalid @enderror" name="fecha_nac" value="{{$mascotas->fecha_nacimiento}}">

            @error('fecha_nac')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label>Cliente</label>
            <select name="Clientes_id_cliente" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                    data-validation-required-message="Seleccione una opcion" value="{{$mascotas->Clientes_id_cliente}}">
                @foreach($clientes as $cli)
                    <option value="{{$cli->id_cliente}}">{{$cli->nombre_cliente}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <label>Raza</label>
            <select name="Raza_id_raza" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                    data-validation-required-message="Seleccione una opcion" value="{{$mascotas->Raza_id_raza}}" disabled>
                @foreach($razas as $raz)
                    <option value="{{$raz->id_raza}}">{{$raz->descripcion}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <label>Sexo</label>
            <select name="Sexo_id_sexo" class="selectpicker form-control" required="required"
                    data-validation-required-message="Seleccione una opcion" value="{{$mascotas->Sexo_id_sexo}}" disabled>
                @foreach($sexos as $sex)
                    <option value="{{$sex->id_sexo}}">{{$sex->descripcion}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <label>Especie</label>
            <select name="Especie_id_especie" class="selectpicker form-control" data-size="5" required="required"
                    data-validation-required-message="Seleccione una opcion" value="{{$mascotas->Especie_id_especie}}" disabled>
                @foreach($especies as $esp)
                    <option value="{{$esp->id_especie}}">{{$esp->descripcion}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <hr width="1700" style="background: #99999961;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-outline-primary btn-xl" id="Registrar">Guardar Cambios</button>
        </div>
    </div>

</div>
{!! Form::close() !!}

@endsection
