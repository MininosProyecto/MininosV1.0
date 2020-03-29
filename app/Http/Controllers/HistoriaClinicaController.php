<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoriaClinica;
use App\Raza;
use App\Especie;
use App\Genero;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HistoriaClinicaController extends Controller
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

            $historiaClinica = DB::table('historia_clinica as h')
                ->join('mascota as m', 'm.id_mascota', '=', 'Mascotas_idMascotas')
                ->join('sintomas as s', 's.idSintomas', '=', 'id_sintomas')
                ->join('alimentacion as a', 'a.idAlimentacion', '=', 'id_alimentacion')
                ->select('h.*', 's.descripcion as sintomas', 'a.producto', 'm.nombre_mascota as mascota')

                ->where([
                    ['s.descripcion', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=',   'Activo']
                ])
                ->orWhere([
                    ['m.estado', '=', 'Activo'],
                    ['a.producto', 'LIKE', '%'.$buscar.'%']
                ])
                ->orWhere([
                    ['m.estado', '=', 'Activo'],
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%']
                ])

                ->orderBy('h.idHistoriaClinica', 'desc')
                ->paginate(7);

            return view('Mascota.historiaClinica.index',compact('historiaClinica','buscar'));
        }
    }


    public function create()
    {
        $sintomas = DB::table('sintomas')->select('idSintomas', 'descripcion')->get();
        $alimentacion = DB::table('alimentacion')->select('idAlimentacion', 'producto')->get();
        $mascotas = DB::table('mascota')->select('id_mascota', 'nombre_mascota')->get();

        return view('Mascota.historiaClinica.create', compact(['mascotas', 'sintomas', 'alimentacion']));
    }


    public function store(Request $request)
    {

        $historia_clinica = new HistoriaClinica();

        $historia_clinica->Mascotas_idMascotas = $request->get('Mascotas_idMascotas');
        $historia_clinica->id_sintomas = $request->get('id_sintomas');
        $historia_clinica->id_alimentacion = $request->get('id_alimentacion');
        $historia_clinica->save();

        return Redirect::to('cliente/create');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $historia = DB::table('historia_clinica as h')->select('idHistoriaClinica')
            ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
            ->join('sintomas as s', 'idSintomas', '=', 'id_sintomas')
            ->join('alimentacion as a', 'idAlimentacion', '=', 'id_alimentacion')
            ->select('s.descripcion', 's.idSintomas', 'a.producto', 'a.idAlimentacion', 'h.*', 'm.nombre_mascota', 'm.id_mascota')
            ->get();

        return view('Mascota.historiaClinica.edit', compact(['historia', 'mascotas', 'sintomas', 'alimentacion']));
    }


    public function update(Request $request, $id)
    {
        $historia_clinica = HistoriaClinica::findOrFail($id);

        $historia_clinica->Mascotas_idMascotas = $request->get('Mascotas_idMascotas');
        $historia_clinica->id_sintomas = $request->get('id_sintomas');
        $historia_clinica->id_alimentacion = $request->get('id_alimentacion');
        $historia_clinica->update();

        return Redirect::to('cliente/create');
    }


    public function destroy($id)
    {
        //
    }
}
