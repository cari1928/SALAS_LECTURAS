<?php 
include("../sistema.php");
if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index salas nuevo");

	if(!isset($_POST['datos']))
	{
		$web->smarty->assign("msjlimite", "");	
		$web->smarty->display('addsalas.html');
	}
	else
	{
		$limite=$_POST['datos']['limite'];
		if($limite <= 40)//Dudoso ->preguntar profa
		{
			
		$horario=$_POST['datos']['horainicial']."-".$_POST['datos']['horafinal'];
		$sql="insert into sala (cvesala,horario,ubicacion,numalumnos,limite) values ('".$_POST['datos']['cvesala']."','".$horario."','".$_POST['datos']['ubicacion']."',0,".$_POST['datos']['limite'].")";
		
		$web->query($sql);

		header('Location: salas.php');
		}
		else
		{
			$web->smarty->assign("msjlimite", '<label style= "color:red">Supera el limite</label>');	
			$web->smarty->display('addsalas.html');		
		}

		
	}
}
else
{
	$web->checklogin();	
}



 ?>


