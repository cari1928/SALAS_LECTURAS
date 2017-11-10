<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 00:38:38
  from "/home/ubuntu/workspace/templates/registrar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a04f50eddd5e3_32253105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c1c8a57f6b25ec21f82478e520ebbae59deac8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/registrar.html',
      1 => 1499804260,
      2 => 'file',
    ),
    '32c2ebe8c4c8ceb6b8eed295e1f19a3e26e092c0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/header.html',
      1 => 1505690776,
      2 => 'file',
    ),
    '3b8101ff1dd467a337e768f8425ba3846cc5f523' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mensajes.html',
      1 => 1499623674,
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
function content_5a04f50eddd5e3_32253105 (Smarty_Internal_Template $_smarty_tpl) {
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
<div><label><a href="index.php">index</a></label> > <label>registrar</label></div>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../css/bootstrap/fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script type="text/javascript" src="JS/script_foto.js"></script>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3"> 
    
      	<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> El usuario ya existe
	</div>
      
      <form action='registrar.php' method='post'>
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title"><center><h3>¡Bienvenido! <br> Por favor Ingrese datos. <br/></h3></center></h3>
          </div>
          
          <div class="panel-body">
            <div class="form-group">
              <label>Nombre Completo:</label>
              <input class="form-control" placeholder="Nombre y Apellidos" name="datos[nombre]" required>
            </div>
            
            <div class="form-group">
              <label>Especialidad:</label>
              <select class="form-control" name="datos[cveespecialidad]"  required>
  <option value="-1">Selecciona una opción</option>
                  <option value="IA" >Ingeniería Ambiental</option>
                        <option value="IB" >Ingeniería Bioquímica</option>
                        <option value="IE" >Ingeniería Electrónica</option>
                        <option value="ISC" >Ingeniería En Sistemas Computacionales</option>
                        <option value="IGE" >Ingeniería Gestión Empresarial</option>
                        <option value="IIN" >Ingeniería Industrial</option>
                        <option value="II" >Ingeniería Informática</option>
                        <option value="IM" >Ingeniería Mecatrónica</option>
                        <option value="IME" >Ingeniería Mecánica</option>
                        <option value="IQ" >Ingeniería Química</option>
                        <option value="LAE" >Licenciatura En Administración</option>
          </select>
            </div>
            
            <div class="form-group">
              <label>Usuario:</label>
              <input class="form-control" placeholder="Número de Control" name="datos[usuario]" maxlength="13" required>
            </div>
            
            <div class="form-group">
              <label>Correo:</label>
              <input class="form-control" placeholder="Correo" name="datos[correo]" maxlength="75" required>
            </div>
            
            <div class="form-group">
              <label>Contraseña:</label>
              <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]" required>
            </div>
            
            <div class="form-group">
              <label>Confirmar contraseña:</label>
              <input type="password" class="form-control" placeholder="Confirmar contraseña" name="datos[confcontrasena]" required>
            </div>

          </div>
      </div>
        
        <div align="right">
          <button type="submit" class="btn btn-primary" value='Registrar' name="guardar">Registrar</button>  
        </div>
        
      </form>
      
    </nav>
  </div>  
</div>

</body>
</html><?php }
}
