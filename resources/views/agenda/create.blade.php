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

        {!! Form::open(array('url'=>'agenda', 'method'=>'POST', 'autocomplete'=>'off', 'id' => 'formAgn')) !!}
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

            <div class="col-md-3">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="datetime-local" class="form-control"  name="Fecha" id="Fecha" min="{{$variable}}" value="{{$variable}}">

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Hora</label>

                    <select name="Hora" id="Hora" class="form-control">
                        <option value="0">Seleccionar</option>
                        <option value="07:00:00">07:00</option>
                        <option value="08:00:00">08:00</option>
                        <option value="09:00:00">09:00</option>
                        <option value="10:00:00">10:00</option>
                        <option value="11:00:00">11:00</option>
                        <option value="12:00:00">12:00</option>
                        <option value="13:00:00">13:00</option>
                        <option value="14:00:00">14:00</option>
                        <option value="15:00:00">15:00</option>
                        <option value="16:00:00">16:00</option>
                        <option value="17:00:00">17:00</option>
                    </select>

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

          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
            <div class="form-group">
                <button onclick="validar()" id="Registrar" type="submit" class="btn btn-primary btn-xl">Asignar</button>
                <script>
                    function validar() {

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'exito',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }

                    $(document).ready(function(){

                    });
                </script>
            </div>
         </div>
        </div>
        {!! Form::close() !!}
    </div>
    @include('sweet::alert')
@endsection
