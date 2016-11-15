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
    cvelibro integer NOT NULL,
    autor character varying(75),
    titulo character varying(100)
);


ALTER TABLE libro OWNER TO postgres;

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
LAE	Licenciatura En Administración
\.


--
-- Data for Name: evaluacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY evaluacion (cvepromotor, cvesala, nocontrol, comprension, motivacion, reporte, tema, participacion, terminado, cveperiodo, horario, cveletra, cveeval) FROM stdin;
\.


--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('evaluacion_prueba_seq', 15, true);


--
-- Data for Name: lectura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY lectura (cvepromotor, cvesala, nocontrol, cvelibro, cveperiodo, horario, cveletra) FROM stdin;
\.


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY libro (cvelibro, autor, titulo) FROM stdin;
0	\N	\N
1	Erick Valentine	National Marketing
2	Janice Payne	Business Marketing
3	Gretchen Mason	Prepaid Customer
4	Lawanda Noble	Accounting
5	Robbie Baird	Service
6	Carla Compton	International Sales
7	Heath Stafford	AccessorySales
8	Kendra Stevenson	Prepaid Customer
9	Brandie Chase	Corporate Marketing
10	Rose Kirk	Business Customer
11	Ernest Lam	Service
12	Randal Jackson	International Marketing
13	Ismael Holt	Prepaid Customer
14	Keri Williams	International Customer
15	Cameron Miranda	Prepaid Customer
16	Roberta Harrison	Technical Sales
17	Colby Wilkerson	Business Marketing
18	Cornelius Johnson	Service
19	Teddy Hoover	Service
20	Lillian Duran	Corporate Customer
21	Dianna Oliver	Consumer Marketing
22	Geoffrey Aguirre	Technical
23	Melissa Atkinson	Business Marketing
24	Moses Downs	Accounting
25	Franklin Jones	Corporate Customer
26	Arlene Andersen	Technical
27	Kathleen Novak	Technical
28	Sheldon Stuart	Technical
29	Ivan Humphrey	Web
30	Andre Bush	AccessoryMarketing
31	Joni Roberts	International Customer
32	Rex Galloway	Prepaid Customer
33	Dwight Patton	Business Marketing
34	Lucas Rivers	Web
35	Arnold French	Service
36	Kristen Wilson	Corporate Marketing
37	Bobbi Haynes	Consumer Customer
38	Carl Nunez	National Marketing
39	Frances Keller	National Marketing
40	Elena Huber	Prepaid Customer
41	Luz Olson	Monvenupentor
42	Jami Cuevas	Grofropentor
43	Ruth Simmons	\N
44	Noah Nolan	Klirobinor
45	Emma Anthony	Varhupor
46	Damien Massey	Monkilommar
47	Caroline Nash	Grobanepin
48	Elisabeth Cole	Barwerentor
49	Morgan Simon	Dopericor
50	Clifford Diaz	Monglibaquistor
51	Guadalupe Pena	Monericower
52	Sophia Arnold	Barfropicistor
53	Angela Horn	Lomweristor
54	Byron Allen	Barpickupar
55	\N	Lomhupewistor
56	Paige Cooper	Parkilplicator
57	Herman Williamson	Adjubonover
58	Clarissa Giles	Uperplicator
59	Loretta Mueller	Ciprobackor
60	Austin Rivas	\N
61	\N	Dopfropupazz
62	William Stout	Qwimunopentor
63	Bridgett Woodard	Barmunover
64	Tamiko Novak	Parerepin
65	Irma Arnold	Monwerpazz
66	Kellie Galvan	Winhupepin
67	Alex Rowland	\N
68	Whitney Jennings	Winfropplor
69	Marc Pope	Winhupimicator
70	Dwayne Flynn	Supvenantor
71	Theodore Melton	Zeeeredicator
72	Jayson Shields	Varglibedar
73	Lauren Spencer	Inerplower
74	\N	\N
75	Omar Sanders	Dopvenplor
76	Darla Dalton	Barnipplex
77	Melisa Li	Cipfropedor
78	Ron George	Qwiglibupicator
79	Heidi Petty	Klierollazz
80	Judith Kane	Thrumunicicator
81	Wallace Savage	Zeemunicower
82	Luz Gregory	Tupbanplan
83	Cari Dillon	Emnipplower
84	Regina Blackburn	Frotanepax
85	Latanya King	Tupjubar
86	\N	Dopdimackentor
87	Lewis Maxwell	\N
88	Jasmine Padilla	Qwihupplin
89	Laura Caldwell	Unmunommar
90	Dustin Clements	Cipsipar
91	Julian Heath	Cipdimplex
92	\N	Kliwerpollor
93	Rickey Doyle	Zeefropistor
94	Wesley Nichols	Ciptanommicator
95	Brent Hanson	Trupickommin
96	Kurt Wade	Tipdimexicator
97	Sonya Watkins	Qwikilplin
98	Cassandra Fischer	Rapnipicentor
99	Bobbie Hill	Zeepickplicator
100	Caroline Koch	Adglibplex
101	Marty Luna	Rappickupex
102	Crystal Lucas	\N
103	Timothy Young	Vardudupin
104	Darren Gates	Tipkilplax
105	Erin Clark	Frodudaquicator
106	Desiree Chandler	Frobanax
107	Allyson Sloan	Haphupentor
108	Bridgett Lawrence	Barnipackistor
109	Bobby Cunningham	Winfropefex
110	Bennie Park	Qwizapollentor
111	Chanda O'Connell	Klitinewower
112	Lakeisha Foster	Emjubower
113	Anne Robertson	Parzapplin
114	Marsha Cervantes	Endzapantor
115	Marty Craig	Zeetanexor
116	Neil Solomon	Kliquestplentor
117	Darcy Gamble	Cipkilewazz
118	Olivia O'Connell	\N
119	Lonnie Dickerson	Raperamin
120	\N	\N
121	Kelley Cantu	Adhupupin
122	Alisha Franklin	Reweredover
123	Dena Alvarez	Truwerover
124	Gustavo Anderson	Resapackentor
125	Damion Stein	\N
126	Denise Figueroa	\N
127	Owen Strong	Zeezapplazz
128	Aisha Rollins	Monglibax
129	Marcos Reed	\N
130	Mandi Sawyer	Parsapentor
131	Keri Riggs	Barrobackazz
132	Alexander Ballard	Unbanistor
133	Colleen Guerrero	Gropebantor
134	Edith Houston	Rapglibaquicator
135	Betsy Grant	Upglibplentor
136	\N	Vardimexicator
137	Casey Orr	Hapzapewistor
138	Naomi Floyd	Trujubamar
139	Kisha Nicholson	Aderplower
140	Valerie Weiss	Inbanepex
\.


