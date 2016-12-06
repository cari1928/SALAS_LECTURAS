select distinct cveeval AS "ID", nocontrol AS "Número de Ctrl", nombre AS "Alumno", comprension AS "Comprensión", motivacion AS "Motivación", reporte AS "Reporte", tema AS "Tema", participacion AS "Participación", terminado AS "Terminado" from evaluacion inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol where cveletra in (select cve from abecedario where letra= 'A') and cvepromotor='0052309689504' order by nombre

SELECT pg_terminate_backend(pid) FROM pg_stat_activity WHERE datname = 'basededatos';

