
@extends('Layouts.app')

@section('content')
    <div class="contact-content">
          <div class="main-contact">
              {!! Form::open(['route'=>'mail.store','method'=>'POST']) !!}
              <div class="col-md-6 contact-left">
                  {!! Form::text('name',null,['placeholder'=>'nombre']) !!}
                  {!! Form::text('email',null,['placeholder'=>'Email']) !!}
                  {!! Form::textarea('mensaje',null,['placeholder'=>'Mensaje']) !!}
              </div>
              {!! Form::submit('SEND') !!}
              {!! Form::close() !!}
          </div>
    </div>





@endsection

