<?php

namespace App\Http\Controllers;

use App\Diagnostico;
use Illuminate\Http\Request;
use App\Tratamiento;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class TratamientoController extends Controller
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

            $tratamientos = DB::table('tratamiento as t')
                ->join('historia_clinica as h', 'h.idHistoriaClinica', '=', 't.id_historiaClinica')
                ->join('mascota as m', 'm.id_mascota', '=', 'h.Mascotas_idMascotas')
                ->select('t.*', 'h.idHistoriaClinica', 'm.nombre_mascota')

                ->where([
                    ['m.nombre_mascota', 'LIKE', '%' . $buscar . '%'],
                    ['m.estado', '=', 'Activo']
                ])
                ->orWhere([
                    ['m.estado', '=', 'Activo'],
                    ['t.descripcion', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['t.fecha', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])

                ->orderBy('t.idTratamiento', 'desc')
                ->paginate(7);

            return view('Mascota.tratamiento.index', compact('tratamientos', 'buscar'));
        }
    }


    public function create()
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
            ->select('m.id_mascota', 'm.nombre_mascota', 'h.idHistoriaClinica')->get();

        return view('Mascota.tratamiento.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {
        $tratameinto = new Tratamiento();

        $tratameinto->fecha = $request->get('fecha');
        $tratameinto->descripcion = $request->get('tratamiento');
        $tratameinto->id_historiaClinica = $request->get('id_historiaClinica');
        $tratameinto->save();

        return Redirect('Mascota/historiaClinica/');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tratamiento = Tratamiento::findOrFail($id);

        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
            ->select('m.id_mascota', 'm.nombre_mascota', 'h.idHistoriaClinica')->get();

        return view('Mascota.tratamiento.edit', compact('tratamiento', 'historiaClinica'));
    }


    public function update(Request $request, $id)
    {
        $tratameinto = Tratamiento::findOrFail($id);

        $tratameinto->fecha = $request->get('fecha');
        $tratameinto->descripcion = $request->get('tratamiento');
        $tratameinto->id_historiaClinica = $request->get('id_historiaClinica');
        $tratameinto->update();

        return Redirect('Mascota/tratamiento');
    }


    public function destroy($id)
    {
       //
    }
}
