<?php
include 'sistema.php';

$contraseña = '';
$web        = new sistema;

if(isset($_POST['datos'])) {
	
	if (!isset($_POST['datos']['nombre']) ||
      !isset($_POST['datos']['usuario']) ||
      !isset($_POST['datos']['contrasena']) ||
      !isset($_POST['datos']['cveespecialidad']) ||
      !isset($_POST['datos']['correo']) ||
      !isset($_POST['datos']['confcontrasena'])) {
      message("No alteres la estructura de la interfaz", $web);
  }
  
  if ($_POST['datos']['nombre'] == "" ||
      $_POST['datos']['usuario'] == "" ||
      $_POST['datos']['cveespecialidad'] == "" ||
      $_POST['datos']['correo'] == "" ||
      $_POST['datos']['contrasena'] == "" ||
      $_POST['datos']['confcontrasena'] == "") {
      message("Llena todos los campos", $web);
  }
	
	$nombre         = $_POST['datos']['nombre'];
	$cveUsuario     = $_POST['datos']['usuario'];
	$contrasena     = $_POST['datos']['contrasena'];
	$confcontrasena = $_POST['datos']['confcontrasena'];
	$especialidad   = $_POST['datos']['cveespecialidad'];
	$correo         = $_POST['datos']['correo'];
	$tipo           = $_POST['datos']['tipo'];
	
	if ($contrasena != $confcontrasena) {
	  mensajes("Las contraseñas no coinciden", $web);
	}
	
	$tamano  = strlen($cveUsuario);
	if ($tipo == "U") {
	  if ($tamano != 8 || !is_numeric($cveUsuario)) {
	    mensajes("El número de control debe tener 8 caracteres numéricos", $web);
	  }
	
	} else {
	  if ($tamano != 13) {
	    mensajes("El RFC debe tener 13 caracteres", $web);
	  }
	}
	
	$sql      = "select cveusuario from usuarios where cveusuario=?";
  $datos_rs = $web->DB->GetAll($sql, $cveUsuario);
  if ($datos_rs != null) {
      message("El usuario ya existe", $web);
  }

  if (!$web->valida($correo)) {
    mensajes("Ingrese un correo válido", $web);
  }
  
  $sql     = "select * from usuarios where correo=?";
  $correos = $web->DB->GetAll($sql, $correo);
  if (sizeof($correos) == 1) {
      message("El correo ya existe", $web);
  }
	
	$query = "insert into usuarios (cveusuario, nombre, pass, correo) values (?, ?, ?, ?, ?, ?)";
  $parameters = array($cveUsuario, $nombre, md5($contrasena), $especialidad, $tipo, $coorreo);
  $web->query($query, $parameters);
  die();
  header('Location: index.php');
}

$web->iniClases(null, "index registrar");
$sql = "SELECT * FROM especialidad where cveespecialidad != 'O' order by nombre";
$web->smarty->assign('especialidad', $web->combo($sql));
$web->smarty->assign('encabezado', '<h3>¡Bienvenido! <br> Por favor Ingrese datos. <br/></h3>');
$web->smarty->display('registrar.html');

/**
 * Para ahorrar código y desplegar contenido con smarty
 * @param  Class $web Para poder usar la herramienta smarty y poder hacer assign | display
 * @return Muestra la plantilla
 */
function message($msg, $web)
{
  $web->iniClases(null, "index registrar");
  $sql = "SELECT * FROM especialidad where cveespecialidad != 'O' order by nombre";
  
  $web->smarty->assign('especialidad', $web->combo($sql));
  $web->smarty->assign('alert', 'danger');
  $web->smarty->assign('msg', $msg);
  $web->smarty->assign('encabezado', '<h3>¡Bienvenido! <br> Por favor Ingrese datos. <br/></h3>');
  $web->smarty->display('registrar.html');
  die();
}
