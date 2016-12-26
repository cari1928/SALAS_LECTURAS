--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.3
-- Dumped by pg_dump version 9.5.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'WIN1252';
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

--
-- Name: añadeest(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION "añadeest"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
  BEGIN
       update sala set numalumnos = numalumnos + 1 where cvesala = NEW.cvesala;
       RETURN NEW;
  END;
$$;


ALTER FUNCTION public."añadeest"() OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: abecedario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE abecedario (
    cve integer NOT NULL,
    letra character varying(1)
);


ALTER TABLE abecedario OWNER TO postgres;

--
-- Name: abecedario_cve_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE abecedario_cve_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE abecedario_cve_seq OWNER TO postgres;

--
-- Name: abecedario_cve_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE abecedario_cve_seq OWNED BY abecedario.cve;


--
-- Name: dia; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE dia (
    cvedia integer NOT NULL,
    nombre character varying(25)
);


ALTER TABLE dia OWNER TO postgres;

--
-- Name: especialidad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE especialidad (
    cveespecialidad character varying(3) NOT NULL,
    nombre character varying(40)
);


ALTER TABLE especialidad OWNER TO postgres;

--
-- Name: evaluacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE evaluacion (
    comprension integer,
    motivacion integer,
    reporte integer,
    tema integer,
    participacion integer,
    terminado integer,
    cveeval integer NOT NULL,
    cvelectura integer NOT NULL,
    CONSTRAINT evaluacionck1 CHECK (((comprension >= 0) AND (comprension <= 100))),
    CONSTRAINT evaluacionck2 CHECK (((motivacion >= 0) AND (motivacion <= 100))),
    CONSTRAINT evaluacionck3 CHECK (((reporte >= 0) AND (reporte <= 100))),
    CONSTRAINT evaluacionck4 CHECK (((tema >= 0) AND (tema <= 100))),
    CONSTRAINT evaluacionck5 CHECK (((participacion >= 0) AND (participacion <= 100))),
    CONSTRAINT evaluacionck6 CHECK (((terminado >= 0) AND (terminado <= 100)))
);


ALTER TABLE evaluacion OWNER TO postgres;

--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE evaluacion_prueba_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE evaluacion_prueba_seq OWNER TO postgres;

--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE evaluacion_prueba_seq OWNED BY evaluacion.cveeval;


--
-- Name: horas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE horas (
    cvehoras integer NOT NULL,
    hora_inicial time without time zone,
    hora_final time without time zone
);


ALTER TABLE horas OWNER TO postgres;

--
-- Name: horas_cvehoras_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE horas_cvehoras_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE horas_cvehoras_seq OWNER TO postgres;

--
-- Name: horas_cvehoras_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE horas_cvehoras_seq OWNED BY horas.cvehoras;


--
-- Name: laboral; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE laboral (
    cvelaboral integer NOT NULL,
    cveperiodo integer NOT NULL,
    cvehoras integer NOT NULL,
    cvedia integer NOT NULL,
    cvesala character varying(3),
    cveletra integer
);


ALTER TABLE laboral OWNER TO postgres;

--
-- Name: laboral_cvelaboral_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE laboral_cvelaboral_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE laboral_cvelaboral_seq OWNER TO postgres;

--
-- Name: laboral_cvelaboral_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE laboral_cvelaboral_seq OWNED BY laboral.cvelaboral;


--
-- Name: lectura; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE lectura (
    cvelectura integer NOT NULL,
    cvepromotor character varying(13) NOT NULL,
    nocontrol character varying(13) NOT NULL,
    cveletra integer NOT NULL
);


ALTER TABLE lectura OWNER TO postgres;

--
-- Name: lectura_cvelectura_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE lectura_cvelectura_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE lectura_cvelectura_seq OWNER TO postgres;

--
-- Name: lectura_cvelectura_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE lectura_cvelectura_seq OWNED BY lectura.cvelectura;


--
-- Name: libro; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE libro (
    autor character varying(75),
    titulo character varying(100),
    cvelibro integer NOT NULL
);


ALTER TABLE libro OWNER TO postgres;

--
-- Name: libro_cvelibro_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE libro_cvelibro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE libro_cvelibro_seq OWNER TO postgres;

--
-- Name: libro_cvelibro_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE libro_cvelibro_seq OWNED BY libro.cvelibro;


--
-- Name: lista_libros; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE lista_libros (
    cvelista integer NOT NULL,
    cvelibro integer NOT NULL,
    cvelectura integer NOT NULL,
    cveperiodo integer NOT NULL
);


ALTER TABLE lista_libros OWNER TO postgres;

--
-- Name: lista_libros_cvelista_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE lista_libros_cvelista_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE lista_libros_cvelista_seq OWNER TO postgres;

--
-- Name: lista_libros_cvelista_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE lista_libros_cvelista_seq OWNED BY lista_libros.cvelista;


--
-- Name: msj; Type: TABLE; Schema: public; Owner: postgres
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
    cveperiodo integer
);


