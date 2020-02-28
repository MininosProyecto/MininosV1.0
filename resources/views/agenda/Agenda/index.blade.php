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

    <link href='{{asset('fullCalendar/core/main.css')}}' rel='stylesheet'/>
    <link href='{{asset('fullCalendar/daygrid/main.css')}}' rel='stylesheet'/>
    <link href='{{asset('fullCalendar/list/main.css')}}' rel='stylesheet'/>
    <link href='{{asset('fullCalendar/timegrid/main.css')}}' rel='stylesheet'/>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: Arial;
            font-size: 14px;
        }

        #calendar {
            max-width: 1000px;
            margin: 40px auto;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {

                defaultDate: new Date(2020, 0, 1),
                plugins: ['dayGrid', 'interaction', 'timeGrid', 'list'],

                header:
                    {
                        left: 'prev,next today Miboton',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                customButtons: {
                    Miboton: {
                        text: "Boton",
                        click: function () {
                            $('#exampleModal').modal('toggle');
                        }
                    }
                },
                dateClick: function (info) {

                    $('#txtFecha').val(info.dateStr);

                    $('#exampleModal').modal('toggle');

                    // console.log(info);
                    // calendar.addEvent({title: "Evento X", date: info.dateStr});
                },
                eventClick: function (info) {

                    console.log(info.event);
                    console.log(info.event.title);
                    console.log(info.event.start);

                    console.log(info.event.end);
                    console.log(info.event.textColor);
                    console.log(info.event.backgroundColor);

                    console.log(info.event.extendedProps.descripcion);


                    $('#txtId').val(info.event.id);
                    $('#txtTitulo').val(info.event.title);

                    mes = (info.event.start.getMonth() + 1);
                    dia = (info.event.start.getDate());
                    anio = (info.event.start.getFullYear());
                    hora = (info.event.start.getHours() + ":" + info.event.start.getMinutes());

                    mes = (mes < 10) ? "0" + mes : mes;
                    dia = (dia < 10) ? "0" + dia : dia;

                    $('#txtFecha').val(anio + "-" + mes + "-" + dia);
                    $('#txtHora').val(hora);
                    $('#txtColor').val(info.event.backgroundColor);
                    $('#txtDescripcion').val(info.event.extendedProps.descripcion);

                    $('#exampleModal').modal();
                },

                events: "{{url('agenda/Agenda/show')}}"

            });

            calendar.setOption('locale', 'Es')
            calendar.render();

            $('#btnAgregar').click(function () {
                objEvento = recolectarDatosGUI("POST");

                enviarInformacion('', objEvento);
            });

            $('#btnBorrar').click(function () {
                objEvento = recolectarDatosGUI("DELETE");

                enviarInformacion('/' + $('#txtId').val(), objEvento);
            });

            $('#btnModificar').click(function () {
                objEvento = recolectarDatosGUI("PATCH");

                enviarInformacion('/' + $('#txtId').val(), objEvento);
            });

            function recolectarDatosGUI(method) {

                nuevoEvento =
                    {
                        id: $('#txtId').val(),
                        title: $('#txtTitulo').val(),
                        descripcion: $('#txtDescripcion').val(),
                        color: $('#txtColor').val(),
                        TextColor: '#FFFFFFF',
                        start: $('#txtFecha').val() + " " + $('#txtHora').val(),
                        end: $('#txtFecha').val() + " " + $('#txtHora').val(),
                        '_token': $("meta[name='csrf-token']").attr("content"),
                        '_method': method
                    }

                return (nuevoEvento);
            }

            function enviarInformacion(accion, objEvento) {

                $.ajax({
                    type: "POST",
                    url: "{{url('eventos')}}" + accion,
                    data: objEvento,
                    success: function (msg) {
                        console.log(msg);
                        $('#exampleModal').modal('toggle');
                        calendar.refetchEvents();
                    },
                    error: function () {
                        alert("Hay un error");
                    }

                })
            }

        });
    </script>
