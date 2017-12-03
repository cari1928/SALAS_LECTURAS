<?php
include "../sistema.php";

// echo "dar funcionalidad al boton asignar libro <br>";

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

$web = new AdminGrupoControllers;
//verifica el periodo
$cveperiodo = $web->periodo();
if ($cveperiodo == "") {
  $web->iniClases('admin', "index alumnos grupos");
  $web->simple_message('warning', 'No hay periodos actuales');
  break;
}

showMessages();

if (isset($_GET['accion'])) {
  switch ($_GET['accion']) {
    
    case 'delete_alumno':
      delete_alumno($web);
      break;
    case 'alumnos':
      mostrar_alumnos($web);
      break;
    case 'insert':
      $type = (isset($_POST['promotor'])) ? 'promotor' : 'alumno';
      insertar_libro_alumno($type);
      break;
    case 'delete':
      eliminar_libro_alumno();
      break;
    case 'delete_promotor':
      eliminar_libro_alumno('promotor');
      break;
    case 'grupos':
    case 'historial':
      mostrar_grupos_promotor();
      break;
    case 'reporte':
      ver_reporte();
      break;
    case 'index_grupos_libros':
      grupos_libros();
      break;
    case 'index_grupos':
      mostrar_alumnos_grupo();
      break;
    case 'libros':
      assign_book();
      break;
    case 'estado':
      estado();
      break;
    case 'calificar_reporte':
      calificar_reporte();
      break;
  }
}

$web->smarty->display('grupo.html');
/************************************************************************************************
 * FUNCIONES
 ************************************************************************************************/
 /**
  * Las siguientes abreviaturas muestran de qué función viene el error
  * cr = calificar_reporte
  * ee = estado
  */
 function showMessages() {
    global $web;
    
    if (isset($_GET['e'])) {
      switch ($_GET['e']) {
        case 1:
          $web->simple_message('warning', 'Falta información para continuar');
          break;
        case "ee3":
          $web->simple_message('warning', 'ERRE3 El alumno no tiene libros registrados');
          break;
        case "ee4":
          $web->simple_message('warning', 'ERRE4 El alumno no puede tener dos libros en proceso');
          break;
        case "ee5":
          $web->simple_message('danger', 'ERRE5 No se puede marcar como terminado, no cuenta con la calificación suficiente');
          break;
        case "cr1":
          $web->simple_message('danger', 'ERRCR1 No existe el grupo');
          break;
        case "cr2":
          $web->simple_message('danger', 'ERRCR2 No existe la cuenta del alumno seleccionada');
          break;
        case "cr3":
          $web->simple_message('warning', 'ERRCR3 Ingrese una calificación para el reporte');
          break;
        case "cr4":
          $web->simple_message('warning', 'ERRCR4 Ingrese una califición válida');
          break;
        case "cr5":
          $web->simple_message('danger', 'ERRCR5 No se ha podido asignar la calificación, contacte al administrador');
          break;
        case "cr6":
          $web->simple_message('warning', 'ERRCR6 El libro está en espera, no puede agregar calificación a menos que se encuentre en proceso');
          break;
        case "cr7":
          $web->simple_message('warning', 'ERRCR7 Solo es posible asignar calificación a un libro en proceso');
          break;
        case "ela2":
          $web->simple_message('danger', 'ERRELA2 El libro seleccionado no existe');
          break;
        case "ela3":
          $web->simple_message('warning', 'ERRELA3 Los datos no son correctos, contacte con el administrador');
          break;
        case "ela4":
          $web->simple_message('warning', 'ERRELA4 El libro no está para este alumno, contacte con el administrador');
          break;
        case "ela5":
          $web->simple_message('danger', 'ERRELA5 No es posible eliminar el libro, contacte con el administrador');
          break;
        case "ela5":
          $web->simple_message('danger', 'ERRELA6 No fue posible actualizar la calificación general de Reporte, contacte con el administrador');
          break;
      }
    }
    
    if(isset($_GET['m'])) {
      switch ($_GET['m']) {
        case 'cr1':
          $web->simple_message('info', 'MSGCR006 Calificaciones Actualizadas');
          break;
        case 'ela1':
          $web->simple_message('info', 'MSGELA1 Se ha eliminado el libro para este alumno exitosamente');
          break;
      }
    }
 }
 
