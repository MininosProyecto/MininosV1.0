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

            $tratamientos = DB::table('tratamiento')
                ->where([
                    ['idTratamiento', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['descripcion', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('idTratamiento', 'desc')
                ->paginate(7);

            return view('Mascota.tratamiento.index', compact('tratamientos', 'query'));
        }
    }


    public function create()
    {
        return view('Mascota.tratamiento.create');
    }


    public function store(Request $request)
    {
        $clientes = new Tratamiento();

        $clientes->fecha = $request->get('fecha');
        $clientes->descripcion = $request->get('descripcion');
        $clientes->historiaClinica_id_historiaClinica = $request->get('historiaClinica_id_historiaClinica');

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
