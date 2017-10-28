<?php

return [
   #Edades Gestacionales
   'edades_gestacionales' => [
      /*
      1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,
      11=>11,12=>12,13=>13,14=>14,15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,
      */
      21=>21,22=>22,23=>23,24=>24,25=>25,26=>26,27=>27,28=>28,29=>29,30=>30,
      31=>31,32=>32,33=>33,34=>34,35=>35,36=>36,37=>37,38=>38,39=>39,40=>40,
      41=>41,42=>42
   ],
   #Instrucciones
   'deis_form_instructions' => [
      0=>'Debe completar todos los campos que han sido definidos como obligatorios, se pueden reconocer con el simbolo (*).',
      1=>'Puede guardar el estado del formulario para no perder los cambios realizados (borrador).',
      2=>'Solo completar con los datos solicitados',
      3=>'Cuando digite fechas, siempre debe comenzar por el día',
   ],


   #Definicion de campos
   'deis_form_table' => [
      'nombres_madre',
      'primer_apellido_madre',
      'segundo_apellido_madre',
      'fecha_nacimiento_madre',
      'n_correlativo_interno',
      'region',
      'servicio_salud',
      'run_madre',
      'digito_verificador',
      'edad',
      'nacionalidad',
      'pais_origen',
      'pueblos_indigenas',
      'estado_civil',
      'tipo_de_convivencia',
      'escolaridad',
      'anos_estudio',
      'residencia_gestante',
      'nacidos_vivos_previos_embarazo',
      'nacidos_muertos_previos_embarazo',
      'abortos_previos_embarazo',
      'sifilis_previa_embarazo',
      'ano_sifilis_previa_embarazo',
      'otra_its_previa_embarazo',
      'vih_conocido_previa_embarazo',
      'fecha_confirmacion_isp_vih_responde_si',
      'adicciones',
      'fecha_ingreso_control_prenatal_embarazo',
      'embarazo_con_control_parental',
      'edad_gestacional_ingreso_control_embarazo',
      'lugar_control_prenatal',
      'lugar_control_prenatal_otro',
      'codigo_establecimiento_control_prenatal_embarazo',
      'fecha_1_vdrl_embarazo',
      'resultado_1_vdrl_embarazo',
      'resultado_dilucion_1_vdrl_embarazo',
      'eg_1_dvrl_embarazo',
      'fecha_2_vdrl_embarazo',
      'resultado_2_vdrl_embarazo',
      'resultado_dilucion_2_vdrl_embarazo',
      'eg_2_dvrl_embarazo',
      'fecha_3_vdrl_embarazo',
      'resultado_3_vdrl_embarazo',
      'resultado_dilucion_3_vdrl_embarazo',
      'eg_3_dvrl_embarazo',
      'fecha_examen_treponemico',
      'resultado_treponemico',
      'diagnostico_sifilis_embarazo',
      'tratamiento_sifilis_farmaco',
      'tratamiento_sifilis_dosis',
      'tratamiento_sifilis_frecuencia',
      'acepta_rechaza_toma_examen_vih',
      'fecha_1_examen_vih_embarazo',
      'resultado_1_examen_vih_embarazo',
      'eg_1_examen_vih',
      'fecha_2_examen_vih_embarazo',
      'resultado_2_examen_vih_embarazo',
      'eg_2_examen_vih',
      'fecha_resultado_final_isp_examen_vih',
      'fecha_resultado_final_isp_examen_vih_recien_nacido',
      'resultado_final_isp_examen_vih',
      'resultado_final_isp_examen_vih_recien_nacido',
      'derivada_a_especialidades_embarazo',
      'fecha_ingreso_unacess',
      'fecha_ingreso_control_unidad_alto_riesgo',
      'fecha_ingreso_control_centro_atencion_vih',
      'fecha_ingreso_control_otras_especialidades',
      'fecha_ingreso_control_otras_especialidades_otro',
      'terapia_antiretroviral_farmaco_1',
      'fecha_inicio_tar_farmaco_1',
      'terapia_antiretroviral_tar_farmaco_2',
      'fecha_inicio_tar_farmaco_2',
      'terapia_antiretroviral_tar_farmaco_3',
      'terapia_antiretroviral_tar_farmaco_3_otro',
      'fecha_inicio_tar_farmaco_3',
      'numero_cd4_ingreso_control_prenatal',
      'fecha_examen_linfocitos_cd4_ingreso_control_prenatal',
      'carga_viral_numero_copia_ingreso_control_prenatal',
      'fecha_examen_carga_viral_control_prenatal',
      'numero_carga_viral_control_prenatal',
      'numero_contactos_sexuales_declarados',
      'numero_contactos_sexuales_estudiados',
      'carga_viral_numero_copia_semana_34',
      'fecha_examen_carga_viral_semana_34',
      'numero_contactos_sexuales_tratados',
      'lugar_atencion_parto',
      'codigo_establecimiento',
      'tipo_establecimiento',
      'nombre_establecimiento_sin_codigo',
      'fecha_parto',
      'hora_parto',
      'tipo_parto',
      'via_parto',
      'resultado_vdrl_parto',
      'resultado_dilucion_vdrl_parto',
      'resultado_examen_treponemico_parto',
      'tratamiento_sifilis_parto',
      'resultado_examen_vih_parto',
      'tratamiento_retroviral_parto',
      'peso_mujer_parto',
      'nombre_farmaco_1_vih',
      'dosis_farmaco_1_vih',
      'dosis_2_farmaco_1_vih',
      'fecha_inicio_farmaco_1_vih',
      'fecha_2_inicio_farmaco_1_vih',
      'hora_inicio_farmaco_1_vih',
      'hora_2_inicio_farmaco_1_vih',
      'nombre_farmaco_2_vih',
      'dosis_farmaco_2_vih',
      'fecha_inicio_farmaco_2_vih',
      'hora_inicio_farmaco_2_vih',
      'nombre_farmaco_suspencion_lactancia',
      'fecha_administracion_farmaco_suspencion_lactancia',
      'estado_recien_nacido',
      'eg_pediatrica',
      'sexo_recien_nacido',
      'peso_recien_nacido',
      'estado_clinico_recien_nacido',
      'run_recien_nacido',
      'fecha_nacimiento_recien_nacido',
      'hora_nacimiento_recien_nacido',
      'digito_verificador_recien_nacido',
      'codigo_recien_nacido',
      'fecha_examen_vdrl_periferico_recien_nacido',
      'resultado_vdrl_periferico_recien_nacido',
      'titulacion_vdrl_periferico_recien_nacido',
      'fecha_examen_vdrl_liq_cefalo_recien_nacido',
      'resultado_vdrl_liq_cefalo_recien_nacido',
      'titulacion_vdrl_liq_cefalo_recien_nacido',
      'resultado_radiografia_huesos_largos',
      'resultado_citoquimico_liq_cefalo_raquideo',
      'resultado_estudio_placentario',
      'tratamiento_recien_nacido_farmaco',
      'tratamiento_recien_nacido_dosis',
      'tratamiento_recien_nacido_frecuencia',
      'sustituto_leche_materna',
      'fecha_inicio_sustituto_leche_materna',
      'hora_inicio_sustituto_leche_materna',
      'entrega_sustituto_leche_materna_al_alta',
      'nombre_farmaco_1_vih_recien_nacido',
      'dosis_farmaco_1_vih_recien_nacido',
      'fecha_inicio_farmaco_1_vih_recien_nacido',
      'hora_inicio_farmaco_1_vih_recien_nacido',
      'nombre_farmaco_2_vih_recien_nacido',
      'dosis_farmaco_2_vih_recien_nacido',
      'fecha_inicio_farmaco_2_vih_recien_nacido',
      'hora_inicio_farmaco_2_vih_recien_nacido',
      'fecha_1_examen_pcr_recien_nacido',
      'resultado_1_examen_pcr_recien_nacido',
      'fecha_2_examen_pcr_recien_nacido',
      'resultado_2_examen_pcr_recien_nacido',
      'fecha_3_examen_pcr_recien_nacido',
      'resultado_3_examen_pcr_recien_nacido',
      'diagnostico_final_vih_isp_recien_nacido',
      'fecha_test_elisa_18_meses',
      'resultado_test_elisa_18_meses',
      'fecha_examen_treponemico_recien_nacido',
      'derivacion_recien_nacido_a_seguimiento',
      'lugar_derivacion_recien_nacido_a_seguimiento',
      'fecha_ingreso_control_recien_nacido_post_nacimiento',
      'diagnostico_final_sifilis_recien_nacido',
      'estado_seguimiento_mes',
      'estado_seguimiento_3_meses',
      'estado_seguimiento_6_meses',
      'estado_seguimiento_12_meses',
      'estado_seguimiento_18_meses',
      'variable_151_estandar',
      'mujer_continua_tratamiento_antiretroviral',
      'fecha_ultima_regla_gestacional',
      'fecha_ultima_regla_operacional',
      'pareja_vih_positivo',
      'fecha_administracion_1_dosis_penicilina_gestante',
      'fecha_administracion_1_dosis_penicilina_gestante_sifilis',
      'fecha_administracion_ult_dosis_penicilina_gestante',

   ],

   #Campos definidos con sus propiedades
   'deis_form_inputs' => [

      #Identificacion de la mujer - identificacion_mujer

      'run_madre' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'run_madre',
            'name' => 'run_madre',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 123456789',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'n_correlativo_interno' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'n_correlativo_interno',
            'name' => 'n_correlativo_interno',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
            'readonly' => 'readonly'
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'nombres_madre' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'nombres_madre',
            'name' => 'nombres_madre',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Nombre1 Nombre2',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-6 col-md-6'
         ]
      ],
      'primer_apellido_madre' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'primer_apellido_madre',
            'name' => 'primer_apellido_madre',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Apellido1',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'segundo_apellido_madre' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'segundo_apellido_madre',
            'name' => 'segundo_apellido_madre',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Apellido2',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_nacimiento_madre' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_nacimiento_madre',
            'name' => 'fecha_nacimiento_madre',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'nacionalidad' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'nacionalidad',
            'name' => 'nacionalidad',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'pais_origen' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'pais_origen',
            'name' => 'pais_origen',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'pueblos_indigenas' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'pueblos_indigenas',
            'name' => 'pueblos_indigenas',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'identificacion_mujer'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      #Control de embarazo - control_embarazo
         #Parte 1 control de embarazo

      'embarazo_con_control_parental' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'embarazo_con_control_parental',
            'name' => 'embarazo_con_control_parental',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_ingreso_control_prenatal_embarazo' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ingreso_control_prenatal_embarazo',
            'name' => 'fecha_ingreso_control_prenatal_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_ultima_regla_gestacional' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ultima_regla_gestacional',
            'name' => 'fecha_ultima_regla_gestacional',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes',
         ],
         'seccion' => [
            'nombre' => 'control_embarazo',
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_ultima_regla_operacional' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ultima_regla_operacional',
            'name' => 'fecha_ultima_regla_operacional',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes',
         ],
         'seccion' => [
            'nombre' => 'control_embarazo',
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],


      'edad_gestacional_ingreso_control_embarazo' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'edad_gestacional_ingreso_control_embarazo',
            'name' => 'edad_gestacional_ingreso_control_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 1',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'codigo_establecimiento_control_prenatal_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'codigo_establecimiento_control_prenatal_embarazo',
            'name' => 'codigo_establecimiento_control_prenatal_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'lugar_control_prenatal' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'lugar_control_prenatal',
            'name' => 'lugar_control_prenatal',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'lugar_control_prenatal_otro' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'lugar_control_prenatal_otro',
            'name' => 'lugar_control_prenatal_otro',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Hospital clinico ejemplo',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
         #Parte 2 control de embarazo
      'resultado_dilucion_1_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_dilucion_1_vdrl_embarazo',
            'name' => 'resultado_dilucion_1_vdrl_embarazo',
            'value' => '',
            'max_lenght' => ''
            , 'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'resultado_1_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_1_vdrl_embarazo',
            'name' => 'resultado_1_vdrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_1_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_1_vdrl_embarazo',
            'name' => 'fecha_1_vdrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'eg_1_dvrl_embarazo' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'eg_1_dvrl_embarazo',
            'name' => 'eg_1_dvrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 1',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'resultado_dilucion_2_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_dilucion_2_vdrl_embarazo',
            'name' => 'resultado_dilucion_2_vdrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'resultado_2_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_2_vdrl_embarazo',
            'name' => 'resultado_2_vdrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_2_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_2_vdrl_embarazo',
            'name' => 'fecha_2_vdrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'eg_2_dvrl_embarazo' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'eg_2_dvrl_embarazo',
            'name' => 'eg_2_dvrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 1',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'resultado_dilucion_3_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_dilucion_3_vdrl_embarazo',
            'name' => 'resultado_dilucion_3_vdrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'resultado_3_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_3_vdrl_embarazo',
            'name' => 'resultado_3_vdrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_3_vdrl_embarazo' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_3_vdrl_embarazo',
            'name' => 'fecha_3_vdrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'eg_3_dvrl_embarazo' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'eg_3_dvrl_embarazo',
            'name' => 'eg_3_dvrl_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 1',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_administracion_1_dosis_penicilina_gestante' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_administracion_1_dosis_penicilina_gestante',
            'name' => 'fecha_administracion_1_dosis_penicilina_gestante',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes',
         ],
         'seccion' => [
            'nombre' => 'control_embarazo',
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
         #Parte 3 control de embarazo
      'acepta_rechaza_toma_examen_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'acepta_rechaza_toma_examen_vih',
            'name' => 'acepta_rechaza_toma_examen_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],





      'resultado_1_examen_vih_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_1_examen_vih_embarazo',
            'name' => 'resultado_1_examen_vih_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_1_examen_vih_embarazo' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_1_examen_vih_embarazo',
            'name' => 'fecha_1_examen_vih_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'eg_1_examen_vih' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'eg_1_examen_vih',
            'name' => 'eg_1_examen_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 1',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'resultado_2_examen_vih_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_2_examen_vih_embarazo',
            'name' => 'resultado_2_examen_vih_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_2_examen_vih_embarazo' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_2_examen_vih_embarazo',
            'name' => 'fecha_2_examen_vih_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'eg_2_examen_vih' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'eg_2_examen_vih',
            'name' => 'eg_2_examen_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 1',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'resultado_final_isp_examen_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_final_isp_examen_vih',
            'name' => 'resultado_final_isp_examen_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'fecha_resultado_final_isp_examen_vih' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_resultado_final_isp_examen_vih',
            'name' => 'fecha_resultado_final_isp_examen_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4 col-md-offset-1'
         ]
      ],

         #Parte 4 control de embarazo
      'derivada_a_especialidades_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'derivada_a_especialidades_embarazo',
            'name' => 'derivada_a_especialidades_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'control_embarazo'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],



      #Patologías Sífilis | Control Sifilis - patologias_sifilis
         #Primer bloque
      'fecha_ingreso_control_unidad_alto_riesgo' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ingreso_control_unidad_alto_riesgo',
            'name' => 'fecha_ingreso_control_unidad_alto_riesgo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_ingreso_unacess' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ingreso_unacess',
            'id' => 'fecha_ingreso_unacess',
            'name' => 'fecha_ingreso_unacess',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_ingreso_control_otras_especialidades' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ingreso_control_otras_especialidades',
            'name' => 'fecha_ingreso_control_otras_especialidades',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_ingreso_control_otras_especialidades_otro' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'fecha_ingreso_control_otras_especialidades_otro',
            'name' => 'fecha_ingreso_control_otras_especialidades_otro',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Lugar de Especilidad',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
         #Segundo bloque
      'estado_civil' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_civil',
            'name' => 'estado_civil',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'tipo_de_convivencia' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tipo_de_convivencia',
            'name' => 'tipo_de_convivencia',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'escolaridad' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'escolaridad',
            'name' => 'escolaridad',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'anos_estudio' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'anos_estudio',
            'name' => 'anos_estudio',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 5',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'residencia_gestante' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'residencia_gestante',
            'name' => 'residencia_gestante',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ],
      ],
         #Tercer bloque
      'nacidos_vivos_previos_embarazo' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'nacidos_vivos_previos_embarazo',
            'name' => 'nacidos_vivos_previos_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-md-3 col-md-3'
         ],
      ],
      'nacidos_muertos_previos_embarazo' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'nacidos_muertos_previos_embarazo',
            'name' => 'nacidos_muertos_previos_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-md-3 col-md-3'
         ],
      ],
      'abortos_previos_embarazo' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'abortos_previos_embarazo',
            'name' => 'abortos_previos_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-md-3 col-md-3'
         ],
      ],
      #Hacer el bind sin el prefijo _vih
      'adicciones_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'adicciones',
            'name' => 'adicciones',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'sifilis_previa_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'sifilis_previa_embarazo',
            'name' => 'sifilis_previa_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ],
      ],
      'ano_sifilis_previa_embarazo' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'ano_sifilis_previa_embarazo',
            'name' => 'ano_sifilis_previa_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ],
      ],
      'otra_its_previa_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'otra_its_previa_embarazo',
            'name' => 'otra_its_previa_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ],
      ],
         #Cuarto bloque
      'fecha_examen_treponemico' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_examen_treponemico',
            'name' => 'fecha_examen_treponemico',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ],
      ],
      'resultado_treponemico' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_treponemico',
            'name' => 'resultado_treponemico',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ],
      ],
      'diagnostico_sifilis_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'diagnostico_sifilis_embarazo',
            'name' => 'diagnostico_sifilis_embarazo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ],
      ],
         #Quinto bloque


      ################################

      'tratamiento_sifilis_farmaco' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tratamiento_sifilis_farmaco',
            'name' => 'tratamiento_sifilis_farmaco',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ],
      ],
      'tratamiento_sifilis_dosis' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tratamiento_sifilis_dosis',
            'name' => 'tratamiento_sifilis_dosis',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ],
      ],
      'tratamiento_sifilis_frecuencia' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tratamiento_sifilis_frecuencia',
            'name' => 'tratamiento_sifilis_frecuencia',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ],
      ],

      #  Hacer el bind v-model con el que no tiene prefijo _sifilis
      'fecha_administracion_1_dosis_penicilina_gestante_sifilis' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_administracion_1_dosis_penicilina_gestante',
            'name' => 'fecha_administracion_1_dosis_penicilina_gestante',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes',
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis',
         ]

      ],
      'fecha_administracion_ult_dosis_penicilina_gestante' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_administracion_ult_dosis_penicilina_gestante',
            'name' => 'fecha_administracion_ult_dosis_penicilina_gestante',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes',
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis',
         ]
      ],

      'numero_contactos_sexuales_declarados' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'numero_contactos_sexuales_declarados',
            'name' => 'numero_contactos_sexuales_declarados',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 0',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],
      'numero_contactos_sexuales_estudiados' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'numero_contactos_sexuales_estudiados',
            'name' => 'numero_contactos_sexuales_estudiados',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 0',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],
      'numero_contactos_sexuales_tratados' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'numero_contactos_sexuales_tratados',
            'name' => 'numero_contactos_sexuales_tratados',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 0',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_sifilis'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],


      #Patologías VIH - patologias_vih

         #Primer bloque
      'fecha_ingreso_control_unidad_alto_riesgo_vih' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ingreso_control_unidad_alto_riesgo',
            'name' => 'fecha_ingreso_control_unidad_alto_riesgo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      #Este caso es asi-> _vih_vih
      'fecha_ingreso_control_centro_atencion_vih_vih' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ingreso_control_centro_atencion_vih',
            'name' => 'fecha_ingreso_control_centro_atencion_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_ingreso_control_otras_especialidades_vih' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ingreso_control_otras_especialidades',
            'name' => 'fecha_ingreso_control_otras_especialidades',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_ingreso_control_otras_especialidades_otro_vih' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'fecha_ingreso_control_otras_especialidades_otro',
            'name' => 'fecha_ingreso_control_otras_especialidades_otro',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Otro lugar especialidad',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'estado_civil_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_civil',
            'name' => 'estado_civil',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'tipo_de_convivencia_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tipo_de_convivencia',
            'name' => 'tipo_de_convivencia',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'escolaridad_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'escolaridad',
            'name' => 'escolaridad',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'anos_estudio_vih' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'anos_estudio',
            'name' => 'anos_estudio',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 5',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'residencia_gestante_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'residencia_gestante',
            'name' => 'residencia_gestante',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

         #Segundo bloque
      'vih_conocido_previa_embarazo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'vih_conocido_previa_embarazo',
            'name' => 'vih_conocido_previa_embarazo',
            'value' => '',
            'max_lenght' => ''
            , 'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_confirmacion_isp_vih_responde_si' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_confirmacion_isp_vih_responde_si',
            'name' => 'fecha_confirmacion_isp_vih_responde_si',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'adicciones' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'adicciones',
            'name' => 'adicciones',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'pareja_vih_positivo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'pareja_vih_positivo',
            'name' => 'pareja_vih_positivo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes',
         ],
         'seccion' => [
            'nombre' => 'patologias_vih',
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ],
      ],
      #Hacer el bind v-model con el que no tiene prefijo _vih

      'numero_contactos_sexuales_declarados_vih' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'numero_contactos_sexuales_declarados',
            'name' => 'numero_contactos_sexuales_declarados',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 0',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],
      'numero_contactos_sexuales_estudiados_vih' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'numero_contactos_sexuales_estudiados',
            'name' => 'numero_contactos_sexuales_estudiados',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 0',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],
      'numero_contactos_sexuales_tratados_vih' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'numero_contactos_sexuales_tratados',
            'name' => 'numero_contactos_sexuales_tratados',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 0',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],

         #Tercer Bloque
      'fecha_examen_linfocitos_cd4_ingreso_control_prenatal' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_examen_linfocitos_cd4_ingreso_control_prenatal',
            'name' => 'fecha_examen_linfocitos_cd4_ingreso_control_prenatal',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],
      'numero_cd4_ingreso_control_prenatal' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'numero_cd4_ingreso_control_prenatal',
            'name' => 'numero_cd4_ingreso_control_prenatal',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-8 col-md-8'
         ],
      ],
      'fecha_examen_carga_viral_control_prenatal' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_examen_carga_viral_control_prenatal',
            'name' => 'fecha_examen_carga_viral_control_prenatal',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],
      'numero_carga_viral_control_prenatal' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'numero_carga_viral_control_prenatal',
            'name' => 'numero_carga_viral_control_prenatal',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-8 col-md-8'
         ],
      ],

      /*
      'carga_viral_numero_copia_ingreso_control_prenatal' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'carga_viral_numero_copia_ingreso_control_prenatal',
            'name' => 'carga_viral_numero_copia_ingreso_control_prenatal',
            'value' => '',
            'max_lenght' => '',
      'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ]
      ],*/

      'fecha_examen_carga_viral_semana_34' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_examen_carga_viral_semana_34',
            'name' => 'fecha_examen_carga_viral_semana_34',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-4 col-md-4'
         ],
      ],
      'carga_viral_numero_copia_semana_34' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'carga_viral_numero_copia_semana_34',
            'name' => 'carga_viral_numero_copia_semana_34',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-8 col-md-8'
         ],
      ],

         #Cuarto Bloque
      'terapia_antiretroviral_farmaco_1' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'terapia_antiretroviral_farmaco_1',
            'name' => 'terapia_antiretroviral_farmaco_1',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ]
      ],
      'fecha_inicio_tar_farmaco_1' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_inicio_tar_farmaco_1',
            'name' => 'fecha_inicio_tar_farmaco_1',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ]
      ],
      'terapia_antiretroviral_tar_farmaco_2' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'terapia_antiretroviral_tar_farmaco_2',
            'name' => 'terapia_antiretroviral_tar_farmaco_2',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ]
      ],
      'fecha_inicio_tar_farmaco_2' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_inicio_tar_farmaco_2',
            'name' => 'fecha_inicio_tar_farmaco_2',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ]
      ],
      'terapia_antiretroviral_tar_farmaco_3' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'terapia_antiretroviral_tar_farmaco_3',
            'name' => 'terapia_antiretroviral_tar_farmaco_3',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ]
      ],
      'fecha_inicio_tar_farmaco_3' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_inicio_tar_farmaco_3',
            'name' => 'fecha_inicio_tar_farmaco_3',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ]
      ],
      'terapia_antiretroviral_tar_farmaco_3_otro' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'terapia_antiretroviral_tar_farmaco_3_otro',
            'name' => 'terapia_antiretroviral_tar_farmaco_3_otro',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Nombre del Fármaco',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'patologias_vih'
         ],
         'class_custom' => [
            'class' => 'col-md-12'
         ]

      ],


      #Datos del Parto - datos_parto
         #Primer Bloque
      'lugar_atencion_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'lugar_atencion_parto',
            'name' => 'lugar_atencion_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'codigo_establecimiento' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'codigo_establecimiento',
            'name' => 'codigo_establecimiento',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 123456',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-2 col-md-2'
         ]
      ],
      'nombre_establecimiento_sin_codigo' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'nombre_establecimiento_sin_codigo',
            'name' => 'nombre_establecimiento_sin_codigo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Nombre del Establecimiento',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-md-12'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'tipo_establecimiento' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tipo_establecimiento',
            'name' => 'tipo_establecimiento',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_parto' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_parto',
            'name' => 'fecha_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'hora_parto' => [
         'directivas' => [
            'type' => 'time',
            'id' => 'hora_parto',
            'name' => 'hora_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'tipo_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tipo_parto',
            'name' => 'tipo_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'via_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'via_parto',
            'name' => 'via_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
         #Segundo Bloque
      'resultado_vdrl_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_vdrl_parto',
            'name' => 'resultado_vdrl_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'resultado_dilucion_vdrl_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_dilucion_vdrl_parto',
            'name' => 'resultado_dilucion_vdrl_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'resultado_examen_treponemico_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_examen_treponemico_parto',
            'name' => 'resultado_examen_treponemico_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'tratamiento_sifilis_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tratamiento_sifilis_parto',
            'name' => 'tratamiento_sifilis_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'resultado_examen_vih_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_examen_vih_parto',
            'name' => 'resultado_examen_vih_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ]
      ],
      'tratamiento_retroviral_parto' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tratamiento_retroviral_parto',
            'name' => 'tratamiento_retroviral_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ]
      ],
         #Tercer Bloque

      'peso_mujer_parto' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'peso_mujer_parto',
            'name' => 'peso_mujer_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 55',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-md-offset-9 col-md-3'
         ]
      ],

            #Farmaco 1
      'nombre_farmaco_1_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'nombre_farmaco_1_vih',
            'name' => 'nombre_farmaco_1_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'dosis_farmaco_1_vih' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'dosis_farmaco_1_vih',
            'name' => 'dosis_farmaco_1_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Carga n° 1',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'fecha_inicio_farmaco_1_vih' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_inicio_farmaco_1_vih',
            'name' => 'fecha_inicio_farmaco_1_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],


      'hora_inicio_farmaco_1_vih' => [
         'directivas' => [
            'type' => 'time',
            'id' => 'hora_inicio_farmaco_1_vih',
            'name' => 'hora_inicio_farmaco_1_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'dosis_2_farmaco_1_vih' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'dosis_2_farmaco_1_vih',
            'name' => 'dosis_2_farmaco_1_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Carga n° 2',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3 col-md-offset-3'
         ]
      ],

      'fecha_2_inicio_farmaco_1_vih' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_2_inicio_farmaco_1_vih',
            'name' => 'fecha_2_inicio_farmaco_1_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'hora_2_inicio_farmaco_1_vih' => [
         'directivas' => [
            'type' => 'time',
            'id' => 'hora_2_inicio_farmaco_1_vih',
            'name' => 'hora_2_inicio_farmaco_1_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
            #Farmaco 2
      'nombre_farmaco_2_vih' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'nombre_farmaco_2_vih',
            'name' => 'nombre_farmaco_2_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'dosis_farmaco_2_vih' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'dosis_farmaco_2_vih',
            'name' => 'dosis_farmaco_2_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Dosis de cantidad / horas',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_inicio_farmaco_2_vih' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_inicio_farmaco_2_vih',
            'name' => 'fecha_inicio_farmaco_2_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'hora_inicio_farmaco_2_vih' => [
         'directivas' => [
            'type' => 'time',
            'id' => 'hora_inicio_farmaco_2_vih',
            'name' => 'hora_inicio_farmaco_2_vih',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
            #Farmaco lactancia
      'nombre_farmaco_suspencion_lactancia' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'nombre_farmaco_suspencion_lactancia',
            'name' => 'nombre_farmaco_suspencion_lactancia',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ]
      ],
      'fecha_administracion_farmaco_suspencion_lactancia' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_administracion_farmaco_suspencion_lactancia',
            'name' => 'fecha_administracion_farmaco_suspencion_lactancia',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_parto'
         ]
      ],


      #Datos recién nacido - datos_recien_nacido
         #Primera Parte
      'run_recien_nacido' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'run_recien_nacido',
            'name' => 'run_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 123456789',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-2 col-md-2'
         ]
      ],
      'fecha_nacimiento_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_nacimiento_recien_nacido',
            'name' => 'fecha_nacimiento_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-2 col-md-2'
         ]
      ],
      'hora_nacimiento_recien_nacido' => [
         'directivas' => [
            'type' => 'time',
            'id' => 'hora_nacimiento_recien_nacido',
            'name' => 'hora_nacimiento_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => 'min-width: 80px !important;',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-1 col-md-1'
         ]
      ],
      'eg_pediatrica' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'eg_pediatrica',
            'name' => 'eg_pediatrica',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 1',
            'required' => '',
            'class' => '',
            'style' => 'min-width: 80px !important;',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-1 col-md-1'
         ]
      ],
      'peso_recien_nacido' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'peso_recien_nacido',
            'name' => 'peso_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 3300',
            'required' => '',
            'class' => '',
            'style' => 'min-width: 110px !important;',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-1 col-md-1'
         ]
      ],
      'estado_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_recien_nacido',
            'name' => 'estado_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-2 col-md-2 col-md-offset-1'
         ]
      ],
      'sexo_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'sexo_recien_nacido',
            'name' => 'sexo_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-2 col-md-2'
         ]
      ],
      #El campo de acontinuacion, Estado clinico recien nacido
      /*
      'estado_clinico_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_clinico_recien_nacido',
            'name' => 'estado_clinico_recien_nacido',
            'value' => '',
            'max_lenght' => '',
      'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ]
      ],
      */
         #Segunda Parte
      'fecha_examen_vdrl_periferico_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_examen_vdrl_periferico_recien_nacido',
            'name' => 'fecha_examen_vdrl_periferico_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'resultado_vdrl_periferico_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_vdrl_periferico_recien_nacido',
            'name' => 'resultado_vdrl_periferico_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'titulacion_vdrl_periferico_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'titulacion_vdrl_periferico_recien_nacido',
            'name' => 'titulacion_vdrl_periferico_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],

      'fecha_examen_vdrl_liq_cefalo_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_examen_vdrl_liq_cefalo_recien_nacido',
            'name' => 'fecha_examen_vdrl_liq_cefalo_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'resultado_vdrl_liq_cefalo_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_vdrl_liq_cefalo_recien_nacido',
            'name' => 'resultado_vdrl_liq_cefalo_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'titulacion_vdrl_liq_cefalo_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'titulacion_vdrl_liq_cefalo_recien_nacido',
            'name' => 'titulacion_vdrl_liq_cefalo_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],

      'resultado_radiografia_huesos_largos' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_radiografia_huesos_largos',
            'name' => 'resultado_radiografia_huesos_largos',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'resultado_citoquimico_liq_cefalo_raquideo' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_citoquimico_liq_cefalo_raquideo',
            'name' => 'resultado_citoquimico_liq_cefalo_raquideo',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'resultado_estudio_placentario' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_estudio_placentario',
            'name' => 'resultado_estudio_placentario',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],


         #Tercera Parte
      'tratamiento_recien_nacido_farmaco' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'tratamiento_recien_nacido_farmaco',
            'name' => 'tratamiento_recien_nacido_farmaco',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'tratamiento_recien_nacido_dosis' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'tratamiento_recien_nacido_dosis',
            'name' => 'tratamiento_recien_nacido_dosis',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Dosis de cantidad / horas',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'tratamiento_recien_nacido_frecuencia' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'tratamiento_recien_nacido_frecuencia',
            'name' => 'tratamiento_recien_nacido_frecuencia',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: 5',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'fecha_examen_treponemico_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_examen_treponemico_recien_nacido',
            'name' => 'fecha_examen_treponemico_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],
      #Hacer el data bind al model por el uso del prefijo para la tab, _datos_recien_nacido
      'resultado_examen_treponemico_parto_datos_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_examen_treponemico_parto',
            'name' => 'resultado_examen_treponemico_parto',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],

         #Cuarta Parte
      'sustituto_leche_materna' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'sustituto_leche_materna',
            'name' => 'sustituto_leche_materna',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_inicio_sustituto_leche_materna' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_inicio_sustituto_leche_materna',
            'name' => 'fecha_inicio_sustituto_leche_materna',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'hora_inicio_sustituto_leche_materna' => [
         'directivas' => [
            'type' => 'time',
            'id' => 'hora_inicio_sustituto_leche_materna',
            'name' => 'hora_inicio_sustituto_leche_materna',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'entrega_sustituto_leche_materna_al_alta' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'entrega_sustituto_leche_materna_al_alta',
            'name' => 'entrega_sustituto_leche_materna_al_alta',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'nombre_farmaco_1_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'nombre_farmaco_1_vih_recien_nacido',
            'name' => 'nombre_farmaco_1_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_inicio_farmaco_1_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_inicio_farmaco_1_vih_recien_nacido',
            'name' => 'fecha_inicio_farmaco_1_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'hora_inicio_farmaco_1_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'time',
            'id' => 'hora_inicio_farmaco_1_vih_recien_nacido',
            'name' => 'hora_inicio_farmaco_1_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'dosis_farmaco_1_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'dosis_farmaco_1_vih_recien_nacido',
            'name' => 'dosis_farmaco_1_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Dosis de cantidid / horas',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],

      'nombre_farmaco_2_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'nombre_farmaco_2_vih_recien_nacido',
            'name' => 'nombre_farmaco_2_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'fecha_inicio_farmaco_2_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_inicio_farmaco_2_vih_recien_nacido',
            'name' => 'fecha_inicio_farmaco_2_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'hora_inicio_farmaco_2_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'time',
            'id' => 'hora_inicio_farmaco_2_vih_recien_nacido',
            'name' => 'hora_inicio_farmaco_2_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],
      'dosis_farmaco_2_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'dosis_farmaco_2_vih_recien_nacido',
            'name' => 'dosis_farmaco_2_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Dosis de cantidid / horas',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-3 col-md-3'
         ]
      ],


      'fecha_1_examen_pcr_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_1_examen_pcr_recien_nacido',
            'name' => 'fecha_1_examen_pcr_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],
      'resultado_1_examen_pcr_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_1_examen_pcr_recien_nacido',
            'name' => 'resultado_1_examen_pcr_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],
      'fecha_2_examen_pcr_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_2_examen_pcr_recien_nacido',
            'name' => 'fecha_2_examen_pcr_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],
      'resultado_2_examen_pcr_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_2_examen_pcr_recien_nacido',
            'name' => 'resultado_2_examen_pcr_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],
      'fecha_3_examen_pcr_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_3_examen_pcr_recien_nacido',
            'name' => 'fecha_3_examen_pcr_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],
      'resultado_3_examen_pcr_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_3_examen_pcr_recien_nacido',
            'name' => 'resultado_3_examen_pcr_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],


      'diagnostico_final_vih_isp_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'diagnostico_final_vih_isp_recien_nacido',
            'name' => 'diagnostico_final_vih_isp_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-md-12'
         ]
      ],

      'resultado_test_elisa_18_meses' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_test_elisa_18_meses',
            'name' => 'resultado_test_elisa_18_meses',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],

      'fecha_test_elisa_18_meses' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_test_elisa_18_meses',
            'name' => 'fecha_test_elisa_18_meses',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ]
      ],


      'resultado_final_isp_examen_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'resultado_final_isp_examen_vih_recien_nacido',
            'name' => 'resultado_final_isp_examen_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-6 col-md-6'
         ]
      ],
      'fecha_resultado_final_isp_examen_vih_recien_nacido' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_resultado_final_isp_examen_vih_recien_nacido',
            'name' => 'fecha_resultado_final_isp_examen_vih_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-6 col-md-6'
         ]
      ],

         #Quinta Parte

      'derivacion_recien_nacido_a_seguimiento' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'derivacion_recien_nacido_a_seguimiento',
            'name' => 'derivacion_recien_nacido_a_seguimiento',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-2 col-md-2'
         ]
      ],
      'lugar_derivacion_recien_nacido_a_seguimiento' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'lugar_derivacion_recien_nacido_a_seguimiento',
            'name' => 'lugar_derivacion_recien_nacido_a_seguimiento',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => 'Ej: Lugar definido para la derivación',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'fecha_ingreso_control_recien_nacido_post_nacimiento' => [
         'directivas' => [
            'type' => 'date',
            'id' => 'fecha_ingreso_control_recien_nacido_post_nacimiento',
            'name' => 'fecha_ingreso_control_recien_nacido_post_nacimiento',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-6 col-md-6'
         ]
      ],

      'estado_seguimiento_mes' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_seguimiento_mes',
            'name' => 'estado_seguimiento_mes',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'estado_seguimiento_3_meses' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_seguimiento_3_meses',
            'name' => 'estado_seguimiento_3_meses',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],
      'estado_seguimiento_6_meses' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_seguimiento_6_meses',
            'name' => 'estado_seguimiento_6_meses',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-4 col-md-4'
         ]
      ],

      'estado_seguimiento_12_meses' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_seguimiento_12_meses',
            'name' => 'estado_seguimiento_12_meses',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-6 col-md-6'
         ]
      ],
      'estado_seguimiento_18_meses' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'estado_seguimiento_18_meses',
            'name' => 'estado_seguimiento_18_meses',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido'
         ],
         'class_custom' => [
            'class' => 'col-sm-6 col-md-6'
         ]
      ],
      'mujer_continua_tratamiento_antiretroviral' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'mujer_continua_tratamiento_antiretroviral',
            'name' => 'mujer_continua_tratamiento_antiretroviral',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes',
         ],
         'seccion' => [
            'nombre' => 'datos_recien_nacido',
         ],
         'class_custom' => [
            'class' => 'col-md-12'
         ]
      ],


      ##################################
      #  No vinculados a una seccion   #

      'region' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'region',
            'name' => 'region',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ]
      ],
      'servicio_salud' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'servicio_salud',
            'name' => 'servicio_salud',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ]
      ],
      'digito_verificador' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'digito_verificador',
            'name' => 'digito_verificador',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ]
      ],
      'edad' => [
         'directivas' => [
            'type' => 'number',
            'id' => 'edad',
            'name' => 'edad',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ]
      ],
      'digito_verificador_recien_nacido' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'digito_verificador_recien_nacido',
            'name' => 'digito_verificador_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ]
      ],
      'codigo_recien_nacido' => [
         'directivas' => [
            'type' => 'text',
            'id' => 'codigo_recien_nacido',
            'name' => 'codigo_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ]
      ],







      'diagnostico_final_sifilis_recien_nacido' => [
         'directivas' => [
            'type' => 'select',
            'id' => 'diagnostico_final_sifilis_recien_nacido',
            'name' => 'diagnostico_final_sifilis_recien_nacido',
            'value' => '',
            'max_lenght' => '',
            'placeholder' => '',
            'required' => '',
            'class' => '',
            'style' => '',
         ],
         'bloque' => [
            'nombre' => 'sin_examenes'
         ],
         'seccion' => [
            'nombre' => ''
         ]
      ],









   ],

   #Etiquetas para formularios
   'deis_form_table_labels' => [
      'nombres_madre' => [
         'text' => 'Nombres',
      ],
      'primer_apellido_madre' => [
         'text' => 'Primer Apellido',
      ],
      'segundo_apellido_madre' => [
         'text' => 'Segundo Apellido',
      ],
      'fecha_nacimiento_madre' => [
         'text' => 'Fecha de nacimiento',
      ],
      'n_correlativo_interno' => [
         'text' => 'Nº correlativo Minsal',
      ],
      'region' => [
         'text' => 'Región',
      ],
      'servicio_salud' => [
         'text' => 'Servicio de Salud',
      ],
      'run_madre' => [
         'text' => 'Run Madre',
         'tag' => 'Datos de identificación de la madre',
         'empty_column' => 'col-md-6 col-md-6',
      ],
      'digito_verificador' => [
         'text' => 'Dígito Verificador',
      ],
      'edad' => [
         'text' => 'Edad',
      ],
      'nacionalidad' => [
         'text' => 'Nacionalidad',
      ],
      'pais_origen' => [
         'text' => 'Pais de Origen',
      ],
      'pueblos_indigenas' => [
         'text' => 'Pueblos Indigenas',
      ],
      'estado_civil' => [
         'text' => 'Estado Civil',
         'subtag' => 'Datos Sociodemográficos',
      ],
      'tipo_de_convivencia' => [
         'text' => 'Tipo de Convivencia',
      ],
      'escolaridad' => [
         'text' => 'Nivel de escolaridad',
      ],
      'anos_estudio' => [
         'text' => 'Años de estudios',
      ],
      'residencia_gestante' => [
         'text' => 'Residencia de la gestante',
      ],
      'nacidos_vivos_previos_embarazo' => [
         'text' => 'Nacidos vivos previo al embarazo',
         'tag' => 'Antecedentes',
      ],
      'nacidos_muertos_previos_embarazo' => [
         'text' => 'Nacidos muertos antes de este embarazo',
      ],
      'abortos_previos_embarazo' => [
         'text' => 'Abortos previos a este embarazo',
      ],
      'sifilis_previa_embarazo' => [
         'text' => 'Sífilis previo a este embarazo',
      ],
      'ano_sifilis_previa_embarazo' => [
         'text' => 'Año sífilis previo a este embarazo',
      ],
      'otra_its_previa_embarazo' => [
         'text' => 'Otras ITS  previas a este embarazo',
         'empty_column' => 'col-sm-3 col-md-3'
      ],
      'vih_conocido_previa_embarazo' => [
         'text' => 'VIH conocido previa a este embarazo',
         'tag' => 'Antecedentes',
      ],
      'fecha_confirmacion_isp_vih_responde_si' => [
         'text' => 'Fecha confirmación ISP de VIH',
      ],
      'adicciones' => [
         'text' => 'Adicciones',
      ],
      'fecha_ingreso_control_prenatal_embarazo' => [
         'text' => 'Fecha Ingreso a control prenatal',
      ],
      'embarazo_con_control_parental' => [
         'text' => '¿Embarazo controlado?',
         'tag' => 'Datos del Embarazo',
      ],
      'edad_gestacional_ingreso_control_embarazo' => [
         'text' => 'Edad Gestacional al ingreso',
      ],
      'lugar_control_prenatal' => [
         'text' => 'Lugar Control Prenatal',
      ],
      'lugar_control_prenatal_otro' => [
         'text' => 'Otro Lugar Control Prenatal: Especifique',
      ],
      'codigo_establecimiento_control_prenatal_embarazo' => [
         'text' => 'Tipo de Establecimiento control prenatal',
      ],
      'fecha_1_vdrl_embarazo' => [
         'text' => 'Fecha 1º VDRL de este embarazo',
         'order' => '3.'
      ],
      'resultado_1_vdrl_embarazo' => [
         'text' => 'Resultado 1º VDRL  en este embarazo',
         'order' => '2.'
      ],
      'resultado_dilucion_1_vdrl_embarazo' => [
         'text' => 'Resultado Dilución  1º VDRL  en este embarazo',
         'tag' => 'Examenes detección de sífilis',
         'subtag' => 'Examen 1',
         'order' => '1.'
      ],
      'eg_1_dvrl_embarazo' => [
         'text' => 'EG 1º VDRL',
         'order' => '4.'
      ],
      'fecha_2_vdrl_embarazo' => [
         'text' => 'Fecha 2º VDRL',
         'order' => '3.'
      ],
      'resultado_2_vdrl_embarazo' => [
         'text' => 'Resultado 2º VDRL',
         'order' => '2.'
      ],
      'resultado_dilucion_2_vdrl_embarazo' => [
         'text' => 'Resultado Dilución  2º VDRL',
         'subtag' => 'Examen 2',
         'order' => '1.'
      ],
      'eg_2_dvrl_embarazo' => [
         'text' => 'EG 2º VDRL',
         'order' => '4.'
      ],
      'fecha_3_vdrl_embarazo' => [
         'text' => 'Fecha 3º VDRL',
         'order' => '3.'
      ],
      'resultado_3_vdrl_embarazo' => [
         'text' => 'Resultado 3º VDRL',
         'order' => '2.'
      ],
      'resultado_dilucion_3_vdrl_embarazo' => [
         'text' => 'Resultado Dilución  3º VDRL',
         'subtag' => 'Examen 3',
         'order' => '1.'
      ],
      'eg_3_dvrl_embarazo' => [
         'text' => 'EG 3º VDRL',
         'order' => '4.'
      ],
      'fecha_examen_treponemico' => [
         'text' => 'Fecha Examen treponémico',
         'tag' => 'Control de la sífilis en este embarazo',
      ],
      'resultado_treponemico' => [
         'text' => 'Resultado Treponemico',
      ],
      'diagnostico_sifilis_embarazo' => [
         'text' => 'Diagnostico de Sifilis en Embarazo',
         'empty_column' => 'col-sm-3 col-md-3',
      ],
      'tratamiento_sifilis_farmaco' => [
         'text' => 'Tratamiento Sífilis  Fámaco',
         'tag' => 'Tratamiento de Sífilis de la Gestante',
      ],
      'tratamiento_sifilis_dosis' => [
         'text' => 'Tratamiento Sifilis Dosis',
      ],
      'tratamiento_sifilis_frecuencia' => [
         'text' => 'Tratamiento Sifilis Frecuencia',
      ],
      'acepta_rechaza_toma_examen_vih' => [
         'text' => 'Acepta/rechaza toma de examen VIH',
         'tag' => 'Exámenes de detección de VIH',
      ],
      'fecha_1_examen_vih_embarazo' => [
         'text' => 'Fecha 1º examen VIH  en este embarazo',
         'order' => '2.'
      ],
      'resultado_1_examen_vih_embarazo' => [
         'text' => 'Resultado  1º examen VIH',
         'subtag' => 'Primer Examen',
         'order' => '1.'
      ],
      'eg_1_examen_vih' => [
         'text' => 'EG del 1° Examen VIH',
         'empty_column' => 'col-sm-3 col-md-3',
         'order' => '3.'
      ],
      'fecha_2_examen_vih_embarazo' => [
         'text' => 'Fecha 2º examen VIH',
         'order' => '2.'
      ],
      'resultado_2_examen_vih_embarazo' => [
         'text' => 'Resultado  2º examen VIH',
         'subtag' => 'Segundo Examen',
         'order' => '1.'
      ],
      'eg_2_examen_vih' => [
         'text' => 'EG del 2° Examen VIH',
         'order' => '3.'
      ],
      'fecha_resultado_final_isp_examen_vih' => [
         'text' => 'Fecha Resultado Final ISP Examen VIH',
      ],
      'resultado_final_isp_examen_vih' => [
         'text' => 'Resultado Final ISP Exámen VIH',
         'subtag' => 'Resultado de examen ISP',
      ],
      'fecha_resultado_final_isp_examen_vih_recien_nacido' => [
         'text' => 'Fecha Resultado Final ISP Examen VIH Recién nacido',
      ],
      'resultado_final_isp_examen_vih_recien_nacido' => [
         'text' => 'Resultado Final ISP Exámen VIH Recién nacido lactante',
      ],
      'derivada_a_especialidades_embarazo' => [
         'text' => 'Derivada a Especialidades en este embarazo',
         'tag' => 'Derivación a especialidades por sífilis o VIH',
      ],
      'fecha_ingreso_unacess' => [
         'text' => 'Fecha de ingreso a UNACESS',
      ],
      'fecha_ingreso_control_unidad_alto_riesgo' => [
         'text' => 'Fecha de ingreso a ALTO RIESGO',
         'subtag' => 'Fechas de ingreso a especialidades'
      ],
      'fecha_ingreso_control_centro_atencion_vih' => [
         'text' => 'Fecha de ingreso a centro de atención VIH',
      ],
      'fecha_ingreso_control_otras_especialidades' => [
         'text' => 'Fecha de ingreso a control en otro lugar',
      ],
      'fecha_ingreso_control_otras_especialidades_otro' => [
         'text' => 'Otro lugar de especialidades',
      ],
      'terapia_antiretroviral_farmaco_1' => [
         'text' => 'Fármaco 1',
         'tag' => 'Tratamiento de VIH de la Gestante',
      ],
      'fecha_inicio_tar_farmaco_1' => [
         'text' => 'Fecha de Inicio Fármaco 1',
      ],
      'terapia_antiretroviral_tar_farmaco_2' => [
         'text' => 'Fármaco 2',
      ],
      'fecha_inicio_tar_farmaco_2' => [
         'text' => 'Fecha de Inicio Fármaco 2',
      ],
      'terapia_antiretroviral_tar_farmaco_3' => [
         'text' => 'Fármaco 3',
      ],
      'terapia_antiretroviral_tar_farmaco_3_otro' => [
         'text' => 'Otro Fármaco, ¿Cual otro?',
      ],
      'fecha_inicio_tar_farmaco_3' => [
         'text' => 'Fecha de Inicio Fármaco 3',
      ],
      'numero_cd4_ingreso_control_prenatal' => [
         'text' => 'Resultado CD4',
      ],
      'fecha_examen_linfocitos_cd4_ingreso_control_prenatal' => [
         'text' => 'Fecha de Examen de Linfocitos CD4',
         'tag' => 'Control del VIH en este embarazo',
      ],
      'carga_viral_numero_copia_ingreso_control_prenatal' => [
         'text' => 'Carga Viral . Número de copia al ingreso de éste control prenatal',
      ],
      'fecha_examen_carga_viral_control_prenatal' => [
         'text' => 'Fecha de Examen de Carga Viral',
      ],
      'numero_carga_viral_control_prenatal' => [
         'text' => 'Resultado Carga Viral',
      ],
      'numero_contactos_sexuales_declarados' => [
         'text' => 'Número de parejas declaradas',
      ],
      'numero_contactos_sexuales_estudiados' => [
         'text' => 'Número de parejas estudiadas',
      ],
      'carga_viral_numero_copia_semana_34' => [
         'text' => 'Resultado Carga Viral',
      ],
      'fecha_examen_carga_viral_semana_34' => [
         'text' => 'Fecha de Examen de Carga Viral',
         'tag' => 'Exámenes Semana 34',
      ],
      'numero_contactos_sexuales_tratados' => [
         'text' => 'Número de parejas tratadas',
      ],
      'lugar_atencion_parto' => [
         'text' => 'Lugar del parto',
         'tag' => 'Datos del Parto',
      ],
      'codigo_establecimiento' => [
         'text' => 'Codigo del Establecimiento',
      ],
      'tipo_establecimiento' => [
         'text' => 'Tipo de Establecimiento',
      ],
      'nombre_establecimiento_sin_codigo' => [
         'text' => 'Nombre Del Establecimiento que no tenga código',
      ],
      'fecha_parto' => [
         'text' => 'Fecha del parto / nacimiento',
      ],
      'hora_parto' => [
         'text' => 'Hora del parto/nacimiento',
      ],
      'tipo_parto' => [
         'text' => 'Tipo de Parto',
      ],
      'via_parto' => [
         'text' => 'Via del Parto',
      ],
      'resultado_vdrl_parto' => [
         'text' => 'Resultado VDRL',
         'subtag' => 'Examenes de sífilis durante el parto',
      ],
      'resultado_dilucion_vdrl_parto' => [
         'text' => 'Resultado Titulado (Dilución)',
      ],
      'resultado_examen_treponemico_parto' => [
         'text' => 'Resultado Examen Treponemico',
      ],
      'tratamiento_sifilis_parto' => [
         'text' => 'Tratamiento de Sifilis al Parto',
      ],
      'resultado_examen_vih_parto' => [
         'text' => 'Resultado Examen VIH Parto',
         'subtag' => 'Examenes de VIH durante el parto',
      ],
      'tratamiento_retroviral_parto' => [
         'text' => 'Tratamiento antiretroviral al parto',
      ],
      'peso_mujer_parto' => [
         'text' => 'Peso de la mujer al parto',
         'tag' => 'Tratamiento de VIH',
      ],
      'nombre_farmaco_1_vih' => [
         'text' => 'Nombre Farmaco 1 (VIH)',
      ],
      'dosis_farmaco_1_vih' => [
         'text' => 'Dosis Farmaco 1 (VIH)',
      ],
      'fecha_inicio_farmaco_1_vih' => [
         'text' => 'Fecha de Inicio Farmaco 1 (VIH)',
      ],
      'hora_inicio_farmaco_1_vih' => [
         'text' => 'Hora de Inicio  Farmaco 1 (VIH)',
      ],

      'dosis_2_farmaco_1_vih' => [
         'text' => 'Dosis Carga 2 Farmaco 1 (VIH)',
      ],
      'fecha_2_inicio_farmaco_1_vih' => [
         'text' => 'Fecha de Inicio Carga 2 Farmaco 1 (VIH)',
      ],
      'hora_2_inicio_farmaco_1_vih' => [
         'text' => 'Hora de Inicio Carga 2 Farmaco 1 (VIH)',
      ],

      'nombre_farmaco_2_vih' => [
         'text' => 'Nombre Farmaco 2 (VIH)',
      ],
      'dosis_farmaco_2_vih' => [
         'text' => 'Dosis Farmaco 2 (VIH)',
      ],
      'fecha_inicio_farmaco_2_vih' => [
         'text' => 'Fecha de Inicio  Farmaco 2 (VIH)',
      ],
      'hora_inicio_farmaco_2_vih' => [
         'text' => 'Hora de Inicio  Farmaco 2 (VIH)',
      ],
      'nombre_farmaco_suspencion_lactancia' => [
         'text' => 'Nombre del  Fármaco para suspender la lactancia',
      ],
      'fecha_administracion_farmaco_suspencion_lactancia' => [
         'text' => 'Fecha de administración de  Fármaco para suspender la lactancia',
      ],
      'estado_recien_nacido' => [
         'text' => 'Estado del recién nacido',
      ],
      'eg_pediatrica' => [
         'text' => 'EG Pediat.',
      ],
      'sexo_recien_nacido' => [
         'text' => 'Sexo Recién Nacido',
      ],
      'peso_recien_nacido' => [
         'text' => 'Peso (grs)',
      ],
      'estado_clinico_recien_nacido' => [
         'text' => 'Estado Clinico del Recién Nacido',
      ],
      'run_recien_nacido' => [
         'text' => 'Run Recién Nacido',
         'tag' => 'Datos del Recién Nacido',
      ],
      'fecha_nacimiento_recien_nacido' => [
         'text' => 'Fecha de Nacimiento',
      ],
      'hora_nacimiento_recien_nacido' => [
         'text' => 'Hora',
      ],
      'digito_verificador_recien_nacido' => [
         'text' => 'Digito verificador',
      ],
      'codigo_recien_nacido' => [
         'text' => 'Código Recién nacido',
      ],
      'fecha_examen_vdrl_periferico_recien_nacido' => [
         'text' => 'Fecha de exámen  VDRL periférico del Recién nacido',
      ],
      'resultado_vdrl_periferico_recien_nacido' => [
         'text' => 'Resultado de VDRL periférico del Recién nacido',
         'tag' => 'Examenes Sifilis',
         'subtag' => 'Examenes Sifilis',
      ],
      'titulacion_vdrl_periferico_recien_nacido' => [
         'text' => 'Titulación  de VDRL periférico del Recién nacido',
      ],
      'fecha_examen_vdrl_liq_cefalo_recien_nacido' => [
         'text' => 'Fecha de examen VDRL líquido céfalo raquídeo',
      ],
      'resultado_vdrl_liq_cefalo_recien_nacido' => [
         'text' => 'Resultado de VDRL líquido céfalo raquídeo',
      ],
      'titulacion_vdrl_liq_cefalo_recien_nacido' => [
         'text' => 'Titulación  de VDRL líquido céfalo raquídeo',
      ],
      'resultado_radiografia_huesos_largos' => [
         'text' => 'Resultado de Radiografía de huesos largos',
      ],
      'resultado_citoquimico_liq_cefalo_raquideo' => [
         'text' => 'Resultado de Citoquímico de Líquido Cefalo Raquídeo',
      ],
      'resultado_estudio_placentario' => [
         'text' => 'Resultado Estudio Placentario',
      ],
      'tratamiento_recien_nacido_farmaco' => [
         'text' => 'Farmaco',
         'tag' => 'Tratamiento sífilis',
      ],
      'tratamiento_recien_nacido_dosis' => [
         'text' => 'Dosis',
      ],
      'tratamiento_recien_nacido_frecuencia' => [
         'text' => 'Frecuencia N° de Días',
      ],
      'sustituto_leche_materna' => [
         'text' => '¿Sustituto de Leche Materna?',
         'tag' => 'Seguimiento VIH R.N.',
         'subtag' => 'Leche materna'
      ],
      'fecha_inicio_sustituto_leche_materna' => [
         'text' => 'Fecha inicio Sustituto de Leche Materna',
      ],
      'hora_inicio_sustituto_leche_materna' => [
         'text' => 'Hora inicio sustituto de Leche Materna',
      ],
      'entrega_sustituto_leche_materna_al_alta' => [
         'text' => '¿Entrega de Sustituto de Leche Materna al alta?',
      ],
      'nombre_farmaco_1_vih_recien_nacido' => [
         'text' => 'Nombre Farmaco 1 (VIH) Recién Nacido',
         'subtag' => 'Farmaco 1 recien nacido',
      ],
      'dosis_farmaco_1_vih_recien_nacido' => [
         'text' => 'Dosis Farmaco 1 (VIH) Recién Nacido',
      ],
      'fecha_inicio_farmaco_1_vih_recien_nacido' => [
         'text' => 'Fecha de Inicio  Farmaco 1 (VIH) Recién Nacido',
      ],
      'hora_inicio_farmaco_1_vih_recien_nacido' => [
         'text' => 'Hora de Inicio  Farmaco 1 (VIH)Recién Nacido',
      ],
      'nombre_farmaco_2_vih_recien_nacido' => [
         'text' => 'Nombre Farmaco 2 (VIH) Recién Nacido',
         'subtag' => 'Farmaco 2 recien nacido',
      ],
      'dosis_farmaco_2_vih_recien_nacido' => [
         'text' => 'Dosis Farmaco 2 (VIH) Recién Nacido',
      ],
      'fecha_inicio_farmaco_2_vih_recien_nacido' => [
         'text' => 'Fecha de Inicio  Farmaco 2 (VIH)Recién Nacido',
      ],
      'hora_inicio_farmaco_2_vih_recien_nacido' => [
         'text' => 'Hora de Inicio  Farmaco 2 (VIH)Recién Nacido',
      ],
      'fecha_1_examen_pcr_recien_nacido' => [
         'text' => 'Fecha 1° exámen de PCR recién nacido',
         'subtag' => 'Exámenes PCR del recién nacido',
      ],
      'resultado_1_examen_pcr_recien_nacido' => [
         'text' => 'Resultado  1° exámen de PCR recien nacido',
      ],
      'fecha_2_examen_pcr_recien_nacido' => [
         'text' => 'Fecha 2° exámen de PCR recien nacido',
      ],
      'resultado_2_examen_pcr_recien_nacido' => [
         'text' => 'Resultado  2° exámen de PCR recien nacido',
      ],
      'fecha_3_examen_pcr_recien_nacido' => [
         'text' => 'Fecha 3° exámen de PCR recien nacido',
      ],
      'resultado_3_examen_pcr_recien_nacido' => [
         'text' => 'Resultado  3° exámen de PCR recien nacido',
      ],
      'diagnostico_final_vih_isp_recien_nacido' => [
         'text' => 'Diagnóstico Final (VIH) del Instituto de Salud Pública del Recién Nacido',
      ],
      'fecha_test_elisa_18_meses' => [
         'text' => 'Fecha Test de Elisa 18 meses edad',
      ],
      'resultado_test_elisa_18_meses' => [
         'text' => 'Resultado Test de Elisa a los 18 meses de edad',
         'subtag' => 'Resultados Test Elisa',
      ],
      'fecha_examen_treponemico_recien_nacido' => [
         'text' => 'Fecha Exámen treponémico del Recien Nacido',
      ],
      'derivacion_recien_nacido_a_seguimiento' => [
         'text' => 'Derivación del recien nacido',
         'tag' => 'Seguimiento niño expuesto',
      ],
      'lugar_derivacion_recien_nacido_a_seguimiento' => [
         'text' => 'Lugar de derivación del recien nacido a seguimiento',
      ],
      'fecha_ingreso_control_recien_nacido_post_nacimiento' => [
         'text' => 'Fecha de ingreso a control del recien nacido post nacimiento',
      ],
      'diagnostico_final_sifilis_recien_nacido' => [
         'text' => 'Diagnóstico Final Sífilis del Recien Nacido ( Exámen treponémico)',
      ],
      'estado_seguimiento_mes' => [
         'text' => 'Estado de seguimiento al mes',
      ],
      'estado_seguimiento_3_meses' => [
         'text' => 'Estado de seguimiento al tres meses',
      ],
      'estado_seguimiento_6_meses' => [
         'text' => 'Estado de seguimiento a los seis meses',
      ],
      'estado_seguimiento_12_meses' => [
         'text' => 'Estado de seguimiento a los doce meses',
      ],
      'estado_seguimiento_18_meses' => [
         'text' => 'Estado de seguimiento a los dieciocho meses',
      ],
      'variable_151_estandar' => [
         'text' => 'variable_151_estandar',
      ],
      'mujer_continua_tratamiento_antiretroviral' => [
         'text' => 'Mujer continua con tratamiento antirretroviral a los 12 meses post parto',
      ],
      'fecha_ultima_regla_gestacional' => [
         'text' => 'FUR Gestacional',
      ],
      'fecha_ultima_regla_operacional' => [
         'text' => 'FUR Operacional',
      ],
      'pareja_vih_positivo' => [
         'text' => 'Pareja VIH positivo',
      ],
      'fecha_administracion_1_dosis_penicilina_gestante' => [
         'text' => 'Fecha administración primera dosis penicilina',
      ],
      'fecha_administracion_ult_dosis_penicilina_gestante' => [
         'text' => 'Fecha administración última dosis penicilina',
      ],
   ],



];