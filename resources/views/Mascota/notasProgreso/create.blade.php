@extends('Layouts.Dash')

@section('Cabecera')
   Registro Notas Progreso
@endsection

@section('Listar')
    <a href="{{url('Mascota/historiaClinica')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Historia Clinica</button></a>
@endsection

@section('Contenido')

    {!! Form::open(array('url'=>'Mascota/notasProgreso', 'method'=>'POST', 'autocomplete'=>'off')) !!}

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Mascota</label>
                <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
                    @foreach($historiaClinica as $historia)
                        <option value="{{$historia->idHistoriaClinica}}">{{$historia->nombre_mascota}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Fecha Nota</label>
                <input name="fecha" type="date" cols="3" rows="3" class="form-control">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Descripcion</label>
                <textarea name="descripcion" cols="3" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <hr width="1700" style="background: #99999961;">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
