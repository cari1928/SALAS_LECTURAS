<?php 
include("../sistema.php");
if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index salas");

	if (isset($_GET['info1'])) 
	{
		$elimina=$_GET['info1'];
<<<<<<< HEAD
=======
		$sql="delete from evaluacion where cvesala='".$elimina."' and horario='".$_GET['info3']."'";
		$web->query($sql);
		$sql="delete from lectura where cvesala='".$elimina."' and horario='".$_GET['info3']."'";
		$web->query($sql);
		$sql="delete from grupo where cvesala='".$elimina."' and horario='".$_GET['info3']."'";
		$web->query($sql);
>>>>>>> Inicio Proyecto v2
		$sql="delete from sala where cvesala='".$elimina."'and horario='".$_GET['info3']."'";		
		$web->query($sql);
	}

<<<<<<< HEAD
	$sql="select * from sala";
=======
	$sql="select cvesala,horario,ubicacion,numalumnos,limite from sala";
>>>>>>> Inicio Proyecto v2
	$salones=$web->showTable($sql,"salas",1,1,'sala');
	$web->smarty->assign('salones',$salones);	
$web->smarty->display("salas.html");
}
else
{
	$web->checklogin();	
}
 ?>