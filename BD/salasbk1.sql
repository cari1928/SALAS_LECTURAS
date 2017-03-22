[6] => Array
(
    [0] => 14030429
    [cveusuario] => 14030429
    [1] => Brenda Cecilia Cerritos Coyote
    [nombre] => Brenda Cecilia Cerritos Coyote
    [2] => a626402e90178cce97ecb68fd84aa278
    [pass] => a626402e90178cce97ecb68fd84aa278
    [3] => 
    [clave] => 
    [4] => cecilia81995@hotmail.com
    [correo] => cecilia81995@hotmail.com
    [5] => No Permitido
    [estado_credito] => No Permitido
    [6] => Aceptado
    [validacion] => Aceptado
)
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
    motivacion integer,
    participacion integer,
    terminado integer,
    cveeval integer NOT NULL,
    cvelectura integer NOT NULL,
    asistencia integer,
    actividades integer,
    CONSTRAINT evaluacionck1 CHECK (((comprension >= 0) AND (comprension <= 100))),
    CONSTRAINT evaluacionck2 CHECK (((motivacion >= 0) AND (motivacion <= 100))),
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
    titulo character varying(100),
    cvelibro integer NOT NULL,
    editorial character varying(255),
    precio money
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
    cveperiodo integer
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
    cvesala character varying(3) NOT NULL,
    ubicacion character varying(50),
    cveperiodo integer
);


ALTER TABLE public.sala OWNER TO admin;

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
    estado_credito character varying(75)
);


ALTER TABLE public.usuarios OWNER TO admin;

--
-- Name: cve; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY abecedario ALTER COLUMN cve SET DEFAULT nextval('abecedario_cve_seq'::regclass);


--
-- Name: cveestado; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY estado ALTER COLUMN cveestado SET DEFAULT nextval('estado_cveestado_seq'::regclass);


--
-- Name: cveeval; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY evaluacion ALTER COLUMN cveeval SET DEFAULT nextval('evaluacion_prueba_seq'::regclass);


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
-- Name: cveperiodo; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY periodo ALTER COLUMN cveperiodo SET DEFAULT nextval('periodo_cveperiodo_seq'::regclass);


--
-- Name: cverol; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY rol ALTER COLUMN cverol SET DEFAULT nextval('rol_cverol_seq'::regclass);


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
HEH5671201K16	O	ESCRIBIR_ESPECIALIDAD
9999999999999	ISC	\N
ROGV600204NY5	O	ESCRIBIR_ESPECIALIDAD
NAPE840321PU1	O	ESCRIBIR_ESPECIALIDAD
11030846	II	\N
12030186	II	\N
12030013	ISC	\N
12030188	IB	\N
12030366	IM	\N
12030194	ISC	\N
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

COPY evaluacion (comprension, motivacion, participacion, terminado, cveeval, cvelectura, asistencia, actividades) FROM stdin;
0	0	0	0	15	8	0	0
0	0	0	0	16	9	0	0
0	0	0	0	18	12	0	0
0	0	0	0	19	13	0	0
0	0	0	0	20	14	0	0
0	0	0	0	21	15	0	0
\.


--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('evaluacion_prueba_seq', 21, true);


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
7	18	9	4	S01	2	PRUEBA_2 - B	ROGV600204NY5	2
1	8	7	3	S01	1	SALA - A	ROGV600204NY5	\N
3	8	8	3	S01	1	SALA - A	ROGV600204NY5	\N
4	18	7	3	S01	1	PRUEBA	ROGV600204NY5	\N
5	18	8	3	S01	1	PRUEBA	ROGV600204NY5	\N
10	8	1	1	S01	2	SALA - B	ROGV600204NY5	2
11	8	2	1	S01	2	SALA - B	ROGV600204NY5	2
\.


--
-- Name: laboral_cvelaboral_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('laboral_cvelaboral_seq', 11, true);


--
-- Data for Name: lectura; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY lectura (cvelectura, nocontrol, cveletra, cveperiodo) FROM stdin;
8	11030846	1	8
9	12030013	1	18
12	12030188	2	18
13	12030194	1	18
14	12030366	2	18
15	11030846	2	\N
\.


