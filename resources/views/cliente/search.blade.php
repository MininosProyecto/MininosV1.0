{!! Form::open(array('url' => 'cliente', 'method' => 'GET', 'autocomplete' => 'off', 'role' => 'search')) !!}

<div class="row">

<<<<<<< HEAD
    <div class="col-6">
        <div class="form-group">
            <input style="border-color: #333333" class="form-control form-control-dark w-100" type="text"
                   placeholder="Buscar..." name="BuscarTexto" value="{{$buscar}}">
        </div>
    </div>
=======
                <input style="border-color: #333333" class="form-control form-control-dark w-100" type="text"
                       placeholder="Buscar..." name="BuscarTexto" value="{{$buscar}}">

                <button type="submit" class="btn btn-outline-secondary " style="color: #9c9c9c; margin-bottom: 10px;margin-left: 3px"><a type="submit">Buscar</a></button>
>>>>>>> 8af1a65344b67eed06f3a59cf391ae32222f5dcb

    <div style="margin-left: -10px;" >
        <div class="form-group">
            <button type="submit" class="btn btn-outline-secondary " style="color: #9c9c9c; margin-bottom: 10px"><a type="submit">Buscar</a></button>
        </div>
    </div>

</div>

{!! Form::close() !!}

