<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 17:58:25
  from "/home/ubuntu/workspace/templates/formulario_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a05e8c105ad09_08043048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5041ec4d5ad6a1ba43495a4d4c7b9f946d96441' => 
    array (
      0 => '/home/ubuntu/workspace/templates/formulario_login.html',
      1 => 1499623504,
      2 => 'file',
    ),
    '32c2ebe8c4c8ceb6b8eed295e1f19a3e26e092c0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/header.html',
      1 => 1505690776,
      2 => 'file',
    ),
    '143f96913aa79ac1f3c6f3d61e21cca5db94281a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/footer.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5a05e8c105ad09_08043048 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  
  <!--Metas-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title>Salas Lecturas</title>
  
  <!--Mostrar logo-->
  <link rel="shortcut icon" type="image/x-icon" href="Images/logo.ico">

  <!--Javascript-->
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<!--Bootstrap-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
  </head>

<body id="contenedor">
  <header><!--Para desplegar el banner--></header>
  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid" style="background-color:#337ab7">
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="color: white">Salas Lectura</a>
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="mensaje.php" style="color: white">Avisos</a></li>
          <li><a href="foros.php" style="color: white">Foros</a></li>
          <li><a href="login.php" style="color: white">Login</a></li>      
          <li><a href="registrar.php" style="color: white">Registrar</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
      
    </div><!-- /.container-fluid -->
  </nav>
<div><label><a href="index.php">index</a></label> > <label>login</label></div>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-md-push-4">
      
      <form action='login.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title"><center>Inicio de Sesión</center></h3>
          </div>
          
          <div class="panel-body">
            
            <div class="form-group">
              <label>Usuario:</label>
              <input class="form-control" placeholder="NoControl / RFC" name="datos[cveUsuario]" required maxlength="13">
            </div>
            
            <div class="form-group">
              <label>Contraseña:</label>
              <input type="password" class="form-control" placeholder="Password" name="datos[contrasena]" required >
            </div>
            
            <div align="right">
              Recordar esta cuenta <input type="checkbox">
            </div>
            
                        
                        
          </div>
        </div>
        
        <div class="form-group" align="right">
          <label><a href="formcontrasena.php">No recuerdo mi contraseña</a></label>  
          <button type="submit" class="btn btn-primary" value='Login' name="guardar">Sign in</button>
        </div>
      </form>
      
    </nav>
  </div>
</div>

</body>
</html><?php }
}
