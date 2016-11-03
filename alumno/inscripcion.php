<?php
	include("../sistema.php");

	if ($_SESSION['roles'] !='U') {
		$web->checklogin();
	}

	$grupos= $web->grupos($_SESSION['cveUser']);
	$web->iniClases('usuario', "index inscripcion");
	$web->smarty->assign('grupos',$grupos);

	if(isset($_POST['datos']['tipo']))
	{
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

			if($date1 >= $date2 && $date1 < $date3) {
				$cveperiodo = $datos_rs[$cont]['cveperiodo'];
			}
			$cont++;
		}

		$campo=$_POST['datos']['tipo'];
		$seleccion=$_POST['datos'][$campo];
		$inners="from lectura inner join usuarios on usuarios.cveusuario= lectura.cvepromotor
						 			  inner join periodo on periodo.cveperiodo=lectura.cveperiodo
						 			  inner join abecedario on abecedario.cve=lectura.cveletra
						 			  inner join sala on lectura.cvesala=sala.cvesala ";
		if($campo!="ubicacion")
			$sql="select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion
						 ".$inners."where lectura.".$campo."='".$seleccion."' and numalumnos <=15 and lectura.cveperiodo='".$cveperiodo."' and nocontrol in (select nocontrol from lectura where nocontrol ='".$_SESSION['cveUser']."')";
		else
			$sql="select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion
						 ".$inners."where ubicacion = '".$seleccion."' and numalumnos <=15 and lectura.cveperiodo='".$cveperiodo."' and cvelectura in (select cvelectura from lectura where nocontrol ='".$_SESSION['cveUser']."')";

		$result = $web->DB->GetAll($sql);
		if(count($result) > 0) {
			$web->smarty->assign('table', '<div class="alert alert-danger" role="alert"> Ya estás inscrito </div>');
		} else {

			if($campo!="ubicacion")
				$sql="select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion
							 ".$inners."where lectura.".$campo."='".$seleccion."' and numalumnos <=15 and lectura.cveperiodo='".$cveperiodo."' and nocontrol not in (select nocontrol from lectura where nocontrol ='".$_SESSION['cveUser']."')";
			else
				$sql="select distinct letra,nombre,lectura.cvesala,fechainicio,fechafinal,lectura.horario,ubicacion
							 ".$inners."where ubicacion = '".$seleccion."' and numalumnos <=15 and lectura.cveperiodo='".$cveperiodo."' and cvelectura not in (select cvelectura from lectura where nocontrol ='".$_SESSION['cveUser']."')";

			$table=$web->showTable($sql,"verlecturas",4,1,'sala');
			$web->smarty->assign('table',$table);
		}

		$sql="select distinct nombre,cvepromotor from lectura inner join usuarios on usuarios.cveusuario = lectura.cvepromotor";
		$combopromo=combo($sql,"cvepromotor",$web);
		$sql="select distinct cvesala from sala";
		$combosala=combo($sql,"cvesala",$web);
		$sql="select distinct horario from sala ";
		$combohorario=combo($sql,"horario",$web);
		$sql="select distinct ubicacion from sala";
		$comboubicacion=combo($sql,"ubicacion",$web);

		$web->smarty->assign('combosala',$combosala);
		$web->smarty->assign('combohorario',$combohorario);
		$web->smarty->assign('comboubicacion',$comboubicacion);
		$web->smarty->assign('combopromo',$combopromo);

		$web->smarty->display("inscripcion.html");

	} else {

		if(isset($_GET['info4'])) {
			$cvepromotor=$_SESSION['cveUser'];
			$cvesala=$_GET['info1'];
			$nocontrol='00000000';
			$cveperiodo=$_GET['info4'];
			$cvehorario=$_GET['info2'];
			$sql="select COALESCE(MAX(cveletra),0) as cveletra from lectura where cvepromotor= '".$cvepromotor."'";
			$datos_rs =$web->DB->GetAll($sql);
			$letra=$datos_rs[0]['cveletra'];
			$sql="insert into lectura (cvepromotor,cvesala,nocontrol,cveperiodo,horario,cvelibro,cveletra) values ('".$cvepromotor."','".$cvesala."','".$nocontrol."',".$cveperiodo.",'".$cvehorario."',0,". ($letra + 1) .")";
			$web->query($sql);
			$sql="insert into evaluacion (cvepromotor,cvesala,nocontrol,cveperiodo,horario,cveletra,comprension,motivacion,reporte,tema,participacion,terminado) values ('".$cvepromotor."','".$cvesala."','".$nocontrol."',".$cveperiodo.",'".$cvehorario."',".($letra + 1) .",50,0,0,0,0,0)";
			$web->query($sql);
			$sql="update sala set where cvesala= '".$cvesala."' and horario='".$cvehorario."'";
			$web->query($sql);

		} else {
			$sql="select distinct nombre,cvepromotor from lectura inner join usuarios on usuarios.cveusuario = lectura.cvepromotor";
			$combopromo=combo($sql,"cvepromotor",$web);
			$sql="select distinct cvesala from sala";
			$combosala=combo($sql,"cvesala",$web);
			$sql="select distinct horario from sala ";
			$combohorario=combo($sql,"horario",$web);
			$sql="select distinct ubicacion from sala";
			$comboubicacion=combo($sql,"ubicacion",$web);

			$web->smarty->assign('table',"");
			$web->smarty->assign('combosala',$combosala);
			$web->smarty->assign('combohorario',$combohorario);
			$web->smarty->assign('comboubicacion',$comboubicacion);
			$web->smarty->assign('combopromo',$combopromo);
			$web->smarty->display("inscripcion.html");
		}
	}

//------------------------------------------------------------------------------------------------------------------------
	function combo($sql,$campo,$web)
		{
			$datos=$web->DB->GetAll($sql);
			if (isset($datos[0]))
			{
				$web->query($sql);
				$nombrescolumnas=array_keys($web->rs->fields);
				$datos_rs = $web->DB->GetAll($sql);
				$combito='<select id="'.$campo.'" name="datos['.$campo.']" class="form-control" id="exampleInputEmail3" id="producto" style ="display:none">';

				for ($i=0; $i <count($datos_rs); $i++)
					 {
					 	$combito.='<option value="'.$datos_rs[$i][$campo].'">'.$datos_rs[$i][$nombrescolumnas[0]].' </option>';
					 }

					 	$combito.='</select>';
						$estado='style ="display:block"';
			}
			else
			{
					 	$combito='<label id="'.$campo.'" name="datos['.$campo.']" class="form-control" id="exampleInputEmail3" id="producto" style ="display:none"> No hay elementos</label>';
					 	$estado='style ="display:none"';
			}
			$web->smarty->assign('estado',$estado);
			return $combito;
		}
 ?>
