<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ExamenFisico;

class ExamenFisicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));

            $examen= DB::table('examen_fisico as ex')
                ->join('historia_clinica as h', 'historiaClinica_id_historiaClinica', '=', 'idHistoriaClinica')
                ->select('*')
                ->where([
                    ['ex.idExamenFisico', 'LIKE', '%'.$query.'%']
                ])
                ->orWhere([
                    ['ex.historiaClinica_id_historiaClinica', 'LIKE', '%'.$query.'%']
                ])
                ->orderBy('ex.idExamenFisico', 'desc')
                ->paginate(7);

            return view('ExamenFisico.index',compact('examen','query'));
        }
    }


    public function create()
    {
        $historiaC = DB::table('historia_clinica')->select('Mascotas_idMascotas' , 'idHistoriaClinica')->get();

        return view('ExamenFisico.create' , compact('historiaC'));
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
