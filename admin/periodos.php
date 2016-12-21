<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

$web->iniClases('admin', "index periodos");

if (isset($_GET['info1'])) {
    $elimina = $_GET['info1'];
    $sql     = "delete from periodo where cveperiodo='" . $elimina . "'";
    $web->query($sql);
}

$sql      = 'select cveperiodo, fechainicio, fechafinal from periodo';
$periodos = $web->DB->GetAll($sql);

if (isset($periodos[0])) {
    $web->smarty->assign('periodos', $periodos);
} else {
    $web->smarty->assign('msj', "No hay periodos registrados");
}

$web->smarty->display("periodos.html");
