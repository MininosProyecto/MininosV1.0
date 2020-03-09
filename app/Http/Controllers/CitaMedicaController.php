<?php

namespace App\Http\Controllers;

use App\Alimentacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CitaMedicaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));

            $citas = DB::table('cita_medica as cit')
                ->join('mascota as m', 'id_mascota', '=', 'Mascota_id_mascota')
                ->join('agenda as a', 'idAgenda','=','Agenda_idAgenda')

                ->select('cit.id_cita', 'm.nombre_mascota', 'a.fecha_agenda' ,'a.estado', 'a.Empleados_id_veterinario')
                ->where([
                    ['cit.id_cita', 'LIKE', '%'.$query.'%'],
                ])
                ->orWhere([
                    ['m.id_mascota', 'LIKE', '%'.$query.'%']
                ])
                ->orderBy('cit.id_cita', 'desc')
                ->paginate(7);

            return view('agenda.citaMedica.index',compact('citas','query'));
        }
    }


    public function create()
    {
        $mascotas = DB::table('mascota')->select('id_mascota' , 'nombre_mascota')->get();
        $agendas = DB::table('agenda')->select('idAgenda','fecha_agenda','estado')->get();

        return view('agenda.citaMedica.create', compact('mascotas','agendas'));
    }


    public function store(Request $request)
    {

        $cita = new Alimentacion();

        $cita->id_cita = $request->get('id_cita');
        $cita->fecha = $request->get('fecha');
        $cita->Mascota_id_mascota = $request->get('Mascota_id_mascota');
        $cita->Agenda_idAgenda = $request->get('Agenda_idAgenda');



        $cita->save();

        return Redirect::to('agenda/citaMedica/create');
    }
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
