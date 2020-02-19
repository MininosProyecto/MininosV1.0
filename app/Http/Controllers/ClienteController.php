<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Cliente;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\DB;

    class ClienteController extends Controller
    {

        public function index(Request $request)
        {
            if ($request) {
                $query = trim($request->get('SearchText'));

                $clientes = DB::table('clientes')
                    ->where([
                        ['id_cliente', 'LIKE', '%' . $query . '%']
                    ])
                    ->orWhere([
                        ['nombre_cliente', 'LIKE', '%' . $query . '%']
                    ])
                    ->orderBy('id_cliente', 'desc')
                    ->paginate(7);

                return view('cliente.index', compact('clientes', 'query'));
            }

        }


        public function create()
        {
            return view('cliente.create');
        }


        public function store(Request $request)
        {
            $clientes = new Cliente();

            $clientes->nombre_cliente = $request->get('nombre_cliente');
            $clientes->apellido_cliente = $request->get('apellido_cliente');
            $clientes->tipo_documento = $request->get('tipo_doc');
            $clientes->nro_documento = $request->get('numero_doc');
            $clientes->telefono = $request->get('telefono');
            $clientes->celular = $request->get('celular');
            $clientes->correo = $request->get('correo');
            $clientes->direccion = $request->get('direccion');
            $clientes->fecha_nacimiento = $request->get('fechaNac');

            $clientes->save();

            return Redirect('Mascota/mascota/create');
        }


        public function show($id)
        {
            //
        }


        public function edit($id)
        {
            $cliente = Cliente::findOrFail($id);

            return view('cliente.edit',compact($cliente));
        }


        public function update(Request $request, $id)
        {
            $cliente = Cliente::finOrFail($id);

            $cliente->nombre_cliente = $request->get('nombre_cliente');
            $cliente->apellido_cliente = $request->get('apellido_cliente');
            $cliente->tipo_documento = $request->get('tipo_doc');
            $cliente->nro_documento = $request->get('numero_doc');
            $cliente->telefono = $request->get('telefono');
            $cliente->celular = $request->get('celular');
            $cliente->correo = $request->get('correo');
            $cliente->direccion = $request->get('direccion');
            $cliente->fecha_nacimiento = $request->get('fechaNac');

            $cliente->update();

            return Redirect::to('cliente');
        }


        public function destroy($id)
        {
            //
        }
    }
