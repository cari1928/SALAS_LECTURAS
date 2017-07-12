<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'U') {
  $web->checklogin();
}

$web->iniClases('usuario', "index datos");
$grupos = $web->grupos($_SESSION['cveUser']);
$web->smarty->assign('grupos', $grupos);

if (isset($_GET['accion'])) {

  switch ($_GET['accion']) {
    }
}
$sql = "SELECT foto FROM usuarios WHERE cveusuario = ?";
$foto = $web->DB->GetAll($sql, $_SESSION['cveUser']);
if(!isset($foto[0])){
    die('mensaje de error');
}

$web->smarty->assign('foto', $foto[0]['foto']);
$web->smarty->display('foto.html');