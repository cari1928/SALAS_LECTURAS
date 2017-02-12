<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

//por si viene de historial
$flag = false;

if (isset($_GET['accion'])) {

  switch ($_GET['accion']) {

    case 'form_insert':
      show_form_insert($web);
      break;

    case 'form_update':
      show_form_update($web);
      break;

    case 'insert':
      insert_professor($web);
      break;

    case 'update':
      update_professor($web);
      break;

    case 'delete':
      delete_professor($web);
      break;

    case 'mostrar':
      show_professor_groups($web);
      break;

    case 'historial':
      $flag = show_history($web);
      break;
  }
}

//si no viene de historial
if (!$flag) {
  $web->iniClases('admin', "index promotor");

  $sql = "select u.cveusuario, u.nombre, u.correo, otro AS \"Otro\", e.nombre AS
  \"Especialidad\", eu.cveespecialidad  from usuarios u
  inner join especialidad_usuario eu on eu.cveusuario = u.cveusuario
  inner join especialidad e on e.cveespecialidad=eu.cveespecialidad
  where u.cveusuario in (select cveusuario from usuario_rol where cverol=2)
  order by u.cveusuario";
  $promotores = $web->DB->GetAll($sql);
  $sql = "select cveusuario, rol.rol from usuario_rol 
          inner join rol on rol.cverol=usuario_rol.cverol 
          where cveusuario in
          (select cveusuario from usuario_rol where cverol = 2)
          order by cveusuario";
  $roles_promotor = $web->DB->GetAll($sql);
  for($i = 0; $i<sizeof($promotores); $i++){
    $promotores[$i]['roles']="";
    for($j = 0; $j<sizeof($roles_promotor); $j++){
      if($promotores[$i]['cveusuario'] == $roles_promotor[$j]['cveusuario']){
        $promotores[$i]['roles'].=$roles_promotor[$j]['rol']."<br>";
      }
    }
  }
} else {
  $promotores = $flag; //por si viene de historial
}

$web->smarty->assign('promotores', $promotores);
$web->smarty->display("promotor.html");

/**
 * Mostrar mensajes de error en casos específicos
 * @param  String $msg        Mensaje a mostrar
 * @param  String $ruta       Ruta de la página
 * @param  String $cveusuario Número de control
 * @param  Class  $web        Objeto para usar las herramientas smarty
 * @return Error desplegado en una plantilla
 */
function errores($msg, $ruta, $cveusuario = null, $web)
{
  $web->smarty->assign('alert', 'danger');
  $web->smarty->assign('msg', $msg);
  $web->iniClases('admin', $ruta);

  $sql     = "select cveespecialidad, nombre from especialidad 
  where cveespecialidad <> 'O'";
  $combito = $web->combo($sql, null, '../');
  $web->smarty->assign('combito', $combito);

  if ($cveusuario != null) {
    $sql   = 'select * from usuarios where cveusuario=?';
    $datos = $web->DB->GetAll($sql, $cveusuario);
    $web->smarty->assign('promotores', $datos[0]);
  }

  $web->smarty->display('form_promotores.html');
  die();
}

/**
 * Elimina datos de las tablas: evaluacion, lista_libros, lectura, sala, laboral, msj,
 * usuario_rol, especialidad_usuario y usuario
 * @param  Class    $web Objeto para hacer uso de smarty
 * @return boolean  false = Mostrar mensaje de error
 */