--
-- Name: lectura_cvelectura_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('lectura_cvelectura_seq', 15, true);


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY libro (autor, titulo, cvelibro, editorial, precio) FROM stdin;
Mankell	El Cerebro de Kennedy	79	Tusquets	$140.00
Miralles	El Círculo Ámbar y los Mandalas de Avalon	80	Ediciones B	$100.00
Halevi	13 Años que Cambiaron al Mundo	2	Ediciones B	$100.00
López	150 Años de Fotografía en España	3	Lunwerg	$200.00
Apio	365 Tips para Cambiar tu Vida	4	Diana	$140.00
Sutherland	50 Cosas que hay que saber de Literatura	5	Ariel	$130.00
Russell	50 Cosas que hay que saber de Management	6	Ariel	$130.00
Galloti	69 Secretos Imprescindibles Para disfrutar del Sexo	7	MR	$130.00
Alonso	99 Libros para ser mas Culto	8	MR	$140.00
Rosas	99 Pasiones en la Historia de México	9	MR	$130.00
Plaidy	A la Sombra de la Corona	10	Planeta	$130.00
Zama	Agencia Matrimonial para Ricos	11	Ediciones B	$120.00
Buckingham	Ahora Descubra sus Fortalezas	12	Norma	$140.00
Bauducco	Al Desnudo	13	Ediciones B	$130.00
Kluver	Alera	14	Rocaeditorial	$140.00
Merino	Alma de Junglar	15	Ediciones B	$100.00
Fukuyama	América en la Encrucijada	16	Ediciones B	$100.00
Fernández	Américo	17	Tusquets	$100.00
Rojas	Amigos Adiós a la Soledad	18	Temas de Hoy	$140.00
Cruz	Amo Luego Existo	19	Espasa	$130.00
Rice	Amor en Tinieblas	20	Destino	$120.00
Villalpando	Amores Mexicanos	21	Planeta	$130.00
Gray	Anatomía de Gray: Textos Esenciales	22	Paidós	$190.00
EMU	Antología del Terror:  Obras Maestras	23	Editores Mexicanos	$120.00
EMU	Antón Chejov:  Obras Maestras	24	Editores Mexicanos	$120.00
Mc Cullough	Antonio y Cleopatra	25	Planeta	$130.00
Moreno	Arrebatos Carnales II	26	Planeta	$160.00
Moreno	Arrebatos Carnales III	27	Planeta	$160.00
Vidaurri	Artemio Benavides Hinojosa: Caudillo del Noreste Mexicano	28	Tusquets	$130.00
Buzali	Atrévete a Soñar	29	Vergara	$90.00
Larsson	Aurora Boreal	30	Seix Barral	$120.00
León	Ayúdate que Dios te Ayudará	31	Seix Barral	$100.00
Bonilla	Basado en Hechos Reales	32	Berenice	$100.00
Lowe	Bill Gates Habla	33	Deusto	$130.00
Carr	Brisas de Noviembre	34	Harlequin	$120.00
Buffet & Clark	Buffettología	35	Deusto	$140.00
Calles	Cancionero Popular	36	Edivision	$180.00
Aguirre	Cantolla Aeronautica	37	MR	$140.00
Buzali	Cartas y Pergaminos	38	Vergara	$90.00
EMU	Charles Dickens:  Obras Maestras	39	Editores Mexicanos	$120.00
Posteguillo	Circo Máximo	40	Planeta	$180.00
Vázquez	Coltan	41	Ediciones B	$120.00
Weigel	Comer, Jugar, Reír	42	Diana	$120.00
Mullins	Con las Manos Abiertas	43	Diana	$100.00
Fernández	Conjuras Sexenales	44	Ediciones B	$120.00
Koppel	Conócete a ti Mismo y a los Demás	45	Planeta	$130.00
Patán	Conspiraciones	46	Paidós	$130.00
Buzali	Construyendo tu Grandeza	47	Vergara	$90.00
Savater	Contra las Patrias	48	Booket	$90.00
Schechter	Contrabando	49	Ediciones B	$140.00
Herrero	Corazón Indio	50	Destino	$140.00
Reyes	Cortar una Jacaranda	51	Planeta	$120.00
Connely	Crónicas de Sucesos	52	Ediciones B	$100.00
Tercero	Cuando Llegaron los Bárbaros	53	Temas de Hoy	$130.00
Ellmann	Cuatro Dublinenses	54	Tusquets	$90.00
Verduzco	Cuento Infinito	55	Ediciones B	$100.00
Aguilar	Cuentos para Entender el Evangelio	56	Diana	$140.00
Hubbard	Cuerpo Limpio Mente Clara	57	Bridge Publications	$160.00
Bronte	Cumbres Borrascosas	58	Editores Mexicanos	$70.00
Lauryssens	Dalí y Yo : Una Historia Surreal	59	Ediciones B	$120.00
Vidal	De lo Divino y de lo Humano	60	MR	$120.00
Aquino	De qué se Ríe la Barbie?	61	Temas de Hoy	$130.00
Vale	De Sesos y Médula	62	Planeta	$120.00
Pinkola	Desatando a la Mujer Fuerte	63	Diana	$140.00
Hocking	Designio	64	Destino	$100.00
Quintero	Despues de la Tempestad	65	Ediciones B	$120.00
Pacheco	Destino Criminal	66	Ediciones B	$120.00
Martínez	Diversos Estados tras la Muerte	67	Obelisco	$120.00
Armstrong	Doce Pasos Hacia Una Vida Compasiva	68	Paidós	$130.00
Diez	Dos Mil y Una Noches	69	Ediciones B	$120.00
Canales	Duendes: Guía de los Seres Mágicos de España	70	Edaf	$180.00
EMU	Edgar Allan Poe:  Obras Maestras	71	Editores Mexicanos	$120.00
Gardner	Educación Artística y Desarrollo Humano	72	Paidós	$130.00
Little	El almacén	73	Ediciones B	$140.00
Sierra	El Ángel Perdido	74	Planeta	$140.00
Sunderland	El Aroma de la Luna	75	Joaquín Mortiz	$120.00
Borges	El arte de la Guerra para Narcos	76	Temas de Hoy	$100.00
Marx	El Capital	77	Editores Mexicanos	$54.00
López	El Cártel de los Sapos	78	Planeta	$120.00
Sherwood	El Club de los Supervivientes	81	Paidós	$120.00
Drosnin	El Código Secreto de la Biblia III	82	Planeta	$120.00
EMU	El Conde de Montecristo	83	Editores Mexicanos	$130.00
Grandes	El Corazon Helado	84	Tusquets	$130.00
Cárdenas	El Derrumbe	85	Tusquets	$130.00
Lienas	El Diario Rojo de Carlota	86	Destino	$140.00
Schmitt	El Evangelio Según Pilatos	87	Edaf	$180.00
Covey	El Factor Confianza	88	Paidós	$180.00
Rosen	El Fin del Imperio Romano	89	Paidós	$190.00
Cornwell	El Frente	90	Ediciones B	$100.00
Shenk	El Genio que Todos Llevamos Dentro	91	Ariel	$220.00
Florida	El Gran Reset	92	Paidós	$120.00
Muñoz Molina	El Invierno de Lisboa	93	Booket	$90.00
Meltzer	El Libro del Destino	94	Planeta	$150.00
Krauze	El Poder y el Delirio	102	Tusquets	$130.00
Yallop	El Poder y la Gloria	103	Planeta	$160.00
Giménez	El Silencio de los Claustros	111	Destino	$130.00
Sánchez	El Tesorero de la Catedral	112	Almuzara	$140.00
EMU	Fiódor Dostoievski:  Obras Maestras	121	Editores Mexicanos	$120.00
Ramsay	Gordon Ramsay lo Hace Fácil	128	Planeta	$200.00
Johnson	Héroes	135	Ediciones B	$100.00
EMU	Honorato de Balzac:  Obras Maestras	141	Editores Mexicanos	$120.00
Papini	El Libro Negro	95	Editores Mexicanos	$55.00
London	El Lobo de Mar	96	Editores Mexicanos	$55.00
Spier	El Lugar del Hombre en el Cosmos	97	Crítica	$160.00
Koch	El Principio Estrella Puede Hacerlo Rico	104	Paidós	$130.00
Sora	El Tesoro Perdido de los Templarios	113	Planeta	$120.00
EMU	Franz Kafka:  Obras Maestras	122	Editores Mexicanos	$120.00
Junger	Guerra	129	Crítica	$170.00
Aguirre	Hidalgo: Entre la Virtud y el Vicio	136	MR	$150.00
Nietzsche	Humano, Demasiado Humano	142	Editores Mexicanos	$54.00
Bonasso	El Mal, El Modelo K y la Barrick Gold	98	Planeta	$130.00
Ramírez	El Reino de Marcial Maciel	105	Temas de Hoy	$140.00
Ramos	El Último Cacique: El Poder por el Poder	114	Ediciones B	$100.00
Hoge	El Último Papa: Decadencia y Caída de la Iglesia de Roma	115	Edaf	$200.00
Rodari	En Defensa del Papa	116	MR	$140.00
EMU	Friedrich Nietzsche:  Obras Maestras	123	Editores Mexicanos	$120.00
EMU	H.P. Lovecraft:  Obras Maestras	130	Editores Mexicanos	$120.00
Dechance	Hablemos Claro	131	Edaf	$160.00
Naouri	Hijas y Madres	137	Tusquets	$90.00
Zweig	El Mundo del Ayer	99	Editores Mexicanos	$80.00
Aguilar	El Resplandor de la Madera	106	Seix Barral	$160.00
Taibo II	El Retorno de los Tigres de la Malasia	107	Planeta	$130.00
Mourad	En la Ciudad de Oro y Plata	117	Espasa	$140.00
Mir	Furtivos	124	Almuzara	$100.00
Nieves	Hablemos de Ciencia	132	Edaf	$350.00
Eliade	Historia de las Creencias e Ideas Religiosas	138	Paidós	$280.00
Asensi	El Origen Perdido	100	Booket	$120.00
Mankell	El Retorno del Profesor de Baile	108	Tusquets	$110.00
Ugarte	Erotismo y Santidad	118	Ediciones B	$120.00
Pol Droit	Genealogía de los Bárbaros	125	Paidós	$230.00
Meneses	Generación Bang: Los Nuevos Cronistas del Narco en México	126	Temas de Hoy	$140.00
EMU	Hermann Hesse:  Obras Maestras	133	Editores Mexicanos	$120.00
Tenorio	Historia y Celebración	139	Tusquets	$120.00
Bau	El Pintor de Cracovia	101	Ediciones B	$120.00
Salzberg	El Secreto de la Felicidad Auténtica	109	Oniro	$160.00
Isbert	El Secreto de la Montaña Esmeralda	110	Edaf	$150.00
Redondo	Escuela y Pobreza	119	Paidós	$130.00
Savater	Ética como Amor Propio	120	Ariel	$140.00
Peters	Gestinar con Imaginación	127	Deusto	$130.00
Miralles	Hernán Cortés: Inventor de México	134	Tusquets	$130.00
Urías	Historias Secretas del Racismo en México	140	Tusquets	$120.00
EMU	Íconos Literarios:  Bram Stoker	143	Editores Mexicanos	$140.00
EMU	Íconos Literarios:  Guy de Maupassant	144	Editores Mexicanos	$150.00
EMU	Íconos Literarios:  Honorato de Balzac	145	Editores Mexicanos	$140.00
EMU	íconos Literarios:  Las Mil y Una Noches	146	Editores Mexicanos	$190.00
EMU	Íconos Literarios:  Lewis Carroll	147	Editores Mexicanos	$140.00
EMU	Íconos Literarios:  Nicolás Maquiavelo	148	Editores Mexicanos	$140.00
EMU	Íconos Literarios: Federico García Lorca	149	Editores Mexicanos	$160.00
Bauducco	Imperio de Papel	150	Ediciones B	$120.00
Ramos	Ixcel: Nacidos Guerreros,  Vendidos como Esclavos	151	Ediciones B	$100.00
EMU	Julio Verne:  Obras Maestras	152	Editores Mexicanos	$120.00
Rodríguez	La Agenda Pendiente 	153	Temas de Hoy	$100.00
Ovason	La Arquitectura Sagrada de Washington	154	MR	$160.00
Muñoz	La Bruja de los Destellos	155	Diana	$120.00
Lavin	La Casa Chica	156	Planeta	$100.00
Dietrich	La Clave Roseta	157	Ediciones B	$120.00
Díaz-Polanco	La Cocina del Diablo	158	Temas de Hoy	$120.00
Nanti	La Confesión; Religión y Pederastia	159	Diana	$120.00
Garland	La Conjura	160	Ediciones B	$100.00
Asensi	La Conjura de Cortés	161	Planeta	$140.00
Bolaños	La cruz del Sur	162	Ediciones B	$120.00
Innerarity	La Democracia del Conocimiento	163	Paidós	$140.00
Kundera	La Despedida	164	Tusquets	$90.00
Finneyfrock	La Dulce Venganza de Celia Door	165	Destino	$120.00
Mastreta	La Emoción de las Cosas	166	Seix Barral	$120.00
Young	La Encrucijada	167	Diana	$130.00
Greenspan	La Era de las Turbulencias	168	Ediciones B	$130.00
Rodríguez	La Fábrica del Crimen	169	Temas de Hoy	$140.00
Meyer	La Fábula del crímen Ritual	170	Tusquets	$220.00
Aguirre	La gran Traición La guerra donde Perdimos la Mitad de México	171	Planeta	$170.00
Wroblewski	La Historia de Edgar Sawtelle	172	Planeta	$140.00
González	La Iglesia del Silencio	173	Tusquets	$130.00
Ratzinger	La Infancia de Jesus	174	Planeta	$100.00
Monforte	La Infiel	175	Temas de Hoy	$150.00
Rodríguez	La Ira de Dios	176	Rocaeditorial	$130.00
Sepúlveda	La Lámpara de Aladino	177	Tusquets	$90.00
Beniosef	La Luz de Efraim: Cómo Corregir la Sexualidad a través de la Cábala	178	Obelisco	$230.00
Alazraki	La Luz Eterna de Juan Pablo II	179	Planeta	$120.00
Ortíz	La Mente en Desarrollo	180	Paidós	$130.00
Aguilar	La Modernidad Figitiva	181	Planeta	$200.00
Berman	La Mujer que Buceó Dentro del Corazón del Mundo	182	Planeta	$120.00
Gautier	La Novela de la Momia	183	Editores Mexicanos	$45.00
Arellano	La Nueva República	184	Planeta	$130.00
De Balzac	La Piel de Zapa	185	Editores Mexicanos	$70.00
Levy	La Primera Noche	186	Planeta	$140.00
Mankell	La Quinta Mujer	187	Tusquets	$130.00
Gilbert	La Sabiduría de la Naríz	188	Ediciones B	$100.00
Plaidy	La Sexta Esposa	189	Planeta	$130.00
Volpi	La Tejedora de Sombras	190	Planeta	$140.00
Gregory	La Trampa Dorada	191	Planeta	$140.00
Luisi	La Vida Emergente	192	Tusquets	$130.00
Del Cio	La Vida Mi Amante II	193	Diana	$130.00
Larsson	La Voz y la Furia	194	Destino	$130.00
Al Ries	Las 11 Leyes Inmutables Creación de Marcas en Internet	195	Deusto	$130.00
Zaslow	Las Chicas de Ames	196	Planeta	$130.00
Spreitzer	Las Claves del Liderazgo	197	Deusto	$140.00
Lewis	Las Crónicas de Narnia	198	Destino	$120.00
Wolf	Las Enseñanzas de Carlos Castaneda	199	Vergara	$149.00
Berry	Las Finanzas Secretas de la Iglesia	200	Debate	$200.00
Guiliano	Las Francesas Disfrutan Todo el Año y no Engordan	201	Vergara	$120.00
Alanís	Las Lágrimas del centauro	202	MR	$120.00
Nieto	Las Mujeres Matan Mejor	203	Joaquín Mortiz	$120.00
Huxley	Las Puertas de la Percepción	204	Editores Mexicanos	$46.00
Ariely	Las Ventajas del Deseo	205	Ariel	$130.00
Hocking	Latido	206	Destino	$120.00
EMU	León Tolstoi:  Obras Maestras	207	Editores Mexicanos	$120.00
Kotler	Los 10 Pecados Capitales del Markrting	208	Deusto	$130.00
Grandes	Los Aires Difíciles	209	Tusquets	$130.00
Zepeda	Los Corruptores	210	Planeta	$140.00
Frattini	Los Cuervos del Vaticano	211	Planeta	$130.00
Elorza	Los dos Mensajes del Islam	212	Ediciones B	$120.00
Cruz	Los Golden Boys	213	Temas de Hoy	$120.00
Zepeda	Los Intocables	214	Planeta	$140.00
Ryback	Los Libros del Gran Dictador	215	Destino	$130.00
Hodge	Los Manuscritos del Mar Muerto	216	Edaf	$150.00
Fuentes	Los Mil Mejores Chistes Que Conozco	217	Diana	$130.00
Fuentes	Los Mil Mejores Chistes Que Conozco y cien Más Buenos Aún	218	Diana	$130.00
Harding	Los Misterios de la Mujer	219	Obelisco	$140.00
Druon	Los Reyes Malditos III: Los Venenos de la Corona	220	Vergara	$120.00
Druon	Los Reyes Malditos IV: La Ley de los Varones	221	Ediciones B	$120.00
Carr	Luna de Verano	222	Harlequin	$120.00
Carrillo	Luna Negra	223	Diana	$120.00
Frid	Luz Entre Ceniza	224	MR	$130.00
Kenzaburooé	M7T y La Historia de las Maravillas del Bosque	225	Booket	$120.00
Puddicombe	Mindfulness Atención Plena	231	Edaf	$230.00
Aguirre	Pecar como Dios Manda	237	Planeta	$120.00
Evans	Preso de la Luz	244	Destino	$120.00
Grergen	Reflexiones Sobre la Construcción Social	250	Paidós	$130.00
Rosas	Sangre y Fuego	256	Booket	$90.00
Octavio Paz	Tiempo Nublado	262	Seix Barral	$100.00
Napoleoni	Maonomics: La amarga Medicina China contra los escándalos	226	Paidós	$200.00
Ravenwolf	Muerte en el Barranco de las Brujas	232	Edaf	$240.00
Lewis	Perelandra un Viaje a Venus	238	Minotauro	$130.00
Margolin	Pruebas Falsas	245	Ediciones B	$120.00
Mc Caig	Rhett Butler:  Más allá de Lo Que El Viento se Llevó	251	Ediciones B	$120.00
Frattini	Secretos Vaticanos	257	Edaf	$140.00
Cruz	Tierra Narca	263	Temas de Hoy	$130.00
Palomar	Margarita Septién	227	Ediciones B	$100.00
Allan Poe	Narraciones Extraordinarias	233	Editores Mexicanos	$56.00
Greenfield	Piensa: Qué Significa ser Humano en un Mundo de Cambio	239	Ediciones B	$130.00
Mastreta	Puerto Libre	246	Seix Barral	$120.00
Marrese	Rosa de Fuego	252	Ediciones B	$130.00
Cain	Sexo de Emergencia	258	Ediciones B	$100.00
Hernández	Tijuana Dream	264	Ediciones B	$100.00
Hay	Todo Está Bien	265	Diana	$140.00
EMU	Marqués de Sade:  Obras Maestras	228	Editores Mexicanos	$120.00
Matute	Olvidado Rey Gudú	234	Booket	$130.00
Herman	Pilates Para Dummies	240	Paradummies.com	$140.00
Fernández	Que Dios se Equivoque	247	Planeta	$100.00
NHAT HANN	Saborear	253	Oniro	$100.00
Brockmann	Sin Nombre	259	Harlequin	$90.00
Buzali	Todod somos Maestros	266	Vergara	$90.00
Buzali	Megacualidades de los Triunfadores	229	Vergara	$90.00
Austen	Orgullo y Prejuicio	235	Editores Mexicanos	$80.00
James Kaplan	Por Fuego, Por Agua	241	MR	$130.00
Musso	Qué Sería yo sin Ti	248	Planeta	$120.00
Ronquillo	Saldos de Guerra	254	Temas de Hoy	$120.00
Savater	Sobre Vivir	260	Ariel	$140.00
Taibo II	Tony Guiteras  un Hombre Guapo y otros Personajes	267	Planeta	$150.00
Alazraki	México Siempre Fiel	230	Planeta	$130.00
EMU	Oscar Wilde:  Obras Maestras	236	Editores Mexicanos	$120.00
Moreno	Por la Mano del Padre	242	Ediciones B	$100.00
Rodríguez	Por los Viejos Tiempos	243	Ediciones B	$100.00
Ahern	Recuerdos Prestados	249	Vergara	$100.00
Aguilar	Saldos de la Revolución	255	Planeta	$130.00
Castro	Surameris y el Cofre de los Secretos	261	Diana	$160.00
Olvera	Topiltzin: La Leyenda del Lucero de la Mañana	268	Ediciones B	$120.00
Guillou	Trilogía de las Cruzadas I  del Norte a Jerusalén	269	Planeta	$120.00
Leppaniemi	Tu Felicidad Depende de tu Actitud	270	Diana	$120.00
Pearl	Un Corazón Invencible	271	MR	$130.00
Scott	Un Siglo Decisivo	272	Ediciones B	$130.00
Aguilar	Un Soplo en el Río	273	Seix Barral	$130.00
Wiggs	Una Casa Junto al Lago	274	Harlequin	$120.00
Baldacci	Una Muerte Sospechosa	275	Ediciones B	$120.00
Irving	Una Mujer Difícil	276	Tusquets	$130.00
Hutchens	Una Porción de Confianza	277	Paidós	$120.00
Palou	Varón de Deseos	278	Planeta	$120.00
Aguirre	Victoria	279	Booket	$120.00
Villalpando	Vida de Marquesa	280	Diana	$120.00
Guerra	Vida Verde: El Químico Guerra Responde	281	Diana	$100.00
Gutiérrez	Viejo Siglo Nuevo	282	Planeta	$120.00
Miller	Vivan los Lunes	283	Vergara	$90.00
Morris	Volverse a Enamorar	284	Vergara	$130.00
EMU	William Shakespeare:  Obras Maestras	285	Editores Mexicanos	$120.00
Wagensberg	Yo, Lo Superfluo y el Error	286	Tusquets	$130.00
Wellington	Zombie Planet	287	Timunmas	$130.00
Quick	102 Ideas para Enriquecer tu Vida sin Gastar Dinero	1	Oniro	$130.00
\.


