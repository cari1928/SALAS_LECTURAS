<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-27 16:45:28
  from "/home/ubuntu/workspace/templates/admin/updatepromotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58629aa827ae28_99906100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e99b6d723bbeff299f077bab1320dc63fb515483' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/updatepromotor.html',
      1 => 1482852538,
      2 => 'file',
    ),
    '7c2e35bfb8e3c1543301fa6f15779ac80eaaef9b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/header.html',
      1 => 1482852538,
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
function content_58629aa827ae28_99906100 (Smarty_Internal_Template $_smarty_tpl) {
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
<div><label><a href="index.php">index</a></label> > <label><a href="promotor.php">promotor</a></label> > <label>actualizar</label></div>
<center>
    <form class="form-inline" action='updatepromotor.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
        <br/> 
        <br/>
        <div class="form-group">
          <label>Nombre Completo: </label>
          <br/>
          <input class="form-control" id="exampleInputEmail3" placeholder="Nombre y Apellidos" name="datos[nombre]" id="producto" value='Cristina Pacheco Sánchez' required>
        </div>
        <br/>
        <br/>
        <label>Especialidad: </label> 
        <br/>
        <select name="datos[especialidad]" class="form-control" id="exampleInputEmail3" id="producto"><option selected>Ingeniería En Sistemas Computacionales</option><option>Ingeniería Informática</option><option>Ingeniería Mecatrónica</option><option>Ingeniería Ambiental</option><option>Ingeniería Bioquímica</option><option>Ingeniería Gestión Empresarial</option><option>Ingeniería Industrial</option><option>Ingeniería Mecánica</option><option>Ingeniería Electrónica </option><option>Ingeniería Química</option><option>licenciatura En Administración</option></select>
        <br/> 
        <br/>
        <div class="form-group">
          <label>Correo: </label>
          <br/>
          <input class="form-control" placeholder="Correo" name="datos[correo]" value="cpachecosanchez" maxlength="75" required>
          <label> @itcelaya.edu.mx </label>
        </div>
        <br/> 
        <br/>
        <div id='js' class="form-group">
          <label id="l1">Modificar contraseÃ±a</label>
          <input id="r1" type="radio" class="btn btn-default" value='true' name="datos[pass]" onclick="mostrar()">
          <br/>
          <label id="l2" style="display:none">Mantener contraseÃ±a original</label>
          <input id="r2" type="radio" class="btn btn-default" value='false' name="datos[pass]" onclick="mostrar()" checked style="display:none">
        </div>
        <br/>
        <br/>
        <div id='oculto' class="form-group" style="display:none">
            <div class="form-group">
                <label>ContraseÃ±a:</label>
                <br/>
                <input type="password" class="form-control" id="exampleInputEmail3" placeholder="ContraseÃ±a" name="datos[contrasena]" id="producto">
            </div>
            <br/>
            <br/>
            <div class="form-group">
                <label>Nueva contraseÃ±a:</label>
                <br/>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar contraseÃ±a" name="datos[contrasenaN]" id="producto">
            </div>
            <div class="form-group">
                <label>Confirmar nueva contraseÃ±a:</label>
                <br/>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar contraseÃ±a" name="datos[confcontrasenaN]" id="producto">
            </div>
        </div>
        <label style= "color:red"></label>
        <br/>
        <button type="submit" class="btn btn-default" value='1111111111111' name="datos[guardar]">Actualizar</button> </br>

        <br/>
        <br/>
        <br/>
        <br/>

    </form>
</center>
<script>
    var bandera = 0;

    function mostrar() {
        var test = document.getElementsByName('datos[pass]');
        if (test[0].checked == true) {
            document.getElementById('oculto').style.display = "block";
            document.getElementById('r2').style.display = "inline";
            document.getElementById('l2').style.display = "inline";
            document.getElementById('r1').style.display = "none";
            document.getElementById('l1').style.display = "none";
        }
        if (test[1].checked == true) {
            document.getElementById('oculto').style.display = "none";
            document.getElementById('r2').style.display = "none";
            document.getElementById('l2').style.display = "none";
            document.getElementById('r1').style.display = "inline";
            document.getElementById('l1').style.display = "inline";
        }

    }
</script>

</body>
</html>
</body>
</html>
<?php }
}
