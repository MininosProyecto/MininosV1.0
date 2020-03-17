<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AgendaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request)
        {
            $buscar = trim($request->get('BuscarTexto'));

            $agendas = DB::table('agenda as a')
                ->join('empleado as e', 'idEmpleado', '=', 'Empleados_id_veterinario')
                ->join('mascota as m', 'id_mascota', '=', 'Mascota_id_mascota')
                ->join('tipocita as tc', 'id_tipoCita', '=', 'TipoCita_id_tipoCita')

                ->select('a.idAgenda', 'a.fecha_agenda', 'a.estado' , 'a.Empleados_id_veterinario', 'a.descripcion', 'm.nombre_mascota', 'e.nombre_empleado', 'tc.tipoCita')

                ->where([
                    ['a.idAgenda', 'LIKE', '%'.$buscar.'%'],
                    ['tc.tipoCita', 'LIKE', '%'.$buscar.'%']
                ])
                ->orWhere([
                    ['a.Empleados_id_veterinario', 'LIKE', '%'.$buscar.'%'],
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%']
                ])

                ->orderBy('a.idAgenda', 'desc')
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

        $cita = new Agenda();

        $cita->fecha_agenda = $request->get('Fecha');
        $cita->estado = 'Activo';
        $cita->descripcion = $request->get('Descripcion');
        $cita->Mascota_id_mascota = $request->get('idMascota');
        $cita->Empleados_id_veterinario = $request->get('idEmpleado');
        $cita->TipoCita_id_tipoCita = $request->get('TipoCita');

        $cita->save();

        return Redirect::to('agenda/create');
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
