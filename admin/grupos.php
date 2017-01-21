<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
  $web->checklogin();
}

$web->iniClases('admin', "index grupos");
$cveperiodo = $web->periodo();
//verifica que exista periodo actual
if ($cveperiodo == "") {
  $web->simple_message('danger', 'No hay periodo actual');
  $web->smarty->display('grupos.html');
  die();
}

//su nombre es nocontrol para que funcione en grupos.html
$sql = "select distinct abecedario.letra, usuarios.cveusuario AS \"nocontrol\", usuarios.nombre AS 
\"nombre_promotor\", laboral.nombre, sala.ubicacion, laboral.cvepromotor from laboral
inner join sala on sala.cvesala = laboral.cvesala
inner join abecedario on abecedario.cve = laboral.cveletra
inner join usuarios on usuarios.cveusuario = laboral.cvepromotor
where laboral.cveperiodo = ? order by abecedario.letra";
$grupos = $web->DB->GetAll($sql, $cveperiodo);

//verifica que haya grupos en el periodo actual
if (!isset($grupos[0])) {
  $web->simple_message('danger', 'No hay grupos registrados');
  $web->smarty->display('grupos.html');
  die();
}

//coloca horarios
$sql = "select abecedario.letra, dia.cvedia, hora_inicial,hora_final, dia.nombre from laboral
inner join horas on horas.cvehoras = laboral.cvehoras
inner join abecedario on abecedario.cve = laboral.cveletra
inner join dia on dia.cvedia = laboral.cvedia
where laboral.cveperiodo = ? 
order by abecedario.letra, dia.cvedia, hora_inicial";
$horas = $web->DB->GetAll($sql, $cveperiodo);

for ($i = 0; $i < sizeof($grupos); $i++) {
  $grupos[$i]['horario'] = "";
  
  for ($j = 0; $j < sizeof($horas); $j++) {
    
    if ($grupos[$i]['letra'] == $horas[$j]['letra']) {
      $grupos[$i]['horario'] .= $horas[$j]['nombre'] . ' - ' . $horas[$j]['hora_inicial'] . ' a ' . $horas[$j]['hora_final'] . "<br>";
    }
  }
}

$web->smarty->assign('tablegrupos', $grupos);
$web->smarty->assign('bandera', 'index_grupos');
$web->smarty->display('grupos.html');
