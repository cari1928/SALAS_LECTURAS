--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'SQL_ASCII';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- Name: a�adeest(); Type: FUNCTION; Schema: public; Owner: admin
--

CREATE FUNCTION "a�adeest"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
  BEGIN
       update sala set numalumnos = numalumnos + 1 where cvesala = NEW.cvesala;
       RETURN NEW;
  END;
$$;


ALTER FUNCTION public."a�adeest"() OWNER TO admin;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: abecedario; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE abecedario (
    cve integer NOT NULL,
    letra character varying(1)
);


ALTER TABLE public.abecedario OWNER TO admin;

--
-- Name: abecedario_cve_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE abecedario_cve_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.abecedario_cve_seq OWNER TO admin;

--
-- Name: abecedario_cve_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE abecedario_cve_seq OWNED BY abecedario.cve;


--
-- Name: bitacora_groseria; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE bitacora_groseria (
    cvebitg integer NOT NULL,
    cveusuario character varying(13),
    accion character varying(10),
    contenido character varying(255)
);


ALTER TABLE public.bitacora_groseria OWNER TO admin;

--
-- Name: bitacora_groseria_cvebitg_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE bitacora_groseria_cvebitg_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bitacora_groseria_cvebitg_seq OWNER TO admin;

--
-- Name: bitacora_groseria_cvebitg_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE bitacora_groseria_cvebitg_seq OWNED BY bitacora_groseria.cvebitg;


--
-- Name: comentario; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE comentario (
    cvecomentario integer NOT NULL,
    cvelibro integer,
    cveusuario character varying(13),
    contenido character varying(1000),
    cverespuesta integer,
    num_like integer,
    num_dislike integer,
    fecha date DEFAULT now()
);


ALTER TABLE public.comentario OWNER TO admin;

--
-- Name: comentario_cvecomentario_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE comentario_cvecomentario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.comentario_cvecomentario_seq OWNER TO admin;

--
-- Name: comentario_cvecomentario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE comentario_cvecomentario_seq OWNED BY comentario.cvecomentario;


--
-- Name: dia; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE dia (
    cvedia integer NOT NULL,
    nombre character varying(25)
);


ALTER TABLE public.dia OWNER TO admin;

--
-- Name: especialidad; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE especialidad (
    cveespecialidad character varying(3) NOT NULL,
    nombre character varying(40)
);


ALTER TABLE public.especialidad OWNER TO admin;

--
-- Name: especialidad_usuario; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE especialidad_usuario (
    cveusuario character varying(13) NOT NULL,
    cveespecialidad character varying(3),
    otro character varying(100)
);


ALTER TABLE public.especialidad_usuario OWNER TO admin;

--
-- Name: estado; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE estado (
    cveestado integer NOT NULL,
    estado character varying(100)
);


ALTER TABLE public.estado OWNER TO admin;

--
-- Name: estado_cveestado_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE estado_cveestado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estado_cveestado_seq OWNER TO admin;

--
-- Name: estado_cveestado_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE estado_cveestado_seq OWNED BY estado.cveestado;


--
-- Name: evaluacion; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE evaluacion (
    comprension integer,
    participacion integer,
    terminado integer,
    cveeval integer NOT NULL,
    cvelectura integer NOT NULL,
    asistencia integer,
    actividades integer,
    reporte integer,
    CONSTRAINT evaluacionck1 CHECK (((comprension >= 0) AND (comprension <= 100))),
    CONSTRAINT evaluacionck5 CHECK (((participacion >= 0) AND (participacion <= 100))),
    CONSTRAINT evaluacionck6 CHECK (((terminado >= 0) AND (terminado <= 100)))
);


ALTER TABLE public.evaluacion OWNER TO admin;

--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE evaluacion_prueba_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.evaluacion_prueba_seq OWNER TO admin;

--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE evaluacion_prueba_seq OWNED BY evaluacion.cveeval;


--
-- Name: groseria; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE groseria (
    cvegroseria integer NOT NULL,
    groseria character varying(255) NOT NULL
);


ALTER TABLE public.groseria OWNER TO admin;

--
-- Name: groseria_cvegroseria_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE groseria_cvegroseria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.groseria_cvegroseria_seq OWNER TO admin;

--
-- Name: groseria_cvegroseria_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE groseria_cvegroseria_seq OWNED BY groseria.cvegroseria;


--
-- Name: horas; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE horas (
    cvehoras integer NOT NULL,
    hora_inicial time without time zone,
    hora_final time without time zone
);


ALTER TABLE public.horas OWNER TO admin;

--
-- Name: horas_cvehoras_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE horas_cvehoras_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.horas_cvehoras_seq OWNER TO admin;

--
-- Name: horas_cvehoras_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE horas_cvehoras_seq OWNED BY horas.cvehoras;


--
-- Name: laboral; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE laboral (
    cvelaboral integer NOT NULL,
    cveperiodo integer NOT NULL,
    cvehoras integer NOT NULL,
    cvedia integer NOT NULL,
    cvesala character varying(3),
    cveletra integer,
    nombre character varying(75),
    cvepromotor character varying(13),
    cvelibro_grupal integer
);


ALTER TABLE public.laboral OWNER TO admin;

--
-- Name: laboral_cvelaboral_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE laboral_cvelaboral_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.laboral_cvelaboral_seq OWNER TO admin;

--
-- Name: laboral_cvelaboral_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE laboral_cvelaboral_seq OWNED BY laboral.cvelaboral;


--
-- Name: lectura; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE lectura (
    cvelectura integer NOT NULL,
    nocontrol character varying(13) NOT NULL,
    cveletra integer NOT NULL,
    cveperiodo integer
);


ALTER TABLE public.lectura OWNER TO admin;

--
-- Name: lectura_cvelectura_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE lectura_cvelectura_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lectura_cvelectura_seq OWNER TO admin;

--
-- Name: lectura_cvelectura_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE lectura_cvelectura_seq OWNED BY lectura.cvelectura;


--
-- Name: libro; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE libro (
    autor character varying(75),
    titulo character varying(255),
    cvelibro integer NOT NULL,
    editorial character varying(25),
    cantidad integer,
    portada text,
    sinopsis character varying(2000)
);


ALTER TABLE public.libro OWNER TO admin;

--
-- Name: libro_cvelibro_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE libro_cvelibro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.libro_cvelibro_seq OWNER TO admin;

--
-- Name: libro_cvelibro_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE libro_cvelibro_seq OWNED BY libro.cvelibro;


--
-- Name: lista_libros; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE lista_libros (
    cvelista integer NOT NULL,
    cvelibro integer NOT NULL,
    cvelectura integer NOT NULL,
    cveperiodo integer NOT NULL,
    calif_reporte integer,
    cveestado integer
);


ALTER TABLE public.lista_libros OWNER TO admin;

--
-- Name: lista_libros_cvelista_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE lista_libros_cvelista_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lista_libros_cvelista_seq OWNER TO admin;

--
-- Name: lista_libros_cvelista_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE lista_libros_cvelista_seq OWNED BY lista_libros.cvelista;


--
-- Name: msj; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE msj (
    cvemsj integer NOT NULL,
    introduccion character varying(250),
    descripcion character varying(1000),
    tipo character varying(2),
    emisor character varying(13),
    receptor character varying(13),
    fecha date NOT NULL,
    expira date,
    cveletra integer,
    cveperiodo integer,
    archivo character varying(255)
);


ALTER TABLE public.msj OWNER TO admin;

--
-- Name: msj_cvemsj_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE msj_cvemsj_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.msj_cvemsj_seq OWNER TO admin;

--
-- Name: msj_cvemsj_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE msj_cvemsj_seq OWNED BY msj.cvemsj;


--
-- Name: observacion; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE observacion (
    cveobservacion integer NOT NULL,
    observacion character varying(255) NOT NULL,
    cveletra integer NOT NULL,
    cveperiodo integer NOT NULL,
    cvepromotor character varying(13) NOT NULL,
    fecha date DEFAULT now() NOT NULL
);


ALTER TABLE public.observacion OWNER TO admin;

--
-- Name: observacion_cveobservacion_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE observacion_cveobservacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.observacion_cveobservacion_seq OWNER TO admin;

--
-- Name: observacion_cveobservacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE observacion_cveobservacion_seq OWNED BY observacion.cveobservacion;


--
-- Name: periodo; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE periodo (
    fechainicio date NOT NULL,
    fechafinal date NOT NULL,
    cveperiodo integer NOT NULL
);


ALTER TABLE public.periodo OWNER TO admin;

--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE periodo_cveperiodo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.periodo_cveperiodo_seq OWNER TO admin;

--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE periodo_cveperiodo_seq OWNED BY periodo.cveperiodo;


--
-- Name: rol; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE rol (
    cverol integer NOT NULL,
    rol character varying(50)
);


ALTER TABLE public.rol OWNER TO admin;

--
-- Name: rol_cverol_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE rol_cverol_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rol_cverol_seq OWNER TO admin;

--
-- Name: rol_cverol_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE rol_cverol_seq OWNED BY rol.cverol;


--
-- Name: sala; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE sala (
    ubicacion character varying(50),
    cveperiodo integer,
    disponible boolean,
    cvesala integer NOT NULL
);


ALTER TABLE public.sala OWNER TO admin;

--
-- Name: sala_tmpsala_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE sala_tmpsala_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sala_tmpsala_seq OWNER TO admin;

--
-- Name: sala_tmpsala_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE sala_tmpsala_seq OWNED BY sala.cvesala;


--
-- Name: tipomsj; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE tipomsj (
    cvetipomsj character varying(2) NOT NULL,
    descripcion character varying(10)
);


ALTER TABLE public.tipomsj OWNER TO admin;

--
-- Name: usuario_rol; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE usuario_rol (
    cveusuario character varying(13) NOT NULL,
    cverol integer NOT NULL
);


ALTER TABLE public.usuario_rol OWNER TO admin;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE usuarios (
    cveusuario character varying(13) NOT NULL,
    nombre character varying(50),
    pass character varying(32),
    clave character varying(32),
    correo character varying(75),
    estado_credito character varying(75),
    validacion character varying(9),
    foto character varying(20)
);


ALTER TABLE public.usuarios OWNER TO admin;

--
-- Name: cve; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY abecedario ALTER COLUMN cve SET DEFAULT nextval('abecedario_cve_seq'::regclass);


--
-- Name: cvebitg; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY bitacora_groseria ALTER COLUMN cvebitg SET DEFAULT nextval('bitacora_groseria_cvebitg_seq'::regclass);


--
-- Name: cvecomentario; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY comentario ALTER COLUMN cvecomentario SET DEFAULT nextval('comentario_cvecomentario_seq'::regclass);


--
-- Name: cveestado; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY estado ALTER COLUMN cveestado SET DEFAULT nextval('estado_cveestado_seq'::regclass);


--
-- Name: cveeval; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY evaluacion ALTER COLUMN cveeval SET DEFAULT nextval('evaluacion_prueba_seq'::regclass);


--
-- Name: cvegroseria; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY groseria ALTER COLUMN cvegroseria SET DEFAULT nextval('groseria_cvegroseria_seq'::regclass);


