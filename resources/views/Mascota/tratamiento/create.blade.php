@extends('Layouts.Dash')

@section('Cabecera')
    Registro de Tramiento
@endsection

@section('Listar')

    <a href="{{url('/Mascota/historiaClinica')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Historia Clinica</button>
    </a>

@endsection

@section('Contenido')

    {!! Form::open(array('url'=>'Mascota/tratamiento', 'method'=>'POST', 'autocomplete'=>'off')) !!}

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Mascota</label>
                <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true"
                        data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
                    @foreach($historiaClinica as $historia)
                        <option value="{{$historia->idHistoriaClinica}}">{{$historia->nombre_mascota}}</option>
                    @endforeach
                </select>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Fecha Tratamiento</label>
                <input class="form-control " name="fecha" type="date" required="required"
                       data-validation-required-message="Ingrese un sintoma por favor">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Tratamiento</label>
                <textarea name="tratamiento" cols="3" rows="3" class="form-control"></textarea>
            </div>
        </div>



        <hr width="1700" style="background: #99999961;">

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
