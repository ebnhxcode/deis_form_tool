import Vue from 'vue';
import VueResource from 'vue-resource';
Vue.use(VueResource);
import { _ , range } from 'lodash';
import Vue2Filters from 'vue2-filters';
Vue.use(Vue2Filters);

import es from 'vee-validate/dist/locale/es';
import VeeValidate, { Validator } from 'vee-validate';

// Add locale helper.
Validator.addLocale(es);

// Install the Plugin and set the locale.
Vue.use(VeeValidate, {
   locale: 'es'
});


const FormularioController = new Vue({
   el: '#FormularioController ',
   data(){
      return {
         'instructions':[],
         'inputs':[],
         //'labels':[],
         'nav_tab_form_deis':[],
         'deis_form_table_options':[],
         'pais_origen':[],
         'fdc':[],

         'inputTypes':{
            'basics':['text', 'number', 'email', 'password', 'date', 'time'],
            'select':['select'],
            'textarea':['textarea'],
         },
         'tags': [
            'h1','h2','h3','h4','h5','h6'
         ],

         'show_modal_buscar_formulario':false,
         'spinner_iniciar':true,
         'spinner_finalizar':false,
         'mini_loader':false,

         'formularioNuevoActivo':false,
         'formularioEditActivo':false,
         'formularioActivoObj':[],

         'hayGuardadoActivo':false,
         'idFormularioActivo':'',

      }
   },
   computed: {},
   watch: {
   },
   components: {
      'mini-spinner': {
         props: [''],
         'name': 'mini-spinner',
         'template': `
	         <div class="loader-mini text-center">Cargando tabla, espere por favor...</div>
	      `,
         data () {
            return {
               visible: false,
            }
         },
         ready () {},
         created(){},
         filters: {},
         methods: {},
      },
      'spinner': {
         props: [''],
         'name': 'spinner',
         'template': `
         <div class="loader text-center">Cargando tabla, espere por favor...</div>
      `,
         data () {
            return {
               visible: false,
            }
         },
         ready () {},
         created(){},
         filters: {},
         methods: {},
      },
      'mini-loader': {
         props: [''],
         'name': 'mini-loader',
         'template':`<div class="mini-loader">Loading...</div>`,
         data () {
            return {
            }
         },
         ready () {},
         created(){},
         filters: {},
         methods: {},
      },
      'inputs':{
         props: ['name','id','type', 'max_length', 'required', 'readonly', 'class_custom', 'style_custom', 'placeholder'],
         'name': 'inputs',
         'template': `
            <input :name="name!=''?name:id"
                   :id="id!=''?id:name"
                   :type="type!=''?type:text"
                   :max-lenght="max_lenght!=''?max_lenght:25"
                   :required="required!=''?required:false"
                   :readonly="readonly!=''?readonly:false"
                   :style="style_custom!=''?style_custom:''"
                   :class="class_custom!=''?class_custom:'form-control'"
                   :placeholder="placeholder!=''?placeholder:''" />
         `,
         data () {},
         ready () {},
         created(){},
         filters: {},
         methods: {},
      },
      'selects':{
         props: ['name','id'],
         'name': 'selects',
         'template': `
            <select name="name"
                    id="id"
                   :required="required"
                   :readonly="readonly"
                   :class="'form-control '+class" />
            </select>
         `,
         data () {},
         ready () {},
         created(){},
         filters: {},
         methods: {},
      },
      'textareas':{
         props: ['name','id'],
         'name': 'textareas',
         'template': `
            <textarea name="name"
                    id="id"
                   :required="required"
                   :readonly="readonly"
                   :class="'form-control '+class" />
            </textarea>
         `,
         data () {},
         ready () {},
         created(){},
         filters: {},
         methods: {},
      },
      'modal_buscar_formulario':{
         props: [''],
         template: `
			   <!-- template for the modal component -->
			   <transition name="modal">
				   <div class="modal-mask">
					   <div class="modal-wrapper">
					      <div class="modal-container">

						      <div class="modal-header">
							      <slot name="header"></slot>
						      </div>

						      <div class="modal-body">
							      <slot name="body">

                              <div id="" class="panel with-nav-tabs panel-primary">
                                 <!-- Items elementos de cabecera -->
                                 <div class="panel-heading">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs small" role="tablist">

                                       <li role="presentation" class="active">
                                          <a href="#lista_personas_run" aria-controls="lista_personas_run" role="tab" data-toggle="tab">
                                             Búsqueda de Personas - <b>Run Madre</b>
                                          </a>
                                       </li>
                                       <li role="presentation">
                                          <a href="#lista_personas_correlativo" aria-controls="lista_personas_correlativo"
                                             role="tab" data-toggle="tab">

                                             Búsqueda de Personas - <b>Correlativo</b>
                                          </a>
                                       </li>

                                    </ul>
                                 </div><!-- .panel-heading -->

                                 <div class="panel-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                       <div role="tabpanel" class="tab-pane fade in active" id="lista_personas_run">


                                          <dl class="dl-vertical">
                                             <div class="row">
                                                <div class="col-md-12" style="overflow-y: scroll;max-height: 400px;">

                                                   <dt>
                                                      Run Madre
                                                   </dt>
                                                   <dd>
                                                      <input class="form-control"
                                                             type="text"
                                                             style="padding-bottom: 5px;"
                                                             name="run_madre"
                                                             placeholder="Ej: 123456789 Sin puntos ni guión"
                                                             id="run_madre"
                                                             v-model="run_madre">

                                                      <button class="btn btn-sm btn-info" @click.prevent="buscar_por_rut">
                                                         Buscar&nbsp;<i class="fa fa-search"></i>
                                                      </button>

                                                      <div class="table-responsive" v-if="formulario_vacio == false">
                                                         Resultados encontrados
                                                         <br>
                                                         <table class="table table-striped small">
                                                            <thead>
                                                               <tr>
                                                                  <th>Accion</th>
                                                                  <th>Correlativo</th>
                                                                  <th>Run Madre</th>
                                                                  <th>Nombres</th>
                                                                  <th>Apellido Paterno</th>
                                                                  <th>Apellido Materno</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr v-for="f in formularios">
                                                                  <td>
                                                                     <button class="btn btn-sm btn-primary"
                                                                        @click.prevent="modificar_usuario_seleccionado(f)">
                                                                        <i class="fa fa-pencil"></i>
                                                                     </button>
                                                                  </td>
                                                                  <td>{{f.n_correlativo_interno}}</td>
                                                                  <td>{{f.run_madre}}</td>
                                                                  <td>{{f.nombres_madre}}</td>
                                                                  <td>{{f.primer_apellido_madre}}</td>
                                                                  <td>{{f.segundo_apellido_madre}}</td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div><!-- .table-responsive -->
                                                   </dd>

                                                   <!--
                                                   <dt></dt>
                                                   <dd</dd>
                                                   <div class="col-md-6">
                                                      <dt></dt>
                                                      <dd class="well well-sm"></dd>
                                                   </div>
                                                   -->

                                                </div><!-- .col-md-12 -->
                                             </div>
                                          </dl><!-- dl-horizontal -->


                                       </div><!-- .tab-pane .fade #lista_personas_run -->

                                       <div role="tabpanel" class="tab-pane fade" id="lista_personas_correlativo">


                                          <dl class="dl-vertical">
                                             <div class="row">
                                                <div class="col-md-12" style="overflow-y: scroll;max-height: 400px;">

                                                   <dt>
                                                      Número de correlativo
                                                   </dt>
                                                   <dd>
                                                      <input class="form-control"
                                                             type="number"
                                                             name="n_correlativo_interno"
                                                             id="n_correlativo_interno">

                                                     <button class="btn btn-sm btn-info" @click.prevent="buscar_por_correlativo">
                                                         Buscar&nbsp;<i class="fa fa-search"></i>
                                                      </button>


                                                      <div class="table-responsive" v-if="formulario_vacio_correlativo == false">
                                                         Resultados encontrados
                                                         <br>
                                                         <table class="table table-striped small">
                                                            <thead>
                                                               <tr>
                                                                  <th>Correlativo</th>
                                                                  <th>Run Madre</th>
                                                                  <th>Nombres</th>
                                                                  <th>Apellido Paterno</th>
                                                                  <th>Apellido Materno</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr v-for="f in formularios">
                                                                  <td>{{f.n_correlativo_interno}}</td>
                                                                  <td>{{f.run_madre}}</td>
                                                                  <td>{{f.nombres_madre}}</td>
                                                                  <td>{{f.primer_apellido_madre}}</td>
                                                                  <td>{{f.segundo_apellido_madre}}</td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div><!-- .table-responsive -->
                                                   </dd>


                                                   <!--
                                                   <dt></dt>
                                                   <dd</dd>
                                                   <div class="col-md-6">
                                                      <dt></dt>
                                                      <dd class="well well-sm"></dd>
                                                   </div>
                                                   -->

                                                </div><!-- .col-md-12 -->
                                             </div><!-- .row -->
                                          </dl><!-- dl-horizontal -->

                                       </div><!-- .tab-pane .fade #lista_personas_correlativo -->

                                    </div><!-- .panel-heading -->
                                 </div><!-- .panel-heading -->
                              </div><!-- .panel-heading -->




                              <!--
                               <dl class="dl-vertical">
                                 <div class="row">
									         <div style="overflow-y: scroll;max-height: 400px;">

                                       <div class="col-md-6">
                                          <dt></dt>
                                          <dd class="well well-sm"></dd>
                                       </div>
                                       <div class="col-md-6">
                                          <dt></dt>
                                          <dd class="well well-sm"></dd>
                                       </div>

                                    </div>
                                 </div>
                              </dl>
                              -->
							      </slot>
						      </div>

						      <!--
						      <div class="modal-footer">
							      <slot name="footer">
							         <button class="btn btn-sm btn-success" @click="$emit('close')">
								         Aceptar
							         </button>
                           </slot>
						      </div>
						      -->
					      </div>
                  </div>
				   </div>
			   </transition>
			`,
         name: 'modal_buscar_formulario',
         data () {
            return {
               'run_madre':'',
               'n_correlativo_interno':'',
               'formularios':[],
               'formulario_vacio':true,
               'formulario_vacio_correlativo':true,
            }
         },
         ready () {
         },
         created () {
         },
         methods: {
            buscar_por_rut: function () {
               var formData = new FormData();

               Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
               formData.append('run_madre', this.run_madre);

               this.$http.post('/formulario/buscar_por_rut', formData).then(response => { // success callback
                  //console.log(response);
                  this.formularios = response.body.formularios;
                  this.formulario_vacio = $.isEmptyObject(this.formularios)==true?true:false;

               }, response => { // error callback
                  console.log(response);
               });
            },
            modificar_usuario_seleccionado: function (formulario) {
               this.$parent.renderizar_solo_inputs();
               this.$parent.fdc = formulario;
               this.$parent.show_modal_buscar_formulario = false;
               this.$parent.formularioEditActivo = true;

            },
         },
         watch: {
         },
      },
      /*
       '':{
       props: [''],
       template: `
       `,
       name: '',
       data () {
       return {
       }
       },
       ready () {
       },
       created () {
       },
       methods: {
       },
       watch: {
       },
       }
       */
   },
   created(){
      //this.spinner_iniciar = true;
      this.fetchFormulario();
   },
   ready: {},
   filters: {
   },
   methods: {
      //camelCase() => for specific functions

      verifica_validacion_change: function (input) {
         switch (input.id) {
            case 'embarazo_con_control_parental':
               if (this.fdc[input.name] == 'No' || this.fdc[input.name] == 'Desconocido') {
                  for (let i in this.inputs){
                     if (input.seccion == this.inputs[i].seccion && input.name != this.inputs[i].name) {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (input.seccion == this.inputs[i].seccion && input.name != this.inputs[i].name
                     &&
                        (
                           (this.inputs[i].name != 'resultado_dilucion_1_vdrl_embarazo' && this.inputs[i].name != 'fecha_1_vdrl_embarazo' ||
                           this.fdc['resultado_1_vdrl_embarazo'] == 'Reactivo' ) &&
                           (this.inputs[i].name != 'resultado_dilucion_2_vdrl_embarazo' && this.inputs[i].name != 'fecha_2_vdrl_embarazo' ||
                           this.fdc['resultado_2_vdrl_embarazo'] == 'Reactivo' ) &&
                           (this.inputs[i].name != 'resultado_dilucion_3_vdrl_embarazo' && this.inputs[i].name != 'fecha_3_vdrl_embarazo' ||
                           this.fdc['resultado_3_vdrl_embarazo'] == 'Reactivo')
                        )
                     ) {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
            case 'resultado_1_vdrl_embarazo':
               if (this.fdc[input.name] == 'No Reactivo' || this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_1_vdrl_embarazo' || this.inputs[i].name == 'fecha_1_vdrl_embarazo') {
                        this.inputs[i].disabled = true;
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_1_vdrl_embarazo' || this.inputs[i].name == 'fecha_1_vdrl_embarazo') {
                        this.inputs[i].disabled = null;
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
            case 'resultado_2_vdrl_embarazo':
               if (this.fdc[input.name] == 'No Reactivo' || this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_2_vdrl_embarazo' || this.inputs[i].name == 'fecha_2_vdrl_embarazo') {
                        this.inputs[i].disabled = true;
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_2_vdrl_embarazo' || this.inputs[i].name == 'fecha_2_vdrl_embarazo') {
                        this.inputs[i].disabled = null;
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
            case 'resultado_3_vdrl_embarazo':
               if (this.fdc[input.name] == 'No Reactivo' || this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_3_vdrl_embarazo' || this.inputs[i].name == 'fecha_3_vdrl_embarazo') {
                        this.inputs[i].disabled = true;
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_3_vdrl_embarazo' || this.inputs[i].name == 'fecha_3_vdrl_embarazo') {
                        this.inputs[i].disabled = null;
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
         }

      },
      verifica_validacion_click: function (input) {
         switch (input.id) {
            case 'pais_origen':

               break;
         }
      },

      buscar_formulario: function () {
         this.show_modal_buscar_formulario = true;
      },

      crear_nuevo_formulario: function () {
         if (this.formularioNuevoActivo == false) {
            this.renderizar_formulario();
            this.formularioNuevoActivo = true;
         }else{
            this.fdc = this.formularioActivoObj;
            alert('Ya se está creando un nuevo formulario');
         }
      },

      fetchFormulario: function () {
         this.$http.get('/formulario/create').then(response => { // success callback
            this.instructions = response.body.instructions;
         }, response => { // error callback
            console.log('Error fetch_formulario: '+response);
         });

         return;
      },


      guardarFormulario: function (tabName) {
         this.mini_loader = true;
         //this.spinner_finalizar = true;
         var formData = new FormData();
         //var formData = [];
         var permiteGuardar = false;
         //console.log(tabName);
         for (let i in this.inputs) {
            if (this.inputs[i].seccion == tabName) {
               if (this.fdc[this.inputs[i].name] != null ) {
                  //Le pasa el valor en v-model
                  formData.append(this.inputs[i].name, this.fdc[this.inputs[i].name]);
               }
            }
         }

         Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
         formData.append('_id_formulario', this.fdc.id);

         this.$http.post('/formulario', formData).then(response => { // success callback
            console.log(response);

            //alert('Guardado');

            //Si guardar salio bien
            this.hayGuardadoActivo = true;
            this.idFormularioActivo = this.fdc.id;
            $('.circle-loader').toggleClass('load-complete');
            $('.checkmark').toggle();
            this.mini_loader = false;

         }, response => { // error callback
            console.log(response);
         });



         return;
      },

      inputInArray: function (input, array) {

         return ($.inArray(input.type, array) == -1) ? false : true;
      },

      renderizar_solo_inputs: function () {
         this.$http.get('/formulario/inputs_formulario').then(response => { // success callback
            this.inputs = response.body.inputs;
            this.nav_tab_form_deis = response.body.nav_tab_form_deis;
            this.deis_form_table_options = response.body.deis_form_table_options;
            this.pais_origen = response.body.pais_origen;
            this.validar_validaciones_previas();
         }, response => { // error callback
            console.log('Error datos_formulario: '+response);
         });
      },

      renderizar_formulario: function () {
         this.$http.get('/formulario/datos_formulario').then(response => { // success callback
            this.inputs = response.body.inputs;
            this.nav_tab_form_deis = response.body.nav_tab_form_deis;
            this.deis_form_table_options = response.body.deis_form_table_options;
            this.pais_origen = response.body.pais_origen;
            this.fdc = response.body.fdc;
            this.formularioActivoObj = response.body.fdc;
            this.validar_validaciones_previas();
         }, response => { // error callback
            console.log('Error datos_formulario: '+response);
         });
      },

      validar_validaciones_previas: function () {
         for (let i in this.inputs) {
            this.verifica_validacion_change(this.inputs[i]);
         }
      },
      //with_dash() => for explained specific functions
   },
});

const ListaController = new Vue({



});
