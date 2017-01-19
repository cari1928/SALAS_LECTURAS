<?php
require_once '../lib/dompdf/autoload.inc.php';
include "../sistema.php";
use Dompdf\Dompdf;

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

$titulo = ""; //necesario para colocar nombre al archivo pdf
if(isset($_GET['accion'])) {
  
  //verifica si se manda el campo más básico, indica si es pdf o excel
  if(!isset($_GET['info1'])) {
    header('Location: periodos.php?accion=historial&e=1');
  }
  $tipo_archivo = $_GET['info1'];
  $html_code = getHeader();
  
  switch ($_GET['accion']) {
    
    case 'periodos':
      proceso_archivo($web);
      $titulo = "reporte_periodos";
      break;
      
    case 'promotores':
      //verifica que mande cveperiodo
      $datos = array('cveperiodo'=>verifica_periodo($web));
      proceso_archivo($web, $datos);
      $titulo = "reporte_periodo_promotores";
      break;
    
    case 'promotor':
      //verifica que mande y sea válido cveperiodo
      $datos = array('cveperiodo'=>verifica_periodo($web));
      
      //verifica que mande y sea válido cvepromotor
      if(!isset($_GET['info3'])) {
        header('Location: periodos.php?accion=historial&e=1');
      }
      $cvepromotor = $_GET['info3'];
      $sql = "select * from usuarios where cveusuario=?";
      $promotor = $web->DB->GetAll($sql, $cvepromotor);
      if(!isset($promotor[0])) {
        header('Location: periodos.php?accion=historial&e=2');
      }
      
      $datos = array('cveperiodo'=>$cveperiodo, 'cvepromotor'=>$cvepromotor);
      proceso_archivo($web, $datos);
      $titulo = "reporte_periodo_".$cvepromotor;
      break;
  }
  
}

$html_code .= getFooter();

// echo $html_code;

$dompdf = new Dompdf();
$dompdf->loadHtml($html_code);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream($titulo);

function getHeader() {
  return '
    <!DOCTYPE html>
    <html lang="en">
    <head>	  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
    	<link rel="stylesheet" type="text/css" href="../css/main.css">
    	<title>Reporte - Promotor</title>
    </head>
    <body>';
}

function getFooter() {
  return '
  </body>
  </html>
  ';
}

function verifica_periodo($web) {
  //verifica que mande cveperiodo
  if(!isset($_GET['info2'])) {
    header('Location: periodos.php?accion=historial&e=1');
    return false;
  }
  $cveperiodo = $_GET['info2'];
  
  //verifica que exista el periodo
  $sql = "select * from periodo where cveperiodo=?";
  $periodo = $web->DB->GetAll($sql, $cveperiodo);
  if(!isset($periodo[0])) {
    header('Location: periodos.php?accion=historial&e=2');
    return false;
  }
  
  return $cveperiodo;
}

function proceso_archivo($web, $datos=null) {
  global $tipo_archivo;
  
  if($tipo_archivo == 1) { //pdf
    reporte_periodos($web, $datos);
  } else {
    die('generar excel');
  }
}

