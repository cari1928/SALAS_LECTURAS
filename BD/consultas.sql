select distinct cveeval AS "ID", nocontrol AS "Número de Ctrl", nombre AS "Alumno", comprension AS "Comprensión", motivacion AS "Motivación", reporte AS "Reporte", tema AS "Tema", participacion AS "Participación", terminado AS "Terminado" from evaluacion inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol where cveletra in (select cve from abecedario where letra= 'A') and cvepromotor='0052309689504' order by nombre

SELECT pg_terminate_backend(pid) FROM pg_stat_activity WHERE datname = 'basededatos';

select COALESCE(MAX(cveletra),0) as cveletra from lectura l where l.cveperiodo in (select cveperiodo from lectura where cveperiodo='6' and cvepromotor='0429522415828')

select COALESCE(MAX(cveletra),0) as cveletra from lectura l where l.cveperiodo in (select cveperiodo from lectura where cveperiodo='6' and cvepromotor='0429522415828')

select letra AS "Grupo", nombre AS "Promotor", horario AS "Horario", cvesala AS "Sala" from lectura inner join abecedario on lectura.cveletra = abecedario.cve inner join usuarios on usuarios.cveusuario = lectura.cvepromotor where nocontrol='13030373' and cveperiodo ='6' order by letra 

select distinct cveeval AS "ID", nocontrol AS "Número de Ctrl", nombre AS "Alumno", 
	comprension AS "Comprensión", motivacion AS "Motivación", reporte AS "Reporte", 
	tema AS "Tema", participacion AS "Participación", terminado AS "Terminado" 
	from evaluacion 
		inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol 
	where cveletra in (select cve from abecedario where letra= 'A') and 
		  cvepromotor='Carl Nunez' 
	order by nombre

select distinct cveeval AS "ID", nocontrol AS "Número de Ctrl", nombre AS "Alumno", 
	comprension AS "Comprensión", motivacion AS "Motivación", reporte AS "Reporte", 
	tema AS "Tema", participacion AS "Participación", terminado AS "Terminado" 
	from evaluacion 
		inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol 
	where cveletra in (select cve from abecedario where letra= 'A') and 
		cvepromotor='13030373' order by nombre