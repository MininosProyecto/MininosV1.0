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

Route::resource('Mascota/diagnostico', 'DiagnosticoController');

Route::resource('Mascota/sintomas', 'SintomaController');

Route::resource('Mascota/tratamiento', 'TratamientoController');

Route::resource('Mascota/alimentacion', 'AlimentacionController');

Route::resource('Mascota/notasProgreso', 'NotasProgresoController');

Route::resource('agenda', 'AgendaController');

Route::resource('empleado/empleados', 'EmpleadoController');

Route::resource('empleado/horariosEmpleados', 'HorarioEmpleadoController');

Route::resource('vacunas', 'VacunaController');

Route::resource('agenda/citaMedica', 'CitaMedicaController');

Route::resource('infoAdd', 'InfoAdicionalController');
