@extends('Layouts.Dash')

@section('Cabecera')
    Registro Raza
@endsection

@section('Listar')

    <a href="{{url('/Mascota/raza')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')

    <!-- form registro cliente -->

    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
    @include('Mascota.mascota.search')
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
