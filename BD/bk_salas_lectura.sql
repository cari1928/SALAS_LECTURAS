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
    cvepromotor character varying(13),
    cvesala character varying(3),
    nocontrol character varying(13),
    comprension integer,
    motivacion integer,
    reporte integer,
    tema integer,
    participacion integer,
    terminado integer,
    cveperiodo integer,
    horario character varying(11),
    cveletra integer,
    cveeval integer NOT NULL,
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
-- Name: lectura; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE lectura (
    cvepromotor character varying(13) NOT NULL,
    cvesala character varying(3) NOT NULL,
    nocontrol character varying(13) NOT NULL,
    cvelibro integer,
    cveperiodo integer NOT NULL,
    horario character varying(11) NOT NULL,
    cveletra integer NOT NULL
);


ALTER TABLE lectura OWNER TO postgres;

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
    horario character varying(11) NOT NULL,
    ubicacion character varying(50),
    limite integer
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
-- Name: cvelibro; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY libro ALTER COLUMN cvelibro SET DEFAULT nextval('libro_cvelibro_seq'::regclass);


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

COPY evaluacion (cvepromotor, cvesala, nocontrol, comprension, motivacion, reporte, tema, participacion, terminado, cveperiodo, horario, cveletra, cveeval) FROM stdin;
\.


--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('evaluacion_prueba_seq', 1, false);


--
-- Data for Name: lectura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY lectura (cvepromotor, cvesala, nocontrol, cvelibro, cveperiodo, horario, cveletra) FROM stdin;
\.


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY libro (autor, titulo, cvelibro) FROM stdin;
Abel Warren	Marketing	0
Erick Valentine	Web	1
Janice Payne	Service	2
Gretchen Mason	Prepaid Customer	3
Lawanda Noble	Service	4
Robbie Baird	InternationalSales	5
Carla Compton	Prepaid Customer	6
Heath Stafford	NationalSales	7
Kendra Stevenson	BusinessSales	8
Brandie Chase	Service	9
Rose Kirk	NationalSales	10
Ernest Lam	Accounting	11
Randal Jackson	Marketing	12
Ismael Holt	InternationalSales	13
Keri Williams	InternationalSales	14
Cameron Miranda	TechnicalSales	15
Roberta Harrison	Cutomer	16
Colby Wilkerson	ConsumerSales	17
Cornelius Johnson	InternationalSales	18
Teddy Hoover	NationalSales	19
Lillian Duran	Corporate Care	20
Dianna Oliver	Marketing	21
Geoffrey Aguirre	Service	22
Melissa Atkinson	Accounting	23
Moses Downs	InternationalSales	24
Franklin Jones	NationalSales	25
Arlene Andersen	BusinessSales	26
Kathleen Novak	BusinessSales	27
Sheldon Stuart	Marketing	28
Ivan Humphrey	TechnicalSales	29
Andre Bush	CorporateSales	30
Joni Roberts	Web	31
Rex Galloway	ConsumerSales	32
Dwight Patton	Cutomer	33
Lucas Rivers	Marketing	34
Arnold French	InternationalSales	35
Kristen Wilson	AccessorySales	36
Bobbi Haynes	NationalSales	37
Carl Nunez	CorporateSales	38
Frances Keller	NationalSales	39
Elena Huber	Technical	40
Luz Olson	Accounting	41
Jami Cuevas	BusinessSales	42
Ruth Simmons	Web	43
Noah Nolan	Marketing	44
Emma Anthony	BusinessSales	45
Damien Massey	Technical	46
Caroline Nash	Marketing	47
Elisabeth Cole	NationalSales	48
Morgan Simon	Service	49
Clifford Diaz	ConsumerSales	50
Guadalupe Pena	Accounting	51
Sophia Arnold	Marketing	52
Angela Horn	TechnicalSales	53
Byron Allen	ConsumerSales	54
Jesse Glover	Marketing	55
Paige Cooper	BusinessSales	56
Herman Williamson	BusinessSales	57
Clarissa Giles	Prepaid Customer	58
Loretta Mueller	TechnicalSales	59
Austin Rivas	NationalSales	60
Deana Kline	Accounting	61
William Stout	Cutomer	62
Bridgett Woodard	InternationalSales	63
Tamiko Novak	NationalSales	64
Irma Arnold	Marketing	65
Kellie Galvan	NationalSales	66
Alex Rowland	Web	67
Whitney Jennings	Service	68
Marc Pope	Cutomer	69
Dwayne Flynn	Marketing	70
Theodore Melton	BusinessSales	71
Jayson Shields	Cutomer	72
Lauren Spencer	Web	73
Tim Taylor	Marketing	74
Omar Sanders	Accounting	75
Darla Dalton	BusinessSales	76
Melisa Li	CorporateSales	77
Ron George	Technical	78
Heidi Petty	Technical	79
Judith Kane	Marketing	80
Wallace Savage	Service	81
Luz Gregory	NationalSales	82
Cari Dillon	Service	83
Regina Blackburn	Web	84
Latanya King	NationalSales	85
Rudy Mc Knight	Prepaid Customer	86
Lewis Maxwell	TechnicalSales	87
Jasmine Padilla	NationalSales	88
Laura Caldwell	Cutomer	89
Dustin Clements	Cutomer	90
Julian Heath	NationalSales	91
Kirsten Dickerson	Technical	92
Rickey Doyle	InternationalSales	93
Wesley Nichols	NationalSales	94
Brent Hanson	Technical	95
Kurt Wade	InternationalSales	96
Sonya Watkins	Web	97
Cassandra Fischer	Service	98
Bobbie Hill	NationalSales	99
qq	q	101
qq	q	102
\.


