<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoriaClinica;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HistoriaClinicaController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));

//            $clientes = DB::table('clientes as c')
//            ->join('mascota as m', 'id_mascota', '=', 'Mascota_idMascota')
//            ->select('c.nombre_cliente', 'c.nro_documento')->get();

            $historiaClinica = DB::table('historia_clinica as h')
                ->join('mascota as m','id_mascota', '=', 'Mascotas_idMascotas')
                ->join('clientes as c', 'id_cliente', '=', 'Clientes_id_cliente')
                ->select('h.idHistoriaClinica', 'm.nombre_mascota as Mascota', 'c.nombre_cliente', 'c.nro_documento')
                ->where([
                    ['h.idHistoriaClinica', 'LIKE', '%'.$query.'%']
                ])
                ->orWhere([
                    ['m.nombre_mascota', 'LIKE', '%'.$query.'%']
                ])
                ->orderBy('h.idHistoriaClinica', 'desc')
                ->paginate(7);

            return view('Mascota.historiaClinica.index',compact('historiaClinica','query'));
        }
    }


    public function create()
    {

        $mascotas= DB::table('mascota')->select('nombre_mascota', 'id_mascota')->get();

        return view('Mascota.historiaClinica.create', compact('mascotas'));
    }


    public function store(Request $request)
    {

        $historia_clinica = new HistoriaClinica();

        $historia_clinica->idHistoriaClinica = $request->get('idHistoriaClinica');
        $historia_clinica->Mascotas_idMascotas = $request->get('Mascotas_idMascotas');


        $historia_clinica->save();

        return Redirect::to('Mascota/historiaClinica/create');
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
