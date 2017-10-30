<div role="tabpanel" class="tab-pane fade in active" id="create_input">

   <h3>
      Formulario de creación
   </h3>
   <hr>

   <label for="json">
      Pegue aqui el json
   </label>

   <code>
      <textarea name="json" id="json" {{--cols="30"--}} rows="20"
                class="form-control small"
                v-model="json">

      </textarea>
   </code>
   <span id="json_error" class="text-danger small errors"></span>

   <br>

   <label for="tables">
      Seleccione la tabla a la que asociará estos campos
   </label>

   <select name="table_name" id="table_name" v-model="table_name" class="form-control">
      <option value="">Seleccione</option>
      <option :value="t" v-for="t in tables">
         @{{ t.table_name }}
      </option>
   </select>
   <span id="table_name_error" class="text-danger small errors"></span>
   <br>

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
                 @click.prevent="procesar_json">
            Procesar
         </button>
      </div><!-- .col-md-* -->
      <modal_procesar_json :json="json"
                           v-if="modal_procesar_json == true">
         <h3 slot="header">
            Buscar input
            <button class="btn btn-sm btn-default pull-right" @click.prevent="modal_procesar_json = false">
               Cerrar
            </button>
            <!--
               <button @click.prevent="" class="btn btn-sm btn-success pull-right">Guardar</button>
            -->
         </h3>
      </modal_procesar_json>
   </div><!-- .row -->

</div><!-- .tab-pane -->