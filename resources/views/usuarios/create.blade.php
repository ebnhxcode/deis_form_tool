@extends('layouts.app')
@include('layouts.styles')

@section('content')
   <div class="container" id="UsuarioCreateController">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-heading">Solicitud de claves</div>
               <div class="panel-body">
                  <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">

                  <div class="well small">
                     Instrucciones: <br>
                     <ul>
                        <li>
                           Debe ingresar su run sin puntos ni guión
                           <span class="pull-right" style="color: gray;">
                             Ej : 123456789
                           </span>
                        </li>
                        <li>
                           Debe ingresar su correo electrónico para recibir la clave electrónica
                           <span class="pull-right" style="color: gray;">
                              <?php echo htmlspecialchars("name@ejemplo.com"); ?>
                           </span>
                        </li>
                        <li>
                           Luego de recibir la clave electrónica, ingresar en el campo solicitado
                        </li>
                     </ul>
                  </div>

                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                     <label for="name" class="col-md-4 control-label">Run</label>

                     <div class="col-md-6">
                        <input id="run" type="text" class="form-control" name="run" value=""
                               placeholder="Ej : 123456789" v-model="newuser.name">

                        @if ($errors->has('name'))
                           <span class="help-block">
                               <strong>{{ $errors->first('name') }}</strong>
                           </span>
                        @endif
                     </div>
                  </div>

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                     <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value=""
                               v-model="newuser.email">

                        @if ($errors->has('email'))
                           <span class="help-block">
                               <strong>{{ $errors->first('email') }}</strong>
                           </span>
                        @endif
                     </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <label for="password" class="col-md-4 control-label">Clave entregada por correo</label>

                     <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                           <span class="help-block">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                        @endif
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-6 col-md-offset-4">

                        <button type="submit" class="btn btn-primary" v-if="btn_generar_clave == false"
                                @click.prevent="procesar_solicitud_clave">
                           <i class="fa fa-btn fa-key"></i> Procesar solicitud
                        </button>
                        <button type="submit" class="btn btn-primary" v-else
                                @click.prevent="procesar_solicitud_clave">
                           <i class="fa fa-btn fa-key"></i> Crear Clave
                        </button>

                        <transition v-if="mini_loader == true" name="slide-fade">
                           <div class="pull-right">
                              <div class="circle-loader">
                                 <div class="checkmark draw"></div>
                              </div>
                           </div>
                        </transition>
                     </div>
                  </div><!-- .well -->

               </div><!-- .pan .panel-default -->
            </div>
         </div>
      </div>
   </div>
@endsection



@section('VueControllers')
   {!!Html::script('js/app/api/controllers/UsuarioCreateController.js')!!}
@endsection