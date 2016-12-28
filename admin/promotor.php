<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

if(isset($_GET['accion'])) {
    
    switch($_GET['accion']) {
            
        case 'form_insert':
            $web->iniClases('admin', "index promotor nuevo");
            $combito = $web->combo("select cveespecialidad, nombre from especialidad",null,'../');
            $web->smarty->assign('combito', $combito);
            $web->smarty->display('form_promotores.html');
            die();
            break;
            
        case 'form_update':
            $web->iniClases('admin', "index promotor Actualizar");
            die('form_update');
            break;
            
        case 'insert':
            $usuario='';
            
            if(!isset($_POST['datos']['usuario']) ||
               !isset($_POST['datos']['nombre']) ||
               !isset($_POST['datos']['cveespecialidad']) ||
               !isset($_POST['datos']['correo']) ||
               !isset($_POST['datos']['contrasena']) ||
               !isset($_POST['datos']['confcontrasena']))
                errores('No alteres la estructura de la interfaz','index promotor nuevo',$web);
            
            if(($_POST['datos']['usuario']) == '' ||
               ($_POST['datos']['nombre']) == '' ||
               ($_POST['datos']['cveespecialidad']) == '' ||
               ($_POST['datos']['correo']) == '' ||
               ($_POST['datos']['contrasena']) == '' ||
               ($_POST['datos']['confcontrasena'] == '' ))
                errores('Llene todos los campos','index promotor nuevo',$web);
            
            if(strlen($_POST['datos']['usuario'])!=13)
                errores('La longitud del usuario deve de ser de 13 caracteres','index promotor nuevo',$web);
                
            if(!$web->valida($_POST['datos']['correo']))
                errores('Ingrese un correo valido','index promotor nuevo',$web);
            
            if($_POST['datos']['contrasena'] != $_POST['datos']['confcontrasena'])
                errores('Las contraseñas no coinciden','index promotor nuevo',$web);
                
            $sql="select*from usuarios where correo=?";
            $datos=$web->DB->GetAll($sql, $_POST['datos']['correo']);
            if(isset($datos[0]))
               errores('El correo ya existe','index promotor nuevo',$web); 
            
            $sql="select*from usuarios where cveusuario=?";
            $datos=$web->DB->GetAll($sql, $_POST['datos']['usuario']);
            if(isset($datos[0]))
               errores('El usuario ya existe','index promotor nuevo',$web); 
            
            $usuario=$_POST['datos']['usuario'];
            $contrasena = $_POST['datos']['contrasena'];
            $nombre=$_POST['datos']['nombre'];
            $cveespecialidad=$_POST['datos']['cveespecialidad'];
            $correo=$_POST['datos']['correo'];
            
            $sql="INSERT INTO usuarios values (?,?,?,?,?,?,?)";
            $web->query($sql, array($usuario, $nombre, md5('$contrasena'), $cveespecialidad, 'P', NULL, $correo));
            break;
            
        case 'update':
            die('update');
            break;
            
        case 'delete':
            if(!isset($_GET['info1']))
                errores('No se especifico el promotor','index promotor',$web); 
            
            $sql="select*from usuarios where cveusuario=?";
            $datos=$web->DB->GetAll($sql, $_GET['info1']);
            if(!isset($datos[0]))
               errores('El usuario no existe','index promotor nuevo',$web);
            
            $sql="delete from usuarios where cveusuario=?";
            $datos=$web->query($sql, $_GET['info1']);
            
            $sql="select*from usuarios where cveusuario=?";
            $datos=$web->DB->GetAll($sql, $_GET['info1']);
            if(isset($datos[0]))
               errores('El usuario no se puedo eliminar','index promotor nuevo', 'eliminar' ,$web); 
            break;
            
        case 'mostrar':
            $web->iniClases('admin', "index promotor Mostrar");
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


function errores($msg,$ruta,$aux=NULL,$web)
{
    $web->smarty->assign('alert', 'danger');
    $web->smarty->assign('msg', $msg);
    $web->iniClases('admin', $ruta);
    $combito = $web->combo("select cveespecialidad, nombre from especialidad",null,'../');
    $web->smarty->assign('combito', $combito);
    if($aux==NULL)
        $web->smarty->display('form_promotores.html');
    if($aux==NULL)
        $web->smarty->display('form_promotores.html');
    die();   
}