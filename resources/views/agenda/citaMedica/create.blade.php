@extends('Layouts.Dash')

@section('Cabecera')
    Registro Cita
@endsection

@section('Listar')

    <a href="{{url('/agenda/citaMedica')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

   @include('agenda.citaMedica.search')

    <div style="margin-bottom: 25%;">
        {!! Form::open(array('url'=>'Mascota/raza', 'method'=>'POST', 'autocomplete'=>'off')) !!}

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

            <input class="form-control " name="id_raza" type="text" placeholder="Id Raza..." required="required" data-validation-required-message="Ingrese una raza por favor">

            <br>
            <textarea name="descripcion" cols="5" rows="5" class="form-control"></textarea>
            <br>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
