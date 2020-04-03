@extends('Layouts.app')

@section('content')
    <style>
        .imagen img{
            height: 400px;
            width:100%;

        }

    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;font-family: 'Cooper Black'">Nosotros</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                            <div class="imagen"><img src="/Image/perro.jpg">
                                <br>
                                <br>
                                <br>
                                <h1 style="text-align: center">Misión</h1>
                                <div id="mision"> </div>
                                    <p style="text-align: center">Crear conciencia social para el bienestar animal, fortaleciendo el vínculo emocional que existe entre las personas y sus animales de compañía, mediante la prestación de nuestros servicios médicos veterinarios y complementarios a la comunidad Antioqueña.</p>

                                </div>
                            </div>

                            <div id="Vision">
                                <h1 style="text-align: center">Visión</h1>

                                <div class="parrafo">
                                    <p style="text-align: center">En 2025, seremos la institución veterinaria líder en la promoción de la salud animal, educando a la comunidad y trasmitiendo los valores humanos necesarios para transformar nuestra sociedad, participando  en su transformación hacia el Departamento con la mejor sanidad, vigilancia y trato humanitario para con los animales en Colombia.</p>
                                </div>
                            </div>
                <br>
                <br>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
