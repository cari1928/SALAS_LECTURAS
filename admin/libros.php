<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

if (isset($_GET['accion'])) {

    switch ($_GET['accion']) {

        case 'form_insert':
            $web->iniClases('admin', "index libros nuevo");
            $web->smarty->assign('msg', '');
            $web->smarty->display('form_libros.html');
            die();
            break;

        case 'form_update':
            $sql    = "select * from libro where cvelibro=" . $_GET['info2'];
            $libros = $web->DB->GetAll($sql);

            $web->iniClases('admin', "index libros actualizar");
            $web->smarty->assign('msg', '');
            $web->smarty->assign('libros', $libros[0]);
            $web->smarty->display('form_libros.html');
            die();
            break;

        case 'insert':
            $sql = "insert into libro (autor, titulo) values (
            '" . $_POST['autor'] . "',
            '" . $_POST['titulo'] . "')";
            $web->query($sql);
            header('Location: libros.php');
            break;

        case 'update':
            $sql = "update libro set autor='" . $_POST['autor'] . "', titulo='" . $_POST['titulo'] . "' where cvelibro=" . $_POST['cvelibro'];
            $web->query($sql);
            header('Location: libros.php');
            break;

        case 'delete':
            $sql = "delete from libro where cvelibro=" . $_GET['info1'];
            $web->query($sql);
            header('Location: libros.php');
            break;
    }
}

$web->iniClases('admin', "index libros");

// $sql = "select cvelibro, autor, titulo from libro
//     where cvelibro not in (select cvelibro from libro where titulo='GHOST')";
$sql    = "select cvelibro, autor, titulo from libro";
$libros = $web->DB->GetAll($sql);

if (isset($libros[0])) {
    $web->smarty->assign('libros', $libros);
} else {
    $web->smarty->assign('msj', "No hay libros registrados");
}

$web->smarty->display("libros.html");
