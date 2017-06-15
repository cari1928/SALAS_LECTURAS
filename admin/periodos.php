<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

$cveperiodo = $web->periodo();
if ($cveperiodo == "") {
 // message("index salas", "No hay periodo actual", $web);
  $web->smarty->assign('alert', 'warning');
  $web->smarty->assign('msg', 'No hay periodo actual');
}

if (isset($_GET['accion'])) {

  switch ($_GET['accion']) {

    case 'form_insert':
      $web->iniClases('admin', "index periodos nuevo");
      $web->smarty->display('form_periodos.html');
      die();
      break;

    case 'form_update':
      if (!isset($_GET['info2'])) {
        $web->simple_message('danger', 'No se está recibiendo la información necesaria para continuar con la operación');
        break;
      }

      $sql      = "select * from periodo where cveperiodo=?";
      $periodos = $web->DB->GetAll($sql, $_GET['info2']);
      if (sizeof($periodos) == 0) {
        $web->simple_message('danger', 'No existe el periodo');
        break;
      }

      $web->iniClases('admin', "index periodos actualizar");
      $web->smarty->assign('periodos', $periodos[0]);
      $web->smarty->display('form_periodos.html');
      die();
      break;

    case 'insert':
      //verifica la existencia de los campos
      if (!isset($_POST['datos']['fechaInicio']) ||
        !isset($_POST['datos']['fechaFinal'])) {
        message("index periodos nuevo", "No alteres la estructura de la interfaz", $web);
      }

      //verifica que los campos contengan algo
      if ($_POST['datos']['fechaInicio'] == "" ||
        $_POST['datos']['fechaFinal'] == "") {
        message("index periodos nuevo", "Llena todos los campos", $web);
      }
      
      $web->DB->startTrans();
      $sql = "INSERT INTO periodo (fechainicio, fechafinal) values(?, ?)";
      $parameters = array($_POST['datos']['fechaInicio'], $_POST['datos']['fechaFinal']);
      $error = $web->query($sql, $parameters);
      $sql = "select * from periodo where fechainicio = ? and fechafinal = ?";
      $cveperiodoNuevo = $web->DB->GetAll($sql, $parameters);
      if(isset($cveperiodoNuevo[0]))
      {
        mkdir("../periodos/" . $cveperiodoNuevo[0][2] , 0777);
        mkdir("../pdf/" . $cveperiodoNuevo[0][2] , 0777);
      }
      //si hubo algún problema:
      if($web->DB->HasFailedTrans()) {
        //si el msg de error contiente periodouq:
        if(strpos($error, 'periodouq') > 0) {
          message("index periodos nuevo", "Registro duplicado", $web);
        } else {
          message("index periodos nuevo", "No alteres la estructura de la interfaz", $web);
        }
        $web->DB->CompleteTrans();
        break;
      }
      $web->DB->CompleteTrans();
      header('Location: periodos.php');
      break;

    case 'update':
      $web->iniClases('admin', "index periodos");
      
      //verifica la existencia de los campos
      if (!isset($_POST['datos']['fechaInicio']) ||
        !isset($_POST['datos']['fechaFinal']) ||
        !isset($_POST['cveperiodo'])) {
        $web->simple_message('danger', 'Hacen falta datos para continuar');
        break;
      }
      //verifica que la cveperiodo sea válida
      $sql = "select * from periodo where cveperiodo=?";
      $periodo = $web->DB->GetAll($sql, $_POST['cveperiodo']);
      if(!isset($periodo[0])) {
        $web->simple_message('danger', 'No altere la estructura de la interfaz');
        break;
      }
      $cveperiodo = $_POST['cveperiodo'];
      
      //verifica que los campos contengan algo
      if ($_POST['datos']['fechaInicio'] == "" ||
        $_POST['datos']['fechaFinal'] == "") {
        message("index periodos actualizar", "Llena todos los campos", $web, $periodo);
      }

      $web->DB->startTrans();
      $sql = "update periodo set fechainicio=?, fechafinal=? where cveperiodo=?";
      $parameters = array(
        $_POST['datos']['fechaInicio'],
        $_POST['datos']['fechaFinal'],
        $_POST['cveperiodo']);
      $error = $web->query($sql, $parameters);
      
      //si hubo algún problema:
      if($web->DB->HasFailedTrans()) {
        //si el msg de error contiente periodouq:
        if(strpos($error, 'periodouq') > 0) {
          message("index periodos actualizar", "Registro duplicado", $web, $periodo);
        } else {
          message("index periodos actualizar", 'No fue posible realizar el cambio', $web, $periodo);
        }
        $web->DB->CompleteTrans();
        break;
      }
      $web->DB->CompleteTrans();
      header('Location: periodos.php');
      break;

    case 'delete':
      delete_lapse($web);
      break;
      
    case 'historial':
      $web->iniClases('admin', "index historial-periodos");
      $web->smarty->assign('bandera', 'historial');
  }
} else {
  $web->iniClases('admin', "index periodos");   
}

//para otro tipo de errores, cuando periodos.php es llamado desde algún header
if(isset($_GET['e'])) {
  switch ($_GET['e']) {
    case 1:
      $web->simple_message('danger', 'No fue posible generar el reporte, hacen falta datos');
      break;
    case 2:
      $web->simple_message('danger', 'No fue posible generar el reporte, hay error con los datos seleccionados');
      break;
  }
}

