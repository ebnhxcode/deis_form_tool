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
         'nav_tab_form_deis':[],
         'deis_form_table_options':[],

         'inputTypes':{
            'basics':['text', 'number', 'email', 'password', 'date', 'time'],
            'select':['select'],
            'textarea':['textarea'],
         },
         'tags': [
            'h1','h2','h3','h4','h5','h6'
         ],

         'spinner_iniciar':true,
         'spinner_finalizar':false,

         'deis_form_inputs':{
            'nombres_madre':'',
            'primer_apellido_madre':'',
            'segundo_apellido_madre':'',
            'fecha_nacimiento_madre':'',
            'n_correlativo_interno':'',
            'region':'',
            'servicio_salud':'',
            'run_madre':'',
            'digito_verificador':'',
            'edad':'',
            'nacionalidad':'',
            'pais_origen':'',
            'pueblos_indigenas':'',
            'estado_civil':'',
            'tipo_de_convivencia':'',
            'escolaridad':'',
            'anos_estudio':'',
            'residencia_gestante':'',
            'nacidos_vivos_previos_embarazo':'',
            'nacidos_muertos_previos_embarazo':'',
            'abortos_previos_embarazo':'',
            'sifilis_previa_embarazo':'',
            'ano_sifilis_previa_embarazo':'',
            'otra_its_previa_embarazo':'',
            'vih_conocido_previa_embarazo':'',
            'fecha_confirmacion_isp_vih_responde_si':'',
            'adicciones':'',
            'fecha_ingreso_control_prenatal_embarazo':'',
            'embarazo_con_control_parental':'',
            'edad_gestacional_ingreso_control_embarazo':'',
            'lugar_control_prenatal':'',
            'codigo_establecimiento_control_prenatal_embarazo':'',
            'fecha_1_vdrl_embarazo':'',
            'resultado_1_vdrl_embarazo':'',
            'resultado_dilucion_1_vdrl_embarazo':'',
            'eg_1_dvrl_embarazo':'',
            'fecha_2_vdrl_embarazo':'',
            'resultado_2_vdrl_embarazo':'',
            'resultado_dilucion_2_vdrl_embarazo':'',
            'eg_2_dvrl_embarazo':'',
            'fecha_3_vdrl_embarazo':'',
            'resultado_3_vdrl_embarazo':'',
            'resultado_dilucion_3_vdrl_embarazo':'',
            'eg_3_dvrl_embarazo':'',
            'fecha_examen_treponemico':'',
            'resultado_treponemico':'',
            'diagnostico_sifilis_embarazo':'',
            'tratamiento_sifilis_farmaco':'',
            'tratamiento_sifilis_dosis':'',
            'tratamiento_sifilis_frecuencia':'',
            'acepta_rechaza_toma_examen_vih':'',
            'fecha_1_examen_vih_embarazo':'',
            'resultado_1_examen_vih_embarazo':'',
            'eg_1_examen_vih':'',
            'fecha_2_examen_vih_embarazo':'',
            'resultado_2_examen_vih_embarazo':'',
            'eg_2_examen_vih':'',
            'fecha_resultado_final_isp_examen_vih':'',
            'resultado_final_isp_examen_vih':'',
            'derivada_a_especialidades_embarazo':'',
            'fecha_ingreso_unacess':'',
            'fecha_ingreso_control_unidad_alto_riesgo':'',
            'fecha_ingreso_control_centro_atencion_vih':'',
            'fecha_ingreso_control_otras_especialidades':'',
            'terapia_antiretroviral_farmaco_1':'',
            'fecha_inicio_tar_farmaco_1':'',
            'terapia_antiretroviral_tar_farmaco_2':'',
            'fecha_inicio_tar_farmaco_2':'',
            'terapia_antiretroviral_tar_farmaco_3':'',
            'fecha_inicio_tar_farmaco_3':'',
            'numero_cd4_ingreso_control_prenatal':'',
            'fecha_examen_linfocitos_cd4_ingreso_control_prenatal':'',
            'carga_viral_numero_copia_ingreso_control_prenatal':'',
            'fecha_examen_carga_viral_control_prenatal':'',
            'numero_contactos_sexuales_declarados':'',
            'numero_contactos_sexuales_estudiados':'',
            'carga_viral_numero_copia_semana_34':'',
            'fecha_examen_carga_viral_semana_34':'',
            'numero_contactos_sexuales_tratados':'',
            'lugar_atencion_parto':'',
            'codigo_establecimiento':'',
            'nombre_establecimiento_sin_codigo':'',
            'fecha_parto':'',
            'hora_parto':'',
            'tipo_parto':'',
            'via_parto':'',
            'resultado_vdrl_parto':'',
            'resultado_dilucion_vdrl_parto':'',
            'resultado_examen_treponemico_parto':'',
            'tratamiento_sifilis_parto':'',
            'resultado_examen_vih_parto':'',
            'tratamiento_retroviral_parto':'',
            'peso_mujer_parto':'',
            'nombre_farmaco_1_vih':'',
            'dosis_farmaco_1_vih':'',
            'fecha_inicio_farmaco_1_vih':'',
            'hora_inicio_farmaco_1_vih':'',
            'nombre_farmaco_2_vih':'',
            'dosis_farmaco_2_vih':'',
            'fecha_inicio_farmaco_2_vih':'',
            'hora_inicio_farmaco_2_vih':'',
            'nombre_farmaco_suspencion_lactancia':'',
            'fecha_administracion_farmaco_suspencion_lactancia':'',
            'estado_recien_nacido':'',
            'eg_pediatrica':'',
            'sexo_recien_nacido':'',
            'peso_recien_nacido':'',
            'estado_clinico_recien_nacido':'',
            'run_recien_nacido':'',
            'digito_verificador_recien_nacido':'',
            'codigo_recien_nacido':'',
            'fecha_examen_vdrl_periferico_recien_nacido':'',
            'resultado_vdrl_periferico_recien_nacido':'',
            'titulacion_vdrl_periferico_recien_nacido':'',
            'fecha_examen_vdrl_liq_cefalo_recien_nacido':'',
            'resultado_vdrl_liq_cefalo_recien_nacido':'',
            'titulacion_vdrl_liq_cefalo_recien_nacido':'',
            'resultado_radiografia_huesos_largos':'',
            'resultado_citoquimico_liq_cefalo_raquideo':'',
            'resultado_estudio_placentario':'',
            'tratamiento_recien_nacido_farmaco':'',
            'tratamiento_recien_nacido_dosis':'',
            'tratamiento_recien_nacido_frecuencia':'',
            'sustituto_leche_materna':'',
            'fecha_inicio_sustituto_leche_materna':'',
            'hora_inicio_sustituto_leche_materna':'',
            'entrega_sustituto_leche_materna_al_alta':'',
            'nombre_farmaco_1_vih_recien_nacido':'',
            'dosis_farmaco_1_vih_recien_nacido':'',
            'fecha_inicio_farmaco_1_vih_recien_nacido':'',
            'hora_inicio_farmaco_1_vih_recien_nacido':'',
            'nombre_farmaco_2_vih_recien_nacido':'',
            'dosis_farmaco_2_vih_recien_nacido':'',
            'fecha_inicio_farmaco_2_vih_recien_nacido':'',
            'hora_inicio_farmaco_2_vih_recien_nacido':'',
            'fecha_1_examen_pcr_recien_nacido':'',
            'resultado_1_examen_pcr_recien_nacido':'',
            'fecha_2_examen_pcr_recien_nacido':'',
            'resultado_2_examen_pcr_recien_nacido':'',
            'fecha_3_examen_pcr_recien_nacido':'',
            'resultado_3_examen_pcr_recien_nacido':'',
            'diagnostico_final_vih_isp_recien_nacido':'',
            'fecha_test_elisa_18_meses':'',
            'resultado_test_elisa_18_meses':'',
            'fecha_examen_treponemico_recien_nacido':'',
            'derivacion_recien_nacido_a_seguimiento':'',
            'lugar_derivacion_recien_nacido_a_seguimiento':'',
            'fecha_ingreso_control_recien_nacido_post_nacimiento':'',
            'diagnostico_final_sifilis_recien_nacido':'',
            'estado_seguimiento_mes':'',
            'estado_seguimiento_3_meses':'',
            'estado_seguimiento_6_meses':'',
            'estado_seguimiento_12_meses':'',
            'estado_seguimiento_18_meses':'',
            'variable_151_estandar':'',
            'mujer_continua_tratamiento_antiretroviral':'',
            'fecha_ultima_regla':'',
            'pareja_vih_positivo':'',
            'fecha_administracion_1_dosis_penicilina_gestante':'',
            'fecha_administracion_ult_dosis_penicilina_gestante':''
         },


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
            //console.log(response);

            this.inputs = response.body.inputs;
            this.labels = response.body.labels;
            this.instructions = response.body.instructions;
            this.nav_tab_form_deis = response.body.nav_tab_form_deis;
            this.deis_form_table_options = response.body.deis_form_table_options;

         }, response => { // error callback
            console.log('Error fetch_formulario: '+response);
         });

          var self = this;
          setTimeout(function(){
            self.spinner_iniciar = false;
          }, 1500);

         //console.log('FormularioController');


         return;
      },


      guardarFormulario: function (tabName) {
         //this.spinner_finalizar = true;
         var formData = new FormData();
         //console.log(tabName);
         for (let i in this.inputs) {
            if (this.inputs[i].seccion.nombre == tabName) {
               formData.append(this.inputs[i].directivas.name, this.inputs[i].directivas.value);
            }
         }
         Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').val();
         formData.append('_token', $('#_token').val());

         this.$http.post('/formulario', formData).then(response => { // success callback
            console.log(response);
         }, response => { // error callback
            console.log('Error : '+response);
         });



         return;
      },

      inputInArray: function (input, array) {

         return ($.inArray(input.directivas.type, array) == -1) ? false : true;
      },

      inputsQuantity: function (inputType){
         console.log(inputType);


      },

      //with_dash() => for explained specific functions
   },
});


