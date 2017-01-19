<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-19 07:49:13
  from "/home/ubuntu/workspace/templates/admin/promotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58806f79976ab3_21155147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914aee8fb76577dfe96838af7c32e42c2f9297b0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/promotor.html',
      1 => 1484792449,
      2 => 'file',
    ),
    '7c2e35bfb8e3c1543301fa6f15779ac80eaaef9b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/header.html',
      1 => 1484719158,
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
function content_58806f79976ab3_21155147 (Smarty_Internal_Template $_smarty_tpl) {
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
          </ul>
        </li>
      </ul>     
      <label class="navbar-brand"><p style="color: white">DIOS - Administrador</p></label>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div><label><a href="index.php">index</a></label> > <label>promotor</label></div>  

<table class='table'>
			<tr><td colspan='4' align='right'>
			<a href='promotor.php?accion=form_insert'><img src='../Images/add.png'/> </a>
		</td></tr>
	</table>


	<table class='table table-hover'>
		<tr class='info'>		
			<th><center>RFC</center></th>
			<th><center>PROMOTOR</center></th>
			<th><center>EMAIL</center></th>
			<th><center>ESPECIALIDAD</center></th>
							<th><center>ELIMINAR</center></th>
				<th><center>ACTUALIZAR</center></th>
						<th><center>GRUPOS</center></th>
					</tr>
			<tr>
			<td><center>9999999999999</center></td>
			<td><center>DIOS</center></td>
			<td><center>dios@itcelaya.edu.mx</center></td>
			<td><center>
									Ingeniería En Sistemas Computacionales
							</center></td>
							<td><center>
					<a class="delete" href="promotor.php?accion=delete&info1=9999999999999">
						<img src="../Images/cancelar.png">
					</a></center></td>
				<td><center><a href="promotor.php?accion=form_update&info1=9999999999999">
					<img src="../Images/edit.png">
				</a></center></td>
						<td><center><a href="promotor.php?accion=mostrar&info1=9999999999999">
				<img src="../Images/mostrar.png">
			</a></center></td>
					</tr>
			<tr>
			<td><center>HEH5671201K16</center></td>
			<td><center>Hernández Hernández Sandra</center></td>
			<td><center>dpmaar@itcelaya.edu.mx</center></td>
			<td><center>
									ESCRIBIR_ESPECIALIDAD
							</center></td>
							<td><center>
					<a class="delete" href="promotor.php?accion=delete&info1=HEH5671201K16">
						<img src="../Images/cancelar.png">
					</a></center></td>
				<td><center><a href="promotor.php?accion=form_update&info1=HEH5671201K16">
					<img src="../Images/edit.png">
				</a></center></td>
						<td><center><a href="promotor.php?accion=mostrar&info1=HEH5671201K16">
				<img src="../Images/mostrar.png">
			</a></center></td>
					</tr>
		</table>

</body>
</html><?php }
}
