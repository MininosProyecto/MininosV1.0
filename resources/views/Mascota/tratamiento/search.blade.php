{!! Form::open(array('url' => 'Mascota/tratamiento', 'method' => 'GET', 'autocomplete' => 'off', 'role' => 'search')) !!}

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Mininos</a>

    <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" name="searchText" value="{{$query ?? ''}}" aria-label="Search">

    <ul class="navbar-nav px-3">

        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>

    </ul>
</nav>

{!! Form::close() !!}