function delete_professor($web)
{
  //se valida la contraseña
  switch ($web->valida_pass($_SESSION['cveUser'])) {
    case 1:
      $web->simple_message('danger', 'No se especificó la contraseña de seguridad');
      return false;
      break;
    case 2:
      $web->simple_message('danger', 'La contraseña de seguridad ingresada no es válida');
      return false;
      break;
  }

  //verifica que se reciben los datos necesarios
  if (!isset($_GET['info1'])) {
    $web->simple_message('danger', "No se especificó el promotor a eliminar");
    return false;
  }

  //verifica que el promotor exista
  $sql   = "select * from usuarios where cveusuario=?";
  $datos = $web->DB->GetAll($sql, $_GET['info1']);
  if (!isset($datos[0])) {
    $web->simple_message('danger', "El promotor no existe");
    return false;
  }

  //obtiene grupos del promotor
  $sql    = "select distinct cveletra, sala from laboral where cvepromotor=?";
  $grupos = $web->DB->GetAll($sql, $_GET['info1']);

  for ($i = 0; $i < sizeof($grupos); $i++) {
    //obtiene la cvelectura de cada grupo
    $sql     = "select cvelectura from lectura where cveletra=?";
    $lectura = $web->DB->GetAll($sql, $grupos[$i]['cveletra']);

    for ($j = 0; $j < sizeof($lectura); $j++) {
      //elimina de evaluacion, lista_libros y lectura
      $sql = "delete from evaluacion where cvelectura=?";
      $web->query($sql, $lectura[$j]['cvelectura']);
      $sql = "delete from lista_libros where cvelectura=?";
      $web->query($sql, $lectura[$j]['cvelectura']);
      $sql = "delete from lectura where cvelectura=?";
      $web->query($sql, $lectura[$j]['cvelectura']);
    }
  }

  //obtiene las salas que ha apartado el promotor
  $sql   = "select distinct cvesala from laboral where cvepromotor=?";
  $salas = $web->DB->GetAll($sql, $_GET['info1']);
  //elimina las salas
  for ($i = 0; $i < sizeof($salas); $i++) {
    $sql = "delete from sala where cvesala=?";
    $web->query($sql, $salas[$i]['cvesala']);
  }

  //elimina laboral, msj, usuario_rol, especialidad_usuario y promotor
  $sql = "delete from laboral where cvepromotor=?";
  $web->query($sql, $_GET['info1']);
  $sql = "delete from msj where emisor=? or receptor=?";
  $web->query($sql, array($_GET['info1'], $_GET['info1']));
  $sql = "delete from usuario_rol where cveusuario=?";
  $web->query($sql, $_GET['info1']);
  $sql = "delete from especialidad_usuario where cveusuario=?";
  $web->query($sql, $_GET['info1']);
  $sql = "delete from usuarios where cveusuario=?";
  if (!$web->query($sql, $_GET['info1'])) {
    $web->simple_message('danger', 'No se pudo completar la operación');
    return false;
  }

  header('Location: promotor.php');
}

/**
 * Muestra los grupos del profesor
 * @param  Class    $web Objeto para hacer uso de smarty
 * @return boolean  false = Mostrar mensaje de error
 */
function show_professor_groups($web)
{
  //verifica que se mandó y sea válido la cvepromotor
  if (!isset($_GET['info1'])) {
    $web->simple_message('danger', 'No altere la estructura de la interfaz, no se especificó el promotor');
    return false;
  }
  
  $web->iniClases('admin', "index promotor grupos");
  $web->smarty->assign('bandera', 'grupos');

  //viene de historial
  if (isset($_GET['info2'])) {
    $web->iniClases('admin', "index historial grupos");
    $web->smarty->assign('bandera', 'historial');
    //ya manda la cveperiodo
    $cveperiodo = $_GET['info2'];
    $web->smarty->assign('cveperiodo', $cveperiodo);
  } else {
    $cveperiodo = $web->periodo();
  }

  $sql      = "select * from usuarios where cveusuario=?";
  $promotor = $web->DB->GetAll($sql, $_GET['info1']);
  if (!isset($promotor[0])) {
    $web->simple_message('danger', 'No existe el promotor');
    return false;
  }

  if ($cveperiodo == '') {
    $web->simple_message('danger', 'No se ha iniciado un periodo nuevo');
    return false;
  }

  $sql = "select distinct letra, nombre, ubicacion, titulo, laboral.cveperiodo from laboral
  inner join abecedario on laboral.cveletra = abecedario.cve
  inner join sala on laboral.cvesala = sala.cvesala
  left join libro on laboral.cvelibro_grupal = libro.cvelibro
  where cvepromotor=? and laboral.cveperiodo=? 
  order by letra";
  $tablegrupos = $web->DB->GetAll($sql, array($_GET['info1'], $cveperiodo));

  if (!isset($tablegrupos[0])) {
    $web->simple_message('danger', 'No ha creado algún grupo');
    return false;
  }

  $sql = "select dia.cvedia, abecedario.letra, dia.nombre, horas.hora_inicial, 
  horas.hora_final from laboral
  inner join dia on dia.cvedia=laboral.cvedia
  inner join abecedario on laboral.cveletra = abecedario.cve
  inner join horas on horas.cvehoras=laboral.cvehoras
  where cvepromotor=? and laboral.cveperiodo=? 
  order by letra, dia.cvedia, horas.hora_inicial";
  $horas = $web->DB->GetAll($sql, array($_GET['info1'], $cveperiodo));

  for ($i = 0; $i < sizeof($tablegrupos); $i++) {
    $tablegrupos[$i]['horario'] = "";

    for ($j = 0; $j < sizeof($horas); $j++) {

      if ($tablegrupos[$i]['letra'] == $horas[$j]['letra']) {
        $tablegrupos[$i]['horario'] .= $horas[$j]['nombre'] . ' - ' . $horas[$j]['hora_inicial'] . ' a ' . $horas[$j]['hora_final'] . "<br>";
      }
    }
  }

  $web->smarty->assign('cveusuario', $_GET['info1']);
  $web->smarty->assign('tablegrupos', $tablegrupos);
  $web->smarty->display('grupos.html');
  die();
}

