<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Cliente;
    use App\Raza;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\DB;
    use App\Http\Requests\ClienteRequest;

    class ClienteController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function index(Request $request)
        {
            if ($request) {
                $buscar = trim($request->get('BuscarTexto'));

                $clientes = DB::table('clientes')
                    ->where([
                        ['nro_documento', 'LIKE', '%' . $buscar . '%'],
                        ['estado', '=', 'Activo']

                    ])
                    ->orWhere([
                        ['nombre_cliente', 'LIKE', '%' . $buscar . '%'],
                        ['estado', '=', 'Activo']

                    ])
                    ->orWhere([
                        ['apellido_cliente', 'LIKE', '%' . $buscar . '%'],
                        ['estado', '=', 'Activo']

                    ])
                    ->orderBy('id_cliente', 'desc')
                    ->paginate(7);

                return view('cliente.index', compact('clientes', 'buscar'));
            }

        }


        public function create()
        {
            $clientes = DB::table('clientes')->select('nombre_cliente' , 'id_cliente')->get();

            $especies = DB::table('especie')->select('descripcion', 'id_especie')->get();

            $razas = DB::table('raza')->select('descripcion', 'id_raza')->get();

            $sexos = DB::table('genero')->select('descripcion', 'id_sexo')->get();

            $mascotas = DB::table('mascota')->select('nombre_mascota', 'id_mascota')->get();

            $sintomas = DB::table('sintomas')->select('idSintomas', 'descripcion')->get();
            $diagnosticos = DB::table('diagnostico')->select('idDiagnostico', 'descripcion')->get();
            $tratamientos = DB::table('tratamiento')->select('idTratamiento', 'descripcion')->get();
            $alimentacion = DB::table('alimentacion')->select('idAlimentacion', 'producto')->get();

            return view('cliente.create', compact(['razas', 'sexos', 'mascotas', 'sintomas', 'diagnosticos', 'tratamientos', 'alimentacion', 'clientes','especies']));
        }


        public function store(ClienteRequest $request)
        {
            $clientes = new Cliente();
            $raza = new Raza();

            $clientes->nombre_cliente = $request->get('nombre_cliente');
            $clientes->apellido_cliente = $request->get('apellido_cliente');
            $clientes->tipo_documento = $request->get('tipo_doc');
            $clientes->nro_documento = $request->get('numero_doc');
            $clientes->telefono = $request->get('telefono');
            $clientes->celular = $request->get('celular');
            $clientes->correo = $request->get('correo');
            $clientes->direccion = $request->get('direccion');
            $clientes->estado = 'Activo';
            $raza->descripcion = $request->get('descripcion');

            $clientes->save();

            return Redirect('cliente/create');
        }


        public function show($id)
        {
            //
        }


        public function edit($id)
        {
            $cliente = Cliente::findOrFail($id);

            return view('cliente.edit',compact('cliente'));
        }


        public function update(ClienteRequest $request, $id)
        {
            $cliente = Cliente::findOrFail($id);

            $cliente->nombre_cliente = $request->get('nombre_cliente');
            $cliente->apellido_cliente = $request->get('apellido_cliente');
            $cliente->tipo_documento = $request->get('tipo_doc');
            $cliente->nro_documento = $request->get('numero_doc');
            $cliente->telefono = $request->get('telefono');
            $cliente->celular = $request->get('celular');
            $cliente->correo = $request->get('correo');
            $cliente->direccion = $request->get('direccion');
            $cliente->estado = 'Activo';

            $cliente->update();

            return Redirect::to('cliente');
        }


        public function destroy($id)
        {
            $cliente = Cliente::findOrFail($id);
            $cliente->estado = 'Inactivo';
            $cliente->update();

            return Redirect::to('cliente');
        }
    }
