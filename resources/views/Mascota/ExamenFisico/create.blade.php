@extends('Layouts.Dash')

@section('Cabecera')
    Registro Examen Fisico
@endsection

@section('Listar')

    <a href="{{url('/Mascota/historiaClinica')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Historia Clinica</button></a>

@endsection

@section('Contenido')

    {!! Form::open(array('url'=>'Mascota/ExamenFisico', 'method'=>'POST', 'autocomplete'=>'off')) !!}
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Mascota</label>
                <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
                    @foreach($historiaClinica as $hisoria)
                        <option value="{{$hisoria->idHistoriaClinica}}">{{$hisoria->nombre_mascota}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Frecuencia Cardiaca (FC)</label>
                <input type="text" class="form-control" name="FC"
                       required="required"
                       data-validation-required-message="Ingrese frecuencia cardiaca por favor" {{old('FC')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Frecuencia Respiratoria (FR)</label>
                <input type="text" class="form-control" name="FR"
                       required="required"
                       data-validation-required-message="Ingrese frecuencia respiratoria por favor" {{old('FR')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Temperatura</label>
                <input type="'text" class="form-control" name="temperatura"
                       required="required"
                       data-validation-required-message="Ingrese temperatura por favor" {{old('temperatura')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Membrana Mucosa</label>
                <input type="'text" class="form-control" name="mucosa"
                       required="required"
                       data-validation-required-message="Ingrese membrana mucosa por favor" {{old('mucosa')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Pulso</label>
                <input type="'text" class="form-control" name="pulso"
                       required="required"
                       data-validation-required-message="Ingrese pulso por favor" {{old('pulso')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Peso</label>
                <input type="'text" class="form-control" name="peso"
                       required="required"
                       data-validation-required-message="Ingrese peso por favor" {{old('peso')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Sistema Cardiovascular</label>
                <input type="'text" class="form-control" name="cardioVascular"
                       required="required"
                       data-validation-required-message="Ingrese sistema cardiovascular por favor" {{old('cardioVascular')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Respiratorio</label>
                <input type="'text" class="form-control" name="respiratorio"
                       required="required"
                       data-validation-required-message="Ingrese sistema respiratorio por favor" {{old('respiratorio')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Nervioso</label>
                <input type="'text" class="form-control" name="nervioso"
                       required="required"
                       data-validation-required-message="Ingrese sistema nervioso por favor" {{old('nervioso')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Genitourinario</label>
                <input type="'text" class="form-control" name="genitaurino"
                       required="required"
                       data-validation-required-message="Ingrese sistema genitourinario por favor" {{old('genitaurino')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Sistema Musculo Esquelitico</label>
                <input type="'text" class="form-control" name="musculoEsqueletico"
                       required="required"
                       data-validation-required-message="Ingrese sistema musculo esqueletico por favor" {{old('musculoEsqueletico')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Sistema Digestivo</label>
                <input type="'text" class="form-control" name="digestivo"
                       required="required"
                       data-validation-required-message="Ingrese sistema digestivo por favor" {{old('digestivo')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Tegumentario</label>
                <input type="'text" class="form-control" name="tegumentario"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" {{old('tegumentario')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Linfatico</label>
                <input type="'text" class="form-control" name="linfatico"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" {{old('linfatico')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Ojo</label>
                <input type="'text" class="form-control" name="ojo"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" {{old('ojo')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Oido</label>
                <input type="'text" class="form-control" name="oido"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" {{old('oido')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Actitud</label>
                <input type="'text" class="form-control" name="actitud"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" {{old('actitud')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Hidratacion</label>
                <input type="'text" class="form-control" name="hidratacion"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" {{old('hidratacion')}}>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <hr width="1700" style="background: #99999961;">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
