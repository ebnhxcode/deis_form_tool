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

                     <input type="text" class="form-control" placeholder="Ingrese criterio de búsqueda para filtrar">
                     <br>
                     <div class="table-responsive" style="overflow-y: scroll;max-height: 400px;">
                        <table class="table table-striped small">
                           <thead>
                           <tr>
                              <th>Acción</th>
                              <th>type</th>
                              <th>id</th>
                              <th>name</th>
                              <th>value</th>
                              <th>max_length</th>
                              <th>placeholder</th>
                              <th>required</th>
                              <th>class</th>
                              <th>style</th>
                              <th>bloque</th>
                              <th>seccion</th>
                              <th>class_custom</th>
                              <th>label</th>
                              <th>tag</th>
                              <th>subtag</th>
                              <th>empty_column</th>
                              <th>order</th>
                           </tr>
                           </thead>
                           <tbody>
                           <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                           <tr v-for="input in json">
                              <td>
                                 <button v-if="editBy!=input.id" class="btn btn-sm btn-primary" @click.prevent="edit(input.id)">
                                    <i class="fa fa-pencil"></i>
                                 </button>
                                 <button v-else class="btn btn-sm btn-success" @click.prevent="save(input)">
                                    <i class="fa fa-check"></i>
                                 </button>
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
                              <td>
                                 <span v-if="editBy != input.id">@{{input.max_length}}</span>
                                 <input v-else type="number" class="form-control" v-model="input.max_length">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.placeholder}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.placeholder">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.required}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.required">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.class}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.class">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.style}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.style">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.bloque}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.bloque">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.seccion}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.seccion">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.class_custom}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.class_custom">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.label}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.label">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.tag}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.tag">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.subtag}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.subtag">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.empty_column}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.empty_column">
                              </td>
                              <td>
                                 <span v-if="editBy != input.id">@{{input.order}}</span>
                                 <input v-else type="text" class="form-control" v-model="input.order">
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