--
-- Data for Name: periodo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY periodo (fechainicio, fechafinal, cveperiodo) FROM stdin;
2016-10-29	2016-10-31	6
2016-11-01	2016-11-30	7
\.


--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('periodo_cveperiodo_seq', 7, true);


--
-- Data for Name: sala; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY sala (cvesala, horario, ubicacion, limite) FROM stdin;
S01	05:00-07:00	Biblioteca	40
S02	02:00-04:00	Hemeroteca	25
S03	05:00-07:00	Gimnasio	40
SA5	02:00-03:00	Templo	35
vpi	dkb	Hangar	42
dug	qse	Basement	36
pzb	eox	Trailer	36
eij	mxe	Rear	43
saa	jwn	Building	37
ogh	pbt	Office	42
ayr	qwl	Department	43
wzo	avb	Hangar	35
aks	shc	Upper	43
zof	pyh	Apartment	44
irc	far	Trailer	37
jhr	mmd	Trailer	44
rup	dfv	Building	45
xtn	kyn	Upper	40
bif	khd	Suite	45
ckg	gzp	Side	37
yrb	yhj	Slip	40
ktp	whb	Trailer	36
pbx	fqh	Upper	39
ime	jhd	Department	39
fxh	dom	Pier	38
qic	ajg	Department	37
mso	udn	Unit	40
oju	njl	Hangar	44
ada	rer	Department	44
mjs	xsc	Front	40
qit	liq	Floor	41
sff	jxi	Office	38
vxv	ulb	Basement	42
tsi	dpy	Lobby	45
ixt	nqs	Department	38
oey	hcp	Apartment	38
ifm	hng	Slip	39
fjo	hqj	Basement	36
fhy	ejo	Trailer	42
ttm	gav	Office	40
oci	nqy	Slip	37
ppb	wuv	Penthouse	40
tgj	lih	Upper	38
jre	coh	Room	40
jvv	pyq	Unit	40
abq	oof	Unit	40
pbk	zsw	Hangar	38
wri	vtf	Office	38
yik	wvh	Penthouse	43
ubk	odb	Rear	36
xgq	vox	Department	44
pbn	sqa	Trailer	42
iuu	ovt	Pier	41
bgb	jow	Penthouse	37
qnf	ggl	Hangar	35
igl	obw	Office	36
lcd	hun	Pier	41
sus	kwx	Hangar	41
yss	mco	Office	38
eyw	cqv	Unit	42
xab	uab	Upper	44
pgj	lhy	Pier	36
qjj	jbt	Penthouse	38
tqy	oyu	Rear	43
wjx	itq	Unit	40
vro	qex	Floor	36
mdg	bjk	Penthouse	41
gbx	kbs	Office	41
dpv	olm	Hangar	42
jls	lml	Lower	43
oyb	uio	Lower	37
sfh	nki	Unit	39
mfg	dbc	Rear	39
uex	rke	Floor	36
kbt	mzy	Office	35
hgl	exl	Lobby	44
fpw	vcf	Basement	44
drp	kiv	Lobby	38
yey	krm	Trailer	42
uvy	cyr	Lot	45
oru	wfo	Room	37
huh	qia	Office	42
jza	dzp	Apartment	43
pfp	nfm	Department	44
dgc	fwe	Unit	41
vgt	tot	Lobby	36
mki	wjr	Department	44
xvp	lhk	Front	36
who	fyj	Upper	35
lel	wbs	Building	40
bjj	obj	Department	37
tqh	cgm	Floor	35
tvp	xgq	Hangar	40
tfe	mxn	Space	39
jxq	ceo	Basement	35
pru	nrq	Floor	39
ogw	vhe	Slip	36
lem	jmx	Upper	42
tqj	coj	Office	42
efo	xox	Upper	40
sat	reu	Unit	38
tvg	rhs	Office	39
ewj	xbd	Hangar	44
tuq	zyy	Office	45
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuarios (cveusuario, nombre, pass, cveespecialidad, rol, clave, correo) FROM stdin;
00000000	GHOST	\N	\N	\N	\N	\N
1234567876543	\N	\N	\N	\N	e1a01ea89a720c84f92153a45e09de53	\N
22222222	Lara V. Mccoy	81dc9bdb52d04dc20036dbd8313ed055	LAE	U	\N	lara@itcelaya.edu.mx
11111111	Kathleen G. Santiago	81dc9bdb52d04dc20036dbd8313ed055	IE	U	\N	kathleensantiago@itcelaya.edu.mx
1111111111111	Macey Lucas	81dc9bdb52d04dc20036dbd8313ed055	IIN	P	\N	maceylucas@itcelaya.edu.mx
9999999999999	DIOS	b706835de79a2b4e80506f582af3676a	ISC	A	\N	dios@itcelaya.edu.mx
2222222222222	Keane Q. Oconnor	81dc9bdb52d04dc20036dbd8313ed055	IGE	P	\N	keaneoconnor@itcelaya.edu.mx
3333333333333	Promotor1	81dc9bdb52d04dc20036dbd8313ed055	LAE	P	\N	promo1@itcelaya.edu.mx
7531726902336	Abel Warren	2141	IE	p	\N	jftf6@example.com
0052309689504	Erick Valentine	4234	IIN	u	\N	gguf.smkdlgjjc@example.com
7952361326675	Janice Payne	2313	ISC	u	\N	gbjox9@example.com
8750321429604	Gretchen Mason	2243	IE	p	\N	fsjk@example.com
7660834128363	Lawanda Noble	3232	ISC	a	\N	mgio06@example.com
1465537010436	Robbie Baird	1323	IIN	a	\N	fgvbj@example.com
6377227887633	Carla Compton	3313	IE	p	\N	zqdl27@example.com
8751932423522	Heath Stafford	3131	IIN	u	\N	wduj132@example.com
9774513551723	Kendra Stevenson	3143	IM	a	\N	swyq7@example.com
3623880066048	Brandie Chase	3114	IQ	u	\N	ivqab3@example.com
6393470482650	Rose Kirk	2322	IME	u	\N	rgpqo@example.com
5377020652324	Ernest Lam	2323	IA	a	\N	ipkuxyo.koxfa@example.com
4116768772988	Randal Jackson	4322	IE	p	\N	cjgsi.vsvz@example.com
0052363376983	Ismael Holt	3323	ISC	u	\N	basgn623@example.com
8865412208158	Keri Williams	2242	ISC	u	\N	qvvkl4@example.com
3475906234227	Cameron Miranda	2344	IB	a	\N	xhrh8@example.com
1840732425816	Roberta Harrison	2334	IE	p	\N	uttd5@example.com
5919789567373	Colby Wilkerson	3322	II	u	\N	syfgf@example.com
3906251218274	Cornelius Johnson	3433	LAE	p	\N	snxm9@example.com
3387582541403	Teddy Hoover	3412	IQ	a	\N	yxmb292@example.com
76877298	Lillian Duran	4234	II	u	\N	tgbpm.vxwf@example.com
80052363	Dianna Oliver	4424	IME	u	\N	plbytv541@example.com
37698388	Geoffrey Aguirre	4143	LAE	u	\N	juyj.kpneu@example.com
65412208	Melissa Atkinson	4123	IIN	u	\N	fede@example.com
15834759	Moses Downs	2341	LAE	p	\N	hglksp@example.com
06234227	Franklin Jones	4421	ISC	a	\N	wnjz5@example.com
18407324	Arlene Andersen	3323	IGE	p	\N	muxm4@example.com
25816591	Kathleen Novak	3111	II	p	\N	rfxd@example.com
97895673	Sheldon Stuart	2224	LAE	u	\N	qcxob@example.com
73390625	Ivan Humphrey	3444	IGE	p	\N	kukt65@example.com
12182743	Andre Bush	4324	II	p	\N	wtqi3@example.com
38758254	Joni Roberts	1343	IGE	p	\N	kjgpi@example.com
14033763	Rex Galloway	2422	IIN	u	\N	yexj2@example.com
78572138	Dwight Patton	1232	IGE	a	\N	ulkdn.mqssjj@example.com
65675284	Lucas Rivers	3113	II	p	\N	xljdtj24@example.com
24763125	Arnold French	1233	IE	a	\N	ulopej84@example.com
70778228	Kristen Wilson	3342	IB	p	\N	rxnmj55@example.com
37765061	Bobbi Haynes	3221	IB	u	\N	hdxo@example.com
60742632	Carl Nunez	3333	IB	p	\N	cmgt@example.com
25572944	Frances Keller	3322	ISC	p	\N	jspt.hfbo@example.com
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
-- Name: usuarios_correo_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_correo_key UNIQUE (correo);


--
-- Name: addnumstudent; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER addnumstudent AFTER INSERT ON lectura FOR EACH ROW EXECUTE PROCEDURE "añadeest"();


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

