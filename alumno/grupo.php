<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'U') {
    $web->checklogin();
}

$web->iniClases('usuario', "index vergrupos grupo");
$grupos = $web->grupos($_SESSION['cveUser']);
$web->smarty->assign('grupos', $grupos);

if (isset($_GET['info2'])) {
    $sql = "
    select distinct sala.cvesala,ubicacion,sala.horario, periodo.cveperiodo,
    fechainicio,fechafinal, nombre, lectura.cvepromotor from lectura
        inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario
        inner join periodo on periodo.cveperiodo = lectura.cveperiodo
                inner join usuarios on usuarios.cveusuario = lectura.cvepromotor
      where cvepromotor in
                (select cveusuario from usuarios
                    where nombre ='" . $_GET['info2'] . "') and
            nocontrol='" . $_SESSION['cveUser'] . "'and
            cveletra in
                (select cve from abecedario
                    where letra='" . $_GET['info1'] . "')";
    $datos_rs = $web->DB->GetAll($sql);

    $info = "Promotor: " . $datos_rs[0]['nombre'] . "<br>";
    $info .= "Sala: " . $datos_rs[0]['cvesala'] . "<br>";
    $info .= "Ubicacion: " . $datos_rs[0]['ubicacion'] . "<br>";
    $info .= "Horario: " . $datos_rs[0]['horario'] . "<br>";
    $info .= "Periodo: " . $datos_rs[0]['fechainicio'] . " : " . $datos_rs[0]['fechafinal'];

    $tabla = $web->evaluacion(array(
        'grupo'   => $_GET['info1'],
        'cvesala' => $datos_rs[0]['cvesala'],
        'horario' => $datos_rs[0]['horario'],
    ), null, array(
        'promoaux'  => $datos_rs[0]['cvepromotor'],
        'periodaux' => $datos_rs[0]['cveperiodo'],
    ));

    $web->smarty->assign('info', $info);
    $web->smarty->assign('tabla', $tabla);
    $web->smarty->display("grupo.html");

} else {

    if (isset($_POST['datos'])) {
        $sql = "update evaluacion set comprension='" . $_POST['datos']['comprension'] . "',motivacion='" . $_POST['datos']['motivacion'] . "',reporte='" . $_POST['datos']['reporte'] . "',tema='" . $_POST['datos']['tema'] . "',participacion='" . $_POST['datos']['participacion'] . "',terminado='" . $_POST['datos']['terminado'] . "' where cveeval='" . $_POST['datos']['cveeval'] . "'";
        $web->query($sql);

        header('Location: grupo.php?info1=' . $_POST['datos']['grupo']);

    } else {
        $web->smarty->assign('info', "");
        $tabla = "No hay informacion sobre algun grupo";
        $web->smarty->assign('tabla', $tabla);
        $web->smarty->display("grupo.html");
    }
}
