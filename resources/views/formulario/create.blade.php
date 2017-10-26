@extends('layouts.app')
<style>
   .panel.with-nav-tabs .panel-heading {
      padding: 5px 5px 0 5px;
   }


   .panel.with-nav-tabs .nav-tabs {
      border-bottom: none;
   }

   .panel.with-nav-tabs .nav-justified {
      margin-bottom: -1px;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li > a,
   .with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
      color: #fff;
   }

   .with-nav-tabs.panel-primary .nav-tabs > .open > a,
   .with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
   .with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
      color: #fff;
      background-color: #3071a9;
      border-color: transparent;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.active > a,
   .with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
      color: #428bca;
      background-color: #fff;
      border-color: #428bca;
      border-bottom-color: transparent;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
      background-color: #428bca;
      border-color: #3071a9;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
      color: #fff;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
      background-color: #3071a9;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
      background-color: #4a9fe9;
   }
</style>

@section('content')
   <div class="{{--container--}}" id="FormularioController">
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
                              Formulario · Informaciones de transmision Vertical de VIH y Sífilis
                              <img class="pull-right" width="90" src="{{url('img/logo.png')}}" alt="" style="border-radius: 3px;box-shadow: 2px 1px 2px 1px #dbdbdb;">
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

                     <div class="col-md-12">

                        <div id="" class="panel with-nav-tabs panel-primary">
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
                                       <div v-for="i in inputs" v-if="i.seccion.nombre == tab.name">

                                          <!-- Prop para permitir insertar una cabecera de titulo -->
                                          <div v-if="labels[i.directivas.id] && labels[i.directivas.id].tag" class="col-md-12">
                                             <h3>
                                                @{{ labels[i.directivas.id].tag ? labels[i.directivas.id].tag : '' }}
                                             </h3>
                                             <br>
                                          </div>
                                          <!-- Prop para permitir insertar una cabecera de subtitulo -->
                                          <div v-if="labels[i.directivas.id] && labels[i.directivas.id].subtag" class="col-md-12"
                                               style="padding-bottom: 10px;">
                                             <h4>
                                                @{{ labels[i.directivas.id].subtag ? labels[i.directivas.id].subtag : '' }}
                                             </h4>
                                          </div>


                                          <div :class="i.class_custom ? i.class_custom.class : 'col-xs-6 col-sm-6 col-md-6'">

                                             <!-- Etiquetas de los campos -->
                                             <dt class="small">
                                                <!-- Prop para permitir insertar numero de orden de completado -->
                                                <span v-if="labels[i.directivas.id] && labels[i.directivas.id].order" style="zoom:1.4;">
                                                   @{{ labels[i.directivas.id].order ? labels[i.directivas.id].order : '' }}-
                                                </span>
                                                <span>
                                                   @{{ labels[i.directivas.id] ? labels[i.directivas.id].text : 'Sin Etiqueta' }}
                                                </span>
                                             </dt>

                                             <!-- Input basicos como text,number,time,date,etc -->
                                             <dd v-if="inputInArray(i,inputTypes.basics)">
                                                <input :name="i.directivas.name"
                                                       :id="i.directivas.id"
                                                       :type="i.directivas.type"
                                                       :max-length="i.directivas.max_length"
                                                       :required="i.directivas.required"
                                                       :readonly="i.directivas.readonly"
                                                       :class="i.directivas.class!=''?i.directivas.class:'form-control'"
                                                       :style="i.directivas.style!=''?i.directivas.style:''"
                                                       :placeholder="i.directivas.placeholder!=''?i.directivas.placeholder:''"
                                                       v-model="i.directivas.value"
                                                >
                                             </dd>

                                             <!-- Select Inputs -->
                                             <dd v-else-if="inputInArray(i,inputTypes.select)">
                                                <select :name="i.directivas.name"
                                                        :id="i.directivas.id"
                                                        class="form-control">


                                                   <option value="">Seleccione</option>
                                                   <option v-for="o in deis_form_table_options[i.directivas.name]" :value="o">
                                                      @{{ o }}
                                                   </option>

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

                                          <div v-if="labels[i.directivas.id] && labels[i.directivas.id].empty_column"
                                               :class="labels[i.directivas.id].empty_column">
                                          </div>
                                       </div>

                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                          <dt>
                                          </dt>

                                          <dd>
                                             <input id="" name="" @click.prevent="guardarFormulario(tab.name)" class="btn btn-success" type="button" value="Guardar">
                                          </dd>
                                       </div><!-- .col-md-* -->

                                    </dl><!-- .dl-vertical -->

                                 </div>

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
@endsection

@section('VueControllers')
   {!!Html::script('js/app/api/controllers/FormularioController.js')!!}
@endsection