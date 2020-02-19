<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Mascota;
use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{

    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('SearchText'));

            $empleados = DB::table('empleados')
                ->where([
                    ['id_empleado', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['nombre', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('id_empleado', 'desc')
                ->paginate(7);

            return view('empleado.index', compact('empleados', 'query'));
        }

    }


    public function create()
    {
        return view('empleado.create');
    }


    public function store(Request $request)
    {
        $empleados = new Empleado();

        $empleados->id_empleado = $request->get('id_empleado');
        $empleados->nombre = $request->get('nombre');
        $empleados->apellido = $request->get('apellido');
        $empleados->tipo_documento = $request->get('tipo_documento');
        $empleados->nro_documento = $request->get('nro_documento');
        $empleados->telefono = $request->get('telefono');
        $empleados->celular = $request->get('celular');
        $empleados->correo = $request->get('correo');
        $empleados->direccion = $request->get('direccion');
        $empleados->cargo = $request->get('cargo');
        $empleados->fecha_nacimiento = $request->get('fecha_nacimiento');

        $empleados->save();

        return Redirect('empleado/create');
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