/**
 * Muestra: Barra gris superior con los datos del grupo
 * Lista de calificaciones en base a un alumno
 * También datos sobre los libros, usa el metodo mostrarLibros()
 * @param  Class   $web Objeto para poder usar smarty
 * @return boolean False = Mostrar mensaje de error
 */
function mostrar_alumnos($web)
{
  global $cveperiodo;

  //verifica que se haya mandado el grupo
  if (!isset($_GET['info1'])) {
    $web->iniClases('admin', "index alumnos grupos");
    $web->simple_message('warning', 'Hacen falta datos para continuar');
    return false;
  }

  //verifica la existencia del grupo
  $grupo = $web->getGroup($_GET['info1'], $cveperiodo);
  if (!isset($grupo[0])) {
    $web->iniClases('admin', "index alumnos grupos");
    $web->simple_message('danger', 'El grupo seleccionado no existe');
    return false;
  }

  $web->iniClases('admin', "index alumnos grupo-" . $_GET['info1']);

  //verifica que se haya mandado el alumno
  if (!isset($_GET['info2'])) {
    return $web->simple_message('danger', 'Hace falta información para continuar');
  }

  // verifica la existencia del alumno
  $sql = "SELECT * FROM lectura
  WHERE cveletra in (SELECT cve FROM abecedario WHERE letra=?)
  and nocontrol=? and cveperiodo=?";
  $alumno = $web->DB->GetAll($sql, array($_GET['info1'], $_GET['info2'], $cveperiodo));

  if (!isset($alumno[0])) {
    $web->simple_message('danger',
      'El alumno seleccionado no está registrado por completo en el grupo');
    return false;
  }

  //Info de encabezado
  $sql = "SELECT distinct letra, laboral.nombre as \"nombre_grupo\", sala.ubicacion,
    fechainicio, fechafinal, nocontrol, usuarios.nombre as \"nombre_promotor\" FROM laboral
    INNER JOIN sala on laboral.cvesala = sala.cvesala
    INNER JOIN abecedario on laboral.cveletra = abecedario.cve
    INNER JOIN periodo on laboral.cveperiodo= periodo.cveperiodo
    INNER JOIN lectura on abecedario.cve = abecedario.cve
    INNER JOIN usuarios on laboral.cvepromotor = usuarios.cveusuario
    WHERE nocontrol=? and laboral.cveperiodo=? and letra=? and lectura.cveperiodo=?
    ORDER BY letra";
  $parameters = array($alumno[0]['nocontrol'], $cveperiodo, $_GET['info1'], $cveperiodo);
  $datos_rs   = $web->DB->GetAll($sql, $parameters);
  $web->smarty->assign('info', $datos_rs[0]);

  //para obtener el nombre del alumno
  $sql   = "SELECT cveusuario, nombre FROM usuarios WHERE cveusuario=?";
  $datos = $web->DB->GetAll($sql, $alumno[0]['nocontrol']);
  $web->smarty->assign('info2', $datos[0]);

  //Datos de la tabla = Calificaciones del alumno
  $sql = "SELECT distinct usuarios.nombre, comprension, motivacion, participacion, asistencia,
  terminado, nocontrol, cveeval, laboral.cveperiodo, lectura.cvelectura FROM lectura
  INNER JOIN evaluacion on evaluacion.cvelectura = lectura.cvelectura
  INNER JOIN abecedario on lectura.cveletra = abecedario.cve
  INNER JOIN usuarios on lectura.nocontrol = usuarios.cveusuario
  INNER JOIN laboral on abecedario.cve = laboral.cveletra
  WHERE letra=? and laboral.cveperiodo=? and nocontrol=? and lectura.cveperiodo=?
  ORDER BY usuarios.nombre";
  $parameters = array($_GET['info1'], $cveperiodo, $alumno[0]['nocontrol'], $cveperiodo);
  $datos      = $web->DB->GetAll($sql, $parameters);

  if (!isset($datos[0])) {
    $web->simple_message('warning', 'El alumno no está registrado en este grupo');
    return false;
  }

  mostrar_libros($web, $alumno); //Combo y tabla
  $web->smarty->assign('datos', $datos);
  $web->smarty->assign('alumnos', 'alumnos');
}

