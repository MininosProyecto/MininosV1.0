@extends('Layouts.Dash')

@section('Cabecera')
    Actulizacion Examen Fisico
@endsection

@section('Listar')

    <a href="{{url('/Mascota/ExamenFisico')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

    {!! Form::model($examen,['method'=>'PUT', 'action'=>['ExamenFisicoController@update', $examen->idExamenFisico]]) !!}

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Mascota</label>
                <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" value="{{$examen->id_historiaClinica}}">
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
                       data-validation-required-message="Ingrese frecuencia cardiaca por favor" value="{{$examen->fc}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Frecuencia Respiratoria (FR)</label>
                <input type="text" class="form-control" name="FR"
                       required="required"
                       data-validation-required-message="Ingrese frecuencia respiratoria por favor" value="{{$examen->fr}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Temperatura</label>
                <input type="'text" class="form-control" name="temperatura"
                       required="required"
                       data-validation-required-message="Ingrese temperatura por favor" value="{{$examen->Temperatura}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Membrana Mucosa</label>
                <input type="'text" class="form-control" name="mucosa"
                       required="required"
                       data-validation-required-message="Ingrese membrana mucosa por favor" value="{{$examen->men_mucosa}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Pulso</label>
                <input type="'text" class="form-control" name="pulso"
                       required="required"
                       data-validation-required-message="Ingrese pulso por favor" value="{{$examen->pulso}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Peso</label>
                <input type="'text" class="form-control" name="peso"
                       required="required"
                       data-validation-required-message="Ingrese peso por favor" value="{{$examen->peso}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Sistema Cardiovascular</label>
                <input type="'text" class="form-control" name="cardioVascular"
                       required="required"
                       data-validation-required-message="Ingrese sistema cardiovascular por favor" value="{{$examen->S_cardioVascular}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Respiratorio</label>
                <input type="'text" class="form-control" name="respiratorio"
                       required="required"
                       data-validation-required-message="Ingrese sistema respiratorio por favor" value="{{$examen->S_respiratorio}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Nervioso</label>
                <input type="'text" class="form-control" name="nervioso"
                       required="required"
                       data-validation-required-message="Ingrese sistema nervioso por favor" value="{{$examen->S_nervioso}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Genitourinario</label>
                <input type="'text" class="form-control" name="genitaurino"
                       required="required"
                       data-validation-required-message="Ingrese sistema genitourinario por favor" value="{{$examen->S_genitaurino}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Sistema Musculo Esquelitico</label>
                <input type="'text" class="form-control" name="musculoEsqueletico"
                       required="required"
                       data-validation-required-message="Ingrese sistema musculo esqueletico por favor" value="{{$examen->S_musculoEsqueletico}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Sistema Digestivo</label>
                <input type="'text" class="form-control" name="digestivo"
                       required="required"
                       data-validation-required-message="Ingrese sistema digestivo por favor" value="{{$examen->S_digestivo}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Tegumentario</label>
                <input type="'text" class="form-control" name="tegumentario"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" value="{{$examen->S_tegumentario}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Sistema Linfatico</label>
                <input type="'text" class="form-control" name="linfatico"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" value="{{$examen->S_linfatico}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Ojo</label>
                <input type="'text" class="form-control" name="ojo"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" value="{{$examen->ojo}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Oido</label>
                <input type="'text" class="form-control" name="oido"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" value="{{$examen->oido}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Actitud</label>
                <input type="'text" class="form-control" name="actitud"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" value="{{$examen->actitud}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label>Hidratacion</label>
                <input type="'text" class="form-control" name="hidratacion"
                       required="required"
                       data-validation-required-message="Ingrese ojo por favor" value="{{$examen->hidratacion}}">
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <hr width="1700" style="background: #99999961;">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-sm btn-outline-primary">Guardar Cambios</button>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
