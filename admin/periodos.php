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
            $sql      = "select * from periodo where cveperiodo=?";
            $periodos = $web->DB->GetAll($sql, array($_GET['info2']));

            $web->iniClases('admin', "index periodos actualizar");
            $web->smarty->assign('periodos', $periodos[0]);
            $web->smarty->display('form_periodos.html');
            die();
            break;

        case 'insert':
            $sql = "INSERT INTO periodo (fechainicio, fechafinal) values(?, ?)";
            $web->query($sql, array(
                $_POST['datos']['fechaInicio'],
                $_POST['datos']['fechaFinal']));
            header('Location: periodos.php');
            break;

        case 'update':
            $sql = "update periodo set fechainicio=?, fechafinal=? where cveperiodo=?";
            $web->query($sql, array(
                $_POST['datos']['fechaInicio'],
                $_POST['datos']['fechaFinal'],
                $_POST['cveperiodo']));
            header('Location: periodos.php');
            break;

        case 'eliminar':
            if (!isset($_GET['info1'])) {
                header('Location: ../index.php');
            }

            $sql = "delete from periodo where cveperiodo=?";
            if (!$web->query($sql, $_GET['info1'])) {
                //hubo error en el delete
                header('Location: periodos.php?msg=1');
                die();
            }
            header('Location: periodos.php');
            break;
    }
}

if (isset($_GET['msg'])) {

    if ($_GET['msg'] == 1) {
        $msg = "Existe información relacionada con el elemento seleccionado, por lo que no es posible eliminar dicho periodo";
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', $msg);
    }
}

$web->iniClases('admin', "index periodos");

$sql      = 'select cveperiodo, fechainicio, fechafinal from periodo order by cveperiodo';
$periodos = $web->DB->GetAll($sql);

if (isset($periodos[0])) {
    $web->smarty->assign('periodos', $periodos);
} else {
    $web->smarty->assign('alert', 'warning');
    $web->smarty->assign('msg', "No hay periodos registrados");
}
$web->smarty->display("periodos.html");
