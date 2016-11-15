<?php
	include("../sistema.php");

	if ($_SESSION['roles'] !='A') {
		$web->checklogin();
	}

	$web->iniClases('admin', "index promotor grupo");

	// die(var_dump($_POST));

	if(isset($_POST['datos'])) {
			// $sql="DELETE FROM evaluacion where cveletra in (select cve from abecedario where letra ='".$_POST['datos']['grupo']."') and cvepromotor='".$_POST['datos']['promotor']."'";
			// $datos_rs=$web->DB->GetAll($sql);
			// $sql="DELETE FROM lectura where cveletra in (select cve from abecedario where letra ='".$_POST['datos']['grupo']."') and cvepromotor='".$_POST['datos']['promotor']."'";
			// $datos_rs=$web->DB->GetAll($sql);
			// $tabla=$web->evaluacion($_POST['datos']['grupo'],'none',$_POST['datos']['promotor']);
			// $web->smarty->assign('tabla',$tabla);
			header('Location: grupoHistorial .php?info='.$_POST['datos']['promotor'].'&info1='.$_POST['datos']['grupo'].'&info2='.$_POST['datos']['periodo']);
	}

	// if(isset($_GET['info1'])) {
	// 	echo "info1";
	// } else{
	// 	echo "no info1<br>";
	// 	var_dump($_GET);
	// }
	// die();

	if(!isset($_GET['info']) || !isset($_GET['info1']) || !isset($_GET['info2'])) {
		$web->smarty->assign('info',"");
		$tabla="No hay informacion sobre algun grupo";
		$web->smarty->display("grupo.html");
		$web->smarty->assign('tabla',$tabla);
		$web->smarty->display("grupo.html");
	}

	$sql="select distinct sala.cvesala,ubicacion,sala.horario,fechainicio,fechafinal from lectura  inner join sala on sala.cvesala=lectura.cvesala and lectura.horario=sala.horario inner join periodo on periodo.cveperiodo = lectura.cveperiodo where cveletra in (select cve from abecedario where letra ='".$_GET['info1']."') and cvepromotor='".$_GET['info']."'";
	$datos_rs=$web->DB->GetAll($sql);

	$info="Sala: ".$datos_rs[0]['cvesala']."<br>";
	$info.="Ubicacion: ".$datos_rs[0]['ubicacion']."<br>";
	$info.="Horario: ".$datos_rs[0]['horario']."<br>";
	$info.="Periodo: ".$datos_rs[0]['fechainicio']." : ".$datos_rs[0]['fechafinal'];
	$web->smarty->assign('info',$info);
	$tabla=$web->evaluacion($_GET['info1'], "none", array('promoaux'=>$_GET['info'], 'periodaux'=>$_GET['info2']));
	$web->smarty->assign('tabla',$tabla);
	$web->smarty->display("grupo.html");
 ?>
