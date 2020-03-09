{!! Form::open(array('url' => 'infoAdd', 'method' => 'GET', 'autocomplete' => 'off', 'role' => 'search')) !!}

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Mininos</a>

    <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" name="searchText" value="{{$query ?? ''}}" aria-label="Search">

    <button type="submit" class="btn btn-default" style="color: #9c9c9c"> <a class="nav-link" type="submit">Buscar</a></button>

    @if (Route::has('login'))
        @auth
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
        @else
            <a class="nav-link" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                {{--                            <a class="nav-link" href="{{ route('register') }}">Register</a>--}}
            @endif
        @endauth
    @endif

</nav>

{!! Form::close() !!}
