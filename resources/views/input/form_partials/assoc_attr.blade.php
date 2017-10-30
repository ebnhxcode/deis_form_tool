<div role="tabpanel" class="tab-pane fade" id="assoc_attr">

   <h3>
      Formulario de asociación de atributos adicionales
   </h3>
   <hr>

   <label for="json">
      Pegue aqui el json
   </label>

   <code>
      <textarea name="json_attr" id="json_attr" {{--cols="30"--}} rows="20"
                class="form-control small"
                v-model="json_attr">

      </textarea>
   </code>
   <span id="json_error_attr" class="text-danger small errors"></span>

   <br>

   <label for="tables">
      Seleccione la tabla de los campos que asociará las nuevas propiedades
   </label>

   <select name="table_name_attr" id="table_name_attr" v-model="table_name_attr" class="form-control">
      <option value="">Seleccione</option>
      <option :value="t" v-for="t in tables">
         @{{ t.table_name }}
      </option>
   </select>
   <span id="table_name_error_attr" class="text-danger small errors"></span>
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
                 @click.prevent="procesar_json_attr"><!--ok-->
            Procesar
         </button>
         <button class="btn btn-primary pull-left"
                 v-if="boton_abrir_modal == true"
                 @click.prevent="modal_procesar_json_attr = true">
            Abrir modal
         </button>
      </div><!-- .col-md-* -->
   </div><!-- .row -->

</div><!-- .tab-pane -->