<div role="tabpanel" class="tab-pane fade in active" id="create_input">

   <h3>
      Formulario de creación
   </h3>
   <hr>

   <label for="json">
      Pegue aqui el json
   </label>

   <code>
      <textarea name="" id="json" {{--cols="30"--}} rows="20"
                class="form-control small"
                v-model="textarea_attr">

      </textarea>
   </code>

   <div id="" class="row">
      <div class="col-md-12">
         <transition v-if="mini_loader == true" name="slide-fade">
            <div class="pull-right">
               <div class="circle-loader">
                  <div class="checkmark draw"></div>
               </div>
            </div>
         </transition>
         <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
         <button id="toggle" class="btn btn-success pull-left"
                 @click.prevent="procesar_json_attr">
            Procesar
         </button>
      </div><!-- .col-md-* -->
      <modal_procesar_json :json="textarea_attr"
                           v-if="modal_procesar_json_attr == true">
         <h3 slot="header">
            Buscar input
            <button class="btn btn-sm btn-default pull-right" @click.prevent="modal_procesar_json_attr = false">
               Cerrar
            </button>
            <!--
               <button @click.prevent="" class="btn btn-sm btn-success pull-right">Guardar</button>
            -->
         </h3>
      </modal_procesar_json>
   </div><!-- .row -->

</div><!-- .tab-pane -->