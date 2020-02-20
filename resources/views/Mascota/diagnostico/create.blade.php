@extends('Layouts.Dash')

@section('Cabecera')
    Registro Diagnostico
@endsection

@section('Listar')

    <a href="{{url('/Mascota/diagnostico')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

    @include('Mascota.diagnostico.search')
    <div style="margin-bottom: 25%;">
        {!! Form::open(array('url'=>'Mascota/diagnostico', 'method'=>'POST', 'autocomplete'=>'off')) !!}

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <input class="form-control " name="fecha" type="date" required="required" data-validation-required-message="Ingrese un sintoma por favor">
        </div>
        <br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <textarea name="descripcion" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <select name="historiaClinica_id_historiaClinica" class="selectpicker form-control" data-live-search="true">
                @foreach($historiaClinica as $his)
                    <option value="{{$his->idHistoriaClinica}}">{{$his->idHistoriaClinica}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <button type="submit" class="btn btn-primary">Registrar</button>
        </div>

        {!! Form::close() !!}
    </div>
@endsection
