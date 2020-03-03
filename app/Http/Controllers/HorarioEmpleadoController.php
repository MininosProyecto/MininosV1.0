<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\HorarioEmpleado;

class HorarioEmpleadoController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $buscar = trim($request->get('buscarTexto'));

            $horarios = DB::table('horarios_empleados as he')
                ->join('empleado as emp', 'idEmpleado', '=', 'idEmpleados')

                ->select( 'he.idHorarios_Empleados', 'he.horario_ingreso', 'he.horario_salida' , 'he.dias', 'emp.nombre_empleado', 'emp.cargo')

                ->where([
                    ['he.horario_ingreso', 'LIKE', '%'.$buscar.'%'],
                    ['he.horario_salida', 'LIKE', '%'.$buscar.'%']
                ])
                ->orWhere([
                    ['emp.nombre_empleado', 'LIKE', '%'.$buscar.'%'],
                    ['emp.cargo', 'LIKE', '%'.$buscar.'%']
                ])
                ->orderBy('he.idHorarios_Empleados', 'desc')
                ->paginate(7);

            return view('empleado.horariosEmpleados.index', compact('horarios','buscar'));
        }
    }


    public function create()
    {
        $empleados = DB::table('empleado')->select('idEmpleado', 'nombre_empleado')->get();

        return view('empleado.horariosEmpleados.create', compact('empleados'));
    }


    public function store(Request $request)
    {
        $empleados = new HorarioEmpleado();

        $empleados->horario_ingreso = $request->get('hora_ingreso');
        $empleados->horario_salida = $request->get('hora_salida');
        $empleados->dias = $request->get('dias');
        $empleados->idEmpleados = $request->get('idEmpleado');

        $empleados->save();

        return Redirect('empleado/horariosEmpleados/create');
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