--
-- Name: libro_cvelibro_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('libro_cvelibro_seq', 102, true);


--
-- Data for Name: msj; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY msj (cvemsj, introduccion, descripcion, tipo, emisor, receptor, fecha, expira, cveletra, cveperiodo) FROM stdin;
1	Libros nuevos	Ya contamos con libros nuevos no te los puedes perder xD	PU	9999999999999	\N	2016-11-01	2016-12-31	\N	\N
2	Inicia periodo nuevo	En este mes de noviembre iniciamos periodo nuevo	PU	9999999999999	\N	2016-11-02	2016-12-31	\N	\N
4	BURROTES	MEEEEEENSOOOOOTEEEES	G	1111111111111	\N	2016-11-15	2016-12-31	1	3
5	BURROTES	MEEEEEENSOOOOOTEEEES	G	1111111111111	\N	2016-11-15	2016-12-31	1	3
7	Mensos	Felices fiestas	G	1111111111111	\N	2016-11-17	2016-12-31	1	3
\.


--
-- Name: msj_cvemsj_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('msj_cvemsj_seq', 7, true);


--
-- Data for Name: periodo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY periodo (fechainicio, fechafinal, cveperiodo) FROM stdin;
2016-10-26	2016-10-27	4
2016-10-27	2016-11-30	3
2016-12-08	2016-12-30	5
\.


--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('periodo_cveperiodo_seq', 5, true);


