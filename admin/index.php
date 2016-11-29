<?php
include '../sistema.php';

if ($_SESSION['roles'] == 'A') {
    $web->iniClases('admin', "index");
    $web->smarty->display('index.html');

} else {
    $web->checklogin();
}
