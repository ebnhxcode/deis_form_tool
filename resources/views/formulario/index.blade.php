@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="panel-heading">Formulario · Informaciones de transmision Vertical de VIH y Sífilis</div>

               <div class="panel-body">
                  <h3 class="text-center">Inicio del formulario</h3>
                  <div class="row">
                     @forelse($inputs as $key => $input)
                        <div class="col-md-6">

                           <label for="{{$input->directivas->id}}">
                              {{$labels[$input->directivas->id]['text']}}
                           </label>

                           @if (in_array($input->directivas->type, ['text', 'number', 'email', 'password', 'date', 'time']))
                              <input name="{{$input->directivas->name}}"
                                     id="{{$input->directivas->id}}"
                                     type="{{$input->directivas->type}}"
                                     class="form-control" />
                           @elseif (in_array($input->directivas->type, ['select']))
                              <select name="{{$input->directivas->name}}"
                                      id="{{$input->directivas->id}}"
                                      class="form-control">
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                              </select>
                           @elseif (in_array($input->directivas->type, ['textarea']))
                              <textarea name="{{$input->directivas->name}}"
                                      id="{{$input->directivas->id}}"
                                      class="form-control">
                              </textarea>
                           @endif

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
