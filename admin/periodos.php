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
            if (!isset($_GET['info2'])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No se está recibiendo la información necesaria para continuar con la operación');
                break;
            }

            $sql      = "select * from periodo where cveperiodo=?";
            $periodos = $web->DB->GetAll($sql, $_GET['info2']);
            if (sizeof($periodos) == 0) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No existe el periodo');
                break;
            }

            $web->iniClases('admin', "index periodos actualizar");
            $web->smarty->assign('periodos', $periodos[0]);
            $web->smarty->display('form_periodos.html');
            die();
            break;

        case 'insert':
            //verifica la existencia de los campos
            if (!isset($_POST['datos']['fechaInicio']) ||
                !isset($_POST['datos']['fechaFinal'])) {
                message("index periodos nuevo", "No alteres la estructura de la interfaz", $web);
            }

            //verifica que los campos contengan algo
            if ($_POST['datos']['fechaInicio'] == "" ||
                $_POST['datos']['fechaFinal'] == "") {
                message("index periodos nuevo", "Llena todos los campos", $web);
            }

            $sql = "INSERT INTO periodo (fechainicio, fechafinal) values(?, ?)";
            $tmp = array($_POST['datos']['fechaInicio'], $_POST['datos']['fechaFinal']);
            if (!$web->query($sql, $tmp)) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No se pudo completar la operación');
                break;
            }

            header('Location: periodos.php');
            break;

        case 'update':
            //verifica la existencia de los campos
            if (!isset($_POST['datos']['fechaInicio']) ||
                !isset($_POST['datos']['fechaFinal'])) {
                message("index periodos actualizar", "No alteres la estructura de la interfaz", $web, $_GET['accion']);
            }

            //verifica que los campos contengan algo
            if ($_POST['datos']['fechaInicio'] == "" ||
                $_POST['datos']['fechaFinal'] == "") {
                message("index periodos actualizar", "Llena todos los campos", $web, $_GET['accion']);
            }

            $sql = "update periodo set fechainicio=?, fechafinal=? where cveperiodo=?";
            $tmp = array(
                $_POST['datos']['fechaInicio'],
                $_POST['datos']['fechaFinal'],
                $_POST['cveperiodo']);

            if (!$web->query($sql, $tmp)) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No se pudo completar la operación');
                break;
            }

            header('Location: periodos.php');
            break;

        case 'eliminar':
            if (!isset($_GET['info1'])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No altere la estructura de la interfaz, no se especificó el periodo');
                break;
            }

            $sql     = "select * from periodo where cveperiodo=?";
            $periodo = $web->DB->GetAll($sql, $_GET['info1']);
            if (sizeof($periodo) == 0) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No existe el periodo');
                break;
            }

            $sql = "delete from periodo where cveperiodo=?";
            if (!$web->query($sql, $_GET['info1'])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No se pudo completar la operación');
                break;
            }

            header('Location: periodos.php');
            break;
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

/**
 * Método para mostrar el template form_alumnos cuando ocurre algún error
 * @param  String $iniClases    Ruta a mostrar en links
 * @param  String $msg          Mensaje a desplegar
 * @param  $web                 Para poder aplicar las funciones de $web
 * @param  String $cveperiodo   Usado en caso de que se trate de un formulario de actualización
 */
function message($iniClases, $msg, $web, $cveperiodo = null)
{
    $web->iniClases('admin', $iniClases);

    $sql   = "select cveespecialidad, nombre from especialidad";
    $combo = $web->combo($sql, null, '../');

    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', $msg);
    $web->smarty->assign('cmb_especialidad', $combo);

    if ($cveperiodo != null) {
        $sql     = "select * from periodo where cveperiodo=?";
        $periodo = $web->DB->GetAll($sql, $cveperiodo);

        $web->smarty->assign('periodo', $periodo[0]);
    }

    $web->smarty->display('form_periodos.html');
    die();
}
