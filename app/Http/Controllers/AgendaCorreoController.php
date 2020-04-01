<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AgendaCorreoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('email.agendaCorreo');
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

        Mail::send('email.agendaCorreo',$request->all(), function($msj){
            $msj->subject('Correo de contacto');
            $msj->from('ktsanz2605@gmail.com');
            $msj->to('ktsanz2605@gmail.com');
        });
        Session::flash('message','Mensaje enviado correctamente');
        return null;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }


    public function update(ClienteRequest $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
