<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1"
     id="modal-detalle-{{$h->idHistoriaClinica}}">


    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Detalle Historia Clinica</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="accordion" id="accordionExample">

                    <div class="card">
                        <div class="card-header" id="heading1">
                            <h5 class="mb-0">
                                <button class="btn btn-default collapsed" data-toggle="collapse"
                                        data-target="#collapse1"
                                        aria-expanded="false" aria-controls="collapse1">
                                    Diagnostico
                                </button>
                            </h5>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                            <div class="card-body">
                                {!! Form::open(array('url'=>'Mascota/diagnostico', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Mascota</label>
                                            <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                                                    data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
                                                {{--                                                @foreach($sintomas as $s)--}}
                                                {{--                                                    <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Diagnostico</label>
                                            <textarea name="diagnostico" cols="3" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Fecha Diagnostico</label>
                                            <input class="form-control " name="fecha" type="date" required="required">
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
                        <div class="card-header" id="heading2">
                            <h5 class="mb-0">
                                <button class="btn btn-default collapsed" data-toggle="collapse"
                                        data-target="#collapse2"
                                        aria-expanded="false" aria-controls="collapse6">
                                    Tratamiento
                                </button>
                            </h5>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                            <div class="card-body">

                                {!! Form::open(array('url'=>'Mascota/tratamiento', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Mascota</label>
                                            <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                                                    data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
                                                {{--                                                @foreach($sintomas as $s)--}}
                                                {{--                                                    <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Tratamiento</label>
                                            <textarea name="tratamiento" cols="3" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Fecha Tratamiento</label>
                                            <input class="form-control " name="fecha" type="date" required="required"
                                                   data-validation-required-message="Ingrese un sintoma por favor">
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

                    <div class="card">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-default collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Notas de Progreso
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                            <div class="card-body">

                                {!! Form::open(array('url'=>'Mascota/tratamiento', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Mascota</label>
                                            <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                                                    data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
{{--                                                @foreach($sintomas as $s)--}}
{{--                                                    <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>--}}
{{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <textarea name="descripcion" cols="3" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Fecha Nota</label>
                                            <input name="fecha" cols="3" rows="3" class="form-control"
                                                   placeholder="Descripcion diagnostico">
                                        </div>
                                    </div>


                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-default collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Examen Fisico
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                            <div class="card-body">

                                {!! Form::open(array('url'=>'Mascota/ExamenFisico', 'method'=>'POST', 'autocomplete'=>'off')) !!}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Mascota</label>
                                            <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                                                    data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
                                                {{--                                                @foreach($sintomas as $s)--}}
                                                {{--                                                    <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>--}}
                                                {{--                                                @endforeach--}}
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
                                            <input type="'text" class="form-control" name="temp"
                                                   required="required"
                                                   data-validation-required-message="Ingrese temperatura por favor" {{old('temp')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>TLLC</label>
                                            <input type="'text" class="form-control" name="TLLC"
                                                   required="required"
                                                   data-validation-required-message="Ingrese TLLC por favor" {{old('TLLC')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Membrana Mucosa</label>
                                            <input type="'text" class="form-control" name="mem_mucosa"
                                                   required="required"
                                                   data-validation-required-message="Ingrese membrana mucosa por favor" {{old('mem_mucosa')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Sistema Cardiovascular</label>
                                            <input type="'text" class="form-control" name="S_cardiovascular"
                                                   required="required"
                                                   data-validation-required-message="Ingrese sistema cardiovascular por favor" {{old('S_cardiovascular')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Sistema Respiratorio</label>
                                            <input type="'text" class="form-control" name="S_respiratorio"
                                                   required="required"
                                                   data-validation-required-message="Ingrese sistema respiratorio por favor" {{old('S_respiratorio')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Sistema Nervioso</label>
                                            <input type="'text" class="form-control" name="S_nervioso"
                                                   required="required"
                                                   data-validation-required-message="Ingrese sistema nervioso por favor" {{old('S_nervioso')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Sistema Genitourinario</label>
                                            <input type="'text" class="form-control" name="S_genitourinario"
                                                   required="required"
                                                   data-validation-required-message="Ingrese sistema genitourinario por favor" {{old('S_genitourinario')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Sistema Musculo Esquelitico</label>
                                            <input type="'text" class="form-control" name="S_musculo_esqueletico"
                                                   required="required"
                                                   data-validation-required-message="Ingrese sistema musculo esqueletico por favor" {{old('S_musculo_esqueletico')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Sistema Digestivo</label>
                                            <input type="'text" class="form-control" name="S_digestivo"
                                                   required="required"
                                                   data-validation-required-message="Ingrese sistema digestivo por favor" {{old('S_digestivo')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Sistema Tegumentario</label>
                                            <input type="'text" class="form-control" name="S_tegumentario"
                                                   required="required"
                                                   data-validation-required-message="Ingrese ojo por favor" {{old('S_tegumentario')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Sistema Linfatico</label>
                                            <input type="'text" class="form-control" name="S_linfatico"
                                                   required="required"
                                                   data-validation-required-message="Ingrese ojo por favor" {{old('S_linfatico')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Ojo</label>
                                            <input type="'text" class="form-control" name="ojo"
                                                   required="required"
                                                   data-validation-required-message="Ingrese ojo por favor" {{old('ojo')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Oido</label>
                                            <input type="'text" class="form-control" name="oido"
                                                   required="required"
                                                   data-validation-required-message="Ingrese ojo por favor" {{old('oido')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Actitud</label>
                                            <input type="'text" class="form-control" name="actitud"
                                                   required="required"
                                                   data-validation-required-message="Ingrese ojo por favor" {{old('actitud')}}>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Hidratacion</label>
                                            <input type="'text" class="form-control" name="hidratacion"
                                                   required="required"
                                                   data-validation-required-message="Ingrese ojo por favor" {{old('hidratacion')}}>
                                            <p class="help-block text-danger"></p>
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
                        <div class="card-header" id="heading5">
                            <h2 class="mb-0">
                                <button class="btn btn-default collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                   Informacion Adicional
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                            <div class="card-body">

                                {!! Form::open(array('url'=>'Mascota/ExamenFisico', 'method'=>'POST', 'autocomplete'=>'off')) !!}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Mascota</label>
                                            <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                                                    data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
                                                {{--                                                @foreach($sintomas as $s)--}}
                                                {{--                                                    <option value="{{$s->idSintomas}}">{{$s->descripcion}}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Detalles Examen</label>
                                            <textarea type="text" class="form-control" cols="3" rows="3" name="detallesExam" {{old('detallesExam')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Lista Problemas</label>
                                            <textarea type="text" class="form-control" cols="3" rows="3" name="listProblemas" {{old('listProblemas')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Diagnostico Definitivo</label>
                                            <textarea type="'text" class="form-control" cols="3" rows="3" name="digDefinitivo" {{old('digDefinitivo')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Ayudas de Deagnostico</label>
                                            <textarea type="'text" class="form-control" cols="3" rows="3" name="ayudasDiag"{{old('ayudasDiag')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Condicion Corporal</label>
                                            <textarea type="'text" class="form-control" cols="3" rows="3" name="condCorporal"{{old('condCorporal')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Convivencia con otros Animales</label>
                                            <textarea type="'text" class="form-control" cols="3" rows="3" name="convAnimales"{{old('convAnimales')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Enfermedades</label>
                                            <textarea type="'text" class="form-control" cols="3" rows="3" name="enfermedades"{{old('enfermedades')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Temperamento</label>
                                            <textarea type="'text" class="form-control" cols="3" rows="3" name="temperamento"{{old('temperamento')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Fecha Ultima Vacuna</label>
                                            <input type="date" class="form-control" name="ultimaVacuna" {{old('ultimaVacuna')}}>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Fecha Ultima Desparacitacion</label>
                                            <textarea type="'date" class="form-control" cols="3" rows="3" name="ultimaDesparacitacion"{{old('ultimaDesparacitacion')}}></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Frecuencia Baño</label>
                                            <textarea type="'text" class="form-control" cols="3" rows="3" name="frecuenciaBaño"{{old('frecuenciaBaño')}}></textarea>
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

                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

</div>
