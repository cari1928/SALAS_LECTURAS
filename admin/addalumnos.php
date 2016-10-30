<?php 
include('../sistema.php');

if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index alumnos nuevo");

	if (isset($_POST['datos'])) 
	{	
		$nombre=$_POST['datos']['nombre'];
		$cveUsuario=$_POST['datos']['usuario'];
		$contrasena=$_POST['datos']['contrasena'];	
		$confcontrasena=$_POST['datos']['confcontrasena'];	
		$especialidad=$_POST['datos']['especialidad'];

			if ($contrasena==$confcontrasena) 
			{
				$tamano=strlen($cveUsuario);
					if($tamano==8)
					{
						$sql = "select cveUsuario from Usuarios where cveUsuario='$cveUsuario'";
						$datos_rs=$web->DB->GetAll($sql);
						if($datos_rs==NULL)
						{
							//SIDE JA
							$sql = "select cveespecialidad from especialidad where nombre='$especialidad'";
							$datos_rs=$web->DB->GetAll($sql);
							$especialidad=$datos_rs[0]['cveespecialidad'];
							$query = "insert into usuarios (cveusuario,nombre,pass,cveespecialidad,rol) values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','U')";
							$web->query($query);
							header('Location: alumnos.php');
						}
						else
						{
							mensajes("","Este usuario ya existe","","",$web);
						}
					}
					else
					{
						mensajes("","Se deben ingresar 8 caracteres para el Numero de Control","","",$web);
					}
			}
			else
			{	
				mensajes("","","Las contraseñas no coinciden","",$web);
				
			}	
	}
	else
	{	
	    mensajes("","","","",$web);
		
	}
}
else
{
	$web->checklogin();	
}
	
	
function mensajes($msgnoControl,$msgrfc,$msgpass,$msgusuario,$web)
{

	$web->smarty->assign('noControl',' <label style= "color:red">'.$msgnoControl.'</label>');
	$web->smarty->assign('rfc','<label style= "color:red">'.$msgrfc.'</label>');
	$web->smarty->assign('contrasena','<label style= "color:red">'.$msgpass.'</label>');
	$web->smarty->assign('msgusuario','<label style= "color:red">'.$msgusuario.'</label>');	
	$web->smarty->assign('encabezado','<h3>¡Bienvenido! <br> Por favor Ingrese datos. <br/></h3>');
	$web->smarty->display('addalumnos.html');
}
?>