--
-- Name: libro_cvelibro_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('libro_cvelibro_seq', 289, true);


--
-- Data for Name: lista_libros; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY lista_libros (cvelista, cvelibro, cvelectura, cveperiodo, calif_reporte, cveestado) FROM stdin;
65	1	8	8	0	1
67	3	8	8	0	2
69	5	9	18	0	1
70	6	9	18	0	2
71	7	12	18	0	1
72	8	13	18	0	1
73	9	13	18	0	2
74	10	14	18	0	3
75	11	14	18	0	3
76	12	14	18	0	3
77	1	14	18	\N	3
78	2	14	18	\N	3
79	3	14	18	\N	3
80	4	14	18	\N	3
\.


--
-- Name: lista_libros_cvelista_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('lista_libros_cvelista_seq', 80, true);


--
-- Data for Name: msj; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY msj (cvemsj, introduccion, descripcion, tipo, emisor, receptor, fecha, expira, cveletra, cveperiodo) FROM stdin;
\.


--
-- Name: msj_cvemsj_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('msj_cvemsj_seq', 7, true);


--
-- Data for Name: periodo; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY periodo (fechainicio, fechafinal, cveperiodo) FROM stdin;
2016-10-18	2017-01-19	7
2016-12-26	2017-01-23	8
2017-01-01	2017-01-29	18
\.


