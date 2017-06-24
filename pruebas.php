<?php
include 'sistema.php';

$web = new Sistema;

$sql = "SELECT DISTINCT laboral.cveletra, letra, cvesala, nombre, titulo
    FROM laboral
    INNER JOIN abecedario ON laboral.cveletra = abecedario.cve
    LEFT JOIN libro ON laboral.cvelibro_grupal = libro.cvelibro
    WHERE cveperiodo=? AND cvepromotor=?
    ORDER BY letra";
$web->DB->SetFetchMode(ADODB_FETCH_ASSOC);
$grupos = $web->DB->GetAll($sql, array(1, 'HEHS671201K16'));

$web->debug($grupos);
