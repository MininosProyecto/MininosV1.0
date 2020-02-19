@extends('Layouts.Dash')

@section('Cabecera')
   Informacion Adicional
@endsection

@section('Listar')
    <a href="{{url('/infoAdd')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>
@endsection

@section('Contenido')


    <div style="margin-bottom: -5%;">

        {!! Form::open(array('url'=>'infoAdd', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Detalles Examen</label>
                    <textarea type="text" class="form-control" name="detallesExamen" placeholder="Detalles Examen..."
                           required="required"
                              data-validation-required-message="Ingrese detalles por favor" {{old('detallesExamen')}}></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Lista de Problemas</label>
                    <textarea type="text" class="form-control" name="listaProblemas" placeholder="Lista de Problemas..."
                              required="required"
                              data-validation-required-message="Ingrese lista de proyectos por favor" {{old('listaProblemas')}}></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Diagnostico Definitivo</label>
                    <input class="form-control" name="DiagDefinitivo" type="text" placeholder="Nombre..." required="required"
                           data-validation-required-message="Ingrese diagnostico definitivo por favor" {{old('DiagDefinitivo')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Ayudas Diagnosticas</label>
                    <input class="form-control" name="ayudasDiagnostico" type="text" placeholder="Ayudas Diagnosticas..."
                           required="required"
                           data-validation-required-message="Ingrese ayudas diagnosticas por favor" {{old('ayudasDiagnostico')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Condicion Corporal</label>
                    <textarea type="text" class="form-control" name="condCorporal" placeholder="Condicion Corporal..."
                           required="required"
                              data-validation-required-message="Ingrese condicion corporal por favor" {{old('condCorporal')}}></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Convivencia con Otros Animales</label>
                    <input type="text" class="form-control" name="conv_OtrosAnimales" placeholder="Convivencia con otros animales..."
                           required="required"
                           data-validation-required-message="Ingrese su celular por favor" {{old('conv_OtrosAnimales')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>Enfermedades</label>
                    <textarea type="text" class="form-control" name="enfermedades" placeholder="Enfermedades"
                           required="required"
                              data-validation-required-message="Ingrese su Telefono por favor" {{old('enfermedades')}}></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Temperamento</label>
                    <input type="text" class="form-control" name="temperamento" placeholder="Temperamento..."
                           required="required"
                           data-validation-required-message="Ingrese Temperamento por favor" {{old('temperamento')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Fecha ultima desparasitacion</label>
                    <input type="date" class="form-control" name="fecha_ultimaDesp"
                           required="required"
                           data-validation-required-message="Ingrese su Fecha ultima desparasitacion por favor" {{old('fecha_ultimaDesp')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Frecuencia Baño</label>
                    <input type="text" class="form-control" name="frecuenciaBaño"
                           required="required"
                           data-validation-required-message="Ingrese su Frecuencia de baño por favor" {{old('frecuenciaBaño')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Fecha ultima Vacuna</label>
                    <input type="text" class="form-control" name="fecha_ultimaVacuna"
                           required="required"
                           data-validation-required-message="Ingrese su Fecha ultima vacuna por favor" {{old('fecha_ultimaVacuna')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Historia Clinica</label>
                    <input type="text" class="form-control" name="historiaClinica_id_historiaClinica"
                           required="required"
                           data-validation-required-message="Ingrese su historia clinica por favor" {{old('historiaClinica_id_historiaClinica')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <hr width="1500" style="background: #99999961;">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <button type="reset" class="btn btn-danger btn-xl" id="">Limpiar</button>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-xl" id="Registrar">Siguiente</button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
@endsection
