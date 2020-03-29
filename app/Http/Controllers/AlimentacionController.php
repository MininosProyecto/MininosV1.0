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
            $buscar = trim($request->get('BuscarTexto'));

            $alimentos = DB::table('historia_clinica as h ')
                ->join('mascota as m', 'id_mascota', '=', 'Mascotas_idMascotas')
                ->join('alimentacion as a', 'idAlimentacion', '=', 'id_alimentacion')
                ->select('h.idHistoriaClinica', 'a.*', 'm.nombre_mascota')

                ->where([
                    ['m.nombre_mascota', 'LIKE', '%'.$buscar.'%'],
                    ['m.estado', '=', 'Activo']
                ])
                ->orWhere([
                    ['m.estado', '=', 'Activo'],
                    ['a.producto', 'LIKE', '%'.$buscar.'%']
                ])
                ->orderBy('a.idAlimentacion', 'desc')
                ->paginate(7);

            return view('Mascota.alimentacion.index',compact('alimentos','buscar'));
        }
    }


    public function create()
    {
        return view('Mascota.historiaClinica.create');
    }


    public function store(Request $request)
    {

        $alimento = new Alimentacion();

        $alimento->producto = $request->get('producto');
        $alimento->tipoProducto = $request->get('tipoProducto');
        $alimento->frecuencia = $request->get('frecuencia');
        $alimento->save();

        return Redirect::to('cliente/create');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $alimentos = Alimentacion::findOrFail($id);

        return view('Mascota.aliementacion', compact('alimentos'));
    }


    public function update(Request $request, $id)
    {
        $alimento = Alimentacion::findOrFail($id);

        $alimento->producto = $request->get('producto');
        $alimento->tipoProducto = $request->get('tipoProducto');
        $alimento->frecuencia = $request->get('frecuencia');
        $alimento->update();

        return Redirect::to('Mascota/alimentacion');
    }


    public function destroy($id)
    {
        $alimento = Alimentacion::findOrFail($id);

        $alimento->estado = '0';
        $alimento->update();

        return Redirect::to('Mascota/alimentacion');
    }
}