/**
 * Insertar en lista_libros, realizando las validaciones correspondientes
 * @param  Class   $web Objeto para hacer uso de smarty
 * @return boolean False -> Mostrar mensaje de error
 */
function insertar_libro_alumno($tipo = 'alumno')
{
  global $web, $cveperiodo;

  if (!isset($_POST['datos']['cvelibro']) ||
    !isset($_POST['datos']['cvelectura'])) {
    $web->simple_message('danger', 'ERRILA1 No altere la estructura de la interfaz');
    return false;
  }

  //verifica que el libro exista
  $libro = $web->getAll('*', array('cvelibro' => $_POST['datos']['cvelibro']), 'libro');
  if (!isset($libro[0])) {
    return $web->simple_message('danger', 'ERRILA2 El libro seleccionado no existe');
  }

  //verifica que la cvelectura exista
  $lectura = $web->getLecturaLaboral($_POST['datos']['cvelectura'], $cveperiodo);
  if (!isset($lectura[0])) {
    return $web->simple_message('danger', 'ERRILA3 No se puede continuar con la operación');
  }

  $cvelibro   = $_POST['datos']['cvelibro'];
  $cvelectura = $_POST['datos']['cvelectura'];

  //verifica si el libro ya está registrado para ese alumno
  $libro = $web->checkStudentBook($cvelibro, $cvelectura, $cveperiodo);
  if (isset($libro[0])) {
    return $web->simple_message('danger', 'ERRILA4 El libro ya está para este alumno');
  }

  $res = $web->insert('lista_libros', array(
    'cvelibro'=> $cvelibro, 'cvelectura' => $cvelectura,
    'cveperiodo' => $cveperiodo, 'cveestado' => '1'
  ));
  if(!$res) {
    $web->simple_message('danger', 'ERRILA5 No fue posible asignar el libro, contacte con el administrador');
    return false;
  }

  $redirect = array(
    'accion' => "libros",
    'info1' => $lectura[0]['letra'],
    'info2' => $lectura[0]['nocontrol']
  );
  if ($tipo == 'promotor') {
    $redirect['info3'] = $lectura[0]['cvepromotor'];
  }
  header('Location: grupo.php?' . http_build_query($redirect)); die();

}

/**
 * Elimina de lista_libros realizando las validaciones correspondientes y redirigiendo a grupo.php
 * info1 = cvelibro
 * info2 = cvelectura
 * info3 = nocontrol
 * info4 = grupo-letra
 */
function eliminar_libro_alumno($tipo = null)
{
  global $web, $cveperiodo;

  $route = ($tipo == 'promotor') ? "index promotor grupos" : "index alumnos grupos";
  $action = ($tipo == 'promotor') ? null : "index_grupos_libros";
  $web->iniClases('admin', $route);

  if (!isset($_GET['info1']) || !isset($_GET['info2']) || 
      !isset($_GET['info3']) || !isset($_GET['info4'])) {
    return $web->simple_message('danger', 'ERRELA1 Hacen falta más datos para continuar');
  }
  
  // auxiliar para obtener la ruta a mandar con header location
  $redirect = array(
    "accion" =>  $action,
    "info1" => $_GET['info2'],
    "info2" => $_GET['info3'],
    "info3" => $_GET['info4']
  );

  //verifica que el libro exista
  $libro = $web->getAll('*', array('cvelibro'=>$_GET['info1']), 'libro');
  if (!isset($libro[0])) {
    $redirect['e'] = "ela2";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }

  //verifica que la cvelectura exista
  $lectura = $web->getLectura($_GET['info2'], $cveperiodo);
  if (!isset($lectura[0])) {
    $redirect['e'] = "ela3";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }

  $cvelibro   = $_GET['info1'];
  $cvelectura = $_GET['info2'];

  //verificar que el libro está enlazado al alumno
  $lista_libros = $web->getAll('*', 
    array('cveperiodo'=>$cveperiodo, 'cvelectura'=>$cvelectura), 'lista_libros');
  if (!isset($lista_libros[0])) {
    $redirect['e'] = 'ela4';
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }
  
  $lista_libros = $web->getAll('*', 
    array('cveperiodo'=>$cveperiodo, 'cvelectura'=>$cvelectura, 'cvelibro'=>$cvelibro),
    'lista_libros'
  );
  
  $delete = $web->delete('lista_libros', array('cvelista'=>$lista_libros[0]['cvelista']));
  if(!$delete) {
    $redirect['e'] = "ela5";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }
  
  // actualizar el valor de reporte dentro de tabla evaluacion
  $report = $web->promReporte($cvelectura);
  $finished = $web->promTerminado('cvelectura', $cvelectura); 
  if(!$report || !$finished) {
    $redirect['e'] = "ela6";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }
  
  $sql = "SELECT letra, nocontrol,  laboral.cvepromotor FROM lectura
    INNER JOIN abecedario on lectura.cveletra = abecedario.cve
    INNER JOIN laboral on laboral.cveletra = abecedario.cve
    WHERE cvelectura=?";
  $lectura = $web->DB->GetAll($sql, $cvelectura);

  if ($tipo == 'promotor') {
    header('Location: grupo.php?accion=libros&info1=' . $lectura[0]['letra'] . 
      '&info2=' . $lectura[0]['nocontrol'] . '&info3=' . $lectura[0]['cvepromotor']);
  } else {
    $redirect['m'] = "ela1";
    header('Location: grupo.php?' . http_build_query($redirect));
  }
  die(); //no funciona bien sin esto
}

