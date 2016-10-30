<?php 
include('../sistema.php');
if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index periodos actualizar");

	if (!isset($_POST['datos'])) {
	
	$cve=$_GET['info2'];
	$sql="select* from periodo where cveperiodo='".$cve."'";
	$datos_rs=$web->DB->GetAll($sql);	
	$web->smarty->assign('cve',$cve);
	$web->smarty->assign('fechaInicio',$datos_rs[0]['fechainicio']);
	$web->smarty->assign('fechaFinal',$datos_rs[0]['fechafinal']);
	$web->smarty->display("updateperiodos.html");

}
else
{
	$fechaInicio=$_POST['datos']['fechaInicio'];
	$cve=$_POST['datos']['cve'];
	$fechaFinal=$_POST['datos']['fechaFinal'];
	if($fechaInicio!=$fechaFinal)
	{
	$sql="update  periodo set fechafinal='".$fechaFinal."',fechainicio='".$fechaInicio."'  where cveperiodo='".$cve."'";
	$web->query($sql);
	header('Location: periodos.php');
	}
	else
	{
		header('Location: periodos.php');
	}

}
}
else
{
	$web->checklogin();	
}
 ?>