<?php

namespace App\Http\Controllers;

use App\InfoAdicional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class InfoAdicionalController extends Controller
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

            $info= DB::table('info_adicional_historiaclinica as inf')
                ->join('historia_clinica as h', 'idHistoriaClinica', '=', 'id_historiaClinica')
                ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
                ->select('h.idHistoriaClinica', 'inf.*', 'm.nombre_mascota')

                ->where([
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])
                ->orWhere([
                    ['inf.fecha_ultimaDesp', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])
                ->orWhere([
                    ['inf.fecha_ultimaVacuna', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])

                ->orderBy('inf.idInfoAdd', 'desc')
                ->paginate(7);

            return view('Mascota.infoAdd.index',compact('info','buscar'));
        }
    }


    public function create()
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
            ->select('h.idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.infoAdd.create', compact('historiaClinica'));
    }


    public function store(Request $request)
    {

        $info = new InfoAdicional();

        $info->detallesExamen = $request->get('detallesExamen');
        $info->listaProblemas = $request->get('listaProblemas');
        $info->DiagDefinitivo = $request->get('diagDefinitivo');
        $info->ayudasDiagnostico = $request->get('ayudasDiag');
        $info->condCorporal = $request->get('condCorporal');
        $info->conv_OtrosAnimales =$request->get('convivencia');
        $info->enfermedades =$request->get('enfermedades');
        $info->temperamento =$request->get('temperamento');
        $info->fecha_ultimaDesp =$request->get('ultimaDespa');
        $info->frecuenciaBaño =$request->get('frecuenciaBaño');
        $info->fecha_ultimaVacuna =$request->get('ultimaVacuna');
        $info->id_historiaClinica =$request->get('id_historiaClinica');

        $info->save();

        return Redirect::to('Mascota/historiaClinica');
    }
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $historiaClinica = DB::table('historia_clinica as h')
            ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
            ->select('h.idHistoriaClinica', 'm.nombre_mascota')
            ->get();

        return view('Mascota.infoAdd.edit', compact('historiaClinica'));
    }


    public function update(Request $request, $id)
    {
        $info = InfoAdicional::findOrFail($id);

        $info->detallesExamen = $request->get('detallesExamen');
        $info->listaProblemas = $request->get('listaProblemas');
        $info->DiagDefinitivo = $request->get('DiagDefinitivo');
        $info->ayudasDiagnostico = $request->get('ayudasDiagnostico');
        $info->condCorporal = $request->get('condCorporal');
        $info->conv_OtrosAnimales =$request->get('convivencia');
        $info->enfermedades =$request->get('enfermedades');
        $info->temperamento =$request->get('temperamento');
        $info->fecha_ultimaDesp =$request->get('ultimaDespa');
        $info->frecuenciaBaño =$request->get('frecuenciaBaño');
        $info->fecha_ultimaVacuna =$request->get('ultimaVacuna');
        $info->id_historiaClinica =$request->get('id_historiaClinica');

        $info->update();

        return Redirect::to('infoAdd');
    }


    public function destroy($id)
    {
        //
    }
}
