<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\NotasProgreso;

class NotasProgresoController extends Controller
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

            $alimentos = DB::table('notas progreso as n')
                ->join('historia_clinica as h', 'idHistoriaClinica', '=', 'id_historiaClinica')
                ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
                ->select('h.idHistoriaClinica', 'n.*', 'm.nombre_mascota')

                ->where([
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']

                ])
                ->orWhere([
                    ['n.descripcion', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])
                ->orWhere([
                    ['n.fecha', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])

                ->orderBy('n.idNotas_Progreso', 'desc')
                ->paginate(7);

            return view('Mascota.notasProgreso.index',compact('alimentos','buscar'));
        }
    }


    public function create()
    {
        $historia = DB::table('historia_clinica as h')
            ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
            ->select('idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.notasProgreso.create', compact('historia'));
    }


    public function store(Request $request)
    {
        $nota = new NotasProgreso();

        $nota->fecha = $request->get('fecha');
        $nota->descripcion = $request->get('descripcion');
        $nota->id_historiaClinica = $request->get('id_historiaClinica');

        $nota->save();

        return Redirect::to('Mascota/notasProgreso/create');
    }


    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        $historia = DB::table('historia_clinica as h')
            ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
            ->select('idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.notasProgreso.edit', compact('historia'));
    }


    public function update(Request $request, $id)
    {
        $nota = NotasProgreso::findOrFail($id);

        $nota->fecha = $request->get('fecha');
        $nota->descripcion = $request->get('descripcion');
        $nota->id_historiaClinica = $request->get('id_historiaClinica');

        $nota->update();

        return Redirect::to('Mascota/notasProgreso/create');
    }


    public function destroy($id)
    {
        //
    }
}