/**
 * Muestra los profesores de un periodo específico
 * @param  Class    $web Objeto para hacer uso de smarty
 * @return boolean  false = Mostrar mensaje de error
 */
function show_history($web)
{
  $web->iniClases('admin', "index historial promotor");

  $sql = "select distinct u.cveusuario ,u.nombre, u.correo, otro AS \"Otro\", e.nombre AS
  \"Especialidad\", eu.cveespecialidad  from usuarios u
  inner join especialidad_usuario eu on eu.cveusuario = u.cveusuario
  inner join especialidad e on e.cveespecialidad=eu.cveespecialidad
  inner join laboral on laboral.cvepromotor = u.cveusuario
  where u.cveusuario in (select cveusuario from usuario_rol where cverol=2)
  and cveperiodo=?
  order by u.cveusuario";
  $promotores = $web->DB->GetAll($sql, $_GET['info1']);

  if (!isset($promotores[0])) {
    header('Location: historial.php?e=1&info1=' . $_GET['info1']);
    return false;
  }

  $web->smarty->assign('cveperiodo', $_GET['info1']);
  return $promotores;
}

/**
 * Muestra el formulario para poder insertar promotores
 * @param  Class    $web Objeto para hacer uso de smarty
 * @return boolean  false = Mostrar mensaje de error
 */
function show_form_insert($web)
{
  $web->iniClases('admin', "index promotor nuevo");

  //<> Usado para no seleccionar la opción O, creo...
  $sql = "select cveespecialidad, nombre from especialidad
  where cveespecialidad <> 'O' order by nombre";
  $combito = $web->combo($sql, null, '../');

  $web->smarty->assign('combito', $combito);
  $web->smarty->display('form_promotores.html');
  die();
}

/**
 * Muestra el formulario para poder insertar promotores
 * @param  Class    $web Objeto para hacer uso de smarty
 * @return boolean  false = Mostrar mensaje de error
 */
function show_form_update($web)
{
  if (!isset($_GET['info1'])) {
    $web->simple_message('danger', "No se especifico el promotor");
    return false;
  }

  $web->iniClases('admin', "index promotor actualizar");

  $sql = 'select u.cveusuario, u.nombre AS "nombreUsuario", e.nombre, eu.cveespecialidad,
  eu.otro, u.correo from usuarios u
  inner join especialidad_usuario eu on eu.cveusuario=u.cveusuario
  inner join especialidad e on e.cveespecialidad = eu.cveespecialidad
  where u.cveusuario=?';
  $datos = $web->DB->GetAll($sql, $_GET['info1']);
  if (!isset($datos[0])) {
    $web->simple_message('danger', "No existe el promotor");
    return false;
  }

  $sql = "select cveespecialidad, nombre from especialidad
  where cveespecialidad <> 'O'
  order by nombre";
  $combito = $web->combo($sql, $datos[0]['cveespecialidad'], '../');

  $web->smarty->assign('combito', $combito);
  $web->smarty->assign('promotores', $datos[0]);
  $web->smarty->display('form_promotores.html');
  die();
}

