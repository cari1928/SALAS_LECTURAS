<?php
include('../sistema.php');

if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index historial");

	if (isset($_GET['info1']))
	{
		$elimina=$_GET['info1'];
		$sql="delete from periodo where cveperiodo='".$elimina."'";
		$web->query($sql);
	}

	$sql="select cveperiodo AS \"ID\",fechainicio AS \"Fecha de Inicio\",fechafinal AS \"Fecha Final\" from periodo";
	$periodos=$web->showTable($sql,"gruposHistorial",4,1,'periodo');
	$web->smarty->assign('periodos',$periodos);
	$web->smarty->display("periodos.html");
}
else
{
	$web->checklogin();
}
 ?>