/**
 * Muestra la lista de alumnos de un grupo en base a un promotor
 * @param  Class   $web Objeto para hacer uso de smarty
 * @return boolean False -> Mostrar mensaje de error
 */
function mostrar_grupos_promotor()
{
  global $web, $cveperiodo;

  //verifica que se haya mandado el promotor
  if (!isset($_GET['info2'])) {
    $web->iniClases('admin', "index promotor grupos");
    $web->simple_message('warning', 'Hacen falta datos para continuar');
    return false;
  }

  //Verificar que exista el promotor
  $Aux_usuario = $web->getAll(array('cveusuario'), array('cveusuario' => $_GET['info2']), 'usuarios');
  if (!isset($Aux_usuario[0]['cveusuario'])) {
    $web->iniClases('admin', "index promotor grupos");
    $web->simple_message('danger', 'No existe el promotor');
    return false;
  }

  //verifica la existencia del grupo
  $grupo = $web->getGroupByPromotor(array($_GET['info1'], $cveperiodo, $_GET['info2']));
  if (!isset($grupo[0])) {
    $web->iniClases('admin', "index promotor grupos");
    $web->simple_message('danger', 'El grupo seleccionado no existe');
    return false;
  }

  $web->iniClases('admin', "index promotor grupo-" . $_GET['info1']);
  if ($_GET['accion'] == 'historial') {
    $web->iniClases('admin', "index historial grupo-" . $_GET['info1']);
    $web->smarty->assign('bandera', 'historial');
  }

  //Info de encabezado
  $info = $web->getInfoHeader($cveperiodo, $_GET['info1']);
  $web->smarty->assign('info', $info[0]);

  //Datos de la tabla = Calificaciones del alumno
  $datos      = $web->getStudents($_GET['info1'], $cveperiodo, $_GET['info2']);
  if (!isset($datos[0])) {
    $web->simple_message('warning', 'Aún no hay alumnos inscritos en el grupo');
    return false;
  }

  $web->smarty->assign('datos', $datos);
  $web->smarty->assign('bandera', 'index_grupos_libros');
  $web->smarty->assign('bandera_mensajes', 'true'); //para icono de mensaje en el header
  $web->smarty->assign('promotor', 'promotor');
}

/**
 * Muestra la lista de alumnos de un grupo
 * @param  Class   $web Objeto para hacer uso de smarty
 * @return boolean False -> Mostrar mensaje de error
 */
