select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion from lectura inner join usuarios on usuarios.cveusuario= lectura.cvepromotor inner join periodo on periodo.cveperiodo=lectura.cveperiodo inner join abecedario on abecedario.cve=lectura.cveletra inner join sala on lectura.cvesala=sala.cvesala where lectura.cvepromotor='1111111111111' and lectura.cveperiodo='7'and nocontrol in (select nocontrol from lectura where nocontrol ='14031860') order by letra
select distinct letra,usuarios.nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion from lectura inner join usuarios on usuarios.cveusuario= lectura.cvepromotor inner join periodo on periodo.cveperiodo=lectura.cveperiodo inner join abecedario on abecedario.cve=lectura.cveletra inner join sala on lectura.cvesala=sala.cvesala where lectura.cvepromotor='1111111111111' and lectura.cveperiodo='7'and nocontrol not in (select nocontrol from lectura where nocontrol ='14031860') order by letra
select distinct nombre , comprension, motivacion, reporte, tema, participacion, terminado, nocontrol, cveeval, cveperiodo from evaluacion
            inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol
            where cveletra in
                (select cve from abecedario
                    where letra= 'A')
            and cvepromotor='1111111111111'
            and cveperiodo=7
            order by nombre,comprension,motivacion,reporte, tema,participacion,terminado