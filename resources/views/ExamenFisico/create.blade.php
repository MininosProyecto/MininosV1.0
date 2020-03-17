@extends('Layouts.Dash')

@section('Cabecera')
    Registro Examen Fisico
@endsection

@section('Listar')

    <a href="{{url('ExamenFisico')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

<<<<<<< HEAD
    @include('ExamenFisico.search')
    <div style="margin-bottom: -65%;">
        {!! Form::open(array('url'=>'ExamenFisico', 'method'=>'POST', 'autocomplete'=>'off')) !!}
=======
    <div style="margin-bottom: 5%;">
        {!! Form::open(array('url'=>'Mascota/ExamenFisico', 'method'=>'POST', 'autocomplete'=>'off')) !!}
>>>>>>> 91a5e266b28163d3eeb947bfb8d72987dadc0871
        <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Frecuencia Cardiaca FC</label>
                    <input type="text" class="form-control" name="fc" placeholder="Frecuencia Cardiaca..."
                           required="required"
                           data-validation-required-message="Ingrese frecuencia cardiaca por favor" {{old('fc')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Frecuencia Respiratoria FR</label>
                    <input type="text" class="form-control" name="fr" placeholder="Frecuencia Respiratoria..."
                           required="required"
                           data-validation-required-message="Ingrese frecuencia respiratoria por favor" {{old('fr')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Temperatura</label>
                    <input type="'text" class="form-control" name="Temperatura" placeholder="Temperatura..."
                    required="required"
                    data-validation-required-message="Ingrese temperatura por favor" {{old('Temperatura')}}>
                <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>TLLC</label>
                    <input type="'text" class="form-control" name="TLLC" placeholder="TLLC..."
                           required="required"
                           data-validation-required-message="Ingrese TLLC por favor" {{old('TLLC')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Membrana Mucosa</label>
                    <input type="'text" class="form-control" name="mem_mucosa" placeholder="Membrana Mucosa..."
                           required="required"
                           data-validation-required-message="Ingrese membrana mucosa por favor" {{old('mem_mucosa')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Pulso</label>
                    <input type="'text" class="form-control" name="pulso" placeholder="Pulso..."
                           required="required"
                           data-validation-required-message="Ingrese pulso por favor" {{old('pulso')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Peso</label>
                    <input type="'text" class="form-control" name="peso" placeholder="Peso"
                           required="required"
                           data-validation-required-message="Ingrese peso por favor" {{old('peso')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Cardiovascular</label>
                    <input type="'text" class="form-control" name="S_cardioVascular" placeholder="Sistema Cardiovascular..."
                           required="required"
                           data-validation-required-message="Ingrese sistema cardiovascular por favor" {{old('S_cardioVascular')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Respiratorio</label>
                    <input type="'text" class="form-control" name="S_respiratorio" placeholder="Sistema Respiratorio..."
                           required="required"
                           data-validation-required-message="Ingrese sistema respiratorio por favor" {{old('S_respiratorio')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Nervioso</label>
                    <input type="'text" class="form-control" name="S_nervioso" placeholder="Sistema Nervioso..."
                           required="required"
                           data-validation-required-message="Ingrese sistema nervioso por favor" {{old('S_nervioso')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Genitourinario</label>
                    <input type="'text" class="form-control" name="S_genitaurino" placeholder="Sistema Genitourinario..."
                           required="required"
                           data-validation-required-message="Ingrese sistema genitourinario por favor" {{old('S_genitaurino')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Musculo Esquelitico</label>
                    <input type="'text" class="form-control" name="S_musculoEsqueletico" placeholder="Sistema MuscoloEsqueletico..."
                           required="required"
                           data-validation-required-message="Ingrese sistema musculo esqueletico por favor" {{old('S_musculoEsqueletico')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Digestivo</label>
                    <input type="'text" class="form-control" name="S_digestivo" placeholder="Sistema Digestivo"
                           required="required"
                           data-validation-required-message="Ingrese sistema digestivo por favor" {{old('S_digestivo')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>ojo</label>
                    <input type="'text" class="form-control" name="ojo" placeholder="Ojo..."
                           required="required"
                           data-validation-required-message="Ingrese ojo por favor" {{old('ojo')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>oido</label>
                    <input type="'text" class="form-control" name="ojo" placeholder="Oido..."
                           required="required"
                           data-validation-required-message="Ingrese ojo por favor" {{old('ojo')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Tegumentario</label>
                    <input type="'text" class="form-control" name="S_tegumentario" placeholder="Sistema Tegumentario..."
                           required="required"
                           data-validation-required-message="Ingrese ojo por favor" {{old('S_tegumentario')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Linfatico</label>
                    <input type="'text" class="form-control" name="S_linfatico" placeholder="Sistema Linfatico..."
                           required="required"
                           data-validation-required-message="Ingrese ojo por favor" {{old('S_linfatico')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Actitud</label>
                    <input type="'text" class="form-control" name="actitud" placeholder="Actitud..."
                           required="required"
                           data-validation-required-message="Ingrese ojo por favor" {{old('actitud')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Hidratacion</label>
                    <input type="'text" class="form-control" name="hidratacion" placeholder="Hidratacion..."
                           required="required"
                           data-validation-required-message="Ingrese ojo por favor" {{old('hidratacion')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Historia Clinica</label>
                    <select name="historiaClinica_id_historiaClinica" class="selectpicker form-control" data-live-search="true">
                        @foreach($historiaC as $h)
                            <option value="{{$h->Mascotas_idMascotas}}">{{$h->idHistoriaClinica}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr width="1500" style="background: #99999961;">

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="form-group">
                    <a href="{{url('cliente/create')}}"><button type="button" class="btn btn-primary btn-xl" id="">Atras</button></a>
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="form-group">
                    <button type="reset" class="btn btn-secondary btn-xl" id="">Limpiar</button>
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <button type="submit" class="btn btn-primary">Siguiente</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