function mostrar_alumnos_grupo()
{
  global $web, $cveperiodo;

  //verifica que se haya mandado y sea válido la letra
  if (!isset($_GET['info1'])) {
    $web->simple_message('danger', 'No es posible continuar, hacen falta datos');
    return false;
  }

  //Info de encabezado
  $info          = $web->getInfoHeader($cveperiodo, $_GET['info1']);
  $grupo_alumnos = $web->getStudents($_GET['info1'], $cveperiodo, $info[0]['cvepromotor']);
  if (!isset($grupo_alumnos[0])) {
    $web->simple_message('danger', 'No hay alumnos inscritos a este grupo');
  } else {
    $web->smarty->assign('datos', $grupo_alumnos);
  }

  $web->iniClases('admin', "index grupos grupo-" . $_GET['info1']);

  $web->smarty->assign('info', $info[0]);
  $web->smarty->assign('bandera_mensajes', 'true'); //La agregue para que aparesca el icono de mensaje en el header
  $web->smarty->assign('bandera', 'index_grupos_libros');
}

/**
 * Permite descargar el reporte de cada libro
 */
function ver_reporte()
{
  global $web, $cveperiodo;
  
  if (!isset($_GET['info4'])) {

    if (!isset($_GET['info1']) || !isset($_GET['info2']) || !isset($_GET['info3'])) {
      header('Location: promotor.php'); die();
    } else {
      header('Location: grupo.php?accion=libros&info1=' . $_GET['info1'] .
        '&info2=' . $_GET['info2'] . '&info3=' . $_GET['info3'] . '&e=1');
    }
  }

  $nocontrol = explode(".", explode("_", $_GET['info4'])[1])[0];
  $dir       = $web->route_periodos . $cveperiodo . "/" . $_GET['info3'] . "/" . $nocontrol . "/" . $_GET['info4'];
  header("Content-disposition: attachment; filename=" . $_GET['info4']);
  header("Content-type: MIME");
  readfile($dir);
}

function delete_alumno($web)
{
  //se valida la contraseña
  $cveperiodo = $web->periodo();
  if ($cveperiodo == "") {
    $web->iniClases('admin', "index alumnos grupos");
    $web->simple_message('warning', 'No hay periodos actuales');
    break;
  }

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
    $web->simple_message('danger', "No se especificó el grupo");
    return false;
  }

  if (!isset($_GET['info1'])) {
    $web->simple_message('danger', "No se especifico el alumno");
    return false;
  }

  //verifica que el promotor exista
  $sql   = "SELECT * FROM usuarios WHERE cveusuario=?";
  $datos = $web->DB->GetAll($sql, $_GET['info2']);
  if (!isset($datos[0])) {
    $web->simple_message('danger', "El alumno no existe");
    return false;
  }

  //verifica la existencia del grupo
  $sql   = "SELECT * FROM laboral WHERE cveletra in (SELECT cve FROM abecedario WHERE letra = ?) and cveperiodo = ?";
  $datos = $web->DB->GetAll($sql, array($_GET['info1'], $cveperiodo));
  if (!isset($datos[0])) {
    $web->simple_message('danger', "El grupo no existe");
    return false;
  }

  //verifica la existencia del alumno en el grupo
  $sql          = "SELECT * FROM lectura WHERE nocontrol = ? AND cveperiodo = ?";
  $datos_alumno = $web->DB->GetAll($sql, array($_GET['info2'], $cveperiodo));
  if (!isset($datos_alumno[0])) {
    $web->simple_message('danger', "El alumno no esta registrado en el grupo");
    return false;
  }

  //se eliminan las listas
  //elimina de , lista_libros y lectura
  $sql = "DELETE FROM evaluacion WHERE cvelectura= ?";
  $web->query($sql, $datos_alumno[0]['cvelectura']);
  $sql = "DELETE FROM lista_libros WHERE cvelectura= ?";
  $web->query($sql, $datos_alumno[0]['cvelectura']);
  $sql = "DELETE FROM msj WHERE receptor = ? AND cveletra = ? AND cveperiodo = ?";
  $web->query($sql, array($datos_alumno[0]['nocontrol'], $datos_alumno[0]['cveletra'], $cvelectura));
  $sql = "DELETE FROM lectura WHERE cvelectura= ?";
  $web->query($sql, $datos_alumno[0]['cvelectura']);

  header('Location: grupos.php');
}

/**
 * Muestra la interfaz necesaria para que se asigne un libro al alumno
 * info1 = cvelectura
 * info2 = nocontrol
 * info3 = grupo-letra
 */
