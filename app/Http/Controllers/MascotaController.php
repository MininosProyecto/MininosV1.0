<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mascota;
use App\Genero;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));

            $mascotas = DB::table('mascota as m')
                ->join('clientes as c', 'id_cliente', '=', 'Clientes_id_cliente')
                ->join('especie as e', 'id_especie', '=', 'Especie_id_especie')
                ->join('raza as r','id_raza', '=', 'Raza_id_raza')
                ->join('genero as g', 'id_sexo', '=', 'Sexo_id_sexo')
                ->select('m.id_mascota', 'm.nombre_mascota', 'm.fecha_nacimiento' ,'c.nombre_cliente as Dueño', 'e.descripcion as Especie', 'r.descripcion as Raza', 'g.descripcion as Sexo')
                ->where([
                    ['m.id_mascota', 'LIKE', '%'.$query.'%'],
                    ['m.nombre_mascota', 'LIKE', '%'.$query.'%']
                ])
                 ->orWhere([
                     ['c.nombre_cliente', 'LIKE', '%'.$query.'%']
                 ])
                ->orderBy('m.id_mascota', 'desc')
                ->paginate(7);

            return view('Mascota.mascota.index',compact('mascotas','query'));
        }
    }


    public function create()
    {
        $clientes = DB::table('clientes')->select('nombre_cliente' , 'id_cliente')->get();

        $especies = DB::table('especie')->select('descripcion', 'id_especie')->get();

        $razas = DB::table('raza')->select('descripcion', 'id_raza')->get();

        $sexos = DB::table('genero')->select('descripcion', 'id_sexo')->get();

        return view('Mascota.mascota.create', compact('clientes','especies'), compact('razas', 'sexos'));
    }


    public function store(Request $request)
    {

        $mascota = new Mascota();

        $mascota->id_mascota = $request->get('id_mascota');
        $mascota->nombre_mascota = $request->get('nombre_mascota');
        $mascota->fecha_nacimiento = $request->get('fecha_nac');
        $mascota->Clientes_id_cliente = $request->get('Clientes_id_cliente');
        $mascota->Raza_id_raza = $request->get('Raza_id_raza');
        $mascota->Sexo_id_sexo = $request->get('Sexo_id_sexo');
        $mascota->Especie_id_especie =$request->get('Especie_id_especie');

        $mascota->save();

        return Redirect::to('Mascota/historiaClinica/create');
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