--
-- Name: cvehoras; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY horas ALTER COLUMN cvehoras SET DEFAULT nextval('horas_cvehoras_seq'::regclass);


--
-- Name: cvelaboral; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral ALTER COLUMN cvelaboral SET DEFAULT nextval('laboral_cvelaboral_seq'::regclass);


--
-- Name: cvelectura; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura ALTER COLUMN cvelectura SET DEFAULT nextval('lectura_cvelectura_seq'::regclass);


--
-- Name: cvelibro; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY libro ALTER COLUMN cvelibro SET DEFAULT nextval('libro_cvelibro_seq'::regclass);


--
-- Name: cvelista; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lista_libros ALTER COLUMN cvelista SET DEFAULT nextval('lista_libros_cvelista_seq'::regclass);


--
-- Name: cvemsj; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY msj ALTER COLUMN cvemsj SET DEFAULT nextval('msj_cvemsj_seq'::regclass);


--
-- Name: cveobservacion; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY observacion ALTER COLUMN cveobservacion SET DEFAULT nextval('observacion_cveobservacion_seq'::regclass);


--
-- Name: cveperiodo; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY periodo ALTER COLUMN cveperiodo SET DEFAULT nextval('periodo_cveperiodo_seq'::regclass);


--
-- Name: cverol; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY rol ALTER COLUMN cverol SET DEFAULT nextval('rol_cverol_seq'::regclass);


--
-- Name: cvesala; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY sala ALTER COLUMN cvesala SET DEFAULT nextval('sala_tmpsala_seq'::regclass);


--
-- Data for Name: abecedario; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY abecedario (cve, letra) FROM stdin;
1	A
2	B
3	C
4	D
5	E
6	F
7	G
8	H
9	I
10	J
11	K
12	L
13	M
14	N
15	O
16	P
17	Q
18	R
19	S
20	T
21	U
22	V
23	W
24	X
25	Y
26	Z
\.


--
-- Name: abecedario_cve_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('abecedario_cve_seq', 26, true);


--
-- Data for Name: bitacora_groseria; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY bitacora_groseria (cvebitg, cveusuario, accion, contenido) FROM stdin;
\.


--
-- Name: bitacora_groseria_cvebitg_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('bitacora_groseria_cvebitg_seq', 1, false);


--
-- Data for Name: comentario; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY comentario (cvecomentario, cvelibro, cveusuario, contenido, cverespuesta, num_like, num_dislike, fecha) FROM stdin;
1	2	9999999999999	Es un estupendo libro considero yo	\N	0	0	2017-07-24
2	2	9999999999999	Estoy de a cuerdo con mi compañero	1	\N	\N	2017-07-24
3	2	9999999999999	Estoy de a cuerdo con mi compañero x2	1	\N	\N	2017-07-24
4	2	9999999999999	Ha sido uno de los peores libros que e leido	\N	0	0	2017-07-24
5	2	9999999999999	No estoy de a cuerdo con mi compañero	4	\N	\N	2017-07-24
6	2	9999999999999	No estoy de a cuerdo con mi compañero x2	5	\N	\N	2017-07-24
7	2	9999999999999	No estoy de a cuerdo con mi compañero x2	4	\N	\N	2017-07-24
8	1	9999999999999	Nunca lo había leído	\N	\N	\N	2017-09-25
9	1	9999999999999	Lo recomiendo	\N	\N	\N	2017-09-25
10	1	9999999999999	A mi también me gustó	\N	\N	\N	2017-09-25
11	3	1111111111111	Hay historias mejores...	\N	\N	\N	2017-09-25
12	1	13030623	No le entendí	\N	\N	\N	2017-09-25
\.


--
-- Name: comentario_cvecomentario_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('comentario_cvecomentario_seq', 12, true);


--
-- Data for Name: dia; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY dia (cvedia, nombre) FROM stdin;
1	Lunes
2	Martes
4	Jueves
5	Viernes
3	Miércoles
6	Sábado
\.


--
-- Data for Name: especialidad; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY especialidad (cveespecialidad, nombre) FROM stdin;
ISC	Ingeniería En Sistemas Computacionales
IA	Ingeniería Ambiental
IB	Ingeniería Bioquímica
IE	Ingeniería Electrónica
IGE	Ingeniería Gestión Empresarial
IIN	Ingeniería Industrial
II	Ingeniería Informática
IM	Ingeniería Mecatrónica
IME	Ingeniería Mecánica
IQ	Ingeniería Química
LAE	Licenciatura En Administración
O	Otro
\.


--
-- Data for Name: especialidad_usuario; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY especialidad_usuario (cveusuario, cveespecialidad, otro) FROM stdin;
7777777777777	O	Centro de Información
11111111	\N	\N
33333333	IME	\N
44444444	IA	\N
55555555	IA	\N
0000000000000	IB	\N
66666666	IM	\N
22222222	IA	\N
9999999999999	IME	\N
1111111111111	ISC	\N
RIJE640621MGT	ISC	\N
13030623	ISC	\N
13030624	IA	\N
8888888888888	O	JESUS - DIOS
\.


--
-- Data for Name: estado; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY estado (cveestado, estado) FROM stdin;
1	En Espera
2	En Proceso
3	Terminado
4	No Terminado
\.


--
-- Name: estado_cveestado_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('estado_cveestado_seq', 4, true);


--
-- Data for Name: evaluacion; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY evaluacion (comprension, participacion, terminado, cveeval, cvelectura, asistencia, actividades, reporte) FROM stdin;
0	0	0	23	26	0	0	0
20	10	13	21	24	0	10	23
0	0	0	24	27	0	0	0
0	0	0	25	28	0	0	0
0	0	0	22	25	0	0	0
\.


--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('evaluacion_prueba_seq', 25, true);


--
-- Data for Name: groseria; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY groseria (cvegroseria, groseria) FROM stdin;
\.


--
-- Name: groseria_cvegroseria_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('groseria_cvegroseria_seq', 1, false);


--
-- Data for Name: horas; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY horas (cvehoras, hora_inicial, hora_final) FROM stdin;
1	07:00:00	08:00:00
2	08:00:00	09:00:00
3	09:00:00	10:00:00
4	10:00:00	11:00:00
5	11:00:00	12:00:00
6	12:00:00	13:00:00
7	13:00:00	14:00:00
8	14:00:00	15:00:00
9	15:00:00	16:00:00
10	16:00:00	17:00:00
11	17:00:00	18:00:00
12	18:00:00	19:00:00
\.


--
-- Name: horas_cvehoras_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('horas_cvehoras_seq', 12, true);


--
-- Data for Name: laboral; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY laboral (cvelaboral, cveperiodo, cvehoras, cvedia, cvesala, cveletra, nombre, cvepromotor, cvelibro_grupal) FROM stdin;
19	8	12	1	xxx	2	SALA - B	9999999999999	13
20	8	12	2	xxx	2	SALA - B	9999999999999	13
27	8	1	1	001	5	SALA - E	0000000000000	1
28	8	1	2	001	5	SALA - E	0000000000000	1
17	8	1	1	xxx	1	Los comelibros	9999999999999	258
18	8	2	1	xxx	1	Los comelibros	9999999999999	258
43	13	1	1	S00	2	SALA - B	\N	1
44	13	2	1	S00	2	SALA - B	\N	1
47	13	5	1	S00	4	SALA - D	\N	1
48	13	6	1	S00	4	SALA - D	\N	1
51	13	1	1	S02	6	SALA - F	\N	1
52	13	2	1	S02	6	SALA - F	\N	1
53	13	3	1	S02	7	SALA - G	\N	1
54	13	4	1	S02	7	SALA - G	\N	1
55	13	8	1	S02	8	SALA - H	\N	1
56	13	7	1	S02	8	SALA - H	\N	1
57	13	5	1	S02	9	SALA - I	\N	1
58	13	6	1	S02	9	SALA - I	\N	1
21	8	11	3	xxx	3	SALA - C	1111111111111	20
22	8	11	4	xxx	3	SALA - C	1111111111111	20
25	8	4	1	xxx	4	SALA - D	9999999999999	13
26	8	1	2	xxx	4	SALA - D	9999999999999	13
39	13	6	1	S01	1	Los comelibros	RIJE640621MGT	112
40	13	6	3	S01	1	Los comelibros	RIJE640621MGT	112
45	13	3	1	S00	3	SALA - C	\N	1
46	13	4	1	S00	3	SALA - C	\N	1
49	13	7	1	S00	5	SALA - E	\N	1
50	13	8	1	S00	5	SALA - E	\N	1
59	13	9	1	S02	10	SALA - J	\N	1
60	13	10	1	S02	10	SALA - J	\N	1
61	13	1	1	S01	11	SALA - K	1111111111111	1
62	13	2	1	S01	11	SALA - K	1111111111111	1
\.


--
-- Name: laboral_cvelaboral_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('laboral_cvelaboral_seq', 62, true);


--
-- Data for Name: lectura; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY lectura (cvelectura, nocontrol, cveletra, cveperiodo) FROM stdin;
24	22222222	1	8
25	33333333	1	8
26	66666666	1	8
27	55555555	2	8
28	13030623	1	13
\.


