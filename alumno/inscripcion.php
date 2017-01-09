<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'U') {
    $web->checklogin();
}

$grupos = $web->grupos($_SESSION['cveUser']);
$web->iniClases('usuario', "index inscripcion");
$web->smarty->assign('grupos', $grupos);

$cveperiodo = $web->periodo();
if($cveperiodo == "") {
  $web->smarty->assign('alert', 'danger');
  $web->smarty->assign('msg', 'No hay periodos actuales');
  $web->smarty->display("inscripcion.html");
  die();
}

if(isset($_GET['info'])) {
  
  $sql = "select * from laboral 
  where cveletra in (select cve from abecedario where letra=?)
    and cveperiodo=?";
  $datos = $web->DB->GetAll($sql, array($_GET['info'], $cveperiodo));
  
  if(!isset($datos[0])) {
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', 'No modifique la estructura de la interfaz');
    $web->smarty->display("inscripcion.html");
    die();
  }
  
  $query = "select * from lectura where nocontrol=? and cveletra in 
    (select cve from abecedario where cve in 
    (select cveletra from laboral where cveletra=? and cveperiodo=?))";
  $alumno = $web->DB->GetAll($query, array($_SESSION['cveUser'], $datos[0]['cveletra'], $cveperiodo));
  
  if(isset($alumno[0])) {
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', 'Ya está inscrito');
    $web->smarty->display("inscripcion.html");
    die();
  }
  
  $sql = "INSERT INTO lectura(nocontrol, cveletra) values(?,?)";
  if($web->query($sql, array($_SESSION['cveUser'], $datos[0]['cveletra']))) {
    $cvelectura = $web->DB->GetAll($query, array($_SESSION['cveUser'], $datos[0]['cveletra'], $cveperiodo));
    
    $sql = "INSERT INTO evaluacion(comprension, motivacion, reporte, tema, participacion, terminado, cvelectura) values(0, 0, 0, 0, 0, 0,?)";
    $web->query($sql, $cvelectura[0]['cvelectura']);
  }
  
  die();
  header('Location: vergrupos.php');
    
}

$sql = "select distinct letra, laboral.nombre as \"nombre_grupo\", laboral.cvesala as \"cvesala\", ubicacion, usuarios.nombre as \"nombre_promotor\" from laboral
  inner join abecedario on abecedario.cve = laboral.cveletra
  inner join sala on sala.cvesala = laboral.cvesala
  inner join usuarios on laboral.cvepromotor = usuarios.cveusuario
  where laboral.cveperiodo=? order by letra";
$web->DB->SetFetchMode(ADODB_FETCH_ASSOC);
$datos = $web->DB->GetAll($sql, $cveperiodo);
$datos = array('data'=>$datos);

for ($i = 0; $i < sizeof($datos['data']); $i++) {
	 $datos['data'][$i]['letra'] = "<a href='inscripcion.php?info=".$datos['data'][$i]['letra']."'>".$datos['data'][$i]['letra']."</a>";
}

$web->DB->SetFetchMode(ADODB_FETCH_NUM); 
$datos = json_encode($datos);

$file = fopen("inscripcion.txt", "w");
fwrite($file, $datos);

$web->smarty->assign('datos', $datos);
$web->smarty->display("inscripcion.html");