function assign_book() {
  global $web, $cveperiodo;
  
  if(!isset($_GET['info1']) || !isset($_GET['info2']) || !isset($_GET['info3'])) {
    return message('index grupos error', 'warning', 'ERRAB1, No hay datos suficientes para continuar');
  }
  
  // verifica que cvelectura exista
  // $lectura = $web->getAll('*');
  // verifica que el nocontrol exista
  // verifica que el grupo exista
  
  // aqui
  die();
}

/**
 * 
 */
function message($ruta, $type, $msg) {
  global $web;
  $web->iniClases('admin', $ruta);
  $web->simple_message($type, $msg);
}

/**
 * Muestra el listado de libros y reportes de un alumno
 * info1 = cvelectura
 * info2 = nocontrol
 * info3 = grupo-letra
 */
function grupos_libros() {
  global $web, $cveperiodo;
  
  if(!isset($_GET['info1']) || !isset($_GET['info2']) || !isset($_GET['info3'])) {
    return message('index promotor grupos', 'danger', 'ERR0015, No existen datos suficientes para continuar');
  }
  // verifica que el grupo existe en tabla lectura
  $lectura = $web->getAll('*', array('cvelectura' => $_GET['info1']), 'lectura');
  if (!isset($lectura[0])) {
    return message('index promotor grupos', 'danger', 'ERR0016, No existe el grupo');
  }

  // obtiene los libros ya asignados
  $libros = $web->getBooks(array($lectura[0]['nocontrol'], $lectura[0]['cvelectura']));
  if (!isset($libros[0])) {
    message('index promotor grupos', 'warning', 'ERR0017, No hay libros registrados');
  } else {
    $letra_subida = $web->getAll(array('letra'), array('cve' => $libros[0]["cveletra"]), 'abecedario');
    for ($i = 0; $i < count($libros); $i++) {
      $dir            = $libros[$i]["cveperiodo"] . "/" . $letra_subida[0][0] . "/" . $libros[$i]["nocontrol"] . "/";
      $nombre_fichero = $web->getFile($dir, $libros[$i]["cvelibro"], $libros[$i]["nocontrol"]);
      $dir = $web->route_periodos . $dir . $nombre_fichero;
      if (file_exists($dir)) {
        $libros[$i]["archivoExiste"] = $nombre_fichero;
      }
    
      $estados               = $web->getAll('*', null, 'estado');
      $selected              = $libros[$i]['cveestado'];
      $redireccion['accion'] = "?accion=estado";
      $redireccion['nombre'] = "&estado";
      $redireccion['pagina'] = "grupo.php";
      $redireccion['get']    = "&info=" . $_GET['info1'] . "&info2=" . $_GET['info2'] . "&info3=" . $libros[$i]['cvelista'];

      $sql                 = "SELECT * FROM estado";
      $combo               = $web->combo($sql, $libros[$i]['cveestado'], "../", array(), $redireccion);
      $libros[$i]['combo'] = $combo;
    }
    
    $web->smarty->assign('libros', $libros);
  }
  
  if (isset($_GET['aviso'])) {
    switch ($_GET['aviso']) {
      case 1:
        $web->simple_message('warning', 'No se pudo calcular el promedio de los reportes');
        break;
    }
  }
  $web->smarty->assign('btn_assign_book', true);
  $web->smarty->assign('cvelectura', $_GET['info1']);
  $web->smarty->assign('nocontrol', $_GET['info2']);
  $web->smarty->assign('grupo', $_GET['info3']);
  $web->iniClases('admin', "index grupos libros");
}

/**
 * 
 */
