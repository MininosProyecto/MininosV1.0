<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
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
                                        <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapse1"
                                                aria-expanded="false" aria-controls="collapse1">
                                            Diagnostico
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                                    <div class="card-body">
                                        {!! Form::open(array('url'=>'Mascota/diagnostico', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Diagnostico</label>
                                                    <textarea name="diagnostico" cols="3" rows="3" class="form-control"
                                                              placeholder="Descripcion Diagnostico"></textarea>
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
                                        <button class="btn btn-default collapsed" data-toggle="collapse" data-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse6">
                                            Tratamiento
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                                    <div class="card-body">

                                        {!! Form::open(array('url'=>'Mascota/tratamiento', 'method'=>'POST', 'autocomplete'=>'off')) !!}

                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Tratamiento</label>
                                                    <textarea name="tratamiento" cols="3" rows="3" class="form-control"
                                                              placeholder="Descripcion tratamiento"></textarea>
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
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Collapsible Group Item #3
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
