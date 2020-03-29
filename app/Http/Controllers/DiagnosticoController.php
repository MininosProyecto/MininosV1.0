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

            $diagnosticos = DB::table('historia_clinica as h')
                ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
                ->join('diagnostico as d', 'idDiagnostico', '=', 'id_diagnostico')
                ->select('h.idHistoriaClinica', 'd.*', 'm.nombre_mascota')

                ->where([
                    ['m.estado', '=', 'Activo'],
                    ['m.nombre_mascota', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['m.estado', '=', 'Activo'],
                    ['d.descripcion', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['d.fecha', 'LIKE', '=', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])

                ->orderBy('d.idDiagnostico', 'desc')
                ->paginate(7);

            return view('Mascota.diagnostico.index', compact('diagnosticos', 'buscar'));
        }
    }


    public function create()
    {
        return view('Mascota.historiaClinica.create');
    }


    public function store(Request $request)
    {
        $diagnosticos = new Diagnostico();

        $diagnosticos->fecha = $request->get('fecha');
        $diagnosticos->descripcion = $request->get('diagnostico');
        $diagnosticos->save();

        return Redirect('cliente/create');
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
        $diagnosticos = Diagnostico::findOrFail($id);

        $diagnosticos->fecha = $request->get('fecha');
        $diagnosticos->descripcion = $request->get('diagnostico');
        $diagnosticos->update();

        return Redirect('Mascota/historiaClinica');
    }


    public function destroy($id)
    {
        //
    }
}
