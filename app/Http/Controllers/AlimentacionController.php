<?php

namespace App\Http\Controllers;

use App\Alimentacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AlimentacionController extends Controller
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

            $alimentos = DB::table('Alimentacion as a')
                ->join('historia_clinica as h', 'historiaClinica_id_historiaClinica', '=', 'idHistoriaClinica')
                ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
                ->select('a.*', 'm.nombre_mascota')

                ->where([
                    ['a.producto', 'LIKE', '%'.$query.'%'],
                    ['m.nombre_mascota', 'LIKE', '%'.$query.'%']
                ])
                ->orderBy('a.idAlimentacion', 'desc')
                ->paginate(7);

            return view('Mascota.alimentacion.index',compact('alimentos','query'));
        }
    }


    public function create()
    {
        $historia = DB::table('historia_clinica as h')
            ->join('mascota as m', 'Mascotas_idMascotas', '=', 'id_mascota')
            ->select('idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.alimentacion.create', compact('historia'));
    }


    public function store(Request $request)
    {

        $alimento = new Alimentacion();

        $alimento->producto = $request->get('producto');
        $alimento->historiaClinica_id_historiaClinica = $request->get('historia');

        $alimento->save();

        return Redirect::to('Mascota/alimentacion/create');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
