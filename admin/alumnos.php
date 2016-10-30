<?php 
	include('../sistema.php');

if ($_SESSION['roles'] =='A')
{
	$contraseña='';
	$web->iniClases('admin', "index alumnos");

	if (isset($_GET['info1'])) 
	{
		$elimina=$_GET['info1'];
		$sql="delete from usuarios where cveusuario='".$elimina."'";		
		$web->query($sql);
	}

		$sql="select cveusuario,nombre,cveespecialidad from usuarios where rol='U' and cveusuario not in (select cveusuario from usuarios where cveusuario='00000000' )";
		$alumnos=$web->showTable($sql,"alumnos",3,1,'usuarios');
		$web->smarty->assign('alumnos',$alumnos);	
	$web->smarty->display("alumnos.html");
}
else
{
	$web->checklogin();	
}
	
 ?>