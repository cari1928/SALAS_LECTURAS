<?php 
include('../sistema.php');

if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index promotor");

	if (isset($_GET['info1'])) 
	{
		$elimina=$_GET['info1'];
		$sql="delete from usuarios where cveusuario='".$elimina."'";		
		$web->query($sql);
	}

<<<<<<< HEAD
	$sql="select cveusuario,nombre,cveespecialidad from usuarios where rol='P'";
=======
	$sql="select u.cveusuario as RFC,u.nombre as Promotor,u.correo as Email,e.nombre as especialidad from usuarios u inner join especialidad e on e.cveespecialidad=u.cveespecialidad where rol='P'";
>>>>>>> Inicio Proyecto v2
	$promotor=$web->showTable($sql,"promotor",2,1,'usuarios','grupos');
	$web->smarty->assign('promotor',$promotor);	
$web->smarty->display("promotor.html");
}
else
{
	$web->checklogin();	
}
 ?>