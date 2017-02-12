<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

$cveperiodo = $web->periodo();
if ($cveperiodo == "") {
  $web->simple_message('warning', 'No hay periodo actual');
}

if(isset($_GET['accion'])) {
  switch ($_GET['accion']) {
    
    case 'form_insert':
      show_form_insert($web);
      break;
      
    case 'form_update':
      show_form_update($web);
      break;
      
    case 'insert':
      insert_admin($web);
      break;
      
    case 'update':
      update_admin($web);
      break;
  }
}

$web->iniClases('admin', "index administradores");
$sql = "select usuarios.cveusuario, usuarios.nombre, especialidad.nombre, correo from usuarios
inner join especialidad_usuario on especialidad_usuario.cveusuario = usuarios.cveusuario
inner join especialidad on especialidad_usuario.cveespecialidad = especialidad.cveespecialidad
where usuarios.cveusuario in (select cveusuario from usuario_rol where cverol=1) 
order by usuarios.cveusuario";
$web->DB->SetFetchMode(ADODB_FETCH_NUM); //cambio para crear JSON
$datos = $web->DB->GetAll($sql);
$datos = array('data' => $datos);

for ($i = 0; $i < sizeof($datos['data']); $i++) {
  //eliminar
  $datos['data'][$i][4] = "administradores.php?accion=delete&info1=" . $datos['data'][$i][0];
  //editar
  $datos['data'][$i][5] = "<center><a href='administradores.php?accion=form_update&info1=" . $datos['data'][$i][0] . "'><img src='../Images/edit.png'></a></center>"; 
}

$web->DB->SetFetchMode(ADODB_FETCH_NUM); //cambio de nuevo
$datos = json_encode($datos);
$file = fopen("TextFiles/administradores.txt", "w");
fwrite($file, $datos);

$web->smarty->assign('datos', $datos);
$web->smarty->display("administradores.html");

/**
 * Mostrar mensajes de error en casos específicos
 * @param  String $msg        Mensaje a mostrar
 * @param  String $ruta       Ruta de la página
 * @param  String $cveusuario Número de control
 * @param  Class  $web        Objeto para usar las herramientas smarty
 * @return Error desplegado en una plantilla
 */
function errores($msg, $ruta, $web, $cveusuario=null) {
  $web->simple_message('danger', $msg);
  $web->iniClases('admin', $ruta);

  $sql     = "select cveespecialidad, nombre from especialidad 
  where cveespecialidad <> 'O'";
  $cmb_especialidad = $web->combo($sql, null, '../');
  $web->smarty->assign('cmb_especialidad', $cmb_especialidad);

  if ($cveusuario != null) {
    $sql   = 'select * from usuarios where cveusuario=?';
    $datos = $web->DB->GetAll($sql, $cveusuario);
    $web->smarty->assign('administrador', $datos[0]);
  }

  $web->smarty->display('form_administradores.html');
  die();
}

function show_form_insert($web) {
  $web->iniClases('admin', "index administradores nuevo");
  
  //<> Usado para no seleccionar la opción O, creo...
  $sql = "select cveespecialidad, nombre from especialidad
  where cveespecialidad <> 'O' order by nombre";
  $combo = $web->combo($sql, null, '../');
  
  $web->smarty->assign('cmb_especialidad', $combo);
  $web->smarty->display('form_administradores.html');
  die();
}

function show_form_update($web) {
  if (!isset($_GET['info1'])) {
    $web->simple_message('danger', "No se ha especificado el administrador a modificar");
    return false;
  }
  
  $web->iniClases('admin', "index administradores actualizar");

  $sql = 'select u.cveusuario, u.nombre AS "nombreUsuario", e.nombre, eu.cveespecialidad,
  eu.otro, u.correo from usuarios u
  inner join especialidad_usuario eu on eu.cveusuario=u.cveusuario
  inner join especialidad e on e.cveespecialidad = eu.cveespecialidad
  where u.cveusuario=?';
  $datos = $web->DB->GetAll($sql, $_GET['info1']);
  // $web->debug($datos);
  if (!isset($datos[0])) {
    $web->simple_message('danger', "No existe el administrador seleccionado");
    return false;
  }
  
  $sql = "select cveespecialidad, nombre from especialidad
  where cveespecialidad <> 'O'
  order by nombre";
  $cmb_especialidad = $web->combo($sql, $datos[0]['cveespecialidad'], '../');

  $web->smarty->assign('cmb_especialidad', $cmb_especialidad);
  $web->smarty->assign('administrador', $datos[0]);
  $web->smarty->display('form_administradores.html');
  die();
}

