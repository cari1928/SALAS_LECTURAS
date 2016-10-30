<?php 
include("../sistema.php");
if ($_SESSION['roles'] =='P')
{
	if(isset($_GET['info4']))
	{
		$cvepromotor=$_SESSION['cveUser'];
		$cvesala=$_GET['info1'];
		$nocontrol='00000000';
		$cveperiodo=$_GET['info4'];
		$cvehorario=$_GET['info2'];
		$sql="select COALESCE(MAX(cveletra),0) as cveletra from lectura where cvepromotor= '".$cvepromotor."'";
		$datos_rs =$web->DB->GetAll($sql);
		$letra=$datos_rs[0]['cveletra'];
<<<<<<< HEAD
		$sql="insert into lectura (cvepromotor,cvesala,nocontrol,cveperiodo,horario,cvelibro,cveletra) values ('".$cvepromotor."','".$cvesala."','".$nocontrol."',".$cveperiodo.",'".$cvehorario."',0,". ($letra + 1) .")";
		$web->query($sql);
		$sql="update sala set cveestado='O' where cvesala= '".$cvesala."' and horario='".$cvehorario."'";
=======
		//$sql="insert into lectura (cvepromotor,cvesala,nocontrol,cveperiodo,horario,cvelibro,cveletra) values ('".$cvepromotor."','".$cvesala."','".$nocontrol."',".$cveperiodo.",'".$cvehorario."',0,". ($letra + 1) .")";
		$sql="insert into grupo values('".$cvesala."','".$cvehorario."','".$cveperiodo."')";
>>>>>>> Inicio Proyecto v2
		$web->query($sql);
		header('Location: vergrupos.php');
	}
	else
	{
		header('Location: index.php');
	}
}
else
{
	$web->checklogin();	
}

 ?>