function reporte_periodos($web, $datos=null) {
  global $html_code;
  
  //obtener todos los promotores
  $sql = "select usuarios.cveusuario, usuarios.nombre AS \"nombre_usuario\", especialidad.nombre AS \"nombre_especialidad\", correo, especialidad.cveespecialidad AS \"especialidad_cve\", otro from usuarios
  inner join especialidad_usuario on especialidad_usuario.cveusuario = usuarios.cveusuario
  inner join especialidad on especialidad.cveespecialidad = especialidad_usuario.cveespecialidad
  where usuarios.cveusuario in (select cveusuario from usuario_rol where cverol=2)";
  $parameters = array();
  
  //promotor específico
  if(isset($datos['cvepromotor'])) {
    $sql .= " and usuarios.cveusuario=?";
    $parameters = $datos['cvepromotor'];
  }
  
  $sql .= "order by usuarios.nombre";
  $promotores = $web->DB->GetAll($sql, $parameters);
  
  //obtener los periodos
  $parameters = array();
  if(isset($datos['cveperiodo'])) {
    $sql = "select * from periodo where cveperiodo=?";
    $parameters = $datos['cveperiodo'];
  } else {
    $sql = "select * from periodo order by cveperiodo";
  }
  $periodos = $web->DB->GetAll($sql, $parameters);
  
  for ($i = 0; $i < sizeof($promotores); $i++) {
    //checa si muestra especialidad u otro
    $especialidad = $promotores[$i]['nombre_especialidad'];
    if($promotores[$i]['especialidad_cve'] == 'O') {
      $especialidad = $promotores[$i]['otro'];
    }
    
    //encabezado de promotor
    $html_code .= '
    <table class="table table-condensed">
      <tr class="active">
        <td width="130"><small>RFC</small><h4>'.$promotores[$i]['cveusuario'].'</h4></td>
        <td width="200"><small>PROMOTOR</small><h4>'.$promotores[$i]['nombre_usuario'].'</h4></td>
        <td width="190"><small>ESPECIALIDAD</small><h4>'.$especialidad.'</h4></td>
        <td colspan="2"><small>CORREO</small><h4>'.$promotores[$i]['correo'].'</h4></td>
      </tr>';
      
    for ($j = 0; $j < sizeof($periodos); $j++) {
      //encabezado de periodo
      $html_code .= '
      <tr class="active"><td colspan="5">
        <h4>Periodo: '.$periodos[$j]['fechainicio'].' : '.$periodos[$j]['fechafinal'].'</h4>
    	</td></tr>';
      
      //obtiene los grupos del promotor por cada periodo
      $sql = "select distinct laboral.cveletra, letra, cvesala, nombre, titulo from laboral
      inner join abecedario on laboral.cveletra = abecedario.cve
      left join libro on laboral.cvelibro_grupal = libro.cvelibro
      where cveperiodo=? and cvepromotor=?
      order by letra";
      $parameters = array($periodos[$j]['cveperiodo'], $promotores[$i]['cveusuario']);
      $grupos = $web->DB->GetAll($sql, $parameters);
       
      if(!isset($grupos[0])) {
        $html_code .= '<tr><td colspan="5"><h4>No hay grupos en este periodo</h4></td></tr>';
        
      } else {
        for ($k = 0; $k < sizeof($grupos); $k++) {
          $html_code .= '
          <tr class="active">
          	<td><small>GRUPO</small><h4>'.$grupos[$k]['letra'].'</h4></td>
          	<td><small>SALA</small><h4>'.$grupos[$k]['cvesala'].'</h4></td>
          	<td><small>NOMBRE DEL GRUPO</small><h4>'.$grupos[$k]['nombre'].'</h4></td>
          	<td colspan="2"><small>LIBRO GRUPAL</small><h4>'.$grupos[$k]['titulo'].'</h4></td>
          </tr>';
          
          //obtener los alumnos de ese grupo en ese periodo de ese promotor
          $sql = "select * from lectura
          where cveletra in (select cveletra from laboral where cveperiodo=? 
                            and cvepromotor=?)
          and cveletra=?";
          $parameters = array($periodos[$j]['cveperiodo'], 
                              $promotores[$i]['cveusuario'], 
                              $grupos[$k]['cveletra']);
          $lecturas = $web->DB->GetAll($sql, $parameters);
          
          //no hay alumnos en ese grupo
          if(!isset($lecturas[0])) {
            $html_code .= '<tr><td colspan="5"><h4>No hay alumnos en este grupo</h4></td></tr>';
          } else {
            $html_code .= '
            <tr class="info"><td colspan="5"><h4>Lista de Alumnos</h4></td></tr>
            <tr class="info">
            	<td>NO. CONTROL</td>
            	<td>NOMBRE</td>
            	<td>ESPECIALIDAD</td>
            	<td>CORREO</td>
            	<td>TERMINADO</td>
            </tr>
            ';

            for ($a = 0; $a < sizeof($lecturas); $a++) {
              
              //obtener alumnos de cada lectura, ya se verificó el periodo, promotor y grupo
              $sql = "select usuarios.cveusuario, usuarios.nombre AS \"usuario_nombre\", especialidad.nombre AS \"especialidad_nombre\", correo from usuarios
              left join especialidad_usuario on especialidad_usuario.cveusuario = usuarios.cveusuario
              left join especialidad on especialidad.cveespecialidad = especialidad_usuario.cveespecialidad
              where usuarios.cveusuario=?";
              $alumnos = $web->DB->GetAll($sql, $lecturas[$a]['nocontrol']);
              
              //obtener resultados de calificaciones
              $sql = "select terminado from evaluacion where cvelectura=?";
              $evaluacion = $web->DB->GetAll($sql, $lecturas[$a]['cvelectura']);
              
              if(!isset($evaluacion[0])) {
                $terminado = "No";
              } else {
                
                switch ($evaluacion[0]['terminado']) {
                  case 0:
                    $terminado = "No";
                    break;
                    
                  case 100:
                    $terminado = "Si";
                    break;
                  
                  default:
                    $terminado = "No";
                    break;
                }
              }
              
              for ($b = 0; $b < sizeof($alumnos); $b++) {
                $html_code .= '
                <tr>
                	<td><h4>'.$alumnos[$b]['cveusuario'].'</h4></td>
                	<td><h4>'.$alumnos[$b]['usuario_nombre'].'</h4></td>
                	<td><h4>'.$alumnos[$b]['especialidad_nombre'].'</h4></td>
                	<td><h4>'.$alumnos[$b]['correo'].'</h4></td>
                	<td><center><h4>'.$terminado.'</h4></center></td>
                </tr>'; 
              }
              
            }//for lecturas
            
          } //if-else lecturas
          
        } //for grupos

      } //if-else existencia de grupos
      
    } //for periodos
    $html_code.= "</table><div style='page-break-after:always;'></div>";
  } // for promotores
  $html_code = substr($html_code, 0, -44);  // devuelve "abcde"
}
?>