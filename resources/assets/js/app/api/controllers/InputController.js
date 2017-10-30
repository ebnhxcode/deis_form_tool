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
         'json':'',
         'json_error':'',
         'json_attr':'',
         'json_attr_error':'',
         'table_name':'',
         'table_name_error':'',
         'table_name_attr':'',
         'table_name_attr_error':'',
         'tables':[],
         'err':[],
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
                                       </tr>
                                    </thead>
                                    <tbody>


                                       <tr v-for="input in json">
                                          <td>
                                             <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil"></i>
                                             </button>
                                          </td>
                                          <td>{{input.id_input}}</td>
                                          <td>{{input.type}}</td>
                                          <td>{{input.id}}</td>
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
      this.fetchInput();
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
      checkInputs: function () {



      },
      fetchInput: function () {
         this.$http.get('/input/create').then(response => { // success callback
            //console.log(response);
            this.tables = response.body.tables;

         }, response => { // error callback
            console.log('Error fetch_input: '+response);
         });

         var self = this;
         setTimeout(function(){
            self.spinner_iniciar = false;
         }, 1500);
         //console.log('FormularioController');

         return;
      },

      procesar_json: function () {
         var j = this.json;
         var tn = this.table_name;
         var permiteGuardar = (j&&j!=null&&j!=''&&tn&&tn!=null&&tn!='')?true:false;

         if (permiteGuardar == true) {
            //this.modal_procesar_json = true;
            //this.mini_loader = true;
            var formData = new FormData();
            formData.append('json', j);
            formData.append('table_name', tn);//formData.append('_token', $('#_token').val());
            Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();

            this.$http.post('/input', formData).then(response => { // success callback
               //this.json = response.body.created_inputs;
               $('.errors').text('');
               console.log(response);
               //console.log(this.json);
               //alert('Guardado');
            }, response => { // error callback
               //console.log(response);
               $('.errors').text('');
               this.err = response.body;
               for (let i in this.err) {
                  var error = this.err[i][0];
                  $(`#${i}_error`).text(error);
               }
            });
         }

         /*
         var self = this;
         setTimeout(()=>{
            $('.circle-loader').toggleClass('load-complete');
            $('.checkmark').toggle();
            setTimeout(()=>{
               self.mini_loader = false;
            },3000);
         },3000);
         */

      },
      procesar_json_attr: function () {
         this.mini_loader = true;
         this.modal_procesar_json_attr = true;

         var formData = new FormData();
         var permiteGuardar = false;
         formData.append('json_attr', this.json_attr);
         formData.append('table_name_attr', this.table_name_attr);
         Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
         //formData.append('_token', $('#_token').val());
         this.$http.post('/input/add/label', formData).then(response => { // success callback
            this.json_attr = response.body;



            //console.log(response);
            console.log(this.json_attr);
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
