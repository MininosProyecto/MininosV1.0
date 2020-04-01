<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

    }


    public function create()
    {

    }


    public function store(Request $request)
    {

      Mail::send('email.Contact',$request->all(), function($msj){
          $msj->subject('Correo de contacto');
          $msj->from('ktsanz2605@gmail.com');
          $msj->to('ktsanz2605@gmail.com');
      });
      Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/contacto');
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



