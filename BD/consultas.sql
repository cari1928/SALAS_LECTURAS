select distinct nombre AS "Alumno", comprension AS "Comprensión", motivacion AS "Motivación", reporte AS "Reporte", tema AS "Tema", participacion AS "Participación", terminado AS "Terminado" from evaluacion inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol where cveletra in (select cve from abecedario where letra= 'A') and cvepromotor='2222222222222' order by nombre,comprension,motivacion,reporte, tema,participacion,terminado

select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario inner join periodo on periodo.cveperiodo = lectura.cveperiodo where cveletra in (select cve from abecedario where letra ='A') and cvepromotor='2222222222222'

select letra, cvesala, horario, periodo from lectura inner join abecedario on lectura.cveletra = abecedario.cve inner join periodo on lectura.cveperiodo = periodo.cveperiodo where cvepromotor='2222222222222' and cveperiodo=7

select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion
from lectura
	inner join usuarios on usuarios.cveusuario= lectura.cvepromotor
	inner join periodo on periodo.cveperiodo=lectura.cveperiodo
	inner join abecedario on abecedario.cve=lectura.cveletra
	inner join sala on lectura.cvesala=sala.cvesala
where ubicacion = 'Templo'
	and lectura.cveperiodo='7'
	and nocontrol in (select nocontrol from lectura where nocontrol ='22222222')
