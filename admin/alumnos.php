<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

$cveperiodo = $web->periodo();
if($cveperiodo == "") {
  message("index alumnos", "No hay periodo actual", $web);
}

if (isset($_GET['accion'])) {

  switch ($_GET['accion']) {

    case 'form_insert':
      $web->iniClases('admin', "index alumnos nuevo");

      $sql   = "select cveespecialidad, nombre from especialidad order by nombre";
      $combo = $web->combo($sql, null, '../');

      $web->smarty->assign('cmb_especialidad', $combo);
      $web->smarty->display('form_alumnos.html');
      die();
      break;

    case 'form_update':
      if (!isset($_GET['info2'])) {
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'No se especificó el alumno');
        break;
      }

      $sql    = "select * from usuarios where cveusuario=?";
      $alumno = $web->DB->GetAll($sql, $_GET['info2']);
      if (sizeof($alumno) == 0) {
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'No existe el alumno');
        break;
      }

      $sql   = "select * from especialidad order by nombre";
      $combo = $web->combo($sql, $alumno[0]['cveespecialidad']);

      $web->iniClases('admin', "index alumnos actualizar");
      $web->smarty->assign('cmb_especialidad', $combo);
      $web->smarty->assign('alumno', $alumno[0]);
      $web->smarty->display('form_alumnos.html');
      die();
      break;

    case 'insert':
      //verifica existencia de todos los campos
      if (!isset($_POST['datos']['nombre']) ||
        !isset($_POST['datos']['usuario']) ||
        !isset($_POST['datos']['contrasena']) ||
        !isset($_POST['datos']['cveespecialidad']) ||
        !isset($_POST['datos']['correo']) ||
        !isset($_POST['datos']['confcontrasena'])) {
        message("index alumnos nuevo", "No alteres la estructura de la interfaz", $web, $tmp);
      }

      //verifica que los campos contengan algo
      if ($_POST['datos']['nombre'] == "" ||
        $_POST['datos']['usuario'] == "" ||
        $_POST['datos']['cveespecialidad'] == "" ||
        // $_POST['datos']['correo'] == "" ||
        $_POST['datos']['contrasena'] == "" ||
        $_POST['datos']['confcontrasena'] == "") {
        message("index alumnos nuevo", "Llena todos los campos", $web, $tmp);
      }

      //ahora que se pasaron las pruebas anteriores, se obtienen los datos de los campos
      $nombre         = $_POST['datos']['nombre'];
      $cveUsuario     = $_POST['datos']['usuario'];
      $contrasena     = $_POST['datos']['contrasena'];
      $confcontrasena = $_POST['datos']['confcontrasena'];
      $especialidad   = $_POST['datos']['cveespecialidad'];
      $correo         = $_POST['datos']['correo'];

      if ($contrasena != $confcontrasena) {
        message("index alumnos nuevo", "Las contraseñas no coinciden", $web);
      }

      $tamano = strlen($cveUsuario);
      if ($tamano != 8 || !is_numeric($cveUsuario)) {
        message("index alumnos nuevo", "El número de control debe tener 8 caracteres numéricos", $web);
      }

      $sql      = "select cveusuario from usuarios where cveusuario=?";
      $datos_rs = $web->DB->GetAll($sql, $cveUsuario);
      if ($datos_rs != null) {
        message("index alumnos nuevo", "El usuario ya existe", $web);
      }

      if (!$web->valida($correo)) {
        message("index alumnos nuevo", "Ingrese un correo válido", $web);
      }

      $sql     = "select * from usuarios where correo=?";
      $correos = $web->DB->GetAll($sql, $correo);
      if (sizeof($correos) == 1) {
        message("index alumnos nuevo", "El correo ya existe", $web);
      }

      $query = "insert into usuarios(cveusuario, nombre, pass, cveespecialidad, rol, correo) values(?, ?, ?, ?, ?, ?)";
      $tmp   = array($cveUsuario, $nombre, md5($contrasena), $especialidad, 'U', $correo);
      if (!$web->query($query, $tmp)) {
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'No se pudo completar la operación');
        break;
      }

      header('Location: alumnos.php');
      break;

    case 'update':
      if (!isset($_POST['datos']['nombre']) ||
        !isset($_POST['datos']['usuario']) ||
        !isset($_POST['datos']['contrasena']) ||
        !isset($_POST['datos']['cveespecialidad']) ||
        !isset($_POST['datos']['correo']) ||
        !isset($_POST['datos']['contrasenaN']) ||
        !isset($_POST['datos']['confcontrasenaN'])) {
        message("index alumnos actualizar", "No alteres la estructura de la interfaz", $web, $_POST['datos']['usuario']);
      }

      if ($_POST['datos']['nombre'] == "" ||
        $_POST['datos']['usuario'] == "" ||
        $_POST['datos']['cveespecialidad'] == "" ||
        $_POST['datos']['correo'] == "") {
        message("index alumnos actualizar", "Llena todos los campos", $web, $_POST['datos']['usuario']);
      }

      $nombre          = $_POST['datos']['nombre'];
      $cveUsuario      = $_POST['datos']['usuario'];
      $contrasena      = $_POST['datos']['contrasena'];
      $contrasenaN     = $_POST['datos']['contrasenaN'];
      $confcontrasenaN = $_POST['datos']['confcontrasenaN'];
      $especialidad    = $_POST['datos']['cveespecialidad'];
      $correo          = $_POST['datos']['correo'];

      if (!$web->valida($correo)) {
        message("index alumnos actualizar", "Ingrese un correo válido", $web, $cveUsuario);
      }

      $sql            = "select correo from usuarios where cveusuario=?";
      $correo_usuario = $web->DB->GetAll($sql, $cveUsuario);

      $sql     = "select correo from usuarios where correo=?";
      $correos = $web->DB->GetAll($sql, $correo);
      if (sizeof($correos) == 1) {
        if ($correo_usuario[0]['correo'] != $correos[0]['correo']) {
          message("index alumnos actualizar", "El correo ya existe", $web, $cveUsuario);
        }
      }

      $query = "update usuarios set nombre=?, cveespecialidad=?, correo=?";

      //se activó el radio button
      if ($_POST['datos']['pass'] == 'true') {

        if ($_POST['datos']['contrasena'] == "" ||
          $_POST['datos']['contrasenaN'] == "" ||
          $_POST['datos']['confcontrasenaN'] == "") {
          message("index alumnos actualizar", "Ingrese los datos solicitados para el cambio de contraseña", $web, $cveUsuario);
        }

        $contrasena = md5($contrasena);
        $sql        = "select pass from usuarios where cveusuario=?";
        $datos_rs   = $web->DB->GetAll($sql, $cveUsuario);
        if ($datos_rs[0]['pass'] != $contrasena) {
          message("index alumnos actualizar", "La contraseña ingresada no es válida", $web, $cveUsuario);
        }

        if ($contrasenaN != $confcontrasenaN) {
          message("index alumnos actualizar", "Las contraseñas no coinciden", $web, $cveUsuario);
        }

        $query .= ", pass=? where cveusuario=?";
        $web->query($query, array($nombre, $especialidad, $correo, md5($contrasenaN), $cveUsuario));
      } else {
        //No se activó el radio button
        $query .= " where cveusuario=?";
        $web->query($query, array($nombre, $especialidad, $correo, $cveUsuario));
      }

      header('Location: alumnos.php');
      break;

    case 'delete':
      delete_student($web);
      break;
      
    case 'show':
      if (!isset($_GET['info1'])) {
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'No altere la estructura de la interfaz, no se especificó el alumno');
        break;
      }
      
      $sql    = "select * from usuarios where cveusuario=?";
      $alumno = $web->DB->GetAll($sql, $_GET['info1']);
      if (sizeof($alumno) == 0) {
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'No existe el alumno');
        break;
      }
      
      $sql = "select distinct letra, nombre, ubicacion, nocontrol from laboral 
                inner join abecedario on laboral.cveletra = abecedario.cve
                inner join lectura on lectura.cveletra = abecedario.cve 
                inner join sala on laboral.cvesala = sala.cvesala
                where nocontrol=? and laboral.cveperiodo=? order by letra";
      $tablegrupos = $web->DB->GetAll($sql, array($_GET['info1'], $cveperiodo));   
      
      if (isset($tablegrupos[0])) {
          $web->smarty->assign('tablegrupos', $tablegrupos);
      } else {
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'No ha registrado algún grupo');
      }
      
      $web->smarty->assign('table', 'alumnos');
      $web->iniClases('admin', "index alumnos grupos");
      $web->smarty->display('grupos.html');
      die();
      break;
  }
}

