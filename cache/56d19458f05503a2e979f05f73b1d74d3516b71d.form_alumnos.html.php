<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-28 14:32:13
  from "/home/ubuntu/workspace/templates/admin/form_alumnos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5953bded988fa8_52174900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5eadaa16a8912e4746d09f10a0159871a7e4bcc' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_alumnos.html',
      1 => 1486966377,
      2 => 'file',
    ),
    '7c2e35bfb8e3c1543301fa6f15779ac80eaaef9b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/header.html',
      1 => 1498279797,
      2 => 'file',
    ),
    '5ae68067ad6f5e7470f35eba439833e534f10385' => 
    array (
      0 => '/home/ubuntu/workspace/templates/number_style.html',
      1 => 1483157581,
      2 => 'file',
    ),
    '6e909a28eecf3875ef5429e4bc28852eeb6567eb' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/footer.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5953bded988fa8_52174900 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Mostrar logo-->
  <link rel="shortcut icon" type="image/x-icon" href="../Images/logo.ico">
  
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <!--Datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  
  <!--Librería para Alerts personalizados-->
  <script src="../lib/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../lib/sweetalert/dist/sweetalert.css">
  <script type="text/javascript" src="../JS/alerts.js"></script>

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
                <li><a href="../roles.php?accion=cambiar">Cambiar rol</a></li> 
            </ul>
          </li>
        </ul>     
        <ul class="nav navbar-nav navbar-right">
          <div class="form-group">
                      </div>
        </ul>   
        <label class="navbar-brand"><p style="color: white">DIOS - Administrador</p></label>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<div><label><a href="index.php">index</a></label> > <label><a href="alumnos.php">alumnos</a></label> > <label>nuevo</label></div>    
<style>
  input[type=number]::-webkit-outer-spin-button,
  input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
  }
  
  input[type=number] {
      -moz-appearance:textfield;
  }
</style>
<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
            
      <form action="alumnos.php?accion=insert" method="post">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title">
               Nuevo Alumno             </h3>
          </div>
          
          <div class="panel-body">
                        <div class="form-group">
              <label>Nombre Completo: </label>
              <input class="form-control" placeholder="Nombre y Apellidos" name="datos[nombre]" required 
              >
            </div>
            <div class="form-group">
              <label>Especialidad: </label>
                    
      <select class="form-control" name="datos[cveespecialidad]" >
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
                <label>Número de Control:</label>
                <!--maxlength no funciona por el uso del type number-->
                <input class="form-control" placeholder="8 caracteres numéricos" name="datos[usuario]" maxlength="8" required type="number">
              </div>
                        <div class="form-group">
              <label>Correo:</label>
              <input type='email' class="form-control" placeholder="Correo" name="datos[correo]" maxlength="75"
              >
            </div>
            
            <!-- Si es update se muestra el radio button -->
                          <div class="form-group">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]">
                </div>
                <div class="form-group">
                  <label>Confirmar contraseña:</label>
                  <input type="password" class="form-control" placeholder="Confirmar contraseña" name="datos[confcontrasena]">
                </div>
                        
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">
             Guardar           </button>
        </div>
      </form>
    </nav>
  </div>
</div>
<script>
  var bandera = 0;
    function mostrar()
    {
      var test = document.getElementsByName('datos[pass]');
       if(test[0].checked == true) {
          document.getElementById('oculto').style.display="block";
          document.getElementById('r2').style.display="inline";
          document.getElementById('l2').style.display="inline";
          document.getElementById('r1').style.display="none";
          document.getElementById('l1').style.display="none";
        }
        if(test[1].checked == true) {
          document.getElementById('oculto').style.display="none";
          document.getElementById('r2').style.display="none";
          document.getElementById('l2').style.display="none";
          document.getElementById('r1').style.display="inline";
          document.getElementById('l1').style.display="inline";
        }
    }
</script>
</body>
</html><?php }
}
