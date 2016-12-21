<?php
include ('sistema.php');
$contraseña='';
$web=new sistema;

if (!isset($_POST['datos'])) {
	mensajes("","","","","","",$web);
	die();
}

$nombre=$_POST['datos']['nombre'];
$cveUsuario=$_POST['datos']['usuario'];
$contrasena=$_POST['datos']['contrasena'];
$confcontrasena=$_POST['datos']['confcontrasena'];
$especialidad=$_POST['datos']['cveespecialidad'];

if (!isset($_POST['datos']['tipo'])) {
	mensajes("","","","Se debe seleccionar el tipo de usuario.","","",$web);
	die();
}

if ($contrasena != $confcontrasena) {
	mensajes("","","Las contraseñas no coinciden","","","",$web);
	die();
}

$coorreo=$_POST['datos']['correo']."@itcelaya.edu.mx";
$tipo=$_POST['datos']['tipo'];
$tamano=strlen($cveUsuario);

if($tipo == "U") {

	if($tamano != 8) {
		mensajes("Se deben ingresar 8 caracteres para el No de control","","","","","",$web);
		die();
	}

	if(!($web->validarEmail($cveUsuario))) {
		mensajes("","","","","Usuario invalido","",$web);
		die();
	}

	$sql = "select cveUsuario from usuarios where cveUsuario='$cveUsuario'";
	$datos_rs=$web->DB->GetAll($sql);

	if($datos_rs != NULL) {
		mensajes("","Este usuario ya existe","","","","",$web);
		die();
	}

	$sql = "select cveEspecialidad from Especialidad where Nombre='$especialidad' order by nombre";
	$datos_rs = $web->DB->GetAll($sql);

	if($web->valida($coorreo) == false) {
		mensajes("","","","","","El correo no es valido",$web);
		die();
	}

	$sql = "select correo from usuarios where correo='".$coorreo."'";
	$datos_rs=$web->DB->GetAll($sql);

	if($datos_rs != NULL) {
		mensajes("","","","","","Este correo ya existe",$web);
		die();
	}

	$query = "insert into Usuarios (cveusuario,nombre,pass,cveespecialidad,rol,correo) values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','$tipo','".$coorreo."')";
	$web->query($query);
	// $web->smarty->display('index.html');
	header('Location: index.php');

} else {

	if($tamano != 13) {
		mensajes("","Se deben ingresar 13 caracteres para el RFC","","","","",$web);
		die();
	}

	$sql = "select cveUsuario from Usuarios where cveUsuario='$cveUsuario'";
	$datos_rs=$web->DB->GetAll($sql);

	if($datos_rs != NULL) {
		mensajes("","Este usuario ya existe","","","","",$web);
		die();
	}

	$query = "insert into usuarios (cveusuario,nombre,pass,cveespecialidad,rol,correo)
	 					values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','$tipo', '$coorreo')";
	$web->query($query);
	// $web->smarty->display('index.html');
	header('Location: index.php');

}

//------------------------------------------------------------------------------------------------
	function mensajes($msgnoControl,$msgrfc,$msgpass,$msgtipo,$msgusuario,$correo,$web)
	{
		$web->smarty->assign('especialidad',$web->combo("SELECT * FROM especialidad order by nombre"));
		$web->smarty->assign('correo',' <label style= "color:red">'.$correo.'</label>');
		$web->smarty->assign('noControl',' <label style= "color:red">'.$msgnoControl.'</label>');
		$web->smarty->assign('rfc','<label style= "color:red">'.$msgrfc.'</label>');
		$web->smarty->assign('contrasena','<label style= "color:red">'.$msgpass.'</label>');
		$web->smarty->assign('tipo','<label style= "color:red">'.$msgtipo.'</label>');
		$web->smarty->assign('usuario','<label style= "color:red">'.$msgusuario.'</label>');
		$web->smarty->assign('encabezado','<h3>¡Bienvenido! <br> Por favor Ingrese datos. <br/></h3>');
		$web->smarty->display('registrar.html');
	}
?>
