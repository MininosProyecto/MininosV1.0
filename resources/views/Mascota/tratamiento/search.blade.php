{!! Form::open(array('url' => 'Mascota/tratamiento', 'method' => 'GET', 'autocomplete' => 'off', 'role' => 'search')) !!}

<div class="from-group">
    <div class="row">
        <div class="col-6">
            <div class="input-group">

                <input style="border-color: #333333" class="form-control form-control-dark w-100" type="text"
                       placeholder="Buscar..." name="BuscarTexto" value="{{$buscar ?? ''}}" aria-label="Search">

                <button type="submit" class="btn btn-outline-secondary btn-sm btn-sm" style="color: #9c9c9c; margin-bottom: 10px"> <a class="nav-link" type="submit">Buscar</a></button>

            </div>
        </div>
    </div>

</div>
{!! Form::close() !!}