function estado() {
  global $web;
  
  if (!isset($_GET['estado']) || !isset($_GET['info']) || 
    !isset($_GET['info2']) || !isset($_GET['info3'])) {
    return message('index promotor grupo', 'warning', 'ERRE1 No es posible modificar el estado de este libro, contacte con el administrador');
  }
  if ($_GET['estado'] == -1) {
    return message('index promotor grupo', 'warning', 'ERRE2 Seleccione una opción válida');
  }

  $redirect = array(
    'accion' => 'index_grupos_libros',
    'info1'  => $_GET['info'],
    'info2'  => $_GET['info2'],
    'info3'  => $_GET['info3'],
  );
  if (isset($_GET['info4'])) {
    header('Location: grupo.php?' . http_build_query($redirect));die();
  }

  $estados = $web->getBookList($_GET['info'], $_GET['info2']);
  if (!isset($estados[0])) {
    $redirect['e'] = "ee3"; //El alumno no tiene libros registrados
    header('Location: grupo.php?' . http_build_query($redirect));die();
  }

  if ($_GET['estado'] == 2) {
    for ($i = 0; $i < sizeof($estados); $i++) {
      if ($estados[$i]['cveestado'] == 2) {
        $redirect['e'] = "ee4"; //El alumno no puede tener dos libros en proceso
        header('Location: grupo.php' . http_build_query($redirect));die();
      }
    }
    $web->update(array('cveestado' => 2), array('cvelista' => $_GET['info3']), 'lista_libros');
    header('Location: grupo.php?' . http_build_query($redirect));die();

  } else if ($_GET['estado'] == 3) {
    $calif = $web->getAll(array('calif_reporte'), array('cvelista' => $_GET['info3']), 'lista_libros');
    $web->update(array('cveestado' => $_GET['estado']), array('cvelista' => $_GET['info3']), 'lista_libros');
    header('Location: grupo.php?' . http_build_query($redirect));die();

  } else {
    $web->update(array('cveestado' => $_GET['estado']), array('cvelista' => $_GET['info3']), 'lista_libros');
    header('Location: grupo.php?' . http_build_query($redirect));die();
  }
}

/**
 * info1 = libro-cvelista
 * info2 = cvelectura
 * info3 = cveusuario
 * info4 = grupo-letra
 */
function calificar_reporte() {
  global $web, $cveperiodo;
  
  // verifica que se hayan mandado todos los datos
  if (!isset($_POST['calificacion']) || !isset($_GET['info1']) || 
    !isset($_GET['info2']) || !isset($_GET['info3']) || !isset($_GET['info4'])) {
    return message('index grupo libros','danger', 'ERRCR000 No es posible asignar calificación, contacte con el administrador');
  }
  
  $redirect = array(
    "accion" => "index_grupos_libros",
    "info1" => $_GET['info2'],
    "info2" => $_GET['info3'],
    "info3" => $_GET['info4']
  );
  
  // verifica que la lectura mandada en info2 e info3 sea correcta
  $existencia = $web->getAll('*', array('cveperiodo' => $cveperiodo, 'cvelectura' => $_GET['info2']), 'lectura');
  if (!isset($existencia[0])) {
    $redirect['e'] = "cr1";
    header('Location: grupo.php?' . http_build_query($redirect)); die(); //no existe el grupo-lectura
  }
  
  $existencia = $web->getAll('*', array('cveusuario' => $_GET['info3']), 'usuarios');
  if (!isset($existencia[0])) {
    $redirect['e'] = "cr2";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }
  
  // verifica que calificacion no sea vacío
  if ($_POST['calificacion'] == "") {
    $redirect['e'] = "cr3";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }
  // verifica que la calificación no sobrepase el rango [0,100]
  if ($_POST['calificacion'] > 100 || $_POST['calificacion'] < 0) {
    $redirect['e'] = "cr4";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }
  
  $estado = $web->getAll(array('cveestado'), array('cvelista'=>$_GET['info1']), 'lista_libros')[0][0];
  if($estado == 1) {
    $redirect['e'] = "cr6";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  } else if($estado == 3 || $estado == 4) {
    $redirect['e'] = "cr7";
    header('Location: grupo.php?' . http_build_query($redirect)); die();
  }
  
  $web->update(
    array('calif_reporte' => $_POST['calificacion']), 
    array('cvelista' => $_GET['info1']), 
    'lista_libros'
  );
  $redirect['m'] = "cr1";
  $boReport = $web->promReporte($_GET['info2']);
  $boFinished = $web->promTerminado('cvelectura', $_GET['info2']);
  if (!$boReport && !$boFinished) {
    $redirect['e'] = 'cr5';
  }
  header('Location: grupo.php?' . http_build_query($redirect)); die();
}


