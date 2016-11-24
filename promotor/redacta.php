<?php
	include("../sistema.php");

	if(!isset($_SESSION['roles'])) {
		header('location: ../index.php');		
	}

	if ($_SESSION['roles'] =='P') {
		$web->iniClases('promotor', "index vergrupos redactar");
		$grupos = $web->grupos($_SESSION['cveUser']);
		$web->smarty->assign('grupos',$grupos);
		$accion = "";
		$para   = "";
		$perodo = "";

		if(!isset($_GET['info']) && !isset($_GET['para'])) {
			header('location: vergrupos.php');
		}
			
		if(isset($_GET['info'])) {
			$para=$_GET['info'];
		}

		if(isset($_GET['periodo'])) {
			$periodo=$_GET['periodo'];
		}

		if (isset($_GET['accion'])) {
			$accion=$_GET['accion'];
		}

		switch ($accion) {
			
			case 'redactar':
					$datos = $web->DB->GetAll("select cve from abecedario where letra= '".$para."'");
					var_dump($datos);
					$letra = $datos[0]['cve'];
					$datos = $web->DB->GetAll("SELECT * FROM lectura WHERE cveperiodo = ".$periodo." and cveletra = ".$letra." and cvepromotor='".$_SESSION['cveUser']."'");
					if(isset($datos[0])) {
						$web->smarty->assign('para',$para);
						$web->smarty->assign('cveperiodo',$periodo);
						$web->smarty->display('redacta.html');
						exit();
					}
					$web->smarty->assign('msj',"No existe el destinatario o no tienes permiso para mandar este mensaje");
					$web->smarty->display('redacta.html');
					exit();
			break;

			case 'enviar':
				$letra = "";
				$para  = "";
				if(isset($_GET['para'])){
					$letra=$_GET['para'];
				}

				if(isset($_GET['cveperiodo'])){
					$periodo=$_GET['cveperiodo'];
				}
				$datos = $web->DB->GetAll("select cve from abecedario where letra='".$letra."'");
				$letra = $datos[0]['cve'];
				$sql   = "insert into msj (introduccion,descripcion,tipo,emisor,fecha,expira,cveletra,cveperiodo) values ('".$_POST['introduccion']."','".$_POST['descripcion']."','G','".$_SESSION['cveUser']."','".date('Y-m-j')."','".$_POST['expira']."',".$letra.",".$periodo.")";

				$datos = $web->DB->GetAll($sql);
			break;

			case 'ver':
				$grupo   = "";
				$periodo = "";
				if(isset($_GET['info'])){
					$grupo=$_GET['info'];
				}
				if(isset($_GET['periodo'])){
					$periodo=$_GET['periodo'];
				}
				$sql   = "select cvemsj, introduccion,tipomsj.descripcion as tipo,emisor,fecha, expira from msj inner join tipomsj on tipomsj.cvetipomsj=msj.tipo where msj.tipo='G'";
				$datos = $web->DB->GetAll($sql);
				$web->smarty->assign('datos',$datos);
				$web->smarty->display('mensajes.html');
				exit();
			break;
		}
		header("location: vergrupos.php");	
	}
?>
