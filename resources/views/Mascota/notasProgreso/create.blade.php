@extends('Layouts.Dash')

@section('Cabecera')
   Registro Notas Progreso
@endsection

@section('Listar')
    <a href="{{url('Mascota/notasProgreso')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>
@endsection

@section('Contenido')

    <div style="margin-bottom: 5%;">
        {!! Form::open(array('url'=>'Mascota/alimentacion', 'method'=>'POST', 'autocomplete'=>'off')) !!}

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label>Historia Clinica</label>
                    <select name="historia" class="selectpicker form-control" data-live-search="true">
                        @foreach($historia as $his)
                            <option value="{{$his->idHistoriaClinica}}">{{$his->nombre_mascota}}</option>
                        @endforeach
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="fecha"
                           required="required"
                           data-validation-required-message="Ingrese una fecha por favor" {{old('fecha')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="form-group">
                    <label>Descripcion</label>

                    <textarea name="descripcion" class="form-control" required="required"
                              data-validation-required-message="Ingrese una fecha por favor" {{old('fecha')}} cols="5" rows="5"></textarea>

                    <p class="help-block text-danger"></p>
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
