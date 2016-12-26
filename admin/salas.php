<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

if (isset($_GET['accion'])) {

    switch ($_GET['accion']) {

        case 'form_insert':
            $web->iniClases('admin', "index salas nuevo");
            $web->smarty->display('form_salas.html');
            die();
            break;

        case 'form_update':
            $sql   = "SELECT * FROM sala WHERE cvesala=?";
            $salas = $web->DB->GetAll($sql, array($_GET['info2']));

            $web->iniClases('admin', "index salas actualizar");

            $web->smarty->assign('salas', $salas[0]);
            $web->smarty->display('form_salas.html');
            die();
            break;

        case 'insert':
            $sql        = "INSERT INTO sala (cvesala, nombre, ubicacion) values(?, ?, ?)";
            $parameters = array(
                $_POST['datos']['cvesala'],
                $_POST['datos']['nombre'],
                $_POST['datos']['ubicacion']);

            if (!$web->query($sql, $parameters)) {
                header('Location: salas.php?msg=1');
                die();
            }
            header('Location: salas.php');
            break;

        case 'update':
            $sql        = "update sala set nombre=?, ubicacion=? where cvesala=?";
            $parameters = array(
                $_POST['datos']['nombre'],
                $_POST['datos']['ubicacion'],
                $_POST['cvesala']);

            if (!$web->query($sql, $parameters)) {
                header('Location: salas.php?msg=2');
                die();
            }
            header('Location: salas.php');
            break;

        case 'delete':
            if (isset($_GET['info1'])) {
                $sql        = "delete from sala where cvesala=?";
                $parameters = array($_GET['info1']);

                if (!$web->query($sql, $parameters)) {
                    header('Location: salas.php?msg=3');
                    die();
                }
            }
            break;
    }
}

if (isset($_GET['msg'])) {
    $web->smarty->assign('alert', 'danger');

    switch ($_GET['msg']) {

        case 1:
            $web->smarty->assign('msg', "No es posible agregar la sala, verificar si ya existe");
            break;

        case 2:
            $web->smarty->assign('msg', "No es posible modificar la sala");
            break;

        case 3:
            $web->smarty->assign('msg', "No es posible eliminar la sala, está relacionada con algún grupo");
            break;
    }
}

$web->iniClases('admin', "index salas");

$sql     = 'select cvesala, nombre, ubicacion from sala order by cvesala';
$salones = $web->DB->GetAll($sql);

if (!isset($salones[0])) {
    $web->smarty->assign('alert', 'warning');
    $web->smarty->assign('msg', "No hay salones registrados");
} else {
    $web->smarty->assign('salones', $salones);
}

$web->smarty->display("salas.html");
