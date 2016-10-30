<?php 
include("../sistema.php");

if ($_SESSION['roles'] =='U')
{
	$web->iniClases('usuario', "index lecturas");
	
	if(isset($_GET['info1']))
	{
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

	$grupos= $web->grupos($_SESSION['cveUser']);
	$web->smarty->assign('grupos',$grupos);
	$sql="select distinct letra from abecedario where cve in (select cveletra from lectura where nocontrol='".$_SESSION['cveUser']."')";
	$tabla=$web->showTable($sql,"grupo",5,1,'grupos');
	$web->smarty->assign('tabla',$tabla);
	$web->smarty->display("verlecturas.html");
}
else
{
	$web->checklogin();	
}
?>

