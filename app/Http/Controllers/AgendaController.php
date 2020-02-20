<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));

            $agendas = DB::table('agenda as ag')
                ->join('empleado as emp', 'idEmpleado', '=', 'Empleados_id_veterinario')

                ->select('ag.idAgenda', 'ag.fecha_agenda', 'ag.estado' , 'ag.Empleados_id_veterinario')
                ->where([
                    ['ag.idAgenda', 'LIKE', '%'.$query.'%'],
                ])
                ->orWhere([
                    ['ag.Empleados_id_veterinario', 'LIKE', '%'.$query.'%']
                ])
                ->orderBy('ag.idAgenda', 'desc')
                ->paginate(7);

            return view('agenda.index',compact('agendas','query'));
        }
    }


    public function create()
    {
        $empleados = DB::table('empleado')->select('idEmpleado' , 'nombre_empleado')->get();

        return view('agenda.create', compact('empleados'));
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
