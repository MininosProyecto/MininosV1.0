@extends('Layouts.Dash')

@section('Cabecera')
    Registro Mascota
@endsection

@section('Listar')

    <a href="{{url('/Mascota/mascota')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

    @include('Mascota.mascota.search')
    <div style="margin-bottom: 5%;">
        {!! Form::open(array('url'=>'Mascota/mascota', 'method'=>'POST', 'autocomplete'=>'off')) !!}
<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Id Mascota</label>
                <input type="number" class="form-control" name="id_mascota" placeholder="Id Mascota..."
                       required="required"
                       data-validation-required-message="Ingrese su Correo por favor" {{old('id_mascota')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Nombre Mascota</label>
                <input type="text" class="form-control" name="nombre_mascota" placeholder="Nombre Mascota..."
                       required="required"
                       data-validation-required-message="Ingrese su Correo por favor" {{old('numero_doc')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fecha_nac"
                       required="required"
                       data-validation-required-message="Ingrese su Correo por favor" {{old('fecha_nac')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Cliente</label>
                <select name="Clientes_id_cliente" class="selectpicker form-control" data-live-search="true">
                    @foreach($clientes as $cli)
                        <option value="{{$cli->id_cliente}}">{{$cli->nombre_cliente}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Raza</label>
                <select name="Raza_id_raza" class="selectpicker form-control" data-live-search="true" data-size="5">
                    @foreach($razas as $raz)
                        <option value="{{$raz->id_raza}}">{{$raz->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sexo</label>
                <select name="Sexo_id_sexo" class="selectpicker form-control">
                    @foreach($sexos as $sex)
                        <option value="{{$sex->id_sexo}}">{{$sex->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <label>Especie</label>
            <select name="Especie_id_especie" class="selectpicker form-control">
                @foreach($especies as $esp)
                    <option value="{{$esp->id_especie}}">{{$esp->descripcion}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <hr width="1500" style="background: #99999961;">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <a href="{{url('cliente')}}"><button type="button" class="btn btn-primary btn-xl" id="">Atras</button></a>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <button type="reset" class="btn btn-danger btn-xl" id="">Limpiar</button>
        </div>
    </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <button type="submit" class="btn btn-primary">Siguiente</button>
        </div>
</div>
        {!! Form::close() !!}
    </div>
@endsection
