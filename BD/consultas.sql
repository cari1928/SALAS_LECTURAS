select cveperiodo AS "ID", fechainicio AS "Fecha de Inicio", fechafinal AS "Fecha Final" from periodo

select s.cvesala, s.horario, s.ubicacion, s.numalumnos, s.limite from sala s where cvesala='abq' and (s.cvesala not in (select cvesala from lectura where cveperiodo = 8) or s.horario not in (select horario from lectura where cveperiodo = 8))

insert into lectura (cvepromotor,cvesala,nocontrol,cveperiodo,horario,cvelibro,cveletra) values ('8750321429604','zof','00000000',8,'pyh',0,1)