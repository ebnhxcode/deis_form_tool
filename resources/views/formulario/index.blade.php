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
                              Lista de Formularios · Informaciones de transmision Vertical de VIH y Sífilis
                              <img class="pull-right" width="90" src="{{url('img/logo.png')}}" alt="" style="border-radius: 3px;box-shadow: 2px 1px 2px 1px #dbdbdb;">
                           </h3> <!-- .text-center --> <br>


                        </div><!-- .well .well-sm -->


                        <div id="" class="panel with-nav-tabs panel-primary">
                           <!-- Items elementos de cabecera -->
                           <div class="panel-heading">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs small" role="tablist">

                                 <li role="presentation" class="active">
                                    <a href="#lista_formularios" aria-controls="lista_formularios" role="tab" data-toggle="tab">
                                       Lista de Formularios
                                    </a>
                                 </li>
                              </ul>
                           </div><!-- .panel-heading -->

                           <div class="panel-body">
                              <!-- Tab panes -->
                              <div class="tab-content">

                                 <div role="tabpanel" class="'tab-pane fade in active" id="lista_formularios">

                                    <div class="table-responsive">
                                       <table class="table table-striped">
                                          <thead>
                                             <tr>
                                                <th>Head 1</th>
                                                <th>Head 2</th>
                                                <th>Head 3</th>
                                                <th>Head 4</th>
                                                <th>Head 5</th>
                                                <th>Head 6</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Item 1</td>
                                                <td>Item 2</td>
                                                <td>Item 3</td>
                                                <td>Item 4</td>
                                                <td>Item 5</td>
                                                <td>Item 6</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>

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