<?php 
include("../sistema.php");

if ($_SESSION['roles'] =='P')
{
	$web->iniClases('promotor', "index salas");
	$grupos= $web->grupos($_SESSION['cveUser']);
	$web->smarty->assign('grupos',$grupos);

	if(isset($_POST['datos']['tipo']))
	{
      $cveperiodo=periodo($web);
      $campo=$_POST['datos']['tipo'];
      $seleccion=$_POST['datos'][$campo];
        
      $sql="select s.cvesala AS \"ID\", s.horario AS \"Horario\", s.ubicacion AS \"Ubicación\", s.limite AS \"Límite\"  from sala s where  ".$campo."='".$seleccion."' and (s.cvesala not in (select cvesala from lectura where cveperiodo = ".periodo($web).") or s.horario not in (select horario from lectura where cveperiodo = ".periodo($web)."))";
      //echo $sql;
      $table=$web->showTable($sql,"consulta",4,1,'sala',"&info4=".$cveperiodo);
      $web->smarty->assign('table',$table);

      $sql="select distinct s.cvesala from sala s where s.cvesala not in (select cvesala from lectura where cveperiodo = ".periodo($web).") or s.horario not in (select horario from lectura where cveperiodo = ".periodo($web).") 
        order by s.cvesala";
      $combosala=combo($sql,"cvesala",$web);

      $sql="select distinct s.horario from sala s where s.cvesala not in (select cvesala from lectura where cveperiodo = ".periodo($web).") or s.horario not in (select horario from lectura where cveperiodo = ".periodo($web).")
       order by s.horario";
      $combohorario=combo($sql,"horario",$web);

      $sql="select distinct s.ubicacion from sala s where s.cvesala not in (select cvesala from lectura where cveperiodo = ".periodo($web).") or s.horario not in (select horario from lectura where cveperiodo = ".periodo($web).") 
        order by s.ubicacion";
      $comboubicacion=combo($sql,"ubicacion",$web);

      $msjboton="";		
      $web->smarty->assign('combosala',$combosala);
      $web->smarty->assign('combohorario',$combohorario);
      $web->smarty->assign('comboubicacion',$comboubicacion);
      $web->smarty->assign('msjboton',"<label style='color:red;'>".$msjboton."</label>");
      $web->smarty->display("promosala.html");
	}
	else
	{
		$msjboton="";		
		if (isset($_POST['datos']))
		{
			$msjboton="No se ha seleccionado nada";
		}

		periodo($web);
		$sql="select distinct s.cvesala from sala s where s.cvesala not in (select cvesala from lectura where cveperiodo = ".periodo($web).") or s.horario not in (select horario from lectura where cveperiodo = ".periodo($web).")
         order by s.cvesala";
		$combosala=combo($sql,"cvesala",$web);
      
		$sql="select distinct s.horario from sala s where s.cvesala not in (select cvesala from lectura where cveperiodo = ".periodo($web).") or s.horario not in (select horario from lectura where cveperiodo = ".periodo($web).") 
          order by s.horario";
		$combohorario=combo($sql,"horario",$web);
      
		$sql="select distinct s.ubicacion from sala s where s.cvesala not in (select cvesala from lectura where cveperiodo = ".periodo($web).") or s.horario not in (select horario from lectura where cveperiodo = ".periodo($web).")
         order by s.ubicacion";
		$comboubicacion=combo($sql,"ubicacion",$web);

		$web->smarty->assign('combosala',$combosala);
		$web->smarty->assign('combohorario',$combohorario);
		$web->smarty->assign('comboubicacion',$comboubicacion);
		$web->smarty->assign('table',"");
		$web->smarty->assign('msjboton',"<label style='color:red;'>".$msjboton."</label>");
		$web->smarty->display("promosala.html");

	}
	
} else {
	$web->checklogin();	
}

function combo($sql,$campo,$web)
{

    $web->query($sql);
    $datos=$web->DB->GetAll($sql);
    if (isset($datos[0])) 
    {
        $nombrescolumnas=array_keys($web->rs->fields);
        $datos_rs = $web->DB->GetAll($sql);
        $cve=$datos_rs[0][$campo];
        $combito='<select id="'.$campo.'" name="datos['.$campo.']" class="form-control" id="exampleInputEmail3" id="producto" style ="display:none">';

        for ($i=0; $i <count($datos_rs); $i++)  
             {
                $combito.='<option>'.$datos_rs[$i][$nombrescolumnas[0]].'</option>';
             }

                $combito.='</select>';	
        $estado='style ="display:block"';
    }
    else
    {
        $combito='<label id="'.$campo.'" name="datos['.$campo.']" class="form-control" id="exampleInputEmail3" id="producto" style ="display:none"> No hay elementos </label>';
        $estado='style ="display:none"';
    }
    $web->smarty->assign('estado',$estado);
    return $combito;

}

//---------------------------------------------------------------------------------------
	function periodo($web)
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

					if($date1 >= $date2 && $date1 <= $date3)
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