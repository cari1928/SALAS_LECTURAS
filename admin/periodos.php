<?php 
include('../sistema.php');

if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index periodos");
	
	if (isset($_GET['info1'])) 
	{
		$elimina=$_GET['info1'];
		$sql="delete from periodo where cveperiodo='".$elimina."'";		
		$web->query($sql);
	}

	$sql="select cveperiodo,fechainicio,fechafinal from periodo";
	$periodos=$web->showTable($sql,"periodos",1,1,'periodo');
	$web->smarty->assign('periodos',$periodos);	
	$web->smarty->display("periodos.html");
}
else
{
	$web->checklogin();	
}
 ?>