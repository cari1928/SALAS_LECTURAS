<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-15 23:28:45
  from "/home/ubuntu/workspace/templates/promotor/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5943182dc10b99_94321937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd30dddbe76326c3f4c52577113bad4ba39ce7b6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/grupo.html',
      1 => 1497568309,
      2 => 'file',
    ),
    '246c672fe5ca3256d40504dd670153229332191f' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/header.html',
      1 => 1485027013,
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
function content_5943182dc10b99_94321937 (Smarty_Internal_Template $_smarty_tpl) {
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

  <script type="text/javascript" src="../js/script.js"></script><!--Para la camara web -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  
  <!--Datatables-->
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
              <li><a href="datos.php">DIOS</a></li>   
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     

      <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color:white">Grupos<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href= "grupos.php">Ver todos</a></li><li><a href= "grupo.php?info1=A">A - SALA - A - SALA DE USOS MÚLTIPLES</a></li>     
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
      <label class="navbar-brand"><p style="color: white">DIOS - Promotor</p></label>
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
	    <h2>Lista de Libros del Alumno</h2>
	  </div>
	  <table class='table table-striped' width='500'>
	    <tr>
	    	<th><center>CLAVE</center></th>
				<th><center>TITULO</center></th>
				<th><center>ESTADO</center></th>
				<th><center>REPORTE</center></th>
				<th width='500'><center>CALIFICACIÓN</center></th>
			</tr>
						<tr>
				<form class='form - inline' action="grupo.php?accion=calificar_reporte&info1=13&info2=24&info3=22222222" method='post' >
					
						<td><center>14</center></td>
						<td><center>Alera</center></td>
						<td><center>En Espera</center></td>
						<td><center>
															<a href="grupo.php?accion=reporte&info1=14&info2=24&info3=8/A/22222222/14_22222222.pdf"> 
						  	<img src="../Images/reporte.png"></a>
													</center></td>
						
						<td width='500'>
							<center>
						 	<div id="myprogress" style=" position: relative; width: 130px; height: 30px; background-color: #ddd;">	<div id="mybar" style="position: absolute; width: 44% ;height: 100%; background-color: #4caf50;">
						 			<div id="label"style="text-align: center; line-height: 30px; color: white;">
						 				44% 
						 			</div>
						 		</div>
						 	</div>
						 </br>
					 		<input type="number" class="form-control" name="calificacion" required value = "44" style="width:65px ; display:block; "maxlength="3" />
					 		<input type="submit" style='display: none'/>
					 	</center>
						</td>
					</form>
				</tr>
					</table>
		</body>
</html>
<?php }
}
