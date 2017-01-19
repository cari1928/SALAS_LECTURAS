<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

$web->iniClases('admin', "index grupos");
$cveperiodo = $web->periodo();
//verifica que exista periodo actual
if($cveperiodo == ""){
  $web->smarty->assign('alert', 'danger');
  $web->smarty->assign('msg', 'No hay periodo actual');
  $web->smarty->display('grupos.html');
  die();
}
$sql = "select distinct abecedario.letra, usuarios.nombre AS \"nombre_promotor\",laboral.nombre, sala.ubicacion, laboral.cvepromotor
      from laboral
      inner join sala on sala.cvesala = laboral.cvesala
      inner join abecedario on abecedario.cve = laboral.cveletra
      inner join usuarios on usuarios.cveusuario = laboral.cvepromotor
      where laboral.cveperiodo = ? order by abecedario.letra";
$grupos = $web->DB->GetAll($sql, $cveperiodo);

//verifica que haya grupos en el periodo actual
if(!isset($grupos[0])){
  $web->smarty->assign('alert', 'danger');
  $web->smarty->assign('msg', 'No hay grupos registrados');
  $web->smarty->display('grupos.html');
  die($cveperiodo);
}

//coloca horarios
$sql = "select abecedario.letra, dia.cvedia, hora_inicial,hora_final, dia.nombre from laboral
        inner join horas on horas.cvehoras = laboral.cvehoras
        inner join abecedario on abecedario.cve = laboral.cveletra
        inner join dia on dia.cvedia = laboral.cvedia
        where laboral.cveperiodo = ? order by abecedario.letra, dia.cvedia, hora_inicial";
$horas = $web->DB->GetAll($sql, $cveperiodo);
for($i=0; $i<sizeof($grupos); $i++){
        $grupos[$i]['horario']="";
        for($j=0; $j<sizeof($horas); $j++){
          if($grupos[$i]['letra'] == $horas[$j]['letra']){
            $grupos[$i]['horario'] .= $horas[$j]['nombre'] . ' - ' . $horas[$j]['hora_inicial'] . ' a ' . $horas[$j]['hora_final'] . "<br>";    
          }  
        }
      }
$web->smarty->assign('tablegrupos', $grupos);
$web->smarty->assign('table', 'grupos');
$web->smarty->display('grupos.html');

// if (isset($_GET['info1'])) {
//     $cveperiodo = periodo($web);

//     $sql = "select distinct letra AS \"Grupo\", cvesala AS \"Sala\", horario AS \"Horario\" from lectura
//       inner join abecedario on lectura.cveletra = abecedario.cve
//       inner join periodo on lectura.cveperiodo = periodo.cveperiodo
//       where cvepromotor=?
//       order by letra";
//     $datos = $web->DB->GetAll($sql, $_GET['info1']);

//     if (sizeof($datos) > 0) {
//         $tabla = $web->showTable($sql, "grupo", 5, 1, 'grupos',
//             '&info2=' . $_GET['info1'] .
//             '&info3=' . $datos[0]['Sala'] .
//             '&info4=' . $datos[0]['Horario']);
//     } else {
//         $tabla = '<div class="alert alert-danger" role="alert">No se encuentran elementos</div>';
//     }

//     $web->smarty->assign('tabla', $tabla);
//     $web->smarty->display('grupos.html');

// } else {
//     $web->smarty->assign('tabla', "<label style='color:red'>Hacen falta datos</label>");
//     $web->smarty->display('grupos.html');
// }