--
-- Name: lectura_cvelectura_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('lectura_cvelectura_seq', 28, true);


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY libro (autor, titulo, cvelibro, editorial, cantidad, portada, sinopsis) FROM stdin;
Mankell	El Cerebro de Kennedy	79	Tusquets	\N	\N	\N
Miralles	El Círculo Ámbar y los Mandalas de Avalon	80	Ediciones B	\N	\N	\N
Apio	365 Tips para Cambiar tu Vida	4	Diana	\N	\N	\N
Sutherland	50 Cosas que hay que saber de Literatura	5	Ariel	\N	\N	\N
Russell	50 Cosas que hay que saber de Management	6	Ariel	\N	\N	\N
Galloti	69 Secretos Imprescindibles Para disfrutar del Sexo	7	MR	\N	\N	\N
Alonso	99 Libros para ser mas Culto	8	MR	\N	\N	\N
Rosas	99 Pasiones en la Historia de México	9	MR	\N	\N	\N
Plaidy	A la Sombra de la Corona	10	Planeta	\N	\N	\N
Zama	Agencia Matrimonial para Ricos	11	Ediciones B	\N	\N	\N
Buckingham	Ahora Descubra sus Fortalezas	12	Norma	\N	\N	\N
Bauducco	Al Desnudo	13	Ediciones B	\N	\N	\N
Kluver	Alera	14	Rocaeditorial	\N	\N	\N
Merino	Alma de Junglar	15	Ediciones B	\N	\N	\N
Fukuyama	América en la Encrucijada	16	Ediciones B	\N	\N	\N
Fernández	Américo	17	Tusquets	\N	\N	\N
Rojas	Amigos Adiós a la Soledad	18	Temas de Hoy	\N	\N	\N
Cruz	Amo Luego Existo	19	Espasa	\N	\N	\N
Rice	Amor en Tinieblas	20	Destino	\N	\N	\N
Villalpando	Amores Mexicanos	21	Planeta	\N	\N	\N
Gray	Anatomía de Gray: Textos Esenciales	22	Paidós	\N	\N	\N
EMU	Antología del Terror:  Obras Maestras	23	Editores Mexicanos	\N	\N	\N
EMU	Antón Chejov:  Obras Maestras	24	Editores Mexicanos	\N	\N	\N
Mc Cullough	Antonio y Cleopatra	25	Planeta	\N	\N	\N
Moreno	Arrebatos Carnales II	26	Planeta	\N	\N	\N
Moreno	Arrebatos Carnales III	27	Planeta	\N	\N	\N
Vidaurri	Artemio Benavides Hinojosa: Caudillo del Noreste Mexicano	28	Tusquets	\N	\N	\N
Buzali	Atrévete a Soñar	29	Vergara	\N	\N	\N
Larsson	Aurora Boreal	30	Seix Barral	\N	\N	\N
León	Ayúdate que Dios te Ayudará	31	Seix Barral	\N	\N	\N
Bonilla	Basado en Hechos Reales	32	Berenice	\N	\N	\N
Lowe	Bill Gates Habla	33	Deusto	\N	\N	\N
Carr	Brisas de Noviembre	34	Harlequin	\N	\N	\N
Buffet & Clark	Buffettología	35	Deusto	\N	\N	\N
Calles	Cancionero Popular	36	Edivision	\N	\N	\N
Aguirre	Cantolla Aeronautica	37	MR	\N	\N	\N
Buzali	Cartas y Pergaminos	38	Vergara	\N	\N	\N
EMU	Charles Dickens:  Obras Maestras	39	Editores Mexicanos	\N	\N	\N
Posteguillo	Circo Máximo	40	Planeta	\N	\N	\N
Vázquez	Coltan	41	Ediciones B	\N	\N	\N
Weigel	Comer, Jugar, Reír	42	Diana	\N	\N	\N
Mullins	Con las Manos Abiertas	43	Diana	\N	\N	\N
Fernández	Conjuras Sexenales	44	Ediciones B	\N	\N	\N
Koppel	Conócete a ti Mismo y a los Demás	45	Planeta	\N	\N	\N
Patán	Conspiraciones	46	Paidós	\N	\N	\N
Buzali	Construyendo tu Grandeza	47	Vergara	\N	\N	\N
Savater	Contra las Patrias	48	Booket	\N	\N	\N
Schechter	Contrabando	49	Ediciones B	\N	\N	\N
Herrero	Corazón Indio	50	Destino	\N	\N	\N
Reyes	Cortar una Jacaranda	51	Planeta	\N	\N	\N
Connely	Crónicas de Sucesos	52	Ediciones B	\N	\N	\N
Tercero	Cuando Llegaron los Bárbaros	53	Temas de Hoy	\N	\N	\N
Ellmann	Cuatro Dublinenses	54	Tusquets	\N	\N	\N
Verduzco	Cuento Infinito	55	Ediciones B	\N	\N	\N
Aguilar	Cuentos para Entender el Evangelio	56	Diana	\N	\N	\N
Hubbard	Cuerpo Limpio Mente Clara	57	Bridge Publications	\N	\N	\N
Bronte	Cumbres Borrascosas	58	Editores Mexicanos	\N	\N	\N
Lauryssens	Dalí y Yo : Una Historia Surreal	59	Ediciones B	\N	\N	\N
Vidal	De lo Divino y de lo Humano	60	MR	\N	\N	\N
Aquino	De qué se Ríe la Barbie?	61	Temas de Hoy	\N	\N	\N
Vale	De Sesos y Médula	62	Planeta	\N	\N	\N
Pinkola	Desatando a la Mujer Fuerte	63	Diana	\N	\N	\N
Hocking	Designio	64	Destino	\N	\N	\N
Quintero	Despues de la Tempestad	65	Ediciones B	\N	\N	\N
Pacheco	Destino Criminal	66	Ediciones B	\N	\N	\N
Martínez	Diversos Estados tras la Muerte	67	Obelisco	\N	\N	\N
Armstrong	Doce Pasos Hacia Una Vida Compasiva	68	Paidós	\N	\N	\N
Diez	Dos Mil y Una Noches	69	Ediciones B	\N	\N	\N
Canales	Duendes: Guía de los Seres Mágicos de España	70	Edaf	\N	\N	\N
EMU	Edgar Allan Poe:  Obras Maestras	71	Editores Mexicanos	\N	\N	\N
Gardner	Educación Artística y Desarrollo Humano	72	Paidós	\N	\N	\N
Little	El almacén	73	Ediciones B	\N	\N	\N
Sierra	El Ángel Perdido	74	Planeta	\N	\N	\N
Sunderland	El Aroma de la Luna	75	Joaquín Mortiz	\N	\N	\N
Borges	El arte de la Guerra para Narcos	76	Temas de Hoy	\N	\N	\N
Marx	El Capital	77	Editores Mexicanos	\N	\N	\N
López	El Cártel de los Sapos	78	Planeta	\N	\N	\N
Sherwood	El Club de los Supervivientes	81	Paidós	\N	\N	\N
Drosnin	El Código Secreto de la Biblia III	82	Planeta	\N	\N	\N
EMU	El Conde de Montecristo	83	Editores Mexicanos	\N	\N	\N
Grandes	El Corazon Helado	84	Tusquets	\N	\N	\N
Cárdenas	El Derrumbe	85	Tusquets	\N	\N	\N
Lienas	El Diario Rojo de Carlota	86	Destino	\N	\N	\N
Schmitt	El Evangelio Según Pilatos	87	Edaf	\N	\N	\N
Covey	El Factor Confianza	88	Paidós	\N	\N	\N
Rosen	El Fin del Imperio Romano	89	Paidós	\N	\N	\N
Cornwell	El Frente	90	Ediciones B	\N	\N	\N
Shenk	El Genio que Todos Llevamos Dentro	91	Ariel	\N	\N	\N
Florida	El Gran Reset	92	Paidós	\N	\N	\N
Muñoz Molina	El Invierno de Lisboa	93	Booket	\N	\N	\N
Meltzer	El Libro del Destino	94	Planeta	\N	\N	\N
Krauze	El Poder y el Delirio	102	Tusquets	\N	\N	\N
Yallop	El Poder y la Gloria	103	Planeta	\N	\N	\N
Giménez	El Silencio de los Claustros	111	Destino	\N	\N	\N
Sánchez	El Tesorero de la Catedral	112	Almuzara	\N	\N	\N
EMU	Fiódor Dostoievski:  Obras Maestras	121	Editores Mexicanos	\N	\N	\N
Ramsay	Gordon Ramsay lo Hace Fácil	128	Planeta	\N	\N	\N
Johnson	Héroes	135	Ediciones B	\N	\N	\N
EMU	Honorato de Balzac:  Obras Maestras	141	Editores Mexicanos	\N	\N	\N
Papini	El Libro Negro	95	Editores Mexicanos	\N	\N	\N
London	El Lobo de Mar	96	Editores Mexicanos	\N	\N	\N
Spier	El Lugar del Hombre en el Cosmos	97	Crítica	\N	\N	\N
Koch	El Principio Estrella Puede Hacerlo Rico	104	Paidós	\N	\N	\N
Sora	El Tesoro Perdido de los Templarios	113	Planeta	\N	\N	\N
EMU	Franz Kafka:  Obras Maestras	122	Editores Mexicanos	\N	\N	\N
Junger	Guerra	129	Crítica	\N	\N	\N
Aguirre	Hidalgo: Entre la Virtud y el Vicio	136	MR	\N	\N	\N
Nietzsche	Humano, Demasiado Humano	142	Editores Mexicanos	\N	\N	\N
Bonasso	El Mal, El Modelo K y la Barrick Gold	98	Planeta	\N	\N	\N
Ramírez	El Reino de Marcial Maciel	105	Temas de Hoy	\N	\N	\N
Ramos	El Último Cacique: El Poder por el Poder	114	Ediciones B	\N	\N	\N
Hoge	El Último Papa: Decadencia y Caída de la Iglesia de Roma	115	Edaf	\N	\N	\N
Rodari	En Defensa del Papa	116	MR	\N	\N	\N
EMU	Friedrich Nietzsche:  Obras Maestras	123	Editores Mexicanos	\N	\N	\N
EMU	H.P. Lovecraft:  Obras Maestras	130	Editores Mexicanos	\N	\N	\N
Dechance	Hablemos Claro	131	Edaf	\N	\N	\N
Naouri	Hijas y Madres	137	Tusquets	\N	\N	\N
Zweig	El Mundo del Ayer	99	Editores Mexicanos	\N	\N	\N
Aguilar	El Resplandor de la Madera	106	Seix Barral	\N	\N	\N
Taibo II	El Retorno de los Tigres de la Malasia	107	Planeta	\N	\N	\N
Mourad	En la Ciudad de Oro y Plata	117	Espasa	\N	\N	\N
Mir	Furtivos	124	Almuzara	\N	\N	\N
Nieves	Hablemos de Ciencia	132	Edaf	\N	\N	\N
Eliade	Historia de las Creencias e Ideas Religiosas	138	Paidós	\N	\N	\N
Asensi	El Origen Perdido	100	Booket	\N	\N	\N
Mankell	El Retorno del Profesor de Baile	108	Tusquets	\N	\N	\N
Ugarte	Erotismo y Santidad	118	Ediciones B	\N	\N	\N
Pol Droit	Genealogía de los Bárbaros	125	Paidós	\N	\N	\N
Meneses	Generación Bang: Los Nuevos Cronistas del Narco en México	126	Temas de Hoy	\N	\N	\N
EMU	Hermann Hesse:  Obras Maestras	133	Editores Mexicanos	\N	\N	\N
Tenorio	Historia y Celebración	139	Tusquets	\N	\N	\N
Bau	El Pintor de Cracovia	101	Ediciones B	\N	\N	\N
Salzberg	El Secreto de la Felicidad Auténtica	109	Oniro	\N	\N	\N
Isbert	El Secreto de la Montaña Esmeralda	110	Edaf	\N	\N	\N
Redondo	Escuela y Pobreza	119	Paidós	\N	\N	\N
Savater	Ética como Amor Propio	120	Ariel	\N	\N	\N
Peters	Gestinar con Imaginación	127	Deusto	\N	\N	\N
Miralles	Hernán Cortés: Inventor de México	134	Tusquets	\N	\N	\N
Urías	Historias Secretas del Racismo en México	140	Tusquets	\N	\N	\N
EMU	Íconos Literarios:  Bram Stoker	143	Editores Mexicanos	\N	\N	\N
EMU	Íconos Literarios:  Guy de Maupassant	144	Editores Mexicanos	\N	\N	\N
EMU	Íconos Literarios:  Honorato de Balzac	145	Editores Mexicanos	\N	\N	\N
EMU	Íconos Literarios:  Lewis Carroll	147	Editores Mexicanos	\N	\N	\N
EMU	Íconos Literarios:  Nicolás Maquiavelo	148	Editores Mexicanos	\N	\N	\N
EMU	Íconos Literarios: Federico García Lorca	149	Editores Mexicanos	\N	\N	\N
Bauducco	Imperio de Papel	150	Ediciones B	\N	\N	\N
Ramos	Ixcel: Nacidos Guerreros,  Vendidos como Esclavos	151	Ediciones B	\N	\N	\N
EMU	Julio Verne:  Obras Maestras	152	Editores Mexicanos	\N	\N	\N
Rodríguez	La Agenda Pendiente 	153	Temas de Hoy	\N	\N	\N
Ovason	La Arquitectura Sagrada de Washington	154	MR	\N	\N	\N
Muñoz	La Bruja de los Destellos	155	Diana	\N	\N	\N
Lavin	La Casa Chica	156	Planeta	\N	\N	\N
Dietrich	La Clave Roseta	157	Ediciones B	\N	\N	\N
Díaz-Polanco	La Cocina del Diablo	158	Temas de Hoy	\N	\N	\N
Nanti	La Confesión; Religión y Pederastia	159	Diana	\N	\N	\N
Garland	La Conjura	160	Ediciones B	\N	\N	\N
Asensi	La Conjura de Cortés	161	Planeta	\N	\N	\N
Bolaños	La cruz del Sur	162	Ediciones B	\N	\N	\N
Innerarity	La Democracia del Conocimiento	163	Paidós	\N	\N	\N
Kundera	La Despedida	164	Tusquets	\N	\N	\N
Finneyfrock	La Dulce Venganza de Celia Door	165	Destino	\N	\N	\N
Mastreta	La Emoción de las Cosas	166	Seix Barral	\N	\N	\N
Young	La Encrucijada	167	Diana	\N	\N	\N
Greenspan	La Era de las Turbulencias	168	Ediciones B	\N	\N	\N
Rodríguez	La Fábrica del Crimen	169	Temas de Hoy	\N	\N	\N
Meyer	La Fábula del crímen Ritual	170	Tusquets	\N	\N	\N
Aguirre	La gran Traición La guerra donde Perdimos la Mitad de México	171	Planeta	\N	\N	\N
Wroblewski	La Historia de Edgar Sawtelle	172	Planeta	\N	\N	\N
González	La Iglesia del Silencio	173	Tusquets	\N	\N	\N
Ratzinger	La Infancia de Jesus	174	Planeta	\N	\N	\N
Monforte	La Infiel	175	Temas de Hoy	\N	\N	\N
Rodríguez	La Ira de Dios	176	Rocaeditorial	\N	\N	\N
Sepúlveda	La Lámpara de Aladino	177	Tusquets	\N	\N	\N
Beniosef	La Luz de Efraim: Cómo Corregir la Sexualidad a través de la Cábala	178	Obelisco	\N	\N	\N
Alazraki	La Luz Eterna de Juan Pablo II	179	Planeta	\N	\N	\N
Ortíz	La Mente en Desarrollo	180	Paidós	\N	\N	\N
Aguilar	La Modernidad Figitiva	181	Planeta	\N	\N	\N
Berman	La Mujer que Buceó Dentro del Corazón del Mundo	182	Planeta	\N	\N	\N
Gautier	La Novela de la Momia	183	Editores Mexicanos	\N	\N	\N
Arellano	La Nueva República	184	Planeta	\N	\N	\N
De Balzac	La Piel de Zapa	185	Editores Mexicanos	\N	\N	\N
Levy	La Primera Noche	186	Planeta	\N	\N	\N
Mankell	La Quinta Mujer	187	Tusquets	\N	\N	\N
Gilbert	La Sabiduría de la Naríz	188	Ediciones B	\N	\N	\N
Plaidy	La Sexta Esposa	189	Planeta	\N	\N	\N
Volpi	La Tejedora de Sombras	190	Planeta	\N	\N	\N
Gregory	La Trampa Dorada	191	Planeta	\N	\N	\N
Luisi	La Vida Emergente	192	Tusquets	\N	\N	\N
Del Cio	La Vida Mi Amante II	193	Diana	\N	\N	\N
Larsson	La Voz y la Furia	194	Destino	\N	\N	\N
Al Ries	Las 11 Leyes Inmutables Creación de Marcas en Internet	195	Deusto	\N	\N	\N
Zaslow	Las Chicas de Ames	196	Planeta	\N	\N	\N
Spreitzer	Las Claves del Liderazgo	197	Deusto	\N	\N	\N
Lewis	Las Crónicas de Narnia	198	Destino	\N	\N	\N
Wolf	Las Enseñanzas de Carlos Castaneda	199	Vergara	\N	\N	\N
Berry	Las Finanzas Secretas de la Iglesia	200	Debate	\N	\N	\N
Guiliano	Las Francesas Disfrutan Todo el Año y no Engordan	201	Vergara	\N	\N	\N
Alanís	Las Lágrimas del centauro	202	MR	\N	\N	\N
Nieto	Las Mujeres Matan Mejor	203	Joaquín Mortiz	\N	\N	\N
Huxley	Las Puertas de la Percepción	204	Editores Mexicanos	\N	\N	\N
Ariely	Las Ventajas del Deseo	205	Ariel	\N	\N	\N
Hocking	Latido	206	Destino	\N	\N	\N
EMU	León Tolstoi:  Obras Maestras	207	Editores Mexicanos	\N	\N	\N
Kotler	Los 10 Pecados Capitales del Markrting	208	Deusto	\N	\N	\N
Grandes	Los Aires Difíciles	209	Tusquets	\N	\N	\N
Zepeda	Los Corruptores	210	Planeta	\N	\N	\N
Frattini	Los Cuervos del Vaticano	211	Planeta	\N	\N	\N
Elorza	Los dos Mensajes del Islam	212	Ediciones B	\N	\N	\N
Cruz	Los Golden Boys	213	Temas de Hoy	\N	\N	\N
Zepeda	Los Intocables	214	Planeta	\N	\N	\N
Ryback	Los Libros del Gran Dictador	215	Destino	\N	\N	\N
Hodge	Los Manuscritos del Mar Muerto	216	Edaf	\N	\N	\N
Fuentes	Los Mil Mejores Chistes Que Conozco	217	Diana	\N	\N	\N
Fuentes	Los Mil Mejores Chistes Que Conozco y cien Más Buenos Aún	218	Diana	\N	\N	\N
Harding	Los Misterios de la Mujer	219	Obelisco	\N	\N	\N
Druon	Los Reyes Malditos III: Los Venenos de la Corona	220	Vergara	\N	\N	\N
Druon	Los Reyes Malditos IV: La Ley de los Varones	221	Ediciones B	\N	\N	\N
Carr	Luna de Verano	222	Harlequin	\N	\N	\N
Carrillo	Luna Negra	223	Diana	\N	\N	\N
Frid	Luz Entre Ceniza	224	MR	\N	\N	\N
Kenzaburooé	M7T y La Historia de las Maravillas del Bosque	225	Booket	\N	\N	\N
Puddicombe	Mindfulness Atención Plena	231	Edaf	\N	\N	\N
Aguirre	Pecar como Dios Manda	237	Planeta	\N	\N	\N
Evans	Preso de la Luz	244	Destino	\N	\N	\N
Grergen	Reflexiones Sobre la Construcción Social	250	Paidós	\N	\N	\N
Rosas	Sangre y Fuego	256	Booket	\N	\N	\N
Octavio Paz	Tiempo Nublado	262	Seix Barral	\N	\N	\N
Napoleoni	Maonomics: La amarga Medicina China contra los escándalos	226	Paidós	\N	\N	\N
Ravenwolf	Muerte en el Barranco de las Brujas	232	Edaf	\N	\N	\N
Lewis	Perelandra un Viaje a Venus	238	Minotauro	\N	\N	\N
Margolin	Pruebas Falsas	245	Ediciones B	\N	\N	\N
Mc Caig	Rhett Butler:  Más allá de Lo Que El Viento se Llevó	251	Ediciones B	\N	\N	\N
Frattini	Secretos Vaticanos	257	Edaf	\N	\N	\N
Cruz	Tierra Narca	263	Temas de Hoy	\N	\N	\N
Palomar	Margarita Septién	227	Ediciones B	\N	\N	\N
Allan Poe	Narraciones Extraordinarias	233	Editores Mexicanos	\N	\N	\N
Greenfield	Piensa: Qué Significa ser Humano en un Mundo de Cambio	239	Ediciones B	\N	\N	\N
Mastreta	Puerto Libre	246	Seix Barral	\N	\N	\N
Marrese	Rosa de Fuego	252	Ediciones B	\N	\N	\N
Cain	Sexo de Emergencia	258	Ediciones B	\N	\N	\N
Hernández	Tijuana Dream	264	Ediciones B	\N	\N	\N
Hay	Todo Está Bien	265	Diana	\N	\N	\N
EMU	Marqués de Sade:  Obras Maestras	228	Editores Mexicanos	\N	\N	\N
Matute	Olvidado Rey Gudú	234	Booket	\N	\N	\N
Herman	Pilates Para Dummies	240	Paradummies.com	\N	\N	\N
Fernández	Que Dios se Equivoque	247	Planeta	\N	\N	\N
NHAT HANN	Saborear	253	Oniro	\N	\N	\N
Brockmann	Sin Nombre	259	Harlequin	\N	\N	\N
Buzali	Todod somos Maestros	266	Vergara	\N	\N	\N
Buzali	Megacualidades de los Triunfadores	229	Vergara	\N	\N	\N
Austen	Orgullo y Prejuicio	235	Editores Mexicanos	\N	\N	\N
James Kaplan	Por Fuego, Por Agua	241	MR	\N	\N	\N
Musso	Qué Sería yo sin Ti	248	Planeta	\N	\N	\N
Ronquillo	Saldos de Guerra	254	Temas de Hoy	\N	\N	\N
Savater	Sobre Vivir	260	Ariel	\N	\N	\N
Taibo II	Tony Guiteras  un Hombre Guapo y otros Personajes	267	Planeta	\N	\N	\N
Alazraki	México Siempre Fiel	230	Planeta	\N	\N	\N
EMU	Oscar Wilde:  Obras Maestras	236	Editores Mexicanos	\N	\N	\N
Moreno	Por la Mano del Padre	242	Ediciones B	\N	\N	\N
Rodríguez	Por los Viejos Tiempos	243	Ediciones B	\N	\N	\N
Ahern	Recuerdos Prestados	249	Vergara	\N	\N	\N
Aguilar	Saldos de la Revolución	255	Planeta	\N	\N	\N
Castro	Surameris y el Cofre de los Secretos	261	Diana	\N	\N	\N
Olvera	Topiltzin: La Leyenda del Lucero de la Mañana	268	Ediciones B	\N	\N	\N
Guillou	Trilogía de las Cruzadas I  del Norte a Jerusalén	269	Planeta	\N	\N	\N
Leppaniemi	Tu Felicidad Depende de tu Actitud	270	Diana	\N	\N	\N
Pearl	Un Corazón Invencible	271	MR	\N	\N	\N
Scott	Un Siglo Decisivo	272	Ediciones B	\N	\N	\N
Aguilar	Un Soplo en el Río	273	Seix Barral	\N	\N	\N
Wiggs	Una Casa Junto al Lago	274	Harlequin	\N	\N	\N
Baldacci	Una Muerte Sospechosa	275	Ediciones B	\N	\N	\N
Irving	Una Mujer Difícil	276	Tusquets	\N	\N	\N
Hutchens	Una Porción de Confianza	277	Paidós	\N	\N	\N
Palou	Varón de Deseos	278	Planeta	\N	\N	\N
Aguirre	Victoria	279	Booket	\N	\N	\N
Villalpando	Vida de Marquesa	280	Diana	\N	\N	\N
Guerra	Vida Verde: El Químico Guerra Responde	281	Diana	\N	\N	\N
Gutiérrez	Viejo Siglo Nuevo	282	Planeta	\N	\N	\N
Miller	Vivan los Lunes	283	Vergara	\N	\N	\N
Morris	Volverse a Enamorar	284	Vergara	\N	\N	\N
EMU	William Shakespeare:  Obras Maestras	285	Editores Mexicanos	\N	\N	\N
Wagensberg	Yo, Lo Superfluo y el Error	286	Tusquets	\N	\N	\N
Wellington	Zombie Planet	287	Timunmas	\N	\N	\N
EMU	íconos Literarios:  Las Mil y Una Noches	146	892-A110m	11	\N	\N
p	p	290	p	1	\N	\N
Red Barrels	Outlast	292	Terror	500	\N	fñjasdlfjalsj
jfañls	Attack On Titan	293	dfjñasl	4122	\N	fksdajkl
fdjals	Outlast 2	294	dkajñlf	3214	\N	dksjalñfjaño
fdjals	Outlast 2	295	dkajñlf	3214	\N	dksjalñfjaño
fads	Outlast	296	dafds	2341	\N	sa
fdañslj	fdas	297	dfaksjfñ	341	298.jpg	fsdafa
fdañslj	fdas	298	dfaksjfñ	341	298.jpg	fasfda
Halevi	13 Años que Cambiaron al Mundo	2	Ediciones A	4231	2.jpg	4124213
p	p	299	p	1	\N	p                                              
das	fa	300	fa	41	\N	fda                                              
fda	fa	301	fdas	32412	\N	                                              fas
nada	nada	302	nada	0	302..jpg	fldkañsjkl                                              
nada2	nada2	303	nada2	22	\N	fsa                                              
nada3	nada3	304	nada3	33	\N	dafadks                                              
fsadñlkjfal	Attack On Titan	305	fjñladskjl	4321	305.png	fjlskajñf
NO	NO	306	NO	2431	\N	NO
p	p	307	p	1		p
López	150 Años de Fotografía en España	3	Lunwerg	0	3.jpg	Publio López Mondéjar, uno de los más prestigiosos fotohistoriadores españoles ofrece una visión exhaustiva de la historia de la fotografía española, desde la realización del primer daguerrotipo en 1839, hasta 1989. Para esta tercera edición ha revisado los textos, añadido nuevas fotografías y actualizado datos.\r\nEl catálogo ofrece un recorrido cronológico que se divide en tres apartados: la primera parte (1839-1900) abarca los profesionales del daguerrotipo, los primeros maestros, la democratización del retrato y la fotografía de prensa y de aficionados; la segunda parte (1900-1939) trata la fotografía pictorialista, la fotografía popular, la vanguardia y la guerra vista por los fotógrafos; la tercera parte (1939-1989) trata la fotografía oficialista, la renovación documental de los sesenta hasta las últimas tendencias, que oscilan entre realidad y ficción. Al final se incluye un glosario de términos técnicos.\r\nLos capítulos se ilustran con fotografías en blanco y negro que han formado parte de una exposición con el mismo título. Entre los fotógrafos seleccionados se encuentran: Clifford, Laurent, Monney, Rodrigo, Káulak, Ortiz-Echagüe, Alfonso Sánchez Portela, Escobar, Lekuona, Català Pic, Renau, Capa, Virgilio Vieitez, Català Roca, Muller, Schommer, Pomés, Masats, Colom, Pérez Siquier, Miserachs, Cualladó, Maspons, Terré, Vallhonrat, Catany, Fontcuberta, García Rodero, García Alix, Rivas, Lobato y Trillo, entre otros.
Quick	102 Ideas para Enriquecer tu Vida sin Gastar Dinero	1	Oniro	3421	1.jpg	Todo el mundo sabe que las mejores cosas de la vida no cuestan dinero... pero resulta fácil olvidarlo en un mundo de constante bombardeo publicitario y consumismo desaforado. En 102 ideas para enriquecer tu vida sin gastar dinero, Alex Quick nos recuerda, con sabiduría e ingenio, que casi todo lo que realmente importa en la vida se puede hacer sin gastar un euro y para ello nos propone múltiples actividades que nos descubrirán que la felicidad está al alcance de cualquier bolsillo. Ponerse en forma sin ir al gimnasio, contactar con un amigo con el que hace tiempo que no hablas, aprender meditación, aprender un idioma o escribir la primera frase de una novela son algunas de las propuestas de este divertido y original libro.
\.


