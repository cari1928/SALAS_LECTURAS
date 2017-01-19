<?php

include "../sistema.php";

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

//verifica el periodo
$cveperiodo = $web->periodo();
if ($cveperiodo == "") {
  $web->iniClases('admin', "index alumnos grupos");
  message('warning', 'No hay periodos actuales', $web);
  break;
}

if (isset($_GET['accion'])) {

  switch ($_GET['accion']) {

    case 'alumnos':
      mostrar_alumnos($web);
      break;

    case 'insert':
      if(isset($_POST['promotor'])){
        insertar_libro_alumno($web,'promotor');
      }
      else{
        insertar_libro_alumno($web);  
      }
      
      break;

    case 'delete':
      eliminar_libro_alumno($web);
      break;
      
    case 'delete_promotor':
      eliminar_libro_alumno($web, 'promotor');
      break;
      
    case 'grupos':
    case 'historial':
      mostrar_alumnos_promotor($web);
      break;
      
    case 'reporte':
      ver_reporte($web);
      break;
      
    case 'libros':
      mostrar_libros_promotor($web);   
      $web->smarty->assign('libros_promo', 'libros');
      break;
  
  }
}


$web->smarty->display('grupo.html');

/**
 * Para ahorrar código y poder mandar mensajes de error o avisos
 * @param  String $alert Warning | Danger principalmente
 * @param  String $msg   Mensaje a mostrar
 * @param  Class  $web   Para poder ocupar la herramienta smarty
 */
function message($alert, $msg, $web)
{
  $web->smarty->assign('alert', $alert);
  $web->smarty->assign('msg', $msg);
}

/**
 * Muestra: Barra gris superior con los datos del grupo
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
    message('warning', 'Hacen falta datos para continuar', $web);
    return false;
  }

  //verifica la existencia del grupo
  $sql = "select * from lectura
  inner join laboral on laboral.cveletra = lectura.cveletra
  where laboral.cveletra in (select cve from abecedario where letra=?)";
  $grupo = $web->DB->GetAll($sql, $_GET['info1']);
  if (!isset($grupo[0])) {
    $web->iniClases('admin', "index alumnos grupos");
    message('danger', 'El grupo seleccionado no existe', $web);
    return false;
  }

  $web->iniClases('admin', "index alumnos grupo-" . $_GET['info1']);

  //verifica que se haya mandado el alumno
  if (!isset($_GET['info2'])) {
    message('danger', 'Hace falta información para continuar', $web);
    return false;
  }

  // verifica la existencia del alumno
  $sql = "select * from lectura
  where cveletra in (select cve from abecedario where letra=?)
  and nocontrol=?";
  $alumno = $web->DB->GetAll($sql, array($_GET['info1'], $_GET['info2']));
  if (!isset($alumno[0])) {
    message('danger', 'El alumno seleccionado no está registrado por completo en el grupo',
      $web);
    return false;
  }

  //Info de encabezado
  $sql = "select distinct letra, laboral.nombre as \"nombre_grupo\", sala.ubicacion,
    fechainicio, fechafinal, nocontrol, usuarios.nombre as \"nombre_promotor\" from laboral
    inner join sala on laboral.cvesala = sala.cvesala
    inner join abecedario on laboral.cveletra = abecedario.cve
    inner join periodo on laboral.cveperiodo= periodo.cveperiodo
    inner join lectura on abecedario.cve = abecedario.cve
    inner join usuarios on laboral.cvepromotor = usuarios.cveusuario
    where nocontrol=? and laboral.cveperiodo=? and letra=?
    order by letra";
  $parameters = array($alumno[0]['nocontrol'], $cveperiodo, $_GET['info1']);
  $datos_rs   = $web->DB->GetAll($sql, $parameters);
  $web->smarty->assign('info', $datos_rs[0]);
  
  //para obtener el nombre del alumno
  $sql = "select cveusuario, nombre from usuarios where cveusuario=?";
  $datos = $web->DB->GetAll($sql, $alumno[0]['nocontrol']);
  $web->smarty->assign('info2', $datos[0]);

  //Datos de la tabla = Calificaciones del alumno
  $sql = "select distinct usuarios.nombre, comprension, motivacion, participacion, asistencia,
  terminado, nocontrol, cveeval, cveperiodo, lectura.cvelectura from lectura
  inner join evaluacion on evaluacion.cvelectura = lectura.cvelectura
  inner join abecedario on lectura.cveletra = abecedario.cve
  inner join usuarios on lectura.nocontrol = usuarios.cveusuario
  inner join laboral on abecedario.cve = laboral.cveletra
  where letra=? and cveperiodo=? and nocontrol=?
  order by usuarios.nombre";
  $parameters = array($_GET['info1'], $cveperiodo, $alumno[0]['nocontrol']);
  $datos      = $web->DB->GetAll($sql, $parameters);

  if (!isset($datos[0])) {
    message('warning', 'El alumno no está registrado en este grupo', $web);
    return false;
  }

  mostrar_libros($web, $alumno); //Combo y tabla

  $web->smarty->assign('datos', $datos);
  $web->smarty->assign('alumnos', 'alumnos');
}


/**
 * Muestra:
 * Los libros de cada alumno con sus respectivas opciones
 * Tabla de libros ya enlazados con el alumno
 * @param  Class  $web    Objeto para hacer uso de smarty
 */
