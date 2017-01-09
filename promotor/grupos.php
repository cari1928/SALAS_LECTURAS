<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'P') {$web->checklogin();}

$web->iniClases('promotor', "index grupos");
$grupos = $web->grupos($_SESSION['cveUser']);
$web->smarty->assign('grupos', $grupos);

$cveperiodo = $web->periodo();
if ($cveperiodo == "") {
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', 'No hay periodo actual');
    $web->smarty->display('vergrupos.html');
    die();
}

if (isset($_GET['accion'])) {

    switch ($_GET['accion']) {

      case 'form_update':
        if (!isset($_GET['info'])) {
            message('No se especificó el grupo', $web);
        }

        $sql = "select * from laboral where cveletra in
          (select cve from abecedario where letra=?)";
        $grupo = $web->DB->GetAll($sql, $_GET['info']);

        if (!isset($grupo[0])) {
            message('No existe el grupo seleccionado', $web);
        }

        $web->iniClases('promotor', "index grupos actualizar");
        $web->smarty->assign('grupos', $grupo[0]);
        $web->smarty->display('form_vergrupos.html');
        die();
        break;

      case 'update':
        if (!isset($_POST['datos']['nombre'])) {
            message("No alteres la estructura de la interfaz", $web);
        }

        if ($_POST['datos']['nombre'] == "") {
            message("Llena todos los campos", $web);
        }

        $nombre = $_POST['datos']['nombre'];
        $cveletra = $_POST['datos']['cveletra'];
        
        $sql = "update laboral set nombre=? where cveletra=?";
        $web->query($sql, array($nombre, $cveletra));
        header('Location: grupos.php');
        break;
    }
}

$sql = "select distinct letra, nombre, ubicacion from laboral
  inner join sala on laboral.cvesala = sala.cvesala
  inner join abecedario on laboral.cveletra = abecedario.cve
  where cvepromotor=? and laboral.cveperiodo=?
  order by letra";
$tablegrupos = $web->DB->GetAll($sql, array($_SESSION['cveUser'], $cveperiodo));

if (isset($tablegrupos[0])) {
    $web->smarty->assign('tablegrupos', $tablegrupos);
} else {
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', 'No ha registrado algún grupo');
}

$web->smarty->display('vergrupos.html');

/**/
function message($msg, $web)
{
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', $msg);
    die();
}
