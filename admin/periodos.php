<?php
	include('../sistema.php');

	if ($_SESSION['roles'] !='A') {
		$web->checklogin();
	}

	$web->iniClases('admin', "index periodos");

	if (isset($_GET['info1']))
	{
		$elimina=$_GET['info1'];
		$sql="delete from periodo where cveperiodo='".$elimina."'";
		$web->query($sql);
	}

	$sql='select cveperiodo AS "ID", fechainicio AS "Fecha de Inicio", fechafinal AS "Fecha Final" from periodo';
	$periodos=$web->showTable($sql,"periodos",1,1,'periodo');
	$web->smarty->assign('periodos',$periodos);
	$web->smarty->display("periodos.html");
 ?>
