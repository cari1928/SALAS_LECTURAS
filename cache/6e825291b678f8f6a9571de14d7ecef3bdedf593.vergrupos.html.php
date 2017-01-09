<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 06:24:55
  from "/home/ubuntu/workspace/templates/promotor/vergrupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58732cb72dd9a4_73929476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d4d6d688fcfd4e98ed779a060ab6c5e44399c19' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/vergrupos.html',
      1 => 1483942044,
      2 => 'file',
    ),
    '246c672fe5ca3256d40504dd670153229332191f' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/header.html',
      1 => 1483556795,
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
function content_58732cb72dd9a4_73929476 (Smarty_Internal_Template $_smarty_tpl) {
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
<div><label><a href="index.php">index</a></label> > <label>grupos</label></div> 
		<table cellspacing=0 cellpadding=2 class="table table-striped">
			<tr>
				<th><center>GRUPO</center></th>
				<th><center>SALA</center></th>
				<th><center>UBICACIÓN</center></th>
				<th><center>HORARIO</center></th>
				<th><center>ACTUALIZAR</center></th>
			</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=A">A</a></center>
					</td>
					<td><center>Sala - A</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=A"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=B">B</a></center>
					</td>
					<td><center></center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=B"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=C">C</a></center>
					</td>
					<td><center></center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=C"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=D">D</a></center>
					</td>
					<td><center>SALA - D</center></td>
					<td><center>PRUEBA</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=D"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=E">E</a></center>
					</td>
					<td><center>SALA - E</center></td>
					<td><center>BIBLIOTECA CAMPUS 2</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=E"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=F">F</a></center>
					</td>
					<td><center>SALA - F</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=F"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=G">G</a></center>
					</td>
					<td><center>SALA - G</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=G"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=H">H</a></center>
					</td>
					<td><center>SALA - H</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=H"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=I">I</a></center>
					</td>
					<td><center>SALA - I</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=I"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=L">L</a></center>
					</td>
					<td><center>SALA - L</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=L"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=M">M</a></center>
					</td>
					<td><center>SALA - M</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=M"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=N">N</a></center>
					</td>
					<td><center>SALA - N</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=N"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=O">O</a></center>
					</td>
					<td><center>SALA - O</center></td>
					<td><center>Biblioteca</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=O"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=P">P</a></center>
					</td>
					<td><center>SALA - P</center></td>
					<td><center>PRUEBA</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=P"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=Q">Q</a></center>
					</td>
					<td><center>SALA - Q</center></td>
					<td><center>PRUEBA</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=Q"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=R">R</a></center>
					</td>
					<td><center>SALA - R</center></td>
					<td><center>BIBLIOTECA CAMPUS 2</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=R"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=S">S</a></center>
					</td>
					<td><center>SALA - S</center></td>
					<td><center>PRUEBA</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=S"><img src="../Images/edit.png"></a></center></td>
				</tr>
							<tr>
					<td><center>
						<a href="grupo.php?info1=T">T</a></center>
					</td>
					<td><center>SALA - T</center></td>
					<td><center>PRUEBA</center></td>
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=T"><img src="../Images/edit.png"></a></center></td>
				</tr>
					</table>
</body>
</html>
<?php }
}
