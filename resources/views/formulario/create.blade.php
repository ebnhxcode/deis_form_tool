@extends('layouts.app')
@include('layouts.styles')
@section('content')
   <div class="{{--container--}}" id="FormularioController">
      <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <div class="{{--panel panel-default--}}">
               <div class="panel-heading"></div><!-- .panel-heading -->

               <div class="{{--panel-body--}}">
                  <div class="row">
                     <div class="col-md-12">

                        <div class="well well-sm">
                           <h3 class="text-center">
                              Plataforma Informática Seguimiento de la Prevención de la Transmisión Vertical de VIH y Sífilis
                              <img class="pull-right" width="90" src="{{url('img/logo.png')}}" alt="" style="border-radius: 3px;box-shadow: 2px 1px 2px 1px #dbdbdb;">
                           </h3> <!-- .text-center --> <br>

                           <button class="btn btn-success" type="button" data-toggle="collapse"
                                   style="box-shadow: 2px 1px 2px 1px #dbdbdb;"
                                   data-target="#instructions" aria-expanded="false" aria-controls="instructions">
                              <small>Leer instrucciones</small>
                           </button>

                           <button class="btn btn-sm btn-success pull-right small" @click.prevent="crear_nuevo_formulario"
                                   style="box-shadow: 2px 1px 2px 1px #dbdbdb;margin-left: 10px;">
                              Crear nuevo&nbsp;
                              <i class="fa fa-plus"></i>
                           </button>

                           <button class="btn btn-sm btn-info pull-right small" @click.prevent="buscar_formulario"
                                   style="box-shadow: 2px 1px 2px 1px #dbdbdb;">
                              Buscar&nbsp;
                              <i class="fa fa-search"></i>
                           </button>
                           <modal_buscar_formulario
                              v-if="show_modal_buscar_formulario == true">
                              <h3 slot="header">
                                 Búsqueda DEIS
                                 <button class="btn btn-sm btn-default pull-right" @click.prevent="show_modal_buscar_formulario = false">
                                    Cerrar
                                 </button>
                                 <!--<button @click.prevent="" class="btn btn-sm btn-success pull-right">Guardar</button>-->
                              </h3>
                           </modal_buscar_formulario>

                           <div class="collapse" id="instructions">
                              <h4>Instrucciones:</h4> <br>
                              <ul>
                                 <li v-for="i in instructions">
                                    <h4>@{{i}}</h4>
                                 </li>
                              </ul>
                           </div><!-- .collapse #instructions -->

                        </div><!-- .well .well-sm -->
                     </div><!-- .col-md-* -->

                     {{ csrf_field() }} {{-- <keep-alive> </keep-alive>--}}
                     <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                     <div class="col-md-12">

                        <div id="" class="panel with-nav-tabs panel-primary" v-if="formularioNuevoActivo == true || formularioEditActivo == true">
                           <!-- Items elementos de cabecera -->
                           <div class="panel-heading">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs small" role="tablist">
                                 <li role="presentation" :class="tab.class" v-for="tab in nav_tab_form_deis">
                                    <a :href="'#'+tab.name" :aria-controls="tab.name" role="tab" data-toggle="tab">
                                       @{{ tab.description }}
                                    </a>
                                 </li>
                              </ul>
                           </div><!-- .panel-heading -->

                           <div class="panel-body">
                              <!-- Tab panes -->
                              <div class="tab-content">

                                 <div role="tabpanel" :class="'tab-pane fade in '+tab.class" :id="tab.name" v-for="tab in nav_tab_form_deis">

                                    <dl class="dl-vertical">
                                       <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                       <div v-for="i in inputs" v-if="i.seccion == tab.name">



                                          <!-- Prop para permitir insertar una cabecera de titulo -->
                                          <div v-if="i.tag" class="col-md-12">
                                             <h3><b>@{{ i.tag ? i.tag : '' }}</b></h3><br>
                                          </div>
                                          <!-- Prop para permitir insertar una cabecera de subtitulo -->
                                          <div v-if="i.subtag" class="col-md-12"
                                               style="padding-bottom: 10px;">
                                             <h4><b>@{{ i.subtag ? i.subtag : '' }}</b></h4>
                                          </div>

                                          <div :class="i.class_custom ? i.class_custom : 'col-xs-6 col-sm-6 col-md-6'">
                                             <!-- Etiquetas de los campos -->
                                             <dt class="small">
                                                <!-- Prop para permitir insertar numero de orden de completado -->
                                                <span v-if="i.order" style="zoom:1.4;">@{{ i.order ? i.order : '' }}-</span>
                                                <span>@{{ i.label ? i.label : 'Sin Etiqueta' }}</span>
                                             </dt>

                                             <!-- Input basicos como text,number,time,date,etc -->
                                             <dd v-if="inputInArray(i,inputTypes.basics)">
                                                <input :name="i.name"
                                                       :id="i.id"
                                                       :disabled="i.disabled!=''?i.disabled:''"
                                                       :class="i.class!=''?i.class:'form-control'"
                                                       :type="i.type!=''?i.type:''"
                                                       :maxlength="i.max_length!=''?i.max_length:''"
                                                       :required="i.required!=''?i.required:''"
                                                       :readonly="i.readonly!=''?i.readonly:''"
                                                       :style="i.style!=''?i.style:''"
                                                       :placeholder="i.placeholder!=''?i.placeholder:''"
                                                       :readonly="i.readonly!=''?i.readonly:''"
                                                       :min="i.min!=''?i.min:''"
                                                       :max="i.max!=''?i.max:''"
                                                       :pattern="i.pattern!=''?i.pattern:''"
                                                       @change.prevent="verifica_validacion_change(i)"
                                                       v-model="fdc[i.name]">
                                             </dd>

                                             <!-- Select Inputs -->
                                             <dd v-else-if="inputInArray(i,inputTypes.select)">
                                                <select :name="i.name"
                                                        :id="i.id"
                                                        :disabled="i.disabled!=''?i.disabled:''"
                                                        :class="i.class!=''?i.class:'form-control'"
                                                        :required="i.required!=''?i.required:''"
                                                        :readonly="i.readonly!=''?i.readonly:''"
                                                        :style="i.style!=''?i.style:''"
                                                        :placeholder="i.placeholder!=''?i.placeholder:''"
                                                        :readonly="i.readonly!=''?i.readonly:''"
                                                        :value="fdc[i.name]"
                                                        v-model="fdc[i.name]"
                                                        @change.prevent="verifica_validacion_change(i)"
                                                        @click.prevent="verifica_validacion_click(i)">

                                                   {{--<option value="">Seleccione</option>--}}
                                                   <option v-for="o,i in deis_form_table_options[i.name]" :value="i">
                                                      @{{ o }}
                                                   </option>

                                                </select><!-- .form-control -->
                                             </dd>

                                             <!-- Textarea Inputs -->
                                             <dd v-else-if="inputInArray(i,inputTypes.textarea)">
                                             <textarea :name="i.name"
                                                       :id="i.id"
                                                       :disabled="i.disabled!=''?i.disabled:''"
                                                       class="form-control"
                                                       v-model="fdc[i.name]">
                                             </textarea>
                                             </dd>

                                             <dd v-else>
                                                Sin Campos
                                             </dd>
                                             <br>
                                          </div><!-- .col-md-* -->

                                          <div v-if="i.empty_column"
                                               :class="i.empty_column">
                                          </div>
                                       </div>

                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                          <dt>
                                          </dt>
                                          <dd>
                                             <input id="" name="" @click.prevent="guardarFormulario(tab.name)"
                                                    class="btn btn-success" type="button" value="Guardar"
                                                    style="box-shadow: 2px 1px 2px 1px #dbdbdb;">
                                             <transition v-if="mini_loader == true" name="slide-fade">
                                                <div class="pull-right">
                                                   <div class="circle-loader">
                                                      <div class="checkmark draw"></div>
                                                   </div>
                                                </div>
                                             </transition>
                                          </dd>
                                       </div><!-- .col-md-* -->

                                    </dl><!-- .dl-vertical -->

                                 </div><!-- .tab-pane -->

                              </div><!-- .panel-heading -->
                           </div><!-- .panel-heading -->
                        </div><!-- .panel-heading -->
                     </div><!-- .col-md-* -->


                  </div><!-- .row -->
               </div><!-- .panel-body -->

            </div><!-- .panel .panel-default -->
         </div><!-- col-md-* -->
      </div><!-- .row -->
   </div><!-- .container -->

   <script>
      /*
      $(document).ready(function(){
         $('#lugar_atencion_parto').select2();
         $('#pais_origen').select2();
      });
      */
   </script>

@endsection


@section('VueControllers')
   {!!Html::script('js/app/api/controllers/FormularioController.js')!!}
@endsection