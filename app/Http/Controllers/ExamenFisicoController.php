<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ExamenFisico;
use Illuminate\Support\Facades\Redirect;

class ExamenFisicoController extends Controller
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

            $examen= DB::table('examen_fisico as ex')
                ->join('historia_clinica as h', 'idHistoriaClinica', '=', 'id_historiaClinica')
                ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
                ->select('h.idHistoriaClinica', 'e.*', 'm.nombre_mascota')

                ->where([
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', 'LIKE', 'Activo']
                ])
                ->orderBy('ex.idExamen_Fisico', 'desc')
                ->paginate(7);

            return view('Mascota.ExamenFisico.index',compact('examen','buscar'));
        }
    }


    public function create()
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
            ->select('h.idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.ExamenFisico.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {
        $examen = new ExamenFisico();

        $examen->fc = $request->get('fc');
        $examen->fr = $request->get('fr');
        $examen->temperatura = $request->get('temperatura');
        $examen->men_mucosa = $request->get('mucosa');
        $examen->pulso = $request->get('pulso');
        $examen->peso = $request->get('peso');
        $examen->S_cardioVascular = $request->get('cardioVascular');
        $examen->S_respiratorio = $request->get('respiratorio');
        $examen->S_nervioso = $request->get('nervioso');
        $examen->S_genitaurino = $request->get('genitaurino');
        $examen->S_musculoEsqueletico = $request->get('musculoEsqueletico');
        $examen->S_digestivo = $request->get('digestivo');
        $examen->ojo = $request->get('ojo');
        $examen->oido = $request->get('oido');
        $examen->S_tegumentario = $request->get('tegumentario');
        $examen->S_linfatico = $request->get('linfatico');
        $examen->actitud = $request->get('actitud');
        $examen->hidratacion = $request->get('hidratacion');
        $examen->idHistoriaClinica = $request->get('idHistoriaClinica');

        $examen->save();

        return Redirect::to('Mascota/ExamenFisico/create');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
            ->select('h.idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.ExamenFisico.edit', compact('historiaClinica'));
    }


    public function update(Request $request, $id)
    {
        $examen = ExamenFisico::findOrFail($id);

        $examen->fc = $request->get('fc');
        $examen->fr = $request->get('fr');
        $examen->temperatura = $request->get('temperatura');
        $examen->men_mucosa = $request->get('mucosa');
        $examen->pulso = $request->get('pulso');
        $examen->peso = $request->get('peso');
        $examen->S_cardioVascular = $request->get('cardioVascular');
        $examen->S_respiratorio = $request->get('respiratorio');
        $examen->S_nervioso = $request->get('nervioso');
        $examen->S_genitaurino = $request->get('genitaurino');
        $examen->S_musculoEsqueletico = $request->get('musculoEsqueletico');
        $examen->S_digestivo = $request->get('digestivo');
        $examen->ojo = $request->get('ojo');
        $examen->oido = $request->get('oido');
        $examen->S_tegumentario = $request->get('tegumentario');
        $examen->S_linfatico = $request->get('linfatico');
        $examen->actitud = $request->get('actitud');
        $examen->hidratacion = $request->get('hidratacion');

        $examen->update();

        return Redirect::to('Mascota/ExamenFisico/create');
    }


    public function destroy($id)
    {
        //
    }
}
