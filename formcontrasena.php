<?php
include "sistema.php";
if (isset($_POST['datos'])) {
    $contrasena = $web->generaContrasena();
    $sql        = "select correo, nombre from usuarios where cveusuario='" . $_POST['datos']['cveUsuario'] . "'";

    $datos = $web->DB->GetAll($sql);
    if (isset($datos[0]['correo'])) {
        $mensaje = "Hola " . $datos[0]['nombre'] . "\n Se solicito un cambio de contraseña para Salas Lectura.\n Por lo tanto, para realizar dicho cambio inicie sesion con la siguiente clave: " . $contrasena . ".\n Si usted no lo solicitó haga caso omiso de este correo.\n ¡Gracias!";
        $web->sendEmail($datos[0]['correo'], $datos[0]['nombre'], "Cambiar password", $mensaje);
        $sql = "update usuarios set clave=md5('$contrasena') where cveusuario='" . $_POST['datos']['cveUsuario'] . "'";
        $web->query($sql);
        header('location: login.php');
    } else {
        $web->smarty->assign('mensaje', 'El usuario no existe en nuestra base de datos');
        $web->smarty->display('formcontrasena.html');
    }

} else {
    $web->smarty->assign('mensaje', '');
    $web->smarty->display('formcontrasena.html');
}
