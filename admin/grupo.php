<?php 
include("../sistema.php");

if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index promotor grupo");

	if(isset($_POST['datos']))
		{
			echo "jajaja";
			$sql="DELETE FROM evaluacion where cveletra in (select cve from abecedario where letra ='".$_POST['datos']['grupo']."') and cvepromotor='".$_POST['datos']['promotor']."'";
			$datos_rs=$web->DB->GetAll($sql);
			$sql="DELETE FROM lectura where cveletra in (select cve from abecedario where letra ='".$_POST['datos']['grupo']."') and cvepromotor='".$_POST['datos']['promotor']."'";
			$datos_rs=$web->DB->GetAll($sql);
			$tabla=$web->evaluacion($_POST['datos']['grupo'],'none',$_POST['datos']['promotor']);
			$web->smarty->assign('tabla',$tabla);
			header('Location: grupo.php?info1='.$_POST['datos']['grupo']);
		}

	if(!(isset($_GET['info2'])))
	{
		
		header('location : promotor.php');
		exit;
	}
	$grupos= $web->grupos($_GET['info2']);

	$web->smarty->assign('grupos',$grupos);
	
	if(isset($_GET['info1']))
	{
		$sql="select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura  inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario inner join periodo on periodo.cveperiodo = lectura.cveperiodo where cveletra in (select cve from abecedario where letra ='".$_GET['info1']."') and cvepromotor='".$_GET['info2']."'";
		$datos_rs=$web->DB->GetAll($sql);

		$info="Sala: ".$datos_rs[0]['cvesala']."<br>";
		$info.="Ubicacion: ".$datos_rs[0]['ubicacion']."<br>";
		$info.="Horario: ".$datos_rs[0]['horario']."<br>";
		$info.="Periodo: ".$datos_rs[0]['fechainicio']." : ".$datos_rs[0]['fechafinal'];
		$web->smarty->assign('info',$info);
//		$sql="select nombre from Usuarios where cveusuario in (select nocontrol from lectura where cveletra in (select cve from abecedario where letra = '".$_GET['info1']."') and cvepromotor = '".$_GET['info2']."')";
		$tabla=$web->evaluacion($_GET['info1'],"none",$_GET['info2']);
		$web->smarty->assign('tabla',$tabla);
		$web->smarty->display("grupo.html");
	}
	else
	{
		
		
				
			$web->smarty->assign('info',"");
			$tabla="No hay informacion sobre algun grupo";
			$web->smarty->display("grupo.html");
		

		$web->smarty->assign('tabla',$tabla);
		
		


	}
}
else
{
	$web->checklogin();	
}
 ?>