function insert_admin($web) {
  
  if (!isset($_POST['datos']['usuario']) ||
    !isset($_POST['datos']['nombre']) ||
    !isset($_POST['datos']['cveespecialidad']) ||
    !isset($_POST['datos']['otro']) ||
    !isset($_POST['datos']['correo']) ||
    !isset($_POST['datos']['contrasena']) ||
    !isset($_POST['datos']['confcontrasena'])) {
    errores('No altere la estructura de la interfaz', 'index administradores nuevo', $web);
  }

  if (($_POST['datos']['usuario']) == '' ||
      ($_POST['datos']['nombre']) == '' ||
      ($_POST['datos']['correo']) == '' ||
      ($_POST['datos']['contrasena']) == '' ||
      ($_POST['datos']['confcontrasena'] == '')) {
      errores('Llene todos los campos', 'index administradores nuevo', $web);
  }
  
  if (strlen($_POST['datos']['usuario']) != 13) {
    errores('La longitud del RFC debe de ser de 13 caracteres', 'index administradores nuevo', $web);
  }

  if (!$web->valida($_POST['datos']['correo'])) {
    errores('Ingrese un correo valido', 'index administradores nuevo', $web);
  }

  if ($_POST['datos']['contrasena'] != $_POST['datos']['confcontrasena']) {
    errores('Las contraseñas no coinciden', 'index administradores nuevo', $web);
  }
  
  $sql   = "select * from usuarios where correo=?";
  $datos = $web->DB->GetAll($sql, $_POST['datos']['correo']);
  if (isset($datos[0])) {
    errores('El correo ingresado ya está registrado', 'index administradores nuevo', $web);
  }

  $sql   = "select * from usuarios where cveusuario=?";
  $datos = $web->DB->GetAll($sql, $_POST['datos']['usuario']);
  if (isset($datos[0])) {
    errores('El RFC ingresado ya está registrado', 'index administradores nuevo', $web);
  }
  
  $usuario    = $_POST['datos']['usuario'];
  $contrasena = $_POST['datos']['contrasena'];
  $nombre     = $_POST['datos']['nombre'];
  $correo     = $_POST['datos']['correo'];
  
  $web->DB->startTrans(); //inicia transacción
  $sql = "INSERT INTO usuarios values (?,?,?,null,?,null, ?)";
  $tmp = array($usuario, $nombre, md5($contrasena), $correo, 'Aceptado');
  $web->query($sql, $tmp);

  $sql = "INSERT INTO usuario_rol values(?, 1)";
  $web->query($sql, $usuario);
  
  if (isset($_POST['datos']['especialidad'])) {
    
    if ($_POST['datos']['especialidad'] != "") {
      $sql = "INSERT INTO especialidad_usuario (cveusuario, cveespecialidad) values(?, ?)";
      $web->query($sql, array($usuario, $_POST['datos']['cveespecialidad']));
    } else {
      $sql = "INSERT INTO especialidad_usuario values(?, 'O', ?)";
      $web->query($sql, array($usuario, $_POST['datos']['otro']));
    }
  } else {
    $sql = "INSERT INTO especialidad_usuario (cveusuario, cveespecialidad) values(?, ?)";
    $web->query($sql, array($usuario, $_POST['datos']['cveespecialidad']));
  }
  
  if($web->DB->HasFailedTrans()) { //verifica errores durante la transacción
    //falta programar esta parte para que no muestre directamente el resultado de sql
    $web->simple_message('danger', 'No fue posible completar el registro');
    $web->DB->CompleteTrans(); //termina la transacción haya sido exitosa o no
    return false;
  }
  
  $web->DB->CompleteTrans(); //termina la transacción haya sido exitosa o no
  header('Location: administradores.php');
}

