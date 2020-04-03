
@extends('Layouts.app')

@section('content')
    <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style= "text-align: center; background-color: aliceblue; font-family:'Cooper Black';font-size: large " >{{ __('Contactenos') }}</div>
                     <div class="card-body" >
                         <form method="POST" action="{{ route('mail.store') }}">
                         @csrf
                      <!-- {!! Form::open(['route'=>'mail.store','method'=>'POST']) !!} -->
                        <div class="form-group row">
                            <div class="col-md-6" >
                                <label style="font-family: 'Cooper Black'">Nombre:</label> {!! Form::text('name',null,['placeholder'=>'Nombre']) !!}
                            </div>
                         </div>
                          <div class="form-group row">
                              <div class="col-md-6">
                                  <label style="font-family: 'Cooper Black'">Email:</label>
                                  {!! Form::text('email',null,['placeholder'=>'mininos@gmail.com']) !!}
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-md-6">
                                  <label style="font-family: 'Cooper Black'">Tu Mensaje:</label>
                                  {!! Form::textarea('mensaje',null,['placeholder'=>'Mensaje']) !!}
                              </div>
                          </div>
                     </div>
                   {!! Form::submit('SEND') !!}

                  {!! Form::close() !!}
                </div>
              </div>
          </div>
    </div>





@endsection

