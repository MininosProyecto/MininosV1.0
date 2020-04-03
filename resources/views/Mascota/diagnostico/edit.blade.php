@extends('Layouts.Dash')

@section('Cabecera')
    Actualizacion Diagnostico
@endsection

@section('Listar')

    <a href="{{url('/Mascota/diagnostico')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>

@endsection

@section('Contenido')

    {!! Form::model($diagnostico,['method'=>'PUT', 'action'=>['DiagnosticoController@update', $diagnostico->idDiagnostico]]) !!}

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Mascota</label>
                <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true"
                        data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" value="{{$diagnostico->id_historiaClinica}}">
                    @foreach($historiaClinica as $historia)
                        <option value="{{$historia->idHistoriaClinica}}">{{$historia->nombre_mascota}}</option>
                    @endforeach
                </select>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Fecha Diagnostico</label>
                <input class="form-control " name="fecha" type="date" required="required"  value="{{$diagnostico->fecha}}">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Diagnostico</label>
                <textarea name="diagnostico" cols="3" rows="3" class="form-control">{{$diagnostico->descripcion}}</textarea>
            </div>
        </div>

        <hr width="1700" style="background: #99999961;">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </div>

    </div>

    {!! Form::close() !!}

@endsection
