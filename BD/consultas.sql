select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion from lectura inner join usuarios on usuarios.cveusuario= lectura.cvepromotor inner join periodo on periodo.cveperiodo=lectura.cveperiodo inner join abecedario on abecedario.cve=lectura.cveletra inner join sala on lectura.cvesala=sala.cvesala where lectura.cvesala='S01' and and numalumnos <=15 and lectura.cveperiodo='7' and nocontrol not in (select nocontrol from lectura where nocontrol ='11111111')

select nombre, letra from lectura inner join abecedario on abecedario.cve = lectura.cveletra
inner join usuarios on lectura.cvepromotor = usuarios.cveusuario
where nocontrol = '11111111';

select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion 
from lectura inner join usuarios on usuarios.cveusuario= lectura.cvepromotor 
		inner join periodo on periodo.cveperiodo=lectura.cveperiodo 
		inner join abecedario on abecedario.cve=lectura.cveletra 
		inner join sala on lectura.cvesala=sala.cvesala 
where lectura.cvepromotor='2222222222222' 
	and numalumnos <=15 
	and lectura.cveperiodo='7' 
	and nocontrol not in (select nocontrol from lectura where nocontrol ='11111111')