--
-- Name: libro_cvelibro_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('libro_cvelibro_seq', 307, true);


--
-- Data for Name: lista_libros; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY lista_libros (cvelista, cvelibro, cvelectura, cveperiodo, calif_reporte, cveestado) FROM stdin;
15	13	25	8	0	1
16	1	26	8	0	1
14	6	24	8	44	2
13	14	24	8	70	3
\.


--
-- Name: lista_libros_cvelista_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('lista_libros_cvelista_seq', 16, true);


--
-- Data for Name: msj; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY msj (cvemsj, introduccion, descripcion, tipo, emisor, receptor, fecha, expira, cveletra, cveperiodo, archivo) FROM stdin;
27	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
28	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
29	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
30	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas informaciÃ³n.\nEl vÃ­deo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vÃ­deo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
31	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
32	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
34	Vivamus blandit nisl libero, id facilisis sem tempor viverra.	Vivamus blandit nisl libero, id facilisis sem tempor viverra. Nunc purus eros, auctor in imperdiet non, accumsan a dolor. Nulla auctor non tortor sed dapibus. Praesent faucibus nec enim ac iaculis. Nunc id aliquam leo. Ut dictum dui eget turpis vulputate accumsan. Aenean convallis mauris nec leo volutpat, sit amet venenatis nisl mattis. Aenean eleifend luctus ex, sed lacinia neque sollicitudin ac. Donec in erat nibh. Aenean pulvinar porta nunc. Donec eget mauris sed lorem aliquam rhoncus non vitae nisi. Vivamus lobortis a orci sed porttitor.	PU	\N	\N	2017-07-24	2017-07-26	\N	8	\N
4	Prueba	Esto es	I	9999999999999	22222222	2017-06-16	2017-06-17	\N	8	\N
5	Bienvenido	Saludos!!	I	9999999999999	22222222	2017-06-25	2017-06-30	\N	8	\N
6	Menso!!	Eres un menso	I	9999999999999	22222222	2017-06-25	2017-06-30	1	8	\N
7	PRUEBA	PRUEBA ARCHIVOS	I	9999999999999	22222222	2017-06-29	2017-06-30	1	8	\N
8	PRUEBA 2	pruebaj	I	9999999999999	22222222	2017-06-30	2017-07-01	1	8	\N
9	hola que ace	hola que ace x2	I	9999999999999	22222222	2017-06-30	2017-07-01	1	8	bootstrap-filestyle.js
10	prueba 4	edwefefergegt	I	9999999999999	22222222	2017-06-30	2017-07-01	1	8	formato_preguntas.pdf
11	prueba mensaje grupal 1	Esta es una prueba de un mensaje grupal 	G	9999999999999	\N	2017-07-04	2017-07-31	1	8	\N
12	prueba grupal  4 con archivo	este mensaje grupal contiene un archivo	G	9999999999999	\N	2017-07-05	2017-07-31	1	8	\N
13	prueba grupal  4 con archivo	este mensaje grupal contiene un archivo	G	9999999999999	\N	2017-07-05	2017-07-31	1	8	\N
14	prueba 4 msj individual mensaje	esta es una prueba de un mensaje individual con archivo	I	9999999999999	22222222	2017-07-05	2017-07-31	1	8	arce.pdf
15	prueba 4 msj grupal con archivo 	Este es el bueno con archivo grupal	G	9999999999999	\N	2017-07-05	2017-07-31	1	8	arce.pdf
16	p_imagen	imagen	G	9999999999999	\N	2017-07-09	2017-07-30	1	8	19866218_1210582322400484_86832701_n.jpg
17	Prueba-Imagen	Imagen de prueba	G	9999999999999	\N	2017-07-09	2017-07-29	1	8	f.txt
18	Prueba Archivo	Prueba para mandar un archivo	I	9999999999999	22222222	2017-07-09	2017-07-28	1	8	GTAV_PROPIEDADES.xlsx
35	La historia de Nintendo #2	Historia de Nintendo PT 1 https://www.youtube.com/watch?v=x_zyf...\r\n\r\nMi canal de gameplays: https://www.youtube.com/channel/UCVyg...\r\n\r\nContacto/Negocios/Conferencias: fedediaza@gmail.com\r\n\r\n¿Quieres una playera? Info acá https://www.facebook.com/ProductosFed...\r\n\r\nSígueme también en las redes sociales:\r\n\r\nTwitter: https://twitter.com/SoyFedelobo\r\nFacebook: https://www.facebook.com/soyfedelobo\r\n\r\nMi canal en Twitch: http://www.twitch.tv/elfedelobo\r\n	PU	\N	\N	2017-07-24	2017-07-27	\N	8	\N
36	La historia de Nintendo #3	Mi canal de gameplays: https://www.youtube.com/channel/UCVyg...\r\n\r\nContacto/Negocios/Conferencias: fedediaza@gmail.com\r\n\r\n¿Quieres una playera? Info acá https://www.facebook.com/ProductosFed...\r\n\r\nSígueme también en las redes sociales:\r\n\r\nTwitter: https://twitter.com/SoyFedelobo\r\nFacebook: https://www.facebook.com/soyfedelobo\r\n\r\nMi canal en Twitch: http://www.twitch.tv/elfedelobo	PU	\N	\N	2017-07-24	2017-07-28	\N	8	\N
21	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\n\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
22	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\n\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
23	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\n\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
24	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\n\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
25	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
26	Historia de los videojuegos	Todos los derechos pertenecen a su autor fedelobo, visiten su canal para mas información.\r\nEl vídeo se sube de manera temporal, para una actividad en wix, y se eliminara cuando este concluya, el vídeo no esta monetizado.	PU	\N	\N	2017-07-24	2017-07-29	\N	\N	\N
37	EPISODIOS PILOTO PERDIDOS DE LAS CARICATURAS	⬇ SIGUEME EN MIS REDES SOCIALES ⬇\r\n🐦 Twitter: http://goo.gl/cxm1mZ\r\n👍 Facebook: http://goo.gl/9Pdqp6\r\n📷 Instagram: https://goo.gl/owVvyl\r\n\r\n⬇ CANCION DEL INTRO ⬇\r\n🎼 andrew applepie - bite your lips: https://goo.gl/LuezBW\r\n\r\n⬇ VIDEO SUGERIDO ⬇\r\nSatanas en Caricaturas: https://goo.gl/UofQGx\r\n\r\n⬇ NOTAS EXTRAS ⬇\r\nEstoy medio imbecil y no se porque dije que Johnny Quasar paso 15 años antes que Jimmy Neutron cuando en realidad fueron 2... perdon :3	I	9999999999999	22222222	2017-07-25	2017-07-25	1	8	lapis.jpg
38	¿De dónde viene?	Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable.	I	9999999999999	33333333	2017-07-25	2017-08-01	1	\N	lapis.jpg
39	Juegos de Wii U	Mi canal de gameplays: https://www.youtube.com/channel/UCVyg...\r\n\r\nContacto/Negocios/Conferencias: fedediaza@gmail.com\r\n\r\n¿Quieres una playera? Info acá https://www.facebook.com/ProductosFed...\r\n\r\nSígueme también en las redes sociales:\r\n\r\nTwitter: https://twitter.com/SoyFedelobo\r\nFacebook: https://www.facebook.com/soyfedelobo\r\n\r\nMi canal en Twitch: http://www.twitch.tv/elfedelobo	I	9999999999999	22222222	2017-07-25	2017-08-02	1	8	LAPIS.LAZULI.jpg
40	El pasaje estándar Lorem Ipsum, usado desde el año 1500.	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla mauris eu dolor placerat varius. Praesent auctor quam ut risus mattis mollis. Nunc in augue ut felis mollis laoreet. Pellentesque consectetur elit nibh, consequat mattis justo malesuada a. Proin rutrum, dolor nec fermentum varius, nulla lacus sollicitudin orci, sit amet auctor nulla odio sed massa. Integer libero est, cursus eget rhoncus sed, cursus nec velit. Donec blandit euismod eros. Morbi a cursus velit. Nam non odio magna. Integer ut lorem sit amet ligula sodales consectetur eget sit amet metus. Integer enim sapien, sagittis sit amet rutrum id, scelerisque id magna. Vestibulum vel bibendum risus. Vivamus elit ligula, scelerisque quis ultricies porttitor, pulvinar a felis. Duis venenatis mattis ornare. Ut blandit consequat mollis.	I	9999999999999	22222222	2017-07-25	2017-08-02	1	8	lapis2.jpg
41	Etiam faucibus pellentesque leo	Etiam faucibus pellentesque leo, eget mollis purus eleifend id. Nullam lacinia lacus vel tortor hendrerit, quis sollicitudin lectus tristique. Fusce eu auctor magna. Duis egestas magna ipsum, in convallis turpis faucibus nec. Duis interdum turpis nunc, sit amet pretium sem venenatis sed. Pellentesque fermentum maximus suscipit. Praesent diam turpis, sollicitudin nec pulvinar sit amet, egestas ac dui. Donec iaculis rutrum dolor ac efficitur. Nullam maximus augue a augue bibendum, sit amet venenatis magna consequat. Etiam a ligula eu odio mollis commodo in id risus. Duis quis pellentesque odio. Integer id accumsan orci. Pellentesque blandit, lectus nec mollis vehicula, purus turpis suscipit eros, non rutrum neque neque eget mauris. Mauris eu massa dolor.	I	9999999999999	33333333	2017-07-25	2017-08-03	1	8	lapis2.jpg
42	Lorem ipsum dolor sit ame	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id lectus varius, finibus risus eu, egestas nunc. Sed dui sem, vulputate nec pharetra at, sollicitudin eget ligula. Vestibulum interdum enim nisl, id egestas arcu ullamcorper vitae. Duis eu efficitur tortor, ac sodales lacus. In ac maximus dolor. Ut sed nunc venenatis, venenatis nisi at, tempor mauris. Cras sed iaculis risus, vitae dictum erat. Aenean tincidunt enim eu metus dignissim, ac sagittis orci aliquam. Vestibulum tellus felis, elementum nec massa eleifend, varius vestibulum leo. Quisque dapibus odio et quam porttitor, et luctus mi blandit. Praesent dui metus, dictum et est nec, ornare facilisis sem. Morbi sed ligula in neque ultrices imperdiet. Nunc blandit accumsan lectus in cursus.	I	9999999999999	33333333	2017-07-25	2017-08-04	1	8	LAPIS.LAZULI.jpg
43	Mauris ut nulla at enim eleifend vestibulum in sed est	Mauris ut nulla at enim eleifend vestibulum in sed est. Sed ac quam dui. In fringilla volutpat nisl, ut accumsan orci congue eu. Nam viverra consequat turpis, suscipit ultricies lorem interdum nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus orci eget eros bibendum, sed mollis odio sagittis. Morbi aliquam in leo vel pulvinar. Proin vel massa nunc. Vestibulum eros massa, varius a bibendum cursus, dictum vel massa. Mauris quis dignissim purus, ac pharetra neque.	I	9999999999999	33333333	2017-07-25	2017-08-05	1	8	
44	Maecenas et dolor eu diam eleifend facilisis. 	Maecenas et dolor eu diam eleifend facilisis. Aliquam cursus nibh nulla. Fusce at dolor nec augue cursus scelerisque tempor in sem. Integer tempus vehicula tortor, ut elementum felis tempus eget. Aliquam lobortis libero id libero egestas, lacinia rutrum risus aliquam. Etiam vel est lorem. Pellentesque quis feugiat nunc. Morbi sed est fermentum, viverra ante nec, mollis arcu. Donec vehicula nunc id semper semper. Fusce sit amet dapibus neque. Sed a diam quis ex placerat lacinia in eget quam.	I	9999999999999	33333333	2017-07-25	2017-08-05	1	8	33333333_lapis2_4.jpg
45	Lorem ipsum dolor sit amet,	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus blandit cursus. Suspendisse vitae elit sit amet nibh vestibulum tempus. Mauris auctor nibh mi, et laoreet magna laoreet sed. Phasellus vel laoreet enim. Aenean non purus lacus. Suspendisse vel dolor et nulla pulvinar tempus posuere at neque. Morbi rutrum, dolor a pellentesque vestibulum, augue justo cursus magna, quis feugiat turpis mi ut turpis. Sed porta dui nec lacinia volutpat. Nulla ullamcorper odio nulla. In eu nisl imperdiet, condimentum arcu sit amet, tempor turpis.	PU	\N	\N	2017-07-26	2017-07-29	\N	8	\N
33	Nam nec magna sed velit consequat vulputate	Nam nec magna sed velit consequat vulputate. Pellentesque mattis justo vehicula, condimentum nisl et, mattis mi. Donec ornare magna non risus commodo, quis interdum sapien ullamcorper. Suspendisse suscipit nunc et risus molestie aliquet. Quisque et sapien bibendum, efficitur risus non, pharetra sem. Maecenas vehicula velit mi, ac dapibus odio tempor vitae. Nunc purus ante, viverra vel pulvinar nec, fermentum volutpat lacus. Donec in massa at augue dignissim bibendum. In tortor turpis, vulputate vel mollis in, convallis a diam. Mauris tincidunt mi in risus vulputate gravida. In hac habitasse platea dictumst.	PU	\N	\N	2017-07-24	2017-07-25	\N	8	\N
46	Mi Opinión: Warcraft	Sed nec molestie odio, interdum volutpat libero. Nulla semper consectetur tellus vitae tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ut turpis quis lacus ultrices egestas. Sed pellentesque magna a orci iaculis vehicula. Duis pretium elit nec pellentesque vulputate. Suspendisse et magna non justo lacinia interdum a quis justo. In a tortor pharetra nisl viverra vehicula a eu velit. Nam dictum eros efficitur cursus laoreet. Nulla tincidunt bibendum placerat. Praesent vulputate justo at nulla pretium, vitae laoreet justo sodales.	I	9999999999999	22222222	2017-07-26	2017-08-01	1	8	22222222_logo1_1.png
50	fads	asdffasdfa	G	9999999999999	\N	2017-07-26	2017-07-29	1	8	logo1_2.png
47	Suicide Squad: Mi opinión	Vivamus quis velit bibendum, molestie sapien nec, tempor mauris. Nullam tristique tortor quis tincidunt pretium. Vivamus quis lobortis quam, eget ullamcorper neque. Donec placerat odio ac ex venenatis interdum. Proin semper vulputate libero sed elementum. Duis blandit malesuada sem at semper. Suspendisse vel tempus erat. Fusce ac purus urna. In vehicula ex eu lorem venenatis vehicula. Praesent consequat neque nec libero vehicula posuere. Vestibulum ut ante a eros luctus fringilla vitae egestas ligula. Donec aliquet molestie tempor. Mauris sed congue lorem.	I	9999999999999	22222222	2017-07-26	2017-08-05	1	8	22222222_GTAV_PROPIEDADES_1.xlsx
51	fads	asdffasdfa	G	9999999999999	\N	2017-07-26	2017-07-29	1	8	logo1_3.png
48	Arte y descarte	Integer aliquam, libero non dapibus accumsan, eros mauris posuere enim, ut tincidunt mi elit eu neque. Integer in dapibus neque. Ut mattis vulputate ex consequat imperdiet. Etiam sit amet auctor dolor, ut fringilla lectus. Sed tempor tristique placerat. Aliquam imperdiet tempor ornare. Aenean mattis mi at posuere semper. Sed congue nisl nibh, eu ullamcorper purus porttitor ut. Fusce nec metus est. Lorem ipsum dolor sit amet, consectetur adipiscing elit.	I	9999999999999	22222222	2017-07-26	2017-08-06	1	8	
49	fas	asfda	I	9999999999999	22222222	2017-07-26	2017-08-04	1	8	
52	fads	asdffasdfa	G	9999999999999	\N	2017-07-26	2017-07-29	1	8	logo1_4.png
53	fads	asdffasdfa	G	9999999999999	\N	2017-07-26	2017-07-29	1	8	logo1_5.png
54	Mensaje grupal 1	Aenean tempor eu metus vitae molestie. Phasellus pellentesque ipsum nunc, eget rutrum leo volutpat in. Fusce id vehicula augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras feugiat nulla quis ante cursus imperdiet. Quisque a purus in urna tristique porttitor vitae vitae tortor. Sed quis imperdiet tortor, vitae rhoncus magna. Praesent velit turpis, maximus in commodo at, sodales et mi. Nullam sed porta massa, tempus semper sem.	G	9999999999999	\N	2017-07-26	2017-08-07	1	8	logo2_1.png
55	Dream Fallen Con Nadia	El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de "de Finibus Bonorum et Malorum" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.	G	9999999999999	\N	2017-07-26	2017-08-12	1	8	logo2_2.png
56	Terror En La Vecindad Del Chavo	Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estará libre de repeticiones, humor agregado o palabras no características del lenguaje, etc.	G	9999999999999	\N	2017-07-26	2017-08-19	1	8	logo3_1.png
57	El Chavo del Ocho	Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).	G	9999999999999	\N	2017-07-26	2017-08-08	1	8	logo4_1.png
58	Resident Evil 6 con Nadia	Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.	G	9999999999999	\N	2017-07-26	2017-08-08	1	8	
59	Cada Quien por Su Lado	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et elementum metus. Pellentesque vitae sapien magna. Proin auctor in enim a lacinia. Etiam ac diam nec dolor viverra tempus ut id ligula. In sagittis tristique facilisis. Vivamus non ligula ante. Suspendisse ut interdum felis. Donec malesuada neque at diam ultrices luctus. Donec et nibh porttitor, aliquet nunc a, dignissim ligula. Vestibulum in massa nec dui semper tempor.	I	9999999999999	33333333	2017-07-26	2017-08-05	1	8	LAPIS.LAZULI_1.jpg
60	Cada Quien por Su Lado	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et elementum metus. Pellentesque vitae sapien magna. Proin auctor in enim a lacinia. Etiam ac diam nec dolor viverra tempus ut id ligula. In sagittis tristique facilisis. Vivamus non ligula ante. Suspendisse ut interdum felis. Donec malesuada neque at diam ultrices luctus. Donec et nibh porttitor, aliquet nunc a, dignissim ligula. Vestibulum in massa nec dui semper tempor.	I	9999999999999	33333333	2017-07-26	2017-08-05	1	8	LAPIS.LAZULI_2.jpg
61	Cada Quien por Su Lado	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et elementum metus. Pellentesque vitae sapien magna. Proin auctor in enim a lacinia. Etiam ac diam nec dolor viverra tempus ut id ligula. In sagittis tristique facilisis. Vivamus non ligula ante. Suspendisse ut interdum felis. Donec malesuada neque at diam ultrices luctus. Donec et nibh porttitor, aliquet nunc a, dignissim ligula. Vestibulum in massa nec dui semper tempor.	I	9999999999999	33333333	2017-07-26	2017-08-05	1	8	_LAPIS.LAZULI_1.jpg
62	Cada Quien por Su Lado	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et elementum metus. Pellentesque vitae sapien magna. Proin auctor in enim a lacinia. Etiam ac diam nec dolor viverra tempus ut id ligula. In sagittis tristique facilisis. Vivamus non ligula ante. Suspendisse ut interdum felis. Donec malesuada neque at diam ultrices luctus. Donec et nibh porttitor, aliquet nunc a, dignissim ligula. Vestibulum in massa nec dui semper tempor.	I	9999999999999	33333333	2017-07-26	2017-08-05	1	8	33333333_LAPIS.LAZULI_2.jpg
63	Resident Evil 6 con Nadia Pt 1	Aliquam tristique leo non sem suscipit, quis scelerisque magna convallis. Etiam eget consequat mi. Pellentesque est ipsum, facilisis eget imperdiet vel, finibus id metus. Vivamus massa enim, rhoncus vel egestas ut, consequat fermentum augue. Integer ac accumsan eros, non cursus est. Quisque consequat porttitor lectus at tristique. Nullam ornare mauris eu nibh tempor, ut venenatis libero dignissim. Integer eu dui tristique, pharetra dui sed, eleifend nulla. Proin hendrerit sem at urna lacinia gravida. Donec convallis orci dui, at lacinia lorem pharetra pulvinar.	G	9999999999999	\N	2017-07-26	2017-08-12	2	8	lapis2_1.jpg
64	Cada Quien por Su Lado	Maecenas id tellus nunc. Suspendisse vehicula diam id mauris tincidunt, ut venenatis orci lobortis. Fusce at dui tellus. Etiam interdum magna in sapien fermentum, nec porta neque pretium. Maecenas malesuada non leo sit amet luctus. Donec quis ultricies libero. Curabitur nulla sem, dignissim in sollicitudin ac, mollis fermentum nisi. Praesent vitae orci orci. Integer at pellentesque orci, in hendrerit dolor. Suspendisse dignissim consectetur euismod. Aenean ut nunc sit amet sem blandit aliquam luctus at massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec dui risus, convallis at posuere id, accumsan at justo. Etiam vehicula at mi eget varius. Praesent eget pharetra ex, vitae iaculis elit. Mauris eget euismod purus.	I	9999999999999	55555555	2017-07-26	2017-08-13	2	8	55555555_logo1_1.png
65	Mucho ruido y pocas nueces	Quisque eu rhoncus arcu, sed hendrerit lacus. Vestibulum facilisis efficitur semper. Cras dolor nisl, venenatis vel tellus et, ultrices porttitor mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean congue velit at diam dictum condimentum. Nam eu odio congue mauris pellentesque fringilla at eget metus. Duis dolor neque, rutrum vitae commodo nec, porta eu nisl. Vivamus mollis libero nec blandit bibendum. Vivamus dui dolor, facilisis eget metus ac, finibus consectetur tellus. In non justo viverra mi aliquam sagittis. Aenean euismod, orci at tincidunt rutrum, massa nisi vulputate nibh, a ultrices sapien sapien et tellus. Integer fermentum at odio quis hendrerit.	G	9999999999999	\N	2017-07-27	2017-07-30	2	8	
66	La zarzuela del ciclón	Aliquam erat volutpat. Aliquam hendrerit tincidunt placerat. Sed blandit finibus eros. Quisque porta consectetur nisl nec laoreet. Maecenas non mattis odio. In accumsan tempus tempor. Nulla vestibulum imperdiet aliquet. Curabitur nec mi quis tortor blandit mattis eu quis neque. Pellentesque eu commodo diam. Pellentesque efficitur risus ut euismod viverra. Donec at ipsum non eros eleifend semper. Vestibulum rutrum erat at finibus gravida. Fusce faucibus urna aliquam leo porttitor, in pretium enim auctor. Ut massa lacus, ultrices at aliquam at, interdum ut diam. Cras at metus a diam sollicitudin rhoncus quis in magna. Nam vel finibus lacus.	G	9999999999999	\N	2017-07-27	2017-07-29	2	8	
67	TEORIAS INCREIBLES DE RICK AND MORTY	Vestibulum purus augue, bibendum sit amet elit sit amet, euismod suscipit purus. Pellentesque bibendum scelerisque tellus, id tempus orci iaculis sit amet. Sed vitae justo mauris. Cras vulputate volutpat lectus, at elementum elit feugiat et. Etiam in massa nisi. Maecenas vel enim sit amet urna fringilla ullamcorper. Nulla nibh magna, hendrerit et enim nec, hendrerit vestibulum ipsum. Nunc ut erat ac elit pharetra dictum. Morbi maximus quis mauris eu aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec nisi risus, ornare et risus vitae, facilisis egestas nisl. Pellentesque et laoreet eros, nec scelerisque quam.	G	9999999999999	\N	2017-07-27	2017-07-31	1	8	logo4_2.png
68	IT (ESO) - Trailer 2 - Oficial Warner Bros. Pictures	Pellentesque vitae nisi vitae lacus dignissim ullamcorper eu et velit. Etiam sed libero tortor. Maecenas lacinia dui quis sem ultricies, eu tempus sem blandit. Sed vel commodo metus, sed lacinia orci. Integer tempus sit amet ex et semper. In hac habitasse platea dictumst. Morbi eleifend semper neque, in bibendum mauris scelerisque porta.	G	9999999999999	\N	2017-07-27	2017-08-01	1	8	
69	Origin 4 | Marvel's Spider-Man	Pellentesque vitae nisi vitae lacus dignissim ullamcorper eu et velit. Etiam sed libero tortor. Maecenas lacinia dui quis sem ultricies, eu tempus sem blandit. Sed vel commodo metus, sed lacinia orci. Integer tempus sit amet ex et semper. In hac habitasse platea dictumst. Morbi eleifend semper neque, in bibendum mauris scelerisque porta.	G	9999999999999	\N	2017-07-27	2017-07-26	1	8	
70	Top 5 Juegos de God Of War	Integer sed libero ut libero sodales placerat. Quisque dapibus turpis nisl, in fermentum ex mollis porta. In porttitor hendrerit diam ac rutrum. Pellentesque finibus fringilla lectus suscipit volutpat. In tincidunt augue sed turpis sagittis pharetra. Integer non velit justo. Nunc vel lectus quis sem feugiat maximus. Phasellus feugiat felis purus, tristique viverra dui ullamcorper ac. Curabitur non nisi luctus, faucibus tortor ac, convallis tellus. Aliquam eget elementum purus. Mauris condimentum nec eros id cursus. Aenean tristique mi id risus consectetur dictum. Donec non felis consequat neque consequat pretium a quis ipsum. Etiam libero sapien, tempor sed pretium ac, egestas et ex. Sed cursus est quis consequat molestie.	I	9999999999999	22222222	2017-07-27	2017-08-01	1	8	22222222_logo3_1.png
\.


