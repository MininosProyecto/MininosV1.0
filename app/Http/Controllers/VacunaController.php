<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacunas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

   class VacunaController extends Controller
  {
       public function __construct()
       {
           $this->middleware('auth');
       }


    public function index(Request $request)
    {
        if ($request) {
            $buscar = trim($request->get('BuscarTexto'));

            $vacunas = DB::table('vacunas as v')
                ->join('historia_clinica as h', 'idHistoriaClinica', '=', 'HistoriaClinica_id_historiaClinica')
                ->select('v.idVacunas', 'v.nombre_vacuna', 'v.fecha' ,'v.descripcion', 'h.HistoriaClinica_id_historiaClinica as Historia')
                ->where([
                    ['idVacunas', 'LIKE', '%' . $buscar . '%'],
                    ['nombre_vacuna', 'LIKE', '%' . $buscar . '%']

                ])
                ->orWhere([
                    ['idHistoriaClinica', 'LIKE', '%' . $buscar . '%']
                ])
                ->orderBy('idVacunas', 'desc')
                ->paginate(7);

            return view('vacunas.index', compact('vacunas', 'buscar'));
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
