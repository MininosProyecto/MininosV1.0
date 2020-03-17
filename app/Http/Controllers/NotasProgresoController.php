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
                ->join('historia_clinica as h', 'historiaClinica_id_historiaClinica', '=', 'idHistoriaClinica')
                ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
                ->select('n.*', 'm.nombre_mascota')

                ->where([
                    ['n.fecha', 'LIKE', '%'.$buscar.'%'],
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%']
                ])
                ->orWhere([
                    ['n.descripcion', 'LIKE', '%'.$buscar.'%']
                ])
                ->orderBy('m.idNotas_Progreso', 'desc')
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
        $nota->historiaClinica_id_historiaClinica = $request->get('historia');

        $nota->save();

        return Redirect::to('Mascota/notasProgreso/create');
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
