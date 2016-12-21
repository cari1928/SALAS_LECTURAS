<?php

include "../sistema.php";

if ($_SESSION['roles'] != 'P') {
    $web->checklogin();
}

$web->iniClases('promotor', "index vergrupos grupo");
$grupos = $web->grupos($_SESSION['cveUser']);
$web->smarty->assign('grupos', $grupos);

if (isset($_GET['info1']) && isset($_GET['info2']) && isset($_GET['info3'])) {

    if ($web->periodo() == "") {
        $web->smarty->assign('cveperiodo', "El grupo y/o periodo no existe");
        $web->smarty->display("grupo.html");
        die();
    }

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

    $web->smarty->assign('info', $datos_rs[0]);

    $grupo = $_GET['info1'];
    $sql   = "
    select distinct nombre , comprension, motivacion, reporte, tema, participacion, terminado, nocontrol, cveeval, cveperiodo from evaluacion
            inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol
            where cveletra in
                (select cve from abecedario
                    where letra= '" . $grupo . "')
            and cvepromotor='" . $_SESSION['cveUser'] . "'
            and cveperiodo=" . $web->periodo() . "
            order by nombre,comprension,motivacion,reporte, tema,participacion,terminado";
    $datos = $web->DB->GetAll($sql);

    // echo "<pre>";
    // echo $sql;
    // print_r($datos);

    $web->smarty->assign('datos', $datos);
    $web->smarty->assign('grupo', $grupo);
    $web->smarty->display("grupo.html");

} else {
    if (isset($_POST['datos'])) {

        $sql = "
        select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura
        inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario
        inner join periodo on periodo.cveperiodo = lectura.cveperiodo
        where cveletra in
            (select cve from abecedario
                where letra ='" . $_GET['info1'] . "')
        and cvepromotor='" . $_SESSION['cveUser'] . "'
        and periodo.cveperiodo=" . periodo($web);
        $datos_rs = $web->DB->GetAll($sql);
        $web->smarty->assign('info', $datos_rs[0]);

        $sql = "update evaluacion set
            comprension='" . $_POST['datos']['Comprensión'] . "',
            motivacion='" . $_POST['datos']['Motivación'] . "',
            reporte='" . $_POST['datos']['Reporte'] . "',
            tema='" . $_POST['datos']['Tema'] . "',
            participacion='" . $_POST['datos']['Participación'] . "',
            terminado='" . $_POST['datos']['Terminado'] . "'
        where cveeval='" . $_POST['datos']['cveeval'] . "'";
        $web->query($sql);

        // $tabla = $web->evaluacion(array(
        //     'grupo'   => $_POST['datos']['grupo'],
        //     'cvesala' => $_POST['datos']['cvesala'],
        //     'horario' => $_POST['datos']['horario'],
        // ));

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

        $web->smarty->assign('info', $datos_rs[0]);

        $grupo = $_GET['info1'];
        $sql   = "
    select distinct nombre , comprension, motivacion, reporte, tema, participacion, terminado, nocontrol, cveeval, cveperiodo from evaluacion
            inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol
            where cveletra in
                (select cve from abecedario
                    where letra= '" . $grupo . "')
            and cvepromotor='" . $_SESSION['cveUser'] . "'
            and cveperiodo=" . periodo($web) . "
            order by nombre,comprension,motivacion,reporte, tema,participacion,terminado";
        $datos = $web->DB->GetAll($sql);

        $web->smarty->assign('datos', $datos);
        $web->smarty->assign('grupo', $grupo);
        $web->smarty->display("grupo.html");

        // header('Location: grupo.php?info1=' . $_POST['datos']['grupo'] . '&info2=' . $_POST['datos']['cvesala'] . '&info3=' . $_POST['datos']['horario']);

    } else {
        $web->smarty->assign('info', "");
        $tabla = "No hay informacion sobre algun grupo";
        $web->smarty->display("grupo.html");
    }
}
