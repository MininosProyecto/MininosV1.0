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
    @include('Mascota.historiaClinica.search')

    <div style="margin-bottom: 5%;">
        {!! Form::open(array('url'=>'Mascota/historiaClinica', 'method'=>'POST', 'autocomplete'=>'off')) !!}

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label>Mascota</label>
                    <select name="Mascotas_idMascotas" class="selectpicker form-control" data-live-search="true" data-size="5">
                        @foreach($mascotas as $mas)
                            <option value="{{$mas->id_mascota}}">{{$mas->nombre_mascota}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr width="1500" style="background: #99999961;">

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