--
-- Name: msj_cvemsj_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('msj_cvemsj_seq', 71, true);


--
-- Data for Name: observacion; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY observacion (cveobservacion, observacion, cveletra, cveperiodo, cvepromotor, fecha) FROM stdin;
2	Ob	1	8	9999999999999	2017-06-29
3	fdasaf	1	8	9999999999999	2017-06-30
4	manda error...	1	8	9999999999999	2017-07-02
5	manda error...	1	8	9999999999999	2017-07-02
6	error...	1	8	9999999999999	2017-07-02
7	dfa	1	8	9999999999999	2017-07-02
8	print_r??	1	8	9999999999999	2017-07-02
9	fadsfas	1	8	9999999999999	2017-07-02
10	fadsfas	1	8	9999999999999	2017-07-02
11	fadsfas	1	8	9999999999999	2017-07-02
12	prueba...	1	8	9999999999999	2017-07-02
13	prueba...	1	8	9999999999999	2017-07-02
14	fdsa	1	8	9999999999999	2017-07-02
15	fdsa	1	8	9999999999999	2017-07-02
16	fdsa	1	8	9999999999999	2017-07-02
17	fdsa	1	8	9999999999999	2017-07-02
18	fdsa	1	8	9999999999999	2017-07-02
19	fdsa	1	8	9999999999999	2017-07-02
20	fdsa	1	8	9999999999999	2017-07-02
21	fads	1	8	9999999999999	2017-07-02
22	fads	1	8	9999999999999	2017-07-02
23	fasd	1	8	9999999999999	2017-07-02
24	fads\r\n	1	8	9999999999999	2017-07-02
25	efasdf\r\n	1	8	9999999999999	2017-07-02
26	dfas\r\n	1	8	9999999999999	2017-07-02
27	fasd	1	8	9999999999999	2017-07-02
28	FDSA	1	8	9999999999999	2017-07-02
29	dfasd	1	8	9999999999999	2017-07-02
30	a\r\n	1	8	9999999999999	2017-07-02
31	b	1	8	9999999999999	2017-07-02
32	c	1	8	9999999999999	2017-07-02
33	d	1	8	9999999999999	2017-07-02
34	e	1	8	9999999999999	2017-07-02
35	fff	1	8	9999999999999	2017-07-02
36	fas\r\n	1	8	9999999999999	2017-07-02
37	as	1	8	9999999999999	2017-07-02
\.


