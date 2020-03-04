@extends('Layouts.Dash')

@section('Cabecera')
    Registro de Tramiento
@endsection

@section('Listar')

    <a href="{{url('/Mascota/tratamiento')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

    @include('Mascota.tratamiento.search')
    <div style="margin-bottom: 25%;">
        {!! Form::open(array('url'=>'Mascota/tratamiento', 'method'=>'POST', 'autocomplete'=>'off')) !!}

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label>Historia Clinica</label>
            <select name="idHistoria_Clinica" class="selectpicker form-control" data-live-search="true">
                @foreach($historiaClinica as $his)
                    <option value="{{$his->idHistoriaClinica}}">{{$his->nombre_mascota}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label>Fecha</label>
            <input class="form-control " name="fecha" type="date" required="required"
                   data-validation-required-message="Ingrese un sintoma por favor">
        </div>
        <br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label>Descripcion</label>
            <textarea name="descripcion" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <br>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>

        {!! Form::close() !!}
    </div>
@endsection
