<?php 
include ('../sistema.php');

if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index promotor actualizar");

	if (!isset($_POST['datos'])) 
	{
		$query = "select * from usuarios where cveusuario='".$_GET['info2']."'";
		$datos_rs=$web->DB->GetAll($query);
		$nombre=$datos_rs[0]['nombre'];
		if(isset($_GET['info2']))
			$cveUser=$_GET['info2'];
		else
			$cveUser=$_POST['datos']['guardar'];
		contenidos($nombre,$cveUser,"",$web,"updatepromotor");
	}
	else
	{

		$nombre=$_POST['datos']['nombre'];
		$nomEspecialidad=$_POST['datos']['especialidad'];
		$cveUser=$_POST['datos']['guardar'];
		
		if ($_POST['datos']['pass']=='true') 
		{
			
			if ($_POST['datos']['contrasena']!="" && $_POST['datos']['contrasenaN']!="" && $_POST['datos']['confcontrasenaN']!="") 
			{

				$cont=$_POST['datos']['contrasena'];
				$cont=md5($cont);
				$sql="select pass from usuarios where cveusuario='".$cveUser."'";
				$datos_rs=$web->DB->GetAll($sql);	
				if($datos_rs[0]['pass']==$cont)
				{
					
					if ($_POST['datos']['contrasenaN']==$_POST['datos']['confcontrasenaN']) 
					{
					//	echo "aqui toy";
						$sql="select cveespecialidad from especialidad where nombre='".$nomEspecialidad."'";
				
						$datos_rs=$web->DB->GetAll($sql);
						$cveEspecialidad=$datos_rs[0]['cveespecialidad'];
						$sql = "update usuarios set nombre='".$nombre."', cveespecialidad='".$cveEspecialidad."',
								pass=md5('".$_POST['datos']['contrasenaN']."') where cveusuario='".$cveUser."'";
				
						$web->query($sql);
						contenidos($nombre,$cveUser,"",$web,"promotor");					
					}
					else
					{

						contenidos($nombre,$cveUser,"No coinciden las nuevas contraseñas",$web,"updatepromotor");						
					}
				}
				else
				{
					contenidos($nombre,$cveUser,"No coincide la contraseña original",$web,"updatepromotor");							
				}
			}	
			else
			{
				contenidos($nombre,$cveUser,"No coincide la contraseña original",$web,"updatepromotor");								
			}
		}
		else
		{

			$sql="select cveespecialidad from especialidad where nombre='".$nomEspecialidad."'";
			$datos_rs=$web->DB->GetAll($sql);
			$cveEspecialidad=$datos_rs[0]['cveespecialidad'];
			$sql = "update usuarios set nombre='".$nombre."', cveespecialidad='".$cveEspecialidad."'
					where cveusuario='".$cveUser."'";
			$web->query($sql);
			contenidos($nombre,$cveUser,"",$web,"promotor");
		}

	}




}
else
{
	$web->checklogin();	
}

//metodos
	function contenidos($nombre,$cveUser,$msgpass,$web,$direccion)
	{

		if($direccion == 'promotor')
		{
			header('Location: promotor.php');
<<<<<<< HEAD
=======
			die();
>>>>>>> Inicio Proyecto v2
		}
		
		$web->smarty->assign('nombre',$nombre);
		$web->smarty->assign('cveUser',$cveUser);
		$web->smarty->assign('combo',combo($cveUser,$web));
		$web->smarty->assign('contrasena','');
		$web->smarty->assign('contrasena','<label style= "color:red">'.$msgpass.'</label>');
	
	
	
		$sql="select cveusuario,nombre,cveespecialidad from usuarios where rol='P'";
		$promotor=$web->showTable($sql,"promotor",2,1,'usuarios');
		$web->smarty->assign('promotor',$promotor);	
		$web->smarty->display($direccion.".html");
	}

	function combo($cveUser,$web)
	{
		$sql="select especialidad.cveespecialidad, especialidad.nombre, pass 
			from usuarios inner join especialidad on usuarios.cveespecialidad = especialidad.cveespecialidad 
			where  cveusuario='".$cveUser."'";

		$datos_rs = $web->DB->GetAll($sql);
		$cveEspecialidad=$datos_rs[0]["cveespecialidad"];
		$nomEspecialidad=$datos_rs[0]["nombre"];
		$sql="select * from especialidad ";
		$datos_rs = $web->DB->GetAll($sql);		
		$combito='<select name="datos[especialidad]" class="form-control" id="exampleInputEmail3" id="producto">';
		
		for ($i=0; $i <count($datos_rs); $i++) { 
			 if($datos_rs[$i][1]==$nomEspecialidad)
			 {
			 	$combito.='<option selected>'.$datos_rs[$i][1].'</option>';
			 }
			 else
			 {
			 	$combito.='<option>'.$datos_rs[$i][1].'</option>';
			 }
		}
			 	$combito.='</select>';
			 	return $combito;
	}
 ?>