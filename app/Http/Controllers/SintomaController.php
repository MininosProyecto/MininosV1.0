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
        $historiaClinica = DB::table('historia_clinica')->select('idHistoriaClinica')->get();

        return view('Mascota.sintomas.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {
        $sintomas = new Sintoma();

        $sintomas->fecha = $request->get('fecha');
        $sintomas->descripcion = $request->get('descripcion');
        $sintomas->historiaClinica_id_historiaClinica = $request->get('historiaClinica_id_historiaClinica');

        $sintomas->save();

        return Redirect('Mascota/sintomas/create');
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
