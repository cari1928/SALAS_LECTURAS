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
            if (!isset($_GET['info2'])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No se está recibiendo la información necesaria para continuar con la operación');
                break;
            }

            $sql   = "select * from sala where cvesala=?";
            $salas = $web->DB->GetAll($sql, $_GET['info2']);
            if (sizeof($salas) == 0) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No existe la sala');
                break;
            }

            $web->iniClases('admin', "index salas actualizar");
            $web->smarty->assign('salas', $salas[0]);
            $web->smarty->display('form_salas.html');
            die();
            break;

        case 'insert':
            //verifica la existencia de los campos
            if (!isset($_POST['datos']['cvesala']) ||
                !isset($_POST['datos']['ubicacion'])) {
                message("index periodos nuevo", "No alteres la estructura de la interfaz", $web);
            }

            //verifica que los campos contengan algo
            if ($_POST['datos']['cvesala'] == "" ||
                $_POST['datos']['ubicacion'] == "") {
                message("index periodos nuevo", "Llena todos los campos", $web);
            }

            $cveperiodo = $web->periodo();
            $sql        = "INSERT INTO sala (cvesala, ubicacion, cveperiodo) values(?, ?, ?)";
            $tmp        = array(
                $_POST['datos']['cvesala'],
                $_POST['datos']['ubicacion'],
                $cveperiodo);

            if (!$web->query($sql, $tmp)) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No se pudo completar la operación');
                break;
            }

            header('Location: salas.php');
            break;

        case 'update':
            //verifica la existencia de los campos
            if (!isset($_POST['datos']['cvesala']) ||
                !isset($_POST['datos']['ubicacion'])) {
                message("index periodos nuevo", "No alteres la estructura de la interfaz", $web, $_GET['accion']);
            }

            //verifica que los campos contengan algo
            if ($_POST['datos']['cvesala'] == "" ||
                $_POST['datos']['ubicacion'] == "") {
                message("index periodos nuevo", "Llena todos los campos", $web, $_GET['accion']);
            }

            $sql        = "update sala set ubicacion=? where cvesala=?";
            $parameters = array(
                $_POST['datos']['ubicacion'],
                $_POST['cvesala']);

            if (!$web->query($sql, $parameters)) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No se pudo completar la operación');
                break;
            }

            header('Location: salas.php');
            break;

        case 'delete':
            if (!isset($_GET['info1'])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No altere la estructura de la interfaz, no se especificó la sala');
                break;
            }

            $sql  = "select * from sala where cvesala=?";
            $sala = $web->DB->GetAll($sql, $_GET['info1']);
            if (sizeof($sala) == 0) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No existe la sala');
                break;
            }

            $sql = "delete from sala where cvesala=?";
            if (!$web->query($sql, $_GET['info1'])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', 'No se pudo completar la operación');
                break;
            }

            header('Location: salas.php');
            break;
    }
}

$web->iniClases('admin', "index salas");

$sql     = 'select cvesala, ubicacion from sala order by cvesala';
$salones = $web->DB->GetAll($sql);

if (!isset($salones[0])) {
    $web->smarty->assign('alert', 'warning');
    $web->smarty->assign('msg', " No hay salones registrados");
} else {
    $web->smarty->assign('salones', $salones);
}

// echo "<pre>";
// $obj .= "{\"data\": [[\"<a href='#'>Tiger Nixon</a>\", \"System Architect\", \"Edinburgh\", \"5421\", \"2011/04/25\", \"$320,800\", \"<input type='submit'>\"] ] }";
// echo $obj;
// echo "</pre>";

// $file = fopen("arrays.txt", "w");
// fwrite($file, $obj);

// $web->smarty->assign('obj', $obj);

$web->smarty->display("salas.html");

/**
 * Método para mostrar el template form_alumnos cuando ocurre algún error
 * @param  String $iniClases    Ruta a mostrar en links
 * @param  String $msg          Mensaje a desplegar
 * @param  $web                 Para poder aplicar las funciones de $web
 * @param  String $cveperiodo   Usado en caso de que se trate de un formulario de actualización
 */
function message($iniClases, $msg, $web, $cvesala = null)
{
    $web->iniClases('admin', $iniClases);

    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', $msg);

    if ($cveperiodo != null) {
        $sql   = "select * from sala where cvesala=?";
        $salas = $web->DB->GetAll($sql, $cvesala);

        $web->smarty->assign('salas', $salas[0]);
    }

    $web->smarty->display('form_salas.html');
    die();
}
