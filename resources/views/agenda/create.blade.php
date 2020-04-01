@extends('Layouts.Dash')

@section('Cabecera')
    Registro Citas
@endsection

@section('Listar')
    <a href="{{url('/agenda')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>
@endsection

@section('Contenido')

    <div style="margin-bottom: -5%;">

        {!! Form::open(array('url'=>'agenda', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">


            <div class="col-md-6">
                <div class="form-group">
                    <label>Tipo Cita</label>
                    <select class="form-control" name="TipoCita" id="TipoCita"
                            required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('TipoCita')}}>
                        @foreach($tipoCitas as $tc)
                        <option value="{{$tc->id_tipoCita}}">{{$tc->tipoCita}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Fecha y hora</label>
                    <input type="datetime-local" class="form-control" name="Fecha" id="Fecha">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" class="form-control" name="Correo" id="Correo">

                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label>Mascota</label>
                    <select class="form-control" name="idMascota" id="idMascota"
                            required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('idMascota')}}>
                        @foreach($mascotas as $mas)
                        <option value="{{$mas->id_mascota}}">{{$mas->nombre_mascota}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Profesional</label>
                    <select class="form-control" name="idEmpleado" id="idEmpleado"
                            required="required"
                            data-validation-required-message="Seleccione una opcion" {{old('idEmpleado')}}>
                        @foreach($empleados as $em)
                        <option value="{{$em->idEmpleado}}">{{$em->nombre_empleado}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="Descripcion" class="form-control" id="Descripcion"
                              cols="30"
                              rows="2"></textarea>
                </div>
            </div>

        </div>

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
            <div class="form-group">
                <button onclick="mensaje()" type="submit" class="btn btn-primary btn-xl" id="Registrar">Siguiente</button>

                <script>
                    function mensaje() {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }</script>
            </div>
        </div>


        {!! Form::close() !!}
    </div>

    @include('sweet::alert')
@endsection
