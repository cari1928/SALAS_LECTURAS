<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

$web->iniClases('admin', "index salas");

if (isset($_GET['info1'])) {
    $elimina = $_GET['info1'];
    $sql     = "delete from evaluacion where cvesala='" . $elimina . "' and horario='" . $_GET['info3'] . "'";
    $web->query($sql);
    $sql = "delete from lectura where cvesala='" . $elimina . "' and horario='" . $_GET['info3'] . "'";
    $web->query($sql);
    $sql = "delete from grupo where cvesala='" . $elimina . "' and horario='" . $_GET['info3'] . "'";
    $web->query($sql);
    $sql = "delete from laboral where cvesala='" . $elimina . "'and horario='" . $_GET['info3'] . "'";
    $web->query($sql);
    $sql = "delete from sala where cvesala='" . $elimina . "'and horario='" . $_GET['info3'] . "'";
    $web->query($sql);
}

//Es para mostrar los nombres de los dias en las salas
$sql     = 'select cvesala, nombre, horario, ubicacion, limite from sala';
$salones = $web->DB->GetAll($sql);

if (isset($salones[0])) {
    for ($i = 0; $i < sizeof($salones); $i++) {

        $sql  = "select nombre from dia where cvedia in (select cvedia from laboral where cvesala='" . $salones[$i]['cvesala'] . "' and horario='" . $salones[$i]['horario'] . "')";
        $dias = $web->DB->GetAll($sql);

        if (isset($dias[0])) {

            $diaslaboral = "";
            for ($j = 0; $j < sizeof($dias); $j++) {

                if ($j != ((sizeof($dias) - 1))) {
                    $diaslaboral .= $dias[$j]['nombre'] . ", ";
                } else {
                    $diaslaboral .= $dias[$j]['nombre'];
                }
            }
            $salones[$i]['laboral'] = $diaslaboral;
        }
    }
    $web->smarty->assign('salones', $salones);

} else {
    $web->smarty->assign('msj', "No hay salones registrados");
}

$web->smarty->display("salas.html");
