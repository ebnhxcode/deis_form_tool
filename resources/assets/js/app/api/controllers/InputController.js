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
         'textarea':'',
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
      'modal_procesar_json':{
         props: ['json'],
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
                                          <a href="#lista_personas" aria-controls="lista_personas" role="tab" data-toggle="tab">
                                             Lista de Personas
                                          </a>
                                       </li>
                                    </ul>
                                 </div><!-- .panel-heading -->

                                 <div class="panel-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                       <div role="tabpanel" class="'tab-pane fade in active" id="lista_personas">

                                          <pre>
                                             {{ json }}
                                          </pre>

                                          <hr>
                                          <div class="table-responsive">
                                             <table class="table table-striped">
                                                <thead>
                                                   <tr>
                                                      <th>Head 1</th>
                                                      <th>Head 2</th>
                                                      <th>Head 3</th>
                                                      <th>Head 4</th>
                                                      <th>Head 5</th>
                                                      <th>Head 6</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>Item 1</td>
                                                      <td>Item 2</td>
                                                      <td>Item 3</td>
                                                      <td>Item 4</td>
                                                      <td>Item 5</td>
                                                      <td>Item 6</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>

                                       </div>

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

      //with_dash() => for explained specific functions
   },
});