function mostrar_libros_promotor($web){
  global $cveperiodo;
  
  //Checa que este especificado el grupo
  if(!isset($_GET['info1'])){
    $web->iniClases('admin', "index promotor");
    message('danger', 'Hace falta información para continuar, no se especificó el grupo', $web);
    return false;
  }
  //Checa que este especificado el alumno
  if(!isset($_GET['info2'])){
    $web->iniClases('admin', "index promotor");
    message('danger', 'Hace falta información para continuar, no se especificó el alumno', $web);
    return false;
  }
  //Checa que el grupo exista
  $sql="SELECT * FROM laboral
  where cveletra in (SELECT cve FROM abecedario WHERE letra = ?)
  and cveperiodo = ?";
  $grupo=$web->DB->GetAll($sql, array($_GET['info1'], $cveperiodo));
  if(!isset($grupo[0])){
    $web->iniClases('admin', "index promotor");
    message('danger', 'El grupo no existe', $web);
    return false;
  }
  //Checar que el promotor sea el propietario del grupo
  if($grupo[0]['cvepromotor'] != $_GET['info3']){
    $web->iniClases('admin', "index promotor");
    message('danger', 'El promotor seleccionado no es propietario del grupo', $web);
    return false;
  }
  //Checa que el alumno exista
  $sql="SELECT * FROM usuarios where cveusuario = ?";
  $aux_alumno = $web->DB->GetAll($sql, $_GET['info2']);
  if(!isset($aux_alumno[0])){
    $web->iniClases('admin', "index promotor");
    message('danger', 'El alumno no existe', $web);
    return false;
  }
  //Checar que el alumno pertenezca al grupo
  $sql="SELECT * FROM lectura
   WHERE nocontrol = ? and
         cveletra in (SELECT cve FROM abecedario 
                     where cve in (SELECT cveletra from laboral
                                   WHERE cveperiodo = ?)
                      and letra = ?)";
  $alumno = $web->DB->GetAll($sql, array($_GET['info2'], $cveperiodo, $_GET['info1']));
  if(!isset($alumno[0])){
    $web->iniClases('admin', "index promotor");
    message('danger', 'El alumno no pertenese al grupo', $web);
    return false;
  }
  
  $web->iniClases('admin', "index promotor libros");
  mostrar_libros($web, $alumno);
}

/**
 * Muestra:
 * Combo con libros para enlazarlos con el alumno
 * Tabla de libros ya enlazados con el alumno
 * @param  Class  $web    Objeto para hacer uso de smarty
 * @param  array  $alumno Arreglo de objetos que contiene datos de la tabla lectura
 */
function mostrar_libros($web, $alumno)
{
  global $cveperiodo;
  //datos del combo
  $sql = "select cvelibro, titulo from libro
  where cvelibro not in
  (select cvelibro from lista_libros
    inner join lectura on lectura.cvelectura = lista_libros.cvelectura
    inner join abecedario on abecedario.cve = lectura.cveletra
    inner join laboral on laboral.cveletra = abecedario.cve
    where nocontrol=? and laboral.cveperiodo=? and lectura.cvelectura=?)
  order by titulo";
  $parameters = array($alumno[0]['nocontrol'], $cveperiodo, $alumno[0]['cvelectura']);
  $combo      = $web->combo($sql, null, '../', $parameters);

  //Datos de la tabla = Libros
  $sql = "select libro.cvelibro, titulo, autor, editorial, precio, estado, lectura.cvelectura, calif_reporte
    from lista_libros
    inner join lectura on lista_libros.cvelectura = lectura.cvelectura
    inner join libro on libro.cvelibro = lista_libros.cvelibro
    inner join estado on estado.cveestado = lista_libros.cveestado
    where nocontrol=? and lectura.cvelectura=?
    order by titulo";
  $libros = $web->DB->GetAll($sql, array($alumno[0]['nocontrol'], $alumno[0]['cvelectura']));

  if (!isset($libros[0])) {
    $web->smarty->assign('alert', 'warning');
    $web->smarty->assign('msg', 'No hay libros registrados');
    $web->smarty->assign('cvelectura', $alumno[0]['cvelectura']); //La agregue por que no mandava la cvelectura si no se encontrava algun libro registrado
  } else {
    $web->smarty->assign('libros', $libros);
    $web->smarty->assign('cvelectura', $libros[0]['cvelectura']);
  }
  $web->smarty->assign('cmb_libro', $combo);
}

