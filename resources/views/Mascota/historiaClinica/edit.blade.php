@extends('Layouts.Dash')

@section('Cabecera')
    Actulizacion Historia Clinica
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
                        Sintomas
                    </button>
                </h5>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                <div class="card-body">

                    {!! Form::model($historia,['method'=>'PUT', 'action'=>['SintomasController@update', $historia->idSintomas]]) !!}

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Mascota</label>
                                <select name="historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" value="{{$historia->nombre_mascota}}">
                                    @foreach($historia as $mas)
                                        <option value="{{$mas->idHistoriaClinica}}">{{$mas->nombre_mascota}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Sintomas</label>
                                <textarea name="sintomas" cols="3" rows="3" class="form-control" placeholder="Descripcion..." value="{{$historia->descripcion}}" ></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Fecha Sintomas</label>
                                <input class="form-control " name="fecha" type="date" required="required"
                                       data-validation-required-message="Ingrese un sintoma por favor" value="{{$historia->fecha}}" >
                            </div>
                        </div>

                        {{--                        <hr width="1500" style="background: #99999961;">--}}

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
            <div class="card-header" id="heading3">
                <h5 class="mb-0">
                    <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Diagnostico
                    </button>
                </h5>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                <div class="card-body">
                    {!! Form::model($historia,['method'=>'PUT', 'action'=>['DiagnosticoController@update', $historia->id_diagnostico]]) !!}

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Mascota</label>
                                <select name="historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" value="{{$historia->nombre_mascota}}" >
                                    @foreach($historia as $his)
                                        <option value="{{$his->idHistoriaClinica}}">{{$his->nombre_mascota}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Diagnostico</label>
                                <textarea name="diagnostico" cols="3" rows="3" class="form-control" placeholder="Descripcion Diagnostico" value="{{$historia->descripcion}}"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Fecha Diagnostico</label>
                                <input class="form-control " name="fecha" type="date" required="required" value="{{$historia->fecha}}">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>

                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading4">
                <h5 class="mb-0">
                    <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Tratamiento
                    </button>
                </h5>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                <div class="card-body">

                    {!! Form::model($historia,['method'=>'PUT', 'action'=>['TratamientoController@update', $historia->idTratamiento]]) !!}

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Mascota</label>
                                <select name="historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" value="{{$historia->nombre_mascota}}" >
                                    @foreach($historia as $h)
                                        <option value="{{$h->idHistoriaClinica}}">{{$h->nombre_mascota}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Tratamiento</label>
                                <textarea name="tratamiento" cols="3" rows="3" class="form-control" placeholder="Descripcion tratamiento" value="{{$historia->descripcion}}" ></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Fecha Tratamiento</label>
                                <input class="form-control " name="fecha" type="date" required="required"
                                       data-validation-required-message="Ingrese un sintoma por favor" value="{{$historia->fecha}}" >
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>

@endsection
