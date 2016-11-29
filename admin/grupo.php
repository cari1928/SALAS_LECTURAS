<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

$web->iniClases('admin', "index promotor grupo");

if (isset($_POST['datos'])) {
    header('Location: grupoHistorial.php?info=' . $_POST['datos']['promotor'] . '&info1=' . $_POST['datos']['grupo'] . '&info2=' . $_POST['datos']['periodo']);
    die();
}

if (isset($_GET['info'])) {
    $sql = "select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura  inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario inner join periodo on periodo.cveperiodo = lectura.cveperiodo where cveletra in (select cve from abecedario where letra ='" . $_GET['info1'] . "') and cvepromotor='" . $_GET['info'] . "'";

} else if (isset($_GET['info1']) && isset($_GET['info2'])) {
    $sql = "select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura  inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario inner join periodo on periodo.cveperiodo = lectura.cveperiodo where cveletra in (select cve from abecedario where letra ='" . $_GET['info1'] . "') and cvepromotor='" . $_GET['info2'] . "'";

} else if (!isset($_GET['info'])) {
    $web->smarty->assign('info', "");
    $tabla = "No hay informacion sobre algun grupo";
    $web->smarty->assign('tabla', $tabla);
    $web->smarty->display("grupo.html");
    die();
}

$datos_rs = $web->DB->GetAll($sql);

$info = "Sala: " . $datos_rs[0]['cvesala'] . "<br>";
$info .= "Ubicacion: " . $datos_rs[0]['ubicacion'] . "<br>";
$info .= "Horario: " . $datos_rs[0]['horario'] . "<br>";
$info .= "Periodo: " . $datos_rs[0]['fechainicio'] . " : " . $datos_rs[0]['fechafinal'];

if (isset($_GET['info'])) {
    $tabla = $web->evaluacion(array(
        'grupo'   => $_GET['info1'],
        'cvesala' => "",
        'horario' => "",
    ), "none", array(
        'promoaux'  => $_GET['info'],
        'periodaux' => $_GET['info2'],
    ));

} else {
    //info1
    $tabla = $web->evaluacion(array(
        'grupo'   => $_GET['info1'],
        'cvesala' => $_GET['info3'],
        'horario' => $_GET['info4'],
    ), "none", array(
        'promoaux'  => $_GET['info2'],
        'periodaux' => null,
    ));
}

$web->smarty->assign('info', $info);
$web->smarty->assign('tabla', $tabla);
$web->smarty->display("grupo.html");
