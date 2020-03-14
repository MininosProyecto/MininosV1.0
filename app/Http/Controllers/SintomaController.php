<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sintoma;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class SintomaController extends Controller
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

            $sintomas = DB::table('sintomas as s')
                ->join('historia_clinica as h', 'historiaClinica_id_historiaClinica', '=', 'idHistoriaClinica')
                ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
                ->select('s.*', 'm.nombre_mascota')

                ->where([
                    ['s.idSintomas', 'LIKE', '%' . $buscar . '%'],
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%']
                ])
                ->orWhere([
                    ['s.descripcion', 'LIKE', '%' . $buscar . '%']
                ])

                ->orderBy('s.idSintomas', 'desc')
                ->paginate(7);

            return view('Mascota.sintomas.index', compact('sintomas', 'buscar'));
        }
    }


    public function create()
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
            ->select('idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.sintomas.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {
        $sintomas = new Sintoma();

        $sintomas->descripcion = $request->get('descripcion');
        $sintomas->fecha = $request->get('fecha');
        $sintomas->historiaClinica_id_historiaClinica = $request->get('idHistoria_Clinica');

        $sintomas->save();

        return Redirect('Mascota/sintomas/create');
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
