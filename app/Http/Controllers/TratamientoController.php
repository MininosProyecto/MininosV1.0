<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tratamiento;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class TratamientoController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('SearchText'));

            $tratamientos = DB::table('tratamiento as t')
                ->join('historia_clinica as h', 'historiaClinica_id_historiaClinica', '=', 'idHistoriaClinica')
                ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
                ->select('t.*', 'm.nombre_mascota')

                ->where([
                    ['t.idTratamiento', 'LIKE', '%' . $query . '%'],
                    ['m.nombre_mascota', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['t.descripcion', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('t.idTratamiento', 'desc')
                ->paginate(7);

            return view('Mascota.tratamiento.index', compact('tratamientos', 'query'));
        }
    }


    public function create()
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
            ->select('idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.tratamiento.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {
        $clientes = new Tratamiento();

        $clientes->fecha = $request->get('fecha');
        $clientes->descripcion = $request->get('descripcion');
        $clientes->historiaClinica_id_historiaClinica = $request->get('idHistoria_Clinica');

        $clientes->save();

        return Redirect('Mascota/tratamiento/create');
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
