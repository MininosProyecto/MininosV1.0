@extends('Layouts.Dash')

@section('Cabecera')
    Editar Historia Clinica
@endsection

@section('Listar')

    <a href="{{url('/Mascota/historiaClinica')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>

@endsection

@section('Contenido')

    <div id="accordion">

        {!! Form::model($clinica,['method'=>'PUT', 'action'=>['HistoriaClinicaController@update', $clinica->idHistoriaClinica]]) !!}

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Mascota</label>
                    <select name="Mascotas_idMascotas" class="selectpicker form-control"
                            data-live-search="true" data-size="5" required="required"
                            data-validation-required-message="Seleccione una opcion">
                            <option value="{{$clinica->Mascotas_idMascotas}}">{{$clinica->nombre_mascota}}</option>
                        <p class="help-block text-danger"></p>
                    </select>

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Alimentacion</label>
                    <select name="id_alimentacion" class="selectpicker form-control" data-live-search="true"
                            data-size="5" {{old('id_alimentacion')}} value="{{$clinica->id_alimentacion}}">

                        <option value="{{$clinica->id_alimentacion}}">{{$clinica->producto}}</option>
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
                        <option value="{{$clinica->id_sintomas}}">{{$clinica->descripcion}}</option>

                        @foreach($sintomas as $s)
                            <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>
                        @endforeach
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-outline-primary">Guardar Cambios</button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}

    </div>

@endsection
