<?php

include "../sistema.php";

if ($_SESSION['roles'] != 'P') {
    $web->checklogin();
}

$web->iniClases('promotor', "index vergrupos grupo");
$grupos = $web->grupos($_SESSION['cveUser']);
$web->smarty->assign('grupos', $grupos);

if (isset($_GET['info1']) && isset($_GET['info2']) && isset($_GET['info3'])) {
    $web->smarty->assign('bandera', 'true');
    $sql = "
    select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal, periodo.cveperiodo from lectura
            inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario
            inner join periodo on periodo.cveperiodo = lectura.cveperiodo
        where cveletra in
            (select cve from abecedario
                where letra='" . $_GET['info1'] . "') and
            sala.cvesala='" . $_GET['info2'] . "' and
            sala.horario='" . $_GET['info3'] . "' and
            cvepromotor='" . $_SESSION['cveUser'] . "'";
    $datos_rs = $web->DB->GetAll($sql);

    $info = "Sala:" . $datos_rs[0]['cvesala'] . "<br>";
    $info .= "Ubicacion:" . $datos_rs[0]['ubicacion'] . "<br>";
    $info .= "Horario:" . $datos_rs[0]['horario'] . "<br>";
    $info .= "Periodo:" . $datos_rs[0]['fechainicio'] . ":" . $datos_rs[0]['fechafinal'];
    $web->smarty->assign('info', $info);

    $tabla = $web->evaluacion(array(
        'grupo'   => $_GET['info1'],
        'cvesala' => $_GET['info2'],
        'horario' => $_GET['info3'],
    ), "none", array(
        'promoaux'  => $_SESSION['cveUser'],
        'periodaux' => $datos_rs[0]['cveperiodo'],
    ));

    $web->smarty->assign('para', $_GET['info1']);
    $web->smarty->assign('cveperiodo', periodo($web));
    $web->smarty->assign('tabla', $tabla);
    $web->smarty->display("grupo.html");

} else {
    if (isset($_POST['datos'])) {
        $sql = "update evaluacion set
            comprension='" . $_POST['datos']['Comprensión'] . "',
            motivacion='" . $_POST['datos']['Motivación'] . "',
            reporte='" . $_POST['datos']['Reporte'] . "',
            tema='" . $_POST['datos']['Tema'] . "',
            participacion='" . $_POST['datos']['Participación'] . "',
            terminado='" . $_POST['datos']['Terminado'] . "'
        where cveeval='" . $_POST['datos']['cveeval'] . "'";

        $web->query($sql);
        $tabla = $web->evaluacion(array(
            'grupo'   => $_POST['datos']['grupo'],
            'cvesala' => $_POST['datos']['cvesala'],
            'horario' => $_POST['datos']['horario'],
        ));

        header('Location: grupo.php?info1=' . $_POST['datos']['grupo'] . '&info2=' . $_POST['datos']['cvesala'] . '&info3=' . $_POST['datos']['horario']);

    } else {
        $web->smarty->assign('info', "");
        $tabla = "No hay informacion sobre algun grupo";
        $web->smarty->display("grupo.html");
    }
}

/**
 * [periodo description]
 * @param  [type] $web [description]
 * @return [type]      [description]
 */
function periodo($web)
{
    $sql      = "select * from periodo";
    $datos_rs = $web->DB->GetAll($sql);

    $date     = getdate();
    $fechaAct = $date['year'] . "-" . $date['mon'] . "-" . $date['mday'];
    $date1    = new DateTime($fechaAct);

    $cont = 0;
    while ($cont < count($datos_rs)) {
        $date2 = new DateTime($datos_rs[$cont]['fechainicio']);
        $date3 = new DateTime($datos_rs[$cont]['fechafinal']);

        if ($date1 >= $date2 && $date1 <= $date3) {
            $cveperiodo = $datos_rs[$cont]['cveperiodo'];
        }
        $cont++;
    }

    if (isset($cveperiodo)) {
        $sql     = "select fechainicio,fechafinal from periodo where cveperiodo='" . $cveperiodo . "'";
        $datos   = $web->DB->GetAll($sql);
        $periodo = "El periodo es: " . $datos[0]['fechainicio'] . " a " . $datos[0]['fechafinal'];

        $web->smarty->assign('periodo', $periodo);
        return $cveperiodo;

    } else {
        $web->smarty->assign('periodo', "No hay periodos actuales");
        return "";
    }
}
