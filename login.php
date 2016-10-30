<?php

include ('sistema.php');
$web=new Sistema;
$email='';
$contrasena='';

if (isset($_POST['datos']['contrasena'])) 
{

	$cveUsuario=$_POST['datos']['cveUsuario'];
	$contrasena=$_POST['datos']['contrasena'];	
	//var_dump($_POST);
	//die('hola3');

	if(!$web->login($cveUsuario,$contrasena))
	{
		$msg='La contraseña y/o usuario son incorrectos';
		$web->smarty->assign('mensaje',' <label style= "color:red">'.$msg.'</label>');
		$web->smarty->display('formulario_login.html');

	}		
}
else
{
	$msg='';
	$web->smarty->assign('mensaje',$msg);
	$web->smarty->display('formulario_login.html');
}
?> 