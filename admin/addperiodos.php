<?php
include '../sistema.php';

if ($_SESSION['roles'] == 'A') {
    $web->iniClases('admin', "index periodos nuevo");

    if (isset($_POST['datos'])) {
        $fechaInicio = $_POST['datos']['fechaInicio'];
        $fechaFinal  = $_POST['datos']['fechaFinal'];
        if ($fechaInicio != $fechaFinal) {
            $sql = "insert into periodo values ('$fechaInicio','$fechaFinal')";
            $web->query($sql);
            header('Location: periodos.php');
        } else {
            $web->smarty->assign("msjfecha", "<label style='color:red'>Las fechas de inicio y fin son las mismas</label>");
            $web->smarty->display('addperiodos.html');
        }

    } else {
        if (isset($_GET['tabla'])) {
            $web->smarty->assign("msjfecha", "");
            $web->smarty->display('addperiodos.html');
        } else {
            header('Location: periodos.php');
        }

    }
} else {
    $web->checklogin();
}
