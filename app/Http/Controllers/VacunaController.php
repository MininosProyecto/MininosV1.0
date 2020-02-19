<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacunas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

   class VacunaController extends Controller
  {


    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('SearchText'));

            $vacunas = DB::table('vacunas as v')
                ->join('historia_clinica as h', 'idHistoriaClinica', '=', 'HistoriaClinica_id_historiaClinica')
                ->select('v.idVacunas', 'v.nombre_vacuna', 'v.fecha' ,'v.descripcion', 'h.HistoriaClinica_id_historiaClinica as Historia')
                ->where([
                    ['idVacunas', 'LIKE', '%' . $query . '%'],
                    ['nombre_vacuna', 'LIKE', '%' . $query . '%']

                ])
                ->orWhere([
                    ['idHistoriaClinica', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('idVacunas', 'desc')
                ->paginate(7);

            return view('vacunas.index', compact('vacunas', 'query'));
        }

    }


    public function create()
    {
        return view('vacunas.create');
    }


    public function store(Request $request)
    {
        $vacunas = new Vacunas();

        $vacunas->idVacunas = $request->get('idVacunas');
        $vacunas->nombre_vacuna = $request->get('nombre_vacuna');
        $vacunas->fecha = $request->get('fecha');
        $vacunas->descripcion = $request->get('descripcion');
        $vacunas ->HistoriaClinica_id_historiaClinica = $request->get('HistoriaClinica_id_historiaClinica');

        $vacunas->save();

        return Redirect('vacunas/create');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
  }
