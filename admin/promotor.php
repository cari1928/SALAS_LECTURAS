<?php
	include('../sistema.php');

	if ($_SESSION['roles'] !='A') {
		$web->checklogin();
	}

	$web->iniClases('admin', "index promotor");

	if (isset($_GET['info1'])) {
		$elimina=$_GET['info1'];
		$sql="delete from usuarios where cveusuario='".$elimina."'";
		$web->query($sql);
	}

	$sql="select u.cveusuario AS \"RFC\",u.nombre AS \"Promotor\",u.correo AS \"Email\",e.nombre AS \"Especialidad\" from usuarios u inner join especialidad e on e.cveespecialidad=u.cveespecialidad where rol='P'";
	$promotor=$web->showTable($sql,"promotor",2,1,'usuarios','grupos');
	$web->smarty->assign('promotor',$promotor);
	$web->smarty->display("promotor.html");
 ?>
