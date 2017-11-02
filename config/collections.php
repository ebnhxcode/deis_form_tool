<?php


return [
   'nav_tab_form_deis' => [
      'identificacion_mujer' => [
         'name' => 'identificacion_mujer',
         'description' => 'Identificación de la Mujer',
         'class' => 'active',
      ],
      'control_embarazo' => [
         'name' => 'control_embarazo',
         'description' => 'Control de Embarazo',
         'class' => '',
      ],
      'patologias_sifilis' => [
         'name' => 'patologias_sifilis',
         'description' => 'Control Sífilis',
         'class' => '',
      ],
      'patologias_vih' => [
         'name' => 'patologias_vih',
         'description' => 'Control VIH',
         'class' => '',
      ],
      'datos_parto' => [
         'name' => 'datos_parto',
         'description' => 'Datos del Parto',
         'class' => '',
      ],
      'datos_recien_nacido' => [
         'name' => 'datos_recien_nacido',
         'description' => 'Datos recién nacido',
         'class' => '',
      ],
   ],

   'deis_form_table_options' => [

      'pueblos_indigenas' => [
         'Mapuche' => 'Mapuche',
         'Aymara' => 'Aymara',
         'Rapa Nui' => 'Rapa Nui',
         'Lican-Antai' => 'Lican-Antai',
         'Quechua' => 'Quechua',
         'Colla' => 'Colla',
         'Diaguita' => 'Diaguita',
         'Kawesqar' => 'Kawesqar',
         'Yagan' => 'Yagan',
         'Otro' => 'Otro',
         'Ninguno' => 'Ninguno',

      ],

      'embarazo_con_control_parental' => [
         'Si' => 'Si',
         'No' => 'No',
         'Desconocido' => 'Desconocido',
      ],

      'codigo_establecimiento_control_prenatal_embarazo' => [
         'Publico'=>'Publico',
         'Privado'=>'Privado',
         'Mixto'=>'Mixto',
         'Otro'=>'Otro',
         'Desconocido'=>'Desconocido',
      ],

      'acepta_rechaza_toma_examen_vih' => [
         'Acepta' => 'Acepta',
         'Rechaza' => 'Rechaza',
      ],

      'resultado_final_isp_examen_vih' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Registra Muestra Anterior' => 'Registra Muestra Anterior',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],

      'derivada_a_especialidades_embarazo' => [
         'Si' => 'Si',
         'No' => 'No',
         'No Corresponde' => 'No Corresponde',
      ],

      'estado_civil' => [
         'Soltera' => 'Soltera',
         'Casada' => 'Casada',
         'Viuda' => 'Viuda',
         'Divorciada' => 'Divorciada',
         'Separada' => 'Separada',
         'Conviviente Civil' => 'Conviviente Civil',
         'Desconocido' => 'Desconocido',
      ],

      'tipo_de_convivencia' => [
         'Estable' => 'Estable',
         'Ocacional' => 'Ocacional',
         'Desconocido' => 'Desconocido',
      ],


      'escolaridad' => [
         'Ed. Basica' => 'Ed. Basica',
         'Ed. Media' => 'Ed. Media',
         'Tecnico' => 'Tecnico',
         'Superior' => 'Superior',
         'Ninguna' => 'Ninguna',
         'Desconocido' => 'Desconocido',
      ],

      'residencia_gestante' => [
         'Fija' => 'Fija',
         'Transitoria' => 'Transitoria',
         'Situacion de Calle' => 'Situacion de Calle',
         'Sename' => 'Sename',
         'Desconocido' => 'Desconocido',
         'Otra' => 'Otra',
      ],

      'adicciones' => [
         'Alcohol' => 'Alcohol',
         'Drogas' => 'Drogas',
         'Alcohol y Drogas' => 'Alcohol y Drogas',
         'Ninguna' => 'Ninguna',
         'Desconocido' => 'Desconocido',
      ],

      'sifilis_previa_embarazo' => [
         'Si' => 'Si',
         'No' => 'No',
      ],

      'otra_its_previa_embarazo' => [
         'Si' => 'Si',
         'No' => 'No',
      ],

      'resultado_treponemico' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'No Realizado' => 'No Realizado',
      ],

      'diagnostico_sifilis_embarazo' => [
         'Sifilis Primaria' => 'Sifilis Primaria',
         'Sifilis Secundaria' => 'Sifilis Secundaria',
         'Sifilis Latente Precoz' => 'Sifilis Latente Precoz',
         'Sifilis Latente Tardia' => 'Sifilis Latente Tardia',
         'Sifilis Sin Especificar' => 'Sifilis Sin Especificar',
         'Huella Serologica' => 'Huella Serologica',
         'Falso positivo de la tecnica para esta patologia' => 'Falso positivo de la tecnica para esta patologia',
      ],

      'tratamiento_sifilis_farmaco' => [
         'Penicilina Benzatina' => 'Penicilina Benzatina',
         'Penicilina Sodica' => 'Penicilina Sodica',
         'Penicilina Sodica Mas Benzatina' => 'Penicilina Sodica Mas Benzatina',
         'Otro Antibiotico' => 'Otro Antibiotico',
      ],

      'tratamiento_sifilis_dosis' => [
         '2.400.000 UI' => '2.400.000 UI',
         '1.000.000 UI' => '1.000.000 UI',
         'Otra' => 'Otra',
      ],

      'tratamiento_sifilis_frecuencia' => [
         'Una vez' => 'Una vez',
         'Dos veces' => 'Dos veces',
         'Tres veces' => 'Tres veces',
         'Otra' => 'Otra',
      ],



      'terapia_antiretroviral_farmaco_1' => [
         'Zidovudina' => 'Zidovudina',
         'Abacavir' => 'Abacavir',
         'Tenofovir' => 'Tenofovir',
      ],


      'terapia_antiretroviral_tar_farmaco_2' => [
         'Lamivudina' => 'Lamivudina',
         'Emtricitabina' => 'Emtricitabina',
      ],

      'terapia_antiretroviral_tar_farmaco_3' => [
         'Nevirapina' => 'Nevirapina',
         'Atazanavir' => 'Atazanavir',
         'Fosamprenavir' => 'Fosamprenavir',
         'Lopinavir / Ritonavir' => 'Lopinavir / Ritonavir',
         'Saquinavir + Ritonavir' => 'Saquinavir + Ritonavir',
         'Raltegravir' => 'Raltegravir',
         'Otro' => 'Otro',
      ],



      'vih_conocido_previa_embarazo' => [
         'Si' => 'Si',
         'No' => 'No',
         'Desconocido' => 'Desconocido',
      ],

      'pareja_vih_positivo' => [
         'Si' => 'Si',
         'No' => 'No',
         'Desconocido' => 'Desconocido',
      ],

      'via_parto' => [
         'Parto Vaginal' => 'Parto Vaginal',
         'Parto Cesarea' => 'Parto Cesarea',
      ],

      'tipo_establecimiento' => [
         'Publico' => 'Publico',
         'Privado' => 'Privado',
         'Otro' => 'Otro',
      ],


      'tipo_parto' => [
         'Simple' => 'Simple',
         'Doble' => 'Doble',
         'Triple' => 'Triple',
         'Otro' => 'Otro',
         'Ignorado' => 'Ignorado',
      ],


      'resultado_vdrl_parto' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],


      'resultado_dilucion_vdrl_parto' => [
         '1:1' => '1:1',
         '1:2' => '1:2',
         '1:4' => '1:4',
         '1:8' => '1:8',
         '1:16' => '1:16',
         '1:64' => '1:64',
         '1:128' => '1:128',
         '1:256' => '1:256',
      ],

      'resultado_examen_treponemico_parto' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'No Realizado' => 'No Realizado',
      ],

      'tratamiento_sifilis_parto' => [
         'Si' => 'Si',
         'No' => 'No',
      ],

      'resultado_examen_vih_parto' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
         'No Corresponde' => 'No Corresponde',
      ],

      'tratamiento_retroviral_parto' => [
         'Si' => 'Si',
         'No' => 'No',
      ],

      'nombre_farmaco_1_vih' => [
         'Zidovudina (AZT)' => 'Zidovudina (AZT)',
      ],

      'nombre_farmaco_2_vih' => [
         'Nevirapina' => 'Nevirapina (NVP)',
      ],

      'nombre_farmaco_suspencion_lactancia' => [
         'Cabergolina' => 'Cabergolina',
         'Bromocriptina' => 'Bromocriptina',
      ],


      'estado_recien_nacido' => [
         'Vivo' => 'Vivo',
         'Muerto' => 'Muerto',
      ],

      'sexo_recien_nacido' => [
         'Hombre' => 'Hombre',
         'Mujer' => 'Mujer',
         'Intersex' => 'Intersex',
         'Desconocido' => 'Desconocido',
      ],

      'resultado_vdrl_periferico_recien_nacido' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],

      'titulacion_vdrl_periferico_recien_nacido' => [
         '1:1' => '1:1',
         '1:2' => '1:2',
         '1:4' => '1:4',
         '1:8' => '1:8',
         '1:16' => '1:16',
         '1:64' => '1:64',
         '1:128' => '1:128',
         '1:256' => '1:256',
      ],

      'resultado_vdrl_liq_cefalo_recien_nacido' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],

      'titulacion_vdrl_liq_cefalo_recien_nacido' => [
         '1:1' => '1:1',
         '1:2' => '1:2',
         '1:4' => '1:4',
         '1:8' => '1:8',
         '1:16' => '1:16',
         '1:64' => '1:64',
         '1:128' => '1:128',
         '1:256' => '1:256',
      ],

      'resultado_radiografia_huesos_largos' => [
         'Normal' => 'Normal',
         'Alterado' => 'Alterado',
         'No Realizado' => 'No Realizado',
      ],

      'resultado_citoquimico_liq_cefalo_raquideo' => [
         'Normal' => 'Normal',
         'Alterado' => 'Alterado',
         'No Realizado' => 'No Realizado',
      ],

      'resultado_estudio_placentario' => [
         'Infeccion por Treponema' => 'Infeccion por Treponema',
         'No Infeccion por Treponema' => 'No Infeccion por Treponema',
         'No Realizado' => 'No Realizado',
      ],

      'tratamiento_recien_nacido_farmaco' => [
         'Penicilina Sodica' => 'Penicilina Sodica',
         'Penicilina Benzatina' => 'Penicilina Benzatina',
         'Otro Antibiotico' => 'Otro Antibiotico',
         'No Aplica' => 'No Aplica',
         'No Administrado' => 'No Administrado',
      ],

      'resultado_examen_treponemico_parto_datos_recien_nacido' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],

      'sustituto_leche_materna' => [
         'Si' => 'Si',
         'No' => 'No',
      ],

      'entrega_sustituto_leche_materna_al_alta' => [
         'Si' => 'Si',
         'No' => 'No',
      ],

      'nombre_farmaco_1_vih_recien_nacido' => [
         'Zidovudina (AZT)' => 'Zidovudina (AZT)',
      ],

      'nombre_farmaco_2_vih_recien_nacido' => [
         'Nevirapina' => 'Nevirapina (NVP)',
      ],

      'diagnostico_final_vih_isp_recien_nacido' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Pendiente' => 'Pendiente',
      ],


      'resultado_test_elisa_18_meses' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],


      'derivacion_recien_nacido_a_seguimiento' => [
         'Si' => 'Si',
         'No' => 'No',
      ],


      'estado_seguimiento_mes' => [
         'Control' => 'Control',
         'Alta' => 'Alta',
         'Abandono' => 'Abandono',
         'Traslado dentro del pais' => 'Traslado dentro del pais',
         'Traslado fuera del pais' => 'Traslado fuera del pais',
      ],


      'estado_seguimiento_3_meses' => [
         'Control' => 'Control',
         'Alta' => 'Alta',
         'Abandono' => 'Abandono',
         'Traslado dentro del pais' => 'Traslado dentro del pais',
         'Traslado fuera del pais' => 'Traslado fuera del pais',
      ],


      'estado_seguimiento_6_meses' => [
         'Control' => 'Control',
         'Alta' => 'Alta',
         'Abandono' => 'Abandono',
         'Traslado dentro del pais' => 'Traslado dentro del pais',
         'Traslado fuera del pais' => 'Traslado fuera del pais',
      ],


      'estado_seguimiento_12_meses' => [
         'Control' => 'Control',
         'Alta' => 'Alta',
         'Abandono' => 'Abandono',
         'Traslado dentro del pais' => 'Traslado dentro del pais',
         'Traslado fuera del pais' => 'Traslado fuera del pais',
      ],


      'estado_seguimiento_18_meses' => [
         'Control' => 'Control',
         'Alta' => 'Alta',
         'Abandono' => 'Abandono',
         'Traslado dentro del pais' => 'Traslado dentro del pais',
         'Traslado fuera del pais' => 'Traslado fuera del pais',
      ],


      'mujer_continua_tratamiento_antiretroviral' => [
         'Si' => 'Si',
         'No' => 'No',
      ],


      'resultado_1_vdrl_embarazo' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],

      'resultado_dilucion_1_vdrl_embarazo' => [
         '1:1' => '1:1',
         '1:2' => '1:2',
         '1:4' => '1:4',
         '1:8' => '1:8',
         '1:16' => '1:16',
         '1:64' => '1:64',
         '1:128' => '1:128',
         '1:256' => '1:256',
      ],


      'resultado_2_vdrl_embarazo' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],

      'resultado_dilucion_2_vdrl_embarazo' => [
         '1:1' => '1:1',
         '1:2' => '1:2',
         '1:4' => '1:4',
         '1:8' => '1:8',
         '1:16' => '1:16',
         '1:64' => '1:64',
         '1:128' => '1:128',
         '1:256' => '1:256',
      ],

      'resultado_3_vdrl_embarazo' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],

      'resultado_dilucion_3_vdrl_embarazo' => [
         '1:1' => '1:1',
         '1:2' => '1:2',
         '1:4' => '1:4',
         '1:8' => '1:8',
         '1:16' => '1:16',
         '1:64' => '1:64',
         '1:128' => '1:128',
         '1:256' => '1:256',
      ],

      'resultado_1_examen_vih_embarazo' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],

      'resultado_2_examen_vih_embarazo' => [
         'Reactivo' => 'Reactivo',
         'No Reactivo' => 'No Reactivo',
         'No Realizado' => 'No Realizado',
      ],


      'resultado_1_examen_pcr_recien_nacido' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],

      'resultado_2_examen_pcr_recien_nacido' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],
      'resultado_3_examen_pcr_recien_nacido' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],

      'numero_cd4_ingreso_control_prenatal' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],


      'numero_carga_viral_control_prenatal' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],


      'carga_viral_numero_copia_semana_34' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],

      'resultado_final_isp_examen_vih_recien_nacido' => [
         'Positivo' => 'Positivo',
         'Negativo' => 'Negativo',
         'Registra Muestra Anterior' => 'Registra Muestra Anterior',
         'Pendiente' => 'Pendiente',
         'No Realizado' => 'No Realizado',
      ],


      'eg_1_dvrl_embarazo' => [
         1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,
         11=>11,12=>12,13=>13,14=>14,15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,
         21=>21,22=>22,23=>23,24=>24,25=>25,26=>26,27=>27,28=>28,29=>29,30=>30,
         31=>31,32=>32,33=>33,34=>34,35=>35,36=>36,37=>37,38=>38,39=>39,40=>40,
         41=>41,42=>42
      ],

      'eg_2_dvrl_embarazo' => [
         1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,
         11=>11,12=>12,13=>13,14=>14,15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,
         21=>21,22=>22,23=>23,24=>24,25=>25,26=>26,27=>  27,28=>28,29=>29,30=>30,
         31=>31,32=>32,33=>33,34=>34,35=>35,36=>36,37=>37,38=>38,39=>39,40=>40,
         41=>41,42=>42
      ],

      'eg_3_dvrl_embarazo' => [
         1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,
         11=>11,12=>12,13=>13,14=>14,15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,
         21=>21,22=>22,23=>23,24=>24,25=>25,26=>26,27=>27,28=>28,29=>29,30=>30,
         31=>31,32=>32,33=>33,34=>34,35=>35,36=>36,37=>37,38=>38,39=>39,40=>40,
         41=>41,42=>42
      ],

      'eg_1_examen_vih' => [
         1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,
         11=>11,12=>12,13=>13,14=>14,15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,
         21=>21,22=>22,23=>23,24=>24,25=>25,26=>26,27=>27,28=>28,29=>29,30=>30,
         31=>31,32=>32,33=>33,34=>34,35=>35,36=>36,37=>37,38=>38,39=>39,40=>40,
         41=>41,42=>42
      ],

      'eg_2_examen_vih' => [
         1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,
         11=>11,12=>12,13=>13,14=>14,15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,
         21=>21,22=>22,23=>23,24=>24,25=>25,26=>26,27=>27,28=>28,29=>29,30=>30,
         31=>31,32=>32,33=>33,34=>34,35=>35,36=>36,37=>37,38=>38,39=>39,40=>40,
         41=>41,42=>42
      ],

      'eg_pediatrica' => [
         1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,
         11=>11,12=>12,13=>13,14=>14,15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,
         21=>21,22=>22,23=>23,24=>24,25=>25,26=>26,27=>27,28=>28,29=>29,30=>30,
         31=>31,32=>32,33=>33,34=>34,35=>35,36=>36,37=>37,38=>38,39=>39,40=>40,
         41=>41,42=>42
      ],

   ]


];