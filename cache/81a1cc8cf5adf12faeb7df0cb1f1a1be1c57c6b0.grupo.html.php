<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 09:02:26
  from "/home/ubuntu/workspace/templates/promotor/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_587351a2b1dfd7_62371577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd30dddbe76326c3f4c52577113bad4ba39ce7b6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/grupo.html',
      1 => 1483952506,
      2 => 'file',
    ),
    '246c672fe5ca3256d40504dd670153229332191f' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/header.html',
      1 => 1483556795,
      2 => 'file',
    ),
    'b05894b3faf9f52f51bfdc61b9973fd5bbc9ef47' => 
    array (
      0 => '/home/ubuntu/workspace/templates/number_style.html',
      1 => 1483157581,
      2 => 'file',
    ),
    'a9e0edeadee9c06e616cb537b0f2f7478fb53624' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/footer.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_587351a2b1dfd7_62371577 (Smarty_Internal_Template $_smarty_tpl) {
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
      <a style="color:white" class="navbar-brand" href="salas.php">Crear Grupo</a>  
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
              <li><a href="datos.php">Hernández Hernández Sandra</a></li>   
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     

      <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color:white">Grupos<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href= "grupos.php">Ver todos</a></li><li><a href= "grupo.php?info1=A">A - Sala - A - Biblioteca</a></li><li><a href= "grupo.php?info1=B">B -  - Biblioteca</a></li><li><a href= "grupo.php?info1=C">C -  - Biblioteca</a></li><li><a href= "grupo.php?info1=D">D - SALA - D - PRUEBA</a></li><li><a href= "grupo.php?info1=E">E - SALA - E - BIBLIOTECA CAMPUS 2</a></li><li><a href= "grupo.php?info1=F">F - SALA - F - Biblioteca</a></li><li><a href= "grupo.php?info1=G">G - SALA - G - Biblioteca</a></li><li><a href= "grupo.php?info1=H">H - SALA - H - Biblioteca</a></li><li><a href= "grupo.php?info1=I">I - SALA - I - Biblioteca</a></li><li><a href= "grupo.php?info1=L">L - SALA - L - Biblioteca</a></li><li><a href= "grupo.php?info1=M">M - SALA - M - Biblioteca</a></li><li><a href= "grupo.php?info1=N">N - SALA - N - Biblioteca</a></li><li><a href= "grupo.php?info1=O">O - SALA - O - Biblioteca</a></li><li><a href= "grupo.php?info1=P">P - SALA - P - PRUEBA</a></li><li><a href= "grupo.php?info1=Q">Q - SALA - Q - PRUEBA</a></li><li><a href= "grupo.php?info1=R">R - SALA - R - BIBLIOTECA CAMPUS 2</a></li><li><a href= "grupo.php?info1=S">S - SALA - S - PRUEBA</a></li><li><a href= "grupo.php?info1=T">T - SALA - T - PRUEBA</a></li>     
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="form-group">
                  </div>
      </ul>   
      <ul class="nav navbar-nav navbar-right">
        <div class="form-group">
                  </div>
      </ul>   
      <label class="navbar-brand"><p style="color: white">Hernández - Promotor</p></label>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div><label><a href="index.php">index</a></label> > <label><a href="grupos.php">grupos</a></label> > <label>libros</label></div> 
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
	<div class="page-header">
    <h2>Lista de Libros</h2>
  </div>
  <table class='table table-striped'>
    <tr>
    	<th><center>CLAVE</center></th>
			<th><center>TITULO</center></th>
			<th><center>AUTOR</center></th>
      <th><center>EDITORIAL</center></th>
      <th><center>PRECIO</center></th>
		</tr>
					<tr>
				<td><center>1</center></td>
				<td><center>102 Ideas para Enriquecer tu Vida sin Gastar Dinero</center></td>
        <td><center>Quick</center></td>
        <td><center>Oniro</center></td>
        <td><center>$130.00</center></td>
			</tr>
					<tr>
				<td><center>2</center></td>
				<td><center>13 Años que Cambiaron al Mundo</center></td>
        <td><center>Halevi</center></td>
        <td><center>Ediciones B</center></td>
        <td><center>$100.00</center></td>
			</tr>
					<tr>
				<td><center>15</center></td>
				<td><center>Alma de Junglar</center></td>
        <td><center>Merino</center></td>
        <td><center>Ediciones B</center></td>
        <td><center>$100.00</center></td>
			</tr>
			</table>
</body>
</html>
<?php }
}
