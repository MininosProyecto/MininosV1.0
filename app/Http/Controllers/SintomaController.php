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

            $sintomas = DB::table('historia_clinica as h')
                ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
                ->join('sintomas as s', 'idSintomas', '=', 'id_sintomas')
                ->select('h.idHistoriaClinica', 's.*', 'm.nombre_mascota')

                ->where([
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])
                ->orWhere([
                    ['m.estado', '=', 'Activo'],
                    ['s.descripcion', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['s.fecha', 'LIKE', '=', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])

                ->orderBy('s.idSintomas', 'desc')
                ->paginate(7);

            return view('Mascota.sintomas.index', compact('sintomas', 'buscar'));
        }
    }


    public function create()
    {
        return view('Mascota.historiaClinica.create');
    }


    public function store(Request $request)
    {
        $sintomas = new Sintoma();

        $sintomas->descripcion = $request->get('sintomas');
        $sintomas->fecha = $request->get('fecha');
        $sintomas->save();

        return Redirect('cliente/create');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('Mascota.historiaClinica.edit');
    }


    public function update(Request $request, $id)
    {
        $sintomas = Sintoma::findOrFail($id);

        $sintomas->descripcion = $request->get('sintomas');
        $sintomas->fecha = $request->get('fecha');

        $sintomas->update();

        return Redirect('Mascota/historiaClinica');
    }


    public function destroy($id)
    {
        //
    }
}
