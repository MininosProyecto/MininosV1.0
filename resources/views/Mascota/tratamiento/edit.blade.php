@extends('Layouts.Dash')

@section('Cabecera')
    Actualizar Tramiento
@endsection

@section('Listar')

    <a href="{{url('/Mascota/tratamiento')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>

@endsection

@section('Contenido')

    {!! Form::model($tratamiento,['method'=>'PUT', 'action'=>['TratamientoController@update', $tratamiento->idTratamiento]]) !!}

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Mascota</label>
                <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true"
                        data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" value="{{$tratamiento->id_historiaClinica}}">
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
                       data-validation-required-message="Ingrese un sintoma por favor" value="{{$tratamiento->fecha}}">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Tratamiento</label>
                <textarea name="tratamiento" cols="3" rows="3" class="form-control">{{$tratamiento->descripcion}}</textarea>
            </div>
        </div>



        <hr width="1700" style="background: #99999961;">

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
