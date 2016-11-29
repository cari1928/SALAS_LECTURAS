select distinct letra AS "Grupo", cvesala AS "Sala", horario AS "Horario" from lectura inner join abecedario on lectura.cveletra = abecedario.cve inner join periodo on lectura.cveperiodo = periodo.cveperiodo where cvepromotor='1111111111111'
select * from usuarios where pass='81dc9bdb52d04dc20036dbd8313ed055' and cveusuario='7952361326675'
select * from usuarios where pass='81dc9bdb52d04dc20036dbd8313ed055' and cveusuario='7952361326675'

SELECT pg_terminate_backend(pid) FROM pg_stat_activity WHERE datname = 'basededatos';

insert into lectura (cvepromotor,cvesala,nocontrol,cveperiodo,horario,cvelibro,cveletra) values ('7531726902336','VPI','00000000',5,'03:02-06:04',0,1)

	update evaluacion set comprension='0', motivación='0', reporte='0', tema='0', participación='10', terminado='0' where cveeval='7'