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
            $buscar = trim($request->get('searchText'));

            $agendas = DB::table('agenda as ag')
                ->join('empleado as emp', 'idEmpleado', '=', 'Empleados_id_veterinario')
                ->join('mascota as mas', 'id_mascota', '=', 'Mascota_id_mascota')
                ->join('tipocita as tc', 'id_tipoCita', '=', 'TipoCita_id_tipoCita')

                ->select('ag.idAgenda', 'ag.fecha_agenda', 'ag.estado' , 'ag.Empleados_id_veterinario')

                ->where([
                    ['ag.idAgenda', 'LIKE', '%'.$buscar.'%'],
                    ['tc.tipoCita', 'LIKE', '%'.$buscar.'%']
                ])
                ->orWhere([
                    ['ag.Empleados_id_veterinario', 'LIKE', '%'.$buscar.'%'],
                    ['mas.nombre']
                ])

                ->orderBy('ag.idAgenda', 'desc')
                ->paginate(7);

            return view('agenda.index',compact('agendas','buscar'));
        }
    }


    public function create()
    {
        $mascotas = DB::table('mascota')->select('id_mascota' , 'nombre_mascota')->get();
        $empleados = DB::table('empleado')->select('idEmpleado' , 'nombre_empleado')->get();
        $tipoCitas = DB::table('tipocita')->select('id_tipoCita' , 'tipoCita')->get();

        return view('agenda.create', compact('empleados', 'mascotas'), compact('tipoCitas'));
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

    }


    public function destroy($id)
    {

    }
}
