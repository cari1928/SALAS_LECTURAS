<?php 
  include("../sistema.php");

  if ($_SESSION['roles'] =='P') {
    $web->checklogin();	
  }

  $web->iniClases('promotor', "index grupos");
  $grupos= $web->grupos($_SESSION['cveUser']);
  $web->smarty->assign('grupos',$grupos);
  $cveperiodo=periodo($web);  

  $sql = "select letra, cvesala, horario, fechainicio, fechafinal from lectura 
            inner join abecedario on lectura.cveletra = abecedario.cve
            inner join periodo on lectura.cveperiodo = periodo.cveperiodo";

  die($sql);

  //$sql="select letra from abecedario where cve in (select cveletra from lectura where cvepromotor='".$_SESSION['cveUser']."' and cveperiodo ='".$cveperiodo."')";
  $tabla=$web->showTable($sql,"grupo",5,1,'grupos');
  $web->smarty->assign('tabla',$tabla);
  $web->smarty->display('vergrupos.html');


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