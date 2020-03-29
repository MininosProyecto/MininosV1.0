<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- DATE-PICKER -->
    <link rel="stylesheet" href={{asset('plugins/vendor/date-picker/css/datepicker.min.css')}}>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href={{asset('plugins/css/style.css')}}>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/StylesDash.css')}}" rel="stylesheet">
    <link href="{{asset('css/tablesaw.css')}}" rel="stylesheet">

    {{--    Calendar--}}
    @yield('links')

</head>
<body>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Mininos</a>

    <ul class="nav flex-column">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
{{--            @if (Route::has('register'))--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                </li>--}}
{{--            @endif--}}
        @else
            <li class="nav-item dropdown">
                <a style="color: #9c9c9c" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('register') }}">
                        <span data-feather="settings"></span>&nbsp
                        {{ __('Perfil') }}</a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span data-feather="log-out"></span>&nbsp
                        {{ __('Cerrar sesion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

    </ul>

</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('cliente')}}">
                            <span data-feather="user"></span>
                            Clientes - Mascotas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('Mascota/historiaClinica')}}">
                            <span data-feather="activity"></span>
                            Historia Clinica
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="github"></span>
                            Mascotaxxxx
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{url('Mascota/raza')}}">
                                <span data-feather="award"></span> &nbsp
                                Raza
                            </a>

                            <a class="dropdown-item" href="{{url('Mascota/alimentacion')}}">
                                <span data-feather="coffee"></span> &nbsp
                                Alimentacion
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{url('Mascota/mascota')}}">
                                <span data-feather="align-left"></span> &nbsp
                                Lista Mascotas
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('agenda')}}">
                            <span data-feather="calendar"></span>
                            Agenda
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="users"></span>
                            Empleados
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('empleado/empleados')}}">
                                <span data-feather="align-left"></span> &nbsp
                                Lista empleados
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{url('empleado/horariosEmpleados')}}">
                                <span data-feather="clock"></span> &nbsp
                                Horarios Empleados
                            </a>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="info"></span>
                            Info Mascota
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('Mascota/sintomas')}}">
                                <span data-feather="alert-triangle"></span> &nbsp
                                Sintomas
                            </a>

                            <a class="dropdown-item" href="{{url('Mascota/diagnostico')}}">
                                <span data-feather="book"></span> &nbsp
                                Diagnostico
                            </a>

                            <a class="dropdown-item" href="{{url('Mascota/tratamiento')}}">
                                <span data-feather="crop"></span> &nbsp
                                Tratamiento
                            </a>

                            <a class="dropdown-item" href="{{url('Mascota/notasProgreso')}}">
                                <span data-feather="clipboard"></span> &nbsp
                                Notas Progreso
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{url('infoAdd')}}">
                                <span data-feather="folder-plus"></span> &nbsp
                                Info Adiccionar H-C
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">

                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