$web->iniClases('admin', "index alumnos");
$sql = "select usuarios.cveusuario, usuarios.nombre AS \"Usuario\", especialidad.nombre AS \"Especialidad\", correo from usuarios
    inner join especialidad_usuario on especialidad_usuario.cveusuario = usuarios.cveusuario
    inner join especialidad on especialidad_usuario.cveespecialidad = especialidad.cveespecialidad
    where usuarios.cveusuario in (select cveusuario from usuario_rol where cverol=3)
      and usuarios.cveusuario not in (select cveusuario from usuarios where cveusuario='00000000')
    order by usuarios.cveusuario";
$alumnos = $web->DB->GetAll($sql);

if (isset($alumnos[0])) {
  $web->smarty->assign('alumnos', $alumnos);

} else {
  $web->smarty->assign('alert', "warning");
  $web->smarty->assign('msg', "No hay alumnos registrados");
}
$web->smarty->display("alumnos.html");

/**
 * Método para mostrar el template form_alumnos cuando ocurre algún error
 * @param  String $iniClases Ruta a mostrar en links
 * @param  String $msg       Mensaje a desplegar
 * @param  $web              Para poder aplicar las funciones de $web
 * @param  String $cveusuario   Usado en caso de que se trate de un formulario de actualización
 */
function message($iniClases, $msg, $web, $cveusuario = null)
{
  $web->iniClases('admin', $iniClases);

  $sql   = "select cveespecialidad, nombre from especialidad";
  $combo = $web->combo($sql, null, '../');

  $web->smarty->assign('alert', 'danger');
  $web->smarty->assign('msg', $msg);
  $web->smarty->assign('cmb_especialidad', $combo);

  if ($cveusuario != null) {
    $sql    = "select * from usuarios where cveusuario=?";
    $alumno = $web->DB->GetAll($sql, $cveusuario);

    $web->smarty->assign('alumno', $alumno[0]);
  }

  $web->smarty->display('form_alumnos.html');
  die();
}

