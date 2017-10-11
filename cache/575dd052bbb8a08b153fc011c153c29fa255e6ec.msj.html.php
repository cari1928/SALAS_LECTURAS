<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-04 00:18:21
  from "/home/ubuntu/workspace/templates/usuario/msj.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d428cd4e6a27_17403366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd754b863809e30df0705a765660dc743919ae3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/msj.html',
      1 => 1501193696,
      2 => 'file',
    ),
    '678c910e570f32587eda52b0ef80f9b2d548c65a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/header.html',
      1 => 1507043676,
      2 => 'file',
    ),
    '83c6b602c2343e889e76242aef38436c885d75f2' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/footer.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_59d428cd4e6a27_17403366 (Smarty_Internal_Template $_smarty_tpl) {
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
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  
    
    
  
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
      <a class="navbar-brand" style="color: white"> Alumno - Alumno</a>
        
      <ul class="nav navbar-nav navbar-right">      
        <li><a style="color:white; font-size:14px" href="foros.php">Foros</a></li>
        <li><a href="inscripcion.php" style="color: white">Inscribir</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Lecturas<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href= "grupos.php">Ver todos</a></li><li><a href= "grupo.php?info1=A">A - Sala Barrels - Red Barrels</a></li>     
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Cuenta<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="datos.php">Alumno</a></li>  
              <li><a href="foto.php">Foto</a></li>  
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
<div><label><a href="index.php">index</a></label> > <label><a href="grupos.php">grupos</a></label> > <label>grupo</label></div>


  <div class="container-fluid">
    <div class="main row">
      <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
        <form>
          
          <div class="panel panel-default">
            
            <div class="panel-heading">
              <h3 class="panel-title">Contenido del Aviso</h3>
            </div>
            
            <div class="panel-body">
              
              <div class="small-10 columns form-group">
                <label>Asunto</label>
                <input class="form-control" value='9 Caricaturas Hechas SÓLO Para VENDER Juguetes' readonly>
              </div>
              
              <div class="small-10 columns form-group">
                <label>Contenido del mensaje</label>
                <textarea class="form-control" rows="10" cols="100" 
                  readonly>Las caricaturas y los juguetes van de la mano. Si hay una caricatura, seguramente también haya juguetes o mercancía de la franquicia. Sin embargo, hay unas caricaturas que fueron creadas con el único propósito de vender mercancia de una empresa. Así que ¿qué caricaturas empezaron siendo juguetes?                </textarea>                    
              </div>
              
              <div class="small-10 columns form-group">
                <label>Fecha de Expiracion</label>
                <input type="date" class="form-control" value='2017-10-07' readonly>
              </div>
              
              <!--<div class="small-6 columns" style="margin-top:15px;"></div>-->
              <!--<div class="small-6 columns"></div>-->
              
                              <div class="form-group" align="center">
                  <a style="text-decoration:none; color:black; padding-right:10px" 
                    href="#">
                    <img src="../Images/docs.png"> El archivo lapis2_1.jpg ha sido eliminado
                  </a>
                </div>
                            
            </div>
            
          </div>
          
        </form>
      </nav>
    </div>
  </div>

</body>
</html><?php }
}
