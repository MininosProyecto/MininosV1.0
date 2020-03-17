@extends('Layouts.Dash')

@section('Cabecera')
    Registro Sintomas
@endsection

@section('Listar')

    <a href="{{url('/Mascota/sintomas')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>

@endsection

@section('Contenido')

    <div style="margin-bottom: 10%;">
        {!! Form::open(array('url'=>'Mascota/sintomas', 'method'=>'POST', 'autocomplete'=>'off')) !!}

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label>Historia Clinica</label>
                    <select name="idHistoria_Clinica" class="selectpicker form-control" data-live-search="true">
                        @foreach($historiaClinica as $his)
                            <option value="{{$his->idHistoriaClinica}}">{{$his->nombre_mascota}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label>Fecha</label>
                    <input class="form-control " name="fecha" type="date" required="required"
                           data-validation-required-message="Ingrese un sintoma por favor">
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descripcion" cols="5" rows="5" class="form-control"></textarea>
                </div>
            </div>

            <hr width="1500" style="background: #99999961;">

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
@endsection
