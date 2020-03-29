@extends('Layouts.Dash')

@section('Cabecera')
    Registro Usuario
@endsection

@section('Listar')
    <a href="{{url('/seguridad/usuario')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button>
    </a>
@endsection

@section('Contenido')

    {!! Form::open(array('url'=>'seguridad/usuario', 'method'=>'POST', 'autocomplete'=>'off')) !!}

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="name">Nombre</label>

                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="email">Correo</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="password">Contraseña</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="password-confirm">Confirmar contraseña</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </div>
        </div>

        <hr width="1500" style="background: #99999961;">

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
            <div class="form-group">
                <button type="reset" class="btn btn-danger btn-xl" id="">Limpiar</button>
            </div>
        </div>

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="Registrar">Registrar</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
