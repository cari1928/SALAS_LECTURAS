select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario inner join periodo on periodo.cveperiodo = lectura.cveperiodo where cveletra in (select cve from abecedario where letra ='pyh') and cvepromotor='15834759'

select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario inner join periodo on periodo.cveperiodo = lectura.cveperiodo where cvesala='pyh' and cvepromotor='15834759'

select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario inner join periodo on periodo.cveperiodo = lectura.cveperiodo where sala.cvesala='pyh' and cvepromotor='15834759'

select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura 
	inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario 
	inner join periodo on periodo.cveperiodo = lectura.cveperiodo 
where sala.cvesala='A' 
	and cvepromotor='15834759'

select distinct letra AS "Grupo", cvesala AS "Sala", horario AS "Horario" from lectura 
	inner join abecedario on lectura.cveletra = abecedario.cve 
	inner join periodo on lectura.cveperiodo = periodo.cveperiodo 
where cvepromotor='1111111111111'	