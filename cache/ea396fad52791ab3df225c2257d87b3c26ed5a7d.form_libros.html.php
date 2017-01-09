<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 07:34:29
  from "/home/ubuntu/workspace/templates/admin/form_libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58733d05eca512_62250211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702a1d01550a91854d2b317306f9512a53af8c98' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_libros.html',
      1 => 1483939450,
      2 => 'file',
    ),
    '7c2e35bfb8e3c1543301fa6f15779ac80eaaef9b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/header.html',
      1 => 1483467882,
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
function content_58733d05eca512_62250211 (Smarty_Internal_Template $_smarty_tpl) {
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
<div><label><a href="index.php">index</a></label> > <label><a href="libros.php">libros</a></label> > <label>actualizar</label></div>
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
                  	<div class="alert alert- alert-dismissible" role="alert">
          	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          	  <strong>¡Aviso!</strong> 
          	</div>
                 <form action="libros.php?accion=update" method="post">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                 Actualizar Libro
                              </h3>
            </div>
            <div class="panel-body">
                              <input type="hidden" name="cvelibro" value="1">
                            <div class="form-group">
                <label> Título </label> 
                <input class="form-control" name="titulo" placeholder="Título del Libro" maxlength="100" required
                 value="102 Ideas para Enrriquecer tu Vida sin Gastar Dinero" >
              </div>
              <div class="form-group">
                <label> Autor </label>
                <input class="form-control" name="autor" placeholder="Nombre del Autor" maxlength="75" required
                 value="Quick" >
              </div>
              <div class="form-group">
                <label> Editorial </label> 
                <input class="form-control" name="editorial" placeholder="Editorial del Libro" maxlength="255" required
                 value="Oniro" >
              </div>
              <div class="form-group">
                <label> Precio </label> 
                <input type="number" class="form-control" name="precio" placeholder="Precio del Libro" min="0" max="999999999999999" required
                 value="130.00" >
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
               Actualizar 
                        </button>
        </form>
      </nav>
    </div>
</div>
</body>
</html>
<?php }
}
