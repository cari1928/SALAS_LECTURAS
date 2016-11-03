<?php
  include("../sistema.php");

  if ($_SESSION['roles'] !='U') {
    $web->checklogin();
  }

	$web->iniClases('usuario', "index grupos");
	$grupos= $web->grupos($_SESSION['cveUser']);
	$web->smarty->assign('grupos',$grupos);
	$cveperiodo=periodo($web);

  if(isset($_GET['info1'])) {
    $sql = "select cveusuario from usuarios where nombre='".$_GET['info2']."'";
		$datos=$web->DB->GetAll($sql);
		$cvepromotor = $datos[0]['cveusuario'];
		$sql = "select cve from abecedario where letra='".$_GET['info1']."'";
		$datos=$web->DB->GetAll($sql);
		$cveletra = $datos[0]['cve'];
		$sql = "select nocontrol from lectura where nocontrol in (select cveusuario from usuarios where cveusuario = '00000000') and cveletra='".$cveletra."' and cvepromotor='".$cvepromotor."'";
		$web->query($sql);
		$cantidadregistros=$web->rs->_numOfRows;
		$sql = "select cvesala, cveperiodo, horario from lectura where cveletra='".$cveletra."' and cvepromotor='".$cvepromotor."'";
		$datos=$web->DB->GetAll($sql);
		$cvesala = $datos[0]['cvesala'];
		$cveperiodo = $datos[0]['cveperiodo'];
		$horario = $datos[0]['horario'];
		$sql = "insert into lectura(cvepromotor, cvesala, nocontrol, cveperiodo, horario, cveletra, cvelibro) values('".$cvepromotor."', '".$cvesala."', '".$_SESSION['cveUser']."', '".$cveperiodo."', '".$horario."', '".$cveletra."', null)";
		$web->query($sql);
		$sql="insert into evaluacion (cvepromotor,cvesala,nocontrol,cveperiodo,horario,cveletra,comprension,motivacion,reporte,tema,participacion,terminado) values ('".$cvepromotor."','".$cvesala."','".$_SESSION['cveUser']."',".$cveperiodo.",'".$horario."',".$cveletra.",0,0,0,0,0,0)";
		$web->query($sql);
		$sql = "delete from lectura where nocontrol='00000000' and cveletra='".$cveletra."' and cvepromotor='".$cvepromotor."'";
		$web->query($sql);
  }

  $sql = "
    select letra AS \"Grupo\", nombre AS \"Promotor\", horario AS \"Horario\"
    from lectura
      inner join abecedario on lectura.cveletra = abecedario.cve
      inner join usuarios on usuarios.cveusuario = lectura.cvepromotor
    where nocontrol='".$_SESSION['cveUser']."' and cveperiodo ='".$cveperiodo."'
  ";

	$tabla=$web->showTable($sql,"grupo",5,1,'grupos');
	$web->smarty->assign('tabla',$tabla);
	$web->smarty->display('vergrupos.html');

//-------------------------------------------------------------------------------------------------------------------------------------------
  function periodo($web) {
		$sql = "select * from periodo";
		$datos_rs = $web->DB->GetAll($sql);

		$date = getdate();
		$fechaAct = $date['year']."-".$date['mon']."-".$date['mday'];
		$date1 = new DateTime($fechaAct);

		$cont = 0;

		while($cont < count($datos_rs))
		{
			$date2 = new DateTime($datos_rs[$cont]['fechainicio']);
			$date3 = new DateTime($datos_rs[$cont]['fechafinal']);

			if($date1 >= $date2 && $date1 < $date3)
			{
				$cveperiodo = $datos_rs[$cont]['cveperiodo'];
			}
			$cont++;
		}
		if (isset($cveperiodo))
		{
			$sql="select fechainicio,fechafinal from periodo where cveperiodo='".$cveperiodo."'";
			$datos=$web->DB->GetAll($sql);
			$periodo="El periodo es: ".$datos[0]['fechainicio']." a ".$datos[0]['fechafinal'];

			$web->smarty->assign('periodo',$periodo);
			return $cveperiodo;
		}
		else
		{
			$web->smarty->assign('periodo',"No hay periodos actuales");
			return "";
		}

	}
?>
