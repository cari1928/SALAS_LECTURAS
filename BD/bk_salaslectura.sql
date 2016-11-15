--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
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
-- Name: añadeest(); Type: FUNCTION; Schema: public; Owner: admin
--

CREATE FUNCTION "añadeest"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
  BEGIN
       update sala set numalumnos = numalumnos + 1 where cvesala = NEW.cvesala;
       RETURN NEW;
  END;
$$;


ALTER FUNCTION public."añadeest"() OWNER TO admin;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: abecedario; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE abecedario (
    cve integer NOT NULL,
    letra character varying(1)
);


ALTER TABLE abecedario OWNER TO admin;

--
-- Name: abecedario_cve_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE abecedario_cve_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE abecedario_cve_seq OWNER TO admin;

--
-- Name: abecedario_cve_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE abecedario_cve_seq OWNED BY abecedario.cve;


--
-- Name: especialidad; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE especialidad (
    cveespecialidad character varying(3) NOT NULL,
    nombre character varying(40)
);


ALTER TABLE especialidad OWNER TO admin;

--
-- Name: estado; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE estado (
    cveestado character varying(1) NOT NULL,
    descripcion character varying(7)
);


ALTER TABLE estado OWNER TO admin;

--
-- Name: evaluacion; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
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


ALTER TABLE evaluacion OWNER TO admin;

--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE evaluacion_prueba_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE evaluacion_prueba_seq OWNER TO admin;

--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE evaluacion_prueba_seq OWNED BY evaluacion.cveeval;


--
-- Name: lectura; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
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


ALTER TABLE lectura OWNER TO admin;

--
-- Name: libro; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE libro (
    cvelibro integer NOT NULL,
    autor character varying(75),
    titulo character varying(100)
);


ALTER TABLE libro OWNER TO admin;

--
-- Name: periodo; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE periodo (
    fechainicio date NOT NULL,
    fechafinal date NOT NULL,
    cveperiodo integer NOT NULL
);


ALTER TABLE periodo OWNER TO admin;

--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE periodo_cveperiodo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE periodo_cveperiodo_seq OWNER TO admin;

--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE periodo_cveperiodo_seq OWNED BY periodo.cveperiodo;


--
-- Name: sala; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE sala (
    cvesala character varying(3) NOT NULL,
    horario character varying(11) NOT NULL,
    ubicacion character varying(50),
    numalumnos integer,
    limite integer
);


ALTER TABLE sala OWNER TO admin;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
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


ALTER TABLE usuarios OWNER TO admin;

--
-- Name: cve; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY abecedario ALTER COLUMN cve SET DEFAULT nextval('abecedario_cve_seq'::regclass);


--
-- Name: cveeval; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY evaluacion ALTER COLUMN cveeval SET DEFAULT nextval('evaluacion_prueba_seq'::regclass);


--
-- Name: cveperiodo; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY periodo ALTER COLUMN cveperiodo SET DEFAULT nextval('periodo_cveperiodo_seq'::regclass);


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
-- Data for Name: especialidad; Type: TABLE DATA; Schema: public; Owner: admin
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
-- Data for Name: estado; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY estado (cveestado, descripcion) FROM stdin;
O	\N
L	\N
\.


--
-- Data for Name: evaluacion; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY evaluacion (cvepromotor, cvesala, nocontrol, comprension, motivacion, reporte, tema, participacion, terminado, cveperiodo, horario, cveletra, cveeval) FROM stdin;
1111111111111	SA5	22222222	0	0	0	0	0	0	7	02:00-03:00	2	12
1111111111111	SA5	22222222	0	0	0	0	0	0	7	02:00-03:00	2	13
1111111111111	SA5	11111111	0	0	0	0	0	0	7	02:00-03:00	2	14
1111111111111	SA5	11111111	0	0	0	0	0	0	7	02:00-03:00	2	15
\.


--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('evaluacion_prueba_seq', 15, true);


--
-- Data for Name: lectura; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY lectura (cvepromotor, cvesala, nocontrol, cvelibro, cveperiodo, horario, cveletra) FROM stdin;
1111111111111	SA5	22222222	\N	7	02:00-03:00	2
1111111111111	SA5	11111111	\N	7	02:00-03:00	2
\.


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: admin
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
\.


--
-- Data for Name: periodo; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY periodo (fechainicio, fechafinal, cveperiodo) FROM stdin;
2016-10-29	2016-10-31	6
2016-11-01	2016-11-30	7
\.


--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('periodo_cveperiodo_seq', 7, true);


--
-- Data for Name: sala; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY sala (cvesala, horario, ubicacion, numalumnos, limite) FROM stdin;
S01	05:00-07:00	Biblioteca	3	40
S02	02:00-04:00	Hemeroteca	2	25
S03	05:00-07:00	Gimnasio	3	40
SA5	02:00-03:00	Templo	3	35
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: admin
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
-- Name: lecturapk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturapk PRIMARY KEY (cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra);


--
-- Name: libropk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY libro
    ADD CONSTRAINT libropk PRIMARY KEY (cvelibro);


--
-- Name: periodopk2; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY periodo
    ADD CONSTRAINT periodopk2 PRIMARY KEY (cveperiodo);


--
-- Name: salapk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY sala
    ADD CONSTRAINT salapk PRIMARY KEY (cvesala, horario);


--
-- Name: usuarios_correo_key; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_correo_key UNIQUE (correo);


--
-- Name: addnumstudent; Type: TRIGGER; Schema: public; Owner: admin
--

CREATE TRIGGER addnumstudent AFTER INSERT ON lectura FOR EACH ROW EXECUTE PROCEDURE "añadeest"();


--
-- Name: evaluacionfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY evaluacion
    ADD CONSTRAINT evaluacionfk FOREIGN KEY (cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra) REFERENCES lectura(cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra);


--
-- Name: lecturafk1; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk1 FOREIGN KEY (cvepromotor) REFERENCES usuarios(cveusuario);


--
-- Name: lecturafk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk2 FOREIGN KEY (cvesala, horario) REFERENCES sala(cvesala, horario);


--
-- Name: lecturafk3; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk3 FOREIGN KEY (nocontrol) REFERENCES usuarios(cveusuario);


--
-- Name: lecturafk4; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk4 FOREIGN KEY (cveperiodo) REFERENCES periodo(cveperiodo);


--
-- Name: lecturafk5; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk5 FOREIGN KEY (cvelibro) REFERENCES libro(cvelibro);


--
-- Name: lecturafk6; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY lectura
    ADD CONSTRAINT lecturafk6 FOREIGN KEY (cveletra) REFERENCES abecedario(cve);


--
-- Name: usuariospk; Type: FK CONSTRAINT; Schema: public; Owner: admin
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