ALTER TABLE msj OWNER TO postgres;

--
-- Name: msj_cvemsj_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE msj_cvemsj_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE msj_cvemsj_seq OWNER TO postgres;

--
-- Name: msj_cvemsj_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE msj_cvemsj_seq OWNED BY msj.cvemsj;


--
-- Name: periodo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE periodo (
    fechainicio date NOT NULL,
    fechafinal date NOT NULL,
    cveperiodo integer NOT NULL
);


ALTER TABLE periodo OWNER TO postgres;

--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE periodo_cveperiodo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE periodo_cveperiodo_seq OWNER TO postgres;

--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE periodo_cveperiodo_seq OWNED BY periodo.cveperiodo;


--
-- Name: sala; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE sala (
    cvesala character varying(3) NOT NULL,
    ubicacion character varying(50),
    limite integer,
    nombre character varying(75)
);


ALTER TABLE sala OWNER TO postgres;

--
-- Name: tipomsj; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tipomsj (
    cvetipomsj character varying(2) NOT NULL,
    descripcion character varying(10)
);


ALTER TABLE tipomsj OWNER TO postgres;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE usuarios (
    cveusuario character varying(13) NOT NULL,
    nombre character varying(50),
    pass character varying(32),
    cveespecialidad character varying(3),
    rol character varying(1),
    clave character varying(32),
    correo character varying(75)
);


ALTER TABLE usuarios OWNER TO postgres;

--
-- Name: cve; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY abecedario ALTER COLUMN cve SET DEFAULT nextval('abecedario_cve_seq'::regclass);


--
-- Name: cveeval; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evaluacion ALTER COLUMN cveeval SET DEFAULT nextval('evaluacion_prueba_seq'::regclass);


--
-- Name: cvehoras; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY horas ALTER COLUMN cvehoras SET DEFAULT nextval('horas_cvehoras_seq'::regclass);


--
-- Name: cvelaboral; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY laboral ALTER COLUMN cvelaboral SET DEFAULT nextval('laboral_cvelaboral_seq'::regclass);


--
-- Name: cvelectura; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura ALTER COLUMN cvelectura SET DEFAULT nextval('lectura_cvelectura_seq'::regclass);


--
-- Name: cvelibro; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY libro ALTER COLUMN cvelibro SET DEFAULT nextval('libro_cvelibro_seq'::regclass);


--
-- Name: cvelista; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lista_libros ALTER COLUMN cvelista SET DEFAULT nextval('lista_libros_cvelista_seq'::regclass);


--
-- Name: cvemsj; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY msj ALTER COLUMN cvemsj SET DEFAULT nextval('msj_cvemsj_seq'::regclass);


--
-- Name: cveperiodo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY periodo ALTER COLUMN cveperiodo SET DEFAULT nextval('periodo_cveperiodo_seq'::regclass);


--
-- Data for Name: abecedario; Type: TABLE DATA; Schema: public; Owner: postgres
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
-- Name: abecedario_cve_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('abecedario_cve_seq', 26, true);


--
-- Data for Name: dia; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY dia (cvedia, nombre) FROM stdin;
1	Lunes
2	Martes
3	Miércoles
4	Jueves
5	Viernes
6	Sábado
7	Domingo
\.


