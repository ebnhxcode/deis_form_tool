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


const InputController = new Vue({
   el: '#InputController ',
   data(){
      return {
         'mini_loader':false,
         'modal_procesar_json':false,
         'modal_procesar_json_attr':false,
         'textarea':'',
         'textarea_attr':'',
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
      'loader': {
         props: [''],
         'name': 'loader',
         'template':`<div class="loader">Loading...</div>`,
         data () {
            return {
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
                   :max-length="max_length!=''?max_length:25"
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
      'modal_procesar_json':{
         props: ['json'],
         template: `
			   <!-- template for the modal component -->
			   <transition name="modal">
				   <div class="modal-mask">
					   <div class="modal-wrapper">
					      <div class="modal-container" style="max-height: 850px !important;">

						      <div class="modal-header">
							      <slot name="header"></slot>
						      </div>

						      <div class="modal-body">
							      <slot name="body">


                              <div class="table-responsive">
                                 <table class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th>Acción</th>
                                          <th>Id</th>
                                          <th>type</th>
                                          <th>id</th>
                                          <th>name</th>
                                          <th>value</th>
                                          <th>max_length</th>
                                          <th>placeholder</th>
                                          <th>required</th>
                                          <th>class</th>
                                          <th>style</th>
                                          <th>bloque</th>
                                          <th>seccion</th>
                                          <th>class_custom</th>
                                          <!--
                                          <th>label</th>
                                          <th>tag</th>
                                          <th>subtag</th>
                                          <th>empty_column</th>
                                          <th>order</th>
                                          <th>created_at</th>
                                          <th>updated_at</th>
                                          -->
                                       </tr>
                                    </thead>
                                    <tbody>


                                       <tr v-for="input in json">
                                          <td>
                                             <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil"></i>
                                             </button>
                                          </td>
                                          <td>{{input.id_input || 'Sin dato'}}</td>
                                          <td>{{input.type || 'Sin dato'}}</td>
                                          <td>{{input.id || 'Sin dato'}}</td>
                                          <td>{{input.name || 'Sin dato'}}</td>
                                          <td>{{input.value || 'Sin dato'}}</td>
                                          <td>{{input.max_length || 'Sin dato'}}</td>
                                          <td>{{input.placeholder || 'Sin dato'}}</td>
                                          <td>{{input.required || 'Sin dato'}}</td>
                                          <td>{{input.class || 'Sin dato'}}</td>
                                          <td>{{input.style || 'Sin dato'}}</td>
                                          <td>{{input.bloque || 'Sin dato'}}</td>
                                          <td>{{input.seccion || 'Sin dato'}}</td>
                                          <td>{{input.class_custom || 'Sin dato'}}</td>
                                          <!--
                                          <td>{{input.label || 'Sin dato'}}</td>
                                          <td>{{input.tag || 'Sin dato'}}</td>
                                          <td>{{input.subtag || 'Sin dato'}}</td>
                                          <td>{{input.empty_column || 'Sin dato'}}</td>
                                          <td>{{input.order || 'Sin dato'}}</td>
                                          <td>{{input.created_at || 'Sin dato'}}</td>
                                          <td>{{input.updated_at || 'Sin dato'}}</td>
                                          -->
                                       </tr>


                                    </tbody>
                                 </table>
                              </div>





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
         name: 'modal_procesar_json',
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
      /*
      $(document).ready( function () {
         $('#toggle').click(function() {
            $('.circle-loader').toggleClass('load-complete');
            $('.checkmark').toggle();
         });
      });
      */
   },
   ready: {},
   filters: {
   },
   methods: {
      //camelCase() => for specific functions
      procesar_json: function () {
         this.mini_loader = true;
         this.modal_procesar_json = true;

         var formData = new FormData();
         var permiteGuardar = false;
         formData.append('textarea', this.textarea);
         Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
         //formData.append('_token', $('#_token').val());
         this.$http.post('/input', formData).then(response => { // success callback
            this.textarea = response.body;



            //console.log(response);
            console.log(this.textarea);
            //alert('Guardado');
         }, response => { // error callback
            console.log(response);
         });



         var self = this;
         setTimeout(()=>{
            $('.circle-loader').toggleClass('load-complete');
            $('.checkmark').toggle();
            setTimeout(()=>{
               self.mini_loader = false;
            },3000);
         },3000);

      },
      procesar_json_attr: function () {
         this.mini_loader = true;
         this.modal_procesar_json = true;

         var formData = new FormData();
         var permiteGuardar = false;
         formData.append('textarea_attr', this.textarea_attr);
         Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
         //formData.append('_token', $('#_token').val());
         this.$http.post('/input/add/label', formData).then(response => { // success callback
            this.textarea_attr = response.body;



            //console.log(response);
            console.log(this.textarea_attr);
            //alert('Guardado');
         }, response => { // error callback
            console.log(response);
         });



         var self = this;
         setTimeout(()=>{
            $('.circle-loader').toggleClass('load-complete');
            $('.checkmark').toggle();
            setTimeout(()=>{
               self.mini_loader = false;
            },3000);
         },3000);
      },

      //with_dash() => for explained specific functions
   },
});
