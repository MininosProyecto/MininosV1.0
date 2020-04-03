<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Empleado;
use App\Mascota;
use App\TipoCita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\View\View;

class AgendaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {
            $buscar = trim($request->get('BuscarTexto'));

            $agendas = DB::table('agenda as a')
                ->join('empleado as e', 'idEmpleado', '=', 'Empleados_id_veterinario')
                ->join('mascota as m', 'id_mascota', '=', 'Mascota_id_mascota')
                ->join('tipocita as tc', 'id_tipoCita', '=', 'TipoCita_id_tipoCita')
                ->select('a.idAgenda', 'a.fecha_agenda', 'a.estado', 'a.Empleados_id_veterinario', 'a.descripcion', 'm.nombre_mascota', 'e.nombre_empleado', 'tc.tipoCita')
                ->where([
                    ['a.idAgenda', 'LIKE', '%' . $buscar . '%'],
                    ['tc.tipoCita', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['a.Empleados_id_veterinario', 'LIKE', '%' . $buscar . '%'],
                    ['m.nombre_mascota', 'LIKE', '%' . $buscar . '%']
                ])
                ->orderBy('a.idAgenda', 'desc')
                ->paginate(7);

            return view('agenda.index', compact('agendas', 'buscar'));
        }
    }


    public function create()
    {
        $mascotas = DB::table('mascota')->select('id_mascota', 'nombre_mascota')->get();
        $empleados = DB::table('empleado')->select('idEmpleado', 'nombre_empleado')->get();
        $tipoCitas = DB::table('tipocita')->select('id_tipoCita', 'tipoCita')->get();
        $variable = now()->toDateString();
        return view('agenda.create', compact('empleados', 'mascotas', 'variable'), compact('tipoCitas'));
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
      $cita->Correo = $request->get('Correo');

//      //  DB::table('agenda')->where('fecha_agenda', $cita)->exists();
//       // DB::table('planespago')->where('idCiclo', $idCiclo)->exists();
//       // $Fagenda = Agenda::where('fecha_agenda','=',$cita->fecha_agenda)->first();
//       // if ($Fagenda == $cita->fecha_agenda) {
//       //     echo "error";
//      //  }


       $nombreM = Mascota::find($cita->Mascota_id_mascota);
       $nombreE = Empleado::find($cita->Empleados_id_veterinario);
        $TipoC = TipoCita::find($cita->TipoCita_id_tipoCita);
       $data = [
           'fecha_agenda' => $cita->fecha_agenda,
           'descripcion' => $cita->descripcion,
           'TipoCita_id_tipoCita' => $TipoC->tipoCita,
           'Empleados_id_veterinario' => $nombreE->nombre_empleado,
           'Mascota_id_mascota' => $nombreM->nombre_mascota];

        Mail::send('email.agendaCorreo', $data, function ($msj) {
            $msj->subject('Confirmación Cita Mininos');
            $msj->from('ktsanz2605@gmail.com');
           $msj->to('emanuelmauricio456@gmail.com');
       });

        $validarFecha = $request->get('Fecha');
        $date = $validarFecha.date('Y-m-d H:i');

        $fechasDb = DB::table('agenda')->select('fecha_agenda')->get();
        $bandera=false;
        $ultimo=false;
        $cuantos=count($fechasDb);
        $contador=0;

        for($i = 0; $i < $cuantos; $i++){
            $mostrar=$fechasDb[$i]->fecha_agenda;
            $mostrar=$mostrar.date('Y-m-d H:i');
            if ( $date ==$mostrar ){
                $bandera=true;
            }

            $contador=$contador+1;
            if($cuantos == $contador ){
                $ultimo=true;
            }
            if(!$bandera && $ultimo){
                $cita->save();
                return Redirect::to('agenda/index');
            }

        }





         return Redirect::to('agenda/create');
        return back()->with('success','Item created successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        $mascotas = DB::table('mascota')->select('id_mascota', 'nombre_mascota')->get();
        $empleados = DB::table('empleado')->select('idEmpleado', 'nombre_empleado')->get();
        $tipoCitas = DB::table('tipocita')->select('id_tipoCita', 'tipoCita')->get();

        return view('agenda.edit', compact('empleados', 'mascotas'), compact('tipoCitas', 'agenda'));
    }


    public function update(Request $request, $id)
    {
        $agenda = Agenda::findOrFail($id);

        $agenda->fecha_agenda = $request->get('Fecha');
        $agenda->estado = 'Activo';
        $agenda->descripcion = $request->get('Descripcion');
        $agenda->Mascota_id_mascota = $request->get('idMascota');
        $agenda->Empleados_id_veterinario = $request->get('idEmpleado');
        $agenda->TipoCita_id_tipoCita = $request->get('TipoCita');

        $agenda->update();


        return Redirect::to('agenda');

    }


    public function destroy($id)
    {

    }
}