/**
 * Inserta un profesor nuevo
 * @param  Class    $web Objeto para hacer uso de smarty
 * @return boolean  false = Mostrar mensaje de error
 */
function insert_professor($web) {
  global $cveperiodo;
  $usuario = '';
  
  if (!isset($_POST['datos']['usuario']) ||
    !isset($_POST['datos']['nombre']) ||
    !isset($_POST['datos']['correo']) ||
    !isset($_POST['datos']['contrasena']) ||
    !isset($_POST['datos']['confcontrasena'])) {
    errores('No alteres la estructura de la interfaz', 'index promotor nuevo', $web);
  }

  if (($_POST['datos']['usuario']) == '' ||
      ($_POST['datos']['nombre']) == '' ||
      ($_POST['datos']['correo']) == '' ||
      ($_POST['datos']['contrasena']) == '' ||
      ($_POST['datos']['confcontrasena'] == '')) {
      errores('Llene todos los campos', 'index promotor nuevo', $web);
  }

  if (strlen($_POST['datos']['usuario']) != 13) {
    errores('La longitud del usuario debe de ser de 13 caracteres', 'index promotor nuevo', null, $web);
  }

  if (!$web->valida($_POST['datos']['correo'])) {
    errores('Ingrese un correo valido', 'index promotor nuevo', $web);
  }

  if ($_POST['datos']['contrasena'] != $_POST['datos']['confcontrasena']) {
    errores('Las contraseñas no coinciden', 'index promotor nuevo', $web);
  }

  $sql   = "select*from usuarios where correo=?";
  $datos = $web->DB->GetAll($sql, $_POST['datos']['correo']);
  if (isset($datos[0])) {
    errores('El correo ya existe', 'index promotor nuevo', $web);
  }

  $sql   = "select*from usuarios where cveusuario=?";
  $datos = $web->DB->GetAll($sql, $_POST['datos']['usuario']);
  if (isset($datos[0])) {
    errores('El usuario ya existe', 'index promotor nuevo', $web);
  }

  $usuario    = $_POST['datos']['usuario'];
  $contrasena = $_POST['datos']['contrasena'];
  $nombre     = $_POST['datos']['nombre'];
  $correo     = $_POST['datos']['correo'];

<<<<<<< HEAD
  $web->DB->startTrans();

  $sql = "INSERT INTO usuarios values (?,?,?,?,?,?,?)";
  $tmp = array($usuario, $nombre, md5($contrasena), null, $correo, null, 'Aceptado');
=======
  $sql = "INSERT INTO usuarios values (?,?,?,?,?)";
  $tmp = array($usuario, $nombre, md5($contrasena), null, $correo);
>>>>>>> 239f7a6888015cf475f21c6d18dda1ef9d958232
  if (!$web->query($sql, $tmp)) {
    $web->simple_message('danger', 'No se pudo completar la operación');
    return false;
  }
  $sql = "INSERT INTO usuario_rol values(?, ?)";
  $web->query($sql, array($usuario, 2));

  if (isset($_POST['datos']['especialidad'])) {
    
    if ($_POST['datos']['especialidad'] == 'true') {
      $sql = "insert into especialidad_usuario (cveusuario, cveespecialidad) values(?, ?)";
      $web->query($sql, array($usuario, $_POST['datos']['cveespecialidad']));
    } else {
      $sql = "insert into especialidad_usuario values(?, ?, ?)";
      $web->query($sql, array($usuario, 'O', $_POST['datos']['otro']));
    }
  } else {
    $sql = "insert into especialidad_usuario (cveusuario, cveespecialidad) values(?, ?)";
    $web->query($sql, array($usuario, $_POST['datos']['cveespecialidad']));
  }
  header('Location: promotor.php');
}

/**
 * Actualiza los datos de un profesor
 * @param  Class    $web Objeto para hacer uso de smarty
 * @return boolean  false = Mostrar mensaje de error
 */