/**
 * Ahorro de código, elimina un alumno de usuarios junto con todas las tablas relacionadas
 * @param  Class $web Objeto para poder usar smarty
 */
function delete_student($web) {
  if (!isset($_GET['info1'])) {
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', 'No altere la estructura de la interfaz, no se especificó el alumno');
    return false;
  }

  $sql    = "select * from usuarios where cveusuario=?";
  $alumno = $web->DB->GetAll($sql, $_GET['info1']);
  if (sizeof($alumno) == 0) {
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', 'No existe el alumno');
    return false;
  }
  
  //obtiene la cvelectura
  $sql = "select * from lectura where nocontrol=?";
  $lectura = $web->DB->GetAll($sql, $_GET['info1']);
  
  for ($i = 0; $i < sizeof($lectura); $i++) {
    //elimina evaluacion, lista_libros y lectura con cvelectura
    $sql = "delete from evaluacion where cvelectura=?";
    $web->query($sql, $lectura[$i]['cvelectura']);
    $sql = "delete from lista_libros where cvelectura=?";  
    $web->query($sql, $lectura[$i]['cvelectura']); 
    $sql = "delete from lectura where cvelectura=?";
    $web->query($sql, $lectura[$i]['cvelectura']); 
  }
  
  //elimina los mensajes
  $sql = "delete from msj where emisor=? or receptor=?";
  $web->query($sql, array($_GET['info1'], $_GET['info1']));
  
  //elimina la especialidad
  $sql = "delete from especialidad_usuario where cveusuario=?";
  $web->query($sql, $_GET['info1']);
  
  //elimina los roles
  $sql = "delete from usuario_rol where cveusuario=?";
  $web->query($sql, $_GET['info1']);
  
  //elimina al usuario
  $sql = "delete from usuarios where cveusuario=?";
  if (!$web->query($sql, $_GET['info1'])) {
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', 'No se pudo completar la operación');
    return false;
  }

  header('Location: alumnos.php');
}
