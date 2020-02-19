<?php

namespace App\Http\Controllers;

use App\InfoAdicional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class InfoAdicionalController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));

            $info= DB::table('info_adicional_historiaclinica as inf')
                ->join('historia_clinica as h', 'historiaClinica_id_historiaClinica', '=', 'idHistoriaClinica')
                ->select('*')
                ->where([
                    ['inf.idInfoAdd', 'LIKE', '%'.$query.'%']
                ])
                ->orWhere([
                    ['inf.historiaClinica_id_historiaClinica', 'LIKE', '%'.$query.'%']
                ])
                ->orderBy('inf.idInfoAdd', 'desc')
                ->paginate(7);

            return view('infoAdd.index',compact('info','query'));
        }
    }


    public function create()
    {

        return view('infoAdd.create');
    }


    public function store(Request $request)
    {

        $info = new InfoAdicional();

        $info->idInfoAdd = $request->get('idInfoAdd');
        $info->detallesExamen = $request->get('detallesExamen');
        $info->listaProblemas = $request->get('listaProblemas');
        $info->DiagDefinitivo = $request->get('DiagDefinitivo');
        $info->ayudasDiagnostico = $request->get('ayudasDiagnostico');
        $info->condCorporal = $request->get('condCorporal');
        $info->conv_OtrosAnimales =$request->get('conv_OtrosAnimales');
        $info->enfermedades =$request->get('enfermedades');
        $info->temperamento =$request->get('temperamento');
        $info->fecha_ultimaDesp =$request->get('fecha_ultimaDesp');
        $info->frecuenciaBaño =$request->get('frecuenciaBaño');
        $info->fecha_ultimaVacuna =$request->get('fecha_ultimaVacuna');
        $info->historiaClinica_id_historiaClinica =$request->get('historiaClinica_id_historiaClinica');


        $info->save();

        return Redirect::to('infoAdd.create');
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
