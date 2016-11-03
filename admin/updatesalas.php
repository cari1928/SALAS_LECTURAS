<?php 
	include('../sistema.php');
if ($_SESSION['roles'] =='A')
{
	$web->iniClases('admin', "index salas actualizar");

	if(!isset($_POST['datos']))
	{
		relleno($web);
	}
	else
	{
		$horario = $_POST['datos']['horainicial']."-".$_POST['datos']['horafinal'];
		$ubicacion = $_POST['datos']['ubicacion'];
		$limite = $_POST['datos']['limite'];

		if($limite <= 40)//Dudoso ->preguntar profa
		{
			$sql = "update sala set horario='".$horario."', ubicacion='".$ubicacion."', limite='".$limite."' where cvesala ='".$_POST['datos']['guardar']."'and horario ='".$_POST['datos']['respaldo']."' ";
			$web->query($sql);
			header('Location: salas.php');
		}
		else
		{
			relleno($web,'<label style= "color:red">Supera el limite</label>');
		}
	}
}
else
{
	$web->checklogin();	
}

	function deleteTupla($cvesala,$horario,$web)
	{
		$sql="delete from evaluacion where cvesala='".$cvesala."' and horario='".$horario."' ";
		$web->query($sql);
		$sql="delete from lectura where cvesala='".$cvesala."' and horario='".$horario."' ";
		$web->query($sql);
	}

	function combo($cvesala,$web)
	{
		$sql="select cveestado from sala where cvesala='".$cvesala."'";

		$datos_rs = $web->DB->GetAll($sql);
		$cveEstado=$datos_rs[0]["cveestado"];

		$sql="select * from estado ";
		$datos_rs = $web->DB->GetAll($sql);		

		$combito='<select name="datos[cveestado]" class="form-control" id="exampleInputEmail3" id="producto">';
		for ($i=0; $i < count($datos_rs); $i++) { 
			 if($datos_rs[$i][0] == $cveEstado)
			 {
			 	$combito.='<option value="'.$datos_rs[$i][0].'" selected>'.$datos_rs[$i][1].'</option>';
			 }
			 else
			 {
			 	$combito.='<option value="'.$datos_rs[$i][0].'">'.$datos_rs[$i][1].'</option>';
			 }
		}
			 	$combito.='</select>';
			 	return $combito;
	}

function relleno($web,$msjlimite="")
{
	if(isset($_GET['info2']))
		{
			$cve = $_GET['info2'];
			$cve2 = $_GET['info3'];
		}
	else
	{
			$cve = $_POST['datos']['guardar'];
			$cve2 = $_POST['datos']['respaldo'];
	}

		$sql = "select * from sala where cvesala='".$cve."' and horario='".$cve2."'";
		$datos_rs=$web->DB->GetAll($sql);

		$horario = $datos_rs[0]['horario'];
		$horaInicial=substr($horario, 0, 5);
		$horaFinal=substr($horario, 6, 10);

		$ubicacion = $datos_rs[0]['ubicacion'];

		$limite = $datos_rs[0]['limite'];

		$web->smarty->assign("cve2", $cve2);	
		$web->smarty->assign("msjlimite", $msjlimite);	
		$web->smarty->assign("cve", $cve);	
		$web->smarty->assign("horaInicial", $horaInicial);	
		$web->smarty->assign("horaFinal", $horaFinal);	
		$web->smarty->assign("ubicacion", $ubicacion);
		$web->smarty->assign("combo", combo($cve, $web));
		$web->smarty->assign("limite", $limite);	
		$web->smarty->display("updatesalas.html");	
}
 ?>