@extends('layouts.app')

@section('content')
   <div class="container" id="FormularioController">
      <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="panel-heading">
                  Formulario · Informaciones de transmision Vertical de VIH y Sífilis
                  <span class="pull-right">Inicio del formulario</span>
               </div>

               <div class="panel-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="well well-sm">
                           <h3 class="text-center">
                              Levantamiento de información sobre nacimientos de 2016 y 2017
                           </h3> <!-- .text-center --> <br>

                           <button class="btn-link" type="button" data-toggle="collapse"
                                   data-target="#instructions" aria-expanded="false" aria-controls="instructions">
                              <small>Leer instrucciones</small>
                           </button>

                           <div class="collapse" id="instructions">
                              <h4>Instrucciones:</h4> <br>

                              <h5 v-for="i in instructions">
                                 · @{{i}}
                              </h5>

                           </div><!-- .collapse #instructions -->

                        </div><!-- .well .well-sm -->
                     </div><!-- .col-md-* -->

                     {{ csrf_field() }} {{-- <keep-alive> </keep-alive>--}}

                     <dl class="dl-vertical">

                        <div class="col-xs-6 col-sm-6 col-md-6" v-for="i in inputs">


                           {{--<div v-if="inputsQuantity(i.directivas.type)"></div>--}}


                           <!-- Etiquetas de los campos -->
                           <dt>
                              @{{ labels[i.directivas.id] ? labels[i.directivas.id].text:'Sin Etiqueta' }}
                           </dt>

                           <!-- Input basicos como text,number,time,date,etc -->
                           <dd v-if="inputInArray(i,inputTypes.basics)">

                              <inputs :name="i.directivas.name"
                                      :id="i.directivas.id"
                                      :type="i.directivas.type"></inputs>

                           </dd>


                           <!-- Select Inputs -->
                           <dd v-else-if="inputInArray(i,inputTypes.select)">

                              <select :name="i.directivas.name"
                                      :id="i.directivas.id"
                                      class="form-control">

                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>

                              </select><!-- .form-control -->

                           </dd>

                           <!-- Textarea Inputs -->
                           <dd v-else-if="inputInArray(i,inputTypes.textarea)">

                              <textarea :name="i.directivas.name"
                                        :id="i.directivas.id"
                                        class="form-control">
                              </textarea>

                           </dd>

                           <dd v-else>
                              Sin Campos
                           </dd>

                           <br>


                        </div><!-- .col-md-* -->

                     </dl><!-- .dl-vertical -->

                  </div><!-- .row -->
               </div><!-- .panel-body -->

            </div><!-- .panel .panel-default -->
         </div><!-- col-md-* -->
      </div><!-- .row -->
   </div><!-- .container -->
@endsection

@section('VueControllers')
   {!!Html::script('js/app/api/controllers/FormularioController.js')!!}
@endsection