--
-- Data for Name: especialidad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY especialidad (cveespecialidad, nombre) FROM stdin;
ISC	Ingeniería En Sistemas Computacionales
II	Ingeniería Informática
IM	Ingeniería Mecatrónica
IA	Ingeniería Ambiental
IB	Ingeniería Bioquímica
IGE	Ingeniería Gestión Empresarial
IIN	Ingeniería Industrial
IME	Ingeniería Mecánica
IE	Ingeniería Electrónica 
IQ	Ingeniería Química
LAE	licenciatura En Administración
\.


--
-- Data for Name: evaluacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY evaluacion (comprension, motivacion, reporte, tema, participacion, terminado, cveeval, cvelectura) FROM stdin;
\.


--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('evaluacion_prueba_seq', 10, true);


--
-- Data for Name: horas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY horas (cvehoras, hora_inicial, hora_final) FROM stdin;
0	13:02:02.368	15:23:41.568
1	03:08:58.368	\N
2	\N	21:05:21.024
3	19:35:10.208	\N
4	04:46:02.24	16:58:39.488
5	05:43:59.44	09:30:14.912
6	17:10:57.792	12:08:19.712
7	23:46:37.184	08:59:19.936
8	16:09:35.488	00:53:49.312
9	23:19:44.384	13:08:21.632
10	09:46:44.736	04:01:41.44
11	05:35:53.984	04:30:02.368
12	15:59:48.352	17:15:10.72
13	09:57:07.328	18:28:00.768
14	10:39:15.968	11:22:34.496
15	01:23:12.64	00:22:57.92
16	\N	16:32:34.816
17	08:51:51.936	17:07:39.776
18	11:07:35.424	06:02:52.928
19	03:40:30.08	02:01:49.44
20	09:25:22.688	03:40:49.152
21	\N	13:19:04.704
22	20:08:27.248	16:40:15.104
23	\N	01:35:04.192
24	08:09:34.08	19:05:34.976
25	23:31:37.6	03:22:59.968
26	\N	\N
27	08:22:08.768	21:32:12.8
28	06:14:53.824	15:05:06.304
29	23:57:36.64	\N
30	04:37:40.096	05:08:06.912
31	\N	\N
32	21:51:05.44	06:47:34.912
33	22:36:15.232	08:56:04.608
34	04:02:00.32	23:47:49.312
35	19:50:51.264	08:30:30.912
36	10:09:27.04	16:48:25.728
37	19:49:35.872	\N
38	10:28:17.152	04:18:52.544
39	15:24:59.776	06:55:45.664
40	03:44:52.864	12:42:32.704
41	08:02:25.408	22:03:14.816
42	16:57:29.856	04:49:11.552
43	00:39:47.328	12:21:51.872
44	20:27:31.84	07:29:48.16
45	20:02:41.92	15:21:21.152
46	20:39:57.184	22:34:59.072
47	20:21:19.104	13:35:38.624
48	06:17:28.832	10:03:20.064
49	15:58:54.464	05:46:27.84
50	03:55:15.456	16:37:54.304
51	15:03:51.68	16:55:25.568
52	03:25:54.176	18:33:25.248
53	\N	04:47:57.952
54	13:19:36.064	19:23:52.704
55	15:02:48.576	05:59:55.776
56	18:28:34.56	14:50:15.424
57	21:47:08.16	00:24:02.304
58	20:17:05.152	01:59:52.192
59	21:54:26.048	06:42:26.56
60	23:26:23.36	11:33:33.76
61	19:17:17.056	19:02:45.632
62	13:57:33.44	16:43:00.096
63	\N	18:43:40.8
64	16:11:01.504	08:06:35.264
65	04:32:49.152	23:50:53.696
66	22:59:54.112	14:42:41.92
67	08:14:03.392	10:52:58.88
68	04:22:27.712	21:55:58.208
69	21:15:02.656	14:41:57.888
70	21:04:26.752	01:54:10.176
71	21:31:05.6	03:30:43.968
72	07:07:27.104	02:10:35.264
73	18:13:00.672	13:36:22.656
74	08:35:47.328	08:29:00.094
75	19:34:40.896	13:40:20.608
76	03:59:07.904	20:14:35.648
77	\N	12:15:11.488
78	16:42:04.672	\N
79	08:46:39.232	23:02:53.312
80	04:57:04.64	01:02:00.192
81	01:22:18.368	10:08:36.48
82	02:52:41.856	23:46:29.632
83	05:03:28.768	19:01:34.976
84	19:40:33.792	00:22:48.704
85	19:05:46.88	18:31:19.424
86	\N	17:38:12.736
87	06:42:16.704	11:28:58.24
88	02:06:53.44	22:22:14.144
89	02:41:18.464	\N
90	13:50:53.44	16:53:45.6
91	06:19:39.392	21:22:54.72
92	20:18:01.472	08:57:20.256
93	09:40:42.24	22:14:22.464
94	\N	17:02:51.008
95	22:00:31.616	02:23:51.296
96	07:00:32.576	12:26:57.408
97	12:12:03.072	14:22:12.096
98	17:27:37.472	22:40:44.16
99	02:26:13.12	\N
\.


