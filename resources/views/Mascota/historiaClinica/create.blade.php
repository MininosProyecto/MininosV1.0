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

    <div class="card">
                    <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                            <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Alimentacion
                            </button>
                        </h5>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                        <div class="card-body">

                            {!! Form::open(array('url'=>'Mascota/sintomas', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Sintomas</label>
                                        <textarea name="sintomas" cols="3" rows="3" class="form-control" placeholder="Descripcion..."></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Fecha Sintomas</label>
                                        <input class="form-control " name="fecha" type="date" required="required"
                                               data-validation-required-message="Ingrese un sintoma por favor">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </div>

                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>

    <div class="card">
        <div class="card-header" id="heading1">
            <h5 class="mb-0">
                <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    Historia Clinica
                </button>
            </h5>
        </div>
        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
            <div class="card-body">

                {!! Form::open(array('url'=>'Mascota/historiaClinica', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Mascota</label>
                            <select name="Mascotas_idMascotas" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                                    data-validation-required-message="Seleccione una opcion" {{old('Mascotas_idMascotas')}}>
                                @foreach($mascotas as $mas)
                                    <option value="{{$mas->id_mascota}}">{{$mas->nombre_mascota}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Alimentacion</label>
                            <select name="id_alimentacion" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                                    data-validation-required-message="Seleccione una opcion" {{old('id_alimentacion')}}>
                                @foreach($alimentacion as $a)
                                    <option value="{{$a->idAlimentacion}}">{{$a->producto}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Sintomas</label>
                            <select name="id_sintomas" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                                    data-validation-required-message="Seleccione una opcion" {{old('id_sintomas')}}>
                                @foreach($sintomas as $s)
                                    <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

{{--                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Diagnostico</label>--}}
{{--                            <select name="Mascotas_idMascotas" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"--}}
{{--                                    data-validation-required-message="Seleccione una opcion" {{old('id_sintomas')}}>--}}
{{--                                @foreach($diagnosticos as $d)--}}
{{--                                    <option value="{{$d->idDiagnostico}}">{{$d->descripcion}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Tratamiento</label>--}}
{{--                            <select name="Mascotas_idMascotas" class="selectpicker form-control" data-live-search="true" data-size="5">--}}
{{--                                @foreach($tratamientos as $t)--}}
{{--                                    <option value="{{$t->idTratameinto}}">{{$t->descripcion}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>

                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

</div>

@endsection
