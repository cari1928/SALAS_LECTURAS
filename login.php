<?php

include 'sistema.php';

$web->iniClases(null, "index login");

$web        = new Sistema;
$email      = '';
$contrasena = '';
$msg        = '';

if (isset($_POST['datos']['contrasena'])) {
    $cveUsuario = $_POST['datos']['cveUsuario'];
    $contrasena = $_POST['datos']['contrasena'];

    if (!$web->login($cveUsuario, $contrasena)) {
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'La contraseña y/o usuario son incorrectos');
        $web->smarty->display('formulario_login.html');
        die();
    }
}

if(isset($_GET['info'])) {
    
    if(!isset($_SESSION['cveUser'])) {
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'Inicie sesión para poder acceder');
        $web->smarty->display('formulario_login.html');
        die();
    }
    
    $sql = "select * from usuario_rol where cveusuario=? and cverol=?";
    $rol = $web->DB->GetAll($sql, array($_SESSION['cveUser'], $_GET['info']));
    
    if(!isset($rol[0])) {
        $web->iniClases(null, "index login roles");
        
        $sql    ="select * from usuario_rol where cveusuario=?";
        $roles  = $this->DB->GetAll($sql, $email);
        
        $web->smarty->assign('roles', $roles);
        $web->smarty->assign('alert', 'danger');
        $web->smarty->assign('msg', 'No tiene permiso para acceder');
        $web->smarty->display('roles.html');
        die();
    }
    
    $_SESSION['logueado'] = true;
    switch($_GET['info']) {
      case 1: 
          $_SESSION['roles'] = 'A';
          header('Location: admin');
          break;
      case 2:
          $_SESSION['roles'] = 'P';
          header('Location: promotor');
          break;
      case 3:
          $_SESSION['roles'] = 'U';
          header('Location: alumno');
          break;
    }
}

//para mensajes cuando la página es llamada principalmente por header: Location
if(isset($_GET['m'])) {
    switch($_GET['m']) {
        case 1:
            $web->simple_message('info', 'Espere que un administrador acepte su registro');
        break;
        case 2:
            $web->simple_message('info', 'Inicia sesion como administrador');
        break;
    }
}


// $web->smarty->assign('mensaje', $msg);
$web->smarty->display('formulario_login.html');
