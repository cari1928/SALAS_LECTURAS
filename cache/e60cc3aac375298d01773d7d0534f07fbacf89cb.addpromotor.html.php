<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-20 09:23:22
  from "/var/www/html/SALAS_LECTURAS/templates/admin/addpromotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5808d35ad79356_06186521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ab8b8d9951d1d23d1172af805c112be245c9bf' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/addpromotor.html',
      1 => 1476972559,
      2 => 'file',
    ),
    '7112d64c4ad875ac2c7b59f66339073828b7cf44' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/header.html',
      1 => 1470334931,
      2 => 'file',
    ),
    'd602d124fc3f4330a0345f9b25bdb3032e4cc00d' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/footer.html',
      1 => 1461647195,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5808d35ad79356_06186521 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../js/script.js"></script><!--Para la camara web -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <title>Salas Lectura</title>
</head>
<body id="contenedor">
<header></header>
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
      <a class="navbar-brand" style="color: white" href="index.php">Salas Lectura</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="Search" action="busqueda.php" method="get">

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar" name="q">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>    
     <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Cuenta<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="datos.php">DIOS</a></li>   
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     
      <label class="navbar-brand"><p style="color: white">DIOS - Administrador</p></label>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div><label><a href="index.php">index</a></label> > <label><a href="promotor.php">promotor</a></label> > <label>nuevo</label></div> 
<center>
       <form class="form-inline" action='addpromotor.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <br/>
  <br/> 
   
  <br/>      
  <div class="form-group">
    <label>Nombre Completo: </label>
    <br/>
    <input class="form-control" id="exampleInputEmail3" placeholder="Nombre y Apellidos" name="datos[nombre]" id="producto" required>
  </div>
  <br/>
  <br/>
  <label>Especialidad: </label>
    <br/>
            <select class="form-control" name="datos[cveespecialidad]">
              <option value="ISC" >Ingeniería En Sistemas Computacionales</option>
              <option value="II" >Ingeniería Informática</option>
              <option value="IM" >Ingeniería Mecatrónica</option>
              <option value="IA" >Ingeniería Ambiental</option>
              <option value="IB" >Ingeniería Bioquímica</option>
              <option value="IGE" >Ingeniería Gestión Empresarial</option>
              <option value="IIN" >Ingeniería Industrial</option>
              <option value="IME" >Ingeniería Mecánica</option>
              <option value="IE" >Ingeniería Electrónica </option>
              <option value="IQ" >Ingeniería Química</option>
              <option value="LAE" >licenciatura En Administración</option>
            </select>
    <br/>
    <br/>
    <div class="form-group">
    <label>Usuario: </label>
    <br/>
    <input class="form-control" id="exampleInputPassword3" placeholder="noControl/RFC" name="datos[usuario]" id="producto" maxlength="13" required>
  </div>
  <br/>
   <label style= "color:red"></label> <label style= "color:red"></label>
  <br/>
  <br/>
  <div class="form-group">
  <label>Correo: </label>
    <br/>
    <input class="form-control" placeholder="Correo" name="datos[correo]" id="producto" maxlength="75" required>
    <label>@itcelaya.edu.mx </label>
    <br/>  
     <label style= "color:red"></label>
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Contraseña:</label>
    <br/>
    <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Contraseña" name="datos[contrasena]" id="producto" required>
  </div>
  <div class="form-group">
    <label>Confirmar contraseña:</label>
    <br/>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar contraseña" name="datos[confcontrasena]" id="producto" required>
  </div>
  <br/>
  <label style= "color:red"></label>
  <br/>
  <br/>
  <button type="submit" class="btn btn-default" name="guardar">Crear</button> </br>
  <label style= "color:red"></label>
  <br/>
  <br/>
  <br/>
  <br/>

</form>
</center>
    </body>
</html>
</body>
</html><?php }
}