function update_professor($web) {
  global $cveperiodo;
  $cveusuario = $_POST['cveusuario'];
  
  if (!isset($_POST['datos']['nombre']) ||
      !isset($_POST['datos']['cveespecialidad']) ||
      !isset($_POST['datos']['correo'])) {
    errores('No alteres la estructura de la interfaz', 'index promotor nuevo', $cveusuario, $web);
  }

  if (($_POST['datos']['nombre']) == '' ||
      ($_POST['datos']['cveespecialidad']) == '' ||
      ($_POST['datos']['correo']) == '') {
    errores('Llene todos los campos', 'index promotor nuevo', $cveusuario, $web);
  }

  $sql   = "select * from usuarios where cveusuario=?";
  $datos = $web->DB->GetAll($sql, $cveusuario);
  if (!isset($datos[0])) {
    errores('El promotor no existe', 'index promotor nuevo', $cveusuario, $web);
  }

  $datosp = $datos;
  if (!$web->valida($_POST['datos']['correo'])) {
    errores('Ingrese un correo valido', 'index promotor nuevo', $cveusuario, $web);
  }

  $sql            = "select correo from usuarios where cveusuario=?";
  $correo_usuario = $web->DB->GetAll($sql, $cveUsuario);

  $sql     = "select correo from usuarios where correo=?";
  $correos = $web->DB->GetAll($sql, $correo);
  if (sizeof($correos) == 1) {
    if ($correo_usuario[0]['correo'] != $correos[0]['correo']) {
      errores('El correo ya existe', 'index promotor nuevo', $cveusuario, $web);
    }
  }

  if ($_POST['datos']['pass'] == 'true') {
    
    if (!isset($_POST['datos']['contrasena']) ||
        !isset($_POST['datos']['contrasenaN']) ||
        !isset($_POST['datos']['confcontrasenaN'])) {
      errores('No altere la estructura de la interfaz', 'index promotor nuevo', $cveusuario, $web);
    }

    if (isset($_POST['datos']['contrasena']) == '' ||
        isset($_POST['datos']['contrasenaN']) == '' ||
        isset($_POST['datos']['confcontrasenaN']) == '') {
      errores('Llene todos los campos', 'index promotor nuevo', $cveusuario, $web);
    }

    if ($datosp[0]['pass'] != md5($_POST['datos']['contrasena'])) {
      errores('La contraseña es incorrecta', 'index promotor nuevo', $cveusuario, $web);
    }

    if ($_POST['datos']['confcontrasenaN'] != $_POST['datos']['contrasenaN']) {
      errores('La contraseña nueva debe coincidir con la confirmación', 'index promotor nuevo', $cveusuario, $web);
    }

    $sql = "update usuarios set nombre=?, correo= ?, pass=? where cveusuario=?";
    $tmp = array(
      $_POST['datos']['nombre'],
      $_POST['datos']['correo'],
      md5($_POST['datos']['contrasenaN']),
      $cveusuario);
      
    if (!$web->query($sql, $tmp)) {
      $web->simple_message('danger', 'No se pudo completar la operación');
      return false;
    }
  } else {
    $sql = "update usuarios set nombre=?, correo= ? where cveusuario=?";
    $tmp = array($_POST['datos']['nombre'], $_POST['datos']['correo'], $cveusuario);
    if (!$web->query($sql, $tmp)) {
      $web->simple_message('danger', 'No se pudo completar la operación');
      return false;
    }

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
      $sql             = "select cveespecialidad from especialidad_usuario 
      where cveusuario=?";
      $cveespecialidad = $web->DB->GetAll($sql, $cveusuario);
      if ($cveespecialidad[0]['cveespecialidad'] == 'O') {
        $sql = "update especialidad_usuario set cveespecialidad='O', otro=? where cveusuario=? ";
        $web->query($sql, array($_POST['datos']['otro'], $cveusuario));
      } else {
        $sql = "update especialidad_usuario set cveespecialidad=?, otro = null where cveusuario=? ";
        $web->query($sql, array($_POST['datos']['cveespecialidad'], $cveusuario));
      }
    }
  }
  header('Location: promotor.php');
}