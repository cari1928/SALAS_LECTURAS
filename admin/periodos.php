<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

if (isset($_GET['accion'])) {

    switch ($_GET['accion']) {

        case 'form_insert':
            $web->iniClases('admin', "index periodos nuevo");
            $web->smarty->display('form_periodos.html');
            die();
            break;

        case 'form_update':
            $sql      = "select * from periodo where cveperiodo=" . $_GET['info2'];
            $periodos = $web->DB->GetAll($sql);

            $web->iniClases('admin', "index periodos actualizar");
            $web->smarty->assign('periodos', $periodos[0]);
            $web->smarty->display('form_periodos.html');
            die();
            break;

        case 'insert':
            $sql = "insert into periodo (fechainicio, fechafinal) values (
            '" . $_POST['datos']['fechaInicio'] . "',
            '" . $_POST['datos']['fechaFinal'] . "')";
            $web->query($sql);
            header('Location: periodos.php');
            break;

        case 'update':
            $sql = "update periodo set fechainicio='" . $_POST['datos']['fechaInicio'] . "', fechafinal='" . $_POST['datos']['fechaFinal'] . "' where cveperiodo=" . $_POST['cveperiodo'];
            $web->query($sql);
            header('Location: periodos.php');
            break;

        case 'eliminar':
            if (!isset($_GET['info1'])) {
                header('Location: ../index.php');
            }

            $elimina = $_GET['info1'];
            $sql     = "delete from periodo where cveperiodo='" . $elimina . "'";
            $web->query($sql);
            header('Location: periodos.php');
            break;
    }
}

$web->iniClases('admin', "index periodos");

$sql      = 'select cveperiodo, fechainicio, fechafinal from periodo';
$periodos = $web->DB->GetAll($sql);

if (isset($periodos[0])) {
    $web->smarty->assign('periodos', $periodos);
} else {
    $web->smarty->assign('msj', "No hay periodos registrados");
}

$web->smarty->display("periodos.html");
