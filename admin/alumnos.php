<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

if (isset($_GET['accion'])) {

    switch ($_GET['accion']) {

        case 'form_insert':
            $web->iniClases('admin', "index alumnos nuevo");

            $sql   = "select * from especialidad order by nombre";
            $combo = $web->combo($sql, null, '../');
            $web->smarty->assign('cmb_especialidad', $combo);
            $web->smarty->display('form_alumnos.html');
            die();
            break;

        case 'form_update':
            $sql    = "select * from usuarios where cveusuario='" . $_GET['info2'] . "'";
            $alumno = $web->DB->GetAll($sql);

            $sql   = "select * from especialidad order by nombre";
            $combo = $web->combo($sql, $alumno[0]['cveespecialidad']); //?

            $web->iniClases('admin', "index alumnos actualizar");
            $web->smarty->assign('cmb_especialidad', $combo);
            $web->smarty->assign('alumno', $alumno[0]);
            $web->smarty->display('form_alumnos.html');
            die();
            break;

        case 'insert':
            $nombre         = $_POST['datos']['nombre'];
            $cveUsuario     = $_POST['datos']['usuario'];
            $contrasena     = $_POST['datos']['contrasena'];
            $confcontrasena = $_POST['datos']['confcontrasena'];
            $especialidad   = $_POST['datos']['cveespecialidad'];
            $correo         = $_POST['datos']['correo'] . '@itcelaya.edu.mx';

            if ($contrasena != $confcontrasena) {
                $sql   = "select * from especialidad order by nombre";
                $combo = $web->combo($sql, null, '../');
                $web->smarty->assign('cmb_especialidad', $combo);
                $web->smarty->assign('msj', "Error en contraseñas");
                $web->smarty->display('form_alumnos.html');
                die();
            }

            $tamano = strlen($cveUsuario);
            if ($tamano != 8) {
                $sql   = "select * from especialidad order by nombre";
                $combo = $web->combo($sql, null, '../');
                $web->smarty->assign('cmb_especialidad', $combo);
                $web->smarty->assign('msj', "Error en la contraseña");
                $web->smarty->display('form_alumnos.html');
                die();
            }

            $sql      = "select cveusuario from usuarios where cveusuario='$cveUsuario'";
            $datos_rs = $web->DB->GetAll($sql);

            if ($datos_rs != null) {
                $sql   = "select * from especialidad order by nombre";
                $combo = $web->combo($sql, null, '../');
                $web->smarty->assign('cmb_especialidad', $combo);
                $web->smarty->assign('msj', "El usuario ya existe");
                $web->smarty->display('form_alumnos.html');
                die();
            }

            $query = "
            insert into usuarios (cveusuario,nombre,pass,cveespecialidad,rol,correo)
                values('$cveUsuario', '$nombre', md5('$contrasena'), '$especialidad',
                       'U', '$correo')";
            $web->query($query);
            header('Location: alumnos.php');
            break;

        case 'update':
            break;

        case 'delete':
            if (isset($_GET['info1'])) {
                $elimina = $_GET['info1'];
                $sql     = "delete from usuarios where cveusuario='" . $elimina . "'";
                $web->query($sql);
            }
            break;
    }
}

$contraseña = '';
$web->iniClases('admin', "index alumnos");

$sql = "select cveusuario, usuarios.nombre AS \"Usuario\", especialidad.nombre \"Especialidad\", correo from usuarios
        inner join especialidad on usuarios.cveespecialidad=especialidad.cveespecialidad
        where rol='U' and cveusuario not in
                (select cveusuario from usuarios where cveusuario='00000000')";
$alumnos = $web->DB->GetAll($sql);

if (isset($alumnos[0])) {
    $web->smarty->assign('alumnos', $alumnos);
} else {
    $web->smarty->assign('msj', "No hay alumnos registrados");
}

$web->smarty->display("alumnos.html");
