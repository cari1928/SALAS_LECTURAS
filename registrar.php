<?php
include ('sistema.php');
$contraseña='';
$web=new sistema;
<<<<<<< HEAD
if (isset($_REQUEST['datos'])) 
{	
	$nombre=$_POST['datos']['nombre'];
	$cveUsuario=$_POST['datos']['usuario'];
	$contrasena=$_POST['datos']['contrasena'];	
	$confcontrasena=$_POST['datos']['confcontrasena'];	
	$especialidad=$_POST['datos']['especialidad'];

	if (isset($_POST['datos']['tipo'])) 
	{
		$coorreo=$_POST['datos']['correo']."@itcelaya.edu.mx";
		$tipo=$_POST['datos']['tipo'];
		if ($contrasena==$confcontrasena) 
=======
if (isset($_POST['datos']))
{

	$nombre=$_POST['datos']['nombre'];
	$cveUsuario=$_POST['datos']['usuario'];
	$contrasena=$_POST['datos']['contrasena'];
	$confcontrasena=$_POST['datos']['confcontrasena'];
	$especialidad=$_POST['datos']['cveespecialidad'];

	if (isset($_POST['datos']['tipo']))
	{
		$coorreo=$_POST['datos']['correo']."@itcelaya.edu.mx";
		$tipo=$_POST['datos']['tipo'];
		if ($contrasena==$confcontrasena)
>>>>>>> Inicio Proyecto v2
		{
			$tamano=strlen($cveUsuario);
			if($tipo=="U")
			{
				if($tamano==8)
				{
<<<<<<< HEAD
					if ($web->validarEmail($cveUsuario)) 
=======
					if ($web->validarEmail($cveUsuario))
>>>>>>> Inicio Proyecto v2
					{
						$sql = "select cveUsuario from usuarios where cveUsuario='$cveUsuario'";
						$datos_rs=$web->DB->GetAll($sql);
						if($datos_rs==NULL)
						{
<<<<<<< HEAD
							$sql = "select cveEspecialidad from Especialidad where Nombre='$especialidad'";
							$datos_rs=$web->DB->GetAll($sql);
							$especialidad=$datos_rs[0]['cveespecialidad'];	
=======
							$sql = "select cveEspecialidad from Especialidad where Nombre='$especialidad' order by nombre";
							$datos_rs=$web->DB->GetAll($sql);
							$especialidad=$datos_rs[0]['cveespecialidad'];
>>>>>>> Inicio Proyecto v2
							if($web->valida($coorreo)==true)
							{
								$sql = "select correo from usuarios where correo='".$coorreo."'";
								$datos_rs=$web->DB->GetAll($sql);
								if($datos_rs==NULL)
								{
										$query = "insert into Usuarios (cveusuario,nombre,pass,cveespecialidad,rol,correo) values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','$tipo','".$coorreo."')";
										$web->query($query);
										$web->smarty->display('index.html');
								}
								else
<<<<<<< HEAD
								{	
=======
								{
>>>>>>> Inicio Proyecto v2
									mensajes("","","","","","Este correo ya existe",$web);
								}
							}
							else
							{
<<<<<<< HEAD
								mensajes("","","","","","El correo no es valido",$web);		
=======
								mensajes("","","","","","El correo no es valido",$web);
>>>>>>> Inicio Proyecto v2
							}
						}
						else
						{
							mensajes("","Este usuario ya existe","","","","",$web);
						}

			        }
			        else
			        {
						mensajes("","","","","Usuario invalido","",$web);
					}
			    }
			    else
			    {
			    	//mensaje caracteres superados para el noControl
			    	mensajes("Se deben ingresar 8 caracteres para el No de control","","","","","",$web);
<<<<<<< HEAD
			    	
=======

>>>>>>> Inicio Proyecto v2
			    }
			}
			else
			{
				if($tamano==13)
				{
					$sql = "select cveUsuario from Usuarios where cveUsuario='$cveUsuario'";
					$datos_rs=$web->DB->GetAll($sql);
					if($datos_rs==NULL)
					{
<<<<<<< HEAD
						//SIDE JA
						$sql = "select cveespecialidad from especialidad where nombre='$especialidad'";
						$datos_rs=$web->DB->GetAll($sql);
						$especialidad=$datos_rs[0]['cveespecialidad'];
						$query = "insert into usuarios (cveusuario,nombre,pass,cveespecialidad,rol) values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','$tipo')";
=======
						$query = "insert into usuarios (cveusuario,nombre,pass,cveespecialidad,rol,correo)
						 					values ('$cveUsuario','$nombre',md5('$contrasena'),'$especialidad','$tipo', '$coorreo')";
>>>>>>> Inicio Proyecto v2
						$web->query($query);
						$web->smarty->display('index.html');
					}
					else
					{
						mensajes("","Este usuario ya existe","","","","",$web);
					}
				}
				else
				{
					mensajes("","Se deben ingresar 13 caracteres para el RFC","","","","",$web);
				}
			}
<<<<<<< HEAD
			

		}
		else
		{	
			mensajes("","","Las contraseñas no coinciden","","","",$web);
			
		}	
=======

		}
		else
		{
			mensajes("","","Las contraseñas no coinciden","","","",$web);

		}
>>>>>>> Inicio Proyecto v2
	}
	else
	{
		mensajes("","","","Se debe seleccionar el tipo de usuario.","","",$web);
	}
}
else
<<<<<<< HEAD
{	
    mensajes("","","","","","",$web);
	
}
	
	
function mensajes($msgnoControl,$msgrfc,$msgpass,$msgtipo,$msgusuario,$correo,$web)
{
=======
{
    mensajes("","","","","","",$web);

}


function mensajes($msgnoControl,$msgrfc,$msgpass,$msgtipo,$msgusuario,$correo,$web)
{
	$web->smarty->assign('especialidad',$web->combo("SELECT * FROM especialidad order by nombre"));
>>>>>>> Inicio Proyecto v2
	$web->smarty->assign('correo',' <label style= "color:red">'.$correo.'</label>');
	$web->smarty->assign('noControl',' <label style= "color:red">'.$msgnoControl.'</label>');
	$web->smarty->assign('rfc','<label style= "color:red">'.$msgrfc.'</label>');
	$web->smarty->assign('contrasena','<label style= "color:red">'.$msgpass.'</label>');
<<<<<<< HEAD
	$web->smarty->assign('tipo','<label style= "color:red">'.$msgtipo.'</label>');	
	$web->smarty->assign('usuario','<label style= "color:red">'.$msgusuario.'</label>');	
=======
	$web->smarty->assign('tipo','<label style= "color:red">'.$msgtipo.'</label>');
	$web->smarty->assign('usuario','<label style= "color:red">'.$msgusuario.'</label>');
>>>>>>> Inicio Proyecto v2
	$web->smarty->assign('encabezado','<h3>¡Bienvenido! <br> Por favor Ingrese datos. <br/></h3>');
	$web->smarty->display('registrar.html');
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> Inicio Proyecto v2
