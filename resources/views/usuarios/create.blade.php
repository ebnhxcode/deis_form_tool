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
                           Debe ingresar el correo electrónico donde recibió su llave
                           <span class="pull-right" style="color: gray;">
                              <?php echo htmlspecialchars("name@ejemplo.com"); ?>
                           </span>
                        </li>
                        <li>
                           Finalmente ingresar la llave secreta enviada
                           <span class="pull-right" style="color: gray;">
                              xPl01t3d
                           </span>
                        </li>
                     </ul>
                  </div><!-- .well .small -->


                  <div v-if="mostrar_input_password == false">

                     <!-- Error -->
                     <div class="form-group" style="padding-bottom: 30px ;">
                        <label for="run" class="col-md-4 control-label" align="right">Run</label>

                        <div class="col-md-6">
                           <input id="run" type="text" class="form-control" name="run" value=""
                                  placeholder="Ej : 123456789" v-model="newuser.run">
                        </div>
                     </div>


                     <!-- Correo -->
                     <div class="form-group" style="padding-bottom: 30px ;">
                        <label for="email" class="col-md-4 control-label" align="right">Correo Electrónico</label>

                        <div class="col-md-6">
                           <input id="email" type="email" class="form-control" name="email" value=""
                                  v-model="newuser.email">
                        </div>
                     </div>

                     <!-- Clave Electrónica -->
                     <div class="form-group" style="padding-bottom: 30px ;">
                        <label for="clave_electronica" class="col-md-4 control-label" align="right">LLave secreta</label>

                        <div class="col-md-6">
                           <input id="clave_electronica" type="password" autocomplete="new-password" class="form-control" name="clave_electronica"
                                  v-model="newuser.clave_electronica">
                        </div>
                     </div>

                  </div>
                  <div v-else>

                     <!-- Clave Real -->
                     <div class="form-group" v-show="btn_generar_clave == true" style="padding-bottom: 30px ;">
                        <label for="clave_real" class="col-md-4 control-label" align="right">Ingrese su clave</label>

                        <div class="col-md-6">
                           <input id="clave_real" type="password" autocomplete="new-password" class="form-control" name="clave_real"
                                  v-model="newuser.clave_real">

                        </div>
                     </div>

                     <transition name="fade">
                        <div v-show="btn_finalizar == true" class="col-md-6 col-md-offset-3">

                           <span class="text-success">
                              La clave ha sido creada correctamente
                           </span>
                           &nbsp;&nbsp;&nbsp;
                           <a href="{{url('/login')}}" class="btn btn-success">
                              Finalizar
                           </a>

                        </div>
                     </transition>
                  </div>

                  <br><br>
                  <div class="form-group">
                     <div class="col-md-6 col-md-offset-4">

                        <transition name="fade">
                           <button class="btn btn-primary"
                                   v-show="btn_procesar_clave == true"
                                   @click.prevent="procesar_solicitud_clave">
                              <i class="fa fa-btn fa-key"></i> Procesar
                           </button>
                        </transition>

                        <transition name="fade">
                           <button class="btn btn-primary"
                                   v-show="btn_generar_clave == true"
                                   @click.prevent="crear_clave">
                              <i class="fa fa-btn fa-key"></i> Crear
                           </button>
                        </transition>

                        <!-- Mensaje de proceso exitoso -->
                        <transition v-if="mini_loader_visible == true" name="slide-fade">
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