<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

if (isset($_GET['accion'])) {
    
  switch ($_GET['accion']) {
    
    case "ver":
      //codigo para ver mensaje en especifico
      break;
    
    case "eliminar":
      if (!isset($_GET['info1'])) {
        $web->simple_message('danger', 'Falta informacion, por favor no altere la estructura de la interfaz');
        break;
      }
      if ($_GET['info1'] == "") {
        $web->simple_message('danger', 'Falta informacion, por favor no altere la estructura de la interfaz');
        break;
      }
      $sql       = "select * from msj where cvemsj = ?";
      $datos_msj = $web->DB->GetAll($sql, $_GET['info1']);

      if (!isset($datos_msj[0])) {
        $web->simple_message('danger', 'No existe el aviso seleccionado');
        break;
      }

      if (!$web->query('delete from msj where cvemsj = ?', $_GET['info1'])) {
        $web->simple_message('danger', 'No se pudo eliminar el aviso');
      }
      break;

    case "actualizar_form":
      //Codigo para desplegar formulario actualizar un mensaje
      break;

    case "insertar_form":
      $web->iniClases('admin', 'index avisos nuevo-aviso');
      $web->smarty->display('form_avisos.html');
      die();
      break;

    case "actualizar":
      if (!isset($_POST['introduccion']) || !isset($_POST['descripcion']) || !isset($_POST['expira']) || !isset($_POST['cvemsj'])) {
        $web->simple_message('danger', 'Falta informacion, por favor no altere la estructura de la interfaz');
        $web->iniClases('admin', 'index avisos nuevo-aviso');
        $web->smarty->display('avisos.html');
        die();
      }
      if ($_POST['introduccion'] == "" || $_POST['descripcion'] == "" || $_POST['expira'] == "" || $_POST['cvemsj'] == "") {
        $web->simple_message('danger', 'Falta informacion, por favor no altere la estructura de la interfaz');
        $web->iniClases('admin', 'index avisos nuevo-aviso');
        $web->smarty->display('avisos.html');
        die();
      }
      $sql        = "update msj set introduccion = ?, descripcion = ?, expira = ? where cvemsj = ?";
      $parameters = array($_POST['introduccion'], $_POST['descripcion'], $_POST['expira'], $_POST['cvemsj']);
      if (!$web->query($sql, $parameters)) {
        $web->simple_message('danger', 'Ocurrio un error al actualizar el aviso');
        $web->iniClases('admin', 'index avisos nuevo-aviso');
        $web->smarty->display('avisos.html');
        die();
      } else {
        $web->simple_message('warning', 'Se actualizo el aviso correctamente');
      }
      break;

    case "insertar":
      if (!isset($_POST['introduccion']) || !isset($_POST['descripcion']) || !isset($_POST['expira'])) {
        $web->simple_message('danger', 'Falta informacion, por favor no altere la estructura de la interfaz');
        $web->iniClases('admin', 'index avisos nuevo-aviso');
        $web->smarty->display('form_avisos.html');
        die();
      }
      if ($_POST['introduccion'] == "" || $_POST['descripcion'] == "" || $_POST['expira'] == "") {
        $web->simple_message('danger', 'Falta informacion, por favor no altere la estructura de la interfaz');
        $web->iniClases('admin', 'index avisos nuevo-aviso');
        $web->smarty->display('form_avisos.html');
        die();
      }
      $sql        = "insert into msj (introduccion, descripcion, tipo, fecha, expira) values (?, ?, ?, ?)";
      $parameters = array($_POST['introduccion'], $_POST['descripcion'], 'PU', date('Y-m-j'), $_POST['expira']);
      if (!$web->query($sql, $parameters)) {
        $web->simple_message('danger', 'Ocurrio un error al crear el aviso');
        $web->iniClases('admin', 'index avisos nuevo-aviso');
        $web->smarty->display('form_avisos.html');
        die();
      } else {
        $web->simple_message('warning', 'Se creo el aviso correctamente');
      }
      break;
  }
}

$web->iniClases('admin', "index avisos");
$sql = "select cvemsj, introduccion, tipomsj.descripcion, fecha, expira
                from msj inner join tipomsj on tipomsj.cvetipomsj = msj.tipo
                where msj.tipo = ?";
$avisos = $web->DB->GetAll($sql, "PU");

//Por si es que no existen mensajes para mostrar
if (!isset($avisos[0])) {
  $web->simple_message('warning', 'No hay mensajes actuales');
  $web->smarty->display('avisos.html');
  die();
}

$web->smarty->assign('avisos', $avisos);
$web->smarty->display('avisos.html');
