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
                              @foreach($instructions as $key => $instruction)
                                 <h5>· {{$instruction}}</h5>
                              @endforeach
                           </div><!-- .collapse #instructions -->

                        </div><!-- .well .well-sm -->
                     </div><!-- .col-md-* -->

                     {{ csrf_field() }}


                     @forelse($inputs as $key => $input)
                        <div class="col-md-6">
                           <dl class="dl-vertical">
                              <dt>{{$labels[$input->directivas->id]['text']}}</dt>
                              <dd>
                                 @if (in_array($input->directivas->type, ['text', 'number', 'email', 'password', 'date', 'time']))
                                    <input name="{{$input->directivas->name}}"
                                           id="{{$input->directivas->id}}"
                                           type="{{$input->directivas->type}}"
                                           class="form-control input-sm" />

                                 @elseif (in_array($input->directivas->type, ['select']))
                                    <select name="{{$input->directivas->name}}"
                                            id="{{$input->directivas->id}}"
                                            class="form-control input-sm">
                                       <option value="0">0</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                    </select>

                                 @elseif (in_array($input->directivas->type, ['textarea']))
                                    <textarea name="{{$input->directivas->name}}"
                                              id="{{$input->directivas->id}}"
                                              class="form-control input-sm">
                              </textarea>
                                 @endif

                              </dd>
                           </dl>

                           {{--
                           <label for="{{$input->directivas->id}}">
                              {{$labels[$input->directivas->id]['text']}}
                           </label>
                           --}}

                        </div><!-- .col-md-* -->
                     @empty
                        No hay campos
                     @endforelse

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