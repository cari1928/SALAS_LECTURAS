<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

$web->iniClases('admin', "index salas nuevo");

if (!isset($_POST['datos'])) {
    $web->smarty->assign("msjlimite", "");
    $web->smarty->display('addsalas.html');

} else {
    $limite = $_POST['datos']['limite'];

    if ($limite <= 40) {
        $horario = $_POST['datos']['horainicial'] . "-" . $_POST['datos']['horafinal'];
        $sql     = "insert into sala (nombre, cvesala, horario, ubicacion, limite) values ('" . $_POST['datos']['nombre'] . "',
        			'" . $_POST['datos']['cvesala'] . "',
        			'" . $horario . "',
        			'" . $_POST['datos']['ubicacion'] . "',
        			" . $_POST['datos']['limite'] . ")";
        $web->query($sql);

        for ($i = 1; $i < 7; $i++) {
            if (isset($_POST["dia" . $i])) {
                $sql = "insert into laboral (cvesala, horario, cvedia) values ('" . $_POST['datos']['cvesala'] . "','" . $horario . "'," . $_POST["dia" . $i] . ")";
                $web->query($sql);
            }
        }
        header('Location: salas.php');

    } else {
        $web->smarty->assign("msjlimite", '<label style= "color:red">Supera el limite</label>');
        $web->smarty->display('addsalas.html');
    }
}
