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
         'description' => 'Patologías Sífilis',
         'class' => '',
      ],
      'patologias_vih' => [
         'name' => 'patologias_vih',
         'description' => 'Patologías VIH',
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

      'embarazo_con_control_parental' => [
         'Si' => 'Si',
         'No' => 'No',
      ],

      'codigo_establecimiento_control_prenatal_embarazo' => [
         'Publico'=>'Publico',
         'Privado'=>'Privado',
         'Mixto'=>'Mixto',
         'Otro'=>'Otro',
         'Desconocido'=>'Desconocido',
      ],

      'lugar_control_prenatal' => [
         '100025'=>'HOSPITAL SAN JUAN DE DIOS',
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
         'Otra' => 'Otra',
         'Desconocido' => 'Desconocido',
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
         'Penicilina Sodica Mas' => 'Penicilina Sodica Mas',
         'Otro Ántibiotico' => 'Otro Ántibiotico',
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
         'Abacabir' => 'Abacabir',
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
         'Liponavir / Ritonavir' => 'Liponavir / Ritonavir',
         'Saquinavir + Ritonavir' => 'Saquinavir + Ritonavir',
         'Raltegravir' => 'Raltegravir',
         'Otro' => 'Otro',
      ],

      'lugar_atencion_parto' => [
         '100025'=>'HOSPITAL SAN JUAN DE DIOS',
      ],

      'codigo_establecimiento' => [
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


      'via_parto' => [
         'Parto Vaginal' => 'Parto Vaginal',
         'Parto Cesarea' => 'Parto Cesarea',
      ],


      'resultado_vdrl_parto' => [
         'No Reactivo' => 'No Reactivo',
         'Reactivo' => 'Reactivo',
         'No Realizado' => 'No Realizado',
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

      '' => [
         '' => '',
      ],

      '' => [
         '' => '',
      ],

      '' => [
         '' => '',
      ],

      '' => [
         '' => '',
      ],

   ]


];