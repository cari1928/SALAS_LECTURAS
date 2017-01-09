<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

if (isset($_GET['accion'])) {

    switch ($_GET['accion']) {

        case 'form_insert':
            $web->iniClases('admin', "index promotor nuevo");

            $sql     = "select cveespecialidad, nombre from especialidad order by nombre";
            $combito = $web->combo($sql, null, '../');

            $web->smarty->assign('combito', $combito);
            $web->smarty->display('form_promotores.html');
            die();
            break;

        case 'form_update':
            if (!isset($_GET['info1'])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', "No se especifico el promotor");
                break;
            }

            $web->iniClases('admin', "index promotor Actualizar");

            $sql   = 'select * from usuarios where cveusuario=?';
            $datos = $web->DB->GetAll($sql, $_GET['info1']);
            if (!isset($datos[0])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', "No existe el promotor");
                break;
            }
            
            $web->smarty->assign('alert', 'danger');

            $sql     = "select cveespecialidad, nombre from especialidad order by nombre";
            $combito = $web->combo($sql, $datos[0]['cveespecialidad'], '../');
            
            $web->smarty->assign('combito', $combito);
            $web->smarty->assign('promotores', $datos[0]);
            $web->smarty->display('form_promotores.html');
            die();
            break;

        case 'insert':
            $usuario = '';

            if (!isset($_POST['datos']['usuario']) ||
                !isset($_POST['datos']['nombre']) ||
                !isset($_POST['datos']['cveespecialidad']) ||
                !isset($_POST['datos']['correo']) ||
                !isset($_POST['datos']['contrasena']) ||
                !isset($_POST['datos']['confcontrasena'])) {
                errores('No alteres la estructura de la interfaz', 'index promotor nuevo', $web);
            }

            if (($_POST['datos']['usuario']) == '' ||
                ($_POST['datos']['nombre']) == '' ||
                ($_POST['datos']['cveespecialidad']) == '' ||
                ($_POST['datos']['correo']) == '' ||
                ($_POST['datos']['contrasena']) == '' ||
                ($_POST['datos']['confcontrasena'] == '')) {
                errores('Llene todos los campos', 'index promotor nuevo', $web);
            }

            if (strlen($_POST['datos']['usuario']) != 13) {
                errores('La longitud del usuario deve de ser de 13 caracteres', 'index promotor nuevo', $web);
            }

            if (!$web->valida($_POST['datos']['correo'])) {
                errores('Ingrese un correo valido', 'index promotor nuevo', $web);
            }

            if ($_POST['datos']['contrasena'] != $_POST['datos']['confcontrasena']) {
                errores('Las contraseñas no coinciden', 'index promotor nuevo', $web);
            }

            $sql   = "select*from usuarios where correo=?";
            $datos = $web->DB->GetAll($sql, $_POST['datos']['correo']);
            if (isset($datos[0])) {
                errores('El correo ya existe', 'index promotor nuevo', $web);
            }

            $sql   = "select*from usuarios where cveusuario=?";
            $datos = $web->DB->GetAll($sql, $_POST['datos']['usuario']);
            if (isset($datos[0])) {
                errores('El usuario ya existe', 'index promotor nuevo', $web);
            }

            $usuario         = $_POST['datos']['usuario'];
            $contrasena      = $_POST['datos']['contrasena'];
            $nombre          = $_POST['datos']['nombre'];
            $cveespecialidad = $_POST['datos']['cveespecialidad'];
            $correo          = $_POST['datos']['correo'];

            $sql = "INSERT INTO usuarios values (?,?,?,?,?,?,?)";
            $tmp = array($usuario, $nombre, md5($contrasena), $cveespecialidad, 'P', null, $correo);
            
            if(!$web->query($sql, $tmp)) {
              $web->smarty->assign('alert', 'danger');
              $web->smarty->assign('msg', 'No se pudo completar la operación');
              break; 
            }
            
            header('Location: promotor.php');
            break;

        case 'update':
            $cveusuario = $_POST['cveusuario'];
            if (!isset($_POST['datos']['nombre']) ||
                !isset($_POST['datos']['cveespecialidad']) ||
                !isset($_POST['datos']['correo'])) {
                errores('No alteres la estructura de la interfaz', 'index promotor nuevo', $cveusuario, $web);
            }

            if (($_POST['datos']['nombre']) == '' ||
                ($_POST['datos']['cveespecialidad']) == '' ||
                ($_POST['datos']['correo']) == '') {
                errores('Llene todos los campos', 'index promotor nuevo', $cveusuario, $web);
            }

            $sql   = "select * from usuarios where cveusuario=?";
            $datos = $web->DB->GetAll($sql, $cveusuario);
            if (!isset($datos[0])) {
                errores('El promotor no existe', 'index promotor nuevo', $cveusuario, $web);
            }

            $datosp = $datos;
            if (!$web->valida($_POST['datos']['correo'])) {
                errores('Ingrese un correo valido', 'index promotor nuevo', $cveusuario, $web);
            }

            $sql            = "select correo from usuarios where cveusuario=?";
            $correo_usuario = $web->DB->GetAll($sql, $cveUsuario);

            $sql     = "select correo from usuarios where correo=?";
            $correos = $web->DB->GetAll($sql, $correo);
            if (sizeof($correos) == 1) {
                if ($correo_usuario[0]['correo'] != $correos[0]['correo']) {
                    errores('El correo ya existe', 'index promotor nuevo', $cveusuario, $web);
                }
            }

            if ($_POST['datos']['pass'] == 'true') {
                if (!isset($_POST['datos']['contrasena']) ||
                    !isset($_POST['datos']['contrasenaN']) ||
                    !isset($_POST['datos']['confcontrasenaN'])) {
                    errores('No altere la estructura de la interfaz', 'index promotor nuevo', $cveusuario, $web);
                }

                if (isset($_POST['datos']['contrasena']) == '' ||
                    isset($_POST['datos']['contrasenaN']) == '' ||
                    isset($_POST['datos']['confcontrasenaN']) == '') {
                    errores('Llene todos los campos', 'index promotor nuevo', $cveusuario, $web);
                }

                if ($datosp[0]['pass'] != md5($_POST['datos']['contrasena'])) {
                    errores('La contraseña es incorrecta', 'index promotor nuevo', $cveusuario, $web);
                }

                if ($_POST['datos']['confcontrasenaN'] != $_POST['datos']['contrasenaN']) {
                    errores('La contraseña nueva debe coincidir con la confirmación', 'index promotor nuevo', $cveusuario, $web);
                }

                $sql = "update usuarios set nombre=?, cveespecialidad=?, correo= ?, pass=? where cveusuario=?";
                $tmp = array(
                  $_POST['datos']['nombre'], 
                  $_POST['datos']['cveespecialidad'], 
                  $_POST['datos']['correo'], 
                  md5($_POST['datos']['contrasenaN']), 
                  $cveusuario);
                if(!$web->query($sql, $tmp)) {
                  $web->smarty->assign('alert', 'danger');
                  $web->smarty->assign('msg', 'No se pudo completar la operación');
                  break; 
                }
            } else {
                $sql = "update usuarios set nombre=?, cveespecialidad=?, correo= ? where cveusuario=?";
                $tmp = array($_POST['datos']['nombre'], $_POST['datos']['cveespecialidad'], $_POST['datos']['correo'], $cveusuario);
                if(!$web->query($sql, $tmp)) {
                  $web->smarty->assign('alert', 'danger');
                  $web->smarty->assign('msg', 'No se pudo completar la operación');
                  break;
                }
            }
            header('Location: promotor.php');
            break;

        case 'delete':
            if (!isset($_GET['info1'])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', "No se especificó el promotor a eliminar");
                break;
            }

            $sql   = "select*from usuarios where cveusuario=?";
            $datos = $web->DB->GetAll($sql, $_GET['info1']);
            if (!isset($datos[0])) {
                $web->smarty->assign('alert', 'danger');
                $web->smarty->assign('msg', "El promotor no existe");
                break;
            }

            $sql   = "delete from usuarios where cveusuario=?";
            if($web->query($sql, $_GET['info1'])) {
              $web->smarty->assign('alert', 'danger');
              $web->smarty->assign('msg', 'No se pudo completar la operación');
              break;
            }
            break;

        case 'mostrar':
            $web->iniClases('admin', "index promotor mostrar");
            die('mostrar');
            break;
    }
}

$web->iniClases('admin', "index promotor");

if (isset($_GET['info1'])) {
    $elimina = $_GET['info1'];
    $sql     = "delete from usuarios where cveusuario='" . $elimina . "'";
    $web->query($sql);
}

$sql = "select u.cveusuario ,u.nombre, u.correo, e.nombre AS \"Especialidad\" from usuarios u
            inner join especialidad e on e.cveespecialidad=u.cveespecialidad
            where rol='P' order by u.cveusuario";
$promotores = $web->DB->GetAll($sql);

$web->smarty->assign('promotores', $promotores);
$web->smarty->display("promotor.html");

function errores($msg, $ruta, $cveusuario = null, $web)
{
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', $msg);
    $web->iniClases('admin', $ruta);
    $combito = $web->combo("select cveespecialidad, nombre from especialidad", null, '../');
    $web->smarty->assign('combito', $combito);
    if ($cveusuario != null) {
        $sql   = 'select*from usuarios where cveusuario=?';
        $datos = $web->DB->GetAll($sql, $cveusuario);
        $web->smarty->assign('promotores', $datos[0]);
    }
    $web->smarty->display('form_promotores.html');
    die();
}
