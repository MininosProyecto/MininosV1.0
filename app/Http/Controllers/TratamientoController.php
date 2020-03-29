<?php

namespace App\Http\Controllers;

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

            $tratamientos = DB::table('historia_clinica as h')
                ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
                ->join('tratamiento as t', 'idTratamiento', '=', 'id_tratamiento')
                ->select('h.idHistoriaClinica', 't.*', 'm.nombre_mascota')

                ->where([
                    ['m.nombre_mascota', 'LIKE', '%' . $buscar . '%'],
                    ['m.estado', '=', 'Activo']
                ])
                ->orWhere([
                    ['m.estado', '=', 'Activo'],
                    ['t.descripcion', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['t.fecha', 'LIKE', '=', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])

                ->orderBy('t.idTratamiento', 'desc')
                ->paginate(7);

            return view('Mascota.tratamiento.index', compact('tratamientos', 'buscar'));
        }
    }


    public function create()
    {
        return view('Mascota.historiaClinica.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {
        $tratameinto = new Tratamiento();

        $tratameinto->fecha = $request->get('fecha');
        $tratameinto->descripcion = $request->get('tratamiento');
        $tratameinto->save();

        return Redirect('cliente/create');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('Mascota.historiaClinica.edit', compact('historiaClinica'));
    }


    public function update(Request $request, $id)
    {
        $tratameinto = Tratamiento::findOrFail($id);

        $tratameinto->fecha = $request->get('fecha');
        $tratameinto->descripcion = $request->get('tratamiento');
        $tratameinto->update();

        return Redirect('Mascota/historiaClinica');
    }


    public function destroy($id)
    {
       //
    }
}
