<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 08:43:16
  from "/home/ubuntu/workspace/templates/usuario/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58734d24271208_50932311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe0176e9a42abcd9596e15556a37411e2a6fbac4' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/grupo.html',
      1 => 1483944161,
      2 => 'file',
    ),
    '678c910e570f32587eda52b0ef80f9b2d548c65a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/header.html',
      1 => 1483646175,
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
function content_58734d24271208_50932311 (Smarty_Internal_Template $_smarty_tpl) {
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
      <a class="navbar-brand" href="inscripcion.php" style="color: white">Inscribir</a>  
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
              <li><a href="datos.php">Enríquez Pérez Gabriela</a></li>   
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     

      <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Lecturas<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href= "grupos.php">Ver todos</a></li><li><a href= "grupo.php?info1=A">A - Sala - A - Biblioteca</a></li>     
          </ul>
        </li>
      </ul>
      <label class="navbar-brand"><p style="color: white">Enríquez - Alumno</p></label>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div><label><a href="index.php">index</a></label> > <label><a href="grupos.php">grupos</a></label> > <label>grupo</label></div>
	<center>
		<div class="form-group" style ="background-color:#f0f0f0">
			<label>
				Grupo: A<br>
				Sala: Sala - A<br>
				Ubicación: Biblioteca<br>
				Periodo: 2016-12-26 - 2017-12-15<br>
				Promotor: Hernández Hernández Sandra
			</label>
		</div>
	</center>
	<table class='table table-striped' width='500'>
		<tr>
			<th>Alumno</th>
			<th>Comprensión</th> 
			<th>Motivación</th>
			<th>Reporte</th> 
			<th>Tema</th>
			<th>Participación</th> 
			<th>Terminado</th>
			<th>Opciones</th>
		</tr>
					<tr> 
				 <form class='form - inline' action='grupo.php?info1=A' method='post' >
					 <input type="hidden" name="datos[nocontrol]" value="11030846" > 
					 <td width='500'> Enríquez Pérez Gabriela </td>
					 <td width='500'>  
					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	<div id="mybar" style="position: absolute; width: 30% ;height: 100%; background-color: #4caf50;"> 
					 			<div id="label"style="text-align: center; line-height: 30px; color: white;"> 
					 				30% 
					 			</div>
					 		</div>
					 	</div>
					 </br>
					 </td>

					 <td width='500'>
					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	<div id="mybar" style="position: absolute; width: 50% ;height: 100%; background-color: #4caf50;">
					 			<div id="label"style="text-align: center; line-height: 30px; color: white;">
					 				50% 
					 			</div>
					 		</div>
					 	</div>
					 </br>
					</td>

					<td width='500'>
						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
							<div id="mybar" style="position: absolute; width: 80% ;height: 100%; background-color: #4caf50;">	<div id="label"style="text-align: center; line-height: 30px; color: white;">
								80% 
								</div>
							</div>
						</div>
						</br>
					</td>

					<td width='500'>
						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;"> 	<div id="mybar" style="position: absolute; width: 20% ;height: 100%; background-color: #4caf50;">		<div id="label"style="text-align: center; line-height: 30px; color: white;">
									20%
								</div>
							</div>
						</div>
					</br>
					</td>

					<td width='500'>
						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
							<div id="mybar" style="position: absolute; width: 20% ;height: 100%; background-color: #4caf50;">	<div id="label"style="text-align: center; line-height: 30px; color: white;">
									20%
								</div>
							</div>
						</div>
						</br>
					</td>

					<td width='500'>
						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
							<div id="mybar" style="position: absolute; width: 20% ;height: 100%; background-color: #4caf50;">
								<div id="label"style="text-align: center; line-height: 30px; color: white;">
									20%
								</div>
							</div>
						</div>
						</br>
					</td>
					<td>
						<a href="redacta.php?accion=redactarI&info=A&receptor=11030846&grupo=A&periodo=8">
							<img src="../Images/sobre.png">
						</a>
						<a href="grupo.php?accion=form_libro&info1=4">
							<img src="../Images/mostrarL.png">
						</a>
					</td>
				</form>
			</tr>
			</table>
</body>
</html>
<?php }
}
