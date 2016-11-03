select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion
from lectura
	inner join usuarios on usuarios.cveusuario= lectura.cvepromotor
	inner join periodo on periodo.cveperiodo=lectura.cveperiodo
	inner join abecedario on abecedario.cve=lectura.cveletra
	inner join sala on lectura.cvesala=sala.cvesala
where ubicacion = 'Templo'
	and lectura.cveperiodo='7'
	and nocontrol in (select nocontrol from lectura where nocontrol ='22222222')
