<?php
	include('../sistema.php');

	if ($_SESSION['roles'] !='A') {
		$web->checklogin();
	}

	$web->iniClases('admin', "index alumnos nuevo");

	if (!isset($_POST['datos'])) {
		mensajes("","","","",$web);
		die();
	}

	$nombre=$_POST['datos']['nombre'];
	$cveUsuario=$_POST['datos']['usuario'];
	$contrasena=$_POST['datos']['contrasena'];
	$confcontrasena=$_POST['datos']['confcontrasena'];
	$especialidad=$_POST['datos']['cveespecialidad'];
	$correo = $_POST['datos']['correo'].'@itcelaya.edu.mx';

	if ($contrasena != $confcontrasena) {
		mensajes("","","Las contraseñas no coinciden","",$web);
		die();
	}

	$tamano=strlen($cveUsuario);

	if($tamano != 8) {
		mensajes("","Se deben ingresar 8 caracteres para el Numero de Control","","",$web);
		die();
	}

	$sql = "select cveUsuario from Usuarios where cveUsuario='$cveUsuario'";
	$datos_rs=$web->DB->GetAll($sql);

	if($datos_rs != NULL) {
		mensajes("","Este usuario ya existe","","",$web);
		die();
	}

	$query = "insert into usuarios (cveusuario,nombre,pass,cveespecialidad,rol,correo) values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','U', '".$correo."')";
	$web->query($query);
	header('Location: alumnos.php');

//---------------------------------------------------------------------------------------------------------------------------------------------------------------
	function mensajes($msgnoControl,$msgrfc,$msgpass,$msgusuario,$web) {
		$web->smarty->assign('cmb_especialidad',$web->combo("SELECT * FROM especialidad order by nombre"));
		$web->smarty->assign('noControl',' <label style= "color:red">'.$msgnoControl.'</label>');
		$web->smarty->assign('rfc','<label style= "color:red">'.$msgrfc.'</label>');
		$web->smarty->assign('contrasena','<label style= "color:red">'.$msgpass.'</label>');
		$web->smarty->assign('msgusuario','<label style= "color:red">'.$msgusuario.'</label>');
		$web->smarty->assign('encabezado','<h3>¡Bienvenido! <br> Por favor Ingrese datos. <br/></h3>');
		$web->smarty->display('addalumnos.html');
	}
?>
