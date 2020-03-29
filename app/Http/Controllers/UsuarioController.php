<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UsuarioFormRequest;
use App\User;

class UsuarioController extends Controller
{

    public function index(Request $request)
    {
        if ($request)
        {
            $buscar =  trim($request->get('BuscarTexto'));

            $usuarios = DB::table('users')
                ->select('*')
                ->where('name', 'LIKE', '%'.$buscar.'%')
                ->orderBy('id', 'desc')
                ->paginate(7);

            return view('seguridad.usuario.index', compact('usuarios', 'buscar'));
        }
    }


    public function create()
    {
       return view('seguridad.usuario.create');
    }


    public function store(UsuarioFormRequest $request)
    {
        $usuario = new User();

        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->password = bcrypt($request->get('password'));
        $usuario->save();

        return Redirect::to('seguridad/usuario/create');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('seguridad.usuario.edit', compact('usuario'));
    }


    public function update(UsuarioFormRequest $request, $id)
    {
        $usuarios = User::findOrFail($id);
        $datos = $request->all();

        $usuarios->name = $request->get('datos');
        $usuarios->email = $request->get('datos');
        $usuarios->password = bcrypt($request->get('datos'));
        $usuarios->update();

        return Redirect::to('seguridad/usuario');

    }


    public function destroy($id)
    {
        $usuario = DB::table('users')
        ->where('id', '=', $id)
        ->delete();

        return Redirect::to('seguridad/usuario');
    }
}