--
-- Name: observacion_cveobservacion_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('observacion_cveobservacion_seq', 37, true);


--
-- Data for Name: periodo; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY periodo (fechainicio, fechafinal, cveperiodo) FROM stdin;
2017-03-22	2017-08-27	8
2017-08-21	2017-12-22	13
2017-09-30	2017-11-04	14
\.


--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('periodo_cveperiodo_seq', 14, true);


--
-- Data for Name: rol; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY rol (cverol, rol) FROM stdin;
1	Administrador
2	Promotor
3	Alumno
\.


--
-- Name: rol_cverol_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('rol_cverol_seq', 3, true);


--
-- Data for Name: sala; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY sala (ubicacion, cveperiodo, disponible, cvesala) FROM stdin;
SALA DE USOS MÚLTIPLES	8	\N	1
Murkoff	8	\N	2
Sala de Usos Múltiples	13	\N	3
Sala 1 Biblioteca Campus 1	13	\N	4
Sala 1 Biblioteca Campus 2	13	\N	5
\.


--
-- Name: sala_tmpsala_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('sala_tmpsala_seq', 5, true);


--
-- Data for Name: tipomsj; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY tipomsj (cvetipomsj, descripcion) FROM stdin;
G	Grupal
I	Individual
PU	Público
\.


