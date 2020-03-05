<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ExamenFisico;

class ExamenFisicoController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));

            $examen= DB::table('examen_fisico as ex')
                ->join('historia_clinica as h', 'Historia_Clinica_id_historia_clinica', '=', 'idHistoriaClinica')
                ->select('*')
                ->where([
                    ['ex.idExamen_Fisico', 'LIKE', '%'.$query.'%']
                ])
                ->orWhere([
                    ['h.Historia_Clinica_id_historia_clinica', 'LIKE', '%'.$query.'%']
                ])
                ->orderBy('ex.idExamen_Fisico', 'desc')
                ->paginate(7);

            return view('Mascota.ExamenFisico',compact('info','query'));
        }
    }


    public function create()
    {
        return view('Mascota.ExamenFisico.create');
    }


    public function store(Request $request)
    {
        //
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
