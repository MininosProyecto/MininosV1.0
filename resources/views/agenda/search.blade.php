{!! Form::open(array('url' => 'agenda', 'method' => 'GET', 'autocomplete' => 'off', 'role' => 'search')) !!}

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Mininos</a>

    <ul class="navbar-nav px-3">

        <li class="nav-item text-nowrap">
            @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif
        </li>

    </ul>
</nav>

{!! Form::close() !!}
