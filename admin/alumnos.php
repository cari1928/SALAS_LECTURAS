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
            $sql    = "select * from usuarios where cveusuario=?";
            $alumno = $web->DB->GetAll($sql, $_GET['info2']);

            $sql   = "select * from especialidad order by nombre";
            $combo = $web->combo($sql, $alumno[0]['cveespecialidad']);

            $web->iniClases('admin', "index alumnos actualizar");
            $web->smarty->assign('cmb_especialidad', $combo);
            $web->smarty->assign('alumno', $alumno[0]);
            $web->smarty->display('form_alumnos.html');
            die();
            break;

        case 'insert':
            checkPOST($_GET['accion'], $web);

            $nombre         = $_POST['datos']['nombre'];
            $cveUsuario     = $_POST['datos']['usuario'];
            $contrasena     = $_POST['datos']['contrasena'];
            $confcontrasena = $_POST['datos']['confcontrasena'];
            $especialidad   = $_POST['datos']['cveespecialidad'];
            $correo         = $_POST['datos']['correo'];

            if ($contrasena != $confcontrasena) {
                message("index alumnos nuevo", "Las contraseñas no coinciden", $web);
            }

            $tamano = strlen($cveUsuario);
            if ($tamano != 8 || !is_numeric($cveUsuario)) {
                message("index alumnos nuevo", "El número de control debe tener 8 caracteres numéricos", $web);
            }

            $sql      = "select cveusuario from usuarios where cveusuario=?";
            $datos_rs = $web->DB->GetAll($sql, $cveUsuario);
            if ($datos_rs != null) {
                message("index alumnos nuevo", "El usuario ya existe", $web);
            }
            
            if(!$web->valida($correo)) {
                message("index alumnos nuevo", "Ingrese un correo válido", $web);
            }
            
            $sql = "select * from usuarios where correo=?";
            $correos = $web->DB->GetAll($sql, $correo);
            if(sizeof($correo) == 1) {
                message("index alumnos nuevo", "El correo ya existe", $web);
            }
            
            $query = "insert into usuarios(cveusuario, nombre, pass, cveespecialidad, rol, correo) values(?, ?, ?, ?, ?, ?)";
            $web->query($query, array($cveUsuario, $nombre, md5($contrasena), $especialidad, 'U', $correo));
            header('Location: alumnos.php');
            break;

        case 'update':
            checkPOST($_GET['accion'], $web);
            
            $nombre          = $_POST['datos']['nombre'];
            $cveUsuario      = $_POST['datos']['usuario'];
            $contrasena      = $_POST['datos']['contrasena'];
            $contrasenaN     = $_POST['datos']['contrasenaN'];
            $confcontrasenaN = $_POST['datos']['confcontrasenaN'];
            $especialidad    = $_POST['datos']['cveespecialidad'];
            $correo          = $_POST['datos']['correo'];
            
            //VERIFICAR LAS VALIDACINOES!!!!!!!
            
            $tamano = strlen($cveUsuario);
            if ($tamano != 8 || !is_numeric($cveUsuario)) {
                message("index alumnos nuevo", "El número de control debe tener 8 caracteres numéricos", $web);
            }

            $sql      = "select cveusuario from usuarios where cveusuario=?";
            $datos_rs = $web->DB->GetAll($sql, $cveUsuario);
            if ($datos_rs != null) {
                message("index alumnos nuevo", "El usuario ya existe", $web);
            }
            
            if(!$web->valida($correo)) {
                message("index alumnos nuevo", "Ingrese un correo válido", $web);
            }
            
            $sql = "select * from usuarios where correo=?";
            $correos = $web->DB->GetAll($sql, $correo);
            if(sizeof($correo) == 1) {
                message("index alumnos nuevo", "El correo ya existe", $web);
            }
            
            $query = "update usuarios set nombre=?, pass=?, cveespecialidad=?, correo=? where cveusuario=?";
            $web->query($query, array($nombre, md5($contrasenaN), $especialidad, $correo, $cveUsuario));
            header('Location: alumnos.php');
            break;

        case 'delete':
            if (!isset($_GET['info1'])) {
                header('Location: ../index.php');
            }
            
            $sql     = "delete from usuarios where cveusuario=?";
            if (!$web->query($sql, $_GET['info1'])) {
                //hubo error en el delete
                header('Location: alumnos.php?msg=1');
                die();
            }
            header('Location: alumnos.php');
            break;
    }
}

