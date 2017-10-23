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
         'labels':[],

         'inputTypes':{
            'basics':['text', 'number', 'email', 'password', 'date', 'time'],
            'select':['select'],
            'textarea':['textarea'],
         },

         'paso1_filtro':true,
         'paso2_confirmar':false,
         'paso3_crear':false,
         'paso4_finalizar':false,
         'spinner_iniciar':true,
         'spinner_finalizar':false,

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


      fetchFormulario: function () {
         this.$http.get('/formulario').then(response => { // success callback
            console.log(response);

            this.inputs = response.body.inputs;
            this.labels = response.body.labels;
            this.instructions = response.body.instructions;

         }, response => { // error callback
            console.log('Error fetch_formulario: '+response);
         });

          var self = this;
          setTimeout(function(){
            self.spinner_iniciar = false;
          }, 1500);

         console.log('FormularioController');


         return;
      },


      guardarFormulario: function () {
         this.spinner_finalizar = true;
         var formData = new FormData();
         formData.append('campo', {object:'Object'});

         formData.append('_token', $('#_token').val());

         Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();

         /*
         this.$http.post('/formulario', formData).then(response => { // success callback
            //console.log(response);
         }, response => { // error callback
            console.log('Error : '+response);
         });
         */

         return;
      },

      inputInArray: function (input, array) {
         return ($.inArray(input.directivas.type, array) == -1) ? false : true;
      },

      //with_dash() => for explained specific functions
   },
});


