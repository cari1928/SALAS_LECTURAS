<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-19 07:42:55
  from "/home/ubuntu/workspace/templates/admin/grupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58806dff967d69_18310385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76a61c44dc90f4cad86d05da148916a12928f543' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/grupos.html',
      1 => 1484809881,
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
function content_58806dff967d69_18310385 (Smarty_Internal_Template $_smarty_tpl) {
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
<div><label><a href="index.php">index</a></label> > <label>grupos</label></div> 


	<table class="table table-hover">
		<tr class='info'>
			<th><center>GRUPO</center></th>
			<th><center>SALA</center></th>
			<th><center>PROMOTOR</center></th>			<th><center>UBICACIÓN</center></th>
			<th width="150"><center>LIBRO GRUPAL</center></th>
			<th width="400"><center>HORARIO</center></th>
		</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=A&info2=HEH5671201K16">
				  A
			  </a></center></td>
				<td style="vertical-align:middle"><center>Sala - A</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>Biblioteca</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 07:00:00 a 08:00:00<br>Lunes - 08:00:00 a 09:00:00<br>Miércoles - 07:00:00 a 08:00:00<br>Miércoles - 08:00:00 a 09:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=D&info2=HEH5671201K16">
				  D
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - D</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>PRUEBA</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 09:00:00 a 10:00:00<br>Lunes - 10:00:00 a 11:00:00<br>Viernes - 09:00:00 a 10:00:00<br>Viernes - 10:00:00 a 11:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=F&info2=HEH5671201K16">
				  F
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - F</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>Biblioteca</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 10:00:00 a 11:00:00<br>Lunes - 11:00:00 a 12:00:00<br>Martes - 07:00:00 a 08:00:00<br>Martes - 08:00:00 a 09:00:00<br>Miércoles - 09:00:00 a 10:00:00<br>Miércoles - 10:00:00 a 11:00:00<br>Jueves - 07:00:00 a 08:00:00<br>Jueves - 08:00:00 a 09:00:00<br>Viernes - 07:00:00 a 08:00:00<br>Viernes - 09:00:00 a 10:00:00<br>Sábado - 07:00:00 a 08:00:00<br>Sábado - 08:00:00 a 09:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=I&info2=HEH5671201K16">
				  I
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - I</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>Biblioteca</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 16:00:00 a 17:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=L&info2=HEH5671201K16">
				  L
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - L</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>Biblioteca</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 17:00:00 a 18:00:00<br>Lunes - 18:00:00 a 19:00:00<br>Martes - 15:00:00 a 16:00:00<br>Martes - 16:00:00 a 17:00:00<br>Miércoles - 16:00:00 a 17:00:00<br>Miércoles - 17:00:00 a 18:00:00<br>Jueves - 11:00:00 a 12:00:00<br>Jueves - 12:00:00 a 13:00:00<br>Viernes - 16:00:00 a 17:00:00<br>Viernes - 17:00:00 a 18:00:00<br>Sábado - 11:00:00 a 12:00:00<br>Sábado - 14:00:00 a 15:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=M&info2=HEH5671201K16">
				  M
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - M</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>Biblioteca</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Martes - 17:00:00 a 18:00:00<br>Martes - 18:00:00 a 19:00:00<br>Miércoles - 18:00:00 a 19:00:00<br>Jueves - 14:00:00 a 15:00:00<br>Jueves - 15:00:00 a 16:00:00<br>Viernes - 18:00:00 a 19:00:00<br>Sábado - 15:00:00 a 16:00:00<br>Sábado - 16:00:00 a 17:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=P&info2=HEH5671201K16">
				  P
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - P</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>PRUEBA</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 17:00:00 a 18:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=Q&info2=HEH5671201K16">
				  Q
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - Q</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>PRUEBA</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 18:00:00 a 19:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=S&info2=HEH5671201K16">
				  S
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - S</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>PRUEBA</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 16:00:00 a 17:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=T&info2=HEH5671201K16">
				  T
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - T</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>PRUEBA</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 08:00:00 a 09:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=U&info2=NAPE840321PU1">
				  U
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - U</center></td>
								  <td style="vertical-align:middle">
				    <center>Navarro Patiño Edí Jair</center>
			    </td>				<td style="vertical-align:middle"><center>PRUEBA</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 07:00:00 a 08:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=V&info2=HEH5671201K16">
				  V
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - V</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>PRUEBA</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 11:00:00 a 12:00:00<br>Lunes - 12:00:00 a 13:00:00<br></center></td>
			</tr>
					<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=grupos&info1=W&info2=HEH5671201K16">
				  W
			  </a></center></td>
				<td style="vertical-align:middle"><center>SALA - W</center></td>
								  <td style="vertical-align:middle">
				    <center>Hernández Hernández Sandra</center>
			    </td>				<td style="vertical-align:middle"><center>PRUEBA</center></td>
				<td style="vertical-align:middle"><center></center></td>
				<td style="vertical-align:middle"><center>Lunes - 13:00:00 a 14:00:00<br>Lunes - 14:00:00 a 15:00:00<br></center></td>
			</tr>
			</table>
</body>
</html>
<?php }
}
