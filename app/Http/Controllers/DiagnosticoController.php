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
            $query = trim($request->get('SearchText'));

            $diagnosticos = DB::table('diagnostico as d')
                ->join('historia_clinica as h', 'historiaClinica_id_historiaClinica', '=', 'idHistoriaClinica')
                ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
                ->select('d.*', 'm.nombre_mascota')

                ->where([
                    ['d.idDiagnostico', 'LIKE', '%' . $query . '%'],
                    ['m.nombre_mascota', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['d.descripcion', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('d.idDiagnostico', 'desc')
                ->paginate(7);

            return view('Mascota.diagnostico.index', compact('diagnosticos', 'query'));
        }
    }


    public function create()
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
            ->select('idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.diagnostico.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {
        $diagnosticos = new Diagnostico();

        $diagnosticos->fecha = $request->get('fecha');
        $diagnosticos->descripcion = $request->get('descripcion');
        $diagnosticos->historiaClinica_id_historiaClinica = $request->get('idHistoria_Clinica');

        $diagnosticos->save();

        return Redirect('Mascota/diagnostico/create');
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
