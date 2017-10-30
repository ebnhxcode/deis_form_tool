@extends('layouts.app')
@include('layouts.styles')

@section('content')
   <!-- jQuery 2.1.4 -->
   <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

   <div class="{{--container--}}" id="InputController">
      <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <div class="{{--panel panel-default--}}">
               <div class="panel-heading">

               </div>

               <div class="{{--panel-body--}}">
                  <div class="row">
                     <div class="col-md-12">

                        <div class="well well-sm">
                           <h3 class="text-center">
                              Inputs · Mantenedor de columnas para formularios
                              <img class="pull-right" width="90" src="{{url('img/logo.png')}}" alt="" style="border-radius: 3px;box-shadow: 2px 1px 2px 1px #dbdbdb;">
                           </h3> <!-- .text-center --> <br>


                        </div><!-- .well .well-sm -->

                     </div><!-- .col-md-* -->

                     {{ csrf_field() }} {{-- <keep-alive> </keep-alive>--}}

                     <div class="col-md-12">

                        <div id="" class="row">


                           <div class="col-md-4">
                              <div class="list-group">
                                 <div class="list-group-item">
                                    <h3>
                                       Instrucciones
                                    </h3>
                                    <hr>
                                    <span class="small">
                                       · Use el Textarea para pegar el código json en php <br>
                                       · Use el formato de a continuación <br>
                                       · El sistema tiene soporte exclusivo para el formato <br>
                                       <br>
                                       <pre class="small">

return ['nombre_campo' => [
   'directivas' => [
      'type' => 'text|select|textarea',
      'id' => 'nombre_campo',
      'name' => 'nombre_campo',
      'value' => '',
      'max_length' => '',
      'placeholder' => '',
      'required' => '',
      'class' => '',
      'style' => '',
   ],
   'bloque' => [
      'nombre' => 'nombre_bloque',
   ],
   'seccion' => [
      'nombre' => 'nombre_seccion',
   ],
   'class_custom' => [
      'class' => 'col-md-12'
   ]
]];
                                       </pre>
                                    </span><!-- .small -->
                                 </div><!-- .list-group-item -->
                              </div><!-- .list-group -->

                           </div><!-- .col-md-* -->


                           <div class="col-md-8">



                              <div id="" class="panel with-nav-tabs panel-primary">
                                 <!-- Items elementos de cabecera -->
                                 <div class="panel-heading">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs small" role="tablist">

                                       <li role="presentation" class="active">
                                          <a href="#create_input" aria-controls="create_input" role="tab" data-toggle="tab">
                                             Crear Inputs
                                          </a>
                                       </li>
                                       <li role="presentation">
                                          <a href="#assoc_attr" aria-controls="assoc_attr" role="tab" data-toggle="tab">
                                             Asociar atributos adicionales
                                          </a>
                                       </li>
                                    </ul>
                                 </div><!-- .panel-heading -->

                                 <div class="panel-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                       <!-- Partial - Formulario de Creacion de Inputs en base a JSON en PHP -->
                                       @include('input.form_partials.create_input')
                                       <modal_procesar_json :json="json_modal"
                                                            v-if="modal_procesar_json == true">
                                          <h3 slot="header">
                                             Buscar input
                                             <button class="btn btn-sm btn-default pull-right" @click.prevent="modal_procesar_json = false">
                                                Cerrar
                                             </button>
                                             <!--
               <button @click.prevent="" class="btn btn-sm btn-success pull-right">Guardar</button>
            -->
                                          </h3>
                                       </modal_procesar_json>
                                       <!-- Partial - Formulario de asociacion de otros atributos a los inputs creados -->
                                       @include('input.form_partials.assoc_attr')

                                    </div><!-- .tab-content -->
                                 </div><!-- .panel-body -->

                              </div><!-- .panel  -->



                           </div><!-- .col-md-* -->

                        </div><!-- .panel-heading -->
                     </div><!-- .col-md-* -->


                  </div><!-- .row -->
               </div><!-- .panel-body -->

            </div><!-- .panel .panel-default -->
         </div><!-- col-md-* -->
      </div><!-- .row -->
   </div><!-- .container -->
@endsection

@section('VueControllers')
   {!!Html::script('js/app/api/controllers/InputController.js')!!}
@endsection