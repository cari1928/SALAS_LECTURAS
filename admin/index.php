<?php
include '../sistema.php';

if ($_SESSION['roles'] == 'A') {
  $web->iniClases('admin', "index");

  //la opción Querys solo está disponible para DIOS
  if ($_SESSION['cveUser'] == '9999999999999') {
    $web->smarty->assign('especial', 'especial');
  }
  
  switch($_GET['aviso']) 
  {
    case 1:
      $web->simple_message('success', 'Se subio el reporte satisfactoriamente');
      break;
      
    case 2:
      $web->simple_message('warning', 'Ocurrio un error mientras se subia el archivo');
      break;
  }

  $web->smarty->display('index.html');

} else {
  $web->checklogin();
}
