<?php

include 'sistema.php';
$web        = new Sistema;
$email      = '';
$contrasena = '';
$msg        = '';

if (isset($_POST['datos']['contrasena'])) {
    $cveUsuario = $_POST['datos']['cveUsuario'];
    $contrasena = $_POST['datos']['contrasena'];

    if (!$web->login($cveUsuario, $contrasena)) {
        // die('hola');
        $msg = 'La contraseña y/o usuario son incorrectos';
        $web->smarty->assign('mensaje', ' <label style= "color:red">' . $msg . '</label>');
        $web->smarty->display('formulario_login.html');
        die();
    }
}

$web->smarty->assign('mensaje', $msg);
$web->smarty->display('formulario_login.html');
