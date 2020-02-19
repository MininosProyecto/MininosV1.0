<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnostico;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class DiagnosticoController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('SearchText'));

            $diagnosticos = DB::table('diagnostico')
                ->where([
                    ['idDiagnostico', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['descripcion', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('idDiagnostico', 'desc')
                ->paginate(7);

            return view('Mascota.diagnostico.index', compact('diagnosticos', 'query'));
        }
    }


    public function create()
    {
        return view('Mascota.diagnostico.create');
    }


    public function store(Request $request)
    {
        $clientes = new Diagnostico();

        $clientes->fecha = $request->get('fecha');
        $clientes->descripcion = $request->get('descripcion');
        $clientes->historiaClinica_id_historiaClinica = $request->get('historiaClinica_id_historiaClinica');

        $clientes->save();

        return Redirect('Mascota/diagnostico/create');
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
