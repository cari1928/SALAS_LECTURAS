<?php
include '../sistema.php';

if ($_SESSION['roles'] != 'A') {
    header('Location: ../login.php?validar=1');
}