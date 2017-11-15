@extends('layouts.app')
@include('layouts.styles')

@section('content')
   <div class="{{--container--}}" id="AdminUsuarios">
      <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <div class="{{--panel panel-default--}}">
               <div class="panel-heading"></div><!-- .panel-heading -->

               <div class="{{--panel-body--}}">
                  <div class="row">
                     <div class="col-md-12">

                        {{ csrf_field() }} {{-- <keep-alive> </keep-alive>--}}
                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">

                        <div class="well well-sm">
                           <h3 class="text-center">
                              Mantenedor de Usuarios
                              <img class="pull-right" width="90" src="{{url('img/logo.png')}}" alt="" style="border-radius: 3px;box-shadow: 2px 1px 2px 1px #dbdbdb;">
                           </h3> <!-- .text-center --> <br>

                        </div><!-- .well .well-sm -->


                        <!-- Filtro por termino, otros filtros y funcionalidades-->
                        <div class="col-md-offset-3 col-md-6">
                           <!-- Text animacion al termino de busqueda -->
                           <transition name="fade" mode="out-in">
                              <h5 style="position: relative;" v-if="filterTerm">Filtrando por el criterio '<b>@{{ filterTerm }}</b>'</h5>
                              <h5 style="position: relative;" v-else>Filtrar por criterio...</h5>
                           </transition>

                           <!-- Input filterTerm -->
                           <div class="form-group">
                              <div class="input-group input-group-md">
                                 <div class="input-group-addon">
                                    <i class="fa fa-font"></i>
                                 </div>
                                 <!-- Input para escribir el termino a buscar -->
                                 <input type="text" class="form-control" placeholder="Ingresar criterio de busqueda" v-model="filterTerm" id="filterTerm">
                                 <!-- Boton para limpiar contenido del filtro por criterio -->
                              <span class="input-group-btn">
                                 <button @click.prevent="filterTerm=''" type="button" class="btn btn-default">
                                    Limpiar
                                 </button>
                              </span><!-- .input-group-btn -->
                              </div><!-- /.input-group -->
                           </div><!-- /.form-group -->

                        </div><!-- .col-* -->

                        <div class="table-responsive col-md-12">
                           <table class="table table-striped">

                              <thead>
                              <tr>
                                 <th>Accion</th>
                                 <th>Id</th>
                                 <th>Nombre</th>
                                 <th>Email</th>
                                 <th>Rut</th>
                                 <th>Llave Secreta</th>
                                 <th>Acepta Terminos</th>
                                 <th>Cargo</th>
                                 <th>Establecimiento</th>
                                 <th>Telefono</th>
                                 <th>Role</th>
                                 <th>Se envió llave</th>
                              </tr>
                              </thead>

                              <tbody>
                              <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
                              <tr v-for="(user,index) in filterBy(users, filterTerm)" :key="user.id">

                                 <td>
                                    <button class="btn btn-sm btn-primary" @click.prevent="editUser(user.id)"
                                            v-if="userEditId!=user.id">
                                       <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success" @click.prevent="saveUser(user)"
                                            v-else>
                                       <i class="fa fa-check"></i>
                                    </button>
                                 </td>

                                 <td>
                                    @{{ user.id }}
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.name }}</span>
                                    <input type="text" v-model="user.name" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.email }}</span>
                                    <input type="text" v-model="user.email" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.rut }}</span>
                                    <input type="text" v-model="user.rut" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.clave_electronica }}</span>
                                    <input type="text" v-model="user.clave_electronica" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.acepta_terminos }}</span>
                                    <input type="text" v-model="user.acepta_terminos" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.position }}</span>
                                    <input type="text" v-model="user.position" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.establecimiento }}</span>
                                    <input type="text" v-model="user.establecimiento" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.telefono }}</span>
                                    <input type="text" v-model="user.telefono" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.id_role }}</span>
                                    <input type="text" v-model="user.id_role" class="form-control" v-else>
                                 </td>
                                 <td>
                                    <span v-if="userEditId!=user.id">@{{ user.confirmado_llave_secreta }}</span>
                                    <input type="text" v-model="user.confirmado_llave_secreta" class="form-control" v-else>
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
   {!!Html::script('js/app/api/controllers/AdminController.js')!!}
@endsection