<?php
require_once '../lib/dompdf/autoload.inc.php';
include "../sistema.php";
use Dompdf\Dompdf;

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

if(isset($_GET['accion'])) {
  
  //verifica si se manda el campo más básico
  if(!isset($_GET['info1'])) {
      header('Location: periodos.php?accion=historial&e=1');
  }
  $html_code = getHeader();
  
  switch ($_GET['accion']) {
    
    case 'periodos':
      reporte_periodos($web);
      // prueba($web);
      break;
    
    case 'promotores':
      //si no manda el tipo de extensión o la cveperiodo
      if(!isset($_GET['info2'])) {
        header('Location: periodos.php?accion=historial&e=1');
      }
      
      //la opcion == 2 se reserva para posible archivo de excel, si no se puede eliminar info1
      if($_GET['info1'] == 1) {
        //obtiene los grupos 
        die('falta');
      }
      
      break;
  }
  
}

$html_code .= getFooter();

// echo $html_code;

$dompdf = new Dompdf();
$dompdf->loadHtml($html_code);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();

function getHeader() {
  return '
    <!DOCTYPE html>
    <html lang="en">
    <head>	  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="../css/bootstrap/js/bootstrap.min.js" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="../css/main.css">
    	<title>Reporte - Promotor</title>
    </head>
    <body>';
}

function getFooter() {
  return '
  </table>
  </body>
  </html>
  ';
}

function reporte_periodos($web) {
  global $html_code;

  //obtener todos los promotores
  $sql = "select usuarios.cveusuario, usuarios.nombre AS \"nombre_usuario\", especialidad.nombre AS \"nombre_especialidad\", correo, especialidad.cveespecialidad AS \"especialidad_cve\", otro from usuarios
  inner join especialidad_usuario on especialidad_usuario.cveusuario = usuarios.cveusuario
  inner join especialidad on especialidad.cveespecialidad = especialidad_usuario.cveespecialidad
  where usuarios.cveusuario in (select cveusuario from usuario_rol where cverol=2)
  order by usuarios.nombre";
  $promotores = $web->DB->GetAll($sql);
  
  //obtener los periodos
  $sql = "select * from periodo order by cveperiodo";
  $periodos = $web->DB->GetAll($sql);
  
  for ($i = 0; $i < sizeof($promotores); $i++) {
    
    $especialidad = $promotores[$i]['nombre_especialidad'];
    if($promotores[$i]['especialidad_cve'] == 'O') {
      $especialidad = $promotores[$i]['otro'];
    }
    
    $html_code .= '
    <table class="table table-bordered" border="0">
      <tr class="active">
        <td><small>RFC</small><h4>'.$promotores[$i]['cveusuario'].'</h4></td>
        <td width="200"><small>PROMOTOR</small><h4>'.$promotores[$i]['nombre_usuario'].'</h4></td>
        <td><small>ESPECIALIDAD</small><h4>'.$especialidad.'</h4></td>
        <td colspan="2"><small>CORREO</small><h4>'.$promotores[$i]['correo'].'</h4></td>
      </tr>';
      
    for ($j = 0; $j < sizeof($periodos); $j++) {
      
      $html_code .= '
      <tr class="success"><td colspan="5">
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
          <tr class="warning">
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
    
  } // for promotores
}
?>