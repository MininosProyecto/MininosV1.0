<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnostico;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class DiagnosticoController extends Controller
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

            $diagnosticos = DB::table('diagnostico as d')
                ->join('historia_clinica as h', 'h.idHistoriaClinica', '=', 'd.id_historiaClinica')
                ->join('mascota as m', 'm.id_mascota', '=', 'h.Mascotas_idMascotas')
                ->select('d.*', 'h.idHistoriaClinica', 'm.nombre_mascota')

                ->where([
                    ['m.estado', '=', 'Activo'],
                    ['m.nombre_mascota', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['m.estado', '=', 'Activo'],
                    ['d.descripcion', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['d.fecha', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])

                ->orderBy('d.idDiagnostico', 'desc')
                ->paginate(7);

            return view('Mascota.diagnostico.index', compact('diagnosticos', 'buscar'));
        }
    }


    public function create()
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
            ->select('m.id_mascota', 'm.nombre_mascota', 'h.idHistoriaClinica')->get();

        return view('Mascota.diagnostico.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {
        $diagnosticos = new Diagnostico();

        $diagnosticos->fecha = $request->get('fecha');
        $diagnosticos->descripcion = $request->get('diagnostico');
        $diagnosticos->id_historiaClinica = $request->get('id_historiaClinica');
        $diagnosticos->save();

        return Redirect('Mascota/historiaClinica/');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $diagnostico = Diagnostico::findOrFail($id);

        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'm.id_mascota', '=', 'h.Mascotas_idMascotas')
            ->select('m.id_mascota', 'm.nombre_mascota', 'h.idHistoriaClinica')->get();

        return view('Mascota.diagnostico.edit', compact('diagnostico', 'historiaClinica'));
    }


    public function update(Request $request, $id)
    {
        $diagnosticos = Diagnostico::findOrFail($id);

        $diagnosticos->fecha = $request->get('fecha');
        $diagnosticos->descripcion = $request->get('diagnostico');
        $diagnosticos->id_historiaClinica = $request->get('id_historiaClinica');
        $diagnosticos->update();

        return Redirect('Mascota/diagnostico');
    }


    public function destroy($id)
    {
        //
    }
}
