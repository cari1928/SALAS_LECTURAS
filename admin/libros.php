<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    $web->checklogin();
}

if (isset($_GET['accion'])) {
    switch ($_GET['accion']) {
        case 'form_insert':
            $web->smarty->display('addlibros.html');
            die();
            break;
    }
}

$web->iniClases('admin', "index libros");

$sql    = "select cvelibro AS \"ID\", autor AS \"Autor\", titulo AS \"Título\" from libro";
$libros = $web->showTable($sql, "libros", 3, 2, 'libros');
$web->smarty->assign('libros', $libros);
// $web->smarty->assign('tabla2', $tabla2); //es asignado dentro de showtable
$web->smarty->display("libros.html");
