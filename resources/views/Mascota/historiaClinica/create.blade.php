@extends('Layouts.Dash')

@section('Cabecera')
    Registro Historia Clinica
@endsection

@section('Listar')

    <a href="{{url('/Mascota/historiaClinica')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>

@endsection

@section('Contenido')

<div id="accordion">

    {!! Form::open(array('url'=>'Mascota/historiaClinica', 'method'=>'POST', 'autocomplete'=>'off')) !!}

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Mascota</label>
                <select name="Mascotas_idMascotas" class="selectpicker form-control"
                        data-live-search="true" data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" {{old('Mascotas_idMascotas')}}>
                    @foreach($mascotas as $mas)
                        <option value="{{$mas->id_mascota}}">{{$mas->nombre_mascota}}</option>
                    @endforeach
                    <p class="help-block text-danger"></p>
                </select>

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Alimentacion</label>
                <select name="id_alimentacion" class="selectpicker form-control" data-live-search="true"
                        data-size="5" {{old('id_alimentacion')}}>
                    @foreach($alimentacion as $a)
                        <option value="{{$a->idAlimentacion}}">{{$a->producto}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Sintomas</label>
                <select name="id_sintomas" class="selectpicker form-control" data-live-search="true"
                        data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" {{old('id_sintomas')}}>
                    @foreach($sintomas as $s)
                        <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>
                    @endforeach
                </select>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-outline-primary">Registrar</button>
            </div>
        </div>

    </div>
    {!! Form::close() !!}

</div>

@endsection
