<?php

include "../sistema.php";

if ($_SESSION['roles'] != 'P') {
    $web->checklogin();
}

$web->iniClases('promotor', "index grupos grupo");
$grupos = $web->grupos($_SESSION['cveUser']);
$web->smarty->assign('grupos', $grupos);

$cveperiodo = $web->periodo();
if ($cveperiodo == "") {
  message('danger', 'No hay periodos actuales', $web);  
}

if(isset($_GET['accion'])) {
  
  switch($_GET['accion']) {
    
    case 'libros':
      if (!isset($_GET['info'])) {
        message('danger', 'Información incompleta', $web);
      }
      
      $sql = "select * from lectura where cvelectura=?";
      $lectura = $web->DB->GetAll($sql, $_GET['info']);
      if(!isset($lectura[0])) {
        message('danger', 'No altere la estructura de la interfaz', $web);
      }
      
      $sql = "select * from lista_libros 
        inner join lectura on lista_libros.cvelectura = lectura.cvelectura
        inner join libro on libro.cvelibro = lista_libros.cvelibro
        inner join estado on lista_libros.cveestado = estado.cveestado
        where nocontrol=? and lectura.cveperiodo=?
        order by libro.cvelibro";
      $libros = $web->DB->GetAll($sql, array($lectura[0]['nocontrol'], $cveperiodo));
      if(!isset($libros[0])) {
        $web->simple_message('warning', 'No hay libros registrados');
      } else {
        $web->smarty->assign('libros', $libros);
      }
      
      $web->iniClases('promotor', "index grupos libros");
      $web->smarty->display('grupo.html');
      die();
      break;  
    
    case 'reporte':
      
      break;
  }
}

if (!isset($_GET['info1'])) {
  message('danger', 'Información incompleta', $web);
}
$grupo = $_GET['info1'];

$sql = "select cvepromotor from laboral where cveletra in 
(select cve from abecedario where letra=?) and cveperiodo=?";
$grupo_promotor = $web->DB->GetAll($sql, array($grupo, $cveperiodo));

if(!isset($grupo_promotor[0])) {
  message('danger', 'No existe el grupo en este periodo', $web);
} 

if($grupo_promotor[0]['cvepromotor'] != $_SESSION['cveUser']){
  message('danger', 'Permiso denegado', $web);
}

if(isset($_POST['datos'])) {
  if (!isset($_POST['datos']['nocontrol']) ||
      !isset($_POST['datos']['comprension']) ||
      !isset($_POST['datos']['motivacion']) ||
      !isset($_POST['datos']['reporte']) ||
      !isset($_POST['datos']['tema']) ||
      !isset($_POST['datos']['participacion']) || 
      !isset($_POST['datos']['terminado']) ||
      !isset($_POST['datos']['cveeval']) || 
      !is_numeric($_POST['datos']['nocontrol']) ||
      !is_numeric($_POST['datos']['comprension']) ||
      !is_numeric($_POST['datos']['motivacion']) ||
      !is_numeric($_POST['datos']['reporte']) ||
      !is_numeric($_POST['datos']['tema']) ||
      !is_numeric($_POST['datos']['participacion']) || 
      !is_numeric($_POST['datos']['terminado']) ||
      !is_numeric($_POST['datos']['cveeval'])) {
        message("danger", "No alteres la estructura de la interfaz", $web);
  }
  
  $sql = "select * from evaluacion 
    inner join lectura on lectura.cvelectura = evaluacion.cvelectura
    inner join abecedario on abecedario.cve = lectura.cveletra
    inner join laboral on abecedario.cve = laboral.cveletra
    where cvepromotor=? and cveeval=?";
  $eval = $web->DB->GetAll($sql, array($_SESSION['cveUser'], $_POST['datos']['cveeval']));
  if(!isset($eval[0])) {
    message('danger', 'Permiso denegado', $web);
  }
  
  $sql = "update evaluacion set comprension=?, motivacion=?, reporte=?, tema=?, participacion=?, terminado=? where cveeval=?";
  $parametros = array(
    $_POST['datos']['comprension'], 
    $_POST['datos']['motivacion'], 
    $_POST['datos']['reporte'],
    $_POST['datos']['tema'],
    $_POST['datos']['participacion'],
    $_POST['datos']['terminado'],
    $_POST['datos']['cveeval']);
  $web->query($sql, $parametros);
}

//Info de encabezado
$sql = "select distinct letra, nombre, ubicacion, fechainicio, fechafinal from laboral 
inner join sala on laboral.cvesala = sala.cvesala 
inner join abecedario on laboral.cveletra = abecedario.cve 
inner join periodo on laboral.cveperiodo= periodo.cveperiodo
where cvepromotor=? and laboral.cveperiodo=? and letra=?
order by letra";
$datos_rs = $web->DB->GetAll($sql, array($_SESSION['cveUser'], $cveperiodo, $grupo));
$web->smarty->assign('info', $datos_rs[0]);

//Datos de la tabla = Alumnos
$sql   = "select distinct usuarios.nombre, comprension, motivacion, participacion, 
terminado, asistencia, actividades, nocontrol, cveeval, lectura.cveperiodo, lectura.cvelectura, asistencia from lectura 
inner join evaluacion on evaluacion.cvelectura = lectura.cvelectura 
inner join abecedario on lectura.cveletra = abecedario.cve 
inner join usuarios on lectura.nocontrol = usuarios.cveusuario 
inner join laboral on abecedario.cve = laboral.cveletra  	
where letra=? and lectura.cveperiodo=?
order by usuarios.nombre";
$datos = $web->DB->GetAll($sql, array($grupo, $cveperiodo));
if(!isset($datos[0])) {
  $web->simple_message('warning', 'No hay alumnos inscritos');
  $web->smarty->display("grupo.html");
  die();
}

$web->smarty->assign('bandera', 'true');
$web->smarty->assign('cveperiodo', $cveperiodo);
$web->smarty->assign('datos', $datos);
$web->smarty->assign('grupo', $grupo);
$web->smarty->display("grupo.html");

/**
 * Ahorro de código para mostrar mensajes al usuario
 * @param  String $alert warning | danger principalmente
 * @param  String $msg   Texto a mostrar al usuario
 * @param  Class  $web   Objeto para hacer uso de smarty
 */
function message($alert, $msg, $web) {
  $web->simple_message($alert, $msg);
  $web->smarty->display("grupo.html");
  die();
}