<?php
	include("../sistema.php");

	if ($_SESSION['roles'] !='A') {
		$web->checklogin();
	}

	$web->iniClases('admin', "index salas");

	if (isset($_GET['info1'])) {
		$elimina=$_GET['info1'];
		$sql="delete from evaluacion where cvesala='".$elimina."' and horario='".$_GET['info3']."'";
		$web->query($sql);
		$sql="delete from lectura where cvesala='".$elimina."' and horario='".$_GET['info3']."'";
		$web->query($sql);
		$sql="delete from grupo where cvesala='".$elimina."' and horario='".$_GET['info3']."'";
		$web->query($sql);
		$sql="delete from sala where cvesala='".$elimina."'and horario='".$_GET['info3']."'";
		$web->query($sql);
	}

	$sql='select cvesala AS "ID", horario AS "Horario", ubicacion AS "Ubicación", limite AS "Límite" from sala';
	$salones=$web->showTable($sql,"salas",1,1,'sala');
	$web->smarty->assign('salones',$salones);
	$web->smarty->display("salas.html");
 ?>
