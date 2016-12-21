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
-- Name: dia; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE dia (
    cvedia integer NOT NULL,
    nombre character varying(25)
);


ALTER TABLE dia OWNER TO admin;

--
-- Name: especialidad; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE especialidad (
    cveespecialidad character varying(3) NOT NULL,
    nombre character varying(40)
);


ALTER TABLE especialidad OWNER TO admin;

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
-- Name: laboral; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE laboral (
    cvedia integer NOT NULL,
    cvesala character varying(3) NOT NULL,
    horario character varying(11) NOT NULL
);


ALTER TABLE laboral OWNER TO admin;

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
    autor character varying(75),
    titulo character varying(100),
    cvelibro integer NOT NULL
);


ALTER TABLE libro OWNER TO admin;

--
-- Name: libro_cvelibro_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE libro_cvelibro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE libro_cvelibro_seq OWNER TO admin;

--
-- Name: libro_cvelibro_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE libro_cvelibro_seq OWNED BY libro.cvelibro;


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


ALTER TABLE msj OWNER TO admin;

--
-- Name: msj_cvemsj_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE msj_cvemsj_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE msj_cvemsj_seq OWNER TO admin;

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
    limite integer,
    nombre character varying(75)
);


ALTER TABLE sala OWNER TO admin;

--
-- Name: tipomsj; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE tipomsj (
    cvetipomsj character varying(2) NOT NULL,
    descripcion character varying(10)
);


ALTER TABLE tipomsj OWNER TO admin;

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
-- Name: cvelibro; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY libro ALTER COLUMN cvelibro SET DEFAULT nextval('libro_cvelibro_seq'::regclass);


--
-- Name: cvemsj; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY msj ALTER COLUMN cvemsj SET DEFAULT nextval('msj_cvemsj_seq'::regclass);


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
-- Data for Name: dia; Type: TABLE DATA; Schema: public; Owner: admin
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
LAE	licenciatura En Administración
\.


--
-- Data for Name: evaluacion; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY evaluacion (cvepromotor, cvesala, nocontrol, comprension, motivacion, reporte, tema, participacion, terminado, cveperiodo, horario, cveletra, cveeval) FROM stdin;
\.


--
-- Name: evaluacion_prueba_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('evaluacion_prueba_seq', 10, true);


--
-- Data for Name: laboral; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY laboral (cvedia, cvesala, horario) FROM stdin;
\.


--
-- Data for Name: lectura; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY lectura (cvepromotor, cvesala, nocontrol, cvelibro, cveperiodo, horario, cveletra) FROM stdin;
\.


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY libro (autor, titulo, cvelibro) FROM stdin;
\.


--
-- Name: libro_cvelibro_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('libro_cvelibro_seq', 104, true);


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
\.


--
-- Name: periodo_cveperiodo_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('periodo_cveperiodo_seq', 7, true);


--
-- Data for Name: sala; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY sala (cvesala, horario, ubicacion, limite, nombre) FROM stdin;
\.


--
-- Data for Name: tipomsj; Type: TABLE DATA; Schema: public; Owner: admin
--

COPY tipomsj (cvetipomsj, descripcion) FROM stdin;
G	Grupal
I	Individual
PU	Público
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: admin
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
-- Name: especialidadpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY especialidad
    ADD CONSTRAINT especialidadpk PRIMARY KEY (cveespecialidad);


--
-- Name: evaluacionpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY evaluacion
    ADD CONSTRAINT evaluacionpk PRIMARY KEY (cveeval);


--
-- Name: laboralpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralpk PRIMARY KEY (cvedia, cvesala, horario);


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
-- Name: salapk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY sala
    ADD CONSTRAINT salapk PRIMARY KEY (cvesala, horario);


--
-- Name: tipomsjpk; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY tipomsj
    ADD CONSTRAINT tipomsjpk PRIMARY KEY (cvetipomsj);


--
-- Name: usuarios_correo_key; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_correo_key UNIQUE (correo);


--
-- Name: evaluacionfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY evaluacion
    ADD CONSTRAINT evaluacionfk FOREIGN KEY (cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra) REFERENCES lectura(cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra);


--
-- Name: laboralfk; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk FOREIGN KEY (cvedia) REFERENCES dia(cvedia);


--
-- Name: laboralfk2; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY laboral
    ADD CONSTRAINT laboralfk2 FOREIGN KEY (cvesala, horario) REFERENCES sala(cvesala, horario);


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

