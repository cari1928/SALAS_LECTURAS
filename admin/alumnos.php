<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

$contraseña = '';
$web->iniClases('admin', "index alumnos");

if (isset($_GET['info1'])) {
    $elimina = $_GET['info1'];
    $sql     = "delete from usuarios where cveusuario='" . $elimina . "'";
    $web->query($sql);
}

$sql = "select cveusuario, usuarios.nombre AS \"Usuario\", especialidad.nombre \"Especialidad\", correo
			from usuarios
				inner join especialidad on usuarios.cveespecialidad=especialidad.cveespecialidad
		 	where rol='U' and cveusuario not in (select cveusuario from usuarios where cveusuario='00000000')";
$alumnos = $web->DB->GetAll($sql);

if (isset($alumnos[0])) {
    $web->smarty->assign('alumnos', $alumnos);
} else {
    $web->smarty->assign('msj', "No hay alumnos registrados");
}

$web->smarty->display("alumnos.html");
