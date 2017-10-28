@extends('layouts.app')
@include('layouts.styles')

@section('content')
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
                                    <span>
                                       Instrucciones <br>
                                       · Use el Textarea para pegar el código json en php
                                       · Use el formato de a continuación

                                       <pre>
                           <?php echo htmlspecialchars("<!-- Plantilla del layout padre -->"); ?><br>
                                          <?php echo "@extends('layouts.app')"; ?><br>
                                          <?php echo htmlspecialchars("<!-- Inclusion del contenido dentro del espacio heredado por el parent -->"); ?><br>
                                          <?php echo "@section('content')"; ?><br>
                                          <?php echo htmlspecialchars("<div class='container' id='ManualController'>"); ?> <br>
                                          <?php echo htmlspecialchars("<div class='row'>"); ?> <br>
                                          <?php echo htmlspecialchars("</div><!-- .row -->"); ?> <br>
                                          <?php echo htmlspecialchars("</div><!-- .container -->"); ?> <br>
                                          <?php echo "@endsection"; ?><br>
                                          <?php echo "<!-- Import del controller -->"; ?><br>
                                          <?php echo htmlspecialchars("{!! Html::script('js/app/api/controllers/ManualController.js') !!}"); ?> <br>
                                       </pre>


                                    </span>
                                 </div>
                              </div>

                           </div><!-- .col-md-* -->
                           <div class="col-md-8">

                              <label for="json">
                                 Pegue aqui el json
                              </label>

                              <code>
                                 <textarea name="" id="json" {{--cols="30"--}} rows="20"
                                           class="form-control">

                                 </textarea>
                              </code>

                              <div id="" class="row">
                                 <div class="col-md-12">
                                    <button class="btn btn-success">
                                       Procesar
                                    </button>
                                 </div><!-- .col-md-* -->
                              </div><!-- .row -->

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
   {!!Html::script('js/app/api/controllers/FormularioController.js')!!}
@endsection