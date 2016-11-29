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
        where cvepromotor='" . $_GET['info1'] . "'
        order by letra";

    $datos = $web->DB->GetAll($sql);

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

/**
 * [periodo description]
 * @param  [type] $web [description]
 * @return [type]      [description]
 */
function periodo($web)
{
    $cveperiodo = "No hay periodo actual";
    $sql        = "select * from periodo";
    $datos_rs   = $web->DB->GetAll($sql);

    $date     = getdate();
    $fechaAct = $date['year'] . "-" . $date['mon'] . "-" . $date['mday'];
    $date1    = new DateTime($fechaAct);

    $cont = 0;
    while ($cont < count($datos_rs)) {
        $date2 = new DateTime($datos_rs[$cont]['fechainicio']);
        $date3 = new DateTime($datos_rs[$cont]['fechafinal']);

        if ($date1 >= $date2 && $date1 < $date3) {
            $cveperiodo = $datos_rs[$cont]['cveperiodo'];
        }
        $cont++;
    }

    $web->smarty->assign('periodo', "");
    $sql   = "select fechainicio,fechafinal from periodo where cveperiodo='" . $cveperiodo . "'";
    $datos = $web->DB->GetAll($sql);

    if (isset($datos[0])) {
        $periodo = "El periodo es: " . $datos[0]['fechainicio'] . " a " . $datos[0]['fechafinal'];
        $web->smarty->assign('periodo', $periodo);
    }
    return $cveperiodo;
}