--
-- Data for Name: usuario_rol; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY usuario_rol (cveusuario, cverol) FROM stdin;
9999999999999	1
9999999999999	2
8888888888888	1
7777777777777	2
11111111	3
22222222	3
33333333	3
44444444	3
55555555	3
0000000000000	2
66666666	3
1111111111111	2
RIJE640621MGT	2
13030623	3
13030624	3
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY usuarios (cveusuario, nombre, pass, clave, correo, estado_credito, validacion, foto) FROM stdin;
22222222	Alumno 2	bae5e3208a3c700e3db642b6631e95b9	\N	22222222@itcelaya.edu.mx	No Permitido	Aceptado	22222222.jpg
11111111	Alumno 1	1bbd886460827015e5d605ed44252251	\N	11111111@itcelaya.edu.mx	No Permitido	Aceptado	default.png
1111111111111	Claude Speed	9dcbf642c78137f656ba7c24381ac25b	\N	1111111111111@itcelaya.edu.mx	\N	Aceptado	default.png
13030623	Juan Pérez	52da227ab578c43623788b10c731dd37	\N	13030623@itcelaya.edu.mx	\N	Aceptado	\N
RIJE640621MGT	José Jaramillo	aed86f810cde634d0bbe2eb7339b36b0	\N	radogan@hotmail.com	\N	Aceptado	\N
13030624	Alumno 4	37001b1859b636c45c509c5f23943318	\N	13030624@itcelaya.edu.mx	\N	Aceptado	\N
9999999999999	DIOS	81dc9bdb52d04dc20036dbd8313ed055	\N	jorge2118burguer@gmail.com	\N	Aceptado	default.png
0000000000000	Toni Cipriani	81dc9bdb52d04dc20036dbd8313ed055	\N	toni@gmail.com	\N	Aceptado	default.png
33333333	Alumno 3	d27d320c27c3033b7883347d8beca317	\N	33333333@itcelaya.edu.mx	No Permitido	Aceptado	default.png
66666666	Tommy Varcetti	7c497868c9e6d3e4cf2e87396372cd3b	\N	66666666@itcelaya.edu.mx	\N	Aceptado	default.png
44444444	Pablo	b857eed5c9405c1f2b98048aae506792	\N	44444444@itcelaya.edu.mx	No Permitido	\N	default.png
55555555	Pablo 2	f638f4354ff089323d1a5f78fd8f63ca	\N	55555555@itcelaya.edu.mx	No Permitido	Aceptado	default.png
8888888888888	Jesus	041902fb6f1e630ffb88d392348ec36e	\N	radogan1928@hotmail.com	\N	Aceptado	default.png
7777777777777	Promotor 1	8d868b300b9aab56571724c11e280432	\N	7777777777777@hotmail.com	\N	Aceptado	default.png
\.


