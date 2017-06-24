<?php

include '../sistema.php';
$web->iniClases(null, "index");

<<<<<<< HEAD
$hola = $web->smarty->fetch('hola.html'); //Esto es hermoso T-T
=======
$hola = $web->smarty->fetch('hola.html');
>>>>>>> 965cd2c32b1820efbbd26ff3e0464a166d40fec9
$web->smarty->assign('hola', $hola);

// $web->smarty->display('index.html');

<<<<<<< HEAD
$p = $web->smarty->fetch('prueba.html'); //Esto es hermoso T-T
=======
$p = $web->smarty->fetch('prueba.html'); 
>>>>>>> 965cd2c32b1820efbbd26ff3e0464a166d40fec9

echo $p;
