<?php
define('ZONA_HORARIA', 'Mexico/general');
// define('PATHAPP', '/var/www/html/SALAS_LECTURAS/');
define('PATHAPP', '/home/ubuntu/workspace/');
// define('PATHAPP', '/home/slslctr/salaslectura/');
define('LIB', 'lib/');
define('TEMPLATES', 'templates/');
define('TEMPLATES_C', 'templates_c/');
define('CACHE', 'cache/');
define('CONFIGS', 'configs/');
#motor de bases de datos
define('DB_DBMS','postgres');
define('DB_HOST', 'localhost');
define('DB_NAME', 'salaslectura');
define('DB_USER','admin');
define('DB_PASS', '1234');

//constantes de correo electronico
define('MAIL_SMTPAUTH', true);
// define('MAIL_SMTPSECURE', "ssl");
define('MAIL_SMTPSECURE', "tls");
// define('MAIL_HOST', "smtp.gmail.com");
define('MAIL_HOST', "smtp.live.com");
// define('MAIL_PORT', 465);
define('MAIL_PORT', 587);
define('MAIL_USERNAME', 'salaslectura@hotmail.com');//correo electronico de gmail
define('MAIL_PASS', 'salas_lecturas_ITC');//contraseña del correo de gmail
define("MAIL_SMTPDEBUG", 0);
?>