@extends('Layouts.Dash')

@section('Cabecera')
    Registro Examen Fisico
@endsection

@section('Listar')

    <a href="{{url('/Mascota/ExamenFisico')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

    @include('Mascota.ExamenFisico.search')
    <div style="margin-bottom: 5%;">
        {!! Form::open(array('url'=>'Mascota/ExamenFisico', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Frecuencia Cardiaca FC</label>
                    <input type="text" class="form-control" name="FC" placeholder="Frecuencia Cardiaca..."
                           required="required"
                           data-validation-required-message="Ingrese frecuencia cardiaca por favor" {{old('FC')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Frecuencia Respiratoria FR</label>
                    <input type="text" class="form-control" name="FR"
                           required="required"
                           data-validation-required-message="Ingrese frecuencia respiratoria por favor" {{old('FR')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Temperatura</label>
                    <input type="'text" class="form-control" name="Temp"
                    required="required"
                    data-validation-required-message="Ingrese temperatura por favor" {{old('Temp')}}>
                <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>TLLC</label>
                    <input type="'text" class="form-control" name="TLLC"
                           required="required"
                           data-validation-required-message="Ingrese TLLC por favor" {{old('TLLC')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Membrana Mucosa</label>
                    <input type="'text" class="form-control" name="Mem_Mucosa"
                           required="required"
                           data-validation-required-message="Ingrese membrana mucosa por favor" {{old('Mem_Mucosa')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Pulso</label>
                    <input type="'text" class="form-control" name="Pulso"
                           required="required"
                           data-validation-required-message="Ingrese pulso por favor" {{old('Pulso')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Peso</label>
                    <input type="'text" class="form-control" name="Peso"
                           required="required"
                           data-validation-required-message="Ingrese peso por favor" {{old('Peso')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Cardiovascular</label>
                    <input type="'text" class="form-control" name="S_Cardiovascular"
                           required="required"
                           data-validation-required-message="Ingrese sistema cardiovascular por favor" {{old('S_Cardiovascular')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Respiratorio</label>
                    <input type="'text" class="form-control" name="S_Respiratorio"
                           required="required"
                           data-validation-required-message="Ingrese sistema respiratorio por favor" {{old('S_Respiratorio')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Nervioso</label>
                    <input type="'text" class="form-control" name="S_Nervioso"
                           required="required"
                           data-validation-required-message="Ingrese sistema nervioso por favor" {{old('S_Nervioso')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Genitourinario</label>
                    <input type="'text" class="form-control" name="S_Genitourinario"
                           required="required"
                           data-validation-required-message="Ingrese sistema genitourinario por favor" {{old('S_Genitourinario')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Musculo Esquelitico</label>
                    <input type="'text" class="form-control" name="S_Musculo_Esqueletico"
                           required="required"
                           data-validation-required-message="Ingrese sistema musculo esqueletico por favor" {{old('S_Musculo_Esqueletico')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Sistema Digestivo</label>
                    <input type="'text" class="form-control" name="S_Digestivo"
                           required="required"
                           data-validation-required-message="Ingrese sistema digestivo por favor" {{old('S_Digestivo')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>ojo</label>
                    <input type="'text" class="form-control" name="Ojo"
                           required="required"
                           data-validation-required-message="Ingrese ojo por favor" {{old('Ojo')}}>
                    <p class="help-block text-danger"></p>
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
