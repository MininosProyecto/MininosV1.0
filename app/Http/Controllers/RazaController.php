<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raza;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class RazaController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('SearchText'));
            $razas = DB::table('raza')
                ->where([
                    ['id_raza', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['descripcion', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('id_raza', 'desc')
                ->paginate(7);

            return view('Mascota.raza.index', compact("razas",'query'));
        }
    }


    public function create()
    {
        return view("Mascota.raza.create");
    }


    public function store(Request $request)
    {
        $especie = new Raza();

        $especie->id_raza = $request->get('id_raza');
        $especie->descripcion = $request->get('descripcion');

        $especie->save();

        return Redirect::to('Mascota/raza/create');
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
