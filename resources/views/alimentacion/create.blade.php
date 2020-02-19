@section('Cabecera')
    Listado Alimentacion
@endsection

@section('Listar')

    <a href="{{url('alimentacion')}}">
        <button type="button" class="btn btn-sm btn-outline-secondary">Listar</button></a>

@endsection

@section('Contenido')


    <div style="margin-bottom: 5%;">
        {!! Form::open(array('url'=>'alimentacion', 'method'=>'POST', 'autocomplete'=>'off')) !!}
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Id Alimento</label>
                    <input type="number" class="form-control" name="id_alimentacion" placeholder="Id Alimento..."
                           required="required"
                           data-validation-required-message="Ingrese id alimento por favor" {{old('id_alimentacion')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Producto</label>
                    <input type="text" class="form-control" name="producto" placeholder="Producto..."
                           required="required"
                           data-validation-required-message="Ingrese producto por favor" {{old('producto')}}>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Historia Clinica</label>
                    <input type="number" class="form-control" name="historia"
                           required="required"
                           data-validation-required-message="Ingrese historia por favor" {{old('historia')}}>
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