--
-- Data for Name: sala; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY sala (cvesala, horario, ubicacion, limite) FROM stdin;
SA1	01:02-03:03	a	2
SA2	14:03-03:03	Halla	30
SA2	06:53-02:50	Halla	30
sa6	17:04-02:01	bibliteca	30
VPI	dkb	Hangar	41
DUG	qse	Basement	31
PZB	eox	Trailer	31
EIJ	mxe	Rear	42
SAA	jwn	Building	33
OGH	pbt	Office	40
AYR	qwl	Department	42
WZO	avb	Hangar	30
AKS	shc	Upper	42
ZOF	pyh	Apartment	44
IRC	far	Trailer	32
JHR	mmd	Trailer	44
RUP	dfv	Building	45
XTN	kyn	Upper	38
BIF	khd	Suite	45
CKG	gzp	Side	32
YRB	yhj	Slip	38
KTP	whb	Trailer	31
PBX	fqh	Upper	37
IME	jhd	Department	36
FXH	dom	Pier	34
QIC	ajg	Department	33
MSO	udn	Unit	37
OJU	njl	Hangar	44
ADA	rer	Department	43
MJS	xsc	Front	38
QIT	liq	Floor	39
SFF	jxi	Office	34
VXV	ulb	Basement	40
TSI	dpy	Lobby	44
IXT	nqs	Department	35
OEY	hcp	Apartment	34
IFM	hng	Slip	36
FJO	hqj	Basement	32
FHY	ejo	Trailer	41
TTM	gav	Office	37
OCI	nqy	Slip	33
PPB	wuv	Penthouse	37
TGJ	lih	Upper	34
JRE	coh	Room	38
JVV	pyq	Unit	38
ABQ	oof	Unit	37
PBK	zsw	Hangar	35
WRI	vtf	Office	35
YIK	wvh	Penthouse	43
UBK	odb	Rear	31
XGQ	vox	Department	43
PBN	sqa	Trailer	41
IUU	ovt	Pier	38
BGB	jow	Penthouse	33
QNF	ggl	Hangar	31
IGL	obw	Office	32
LCD	hun	Pier	38
SUS	kwx	Hangar	39
YSS	mco	Office	34
EYW	cqv	Unit	41
XAB	uab	Upper	44
PGJ	lhy	Pier	31
QJJ	jbt	Penthouse	34
TQY	oyu	Rear	43
WJX	itq	Unit	37
VRO	qex	Floor	32
MDG	bjk	Penthouse	40
GBX	kbs	Office	40
DPV	olm	Hangar	40
JLS	lml	Lower	41
OYB	uio	Lower	32
SFH	nki	Unit	37
MFG	dbc	Rear	36
UEX	rke	Floor	32
KBT	mzy	Office	30
HGL	exl	Lobby	43
FPW	vcf	Basement	43
DRP	kiv	Lobby	34
YEY	krm	Trailer	41
UVY	cyr	Lot	44
ORU	wfo	Room	33
HUH	qia	Office	40
JZA	dzp	Apartment	43
PFP	nfm	Department	43
DGC	fwe	Unit	39
VGT	tot	Lobby	31
MKI	wjr	Department	43
XVP	lhk	Front	32
WHO	fyj	Upper	30
LEL	wbs	Building	37
BJJ	obj	Department	33
TQH	cgm	Floor	30
TVP	xgq	Hangar	37
TFE	mxn	Space	35
JXQ	ceo	Basement	30
PRU	nrq	Floor	36
OGW	vhe	Slip	32
LEM	jmx	Upper	41
TQJ	coj	Office	41
EFO	xox	Upper	37
SAT	reu	Unit	34
TVG	rhs	Office	36
EWJ	xbd	Hangar	44
TUQ	zyy	Office	45
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
00000000	GHOST	81dc9bdb52d04dc20036dbd8313ed055	\N	\N	\N	\N
13030373	niky	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	13030373@itcelaya.edu.mx
9999999999999	DIOS	81dc9bdb52d04dc20036dbd8313ed055	ISC	A	\N	dios@itcelaya.edu.mx
1111111111111	Maria De Jesús (Chuchita)	81dc9bdb52d04dc20036dbd8313ed055	IQ	P	\N	maria@itcelaya.edu.mx
7531726902336	Abel Warren	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	jftf6@example.com
0052309689504	Erick Valentine	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	gguf.smkdlgjjc@example.com
7952361326675	Janice Payne	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	gbjox9@example.com
8750321429604	Gretchen Mason	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	fsjk@example.com
7660834128363	Lawanda Noble	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	mgio06@example.com
1465537010436	Robbie Baird	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	fgvbj@example.com
6377227887633	Carla Compton	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	zqdl27@example.com
8751932423522	Heath Stafford	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	wduj132@example.com
9774513551723	Kendra Stevenson	81dc9bdb52d04dc20036dbd8313ed055	IM	P	\N	swyq7@example.com
3623880066048	Brandie Chase	81dc9bdb52d04dc20036dbd8313ed055	IQ	P	\N	ivqab3@example.com
6393470482650	Rose Kirk	81dc9bdb52d04dc20036dbd8313ed055	IME	P	\N	rgpqo@example.com
5377020652324	Ernest Lam	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	ipkuxyo.koxfa@example.com
4116768772988	Randal Jackson	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	cjgsi.vsvz@example.com
0052363376983	Ismael Holt	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	basgn623@example.com
8865412208158	Keri Williams	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	qvvkl4@example.com
3475906234227	Cameron Miranda	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	xhrh8@example.com
1840732425816	Roberta Harrison	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	uttd5@example.com
5919789567373	Colby Wilkerson	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	syfgf@example.com
3906251218274	Cornelius Johnson	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	snxm9@example.com
3387582541403	Teddy Hoover	81dc9bdb52d04dc20036dbd8313ed055	IQ	P	\N	yxmb292@example.com
3763785721386	Lillian Duran	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	tgbpm.vxwf@example.com
5675284247631	Dianna Oliver	81dc9bdb52d04dc20036dbd8313ed055	IME	P	\N	plbytv541@example.com
2570778228377	Geoffrey Aguirre	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	juyj.kpneu@example.com
6506160742632	Melissa Atkinson	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	fede@example.com
2557294462725	Moses Downs	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	hglksp@example.com
1534856486183	Franklin Jones	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	wnjz5@example.com
7427239471682	Arlene Andersen	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	muxm4@example.com
6335652326726	Kathleen Novak	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	rfxd@example.com
1111356212634	Sheldon Stuart	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	qcxob@example.com
2662166619798	Ivan Humphrey	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	kukt65@example.com
6536417767644	Andre Bush	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	wtqi3@example.com
2833247158177	Joni Roberts	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	kjgpi@example.com
6073883364642	Rex Galloway	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	yexj2@example.com
6830274303626	Dwight Patton	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	ulkdn.mqssjj@example.com
6202752628686	Lucas Rivers	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	xljdtj24@example.com
4737128435293	Arnold French	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	ulopej84@example.com
4126215297565	Kristen Wilson	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	rxnmj55@example.com
8764444208517	Bobbi Haynes	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	hdxo@example.com
0429522415828	Carl Nunez	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	cmgt@example.com
2161444137276	Frances Keller	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	jspt.hfbo@example.com
1615167205508	Elena Huber	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	kppt@example.com
7642489317455	Luz Olson	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	veiwm@example.com
6562709444531	Jami Cuevas	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	iiva428@example.com
6253465802427	Ruth Simmons	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	ubbl.jgqy@example.com
4717558681250	Noah Nolan	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	cwlwf4@example.com
1594488105680	Emma Anthony	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	wcbe.lhtk@example.com
7737472645315	Damien Massey	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	xqxqq@example.com
2291482157383	Caroline Nash	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	wjlw80@example.com
5384473282774	Elisabeth Cole	81dc9bdb52d04dc20036dbd8313ed055	IQ	P	\N	hsxwab.cjgiecuig@example.com
6494721318200	Morgan Simon	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	klwg.vszjtw@example.com
6687336541724	Clifford Diaz	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	dbqz.xpgw@example.com
7258280058302	Guadalupe Pena	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	czwx471@example.com
1153380268556	Sophia Arnold	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	fqdg@example.com
1822778716545	Angela Horn	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	fouu@example.com
7339868105715	Byron Allen	81dc9bdb52d04dc20036dbd8313ed055	IM	P	\N	tpse568@example.com
1165756727736	Jesse Glover	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	bnpc3@example.com
7016419861751	Paige Cooper	81dc9bdb52d04dc20036dbd8313ed055	IME	P	\N	dsrro0@example.com
7968954352548	Herman Williamson	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	qqlh30@example.com
6237572246495	Clarissa Giles	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	iayq@example.com
8482535883647	Loretta Mueller	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	zyvc66@example.com
9234819316347	Austin Rivas	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	bceq.diedy@example.com
6174373502535	Deana Kline	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	rloy669@example.com
9818604653118	William Stout	81dc9bdb52d04dc20036dbd8313ed055	IM	P	\N	dlim@example.com
9801210987164	Bridgett Woodard	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	cdrja0@example.com
5127311213303	Tamiko Novak	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	pujd.hosq@example.com
7868172361384	Irma Arnold	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	eswsfp3@example.com
7776231433011	Kellie Galvan	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	wgoy4@example.com
5094034557624	Alex Rowland	81dc9bdb52d04dc20036dbd8313ed055	IM	P	\N	tjww44@example.com
8837938271916	Whitney Jennings	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	imts867@example.com
7231215094748	Marc Pope	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	cwmjc126@example.com
7726919137844	Dwayne Flynn	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	ilgi8@example.com
4612204843720	Theodore Melton	81dc9bdb52d04dc20036dbd8313ed055	IM	P	\N	jvce834@example.com
8133730700878	Jayson Shields	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	fnwfbd183@example.com
6183247380016	Lauren Spencer	81dc9bdb52d04dc20036dbd8313ed055	IM	P	\N	jkdc.bqpv@example.com
1850772737476	Tim Taylor	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	gmish@example.com
7421855334034	Omar Sanders	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	tvwv8@example.com
4947636858329	Darla Dalton	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	vhtr.zadp@example.com
3175237604937	Melisa Li	81dc9bdb52d04dc20036dbd8313ed055	IB	P	\N	nwbc.luow@example.com
3067866762383	Ron George	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	fvtpsg.rjqt@example.com
6631438836685	Heidi Petty	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	wbew3@example.com
6893819715780	Judith Kane	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	fctlv.tfhh@example.com
7277281287474	Wallace Savage	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	moiu6@example.com
8843194331523	Luz Gregory	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	stlq75@example.com
0514601723284	Cari Dillon	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	rvwr.jdnhyatx@example.com
7264358257557	Regina Blackburn	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	xqlz24@example.com
7557216252137	Latanya King	81dc9bdb52d04dc20036dbd8313ed055	IME	P	\N	wuku.prln@example.com
4143586262137	Rudy Mc Knight	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	zskn02@example.com
1436134601850	Lewis Maxwell	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	gchq@example.com
8484118894862	Jasmine Padilla	81dc9bdb52d04dc20036dbd8313ed055	IQ	P	\N	teno@example.com
7762864655916	Laura Caldwell	81dc9bdb52d04dc20036dbd8313ed055	IA	P	\N	vkfz5@example.com
3483245128542	Dustin Clements	81dc9bdb52d04dc20036dbd8313ed055	ISC	P	\N	rtmj@example.com
5315840746962	Julian Heath	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	ckwuc@example.com
8723667561184	Kirsten Dickerson	81dc9bdb52d04dc20036dbd8313ed055	IQ	P	\N	ikpr6@example.com
5057809671988	Rickey Doyle	81dc9bdb52d04dc20036dbd8313ed055	IQ	P	\N	crtugf@example.com
5177565563811	Wesley Nichols	81dc9bdb52d04dc20036dbd8313ed055	IE	P	\N	xlvvc31@example.com
3904494243976	Brent Hanson	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	iglc@example.com
3329158758356	Kurt Wade	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	tltk4@example.com
3656577687711	Sonya Watkins	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	fvze2@example.com
3814741412410	Cassandra Fischer	81dc9bdb52d04dc20036dbd8313ed055	IM	P	\N	fvvq.vcsyp@example.com
1899203351389	Bobbie Hill	81dc9bdb52d04dc20036dbd8313ed055	II	P	\N	pjwom.qvbx@example.com
50253598	Caroline Koch	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	gmcdl51@example.com
18604653	Marty Luna	81dc9bdb52d04dc20036dbd8313ed055	IE	U	\N	eenne7@example.com
11898012	Crystal Lucas	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	dnki57@example.com
10987164	Timothy Young	81dc9bdb52d04dc20036dbd8313ed055	LAE	U	\N	zqvp8@example.com
51273112	Darren Gates	81dc9bdb52d04dc20036dbd8313ed055	IIN	U	\N	etwcr61@example.com
13303786	Erin Clark	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	fcuf51@example.com
81723613	Desiree Chandler	81dc9bdb52d04dc20036dbd8313ed055	IIN	U	\N	yebk.yuvev@example.com
84777623	Allyson Sloan	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	bznk354@example.com
14330115	Bridgett Lawrence	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	hqmsjy5@example.com
09403455	Bobby Cunningham	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	nsmms34@example.com
76248837	Bennie Park	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	dwgk94@example.com
93827191	Chanda O'Connell	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	ioco7@example.com
67231215	Lakeisha Foster	81dc9bdb52d04dc20036dbd8313ed055	LAE	U	\N	gsjopit6@example.com
09474877	Anne Robertson	81dc9bdb52d04dc20036dbd8313ed055	IIN	U	\N	gypvbx73@example.com
26919137	Marsha Cervantes	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	bgdu1@example.com
84446122	Marty Craig	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	ldkp743@example.com
04843720	Neil Solomon	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	fswl.fhrpy@example.com
81337307	Darcy Gamble	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	jpkt9@example.com
00878618	Olivia O'Connell	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	trgqe@example.com
32473800	Lonnie Dickerson	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	emfe8@example.com
16185077	Pablo Weaver	81dc9bdb52d04dc20036dbd8313ed055	IGE	U	\N	czhn7@example.com
27374767	Kelley Cantu	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	qlcw@example.com
42185533	Alisha Franklin	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	tpim.dsucxf@example.com
40344947	Dena Alvarez	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	qcuu8@example.com
63685832	Gustavo Anderson	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	hfkfx3@example.com
93175237	Damion Stein	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	gnvm@example.com
60493730	Denise Figueroa	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	dyqcz9@example.com
67866762	Owen Strong	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	mears256@example.com
38366314	Aisha Rollins	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	odybd@example.com
38836685	Marcos Reed	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	rkodh.stpdgb@example.com
68938197	Mandi Sawyer	81dc9bdb52d04dc20036dbd8313ed055	IE	U	\N	ybts38@example.com
15780727	Keri Riggs	81dc9bdb52d04dc20036dbd8313ed055	LAE	U	\N	zlfl11@example.com
72812874	Alexander Ballard	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	nrup201@example.com
74884319	Colleen Guerrero	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	jbho854@example.com
43315230	Edith Houston	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	gbnn1@example.com
51460172	Betsy Grant	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	sysh@example.com
32847264	Jorge Berry	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	vbms@example.com
35825755	Casey Orr	81dc9bdb52d04dc20036dbd8313ed055	IIN	U	\N	mgtfw059@example.com
77557216	Naomi Floyd	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	putpj4@example.com
25213741	Kisha Nicholson	81dc9bdb52d04dc20036dbd8313ed055	IIN	U	\N	urnos.fdqj@example.com
43586262	Valerie Weiss	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	xwtxg1@example.com
13714361	Nina Cain	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	hbus80@example.com
34601850	Brandy Ayers	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	xcxw@example.com
84841188	Deana Zavala	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	dbix59@example.com
94862776	Noel Vance	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	pxrp@example.com
28646559	Katie Schmidt	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	uzdv4@example.com
16348324	Jacob Mueller	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	mzkw.rnytx@example.com
51285425	Bennie Walls	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	qxkc5@example.com
31584074	Mario Hansen	81dc9bdb52d04dc20036dbd8313ed055	IE	U	\N	ebxi.ncfns@example.com
69628723	Rusty Thompson	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	usdk@example.com
66756118	Kristy Hall	81dc9bdb52d04dc20036dbd8313ed055	LAE	U	\N	zlcq@example.com
45057809	Rose Solomon	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	kspl876@example.com
67198851	Susan Gay	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	fagy@example.com
77565563	Heidi Conner	81dc9bdb52d04dc20036dbd8313ed055	LAE	U	\N	kwdsk@example.com
81139044	Walter Stafford	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	vgjq23@example.com
94243976	Veronica Reyes	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	fyrv349@example.com
33291587	Rickey Bowman	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	yuua445@example.com
58356365	Joey Osborne	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	zsrhbx0@example.com
65776877	Warren Mcfarland	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	tvpnny@example.com
11381474	Christie Peterson	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	huebff@example.com
14124101	Orlando O'Connor	81dc9bdb52d04dc20036dbd8313ed055	IIN	U	\N	kbmwjt4@example.com
89920335	Andre Gregory	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	oqnw@example.com
13892845	Nelson Love	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	niewgh451@example.com
92954157	Alex Mills	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	xcyn53@example.com
77692764	Priscilla Walter	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	siuc529@example.com
01670523	Natasha Craig	81dc9bdb52d04dc20036dbd8313ed055	IGE	U	\N	mlpp82@example.com
86577645	Jill Hunt	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	qmxy@example.com
85285161	Eduardo Choi	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	jpkj1@example.com
75261752	Constance Haley	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	ahqu.iktyq@example.com
46516367	Becky Fritz	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	mxbqw.hwtg@example.com
87121422	Barry Odom	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	gcnd57@example.com
68165457	Dewayne Perez	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	zxng381@example.com
41071922	Kurt Horne	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	liuw91@example.com
17303126	Vicki Ali	81dc9bdb52d04dc20036dbd8313ed055	IIN	U	\N	vsdby8@example.com
08178241	Arnold Hanna	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	uwcmw@example.com
57447444	Sheryl Lutz	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	ukvt@example.com
64730653	Cheri Aguirre	81dc9bdb52d04dc20036dbd8313ed055	IGE	U	\N	ukfd@example.com
27383755	Carmen Castillo	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	tqhw@example.com
46547836	Clarissa Howe	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	ywbk.etdjug@example.com
82171021	Allyson Mercer	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	lrpc974@example.com
59367277	Oscar Norris	81dc9bdb52d04dc20036dbd8313ed055	ISC	U	\N	uyre7@example.com
38857239	Rocky Norris	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	grmg.nuorfn@example.com
62372585	Kate Hess	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	gsnd.oynd@example.com
30472672	Rosa Patel	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	wurk667@example.com
21147221	Tamiko Hardin	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	tkvw@example.com
75930672	Monique Luna	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	vqur61@example.com
41052119	Damion Pope	81dc9bdb52d04dc20036dbd8313ed055	IE	U	\N	jkrw.ndyyd@example.com
45676287	Martin Moreno	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	lddv1@example.com
46014736	Phillip Serrano	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	dlyqw.frvri@example.com
23778789	Stephan Arellano	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	nrrq.iibhsecu@example.com
62566761	Devin Mckenzie	81dc9bdb52d04dc20036dbd8313ed055	IGE	U	\N	jpoz@example.com
21221172	Rick Whitaker	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	iejkvr@example.com
41225184	Keri Owen	81dc9bdb52d04dc20036dbd8313ed055	IM	U	\N	tgtoni.hmjmeku@example.com
25863753	Christy Maynard	81dc9bdb52d04dc20036dbd8313ed055	IA	U	\N	dvytr88@example.com
16710902	Orlando Montgomery	81dc9bdb52d04dc20036dbd8313ed055	IB	U	\N	pnao@example.com
25753981	Wallace Wise	81dc9bdb52d04dc20036dbd8313ed055	IQ	U	\N	hbkj3@example.com
72968651	Dante Munoz	81dc9bdb52d04dc20036dbd8313ed055	LAE	U	\N	vyef.qoxzr@example.com
31518294	Kirsten Hart	81dc9bdb52d04dc20036dbd8313ed055	IME	U	\N	dgpp.jvxt@example.com
14588162	Clinton Velazquez	81dc9bdb52d04dc20036dbd8313ed055	LAE	U	\N	pvck.uxfg@example.com
28446011	Suzanne George	81dc9bdb52d04dc20036dbd8313ed055	II	U	\N	yktfrn50@example.com
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
-- Name: lecturapk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturapk PRIMARY KEY (cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra);


--
-- Name: libropk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY libro
    ADD CONSTRAINT libropk PRIMARY KEY (cvelibro);


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
    ADD CONSTRAINT salapk PRIMARY KEY (cvesala, horario);


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
    ADD CONSTRAINT evaluacionfk FOREIGN KEY (cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra) REFERENCES lectura(cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra);


--
-- Name: lecturafk1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk1 FOREIGN KEY (cvepromotor) REFERENCES usuarios(cveusuario);


--
-- Name: lecturafk2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk2 FOREIGN KEY (cvesala, horario) REFERENCES sala(cvesala, horario);


--
-- Name: lecturafk3; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk3 FOREIGN KEY (nocontrol) REFERENCES usuarios(cveusuario);


--
-- Name: lecturafk4; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk4 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


--
-- Name: lecturafk5; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk5 FOREIGN KEY (cvelibro) REFERENCES libro(cvelibro);


--
-- Name: lecturafk6; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk6 FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


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