$web->iniClases('admin', "index alumnos");

$sql = "select cveusuario, usuarios.nombre AS \"Usuario\", especialidad.nombre \"Especialidad\", correo from usuarios
        inner join especialidad on usuarios.cveespecialidad=especialidad.cveespecialidad
        where rol='U' and cveusuario not in
                (select cveusuario from usuarios where cveusuario='00000000')";
$alumnos = $web->DB->GetAll($sql);

if (isset($alumnos[0])) {
    $web->smarty->assign('alumnos', $alumnos);
} else {
    $web->smarty->assign('alert', "warning");
    $web->smarty->assign('msg', "No hay alumnos registrados");
}
$web->smarty->display("alumnos.html");

/**
 * Método para mostrar el template form_alumnos cuando ocurre algún error
 * @param  String $iniClases Ruta a mostrar en links
 * @param  String $msg       Mensaje a desplegar
 * @param  $web              Para poder aplicar las funciones de $web
 */
function message($iniClases, $msg, $web, $type=null) {
    $web->iniClases('admin', $iniClases);

    $sql = "select cveespecialidad, nombre from especialidad";
    $combo = $web->combo($sql, null, '../');
    
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', $msg);
    $web->smarty->assign('cmb_especialidad', $combo);
    
    if($type != null) {
        $sql    = "select * from usuarios where cveusuario=?";
        $alumno = $web->DB->GetAll($sql, $_GET['info2']);
        $web->smarty->assign('alumno', $alumno[0]);
    }
    
    $web->smarty->display('form_alumnos.html');
    die();
}

/**
 * Verifica los elementos que debe cumplir POST para continuar con el proceso.
 * Si algo es incorrecto termina la ejecusión mandando un mensaje de error
 * @param  String $type 'insert' o 'update' para que verifique los campos correspondientes
 * @param  $web  
 */
function checkPOST($type, $web){
    if($type == 'insert') {
       $ruta = "index alumnos nuevo";
       $tmp = null;
    } else {
       $ruta = "index alumnos actualizar";
       $tmp = 'update';
    }
    
    //Verifica que existan los campos
    if(!isset($_POST['datos']['nombre']) || 
       !isset($_POST['datos']['usuario']) ||
       !isset($_POST['datos']['contrasena']) ||
       !isset($_POST['datos']['cveespecialidad']) || 
       !isset($_POST['datos']['correo'])) {
           
       message($ruta, "No alteres la estructura de la interfaz", $web, $tmp);
    }
    
    // die($type);
    
    if($type == "insert") {
        if(!isset($_POST['datos']['confcontrasena'])) {
            message($ruta, "No alteres la estructura de la interfaz", $web, $tmp);
        }
    } else {
        if(!isset($_POST['datos']['contrasenaN']) || 
           !isset($_POST['datos']['confcontrasenaN'])) {
            message($ruta, "No alteres la estructura de la interfaz", $web, $tmp);
        }
    }
    
    //Verifica que los campos no estén vacíos
    if ($_POST['datos']['nombre'] == "" ||
        $_POST['datos']['usuario'] == "" ||
        // $_POST['datos']['contrasena'] == "" ||
        $_POST['datos']['cveespecialidad'] == "" ||
        $_POST['datos']['correo'] == "") {
        message($ruta, "Llena todos los campos", $web, $tmp);
    }
    
    if($type == "insert") {
        if($_POST['datos']['contrasena'] == "" ||
           $_POST['datos']['confcontrasena'] == "") {
            message($ruta, "Llena todos los campos", $web, $tmp);
        }
    } 
    // else {
    //     if($_POST['datos']['contrasenaN'] == "" || 
    //       $_POST['datos']['confcontrasenaN'] == "") {
    //         message($ruta, "Llena todos los campos", $web, $tmp);
    //     }
    // }
}
