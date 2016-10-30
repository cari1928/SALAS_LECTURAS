<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:45:46
  from "/var/www/html/SALAS_LECTURAS/templates/promotor/promosala.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcfb1aa81020_03038372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfdd723554b168a12a1dc1b238b7f8ca30648110' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/promotor/promosala.html',
      1 => 1474558541,
      2 => 'file',
    ),
    '8c78c7d26ea7c5389ca98c6ec81204be82e31c4b' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/promotor/header.html',
      1 => 1471961702,
      2 => 'file',
    ),
    '9e68180b2b1b5ea892e9305a45e522a9a7e1c735' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/promotor/footer.html',
      1 => 1461647195,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_57fcfb1aa81020_03038372 (Smarty_Internal_Template $_smarty_tpl) {
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
      <a style="color:white" class="navbar-brand" href="promosala.php">Crear Grupo</a>  
      <form class="navbar-form navbar-left" role="Search" action="busqueda.php" method="get">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar" name="q">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>           
      </form>    
        
      <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color:white">Cuenta<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="datos.php">Promo1</a></li>   
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     

      <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color:white">Grupos<span class="caret"></span></a>
          <ul class="dropdown-menu">
              No existentes     
          </ul>
        </li>
      </ul>
      <label class="navbar-brand"><p style="color: white">Promo1 - Promotor</p></label>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div><label><a href="index.php">index</a></label> > <label>salas</label></div>
<center>

       <form class="form-inline" action='promosala.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <label>El periodo es: 2016-10-11 a 2016-10-13</label>        
  <br/>
  <br/>
  <div class="form-group">
    <label id ="r1">Sala: </label><input type="radio" name="datos[tipo]" onclick ="mostrar()" value="cvesala">
    <label id ="r2">Ubicacion: </label><input type="radio" name="datos[tipo]" onclick ="mostrar()" value="ubicacion"> 
    <label id ="r3">Horario: </label><input type="radio" name="datos[tipo]" onclick ="mostrar()" value="horario"> 
  </div>
<br/>
  <div class="form-group">
    
    <br/>
    <select id="cvesala" name="datos[cvesala]" class="form-control" id="exampleInputEmail3" id="producto" style ="display:none"><option>AAA</option></select>
    <br/>
    <select id="ubicacion" name="datos[ubicacion]" class="form-control" id="exampleInputEmail3" id="producto" style ="display:none"><option>SALA</option><option>SALAS</option></select>
    <br/>
    <select id="horario" name="datos[horario]" class="form-control" id="exampleInputEmail3" id="producto" style ="display:none"><option>00:02-01:01</option><option>02:00-03:00</option></select>

  </div>
  <br/>
  <br/>
    <input type="hidden" name="datos[cveperiodo]" value="<br />
<b>Notice</b>:  Undefined index: cveperiodo in <b>/var/www/html/SALAS_LECTURAS/templates_c/bfdd723554b168a12a1dc1b238b7f8ca30648110_0.file.promosala.html.cache.php</b> on line <b>60</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/var/www/html/SALAS_LECTURAS/templates_c/bfdd723554b168a12a1dc1b238b7f8ca30648110_0.file.promosala.html.cache.php</b> on line <b>60</b><br />
">
    <button type="submit" class="btn btn-default" value='Registrar' name="Mostrar" style ="display:block" >Mostrar</button> <br/><br/>
    <label style='color:red;'></label>

  <table class='table table-striped'><tr><th>cvesala</th><th>horario</th><th>ubicacion</th><th>numalumnos</th><th>limite</th></tr><tr><td> <a href="consulta.php?info1=AAA&info2=02:00-03:00&info4=9">AAA</a></td><td>02:00-03:00</td><td>SALA</td><td>0</td><td>12</td></tr></table>
</form>
</center>
    <script>
    var bandera=0;
      function mostrar()
      {
        var test = document.getElementsByName('datos[tipo]');
         if(test[0].checked == true)
          {
            document.getElementById('cvesala').style.display="block";
            document.getElementById('horario').style.display="none";
            document.getElementById('ubicacion').style.display="none";
          }
          if(test[1].checked == true)
          {
           document.getElementById('cvesala').style.display="none";
            document.getElementById('horario').style.display="none";
            document.getElementById('ubicacion').style.display="block";
          }
          if(test[2].checked == true)
          {
            document.getElementById('cvesala').style.display="none";
            document.getElementById('horario').style.display="block";
            document.getElementById('ubicacion').style.display="none";
          }
        
      }
    </script>

    </body>
</html>
</body>
</html><?php }
}