/**
 * Insertar en lista_libros, realizando las validaciones correspondientes
 * @param  Class   $web Objeto para hacer uso de smarty
 * @return boolean False -> Mostrar mensaje de error
 */
function insertar_libro_alumno($web,$tipo='alumno')
{
  global $cveperiodo;

  if (!isset($_POST['datos']['cvelibro']) ||
    !isset($_POST['datos']['cvelectura'])) {
    message('danger', 'No alteres la estructura de la interfaz', $web);
    return false;
  }
  
  //verifica que el libro exista
  $sql   = "select * from libro where cvelibro=?";
  $libro = $web->DB->GetAll($sql, $_POST['datos']['cvelibro']);
  if (!isset($libro[0])) {
    message('danger', 'El libro seleccionado no existe', $web);
    return false;
  }
  
  //verifica que la cvelectura exista 
  $sql = "select distinct letra, nocontrol, laboral.cvepromotor from lectura 
  inner join abecedario on lectura.cveletra = abecedario.cve
  inner join laboral on laboral.cveletra = abecedario.cve
  where lectura.cvelectura=?";
  $lectura = $web->DB->GetAll($sql, $_POST['datos']['cvelectura']);
  if (!isset($lectura[0])) {
    message('danger', 'ERROR, no se puede continuar con la operación', $web);
    return false;
  }
  
  $cvelibro   = $_POST['datos']['cvelibro'];
  $cvelectura = $_POST['datos']['cvelectura'];

  //verifica si el libro ya está registrado para ese alumno
  $sql = "select * from lista_libros
  inner join lectura on lectura.cvelectura = lista_libros.cvelectura
  where cvelibro=? and lectura.cvelectura=?";
  $libro = $web->DB->GetAll($sql, array($cvelibro, $cvelectura));
  if (isset($libro[0])) {
    message('danger', 'El libro ya está para este alumno', $web);
    return false;
  }

  $sql = "insert into lista_libros(cvelibro, cvelectura, cveperiodo, cveestado)
  values(?, ?, ?, ?)";
  $web->query($sql, array($cvelibro, $cvelectura, $cveperiodo, '1'));

  if($tipo == 'promotor'){
    header('Location: grupo.php?accion=libros&info1=' . $lectura[0]['letra'] . '&info2=' .$lectura[0]['nocontrol'] . '&info3=' .$lectura[0]['cvepromotor']);  
  }
  else {
    header('Location: grupo.php?accion=alumnos&info1=' . $lectura[0]['letra'] . '&info2=' .$lectura[0]['nocontrol']);  
  }
  
}

/**
 * Elimina de lista_libros realizando las validaciones correspondientes y redirigiendo a grupo.php
 * @param  Class   $web Objeto para poder hacer uso de smarty
 * @return boolean False -> Mostrar mensaje de error
 */