$sql      = 'select cveperiodo, fechainicio, fechafinal from periodo order by cveperiodo';
$web->DB->SetFetchMode(ADODB_FETCH_NUM);
$periodos = $web->DB->GetAll($sql);
if (!isset($periodos[0])) {
  $web->simple_message('danger', "No hay periodos registrados");
  $web->smarty->display("periodos.html");
}

$periodos = array('data' => $periodos);

//se preparan los campos extra (eliminar y actualizar)
for ($i = 0; $i < sizeof($periodos['data']); $i++) {
  //eliminar
  $periodos['data'][$i][3] = "periodos.php?accion=delete&info1=" . $periodos['data'][$i][0];
  //editar
  $periodos['data'][$i][4] = "<center><a href='periodos.php?accion=form_update&info2=" . $periodos['data'][$i][0] . "'><img src='../Images/edit.png'></a></center>"; 
  
  if(isset($_GET['accion'])){
    if($_GET['accion'] == 'historial') {
      //mostrar_grupos
      $periodos['data'][$i][3] = "<center><a href='historial.php?accion=periodo&info1=" . $periodos['data'][$i][0]."'><img src='../Images/grupo.png'></a></center>";
    }  
  }
}

$web->DB->SetFetchMode(ADODB_FETCH_NUM);
$periodos = json_encode($periodos);

$file = fopen("TextFiles/periodos.txt", "w");
fwrite($file, $periodos);

$web->smarty->assign('periodos', $periodos);
$web->smarty->display("periodos.html");

/**
 * Método para mostrar el template form_alumnos cuando ocurre algún error
 * @param  String $iniClases    Ruta a mostrar en links
 * @param  String $msg          Mensaje a desplegar
 * @param  $web                 Para poder aplicar las funciones de $web
 * @param  String $cveperiodo   Usado en caso de que se trate de un formulario de actualización
 */
function message($iniClases, $msg, $web, $periodo = null)
{
  $web->iniClases('admin', $iniClases);

  $web->smarty->assign('alert', 'danger');
  $web->smarty->assign('msg', $msg);

  if ($periodo != null) {
    $web->smarty->assign('periodos', $periodo[0]);
  }

  $web->smarty->display('form_periodos.html');
  die();
}

/**
 * Elimina la info relacionada con periodos.
 * Tablas: lista_libros, evaluacion, laboral, msj, sala y perioodo
 * @param  Class  $web Objeto para poder usar smarty
 */
function delete_lapse($web)
{
  $web->iniClases('admin', "index periodos");   
  switch($web->valida_pass($_SESSION['cveUser'])) {
    case 1: 
      $web->simple_message('danger', 'No se especificó la contraseña de seguridad');
      return false;

    case 2: 
      $web->simple_message('danger', ' La contraseña de seguridad ingresada no es válida');
      return false;
  }
  
  //verifica que se haya mandado el periodo y que éste exista
  if (!isset($_GET['info1'])) {
    $web->simple_message('danger', 'No altere la estructura de la interfaz, no se especificó el periodo');
    return false;
  }
  $sql     = "select * from periodo where cveperiodo=?";
  $periodo = $web->DB->GetAll($sql, $_GET['info1']);
  if (!isset($periodo[0])) {
    $web->simple_message('danger', 'No existe el periodo');
    return false;
  }

  $web->DB->startTrans();
  //elimina de lista_libros
  $sql = "delete from lista_libros where cveperiodo=?";
  $web->query($sql, $_GET['info1']);

  //obtener los grupos y cvelectura de ese periodo
  $sql    = "select distinct cveletra from laboral where cveperiodo=? order by cveletra";
  $grupos = $web->DB->GetAll($sql, $_GET['info1']);
  for ($i = 0; $i < sizeof($grupos); $i++) {
    $sql      = "select cvelectura from lectura where cveletra=?";
    $lecturas = $web->DB->GetAll($sql, $grupos[$i]['cveletra']);

    //elimina de evaluacion y lectura por cada cvelectura
    for ($j = 0; $j < sizeof($lecturas); $j++) {
      $sql = "delete from evaluacion where cvelectura=?";
      $web->query($sql, $lecturas[$j]['cvelectura']);
      $sql = "delete from lectura where cvelectura=?";
      $web->query($sql, $lecturas[$j]['cvelectura']);
    }
  }

  //elimina de laboral, msg, sala y periodo
  $sql = "delete from laboral where cveperiodo=?";
  $web->query($sql, $_GET['info1']);
  $sql = "delete from msj where cveperiodo=?";
  $web->query($sql, $_GET['info1']);
  $sql = "delete from sala where cveperiodo=?";
  $web->query($sql, $_GET['info1']);
  $sql = "delete from periodo where cveperiodo=?";
  $web->query($sql, $_GET['info1']);
  
  if ($web->DB->HasFailedTrans()) {
    $web->simple_message('danger', 'No fue posible completar la operación');
    $web->DB->CompleteTrans();
    return false;
  }

  $web->DB->CompleteTrans();
  header('Location: periodos.php');
}
