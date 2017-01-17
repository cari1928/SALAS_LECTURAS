<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

$accion="";
if( isset($_GET['accion'])){
    $accion=$_GET['accion'];
}

switch($accion){
    case 'alumnos':
    break;
    case 'promotor':
    break;
}

$web->iniClases('admin', "index historial");
$web->smarty->display('historial.html');
// if (isset($_GET['info1'])) {
//     $elimina = $_GET['info1'];
//     $sql     = "delete from periodo where cveperiodo='" . $elimina . "'";
//     $web->query($sql);
// }

// $sql      = "select cveperiodo,fechainicio,fechafinal from periodo";
// $periodos = $web->DB->GetAll($sql);
// if (isset($periodos[0])) {
//     $web->smarty->assign('periodos', $periodos);
//     $web->smarty->assign('bandera', true);
// } else {
//     $web->smarty->assign('msj', "No hay periodos registrados");
// }

// $web->smarty->display("periodos.html");

/**
 * Método para mostrar el template form_alumnos cuando ocurre algún error
 * @param  String $iniClases Ruta a mostrar en links
 * @param  String $msg       Mensaje a desplegar
 * @param  $web              Para poder aplicar las funciones de $web
 * @param  String $cveusuario   Usado en caso de que se trate de un formulario de actualización
 */
function message($iniClases, $msg, $web)
{
  $web->iniClases('admin', $iniClases);

  $web->smarty->assign('alert', 'danger');
  $web->smarty->assign('msg', $msg);

  $web->smarty->display('historial.html');
  die();
}