--
-- Name: horas_cvehoras_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('horas_cvehoras_seq', 1, false);


--
-- Data for Name: laboral; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY laboral (cvelaboral, cveperiodo, cvehoras, cvedia, cvesala, cveletra) FROM stdin;
1	7	60	5	\N	\N
2	8	60	5	\N	\N
\.


--
-- Name: laboral_cvelaboral_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('laboral_cvelaboral_seq', 3, true);


--
-- Data for Name: lectura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY lectura (cvelectura, cvepromotor, nocontrol, cveletra) FROM stdin;
\.


--
-- Name: lectura_cvelectura_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('lectura_cvelectura_seq', 1, false);


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY libro (autor, titulo, cvelibro) FROM stdin;
\.


--
-- Name: libro_cvelibro_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('libro_cvelibro_seq', 104, true);


--
-- Data for Name: lista_libros; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY lista_libros (cvelista, cvelibro, cvelectura, cveperiodo) FROM stdin;
\.


--
-- Name: lista_libros_cvelista_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('lista_libros_cvelista_seq', 1, false);


--
-- Data for Name: msj; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY msj (cvemsj, introduccion, descripcion, tipo, emisor, receptor, fecha, expira, cveletra, cveperiodo) FROM stdin;
\.


--
-- Name: msj_cvemsj_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('msj_cvemsj_seq', 7, true);


--
-- Data for Name: periodo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY periodo (fechainicio, fechafinal, cveperiodo) FROM stdin;
2016-10-18	2017-01-19	7
2016-12-26	2017-12-15	8
\.


--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('periodo_cveperiodo_seq', 8, true);


--
-- Data for Name: sala; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY sala (cvesala, ubicacion, limite, nombre) FROM stdin;
\.


--
-- Data for Name: tipomsj; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipomsj (cvetipomsj, descripcion) FROM stdin;
G	Grupal
I	Individual
PU	Público
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuarios (cveusuario, nombre, pass, cveespecialidad, rol, clave, correo) FROM stdin;
ROGV600204NY5	Victor Rodríguez García	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	victor.rodriguez@itcelaya.edu.mx
HEH5671201K16	Sandra Hernández Hernández	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	dpmaar@itcelaya.edu.mx
14031525	Mancera González Liliana	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	lili_mg03__hotmail@itcelaya.edu.mx
1111111111111	Cristina Pacheco Sánchez	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	cpachecosanchez@itcelaya.edu.mx
14031860	Alan Samuel Bustos Mendoza	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	14031860@itcelaya.edu.mx
14030331	Godinez Mrtínez Juan Ignacio	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	14030331@itcelaya.edu.mx
NAPE840321PU1	Edú Jair Navarro Patiño	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	jair.navarro@itcelaya.edu.mx
14031465	Andrea Hernández Guerrero	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	14031465@itcelaya.edu.mx
14031556	Moreno Garcia María Fernanda	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	14041556@itcelaya.edu.mx
9999999999999	DIOS	81dc9bdb52d04dc20036dbd8313ed055	ISC	A	\N	dios@itcelaya.edu.mx
\.