function eliminar_libro_alumno($web, $tipo=null)
{
  global $cveperiodo;
  
  if($tipo == 'promotor'){
   $web->iniClases('admin', "index alumnos grupos");  
  }
  else{
   $web->iniClases('admin', "index alumnos grupos"); 
  }

  if (!isset($_GET['info1']) ||
    !isset($_GET['info2'])) {
    message('danger', 'Hacen falta más datos para continuar', $web);
    return false;
  }

  //verifica que el libro exista
  $sql   = "select * from libro where cvelibro=?";
  $libro = $web->DB->GetAll($sql, $_GET['info1']);
  if (!isset($libro[0])) {
    message('danger', 'El libro seleccionado no existe', $web);
    return false;
  }

  //verifica que la cvelectura exista
  $sql = "select distinct letra, nocontrol from lista_libros
  inner join lectura on lectura.cvelectura = lista_libros.cvelectura
  inner join abecedario on lectura.cveletra = abecedario.cve
  where lectura.cvelectura=?";
  $lectura = $web->DB->GetAll($sql, $_GET['info2']);
  if (!isset($lectura[0])) {
    message('danger', 'ERROR, no se puede continuar con la operación', $web);
    return false;
  }

  $cvelibro   = $_GET['info1'];
  $cvelectura = $_GET['info2'];

  //verificar que el libro está enlazado al alumno
  $sql = "select * from lista_libros
  where cveperiodo=? and cvelectura=?";
  $lista_libros = $web->DB->GetAll($sql, array($cveperiodo, $cvelectura));
  if (!isset($lista_libros[0])) {
    message('danger', 'El libro no está para este alumno', $web);
    return false;
  }

  //verificar que si se elimina el libro, el alumno continua teniendo 5 libros
  if (sizeof($lista_libros) - 1 < 5) {
    message('warning', 'No es posible eliminar el libro, el alumno debe tener mínimo 5 libros', $web);
    return false;
  }

  $sql = "select * from lista_libros
  where cveperiodo=? and cvelectura=? and cvelibro=?";
  $lista_libros = $web->DB->GetAll($sql, array($cveperiodo, $cvelectura, $cvelibro));

  $sql = "delete from lista_libros where cvelista=?";
  $web->query($sql, $lista_libros[0]['cvelista']);

  $sql = "select letra, nocontrol,  laboral.cvepromotor from lectura
  inner join abecedario on lectura.cveletra = abecedario.cve
  inner join laboral on laboral.cveletra = abecedario.cve
  where cvelectura=?";
  $lectura = $web->DB->GetAll($sql, $cvelectura);

  if($tipo == 'promotor'){
   header('Location: grupo.php?accion=libros&info1=' . $lectura[0]['letra'] . '&info2=' .$lectura[0]['nocontrol'] . '&info3=' .$lectura[0]['cvepromotor']);
  }
  else{
   header('Location: grupo.php?accion=alumnos&info1=' . $lectura[0]['letra'] . '&info2=' . $lectura[0]['nocontrol']);
  }
  die(); //no funciona bien sin esto
}

function ver_reporte($web) {
  $web->iniClases('admin', "index alumnos reporte");
  message('info', 'FALTA PROGRAMAR ESTA SECCION, PRIMERO DEBE PROGRAMARSE QUE EL PROMOTOR O EL ADMIN PUEDAN SUBIR EL REPORTE', $web);
  return false;
}

function mostrar_alumnos_promotor($web){
  global $cveperiodo;

  //verifica que se haya mandado el promotor
  if (!isset($_GET['info2'])) {
    $web->iniClases('admin', "index promotor grupos");
    message('warning', 'Hacen falta datos para continuar', $web);
    return false;
  }

  //Verificar que exista el promotor
  $sql         = "select cveusuario from usuarios where cveusuario=?";
  $Aux_usuario = $web->DB->GetAll($sql, $_GET['info2']);

  if (!isset($Aux_usuario[0]['cveusuario'])) {
    $web->iniClases('admin', "index promotor grupos");
    message('warning', 'No existe el promotor', $web);
    return false;
  }

  //verifica la existencia del grupo
  $sql = "select * from lectura
  inner join laboral on laboral.cveletra = lectura.cveletra
  where laboral.cveletra in (select cve from abecedario where letra=?) 
  and laboral.cveperiodo=? 
  and cvepromotor=?";
  $grupo = $web->DB->GetAll($sql, array($_GET['info1'], $cveperiodo, $_GET['info2']));

  // $web->debug($grupo);

  if (!isset($grupo[0])) {
    $web->iniClases('admin', "index promotor grupos");
    message('danger', 'El grupo seleccionado no existe', $web);
    return false;
  }
  
  $web->iniClases('admin', "index promotor grupo-".$_GET['info1']);     
  if($_GET['accion'] == 'historial'){
    $web->iniClases('admin', "index historial grupo-".$_GET['info1']); 
    $web->smarty->assign('bandera', 'historial');
  }

  //Datos de la tabla = Calificaciones del alumno
  $sql = "select distinct usuarios.nombre, comprension, motivacion, participacion, asistencia,
  terminado, nocontrol, cveeval, cveperiodo, lectura.cvelectura, laboral.cvepromotor, abecedario.letra from lectura
  inner join evaluacion on evaluacion.cvelectura = lectura.cvelectura
  inner join abecedario on lectura.cveletra = abecedario.cve
  inner join usuarios on lectura.nocontrol = usuarios.cveusuario
  inner join laboral on abecedario.cve = laboral.cveletra
  where letra=? and cveperiodo=? and cvepromotor=? order by usuarios.nombre";
  $parameters = array($_GET['info1'], $cveperiodo, $_GET['info2']);
  $datos      = $web->DB->GetAll($sql, $parameters);

  if (!isset($datos[0])) {
    message('warning', 'El promotor seleccionado no es el propietario', $web);
    return false;
  }
  
  $web->smarty->assign('datos', $datos);
  $web->smarty->assign('promotor', 'promotor');
}
