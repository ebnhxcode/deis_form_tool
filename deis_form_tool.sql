--
-- PostgreSQL database dump
--

-- Dumped from database version 10.0
-- Dumped by pg_dump version 10.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: comuna; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE comuna (
    id_comuna character varying(255),
    id_region character varying(255),
    nombre_comuna character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE comuna OWNER TO postgres;

--
-- Name: establecimiento; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE establecimiento (
    id_establecimiento character varying(255),
    id_establecimiento_antiguo character varying(255),
    id_servicio character varying(255),
    id_region character varying(255),
    id_comuna character varying(255),
    nombre_establecimiento character varying(255),
    tipo_establecimiento character varying(255),
    vigencia_desde character varying(255),
    fecha_cierre character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE establecimiento OWNER TO postgres;

--
-- Name: form_deis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE form_deis (
    id integer NOT NULL,
    nombres_madre character varying(255),
    primer_apellido_madre character varying(255),
    segundo_apellido_madre character varying(255),
    fecha_nacimiento_madre timestamp(0) without time zone,
    n_correlativo_interno integer,
    id_region integer,
    id_servicio_salud integer,
    run_madre integer,
    digito_verificador character varying(255),
    edad integer,
    nacionalidad character varying(255),
    id_pais character varying(255),
    pueblos_indigenas character varying(255),
    estado_civil character varying(255),
    tipo_de_convivencia character varying(255),
    escolaridad character varying(255),
    anos_estudio integer,
    residencia_gestante character varying(255),
    nacidos_vivos_previos_embarazo integer,
    nacidos_muertos_previos_embarazo integer,
    abortos_previos_embarazo integer,
    sifilis_previa_embarazo character varying(255),
    ano_sifilis_previa_embarazo integer,
    otra_its_previa_embarazo character varying(255),
    vih_conocido_previa_embarazo character varying(255),
    fecha_confirmacion_isp_vih_responde_si timestamp(0) without time zone,
    adicciones character varying(255),
    fecha_ingreso_control_prenatal_embarazo timestamp(0) without time zone,
    embarazo_con_control_parental character varying(255),
    edad_gestacional_ingreso_control_embarazo integer,
    lugar_control_prenatal character varying(255),
    lugar_control_prenatal_otro character varying(255),
    codigo_establecimiento_control_prenatal_embarazo integer,
    tipo_establecimiento_control_prenatal_embarazo character varying(255),
    fecha_1_vdrl_embarazo timestamp(0) without time zone,
    resultado_1_vdrl_embarazo character varying(255),
    resultado_dilucion_1_vdrl_embarazo character varying(255),
    eg_1_dvrl_embarazo character varying(255),
    fecha_2_vdrl_embarazo timestamp(0) without time zone,
    resultado_2_vdrl_embarazo character varying(255),
    resultado_dilucion_2_vdrl_embarazo character varying(255),
    eg_2_dvrl_embarazo integer,
    fecha_3_vdrl_embarazo timestamp(0) without time zone,
    resultado_3_vdrl_embarazo character varying(255),
    resultado_dilucion_3_vdrl_embarazo character varying(255),
    eg_3_dvrl_embarazo integer,
    fecha_examen_treponemico timestamp(0) without time zone,
    resultado_treponemico character varying(255),
    diagnostico_sifilis_embarazo character varying(255),
    tratamiento_sifilis_farmaco character varying(255),
    tratamiento_sifilis_dosis character varying(255),
    tratamiento_sifilis_frecuencia character varying(255),
    acepta_rechaza_toma_examen_vih character varying(255),
    fecha_1_examen_vih_embarazo timestamp(0) without time zone,
    resultado_1_examen_vih_embarazo character varying(255),
    eg_1_examen_vih integer,
    fecha_2_examen_vih_embarazo timestamp(0) without time zone,
    resultado_2_examen_vih_embarazo character varying(255),
    eg_2_examen_vih integer,
    fecha_resultado_final_isp_examen_vih timestamp(0) without time zone,
    fecha_resultado_final_isp_examen_vih_recien_nacido timestamp(0) without time zone,
    resultado_final_isp_examen_vih character varying(255),
    resultado_final_isp_examen_vih_recien_nacido character varying(255),
    derivada_a_especialidades_embarazo character varying(255),
    fecha_ingreso_unacess timestamp(0) without time zone,
    fecha_ingreso_control_unidad_alto_riesgo timestamp(0) without time zone,
    fecha_ingreso_control_centro_atencion_vih timestamp(0) without time zone,
    fecha_ingreso_control_otras_especialidades timestamp(0) without time zone,
    fecha_ingreso_control_otras_especialidades_otro character varying(255),
    terapia_antiretroviral_farmaco_1 character varying(255),
    fecha_inicio_tar_farmaco_1 timestamp(0) without time zone,
    terapia_antiretroviral_tar_farmaco_2 character varying(255),
    fecha_inicio_tar_farmaco_2 timestamp(0) without time zone,
    terapia_antiretroviral_tar_farmaco_3 character varying(255),
    fecha_inicio_tar_farmaco_3 timestamp(0) without time zone,
    numero_cd4_ingreso_control_prenatal integer,
    fecha_examen_linfocitos_cd4_ingreso_control_prenatal timestamp(0) without time zone,
    carga_viral_numero_copia_ingreso_control_prenatal integer,
    fecha_examen_carga_viral_control_prenatal timestamp(0) without time zone,
    numero_carga_viral_control_prenatal integer,
    numero_contactos_sexuales_declarados integer,
    numero_contactos_sexuales_estudiados integer,
    carga_viral_numero_copia_semana_34 timestamp(0) without time zone,
    fecha_examen_carga_viral_semana_34 timestamp(0) without time zone,
    numero_contactos_sexuales_tratados integer,
    lugar_atencion_parto character varying(255),
    codigo_establecimiento integer,
    nombre_establecimiento_sin_codigo character varying(255),
    fecha_parto timestamp(0) without time zone,
    hora_parto timestamp(0) without time zone,
    tipo_parto character varying(255),
    via_parto character varying(255),
    resultado_vdrl_parto character varying(255),
    resultado_dilucion_vdrl_parto character varying(255),
    resultado_examen_treponemico_parto character varying(255),
    tratamiento_sifilis_parto character varying(255),
    resultado_examen_vih_parto character varying(255),
    tratamiento_retroviral_parto character varying(255),
    peso_mujer_parto integer,
    nombre_farmaco_1_vih character varying(255),
    dosis_farmaco_1_vih character varying(255),
    dosis_2_farmaco_1_vih character varying(255),
    fecha_inicio_farmaco_1_vih timestamp(0) without time zone,
    fecha_2_inicio_farmaco_1_vih timestamp(0) without time zone,
    hora_inicio_farmaco_1_vih timestamp(0) without time zone,
    hora_2_inicio_farmaco_1_vih timestamp(0) without time zone,
    nombre_farmaco_2_vih character varying(255),
    dosis_farmaco_2_vih character varying(255),
    fecha_inicio_farmaco_2_vih timestamp(0) without time zone,
    hora_inicio_farmaco_2_vih timestamp(0) without time zone,
    nombre_farmaco_suspencion_lactancia character varying(255),
    fecha_administracion_farmaco_suspencion_lactancia timestamp(0) without time zone,
    estado_recien_nacido character varying(255),
    eg_pediatrica integer,
    sexo_recien_nacido character varying(255),
    peso_recien_nacido integer,
    estado_clinico_recien_nacido character varying(255),
    run_recien_nacido integer,
    fecha_nacimiento_recien_nacido timestamp(0) without time zone,
    hora_nacimiento_recien_nacido timestamp(0) without time zone,
    digito_verificador_recien_nacido character varying(255),
    codigo_recien_nacido character varying(255),
    fecha_examen_vdrl_periferico_recien_nacido timestamp(0) without time zone,
    resultado_vdrl_periferico_recien_nacido character varying(255),
    titulacion_vdrl_periferico_recien_nacido character varying(255),
    fecha_examen_vdrl_liq_cefalo_recien_nacido integer,
    resultado_vdrl_liq_cefalo_recien_nacido character varying(255),
    titulacion_vdrl_liq_cefalo_recien_nacido character varying(255),
    resultado_radiografia_huesos_largos character varying(255),
    resultado_citoquimico_liq_cefalo_raquideo character varying(255),
    resultado_estudio_placentario character varying(255),
    tratamiento_recien_nacido_farmaco character varying(255),
    tratamiento_recien_nacido_dosis character varying(255),
    tratamiento_recien_nacido_frecuencia integer,
    sustituto_leche_materna character varying(255),
    fecha_inicio_sustituto_leche_materna timestamp(0) without time zone,
    hora_inicio_sustituto_leche_materna timestamp(0) without time zone,
    entrega_sustituto_leche_materna_al_alta character varying(255),
    nombre_farmaco_1_vih_recien_nacido character varying(255),
    dosis_farmaco_1_vih_recien_nacido character varying(255),
    fecha_inicio_farmaco_1_vih_recien_nacido timestamp(0) without time zone,
    hora_inicio_farmaco_1_vih_recien_nacido timestamp(0) without time zone,
    nombre_farmaco_2_vih_recien_nacido character varying(255),
    dosis_farmaco_2_vih_recien_nacido character varying(255),
    fecha_inicio_farmaco_2_vih_recien_nacido timestamp(0) without time zone,
    hora_inicio_farmaco_2_vih_recien_nacido timestamp(0) without time zone,
    fecha_1_examen_pcr_recien_nacido timestamp(0) without time zone,
    resultado_1_examen_pcr_recien_nacido character varying(255),
    fecha_2_examen_pcr_recien_nacido timestamp(0) without time zone,
    resultado_2_examen_pcr_recien_nacido character varying(255),
    fecha_3_examen_pcr_recien_nacido timestamp(0) without time zone,
    resultado_3_examen_pcr_recien_nacido character varying(255),
    diagnostico_final_vih_isp_recien_nacido character varying(255),
    fecha_test_elisa_18_meses timestamp(0) without time zone,
    resultado_test_elisa_18_meses character varying(255),
    fecha_examen_treponemico_recien_nacido timestamp(0) without time zone,
    derivacion_recien_nacido_a_seguimiento character varying(255),
    lugar_derivacion_recien_nacido_a_seguimiento character varying(255),
    fecha_ingreso_control_recien_nacido_post_nacimiento timestamp(0) without time zone,
    diagnostico_final_sifilis_recien_nacido character varying(255),
    estado_seguimiento_mes character varying(255),
    estado_seguimiento_3_meses character varying(255),
    estado_seguimiento_6_meses character varying(255),
    estado_seguimiento_12_meses character varying(255),
    estado_seguimiento_18_meses character varying(255),
    mujer_continua_tratamiento_antiretroviral character varying(255),
    fecha_ultima_regla_gestacional timestamp(0) without time zone,
    fecha_ultima_regla_operacional timestamp(0) without time zone,
    pareja_vih_positivo character varying(255),
    fecha_administracion_1_dosis_penicilina_gestante timestamp(0) without time zone,
    fecha_administracion_ult_dosis_penicilina_gestante timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE form_deis OWNER TO postgres;

--
-- Name: form_deis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE form_deis_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE form_deis_id_seq OWNER TO postgres;

--
-- Name: form_deis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE form_deis_id_seq OWNED BY form_deis.id;


--
-- Name: form_deis_inputs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE form_deis_inputs (
    id_input integer NOT NULL,
    table_name character varying(255),
    type character varying(255),
    id character varying(255),
    name character varying(255),
    value character varying(255),
    max_length character varying(255),
    placeholder character varying(255),
    required character varying(255),
    class character varying(255),
    style character varying(255),
    bloque character varying(255),
    seccion character varying(255),
    class_custom character varying(255),
    label character varying(255),
    tag character varying(255),
    subtag character varying(255),
    empty_column character varying(255),
    "order" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    order_layout_form text
);


ALTER TABLE form_deis_inputs OWNER TO postgres;

--
-- Name: form_deis_inputs_id_input_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE form_deis_inputs_id_input_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE form_deis_inputs_id_input_seq OWNER TO postgres;

--
-- Name: form_deis_inputs_id_input_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE form_deis_inputs_id_input_seq OWNED BY form_deis_inputs.id_input;


--
-- Name: log_navegacions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE log_navegacions (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE log_navegacions OWNER TO postgres;

--
-- Name: log_navegacions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE log_navegacions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE log_navegacions_id_seq OWNER TO postgres;

--
-- Name: log_navegacions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE log_navegacions_id_seq OWNED BY log_navegacions.id;


--
-- Name: log_navegations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE log_navegations (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE log_navegations OWNER TO postgres;

--
-- Name: log_navegations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE log_navegations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE log_navegations_id_seq OWNER TO postgres;

--
-- Name: log_navegations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE log_navegations_id_seq OWNED BY log_navegations.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE migrations (
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE migrations OWNER TO postgres;

--
-- Name: pais; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE pais (
    id_pais character varying(255),
    nombre_pais character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE pais OWNER TO postgres;

--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE password_resets OWNER TO postgres;

--
-- Name: region; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE region (
    id_region character varying(255),
    nombre_region character varying(255),
    alias character varying(255),
    orden character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE region OWNER TO postgres;

--
-- Name: servicio_salud; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE servicio_salud (
    id_sericio_salud character varying(255),
    id_region character varying(255),
    nombre_servicio_salud character varying(255),
    orden character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE servicio_salud OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    last_name character varying(255),
    full_name character varying(255),
    "position" character varying(255),
    establecimiento character varying(255),
    rut character varying(255),
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    created_by character varying(255),
    updated_by character varying(255),
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: form_deis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY form_deis ALTER COLUMN id SET DEFAULT nextval('form_deis_id_seq'::regclass);


--
-- Name: form_deis_inputs id_input; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY form_deis_inputs ALTER COLUMN id_input SET DEFAULT nextval('form_deis_inputs_id_input_seq'::regclass);


--
-- Name: log_navegacions id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY log_navegacions ALTER COLUMN id SET DEFAULT nextval('log_navegacions_id_seq'::regclass);


--
-- Name: log_navegations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY log_navegations ALTER COLUMN id SET DEFAULT nextval('log_navegations_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: comuna; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY comuna (id_comuna, id_region, nombre_comuna, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: establecimiento; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY establecimiento (id_establecimiento, id_establecimiento_antiguo, id_servicio, id_region, id_comuna, nombre_establecimiento, tipo_establecimiento, vigencia_desde, fecha_cierre, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: form_deis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY form_deis (id, nombres_madre, primer_apellido_madre, segundo_apellido_madre, fecha_nacimiento_madre, n_correlativo_interno, id_region, id_servicio_salud, run_madre, digito_verificador, edad, nacionalidad, id_pais, pueblos_indigenas, estado_civil, tipo_de_convivencia, escolaridad, anos_estudio, residencia_gestante, nacidos_vivos_previos_embarazo, nacidos_muertos_previos_embarazo, abortos_previos_embarazo, sifilis_previa_embarazo, ano_sifilis_previa_embarazo, otra_its_previa_embarazo, vih_conocido_previa_embarazo, fecha_confirmacion_isp_vih_responde_si, adicciones, fecha_ingreso_control_prenatal_embarazo, embarazo_con_control_parental, edad_gestacional_ingreso_control_embarazo, lugar_control_prenatal, lugar_control_prenatal_otro, codigo_establecimiento_control_prenatal_embarazo, tipo_establecimiento_control_prenatal_embarazo, fecha_1_vdrl_embarazo, resultado_1_vdrl_embarazo, resultado_dilucion_1_vdrl_embarazo, eg_1_dvrl_embarazo, fecha_2_vdrl_embarazo, resultado_2_vdrl_embarazo, resultado_dilucion_2_vdrl_embarazo, eg_2_dvrl_embarazo, fecha_3_vdrl_embarazo, resultado_3_vdrl_embarazo, resultado_dilucion_3_vdrl_embarazo, eg_3_dvrl_embarazo, fecha_examen_treponemico, resultado_treponemico, diagnostico_sifilis_embarazo, tratamiento_sifilis_farmaco, tratamiento_sifilis_dosis, tratamiento_sifilis_frecuencia, acepta_rechaza_toma_examen_vih, fecha_1_examen_vih_embarazo, resultado_1_examen_vih_embarazo, eg_1_examen_vih, fecha_2_examen_vih_embarazo, resultado_2_examen_vih_embarazo, eg_2_examen_vih, fecha_resultado_final_isp_examen_vih, fecha_resultado_final_isp_examen_vih_recien_nacido, resultado_final_isp_examen_vih, resultado_final_isp_examen_vih_recien_nacido, derivada_a_especialidades_embarazo, fecha_ingreso_unacess, fecha_ingreso_control_unidad_alto_riesgo, fecha_ingreso_control_centro_atencion_vih, fecha_ingreso_control_otras_especialidades, fecha_ingreso_control_otras_especialidades_otro, terapia_antiretroviral_farmaco_1, fecha_inicio_tar_farmaco_1, terapia_antiretroviral_tar_farmaco_2, fecha_inicio_tar_farmaco_2, terapia_antiretroviral_tar_farmaco_3, fecha_inicio_tar_farmaco_3, numero_cd4_ingreso_control_prenatal, fecha_examen_linfocitos_cd4_ingreso_control_prenatal, carga_viral_numero_copia_ingreso_control_prenatal, fecha_examen_carga_viral_control_prenatal, numero_carga_viral_control_prenatal, numero_contactos_sexuales_declarados, numero_contactos_sexuales_estudiados, carga_viral_numero_copia_semana_34, fecha_examen_carga_viral_semana_34, numero_contactos_sexuales_tratados, lugar_atencion_parto, codigo_establecimiento, nombre_establecimiento_sin_codigo, fecha_parto, hora_parto, tipo_parto, via_parto, resultado_vdrl_parto, resultado_dilucion_vdrl_parto, resultado_examen_treponemico_parto, tratamiento_sifilis_parto, resultado_examen_vih_parto, tratamiento_retroviral_parto, peso_mujer_parto, nombre_farmaco_1_vih, dosis_farmaco_1_vih, dosis_2_farmaco_1_vih, fecha_inicio_farmaco_1_vih, fecha_2_inicio_farmaco_1_vih, hora_inicio_farmaco_1_vih, hora_2_inicio_farmaco_1_vih, nombre_farmaco_2_vih, dosis_farmaco_2_vih, fecha_inicio_farmaco_2_vih, hora_inicio_farmaco_2_vih, nombre_farmaco_suspencion_lactancia, fecha_administracion_farmaco_suspencion_lactancia, estado_recien_nacido, eg_pediatrica, sexo_recien_nacido, peso_recien_nacido, estado_clinico_recien_nacido, run_recien_nacido, fecha_nacimiento_recien_nacido, hora_nacimiento_recien_nacido, digito_verificador_recien_nacido, codigo_recien_nacido, fecha_examen_vdrl_periferico_recien_nacido, resultado_vdrl_periferico_recien_nacido, titulacion_vdrl_periferico_recien_nacido, fecha_examen_vdrl_liq_cefalo_recien_nacido, resultado_vdrl_liq_cefalo_recien_nacido, titulacion_vdrl_liq_cefalo_recien_nacido, resultado_radiografia_huesos_largos, resultado_citoquimico_liq_cefalo_raquideo, resultado_estudio_placentario, tratamiento_recien_nacido_farmaco, tratamiento_recien_nacido_dosis, tratamiento_recien_nacido_frecuencia, sustituto_leche_materna, fecha_inicio_sustituto_leche_materna, hora_inicio_sustituto_leche_materna, entrega_sustituto_leche_materna_al_alta, nombre_farmaco_1_vih_recien_nacido, dosis_farmaco_1_vih_recien_nacido, fecha_inicio_farmaco_1_vih_recien_nacido, hora_inicio_farmaco_1_vih_recien_nacido, nombre_farmaco_2_vih_recien_nacido, dosis_farmaco_2_vih_recien_nacido, fecha_inicio_farmaco_2_vih_recien_nacido, hora_inicio_farmaco_2_vih_recien_nacido, fecha_1_examen_pcr_recien_nacido, resultado_1_examen_pcr_recien_nacido, fecha_2_examen_pcr_recien_nacido, resultado_2_examen_pcr_recien_nacido, fecha_3_examen_pcr_recien_nacido, resultado_3_examen_pcr_recien_nacido, diagnostico_final_vih_isp_recien_nacido, fecha_test_elisa_18_meses, resultado_test_elisa_18_meses, fecha_examen_treponemico_recien_nacido, derivacion_recien_nacido_a_seguimiento, lugar_derivacion_recien_nacido_a_seguimiento, fecha_ingreso_control_recien_nacido_post_nacimiento, diagnostico_final_sifilis_recien_nacido, estado_seguimiento_mes, estado_seguimiento_3_meses, estado_seguimiento_6_meses, estado_seguimiento_12_meses, estado_seguimiento_18_meses, mujer_continua_tratamiento_antiretroviral, fecha_ultima_regla_gestacional, fecha_ultima_regla_operacional, pareja_vih_positivo, fecha_administracion_1_dosis_penicilina_gestante, fecha_administracion_ult_dosis_penicilina_gestante, created_at, updated_at) FROM stdin;
1	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:01:28	2017-10-30 10:01:28
2	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:11:54	2017-10-30 10:11:54
3	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:16:57	2017-10-30 10:16:57
4	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:19:23	2017-10-30 10:19:23
5	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:19:48	2017-10-30 10:19:48
6	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:20:42	2017-10-30 10:20:42
7	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:21:09	2017-10-30 10:21:09
8	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:21:31	2017-10-30 10:21:31
9	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:21:48	2017-10-30 10:21:48
10	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:23:16	2017-10-30 10:23:16
11	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:33:02	2017-10-30 10:33:02
12	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:41:02	2017-10-30 10:41:02
13	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:41:39	2017-10-30 10:41:39
14	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:42:33	2017-10-30 10:42:33
15	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 10:49:05	2017-10-30 10:49:05
16	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 12:44:52	2017-10-30 12:44:52
17	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 12:46:48	2017-10-30 12:46:48
18	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 12:49:33	2017-10-30 12:49:33
19	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 12:51:07	2017-10-30 12:51:07
20	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 12:51:19	2017-10-30 12:51:19
21	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 12:58:53	2017-10-30 12:58:53
22	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 12:59:20	2017-10-30 12:59:20
23	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:00:18	2017-10-30 13:00:18
24	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:02:40	2017-10-30 13:02:40
25	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:03:44	2017-10-30 13:03:44
26	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:04:06	2017-10-30 13:04:06
27	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:04:52	2017-10-30 13:04:52
28	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:33:32	2017-10-30 13:33:32
29	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:41:35	2017-10-30 13:41:35
30	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:42:16	2017-10-30 13:42:16
31	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:44:22	2017-10-30 13:44:22
32	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:46:01	2017-10-30 13:46:01
33	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:50:18	2017-10-30 13:50:18
34	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:51:45	2017-10-30 13:51:45
35	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:52:18	2017-10-30 13:52:18
36	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:53:28	2017-10-30 13:53:28
37	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:55:42	2017-10-30 13:55:42
38	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 13:56:06	2017-10-30 13:56:06
39	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 14:18:29	2017-10-30 14:18:29
40	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 14:18:32	2017-10-30 14:18:32
41	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 14:24:36	2017-10-30 14:24:36
42	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 14:25:10	2017-10-30 14:25:10
43	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 14:29:20	2017-10-30 14:29:20
44	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 14:29:31	2017-10-30 14:29:31
45	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 14:32:03	2017-10-30 14:32:03
46	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2017-10-30 14:37:57	2017-10-30 14:37:57
\.


--
-- Data for Name: form_deis_inputs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY form_deis_inputs (id_input, table_name, type, id, name, value, max_length, placeholder, required, class, style, bloque, seccion, class_custom, label, tag, subtag, empty_column, "order", created_at, updated_at, order_layout_form) FROM stdin;
2	form_deis_inputs	number	n_correlativo_interno	n_correlativo_interno							sin_examenes	identificacion_mujer	col-sm-3 col-md-3	Nº Correlativo Minsal	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:29:48	2
7	form_deis_inputs	select	nacionalidad	nacionalidad							sin_examenes	identificacion_mujer	col-sm-3 col-md-3	Nacionalidad	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	7
16	form_deis_inputs	select	lugar_control_prenatal	lugar_control_prenatal							sin_examenes	control_embarazo	col-sm-3 col-md-3	Lugar control prenatal	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	16
19	form_deis_inputs	select	resultado_1_vdrl_embarazo	resultado_1_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Resultado 1º VDRL  en este embarazo	\N	\N	\N	2.	2017-10-30 10:00:24	2017-10-30 14:15:12	19
8	form_deis_inputs	select	pais_origen	pais_origen							sin_examenes	identificacion_mujer	col-sm-3 col-md-3	País de origen	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	8
9	form_deis_inputs	select	pueblos_indigenas	pueblos_indigenas							sin_examenes	identificacion_mujer	col-sm-3 col-md-3	Pueblos indígenas	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	9
10	form_deis_inputs	select	embarazo_con_control_parental	embarazo_con_control_parental							sin_examenes	control_embarazo	col-sm-3 col-md-3	¿Embarazo controlado?	Datos del Embarazo	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	10
12	form_deis_inputs	date	fecha_ultima_regla_gestacional	fecha_ultima_regla_gestacional							sin_examenes	control_embarazo	col-sm-3 col-md-3	FUR Gestacional	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	12
18	form_deis_inputs	select	resultado_dilucion_1_vdrl_embarazo	resultado_dilucion_1_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Resultado dilución  1º VDRL  en este embarazo	Exámenes detección de sífilis	Examen 1	\N	1.	2017-10-30 10:00:24	2017-10-30 14:15:12	18
20	form_deis_inputs	date	fecha_1_vdrl_embarazo	fecha_1_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Fecha 1º VDRL de este embarazo	\N	\N	\N	3.	2017-10-30 10:00:24	2017-10-30 14:15:12	20
27	form_deis_inputs	select	resultado_3_vdrl_embarazo	resultado_3_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Resultado 3º VDRL	\N	\N	\N	2.	2017-10-30 10:00:25	2017-10-30 14:15:12	27
21	form_deis_inputs	select	eg_1_dvrl_embarazo	eg_1_dvrl_embarazo			Ej: 1				sin_examenes	control_embarazo	col-sm-3 col-md-3	EG 1º VDRL	\N	\N	\N	4.	2017-10-30 10:00:25	2017-10-30 14:15:12	21
23	form_deis_inputs	select	resultado_2_vdrl_embarazo	resultado_2_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Resultado 2º VDRL	\N	\N	\N	2.	2017-10-30 10:00:25	2017-10-30 14:15:12	23
6	form_deis_inputs	date	fecha_nacimiento_madre	fecha_nacimiento_madre							sin_examenes	identificacion_mujer	col-sm-3 col-md-3	Fecha de nacimiento	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	6
26	form_deis_inputs	select	resultado_dilucion_3_vdrl_embarazo	resultado_dilucion_3_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Resultado dilución  3º VDRL	\N	Examen 3	\N	1.	2017-10-30 10:00:25	2017-10-30 14:15:12	26
25	form_deis_inputs	select	eg_2_dvrl_embarazo	eg_2_dvrl_embarazo			Ej: 1				sin_examenes	control_embarazo	col-sm-3 col-md-3	EG 2º VDRL	\N	\N	\N	4.	2017-10-30 10:00:25	2017-10-30 14:15:12	25
24	form_deis_inputs	date	fecha_2_vdrl_embarazo	fecha_2_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Fecha 2º VDRL	\N	\N	\N	3.	2017-10-30 10:00:25	2017-10-30 14:15:12	24
30	form_deis_inputs	date	fecha_administracion_1_dosis_penicilina_gestante	fecha_administracion_1_dosis_penicilina_gestante							sin_examenes	control_embarazo	col-sm-3 col-md-3	Fecha administración primera dosis penicilina	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	30
29	form_deis_inputs	select	eg_3_dvrl_embarazo	eg_3_dvrl_embarazo			Ej: 1				sin_examenes	control_embarazo	col-sm-3 col-md-3	EG 3º VDRL	\N	\N	\N	4.	2017-10-30 10:00:25	2017-10-30 14:15:12	29
28	form_deis_inputs	date	fecha_3_vdrl_embarazo	fecha_3_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Fecha 3º VDRL	\N	\N	\N	3.	2017-10-30 10:00:25	2017-10-30 14:15:12	28
42	form_deis_inputs	date	fecha_ingreso_unacess	fecha_ingreso_unacess							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Fecha de ingreso a UNACESS	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	42
38	form_deis_inputs	select	resultado_final_isp_examen_vih	resultado_final_isp_examen_vih							sin_examenes	control_embarazo	col-sm-4 col-md-4	Resultado final ISP examen VIH	\N	Resultado de examen ISP	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	38
33	form_deis_inputs	date	fecha_1_examen_vih_embarazo	fecha_1_examen_vih_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Fecha 1º examen VIH  en este embarazo	\N	\N	\N	2.	2017-10-30 10:00:25	2017-10-30 14:15:12	33
34	form_deis_inputs	select	eg_1_examen_vih	eg_1_examen_vih			Ej: 1				sin_examenes	control_embarazo	col-sm-3 col-md-3	EG del 1° examen VIH	\N	\N	col-sm-3 col-md-3	3.	2017-10-30 10:00:25	2017-10-30 14:15:12	34
35	form_deis_inputs	select	resultado_2_examen_vih_embarazo	resultado_2_examen_vih_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Resultado  2º examen VIH	\N	Segundo Examen	\N	1.	2017-10-30 10:00:25	2017-10-30 14:15:12	35
37	form_deis_inputs	select	eg_2_examen_vih	eg_2_examen_vih			Ej: 1				sin_examenes	control_embarazo	col-sm-3 col-md-3	EG del 2° examen VIH	\N	\N	\N	3.	2017-10-30 10:00:25	2017-10-30 14:15:12	37
36	form_deis_inputs	date	fecha_2_examen_vih_embarazo	fecha_2_examen_vih_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Fecha 2º examen VIH	\N	\N	\N	2.	2017-10-30 10:00:25	2017-10-30 14:15:12	36
40	form_deis_inputs	select	derivada_a_especialidades_embarazo	derivada_a_especialidades_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Derivada a especialidades en este embarazo	Derivación a especialidades por sífilis o VIH	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	40
31	form_deis_inputs	select	acepta_rechaza_toma_examen_vih	acepta_rechaza_toma_examen_vih							sin_examenes	control_embarazo	col-sm-3 col-md-3	Acepta/rechaza toma de examen VIH	Exámenes de detección de VIH	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	31
1	form_deis_inputs	text	run_madre	run_madre			Ej: 123456789				sin_examenes	identificacion_mujer	col-sm-3 col-md-3	Run madre	Datos de identificación de la madre	\N	col-md-6 col-md-6	\N	2017-10-30 10:00:24	2017-10-30 14:29:39	1
43	form_deis_inputs	date	fecha_ingreso_control_otras_especialidades	fecha_ingreso_control_otras_especialidades							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Fecha de ingreso a control en otro lugar	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	43
13	form_deis_inputs	date	fecha_ultima_regla_operacional	fecha_ultima_regla_operacional							sin_examenes	control_embarazo	col-sm-3 col-md-3	FUR Operacional	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	13
14	form_deis_inputs	number	edad_gestacional_ingreso_control_embarazo	edad_gestacional_ingreso_control_embarazo			Ej: 1				sin_examenes	control_embarazo	col-sm-3 col-md-3	Edad gestacional al ingreso	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	14
4	form_deis_inputs	text	primer_apellido_madre	primer_apellido_madre			Ej: Apellido1				sin_examenes	identificacion_mujer	col-sm-3 col-md-3	Primer apellido	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:11:14	4
58	form_deis_inputs	select	resultado_treponemico	resultado_treponemico							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Resultado treponémico	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	58
48	form_deis_inputs	number	anos_estudio	anos_estudio			Ej: 5				sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Años de estudios	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	48
49	form_deis_inputs	select	residencia_gestante	residencia_gestante							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Residencia de la gestante	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	49
52	form_deis_inputs	number	abortos_previos_embarazo	abortos_previos_embarazo			Ej: 0				sin_examenes	patologias_sifilis	col-md-3 col-md-3	Abortos previos a este embarazo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	52
53	form_deis_inputs	select	adicciones	adicciones							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Adicciones	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	53
55	form_deis_inputs	number	ano_sifilis_previa_embarazo	ano_sifilis_previa_embarazo			Ej: 2010				sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Año sífilis previo a este embarazo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	55
56	form_deis_inputs	select	otra_its_previa_embarazo	otra_its_previa_embarazo							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Otras ITS  previas a este embarazo	\N	\N	col-sm-3 col-md-3	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	56
65	form_deis_inputs	number	numero_contactos_sexuales_declarados	numero_contactos_sexuales_declarados			Ej: 0				sin_examenes	patologias_sifilis	col-md-4 col-md-4	Número de parejas declaradas	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	65
57	form_deis_inputs	date	fecha_examen_treponemico	fecha_examen_treponemico							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Fecha examen treponémico	Control de la sífilis en este embarazo	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	57
79	form_deis_inputs	select	adicciones	adicciones							sin_examenes	patologias_vih	col-sm-3 col-md-3	Adicciones	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	79
54	form_deis_inputs	select	sifilis_previa_embarazo	sifilis_previa_embarazo			Ej: 0				sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Sífilis previo a este embarazo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	54
61	form_deis_inputs	select	tratamiento_sifilis_dosis	tratamiento_sifilis_dosis							sin_examenes	patologias_sifilis	col-sm-4 col-md-4	Tratamiento sífilis dosis	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	61
60	form_deis_inputs	select	tratamiento_sifilis_farmaco	tratamiento_sifilis_farmaco							sin_examenes	patologias_sifilis	col-sm-4 col-md-4	Tratamiento sífilis  fármaco	Tratamiento de Sífilis de la Gestante	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	60
62	form_deis_inputs	select	tratamiento_sifilis_frecuencia	tratamiento_sifilis_frecuencia							sin_examenes	patologias_sifilis	col-sm-4 col-md-4	Tratamiento Sifilis Frecuencia	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	62
63	form_deis_inputs	date	fecha_administracion_1_dosis_penicilina_gestante	fecha_administracion_1_dosis_penicilina_gestante							sin_examenes	patologias_sifilis	\N	Fecha administración primera dosis penicilina	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	63
66	form_deis_inputs	number	numero_contactos_sexuales_estudiados	numero_contactos_sexuales_estudiados			Ej: 0				sin_examenes	patologias_sifilis	col-md-4 col-md-4	Número de parejas estudiadas	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	66
70	form_deis_inputs	date	fecha_ingreso_control_otras_especialidades	fecha_ingreso_control_otras_especialidades							sin_examenes	patologias_vih	col-sm-3 col-md-3	Fecha de ingreso a control en otro lugar	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	70
85	form_deis_inputs	number	numero_cd4_ingreso_control_prenatal	numero_cd4_ingreso_control_prenatal							sin_examenes	patologias_vih	col-md-8 col-md-8	Resultado CD4	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	85
67	form_deis_inputs	number	numero_contactos_sexuales_tratados	numero_contactos_sexuales_tratados			Ej: 0				sin_examenes	patologias_sifilis	col-md-4 col-md-4	Número de parejas tratadas	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	67
68	form_deis_inputs	date	fecha_ingreso_control_unidad_alto_riesgo	fecha_ingreso_control_unidad_alto_riesgo							sin_examenes	patologias_vih	col-sm-3 col-md-3	Fecha de ingreso a ALTO RIESGO	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	68
69	form_deis_inputs	date	fecha_ingreso_control_centro_atencion_vih	fecha_ingreso_control_centro_atencion_vih							sin_examenes	patologias_vih	col-sm-3 col-md-3	Fecha de ingreso a centro de atención VIH	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	69
81	form_deis_inputs	number	numero_contactos_sexuales_declarados	numero_contactos_sexuales_declarados			Ej: 0				sin_examenes	patologias_vih	col-md-4 col-md-4	Número de parejas declaradas	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	81
47	form_deis_inputs	select	escolaridad	escolaridad							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Nivel de escolaridad	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	47
71	form_deis_inputs	text	fecha_ingreso_control_otras_especialidades_otro	fecha_ingreso_control_otras_especialidades_otro			Ej: Otro lugar especialidad				sin_examenes	patologias_vih	col-sm-3 col-md-3	Otro lugar de especialidades	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	71
72	form_deis_inputs	select	estado_civil	estado_civil							sin_examenes	patologias_vih	col-sm-3 col-md-3	Estado civil	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	72
73	form_deis_inputs	select	tipo_de_convivencia	tipo_de_convivencia							sin_examenes	patologias_vih	col-sm-3 col-md-3	Tipo de convivencia	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	73
74	form_deis_inputs	select	escolaridad	escolaridad							sin_examenes	patologias_vih	col-sm-3 col-md-3	Nivel de escolaridad	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	74
75	form_deis_inputs	number	anos_estudio	anos_estudio			Ej: 5				sin_examenes	patologias_vih	col-sm-3 col-md-3	Años de estudios	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	75
78	form_deis_inputs	date	fecha_confirmacion_isp_vih_responde_si	fecha_confirmacion_isp_vih_responde_si							sin_examenes	patologias_vih	col-sm-3 col-md-3	Fecha confirmación ISP de VIH	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	78
80	form_deis_inputs	select	pareja_vih_positivo	pareja_vih_positivo							sin_examenes	patologias_vih	col-sm-3 col-md-3	Pareja VIH positivo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	80
82	form_deis_inputs	number	numero_contactos_sexuales_estudiados	numero_contactos_sexuales_estudiados			Ej: 0				sin_examenes	patologias_vih	col-md-4 col-md-4	Número de parejas estudiadas	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	82
83	form_deis_inputs	number	numero_contactos_sexuales_tratados	numero_contactos_sexuales_tratados			Ej: 0				sin_examenes	patologias_vih	col-md-4 col-md-4	Número de parejas tratadas	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	83
84	form_deis_inputs	date	fecha_examen_linfocitos_cd4_ingreso_control_prenatal	fecha_examen_linfocitos_cd4_ingreso_control_prenatal							sin_examenes	patologias_vih	col-md-4 col-md-4	Fecha de Examen de Linfocitos CD4	Control del VIH en este embarazo	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	84
46	form_deis_inputs	select	tipo_de_convivencia	tipo_de_convivencia							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Tipo de convivencia	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	46
92	form_deis_inputs	select	terapia_antiretroviral_tar_farmaco_2	terapia_antiretroviral_tar_farmaco_2							sin_examenes	patologias_vih	\N	Fármaco 2	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	92
91	form_deis_inputs	date	fecha_inicio_tar_farmaco_1	fecha_inicio_tar_farmaco_1							sin_examenes	patologias_vih	\N	Fecha de inicio fármaco 1	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:37:09	91
94	form_deis_inputs	select	terapia_antiretroviral_tar_farmaco_3	terapia_antiretroviral_tar_farmaco_3							sin_examenes	patologias_vih	\N	Fármaco 3	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	94
95	form_deis_inputs	date	fecha_inicio_tar_farmaco_3	fecha_inicio_tar_farmaco_3							sin_examenes	patologias_vih	\N	Fecha de Inicio Fármaco 3	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	95
97	form_deis_inputs	select	lugar_atencion_parto	lugar_atencion_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Lugar del parto	Datos del Parto	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	97
87	form_deis_inputs	number	numero_carga_viral_control_prenatal	numero_carga_viral_control_prenatal							sin_examenes	patologias_vih	col-md-8 col-md-8	Resultado Carga Viral	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	87
88	form_deis_inputs	date	fecha_examen_carga_viral_semana_34	fecha_examen_carga_viral_semana_34							sin_examenes	patologias_vih	col-md-4 col-md-4	Fecha de Examen de Carga Viral	Exámenes Semana 34	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	88
89	form_deis_inputs	number	carga_viral_numero_copia_semana_34	carga_viral_numero_copia_semana_34							sin_examenes	patologias_vih	col-md-8 col-md-8	Resultado Carga Viral	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	89
98	form_deis_inputs	number	codigo_establecimiento	codigo_establecimiento			Ej: 123456				sin_examenes	datos_parto	col-sm-2 col-md-2	Codigo del Establecimiento	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	98
100	form_deis_inputs	select	tipo_establecimiento	tipo_establecimiento							sin_examenes	datos_parto	col-sm-3 col-md-3	Tipo de Establecimiento	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	100
101	form_deis_inputs	date	fecha_parto	fecha_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Fecha del parto / nacimiento	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	101
102	form_deis_inputs	time	hora_parto	hora_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Hora del parto/nacimiento	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	102
103	form_deis_inputs	select	tipo_parto	tipo_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Tipo de Parto	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	103
104	form_deis_inputs	select	via_parto	via_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Via del Parto	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	104
105	form_deis_inputs	select	resultado_vdrl_parto	resultado_vdrl_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Resultado VDRL	\N	Examenes de sífilis durante el parto	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	105
106	form_deis_inputs	select	resultado_dilucion_vdrl_parto	resultado_dilucion_vdrl_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Resultado Titulado (Dilución)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	106
108	form_deis_inputs	select	tratamiento_sifilis_parto	tratamiento_sifilis_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Tratamiento de Sifilis al Parto	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	108
109	form_deis_inputs	select	resultado_examen_vih_parto	resultado_examen_vih_parto							sin_examenes	datos_parto	\N	Resultado Examen VIH Parto	\N	Examenes de VIH durante el parto	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	109
110	form_deis_inputs	select	tratamiento_retroviral_parto	tratamiento_retroviral_parto							sin_examenes	datos_parto	\N	Tratamiento antiretroviral al parto	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	110
93	form_deis_inputs	date	fecha_inicio_tar_farmaco_2	fecha_inicio_tar_farmaco_2							sin_examenes	patologias_vih	\N	Fecha de inicio fármaco 2	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:36:50	93
112	form_deis_inputs	select	nombre_farmaco_1_vih	nombre_farmaco_1_vih							sin_examenes	datos_parto	col-sm-3 col-md-3	Nombre fármaco 1 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:36:36	112
114	form_deis_inputs	date	fecha_inicio_farmaco_1_vih	fecha_inicio_farmaco_1_vih							sin_examenes	datos_parto	col-sm-3 col-md-3	Fecha de inicio fármaco 1 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:36:21	114
115	form_deis_inputs	time	hora_inicio_farmaco_1_vih	hora_inicio_farmaco_1_vih							sin_examenes	datos_parto	col-sm-3 col-md-3	Hora de inicio  fármaco 1 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:36:14	115
116	form_deis_inputs	text	dosis_2_farmaco_1_vih	dosis_2_farmaco_1_vih			Ej: Carga n° 2				sin_examenes	datos_parto	col-sm-3 col-md-3 col-md-offset-3	Dosis carga 2 fármaco 1 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:36:07	116
117	form_deis_inputs	date	fecha_2_inicio_farmaco_1_vih	fecha_2_inicio_farmaco_1_vih							sin_examenes	datos_parto	col-sm-3 col-md-3	Fecha de inicio carga 2 fármaco 1 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:35:59	117
119	form_deis_inputs	select	nombre_farmaco_2_vih	nombre_farmaco_2_vih							sin_examenes	datos_parto	col-sm-3 col-md-3	Nombre Fármaco 2 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:35:33	119
120	form_deis_inputs	text	dosis_farmaco_2_vih	dosis_farmaco_2_vih			Ej: Dosis de cantidad / horas				sin_examenes	datos_parto	col-sm-3 col-md-3	Dosis Fármaco 2 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:35:29	120
121	form_deis_inputs	date	fecha_inicio_farmaco_2_vih	fecha_inicio_farmaco_2_vih							sin_examenes	datos_parto	col-sm-3 col-md-3	Fecha de Inicio  Fármaco 2 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:35:24	121
123	form_deis_inputs	select	nombre_farmaco_suspencion_lactancia	nombre_farmaco_suspencion_lactancia							sin_examenes	datos_parto	\N	Nombre del  Fármaco para suspender la lactancia	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	123
125	form_deis_inputs	number	run_recien_nacido	run_recien_nacido			Ej: 123456789				sin_examenes	datos_recien_nacido	col-sm-2 col-md-2	Run Recién Nacido	Datos del Recién Nacido	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	125
126	form_deis_inputs	date	fecha_nacimiento_recien_nacido	fecha_nacimiento_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-2 col-md-2	Fecha de Nacimiento	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	126
129	form_deis_inputs	number	peso_recien_nacido	peso_recien_nacido			Ej: 3300			min-width: 110px !important;	sin_examenes	datos_recien_nacido	col-sm-1 col-md-1	Peso (grs)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	129
122	form_deis_inputs	time	hora_inicio_farmaco_2_vih	hora_inicio_farmaco_2_vih							sin_examenes	datos_parto	col-sm-3 col-md-3	Hora de Inicio  Fármaco 2 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:35:19	122
127	form_deis_inputs	time	hora_nacimiento_recien_nacido	hora_nacimiento_recien_nacido						min-width: 80px !important;	sin_examenes	datos_recien_nacido	col-sm-1 col-md-1	Hora	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	127
128	form_deis_inputs	number	eg_pediatrica	eg_pediatrica			Ej: 1			min-width: 80px !important;	sin_examenes	datos_recien_nacido	col-sm-1 col-md-1	EG Pediat.	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	128
86	form_deis_inputs	date	fecha_examen_carga_viral_control_prenatal	fecha_examen_carga_viral_control_prenatal							sin_examenes	patologias_vih	col-md-4 col-md-4	Fecha de Examen de Carga Viral	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	86
141	form_deis_inputs	select	tratamiento_recien_nacido_farmaco	tratamiento_recien_nacido_farmaco							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Fármaco	Tratamiento sífilis	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:32:43	141
131	form_deis_inputs	select	sexo_recien_nacido	sexo_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-2 col-md-2	Sexo Recién Nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	131
132	form_deis_inputs	date	fecha_examen_vdrl_periferico_recien_nacido	fecha_examen_vdrl_periferico_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Fecha de exámen  VDRL periférico del Recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	132
134	form_deis_inputs	select	titulacion_vdrl_periferico_recien_nacido	titulacion_vdrl_periferico_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Titulación  de VDRL periférico del Recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	134
135	form_deis_inputs	date	fecha_examen_vdrl_liq_cefalo_recien_nacido	fecha_examen_vdrl_liq_cefalo_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Fecha de examen VDRL líquido céfalo raquídeo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	135
136	form_deis_inputs	select	resultado_vdrl_liq_cefalo_recien_nacido	resultado_vdrl_liq_cefalo_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Resultado de VDRL líquido céfalo raquídeo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	136
137	form_deis_inputs	select	titulacion_vdrl_liq_cefalo_recien_nacido	titulacion_vdrl_liq_cefalo_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Titulación  de VDRL líquido céfalo raquídeo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	137
138	form_deis_inputs	select	resultado_radiografia_huesos_largos	resultado_radiografia_huesos_largos							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Resultado de Radiografía de huesos largos	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	138
140	form_deis_inputs	select	resultado_estudio_placentario	resultado_estudio_placentario							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Resultado Estudio Placentario	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	140
150	form_deis_inputs	select	nombre_farmaco_1_vih_recien_nacido	nombre_farmaco_1_vih_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Nombre fármaco 1 (VIH) recién nacido	\N	Fármaco 1 recién nacido	\N	\N	2017-10-30 10:00:25	2017-10-30 14:33:09	150
142	form_deis_inputs	text	tratamiento_recien_nacido_dosis	tratamiento_recien_nacido_dosis			Ej: Dosis de cantidad / horas				sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Dosis	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	142
143	form_deis_inputs	number	tratamiento_recien_nacido_frecuencia	tratamiento_recien_nacido_frecuencia			Ej: 5				sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Frecuencia N° de Días	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	143
145	form_deis_inputs	select	resultado_examen_treponemico_parto	resultado_examen_treponemico_parto							sin_examenes	datos_recien_nacido	\N	\N	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	145
147	form_deis_inputs	date	fecha_inicio_sustituto_leche_materna	fecha_inicio_sustituto_leche_materna							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Fecha inicio Sustituto de Leche Materna	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	147
149	form_deis_inputs	select	entrega_sustituto_leche_materna_al_alta	entrega_sustituto_leche_materna_al_alta							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	¿Entrega de Sustituto de Leche Materna al alta?	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	149
152	form_deis_inputs	time	hora_inicio_farmaco_1_vih_recien_nacido	hora_inicio_farmaco_1_vih_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Hora de inicio  fármaco 1 (VIH) recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:33:38	152
153	form_deis_inputs	text	dosis_farmaco_1_vih_recien_nacido	dosis_farmaco_1_vih_recien_nacido			Ej: Dosis de cantidid / horas				sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Dosis fármaco 1 (VIH) recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:33:51	153
155	form_deis_inputs	date	fecha_inicio_farmaco_2_vih_recien_nacido	fecha_inicio_farmaco_2_vih_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Fecha de inicio  fármaco 2 (VIH) recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:34:27	155
154	form_deis_inputs	select	nombre_farmaco_2_vih_recien_nacido	nombre_farmaco_2_vih_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Nombre fármaco 2 (VIH) recién nacido	\N	Fármaco 2 recién nacido	\N	\N	2017-10-30 10:00:25	2017-10-30 14:34:11	154
157	form_deis_inputs	text	dosis_farmaco_2_vih_recien_nacido	dosis_farmaco_2_vih_recien_nacido			Ej: Dosis de cantidid / horas				sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Dosis fármaco 2 (VIH) recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:34:56	157
158	form_deis_inputs	date	fecha_1_examen_pcr_recien_nacido	fecha_1_examen_pcr_recien_nacido							sin_examenes	datos_recien_nacido	\N	Fecha 1° exámen de PCR recién nacido	\N	Exámenes PCR del recién nacido	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	158
159	form_deis_inputs	select	resultado_1_examen_pcr_recien_nacido	resultado_1_examen_pcr_recien_nacido							sin_examenes	datos_recien_nacido	\N	Resultado  1° exámen de PCR recien nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	159
160	form_deis_inputs	date	fecha_2_examen_pcr_recien_nacido	fecha_2_examen_pcr_recien_nacido							sin_examenes	datos_recien_nacido	\N	Fecha 2° exámen de PCR recien nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	160
161	form_deis_inputs	select	resultado_2_examen_pcr_recien_nacido	resultado_2_examen_pcr_recien_nacido							sin_examenes	datos_recien_nacido	\N	Resultado  2° exámen de PCR recien nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	161
162	form_deis_inputs	date	fecha_3_examen_pcr_recien_nacido	fecha_3_examen_pcr_recien_nacido							sin_examenes	datos_recien_nacido	\N	Fecha 3° exámen de PCR recien nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	162
165	form_deis_inputs	select	resultado_test_elisa_18_meses	resultado_test_elisa_18_meses							sin_examenes	datos_recien_nacido	\N	Resultado Test de Elisa a los 18 meses de edad	\N	Resultados Test Elisa	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	165
166	form_deis_inputs	date	fecha_test_elisa_18_meses	fecha_test_elisa_18_meses							sin_examenes	datos_recien_nacido	\N	Fecha Test de Elisa 18 meses edad	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	166
167	form_deis_inputs	select	resultado_final_isp_examen_vih_recien_nacido	resultado_final_isp_examen_vih_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-6 col-md-6	Resultado Final ISP Exámen VIH Recién nacido lactante	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	167
130	form_deis_inputs	select	estado_recien_nacido	estado_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-2 col-md-2 col-md-offset-1	Estado del recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	130
146	form_deis_inputs	select	sustituto_leche_materna	sustituto_leche_materna							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	¿Sustituto de Leche Materna?	Seguimiento VIH R.N.	Leche materna	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	146
179	form_deis_inputs	select	servicio_salud	servicio_salud							sin_examenes		\N	Servicio de Salud	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	179
180	form_deis_inputs	text	digito_verificador	digito_verificador							sin_examenes		\N	Dígito Verificador	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	180
181	form_deis_inputs	number	edad	edad							sin_examenes		\N	Edad	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	181
182	form_deis_inputs	text	digito_verificador_recien_nacido	digito_verificador_recien_nacido							sin_examenes		\N	Digito verificador	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	182
183	form_deis_inputs	text	codigo_recien_nacido	codigo_recien_nacido							sin_examenes		\N	Código Recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	183
184	form_deis_inputs	select	diagnostico_final_sifilis_recien_nacido	diagnostico_final_sifilis_recien_nacido							sin_examenes		\N	Diagnóstico final sífilis del Recien Nacido ( examen treponémico)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	184
170	form_deis_inputs	text	lugar_derivacion_recien_nacido_a_seguimiento	lugar_derivacion_recien_nacido_a_seguimiento			Ej: Lugar definido para la derivación				sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Lugar de derivación del recien nacido a seguimiento	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	170
171	form_deis_inputs	date	fecha_ingreso_control_recien_nacido_post_nacimiento	fecha_ingreso_control_recien_nacido_post_nacimiento							sin_examenes	datos_recien_nacido	col-sm-6 col-md-6	Fecha de ingreso a control del recién nacido post nacimiento	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	171
59	form_deis_inputs	select	diagnostico_sifilis_embarazo	diagnostico_sifilis_embarazo							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Diagnostico de Sifilis en Embarazo	\N	\N	col-sm-3 col-md-3	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	59
173	form_deis_inputs	select	estado_seguimiento_3_meses	estado_seguimiento_3_meses							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Estado de seguimiento al tres meses	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	173
174	form_deis_inputs	select	estado_seguimiento_6_meses	estado_seguimiento_6_meses							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Estado de seguimiento a los seis meses	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	174
175	form_deis_inputs	select	estado_seguimiento_12_meses	estado_seguimiento_12_meses							sin_examenes	datos_recien_nacido	col-sm-6 col-md-6	Estado de seguimiento a los doce meses	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	175
177	form_deis_inputs	select	mujer_continua_tratamiento_antiretroviral	mujer_continua_tratamiento_antiretroviral							sin_examenes	datos_recien_nacido	col-md-12	Mujer continua con tratamiento antirretroviral a los 12 meses post parto	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	177
178	form_deis_inputs	select	region	region							sin_examenes		\N	Región	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	178
22	form_deis_inputs	select	resultado_dilucion_2_vdrl_embarazo	resultado_dilucion_2_vdrl_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Resultado Dilución  2º VDRL	\N	Examen 2	\N	1.	2017-10-30 10:00:25	2017-10-30 14:15:12	22
15	form_deis_inputs	select	codigo_establecimiento_control_prenatal_embarazo	codigo_establecimiento_control_prenatal_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Tipo de establecimiento control prenatal	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	15
118	form_deis_inputs	time	hora_2_inicio_farmaco_1_vih	hora_2_inicio_farmaco_1_vih							sin_examenes	datos_parto	col-sm-3 col-md-3	Hora de inicio carga 2 fármaco 1 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:35:47	118
3	form_deis_inputs	text	nombres_madre	nombres_madre			Ej: Nombre1 Nombre2				sin_examenes	identificacion_mujer	col-sm-6 col-md-6	Nombres	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:11:12	3
5	form_deis_inputs	text	segundo_apellido_madre	segundo_apellido_madre			Ej: Apellido2				sin_examenes	identificacion_mujer	col-sm-3 col-md-3	Segundo Apellido	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:11:18	5
11	form_deis_inputs	date	fecha_ingreso_control_prenatal_embarazo	fecha_ingreso_control_prenatal_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Fecha ingreso a control prenatal	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	11
32	form_deis_inputs	select	resultado_1_examen_vih_embarazo	resultado_1_examen_vih_embarazo							sin_examenes	control_embarazo	col-sm-3 col-md-3	Resultado  1º examen VIH	\N	Primer Examen	\N	1.	2017-10-30 10:00:25	2017-10-30 14:15:12	32
39	form_deis_inputs	date	fecha_resultado_final_isp_examen_vih	fecha_resultado_final_isp_examen_vih							sin_examenes	control_embarazo	col-sm-4 col-md-4 col-md-offset-1	Fecha Resultado Final ISP Examen VIH	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	39
44	form_deis_inputs	text	fecha_ingreso_control_otras_especialidades_otro	fecha_ingreso_control_otras_especialidades_otro			Ej: Lugar de Especilidad				sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Otro lugar de especialidades	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	44
45	form_deis_inputs	select	estado_civil	estado_civil							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Estado Civil	\N	Datos Sociodemográficos	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	45
50	form_deis_inputs	number	nacidos_vivos_previos_embarazo	nacidos_vivos_previos_embarazo			Ej: 0				sin_examenes	patologias_sifilis	col-md-3 col-md-3	Nacidos vivos previo al embarazo	Antecedentes	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	50
77	form_deis_inputs	select	vih_conocido_previa_embarazo	vih_conocido_previa_embarazo							sin_examenes	patologias_vih	col-sm-3 col-md-3	VIH conocido previa a este embarazo	Antecedentes	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	77
90	form_deis_inputs	select	terapia_antiretroviral_farmaco_1	terapia_antiretroviral_farmaco_1							sin_examenes	patologias_vih	\N	Fármaco 1	Tratamiento de VIH de la Gestante	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	90
96	form_deis_inputs	text	terapia_antiretroviral_tar_farmaco_3_otro	terapia_antiretroviral_tar_farmaco_3_otro			Ej: Nombre del Fármaco				sin_examenes	patologias_vih	col-md-12	Otro Fármaco, ¿Cual otro?	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	96
99	form_deis_inputs	text	nombre_establecimiento_sin_codigo	nombre_establecimiento_sin_codigo			Ej: Nombre del Establecimiento				sin_examenes	datos_parto	col-sm-4 col-md-4	Nombre Del Establecimiento que no tenga código	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	99
107	form_deis_inputs	select	resultado_examen_treponemico_parto	resultado_examen_treponemico_parto							sin_examenes	datos_parto	col-sm-3 col-md-3	Resultado examen treponémico	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	107
113	form_deis_inputs	text	dosis_farmaco_1_vih	dosis_farmaco_1_vih			Ej: Carga n° 1				sin_examenes	datos_parto	col-sm-3 col-md-3	Dosis fármaco 1 (VIH)	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:36:31	113
168	form_deis_inputs	date	fecha_resultado_final_isp_examen_vih_recien_nacido	fecha_resultado_final_isp_examen_vih_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-6 col-md-6	Fecha Resultado Final ISP Examen VIH Recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	168
169	form_deis_inputs	select	derivacion_recien_nacido_a_seguimiento	derivacion_recien_nacido_a_seguimiento							sin_examenes	datos_recien_nacido	col-sm-2 col-md-2	Derivación del recien nacido	Seguimiento niño expuesto	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	169
163	form_deis_inputs	select	resultado_3_examen_pcr_recien_nacido	resultado_3_examen_pcr_recien_nacido							sin_examenes	datos_recien_nacido	\N	Resultado  3° exámen de PCR recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	163
164	form_deis_inputs	select	diagnostico_final_vih_isp_recien_nacido	diagnostico_final_vih_isp_recien_nacido							sin_examenes	datos_recien_nacido	col-md-12	Diagnóstico Final (VIH) del Instituto de Salud Pública del Recién Nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	164
172	form_deis_inputs	select	estado_seguimiento_mes	estado_seguimiento_mes							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Estado de seguimiento al mes	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	172
17	form_deis_inputs	text	lugar_control_prenatal_otro	lugar_control_prenatal_otro			Ej: Hospital clinico ejemplo				sin_examenes	control_embarazo	col-sm-3 col-md-3	Otro lugar control prenatal: Especifique	\N	\N	\N	\N	2017-10-30 10:00:24	2017-10-30 14:15:12	17
41	form_deis_inputs	date	fecha_ingreso_control_unidad_alto_riesgo	fecha_ingreso_control_unidad_alto_riesgo							sin_examenes	patologias_sifilis	col-sm-3 col-md-3	Fecha de ingreso a ALTO RIESGO	\N	Fechas de ingreso a especialidades	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	41
51	form_deis_inputs	number	nacidos_muertos_previos_embarazo	nacidos_muertos_previos_embarazo			Ej: 0				sin_examenes	patologias_sifilis	col-md-3 col-md-3	Nacidos muertos antes de este embarazo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	51
64	form_deis_inputs	date	fecha_administracion_ult_dosis_penicilina_gestante	fecha_administracion_ult_dosis_penicilina_gestante							sin_examenes	patologias_sifilis	\N	Fecha administración última dosis penicilina	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	64
76	form_deis_inputs	select	residencia_gestante	residencia_gestante							sin_examenes	patologias_vih	col-sm-3 col-md-3	Residencia de la gestante	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:12	76
111	form_deis_inputs	number	peso_mujer_parto	peso_mujer_parto			Ej: 55				sin_examenes	datos_parto	col-md-offset-9 col-md-3	Peso de la mujer al parto	Tratamiento de VIH	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	111
124	form_deis_inputs	date	fecha_administracion_farmaco_suspencion_lactancia	fecha_administracion_farmaco_suspencion_lactancia							sin_examenes	datos_parto	\N	Fecha de administración de fármaco para suspender la lactancia	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	124
133	form_deis_inputs	select	resultado_vdrl_periferico_recien_nacido	resultado_vdrl_periferico_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Resultado de VDRL periférico del recién nacido	Examenes Sifilis	Examenes Sifilis	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	133
139	form_deis_inputs	select	resultado_citoquimico_liq_cefalo_raquideo	resultado_citoquimico_liq_cefalo_raquideo							sin_examenes	datos_recien_nacido	col-sm-4 col-md-4	Resultado de citoquímico de líquido céfalo raquídeo	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	139
144	form_deis_inputs	date	fecha_examen_treponemico_recien_nacido	fecha_examen_treponemico_recien_nacido							sin_examenes	datos_recien_nacido	\N	Fecha examen treponémico del recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:13	144
148	form_deis_inputs	time	hora_inicio_sustituto_leche_materna	hora_inicio_sustituto_leche_materna							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Hora inicio sustituto de leche materna	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	148
176	form_deis_inputs	select	estado_seguimiento_18_meses	estado_seguimiento_18_meses							sin_examenes	datos_recien_nacido	col-sm-6 col-md-6	Estado de seguimiento a los dieciocho meses	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:15:14	176
156	form_deis_inputs	time	hora_inicio_farmaco_2_vih_recien_nacido	hora_inicio_farmaco_2_vih_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Hora de inicio  fármaco 2 (VIH) recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:34:43	156
151	form_deis_inputs	date	fecha_inicio_farmaco_1_vih_recien_nacido	fecha_inicio_farmaco_1_vih_recien_nacido							sin_examenes	datos_recien_nacido	col-sm-3 col-md-3	Fecha de inicio  fármaco 1 (VIH) recién nacido	\N	\N	\N	\N	2017-10-30 10:00:25	2017-10-30 14:35:10	151
\.


--
-- Data for Name: log_navegacions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY log_navegacions (id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: log_navegations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY log_navegations (id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY migrations (migration, batch) FROM stdin;
2014_10_12_000000_create_users_table	1
2014_10_12_100000_create_password_resets_table	1
2017_10_20_183605_create_form_deis_table	1
2017_10_25_140649_create_log_navegations_table	1
2017_10_25_144731_create_log_navegacions_table	1
2017_10_26_060732_create_form_deis_inputs_table	1
2017_10_30_132012_create_establecimiento_table	2
2017_10_30_132029_create_servicio_salud_table	2
2017_10_30_132037_create_region_table	2
2017_10_30_132042_create_comuna_table	2
2017_10_30_132049_create_pais_table	2
\.


--
-- Data for Name: pais; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pais (id_pais, nombre_pais, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: region; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY region (id_region, nombre_region, alias, orden, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: servicio_salud; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY servicio_salud (id_sericio_salud, id_region, nombre_servicio_salud, orden, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, name, last_name, full_name, "position", establecimiento, rut, email, password, created_by, updated_by, remember_token, created_at, updated_at) FROM stdin;
1	Pruebas Minsal	\N	\N	\N	\N	\N	test@minsal.cl	$2y$10$y0DIjpryfeWH.ZFyz6ScnOpJd6CanbbOvBM9fJiRNkUA6V1KrivCy	\N	\N	\N	2017-10-30 10:01:26	2017-10-30 10:01:26
\.


--
-- Name: form_deis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('form_deis_id_seq', 46, true);


--
-- Name: form_deis_inputs_id_input_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('form_deis_inputs_id_input_seq', 184, true);


--
-- Name: log_navegacions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('log_navegacions_id_seq', 1, false);


--
-- Name: log_navegations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('log_navegations_id_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- Name: form_deis_inputs form_deis_inputs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY form_deis_inputs
    ADD CONSTRAINT form_deis_inputs_pkey PRIMARY KEY (id_input);


--
-- Name: form_deis form_deis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY form_deis
    ADD CONSTRAINT form_deis_pkey PRIMARY KEY (id);


--
-- Name: log_navegacions log_navegacions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY log_navegacions
    ADD CONSTRAINT log_navegacions_pkey PRIMARY KEY (id);


--
-- Name: log_navegations log_navegations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY log_navegations
    ADD CONSTRAINT log_navegations_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- Name: password_resets_token_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_token_index ON password_resets USING btree (token);


--
-- PostgreSQL database dump complete
--