--
-- Name: abecedariopk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY abecedario
    ADD CONSTRAINT abecedariopk PRIMARY KEY (cve);


--
-- Name: alumnopk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT alumnopk PRIMARY KEY (cveusuario);


--
-- Name: diapk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dia
    ADD CONSTRAINT diapk PRIMARY KEY (cvedia);


--
-- Name: especialidadpk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY especialidad
    ADD CONSTRAINT especialidadpk PRIMARY KEY (cveespecialidad);


--
-- Name: evaluacionpk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evaluacion
    ADD CONSTRAINT evaluacionpk PRIMARY KEY (cveeval);


--
-- Name: horaspk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY horas
    ADD CONSTRAINT horaspk PRIMARY KEY (cvehoras);


--
-- Name: idx_laboral; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT idx_laboral PRIMARY KEY (cvelaboral);


--
-- Name: idx_lectura; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT idx_lectura UNIQUE (cvepromotor, nocontrol, cveletra);


--
-- Name: laboralun; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralun UNIQUE (cveperiodo, cvehoras, cvedia);


--
-- Name: lecturapk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturapk PRIMARY KEY (cvelectura);


--
-- Name: libropk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY libro
    ADD CONSTRAINT libropk PRIMARY KEY (cvelibro);


--
-- Name: lista_librospk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librospk PRIMARY KEY (cvelista);


--
-- Name: msjfk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk PRIMARY KEY (cvemsj);


--
-- Name: periodopk2; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY periodo
    ADD CONSTRAINT periodopk2 PRIMARY KEY (cveperiodo);


--
-- Name: salapk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sala
    ADD CONSTRAINT salapk PRIMARY KEY (cvesala);


--
-- Name: tipomsjpk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipomsj
    ADD CONSTRAINT tipomsjpk PRIMARY KEY (cvetipomsj);


--
-- Name: usuarios_correo_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_correo_key UNIQUE (correo);


--
-- Name: evaluacionfk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evaluacion
    ADD CONSTRAINT evaluacionfk FOREIGN KEY (cvelectura) REFERENCES lectura(cvelectura);


--
-- Name: laboralfk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


--
-- Name: laboralfk2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk2 FOREIGN KEY (cvehoras) REFERENCES horas(cvehoras);


--
-- Name: laboralfk3; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk3 FOREIGN KEY (cvedia) REFERENCES dia(cvedia);


--
-- Name: laboralfk4; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk4 FOREIGN KEY (cvesala) REFERENCES sala(cvesala);


--
-- Name: laboralfk5; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk5 FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


--
-- Name: lecturafk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk FOREIGN KEY (cvepromotor) REFERENCES usuarios(cveusuario);


--
-- Name: lecturafk2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk2 FOREIGN KEY (nocontrol) REFERENCES usuarios(cveusuario);


--
-- Name: lecturafk3; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk3 FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


--
-- Name: lista_librosfk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librosfk FOREIGN KEY (cvelibro) REFERENCES libro(cvelibro);


--
-- Name: lista_librosfk2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librosfk2 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


--
-- Name: lista_librosfk3; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lista_libros
    ADD CONSTRAINT lista_librosfk3 FOREIGN KEY (cvelectura) REFERENCES lectura(cvelectura);


--
-- Name: msjfk1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk1 FOREIGN KEY (emisor) REFERENCES usuarios(cveusuario);


--
-- Name: msjfk2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk2 FOREIGN KEY (receptor) REFERENCES usuarios(cveusuario);


--
-- Name: msjfk5; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjfk5 FOREIGN KEY (tipo) REFERENCES tipomsj(cvetipomsj);


--
-- Name: msjkf3; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjkf3 FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


--
-- Name: msjkf4; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjkf4 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


--
-- Name: usuariospk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuariospk FOREIGN KEY (cveespecialidad) REFERENCES especialidad(cveespecialidad);


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

