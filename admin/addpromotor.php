<?php 
include('../sistema.php');

if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index promotor nuevo");

	if (isset($_POST['datos'])) 
	{	
		$nombre=$_POST['datos']['nombre'];
		$cveUsuario=$_POST['datos']['usuario'];
		$contrasena=$_POST['datos']['contrasena'];	
		$confcontrasena=$_POST['datos']['confcontrasena'];	
<<<<<<< HEAD
		$especialidad=$_POST['datos']['especialidad'];
	
=======
		$especialidad=$_POST['datos']['cveespecialidad'];
		$correo=$_POST['datos']['correo']."@itcelaya.edu.mx";
>>>>>>> Inicio Proyecto v2
		
			if ($contrasena==$confcontrasena) 
			{
				$tamano=strlen($cveUsuario);
					if($tamano==13)
					{
<<<<<<< HEAD
=======
						if($web->valida($correo)==false) 
						{
							mensajes("","","","",$web,"El correo no es valido");	
							die();
						}
>>>>>>> Inicio Proyecto v2
						$sql = "select cveUsuario from Usuarios where cveUsuario='$cveUsuario'";
						$datos_rs=$web->DB->GetAll($sql);
						if($datos_rs==NULL)
						{
<<<<<<< HEAD
							//SIDE JA
							$sql = "select cveespecialidad from especialidad where nombre='$especialidad'";
							$datos_rs=$web->DB->GetAll($sql);
							$especialidad=$datos_rs[0]['cveespecialidad'];
							$query = "insert into usuarios (cveusuario,nombre,pass,cveespecialidad,rol) values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','P')";
=======

							$sql = "select correo from usuarios where correo='".$correo."'";
								$datos_rs=$web->DB->GetAll($sql);
								if($datos_rs!=NULL)
								{
									mensajes("","","","",$web,"El correo ya existe");	
									die();
								}
							//SIDE JA
							$query = "insert into usuarios (cveusuario,nombre,pass,cveespecialidad,rol,correo) values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','P','$correo')";
							
>>>>>>> Inicio Proyecto v2
							$web->query($query);
	
							header('Location: promotor.php');
						}
						else
						{
							mensajes("","Este usuario ya existe","","",$web);
						}
					}
					else
					{
						mensajes("","Se deben ingresar 13 caracteres para el RFC","","",$web);
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


	
<<<<<<< HEAD
function mensajes($msgnoControl,$msgrfc,$msgpass,$msgusuario,$web)
{

=======
function mensajes($msgnoControl,$msgrfc,$msgpass,$msgusuario,$web,$msgcorreo="")
{
	$web->smarty->assign('especialidad',$web->combo("SELECT * FROM especialidad"));
	$web->smarty->assign('correo',' <label style= "color:red">'.$msgcorreo.'</label>');
>>>>>>> Inicio Proyecto v2
	$web->smarty->assign('noControl',' <label style= "color:red">'.$msgnoControl.'</label>');
	$web->smarty->assign('rfc','<label style= "color:red">'.$msgrfc.'</label>');
	$web->smarty->assign('contrasena','<label style= "color:red">'.$msgpass.'</label>');
	$web->smarty->assign('msgusuario','<label style= "color:red">'.$msgusuario.'</label>');	
	$web->smarty->assign('encabezado','<h3>¡Bienvenido! <br> Por favor Ingrese datos. <br/></h3>');
	$web->smarty->display('addpromotor.html');
}

?>