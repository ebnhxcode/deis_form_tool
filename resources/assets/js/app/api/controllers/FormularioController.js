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
         'contraloria':{
            'id_ministerio':null,
            'id_auditar':null,
            'id_servicio_salud':null,
            'id_establecimiento':null,
            'id_seremi':null,
            'id_subsecretaria':null,
            'id_organismo':null,
            'id_auditor_lider':null,
            'id_proceso_contraloria':null,
            'id_clasificacion_materia':null,
            'ministerio':null,
            'servicio_salud':null,
            'establecimiento':null,
            'seremi':null,
            'organismo':null,
            'sub_secretaria':null,
            'area_auditada':null,
            'objetivo_contraloria':null,
            'actividad_contraloria':null,
            'tipo_contraloria':null,
            'codigo_caigg':null,
            'proceso_contraloria':null,
            'tipo_informe':null,
            'ano':null,
            'fecha':null,
            'numero_informe_unidad':null,
            'numero_informe':null,
            'nombre_contraloria':null,
            'cantidad_hallazgo_contraloria':null,
            'auditores':null,
            'existe':false,
         },
         'contraloria_new':[],
         'ministerio':[],
         'seremis':[],
         'servicio_salud':[],
         'establecimiento':[],
         'establecimientoTmp':[],
         'sub_secretaria':[],
         'organismo':[],
         'nuevo_auditor':{
            '':null,
            '':null,
            'jefatura_equipo':false,
         },
         //begin get inicio contraloria
         'auditor':[],
         'proceso_contraloria':[],
         'equipo_auditor':[],
         'objetivo_contraloria':[],
         'actividad_contraloria':[],
         'tipo_contraloria':[],
         'clasificacion_materia':[],
         'ano':[],
         'numero_informe_unidad':[],
         'tipo_informe':[],
         'criticidad':[],
         //end inicio contraloria
         'establ':false, //establecimiento
         'sersal':false, //servicio salud
         'seremi':false, //seremi
         'organi':false, //organismo
         'subsec':false, //subsecretaria
         'filtroEstablecimiento':false,
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
         /*
         this.$http.get('/contraloria/filtro_ajax_data').then(response => { // success callback
            this.ministerio = response.body.ministerio;
            this.seremis = response.body.seremi;
            this.servicio_salud = response.body.servicio_salud;
            this.establecimiento = response.body.establecimiento;
            this.sub_secretaria = response.body.sub_secretaria;
            this.organismo = response.body.organismo;
            this.auth = response.body.auth;
         }, response => { // error callback
            console.log('Error fetch_contraloria: '+response);
         });

          var self = this;
          setTimeout(function(){
            self.spinner_iniciar = false;
          }, 1500);
         */

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

      //with_dash() => for explained specific functions
   },
});


