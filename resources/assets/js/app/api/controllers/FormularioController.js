import Vue from 'vue';
import VueResource from 'vue-resource';
Vue.use(VueResource);
import { _ , range } from 'lodash';
import Vue2Filters from 'vue2-filters';
Vue.use(Vue2Filters);

import es from 'vee-validate/dist/locale/es';
import VeeValidate, { Validator } from 'vee-validate';

import { validate, clean, format } from 'rut.js';

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
         'auth':[],

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

                                                      <!-- Busqueda por RUN -->
                                                      <div class="form-group">
                                                         <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">
                                                               <i class="fa fa-user"></i>
                                                            </div>

                                                            <input class="form-control"
                                                             type="text"
                                                             style="padding-bottom: 5px;"
                                                             name="run_madre"
                                                             placeholder="Ej: 123456789 Sin puntos ni guión"
                                                             id="run_madre"
                                                             maxlength="12"
                                                             v-model="run_madre"
                                                             @keyup.prevent="formatear_rut"
                                                             @change="buscar_por_run">

                                                            <span class="input-group-btn">
                                                               <button class="btn btn-sm btn-info"
                                                                  @click.prevent="buscar_por_run">
                                                                  Buscar&nbsp;<i class="fa fa-search"></i>
                                                               </button>
                                                            </span><!-- .input-group-btn -->
                                                         </div><!-- /.input-group -->
                                                      </div><!-- /.form-group -->


                                                      <div class="table-responsive" v-if="formulario_vacio == false">
                                                         <small class="text-info">Resultados encontrados</small>
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

                                                </div><!-- .col-md-12 -->
                                             </div>
                                          </dl><!-- dl-horizontal -->


                                       </div><!-- .tab-pane .fade #lista_personas_run -->
                                    </div><!-- .panel-heading -->
                                 </div><!-- .panel-heading -->
                              </div><!-- .panel-heading -->


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
               'formularios_correlativo':[],
               'formulario_vacio':true,
               'formulario_vacio_correlativo':true,
            }
         },
         ready () {
         },
         created () {
         },
         methods: {
            formatear_rut: function () {
               var run = this.run_madre;
               this.run_madre = format(run);
            },
            validar_rut: function (run) {
               if (validate(run) == false) {
                  swal({
                     title: "Advertencia",
                     text: "El formato del rut es incorrecto.",
                     type: "warning",
                     confirmButtonClass: "btn-danger",
                     closeOnConfirm: false
                  });
                  return this.run = null;
               }else{
                  return format(run);
               }
            },
            buscar_por_run: function () {
               if (!this.run_madre || validate(this.run_madre) == false){
                  swal({
                     title: "Advertencia",
                     text: "Debe ingresar un rut valido.",
                     type: "warning",
                     confirmButtonClass: "btn-danger",
                     closeOnConfirm: false
                  });
                  return;
               }

               var formData = new FormData();

               Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();

               var run_limpio = clean(this.run_madre);
               run_limpio = run_limpio.substr(0, run_limpio.length-1);
               //alert (run_limpio) ;
               //return;

               //formData.append('run_madre', this.run_madre);
               formData.append('run_madre', run_limpio);

               this.$http.post('/formulario/buscar_por_run', formData).then(response => { // success callback
                  //console.log(response);
                  this.formularios = response.body.formularios;
                  this.formulario_vacio = $.isEmptyObject(this.formularios)==true?true:false;

                  if (this.formulario_vacio == true) {
                     swal({
                        title: "Atención",
                        text: "El rut ingresado no se encuentra registrado.",
                        type: "warning",
                        confirmButtonClass: "btn-danger",
                        closeOnConfirm: false
                     });
                  }

               }, response => { // error callback
                  console.log(response);
               });
            },
            buscar_por_correlativo: function () {
               if (!this.n_correlativo_interno) return;
               var formData = new FormData();

               Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
               formData.append('n_correlativo_interno', this.n_correlativo_interno);

               this.$http.post('/formulario/buscar_por_correlativo', formData).then(response => { // success callback
                  //console.log(response);

                  this.formularios_correlativo = response.body.formularios;
                  this.formulario_vacio_correlativo = $.isEmptyObject(this.formularios_correlativo)==true?true:false;

               }, response => { // error callback
                  console.log(response);
               });
            },
            modificar_usuario_seleccionado: function (formulario) {
               /*
                for (let f in formulario) {

                if (f.indexOf('fecha')>-1 && formulario[f]) {
                let fecha_x = formulario[f].split('-');
                formulario[f] = fecha_x[2]+'-'+fecha_x[1]+'-'+fecha_x[0];
                }

                }
                */
               this.$parent.renderizar_solo_inputs();
               this.$parent.fdc = formulario;
               this.$parent.show_modal_buscar_formulario = false;
               this.$parent.formularioEditActivo = true;
               this.$parent.formularioNuevoActivo = false;

               var formData = new FormData();
               Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
               formData.append('n_correlativo_interno', formulario.n_correlativo_interno);

               this.$http.post('/formulario/marcar_registro_form_deis', formData).then(response => { // success callback
                  this.fdc = response.body.fdc;
                  //console.log(response);
               }, response => { // error callback
                  console.log(response);
               });

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
      var self = this;
      setInterval(function () {

         self.guardarFormulario('identificacion_mujer');
         self.guardarFormulario('control_embarazo');
         self.guardarFormulario('patologias_sifilis');
         self.guardarFormulario('patologias_vih');
         self.guardarFormulario('datos_parto');
         self.guardarFormulario('datos_recien_nacido');

      },300000);
   },
   ready: {},
   filters: {
   },
   methods: {
      //camelCase() => for specific functions
      verifica_validacion_keyup: function (input) {
         /*
         switch (input.id) {
            case 'run_madre':
               this.fdc[input.name] = format(this.fdc[input.name]);
               break;
            case 'run_recien_nacido':
               this.fdc[input.name] = format(this.fdc[input.name]);
               break;
         }
         */

      },

      verifica_validacion_change: function (input) {


         switch (input.id) {


            case 'run_madre':
               /*
               if (validate(this.fdc[input.name]) == false) {
                  this.fdc[input.name] = null;
                  alert('Debe ingresar un rut valido');
               }
               */

               if (this.formularioNuevoActivo == true && this.fdc[input.name] != null) {
                  var formData = new FormData();
                  Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
                  formData.append('run_madre', this.fdc[input.name]);
                  this.$http.post('/formulario/buscar_run_existente', formData).then(response => { // success callback
                     console.log(response);
                     var rd = response.body.rd;
                     if (rd == 'Existe') {
                        this.fdc[input.name] = null;
                        swal({
                           title: "Advertencia",
                           text: "El rut ingresado ya existe.",
                           type: "warning",
                           confirmButtonClass: "btn-danger",
                           closeOnConfirm: false
                        });
                     }

                  }, response => { // error callback
                     console.log(response);
                  });
               }
               break;
            /*
            case 'run_recien_nacido':
               if (validate(this.fdc[input.name]) == false) {
                  this.fdc[input.name] = null;
                  alert('Debe ingresar un rut valido');
               }
               break;
            */

            case 'mujer_es_vih_positivo':
               if (this.fdc[input.name] == 'Si') {
                  var self = this;
                  swal({
                     title: "Advertencia!",
                     text: `
                     Acuerdo de confidencialidad

                     Al seleccionar si, acuerdo mantener el proceso de ingreso de información de forma confidencial y anónima.

                     Para confirmar ingrese su clave de acceso
                     `,
                     type: "input",
                     inputType: "password",
                     showCancelButton: true,
                     closeOnConfirm: false,
                     inputPlaceholder: "Ingrese su clave de acceso",
                  }, function (inputValue) {
                     if (inputValue === false) {
                        self.fdc[input.name] = null;
                        return false;
                     }

                     if (inputValue === "") {
                        swal.showInputError("Necesitas ingresar tu clave de acceso!");
                        //this.fdc[input.name] = null;
                        return false;
                     }

                     var formData = new FormData();
                     Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
                     formData.append('rut_usuario', self.auth.rut);
                     formData.append('clave_usuario', inputValue);

                     self.$http.post('/formulario/confirmar_confidencialidad_mujer_vih', formData).then(response => { // success callback
                        console.log(response);
                        var rd = response.body.rd;
                        if (rd == true) {
                           swal("Gracias!", "Te recordamos que al ser información sensible solicitamos tomar con seriedad el ingreso de la información.");
                        }else{
                           self.fdc[input.name] = null;
                           swal({
                              title: "Advertencia",
                              text: "La clave ingresada es incorrecta.",
                              type: "warning",
                              confirmButtonClass: "btn-danger",
                              closeOnConfirm: false
                           });
                        }

                     }, response => { // error callback
                        console.log(response);
                     });
                     return false;
                  });


                  /*
                  swal({
                     title: "",
                     text: "El rut ingresado ya existe.",
                     type: "warning",
                     confirmButtonClass: "btn-danger",
                     closeOnConfirm: false
                  });
                  */
               }

               break;

            case 'edad_gestacional_ingreso_control_embarazo':
               if (parseInt(this.fdc[input.name])<0) {
                  this.fdc[input.name] = 0;
               }
               break;
            case 'embarazo_con_control_parental':
               if (this.fdc[input.name] == 'No' || this.fdc[input.name] == 'Desconocido') {
                  for (let i in this.inputs){
                     //Aqui agregar la validacion del bloque para que no se lo pase de largo
                     if (input.seccion == this.inputs[i].seccion && input.name != this.inputs[i].name) {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (input.seccion == this.inputs[i].seccion && input.name != this.inputs[i].name)

                     /*
                     &&
                        (
                           (this.inputs[i].name != 'resultado_dilucion_1_vdrl_embarazo' && this.inputs[i].name != 'fecha_1_vdrl_embarazo'
                           && this.inputs[i].name == 'eg_1_dvrl_embarazo' ||
                           this.fdc['resultado_1_vdrl_embarazo'] == 'Reactivo' ) &&
                           (this.inputs[i].name != 'resultado_dilucion_2_vdrl_embarazo' && this.inputs[i].name != 'fecha_2_vdrl_embarazo'
                           && this.inputs[i].name == 'eg_2_dvrl_embarazo' ||
                           this.fdc['resultado_2_vdrl_embarazo'] == 'Reactivo' ) &&
                           (this.inputs[i].name != 'resultado_dilucion_3_vdrl_embarazo' && this.inputs[i].name != 'fecha_3_vdrl_embarazo'
                           && this.inputs[i].name == 'eg_3_dvrl_embarazo' ||
                           this.fdc['resultado_3_vdrl_embarazo'] == 'Reactivo')

                        )
                     )*/
                     {
                        //if (this.fdc['acepta_rechaza_toma_examen_vih'] == 'Acepta' ||
                        //this.fdc['acepta_rechaza_toma_examen_vih'] == 'Rechaza' ||
                        //this.fdc['acepta_rechaza_toma_examen_vih'] == null ||
                           //(this.inputs[i].bloque == input.bloque /*&& this.fdc['acepta_rechaza_toma_examen_vih'] == 'Rechaza'*/) ){
                           this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
            case 'resultado_1_vdrl_embarazo':
               if (this.fdc[input.name] == 'No Reactivo' || this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){

                     if (this.fdc[input.name] == 'No Realizado') {
                        if (this.inputs[i].name == 'resultado_dilucion_1_vdrl_embarazo' ||
                           this.inputs[i].name == 'fecha_1_vdrl_embarazo' ||
                           this.inputs[i].name == 'eg_1_dvrl_embarazo') {
                           this.inputs[i].disabled = true;
                        }
                     }else if (this.fdc[input.name] == 'No Reactivo') {
                        if (this.inputs[i].name == 'fecha_1_vdrl_embarazo') {
                           this.inputs[i].disabled = null;

                        }else {
                           if (this.inputs[i].name == 'resultado_dilucion_1_vdrl_embarazo' ||
                              this.inputs[i].name == 'eg_1_dvrl_embarazo') {
                              this.inputs[i].disabled = true;
                           }
                        }


                     }


                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_1_vdrl_embarazo'
                        || this.inputs[i].name == 'fecha_1_vdrl_embarazo'
                        || this.inputs[i].name == 'eg_1_dvrl_embarazo') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
            case 'resultado_2_vdrl_embarazo':
               if (this.fdc[input.name] == 'No Reactivo' || this.fdc[input.name] == 'No Realizado') {



                  for (let i in this.inputs){

                     if (this.fdc[input.name] == 'No Realizado') {
                        if (this.inputs[i].name == 'resultado_dilucion_2_vdrl_embarazo' ||
                           this.inputs[i].name == 'fecha_2_vdrl_embarazo' ||
                           this.inputs[i].name == 'eg_2_dvrl_embarazo') {
                           this.inputs[i].disabled = true;
                        }
                     }else if (this.fdc[input.name] == 'No Reactivo') {
                        if (this.inputs[i].name == 'fecha_2_vdrl_embarazo') {
                           this.inputs[i].disabled = null;

                        }else {
                           if (this.inputs[i].name == 'resultado_dilucion_2_vdrl_embarazo' ||
                              this.inputs[i].name == 'eg_2_dvrl_embarazo') {
                              this.inputs[i].disabled = true;
                           }
                        }


                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_2_vdrl_embarazo' ||
                        this.inputs[i].name == 'fecha_2_vdrl_embarazo'
                        || this.inputs[i].name == 'eg_2_dvrl_embarazo') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
            case 'resultado_3_vdrl_embarazo':
               if (this.fdc[input.name] == 'No Reactivo' || this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){

                     if (this.fdc[input.name] == 'No Realizado') {
                        if (this.inputs[i].name == 'resultado_dilucion_3_vdrl_embarazo' ||
                           this.inputs[i].name == 'fecha_3_vdrl_embarazo' ||
                           this.inputs[i].name == 'eg_3_dvrl_embarazo') {
                           this.inputs[i].disabled = true;
                        }
                     }else if (this.fdc[input.name] == 'No Reactivo') {
                        if (this.inputs[i].name == 'fecha_3_vdrl_embarazo') {
                           this.inputs[i].disabled = null;

                        }else {
                           if (this.inputs[i].name == 'resultado_dilucion_3_vdrl_embarazo' ||
                              this.inputs[i].name == 'eg_3_dvrl_embarazo') {
                              this.inputs[i].disabled = true;
                           }
                        }


                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_3_vdrl_embarazo' ||
                        this.inputs[i].name == 'fecha_3_vdrl_embarazo'
                        || this.inputs[i].name == 'eg_3_dvrl_embarazo') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
            case 'acepta_rechaza_toma_examen_vih':
               if (this.fdc[input.name] == 'Rechaza') {
                  for (let i in this.inputs){
                     //Aqui agregar la validacion del bloque para que no se lo pase de largo
                     if (input.bloque == this.inputs[i].bloque && input.name != this.inputs[i].name) {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     //Aqui agregar la validacion del bloque para que no se lo pase de largo
                     if (input.bloque == this.inputs[i].bloque && input.name != this.inputs[i].name) {
                        this.inputs[i].disabled = null;
                     }
                  }
               }


               break;
            case 'resultado_1_examen_vih_embarazo':
               if (this.fdc[input.name] == 'No Realizado' || this.fdc[input.name] == 'No Reactivo') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_1_examen_vih_embarazo' || this.inputs[i].name == 'eg_1_examen_vih') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_1_examen_vih_embarazo' || this.inputs[i].name == 'eg_1_examen_vih') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }


               break;
            case 'resultado_2_examen_vih_embarazo':
               if (this.fdc[input.name] == 'No Realizado' || this.fdc[input.name] == 'No Reactivo') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_2_examen_vih_embarazo' || this.inputs[i].name == 'eg_2_examen_vih') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_2_examen_vih_embarazo' || this.inputs[i].name == 'eg_2_examen_vih') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }
               break;

            //case 'anos_estudio':
            case 'escolaridad':
               $('.anos_estudio1').find('option').remove().end();
               $('.anos_estudio2').find('option').remove().end();
               switch (this.fdc[input.id]) {
                  case 'Ed. Basica':
                     for (var i = 1;i<=8;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                     }
                     for (var i = 1;i<=8;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio2').append($(o).html(i));
                     }
                     break;
                  case 'Ed. Media':
                     for (var i = 1;i<=4;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                     }
                     for (var i = 1;i<=4;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio2').append($(o).html(i));
                     }
                     break;
                  case 'Tecnico':
                     for (var i = 1;i<=3;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                     }
                     for (var i = 1;i<=3;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio2').append($(o).html(i));
                     }
                     break;
                  case 'Superior':
                     for (var i = 1;i<=7;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                     }
                     for (var i = 1;i<=7;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio2').append($(o).html(i));
                     }
                     break;
                  default:
                     var i = -1;
                     do {
                        i++;
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                        $('.anos_estudio2').append($(o).html(i));
                     }while(false);
                     break;
               }

               $('.anos_estudio1').val(this.fdc['anos_estudio']);
               $('.anos_estudio2').val(this.fdc['anos_estudio']);
               break;
            /*
            case 'anos_estudio':
               $('.anos_estudio').val(this.fdc['anos_estudio']);
                break;
            */

            case 'nacidos_vivos_previos_embarazo':
            case 'nacidos_muertos_previos_embarazo':
            case 'abortos_previos_embarazo':
               if (parseInt(this.fdc[input.name]) > 10 || parseInt(this.fdc[input.name]) < 0) {
                  this.fdc[input.name] = 0;
               }
               break;


            case 'numero_contactos_sexuales_declarados':
            case 'numero_contactos_sexuales_estudiados':
            case 'numero_contactos_sexuales_tratados':
            case 'codigo_establecimiento':
               if (parseInt(this.fdc[input.name]) < 0) {
                  this.fdc[input.name] = 0;
               }
               break;

            case 'sifilis_previa_embarazo':
               if (this.fdc[input.name] == 'No') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'ano_sifilis_previa_embarazo') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'ano_sifilis_previa_embarazo') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }


               break;
            case 'ano_sifilis_previa_embarazo':
               var d = new Date();
               var y = d.getFullYear();
               if (parseInt(this.fdc[input.name]) < 0 || parseInt(this.fdc[input.name]) > y || parseInt(this.fdc[input.name]) < 1920) {
                  this.fdc[input.name] = 0;
               }
               break;
            case 'numero_cd4_ingreso_control_prenatal':
               if (parseInt(this.fdc[input.name]) < 0 || parseInt(this.fdc[input.name]) > 9999) {
                  this.fdc[input.name] = 0;
               }
               break;

            case 'numero_carga_viral_control_prenatal':

            case 'carga_viral_numero_copia_semana_34':
               if (parseInt(this.fdc[input.name]) < 0 || parseInt(this.fdc[input.name]) > 9999999) {
                  this.fdc[input.name] = 0;
               }
               break;

            case 'resultado_vdrl_parto':
               if (this.fdc[input.name] == 'No Reactivo' || this.fdc[input.name] == 'No Realizado'){
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_vdrl_parto' ||
                        this.inputs[i].name == 'resultado_examen_treponemico_parto' ||
                        this.inputs[i].name == 'tratamiento_sifilis_parto' ) {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'resultado_dilucion_vdrl_parto' ||
                        this.inputs[i].name == 'resultado_examen_treponemico_parto' ||
                        this.inputs[i].name == 'tratamiento_sifilis_parto' ) {
                        this.inputs[i].disabled = null;
                     }
                  }
               }
               break;
            case 'peso_mujer_parto':
               if (parseInt(this.fdc[input.name])>0) {
                  //this.fdc[input.name] = this.fdc[input.name].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                  if (parseInt(this.fdc[input.name]) > 999) {
                     this.fdc[input.name] = 0;
                  }
                  /*
                  this.fdc[input.name] =
                     parseInt(this.fdc[input.name]) > 999 ?
                     (  parseInt(this.fdc[input.name])/1000).toFixed(1) + 'g' :
                        parseInt(this.fdc[input.name]).toFixed(1) + 'mg';
                  */


               }
               break;
            case 'peso_recien_nacido':
               if (parseInt(this.fdc[input.name])>0) {
                  if (parseInt(this.fdc[input.name]) > 9999) {
                     this.fdc[input.name] = 0;
                  }else{
                     this.fdc[input.name] = this.fdc[input.name].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                  }

               }else{
                  this.fdc[input.name] = 0;
               }
               break;
            case 'resultado_treponemico':
               if (this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_examen_treponemico' ||
                        this.inputs[i].name == 'diagnostico_sifilis_embarazo') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_examen_treponemico' ||
                        this.inputs[i].name == 'diagnostico_sifilis_embarazo') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }
               break;

            case 'sustituto_leche_materna':

               if (this.fdc[input.name] == 'No') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_inicio_sustituto_leche_materna' ||
                        this.inputs[i].name == 'hora_inicio_sustituto_leche_materna') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else{
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_inicio_sustituto_leche_materna' ||
                        this.inputs[i].name == 'hora_inicio_sustituto_leche_materna') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;

            case 'tratamiento_recien_nacido_frecuencia':
               if (parseInt(this.fdc[input.name]) > 99 || parseInt(this.fdc[input.name]) < 0) {
                  this.fdc[input.name] = 0;
               }
               break;


            case 'estado_recien_nacido':
               if (this.fdc[input.name] == 'Muerto') {
                  for (let i in this.inputs) {
                     if (this.inputs[i].bloque == input.bloque && this.inputs[i].name != input.name) {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else {
                  for (let i in this.inputs) {
                     if (
                        this.inputs[i].bloque == input.bloque && this.inputs[i].name != input.name
                     ) {
                        /*
                         (
                         this.inputs[i].name != 'fecha_inicio_sustituto_leche_materna' &&
                         this.inputs[i].name != 'hora_inicio_sustituto_leche_materna' &&
                         this.inputs[i].name != 'fecha_1_examen_pcr_recien_nacido' &&
                         this.inputs[i].name != 'fecha_2_examen_pcr_recien_nacido' &&
                         this.inputs[i].name != 'fecha_3_examen_pcr_recien_nacido' &&
                         (
                         this.fdc['resultado_1_examen_pcr_recien_nacido'] == 'No Realizado' ||
                         this.fdc['resultado_2_examen_pcr_recien_nacido'] == 'No Realizado' ||
                         this.fdc['resultado_3_examen_pcr_recien_nacido'] == 'No Realizado'
                         )

                         )
                        */
                        this.inputs[i].disabled = null;

                     }
                  }
               }
               break;

            case 'resultado_1_examen_pcr_recien_nacido':
               if (this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_1_examen_pcr_recien_nacido') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_1_examen_pcr_recien_nacido') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;


            case 'resultado_2_examen_pcr_recien_nacido':
               if (this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_2_examen_pcr_recien_nacido') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_2_examen_pcr_recien_nacido') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;


            case 'resultado_3_examen_pcr_recien_nacido':
               if (this.fdc[input.name] == 'No Realizado') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_3_examen_pcr_recien_nacido') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'fecha_3_examen_pcr_recien_nacido') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;
            case 'resultado_examen_vih_parto':
               if (this.fdc[input.name] == 'No Realizado' || this.fdc[input.name] == 'No Reactivo') {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'tratamiento_retroviral_parto') {
                        this.inputs[i].disabled = true;
                     }
                  }
               }
               else {
                  for (let i in this.inputs){
                     if (this.inputs[i].name == 'tratamiento_retroviral_parto') {
                        this.inputs[i].disabled = null;
                     }
                  }
               }

               break;

            default:




               break;
         }
         //Validaciones latentes
         if (
            (this.fdc['resultado_1_vdrl_embarazo'] == 'No Reactivo' || this.fdc['resultado_1_vdrl_embarazo'] == 'No Realizado') &&
            (this.fdc['resultado_2_vdrl_embarazo'] == 'No Reactivo' || this.fdc['resultado_2_vdrl_embarazo'] == 'No Realizado') &&
            (this.fdc['resultado_3_vdrl_embarazo'] == 'No Reactivo' || this.fdc['resultado_3_vdrl_embarazo'] == 'No Realizado')
         ) {
            for (let i in this.inputs){
               if (this.inputs[i].name == 'fecha_administracion_1_dosis_penicilina_gestante') {
                  this.inputs[i].disabled = true;
               }
            }
         }
         else{
            for (let i in this.inputs){
               if (this.inputs[i].name == 'fecha_administracion_1_dosis_penicilina_gestante') {
                  this.inputs[i].disabled = null;
               }
            }
         }

         if (
            (this.fdc['resultado_1_vdrl_embarazo'] == 'No Reactivo' || this.fdc['resultado_1_vdrl_embarazo'] == 'No Realizado') &&
            (this.fdc['resultado_2_vdrl_embarazo'] == 'No Reactivo' || this.fdc['resultado_2_vdrl_embarazo'] == 'No Realizado') &&
            (this.fdc['resultado_3_vdrl_embarazo'] == 'No Reactivo' || this.fdc['resultado_3_vdrl_embarazo'] == 'No Realizado') &&
            (this.fdc['resultado_1_examen_vih_embarazo'] == 'No Reactivo' || this.fdc['resultado_1_examen_vih_embarazo'] == 'No Realizado') &&
            (this.fdc['resultado_2_examen_vih_embarazo'] == 'No Reactivo' || this.fdc['resultado_2_examen_vih_embarazo'] == 'No Realizado')
         ){
            for (let i in this.inputs){
               if (this.inputs[i].name == 'derivada_a_especialidades_embarazo') {
                  this.inputs[i].disabled = true;
               }
            }
         }
         else{
            for (let i in this.inputs){
               if (this.inputs[i].name == 'derivada_a_especialidades_embarazo') {
                  this.inputs[i].disabled = null;
               }
            }
         }


      },

      verifica_validacion_click: function (input) {
         switch (input.id) {
            case 'pais_origen':
               break;

            //case 'anos_estudio':
            case 'escolaridad':
               $('.anos_estudio1').find('option').remove().end();
               $('.anos_estudio2').find('option').remove().end();
               switch (this.fdc[input.id]) {
                  case 'Ed. Basica':
                     for (var i = 1;i<=8;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                     }
                     for (var i = 1;i<=8;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio2').append($(o).html(i));
                     }
                     break;
                  case 'Ed. Media':
                     for (var i = 1;i<=4;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                     }
                     for (var i = 1;i<=4;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio2').append($(o).html(i));
                     }
                     break;
                  case 'Tecnico':
                     for (var i = 1;i<=3;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                     }
                     for (var i = 1;i<=3;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio2').append($(o).html(i));
                     }
                     break;
                  case 'Superior':
                     for (var i = 1;i<=7;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                     }
                     for (var i = 1;i<=7;i++) {
                        var o = new Option(i,i);
                        $('.anos_estudio2').append($(o).html(i));
                     }
                     break;
                  default:
                     var i = -1;
                     do {
                        i++;
                        var o = new Option(i,i);
                        $('.anos_estudio1').append($(o).html(i));
                        $('.anos_estudio2').append($(o).html(i));
                     }while(false);
                     break;
               }
               $('.anos_estudio1').val(this.fdc['anos_estudio']);
               $('.anos_estudio2').val(this.fdc['anos_estudio']);
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
            swal({
               title: "Advertencia",
               text: "Ya se está creando un nuevo formulario.",
               type: "warning",
               confirmButtonClass: "btn-danger",
               closeOnConfirm: false
            });
         }
      },

      fetchFormulario: function () {
         this.$http.get('/formulario/create').then(response => { // success callback
            this.instructions = response.body.instructions;
            this.auth = response.body.auth;
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
                  if (this.inputs[i].name == 'run_madre' || this.inputs[i].name == 'run_recien_nacido') {
                     this.fdc[this.inputs[i].name] = clean(this.fdc[this.inputs[i].name]);
                  }
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
            this.auth = response.body.auth;
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
            this.auth = response.body.auth;
            this.validar_validaciones_previas();


            /*
            //NO es necesario al crear un nuevo formulario, ya que solo se debe manejar el control sobre el edit
            if (this.fdc != null) {
               var formData = new FormData();
               Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
               formData.append('n_correlativo_interno', this.fdc.n_correlativo_interno);

               this.$http.post('/formulario/marcar_registro_form_deis', formData).then(response => { // success callback
                  this.fdc = response.body.fdc;
                  //console.log(response);
               }, response => { // error callback
                  console.log(response);
               });
            }
            */


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