--
-- Name: abecedariopk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY abecedario
    ADD CONSTRAINT abecedariopk PRIMARY KEY (cve);


--
-- Name: alumnopk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT alumnopk PRIMARY KEY (cveusuario);


--
-- Name: bit_gropk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY bitacora_groseria
    ADD CONSTRAINT bit_gropk PRIMARY KEY (cvebitg);


--
-- Name: comentariopk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY comentario
    ADD CONSTRAINT comentariopk PRIMARY KEY (cvecomentario);


--
-- Name: diapk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY dia
    ADD CONSTRAINT diapk PRIMARY KEY (cvedia);


--
-- Name: esp_usupk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY especialidad_usuario
    ADD CONSTRAINT esp_usupk PRIMARY KEY (cveusuario);


--
-- Name: especialidadpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY especialidad
    ADD CONSTRAINT especialidadpk PRIMARY KEY (cveespecialidad);


--
-- Name: estadopk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT estadopk PRIMARY KEY (cveestado);


--
-- Name: evaluacionpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY evaluacion
    ADD CONSTRAINT evaluacionpk PRIMARY KEY (cveeval);


--
-- Name: groseriapk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY groseria
    ADD CONSTRAINT groseriapk PRIMARY KEY (cvegroseria, groseria);


--
-- Name: horaspk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY horas
    ADD CONSTRAINT horaspk PRIMARY KEY (cvehoras);


--
-- Name: idx_laboral; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT idx_laboral PRIMARY KEY (cvelaboral);


--
-- Name: laboralun; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralun UNIQUE (cveperiodo, cvehoras, cvedia, cveletra);


--
-- Name: lecturapk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturapk PRIMARY KEY (cvelectura);


--
-- Name: libropk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY libro
    ADD CONSTRAINT libropk PRIMARY KEY (cvelibro);


--
-- Name: lista_librospk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librospk PRIMARY KEY (cvelista);


--
-- Name: msjfk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk PRIMARY KEY (cvemsj);


--
-- Name: observacionpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY observacion
    ADD CONSTRAINT observacionpk PRIMARY KEY (cveobservacion);


--
-- Name: periodopk2; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY periodo
    ADD CONSTRAINT periodopk2 PRIMARY KEY (cveperiodo);


--
-- Name: periodouq; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY periodo
    ADD CONSTRAINT periodouq UNIQUE (fechainicio, fechafinal);


--
-- Name: rolpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY rol
    ADD CONSTRAINT rolpk PRIMARY KEY (cverol);


--
-- Name: tipomsjpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY tipomsj
    ADD CONSTRAINT tipomsjpk PRIMARY KEY (cvetipomsj);


--
-- Name: usuario_rolpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY usuario_rol
    ADD CONSTRAINT usuario_rolpk PRIMARY KEY (cveusuario, cverol);


--
-- Name: usuarios_correo_key; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_correo_key UNIQUE (correo);


--
-- Name: bit_grofk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY bitacora_groseria
    ADD CONSTRAINT bit_grofk FOREIGN KEY (cveusuario) REFERENCES usuarios(cveusuario);


--
-- Name: comentariofk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY comentario
    ADD CONSTRAINT comentariofk FOREIGN KEY (cvelibro) REFERENCES libro(cvelibro);


--
-- Name: comentariofk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY comentario
    ADD CONSTRAINT comentariofk2 FOREIGN KEY (cveusuario) REFERENCES usuarios(cveusuario);


--
-- Name: comentariofk3; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY comentario
    ADD CONSTRAINT comentariofk3 FOREIGN KEY (cverespuesta) REFERENCES comentario(cvecomentario);


--
-- Name: esp_usufk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY especialidad_usuario
    ADD CONSTRAINT esp_usufk FOREIGN KEY (cveusuario) REFERENCES usuarios(cveusuario);


--
-- Name: esp_usufk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY especialidad_usuario
    ADD CONSTRAINT esp_usufk2 FOREIGN KEY (cveespecialidad) REFERENCES especialidad(cveespecialidad);


--
-- Name: evaluacionfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY evaluacion
    ADD CONSTRAINT evaluacionfk FOREIGN KEY (cvelectura) REFERENCES lectura(cvelectura) ON DELETE CASCADE;


--
-- Name: laboralfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo) ON DELETE CASCADE;


--
-- Name: laboralfk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk2 FOREIGN KEY (cvehoras) REFERENCES horas(cvehoras);


--
-- Name: laboralfk3; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk3 FOREIGN KEY (cvedia) REFERENCES dia(cvedia);


--
-- Name: laboralfk5; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk5 FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


--
-- Name: laboralfk6; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk6 FOREIGN KEY (cvepromotor) REFERENCES usuarios(cveusuario);


--
-- Name: laboralfk7; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk7 FOREIGN KEY (cvelibro_grupal) REFERENCES libro(cvelibro);


--
-- Name: lecturafk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo) ON DELETE CASCADE;


--
-- Name: lecturafk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk2 FOREIGN KEY (nocontrol) REFERENCES usuarios(cveusuario);


--
-- Name: lecturafk3; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk3 FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


--
-- Name: lista_librosfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librosfk FOREIGN KEY (cvelibro) REFERENCES libro(cvelibro);


--
-- Name: lista_librosfk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librosfk2 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo) ON DELETE CASCADE;


--
-- Name: lista_librosfk3; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librosfk3 FOREIGN KEY (cvelectura) REFERENCES lectura(cvelectura);


--
-- Name: lista_librosfk4; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librosfk4 FOREIGN KEY (cveestado) REFERENCES estado(cveestado);


--
-- Name: msjfk1; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk1 FOREIGN KEY (emisor) REFERENCES usuarios(cveusuario);


--
-- Name: msjfk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk2 FOREIGN KEY (receptor) REFERENCES usuarios(cveusuario);


--
-- Name: msjfk4; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk4 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo) ON DELETE CASCADE;


--
-- Name: msjfk5; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk5 FOREIGN KEY (tipo) REFERENCES tipomsj(cvetipomsj);


--
-- Name: msjkf3; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjkf3 FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


--
-- Name: observacionfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY observacion
    ADD CONSTRAINT observacionfk FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


--
-- Name: observacionfk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY observacion
    ADD CONSTRAINT observacionfk2 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo) ON DELETE CASCADE;


--
-- Name: observacionfk3; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY observacion
    ADD CONSTRAINT observacionfk3 FOREIGN KEY (cvepromotor) REFERENCES usuarios(cveusuario);


--
-- Name: salafk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY sala
    ADD CONSTRAINT salafk FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo) ON DELETE CASCADE;


--
-- Name: usuario_rolfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY usuario_rol
    ADD CONSTRAINT usuario_rolfk FOREIGN KEY (cveusuario) REFERENCES usuarios(cveusuario);


--
-- Name: usuario_rolfk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY usuario_rol
    ADD CONSTRAINT usuario_rolfk2 FOREIGN KEY (cverol) REFERENCES rol(cverol);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

