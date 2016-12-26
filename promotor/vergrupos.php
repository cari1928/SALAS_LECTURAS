<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'P') {$web->checklogin();}

$web->iniClases('promotor', "index grupos");
$grupos = $web->grupos($_SESSION['cveUser']);
$web->smarty->assign('grupos', $grupos);
$cveperiodo = $web->periodo();
$web->smarty->assign('cveperiodo', $cveperiodo);

$sql = "
select distinct letra, sala.cvesala, nombre, sala.horario, fechainicio, fechafinal from lectura
          inner join abecedario on lectura.cveletra = abecedario.cve
          inner join periodo on lectura.cveperiodo = periodo.cveperiodo
          inner join sala on sala.cvesala = lectura.cvesala
      where cvepromotor='" . $_SESSION['cveUser'] . "' and periodo.cveperiodo=" . $cveperiodo;

$tablegrupos = $web->DB->GetAll($sql);
if (isset($tablegrupos[0])) {
    $web->smarty->assign('tablegrupos', $tablegrupos);
} else {
    $web->smarty->assign('tablegrupos', "No hay grupos registrados");
}

$web->smarty->display('vergrupos.html');
