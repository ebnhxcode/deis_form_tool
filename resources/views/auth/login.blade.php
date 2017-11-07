@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-heading">Login</div>
               <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                     {{ csrf_field() }}

                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                        <div class="col-md-6">
                           <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                           @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                           @endif
                        </div>
                     </div>

                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Clave</label>

                        <div class="col-md-6">
                           <input id="password" type="password" autocomplete="off" class="form-control" name="password">

                           @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                           @endif
                        </div>
                     </div>

                     <!-- Recaptcha Module -->
                     <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}" align="center">
                        <label for="g-recaptcha-response" class="col-md-4 control-label">Captcha</label>

                        <div class="col-md-6 col-md-offset-4">
                           {!! Recaptcha::render() !!}
                           @if ($errors->has('g-recaptcha-response'))
                              <span class="help-block">
                                  El captcha es requerido
                              </span>
                           @endif
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                           <div class="checkbox">
                              <label>
                                 <input type="checkbox" name="remember"> Recordar usuario
                              </label>
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                           <button type="submit" class="btn btn-primary">
                              <i class="fa fa-btn fa-sign-in"></i> Login
                           </button>

                           <a class="btn btn-link" href="{{ url('/password/reset') }}">¿olvidaste tu clave?</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
