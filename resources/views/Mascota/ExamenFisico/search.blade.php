{!! Form::open(array('url' => 'ExamenFisico', 'method' => 'GET', 'autocomplete' => 'off', 'role' => 'search')) !!}

<div class="from-group">
    <div class="row">
        <div class="col-6">
            <div class="input-group">

                <input style="border-color: #333333" class="form-control form-control-dark w-100" type="text"
                       placeholder="Buscar..." name="BuscarTexto" value="{{$buscar ?? ''}}" aria-label="Search">

                <button type="submit" class="btn btn-outline-secondary" style="color: #9c9c9c; margin-bottom: 10px"> <a>Buscar</a></button>

            </div>
        </div>
    </div>

</div>
<br>
{!! Form::close() !!}

