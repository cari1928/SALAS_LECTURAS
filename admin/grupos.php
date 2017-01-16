<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

$web->iniClases('admin', "index promotor grupos");

if (isset($_GET['info1'])) {
    $cveperiodo = periodo($web);

    $sql = "select distinct letra AS \"Grupo\", cvesala AS \"Sala\", horario AS \"Horario\" from lectura
      inner join abecedario on lectura.cveletra = abecedario.cve
      inner join periodo on lectura.cveperiodo = periodo.cveperiodo
      where cvepromotor=?
      order by letra";
    $datos = $web->DB->GetAll($sql, $_GET['info1']);

    if (sizeof($datos) > 0) {
        $tabla = $web->showTable($sql, "grupo", 5, 1, 'grupos',
            '&info2=' . $_GET['info1'] .
            '&info3=' . $datos[0]['Sala'] .
            '&info4=' . $datos[0]['Horario']);
    } else {
        $tabla = '<div class="alert alert-danger" role="alert">No se encuentran elementos</div>';
    }

    $web->smarty->assign('tabla', $tabla);
    $web->smarty->display('grupos.html');

} else {
    $web->smarty->assign('tabla', "<label style='color:red'>Hacen falta datos</label>");
    $web->smarty->display('grupos.html');
}
