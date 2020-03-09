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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('SearchText'));

            $empleados = DB::table('empleado')
                ->where([
                    ['idEmpleado', 'LIKE', '%' . $query . '%']
                ])
                ->orWhere([
                    ['nombre_empleado', 'LIKE', '%' . $query . '%']
                ])
                ->orderBy('idEmpleado', 'desc')
                ->paginate(7);

            return view('empleado.empleados.index', compact('empleados', 'query'));
        }

    }


    public function create()
    {
        return view('empleado.empleados.create');
    }


    public function store(Request $request)
    {
        $empleados = new Empleado();

        $empleados->nombre_empleado = $request->get('nombre');
        $empleados->apellido_empleado = $request->get('apellido');
        $empleados->tipo_documento = $request->get('tipo_documento');
        $empleados->nro_documento = $request->get('nro_documento');
        $empleados->telefono = $request->get('telefono');
        $empleados->celular = $request->get('celular');
        $empleados->correo = $request->get('correo');
        $empleados->direccion = $request->get('direccion');
        $empleados->cargo = $request->get('cargo');

        $empleados->save();

        return Redirect('empleado/empleados/create');
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
