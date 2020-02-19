<?php

namespace App\Http\Controllers;

use App\Mascota;
use Illuminate\Http\Request;
use App\Alimentacion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AlimentacionController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));

            $alimento = DB::table('Alimentacion as al')
                ->join('historia_clinica as h', 'idHistoria_clinica', '=', 'Historia_Clinica_id_historia_clinica')

                ->select('al.id_alimentacion', 'al.producto', 'h.Historia_Clinica_id_historia_clinica as historia' ,'c.nombre_cliente as Dueño', 'e.descripcion as Especie', 'r.descripcion as Raza', 'g.descripcion as Sexo')
                ->where([
                    ['al.id_alimentacion', 'LIKE', '%'.$query.'%'],
                    ['al.producto', 'LIKE', '%'.$query.'%']
                ])
                ->orWhere([
                    ['h.Historia_Clinica_id_historia_clinica', 'LIKE', '%'.$query.'%']
                ])
                ->orderBy('al.id_alimentacion', 'desc')
                ->paginate(7);

            return view('alimentacion.index',compact('alimento','query'));
        }
    }


    public function create()
    {
        $historia = DB::table('historia_clinica')->select('idHistoria_clinica' , 'descripcion')->get();

        return view('alimentacion.create', compact('historia'));
    }


    public function store(Request $request)
    {

        $alimento = new Alimentacion();

        $alimento->id_alimentacion = $request->get('id_alimentacion');
        $alimento->producto = $request->get('producto');
        $alimento->Historia_Clinica_id_historia_clinica = $request->get('Historia_Clinica_id_historia_clinica');


        $alimento->save();

        return Redirect::to('alimentacion/create');
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
