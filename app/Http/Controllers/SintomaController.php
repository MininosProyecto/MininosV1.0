<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sintoma;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class SintomaController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('SearchText'));

            $sintomas = DB::table('sintomas')
                ->where([
                    ['idSintomas', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['descripcion', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('idSintomas', 'desc')
                ->paginate(7);

            return view('Mascota.sintomas.index', compact('sintomas', 'query'));
        }
    }


    public function create()
    {
        return view('Mascota.sintomas.create');
    }


    public function store(Request $request)
    {
        $clientes = new Sintoma();

        $clientes->fecha = $request->get('fecha');
        $clientes->descripcion = $request->get('descripcion');
        $clientes->historiaClinica_id_historiaClinica = $request->get('historiaClinica_id_historiaClinica');

        $clientes->save();

        return Redirect('Mascota/sintoma/create');
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
