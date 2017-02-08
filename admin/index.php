<?php
include '../sistema.php';

if ($_SESSION['roles'] == 'A') {
  $web->iniClases('admin', "index");

  //la opción Querys solo está disponible para DIOS
  if ($_SESSION['cveUser'] == '9999999999999') {
    $web->smarty->assign('especial', 'especial');
  }

  $web->smarty->display('index.html');

} else {
  $web->checklogin();
}
