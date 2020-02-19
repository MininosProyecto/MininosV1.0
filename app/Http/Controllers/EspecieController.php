<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class EspecieController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('SearchText'));
            $especies = DB::table('especie')
                ->where([
                    ['id_especie', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['descripcion', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('id_especie', 'desc')
                ->paginate(7);

            return view('Mascota.especie.index', compact("especies",'query'));
        }
    }


    public function create()
    {
        return view("Mascota.especie.create");
    }


    public function store(Request $request)
    {
        $especie = new Especie();

        $especie->id_especie = $request->get('id_especie');
        $especie->descripcion = $request->get('descripcion');

        $especie->save();

        return Redirect::to('Mascota/especie');
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