</head>
<body>
@include('agenda.Agenda.nav')
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('cliente')}}">
                            <span data-feather="user"></span>
                            Clientes
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="github"></span>
                            Mascota
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('Mascota/historiaClinica')}}">
                                <span data-feather="activity"></span>
                                Historia Clinica</a>
                            <a class="dropdown-item" href="{{url('Mascota/raza')}}">
                                <span data-feather="award"></span>
                                Raza</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('Mascota/mascota')}}">
                                <span data-feather="gitlab"></span>
                                Registro Mascotas</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="calendar"></span>
                            Agenda
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('agenda/citaMedica')}}">
                                <span data-feather="activity"></span>
                                Citas Medicas
                            </a>

                            <a class="dropdown-item" href="{{url('agenda/Agenda')}}">
                                <span data-feather="activity"></span>
                                Agendar
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{url('infoAdd')}}">
                                <span data-feather="award"></span>
                                Reserva Spa
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('empleado')}}">
                            <span data-feather="bar-chart-2"></span>
                            Empleado
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="bookmark"></span>
                            Info Mascota
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('Mascota/sintomas')}}">
                                <span data-feather="activity"></span>
                                Sintomas
                            </a>
                            <a class="dropdown-item" href="{{url('Mascota/diagnostico')}}">
                                <span data-feather="award"></span>
                                Diagnostico
                            </a>
                            <a class="dropdown-item" href="{{url('Mascota/tratamiento')}}">
                                <span data-feather="gitlab"></span>
                                Tratamiento
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{url('infoAdd')}}">
                                <span data-feather="award"></span>
                                Info Adiccionar H-C
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                        </a>
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
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Datos del Evento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tipo Cita</label>
                                                <select class="form-control" name="txtTipoReserva" id="txtTipoReserva"
                                                        required="required"
                                                        data-validation-required-message="Seleccione una opcion" {{old('txtTipoReserva')}}>
                                                    <option value="medica">Medica</option>
                                                    <option value="reservaSpa">Reserva Spa</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fecha</label>
                                                <input type="text" class="form-control" name="txtFecha" id="txtFecha"
                                                       disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hora</label>
                                                <input type="text" class="form-control" name="txtHora" id="txtHora">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mascota</label>
                                                <select class="form-control" name="txtTipoReserva" id="txtTipoReserva"
                                                        required="required"
                                                        data-validation-required-message="Seleccione una opcion" {{old('txtTipoReserva')}}>
                                                    <option value="medica">Medica</option>
                                                    <option value="reservaSpa">Reserva Spa</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Empleado</label>
                                                <select class="form-control" name="txtTipoReserva" id="txtTipoReserva"
                                                        required="required"
                                                        data-validation-required-message="Seleccione una opcion" {{old('txtTipoReserva')}}>
                                                    <option value="medica">Medica</option>
                                                    <option value="reservaSpa">Reserva Spa</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descripcion</label>
                                                <textarea name="txtDescripcion" class="form-control" id="txtDescripcion"
                                                          cols="30"
                                                          rows="2"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Color</label>
                                                <input type="color" class="form-control" name="txtColor" id="txtColor">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                            <button id="btnAgregar" class="btn btn-success">Agregar</button>
                            <button id="btnModificar" class="btn btn-warning">Modificar</button>
                            <button id="btnBorrar" class="btn btn-danger">Borrar</button>
                            <button id="btnCancelar" class="btn btn-secondary">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="calendar"></div>
        </main>
    </div>
</div>


<script src='{{asset('fullCalendar/core/main.js')}}'></script>

<script src='{{asset('fullCalendar/interaction/main.js')}}'></script>

<script src='{{asset('fullCalendar/daygrid/main.js')}}'></script>
<script src='{{asset('fullCalendar/list/main.js')}}'></script>
<script src='{{asset('fullCalendar/timegrid/main.js')}}'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="{{asset('js/Dash.js')}}"></script>
</body>

{{--bootstrap--}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- DATE-PICKER -->
<script src={{asset('plugins/vendor/date-picker/js/datepicker.js')}}></script>
<script src={{asset('plugins/vendor/date-picker/js/datepicker.en.js')}}></script>

<script src={{asset('plugins/js/main.js')}}></script>

{{--table--}}
<script src={{asset('plugins/js/tablesaw-init.js')}}></script>


</html>
