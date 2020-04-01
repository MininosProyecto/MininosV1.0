{!! Form::open(array('url' => 'Mascota/historiaClinica', 'method' => 'GET', 'autocomplete' => 'off', 'role' => 'search')) !!}

<div class="row">

    <div class="col-6">
        <div class="form-group">
            <input style="border-color: #333333" class="form-control form-control-dark w-100" type="text"
                   placeholder="Buscar..." name="BuscarTexto" value="{{$buscar}}">
        </div>
    </div>

    <div style="margin-left: -10px;">
        <div class="form-group">
            <button type="submit" class="btn btn-outline-secondary " style="color: #9c9c9c; margin-bottom: 10px"><a type="submit">Buscar</a></button>
        </div>
    </div>

</div>

<br>
{!! Form::close() !!}



