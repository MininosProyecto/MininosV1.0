@extends('Layouts.Dash')

@section('Cabecera')
   Informacion Adicional
@endsection

@section('Listar')
    <a href="{{url('/Mascota/historiaClinica')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Historia Clinica</button></a>
@endsection

@section('Contenido')


    {!! Form::open(array('url'=>'Mascota/infoAdd', 'method'=>'POST', 'autocomplete'=>'off')) !!}
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Mascota</label>
                <select name="id_historiaClinica" class="selectpicker form-control" data-live-search="true" data-size="5" required="required"
                        data-validation-required-message="Seleccione una opcion" {{old('id_historiaClinica')}}>
                    @foreach($historiaClinica as $historia)
                        <option value="{{$historia->idHistoriaClinica}}">{{$historia->nombre_mascota}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Detalles Examen</label>
                <textarea type="text" class="form-control" cols="3" rows="3" name="detallesExamen" {{old('detallesExamen')}}></textarea>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Lista Problemas</label>
                <textarea type="text" class="form-control" cols="3" rows="3" name="listaProblemas" {{old('listaProblemas')}}></textarea>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Diagnostico Definitivo</label>
                <textarea type="'text" class="form-control" cols="3" rows="3" name="diagDefinitivo" {{old('diagDefinitivo')}}></textarea>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                <textarea type="'text" class="form-control" cols="3" rows="3" name="convivencia"{{old('convivencia')}}></textarea>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Frecuencia Baño</label>
                <textarea type="text" class="form-control" cols="3" rows="3" name="frecuenciaBaño"{{old('frecuenciaBaño')}}></textarea>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Fecha Ultima Vacuna</label>
                <input type="date" class="form-control" name="ultimaVacuna" {{old('ultimaVacuna')}}>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Fecha Ultima Desparacitacion</label>
                <input type="date" class="form-control" name="ultimaDespa"{{old('ultimaDespa')}}>
            </div>
        </div>

        <hr width="1700" style="background: #99999961;">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-sm btn-outline-primary">Registrar</button>
        </div>
    </div>
    {!! Form::close() !!}

@endsection