function update_admin($web) {
  global $cveperiodo;
  $cveusuario = $_POST['datos']['usuario'];
  
  if (!isset($_POST['datos']['usuario']) ||
      !isset($_POST['datos']['nombre']) ||
      !isset($_POST['datos']['cveespecialidad']) ||
      !isset($_POST['datos']['otro']) ||
      !isset($_POST['datos']['correo']) ||
      !isset($_POST['datos']['pass']) ||
      !isset($_POST['datos']['contrasena']) ||
      !isset($_POST['datos']['contrasenaN']) ||
      !isset($_POST['datos']['confcontrasenaN'])) {
    errores('No altere la estructura de la interfaz', 'index administrador nuevo', $web, $cveusuario);
  }

  if ($_POST['datos']['usuario'] == '' ||
      $_POST['datos']['nombre'] == '' ||
      $_POST['datos']['cveespecialidad'] == '' ||
      $_POST['datos']['correo'] == '' ||
      $_POST['datos']['pass'] == '') {
    errores('Llene todos los campos', 'index administradores nuevo', $web, $cveusuario);
  }  
  
  $sql   = "select * from usuarios where cveusuario=?";
  $datos = $web->DB->GetAll($sql, $cveusuario);
  if (!isset($datos[0])) {
    errores('El administrador a actualizar no está registrado', 'index administradores nuevo', $web, $cveusuario);
  }
  
  $datosp = $datos;
  if (!$web->valida($_POST['datos']['correo'])) {
    errores('Ingrese un correo valido', 'index administradores nuevo', $web, $cveusuario);
  }
  
  $sql            = "select correo from usuarios where cveusuario=?";
  $correo_usuario = $web->DB->GetAll($sql, $cveUsuario);

  $sql     = "select correo from usuarios where correo=?";
  $correos = $web->DB->GetAll($sql, $correo);
  if (sizeof($correos) == 1) {
    if ($correo_usuario[0]['correo'] != $correos[0]['correo']) {
      errores('El correo ingresado ya está registrado', 'index administradores nuevo', $cveusuario, $web);
    }
  }
  
  if ($_POST['datos']['pass'] == 'true') {

    if (isset($_POST['datos']['contrasena']) == '' ||
        isset($_POST['datos']['contrasenaN']) == '' ||
        isset($_POST['datos']['confcontrasenaN']) == '') {
      errores('Llene los campos para el cambio de contraseña', 'index administradores nuevo', $web, $cveusuario);
    }

    if ($datosp[0]['pass'] != md5($_POST['datos']['contrasena'])) {
      errores('La contraseña ingresada es incorrecta', 'index administradores nuevo', $web, $cveusuario);
    }

    if ($_POST['datos']['confcontrasenaN'] != $_POST['datos']['contrasenaN']) {
      errores('La contraseña nueva debe coincidir con la confirmación', 'index administradores nuevo', $web, $cveusuario);
    }
    
    $web->DB->startTrans();

    $sql = "update usuarios set nombre=?, correo=?, pass=? where cveusuario=?";
    $tmp = array(
      $_POST['datos']['nombre'],
      $_POST['datos']['correo'],
      md5($_POST['datos']['contrasenaN']),
      $cveusuario);
    $web->query($sql, $tmp);
    
    $sql = "update usuarios set nombre=?, correo= ? where cveusuario=?";
    $tmp = array($_POST['datos']['nombre'], $_POST['datos']['correo'], $cveusuario);
    $web->query($sql, $tmp);

    if (isset($_POST['datos']['especialidad'])) {
      
      if ($_POST['datos']['especialidad'] == 'true') {
        $sql = "update especialidad_usuario set cveespecialidad=?, otro=null 
        where cveusuario=? ";
        $web->query($sql, array($_POST['datos']['cveespecialidad'], $cveusuario));
        
      } else {
        $sql = "update especialidad_usuario set cveespecialidad='O', otro=? 
        where cveusuario=? ";
        $web->query($sql, array($_POST['datos']['otro'], $cveusuario));
      }
    } else {
      
      $sql = "select cveespecialidad from especialidad_usuario where cveusuario=?";
      $cveespecialidad = $web->DB->GetAll($sql, $cveusuario);
      
      if ($cveespecialidad[0]['cveespecialidad'] == 'O') {
        $sql = "update especialidad_usuario set cveespecialidad='O', otro=? where cveusuario=? ";
        $web->query($sql, array($_POST['datos']['otro'], $cveusuario));
        
      } else {
        $sql = "update especialidad_usuario set cveespecialidad=?, otro =null where cveusuario=? ";
        $web->query($sql, array($_POST['datos']['cveespecialidad'], $cveusuario));
      }
    }
  }
  
  if($web->DB->HasFailedTrans()) {
    //falta programar esta parte para que no muestre directamente el resultado de sql
    $web->simple_message('danger', 'No fue posible completar la operación');
    $web->DB->CompleteTrans();
    return false;
  }
  
  $web->DB->CompleteTrans();
  header('Location: administradores.php');
}