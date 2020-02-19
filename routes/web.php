<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cliente', 'ClienteController');

Route::resource('Mascota/mascota', 'MascotaController');

Route::resource('Mascota/raza', 'RazaController');

Route::resource('Mascota/historiaClinica', 'HistoriaClinicaController');

Route::resource('agenda/citaMedica', 'AgendaController');

Route::resource('empleado', 'EmpleadoController');

Route::resource('vacunas', 'VacunaController');

Route::resource('alimentacion', 'AlimentacionController');

Route::resource('Mascota/diagnostico', 'DiagnosticoController');

Route::resource('Mascota/sintomas', 'SintomaController');

Route::resource('Mascota/tratamiento', 'TratamientoController');

Route::resource('infoAdd', 'InfoAdicionalController');