--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('periodo_cveperiodo_seq', 61, true);


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

COPY sala (cvesala, ubicacion, cveperiodo) FROM stdin;
S01	Biblioteca Campus 1	8
S02	Biblioteca Campus 1	8
S03	Biblioteca Campus 1	8
S04	Biblioteca Campus 1	8
\.


--
-- Data for Name: tipomsj; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY tipomsj (cvetipomsj, descripcion) FROM stdin;
G	Grupal
I	Individual
PU	P�blico
\.


--
-- Data for Name: usuario_rol; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY usuario_rol (cveusuario, cverol) FROM stdin;
9999999999999	1
9999999999999	2
14031560	3
HEH5671201K16	2
11030846	3
ROGV600204NY5	2
NAPE840321PU1	2
12030013	3
12030186	3
12030188	3
12030194	3
12030366	3
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY usuarios (cveusuario, nombre, pass, clave, correo, estado_credito) FROM stdin;
13030086	Martínez Jaramillo Daniela Fernanda	81dc9bdb52d04dc20036dbd8313ed055	\N	13030086@itcelaya.edu.mx	\N
12030458	Ortega Sánchez Paulina	81dc9bdb52d04dc20036dbd8313ed055	\N	12030458@itcelaya.edu.mx	\N
12030479	Ortíz Ramírez Lesli Abril	81dc9bdb52d04dc20036dbd8313ed055	\N	12030479@itcelaya.edu.mx	\N
15030552	Rodríguez Estrada Israel	81dc9bdb52d04dc20036dbd8313ed055	\N	15030552@itcelaya.edu.mx	\N
14031556	Moreno Garcia María Fernanda	81dc9bdb52d04dc20036dbd8313ed055	\N	14041556@itcelaya.edu.mx	\N
13030615	Ramírez Bautista Aarón	81dc9bdb52d04dc20036dbd8313ed055	\N	13030615@itcelay.edu.mx	\N
14030331	Godinez Martínez Juan Ignacio	81dc9bdb52d04dc20036dbd8313ed055	\N	14030331@itcelaya.edu.mx	\N
14031525	Mancera González Liliana	81dc9bdb52d04dc20036dbd8313ed055	\N	lili_mg03@hotmial.com	\N
12030847	Ramírez Casados María del Rosario	06f4931c54cdf00e866942b34111c721	\N	ros1004tk@hotmail.com	\N
13030596	Huitzache Hernádez Francisco Javier	81dc9bdb52d04dc20036dbd8313ed055	\N	13030596@itcelaya.edu.mx	\N
12030850	Carmona Medina Jaqueline	ed5e957049acd4ef6392a0fc8e5fc338	\N	12030850@itcelaya.edu.mx	\N
12030835	Alfaro Padilla Edson Daniel	e242d45f5d208d9bd12f44507f0639ca	\N	12030835@itcelaya.edu.mx	\N
13030415	Gonzalez Gonzalez Maria Concepción	2a30ba00baed3fe3aedf4949ae228491	\N	13030415@itcelaya.edu.mx	\N
14031860	Bustos Mendoza Alan Samuel	81dc9bdb52d04dc20036dbd8313ed055	\N	14031860@itcelaya.edu.mx	\N
14031547	González Tovar Veronica	81dc9bdb52d04dc20036dbd8313ed055	\N	14031547@itcelaya.edu.mx	\N
12030799	Pilero Espinoza Juan Daniel	dbd4dad8be6ffd4f1fa2e8753e1d1094	\N	12030799@itcelaya.edu.mx	\N
13030661	Aguirre Buendia Jairo	07654c6bd0e925f66ca71044e374be15	\N	13030661@itcelaya.edu.mx	\N
14031496	Guzmán Herrera Blanca Pada	81dc9bdb52d04dc20036dbd8313ed055	\N	blanca1600@gmail.com	\N
13030067	Parra Sánchez Paulina del C.	4c60f6d61cecaf2a6d5a7820a8e489d1	\N	13030067@itcelaya.edu.mx	\N
15030322	González González Diego Ernesto	81dc9bdb52d04dc20036dbd8313ed055	\N	15030322@gmail.com	\N
13030383	Mancera Patiño Daniela Alejandra	57a4d7c757b3228df2768adb0aa35308	\N	alejandra_mancera_383@hotmail.com	\N
14031465	Hernández Guerrero Andrea	81dc9bdb52d04dc20036dbd8313ed055	\N	14031465@itcelaya.edu.mx	\N
14031684	Mancera Patiño Daniel Alejandro	81dc9bdb52d04dc20036dbd8313ed055	\N	eziop1@gmail.com	\N
14031471	Ramirez Campos Elizabeth	81dc9bdb52d04dc20036dbd8313ed055	\N	elizabet_ramirezcampos@gmail.com	\N
12030909	Castro Espinoza Sergio Daniel	81dc9bdb52d04dc20036dbd8313ed055	\N	daniel_gow19@hotmail.com	\N
14031486	Ameca Tapia Itzel	81dc9bdb52d04dc20036dbd8313ed055	\N	itzy.1395@gmail.com	\N
14030791	Alfaro Godínez Pilar Andrea	81dc9bdb52d04dc20036dbd8313ed055	\N	cosmica_andhe@hotmail.com	\N
16031330	Gonzalez Conejo Daniel Alejandro	81dc9bdb52d04dc20036dbd8313ed055	\N	man3comic@gmail.com	\N
HEH5671201K16	Hernández Hernández Sandra	2d1edd8c14b810504185d21cd6c5641f	\N	dpmaar@itcelaya.edu.mx	\N
9999999999999	DIOS	81dc9bdb52d04dc20036dbd8313ed055	\N	dios@itcelaya.edu.mx	\N
12030818	Jimenez Palacios Jose Alberto	f891dfe4298fbb972ded2e4e9b8e4b7a	\N	12030818@itcelaya.edu.mx	\N
14030333	Salinas Castillo Rocio Iczamari	81dc9bdb52d04dc20036dbd8313ed055	\N	14030333@itcelaya.edu.mx	\N
13030903	Solórzano Girón Agustín	81dc9bdb52d04dc20036dbd8313ed055	\N	13030903@itcelaya.edu.mx	\N
14031139	Aguirre C. Serafin Gustavo	81dc9bdb52d04dc20036dbd8313ed055	\N	gustavoaguirre@gamil.com	\N
13030411	Zamora Lgunas Karla Beatriz	81dc9bdb52d04dc20036dbd8313ed055	\N	karla_21@yahoo.com	\N
13031136	Lana Serrano Paal Alfonos 	81dc9bdb52d04dc20036dbd8313ed055	\N	paal.alfonso.lana.serrano@gmail.com	\N
13030402	Sanchez Sanchez Brenda Itzel	c33eca78d32c5b7365fe7930e25d5890	\N	itzel.sanchez.biss@gmail.com	\N
12030792	Garcia Soltero Ruddy Christopher	51e0ef49fff4d96f596a888768f2c5c1	\N	12030792@itcelaya.edu.mx	\N
12030484	Suarez García Adolfo Angel	8756995f3055cfaae3e2287ddf92b1be	\N	12030484@itcelaya.edu.mx	\N
13030063	Jaime Trinidad Susana	81dc9bdb52d04dc20036dbd8313ed055	\N	13030063@itcelaya.edu.mx	\N
12030186	Silva Jaraleño Francisco Javier	81dc9bdb52d04dc20036dbd8313ed055	\N	12030186@itcelaya.edu.mx	\N
ROGV600204NY5	Rodríguez García Victor 	43251f13d0ab339628beadaf65142339	\N	victor.rodriguez@itcelaya.edu.mx	\N
12030188	Hernández Sierra María del Rosario	81dc9bdb52d04dc20036dbd8313ed055	\N	12030188@itcelaya.edu.mx	\N
NAPE840321PU1	Navarro Patiño Edí Jair	81dc9bdb52d04dc20036dbd8313ed055	\N	jair.navarro@itcelaya.edu.mx	\N
12030013	Mendoza Arredondo Alizon Gabriela	81dc9bdb52d04dc20036dbd8313ed055	\N	12030013@itcelaya.edu.mx	\N
12030366	Gonzáles Freyre Isabel	81dc9bdb52d04dc20036dbd8313ed055	\N	12030366@itcelaya.edu.mx	\N
14031560	Bustos Mendoza Alan Samuel	81dc9bdb52d04dc20036dbd8313ed055	\N	samuelbumz@hotmail.com	\N
12030194	Hernández Rosales Andrés	81dc9bdb52d04dc20036dbd8313ed055	\N	12030194@itcelaya.edu.mx	\N
11030846	Enríquez Pérez Gabriela	c41416526bfa40e6950b3204355d53e9	\N	11030846@itcelaya.edu.mx	\N
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
-- Name: salapk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY sala
    ADD CONSTRAINT salapk PRIMARY KEY (cvesala);


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
    ADD CONSTRAINT evaluacionfk FOREIGN KEY (cvelectura) REFERENCES lectura(cvelectura);


--
-- Name: laboralfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


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
-- Name: laboralfk4; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk4 FOREIGN KEY (cvesala) REFERENCES sala(cvesala);


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
    ADD CONSTRAINT lecturafk FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


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
    ADD CONSTRAINT lista_librosfk2 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


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
-- Name: msjkf4; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY msj
    ADD CONSTRAINT msjkf4 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


--
-- Name: salafk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY sala
    ADD CONSTRAINT salafk FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


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

