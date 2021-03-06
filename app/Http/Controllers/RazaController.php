<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raza;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class RazaController extends Controller
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
            $razas = DB::table('raza')
                ->where([
                    ['id_raza', 'LIKE', '%' . $buscar . '%']
                ])
                ->orWhere([
                    ['descripcion', 'LIKE', '%' . $buscar . '%']
                ])
                ->orderBy('id_raza', 'desc')
                ->paginate(7);

            return view('Mascota.raza.index', compact("razas",'buscar'));
        }
    }


    public function create()
    {
        return view("Mascota.raza.create");
    }


    public function store(Request $request)
    {
        $especie = new Raza();

        $especie->descripcion = $request->get('descripcion');

        $especie->save();

        return Redirect::to('cliente/create');
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
