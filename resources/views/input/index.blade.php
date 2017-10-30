@extends('layouts.app')
@include('layouts.styles')

@section('content')
   <!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

<div class="{{--container--}}" id="ListaController">
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

                  <div class="col-sm-12 col-md-12">

                     <!-- Text animacion al termino de busqueda -->
                     <transition name="fade" mode="out-in">
                        <h5 style="position: relative;" v-if="filterTerm">Filtrando por el criterio '<b>@{{ filterTerm }}</b>'</h5>
                        <h5 style="position: relative;" v-else>Filtrar por criterio...</h5>
                     </transition>

                     <!-- Input filterTerm -->
                     <div class="form-group">
                        <div class="input-group input-group-sm">
                           <div class="input-group-addon">
                              <i class="fa fa-font"></i>
                           </div>
                           <!-- Input para escribir el termino a buscar -->
                           <input type="text" class="form-control" placeholder="Ingrese criterio de búsqueda para filtrar"
                                  v-model="filterTerm" id="filterTerm">
                           <!-- Boton para limpiar contenido del filtro por criterio -->
                              <span class="input-group-btn">
                                 <button @click.prevent="filterTerm=''" type="button" class="btn btn-default">
                                    Limpiar
                                 </button>
                              </span><!-- .input-group-btn -->
                        </div><!-- /.input-group -->
                     </div><!-- /.form-group -->




                     <br>
                     <div class="table-responsive small" style="overflow-y: scroll;max-height: 400px;">
                        <table class="table table-striped small">
                           <thead>
                           <tr>
                              <th>Acción</th>
                              <th style="min-width: 140px !important;">label</th>
                              <th style="min-width: 140px !important;">tag</th>
                              <th style="min-width: 140px !important;">subtag</th>
                              <th style="min-width: 140px !important;">placeholder</th>
                              <th style="min-width: 140px !important;">required</th>
                              <th style="min-width: 140px !important;">class</th>
                              <th style="min-width: 140px !important;">style</th>
                              <th style="min-width: 140px !important;">bloque</th>
                              <th style="min-width: 140px !important;">seccion</th>
                              <th style="min-width: 140px !important;">class_custom</th>
                              <th style="min-width: 140px !important;">empty_column</th>
                              <th style="min-width: 140px !important;">order</th>
                              <th style="min-width: 140px !important;">max_length</th>
                              <th style="min-width: 140px !important;">type</th>
                              <th style="min-width: 140px !important;">id</th>
                              <th style="min-width: 140px !important;">name</th>
                              <th style="min-width: 140px !important;">value</th>
                           </tr>
                           </thead>
                           <tbody>
                           <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                           <tr v-for="input in filterBy(json, filterTerm)" :key="input">
                              <td>
                                 <button v-if="editBy!=input.id" class="btn btn-sm btn-primary" @click.prevent="edit(input.id)">
                                    <i class="fa fa-pencil"></i>
                                 </button>
                                 <button v-else class="btn btn-sm btn-success" @click.prevent="save(input)">
                                    <i class="fa fa-check"></i>
                                 </button>
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.label}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.label">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.tag}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.tag">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.subtag}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.subtag">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.placeholder}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.placeholder">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.required}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.required">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.class}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.class">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.style}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.style">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.bloque}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.bloque">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.seccion}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.seccion">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.class_custom}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.class_custom">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.empty_column}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.empty_column">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.order}}</span>
                                 <input v-else type="text" class="form-control input-sm" v-model="input.order">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.max_length}}</span>
                                 <input v-else type="number" class="form-control input-sm" v-model="input.max_length">
                              </td>
                              <td>
                                 @{{input.type}}
                                 <span></span>
                                 <span></span>
                              </td>
                              <td>
                                 @{{input.id}}
                              </td>
                              <td>
                                 @{{input.name}}
                              </td>
                              <td>
                                 @{{input.value}}
                              </td>
                           </tr>



                           </tbody>
                        </table>
                     </div>

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