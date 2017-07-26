<?php
/* Smarty version 3.1.30-dev/53, created on 2017-07-26 17:36:35
  from "/home/ubuntu/workspace/templates/promotor/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5978d32343ea59_26193114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd30dddbe76326c3f4c52577113bad4ba39ce7b6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/grupo.html',
      1 => 1501090583,
      2 => 'file',
    ),
    '246c672fe5ca3256d40504dd670153229332191f' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/header.html',
      1 => 1500950514,
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
function content_5978d32343ea59_26193114 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a href= "grupos.php">Ver todos</a></li><li><a href= "grupo.php?info1=A">A - SALA - A - SALA DE USOS MÚLTIPLES</a></li><li><a href= "grupo.php?info1=B">B - SALA - B - SALA DE USOS MÚLTIPLES</a></li><li><a href= "grupo.php?info1=D">D - SALA - D - SALA DE USOS MÚLTIPLES</a></li>     
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <div class="form-group">
                          <a style="color:white" class="navbar-brand" href="redacta.php?info=A&accion=ver&periodo=8">Mensajes</a> 
                      </div>
        </ul>   
        <label class="navbar-brand"><p style="color: white">DIOS - Promotor</p></label>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<div><label><a href="index.php">index</a></label> > <label><a href="grupos.php">grupos</a></label> > <label>grupo</label></div> 
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

	<center><div class="form-group" style ="background-color:#f0f0f0"><label>
		Sala: SALA - A<br>
		Ubicación: SALA DE USOS MÚLTIPLES<br>
		Periodo: 2017-03-22 - 2017-07-27<br>
		Grupo: A
	</div></center>


		
		<div style="float:right; padding-bottom:10px">
	
							<a style="text-decoration:none; color:black; padding-right:10px" 
					href="grupo.php?accion=formato_preguntas">
					<img src="../Images/reporte.png"> Formato-Reporte
				</a>
						
			<a style="text-decoration:none; color:black; padding-right:10px" 
				href="grupo.php?accion=lista_asistencia&info=A" target="_blank">
				<img src="../Images/lista_asistencia.png"> Lista-Asistencia
			</a>
				
							<a style="text-decoration:none; color:black; padding-right:10px" 
					href="grupo.php?accion=form_observaciones&info=A">
					<img src="../Images/notas.png"> Observaciones
				</a>
				
				<a style="text-decoration:none; color:black; padding-right:20px" 
					href="redacta.php?accion=redactar&info=A">
					<img src="../Images/sobre.png"> Mensaje Grupal
				</a>
						
		</div>
		
		<div class="table-info">
			<table class='table table-striped' width='500'>
			<tr>
				<th><center>ALUMNO</center></th>
				<th><center>ASISTENCIA</center></th>
				<th><center>COMPRENSIÓN</center></th> 
				<th><center>PARTICIPACIÓN</center></th> 
				<th><center>ACTIVIDADES</center></th>
				<th><center>REPORTE</center></th>
				<th><center>TERMINADO</center></th>
				<th><center>OPCIONES</center></th>
			</tr>
	
							<tr> 
					 <form class='form-inline' action='grupo.php?info1=A' method='post'>
						 <input type="hidden" name="datos[cveeval]" value="21"> 
						 <td width='500' style="vertical-align:middle"> Alumno 2 </td>
						 <td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" 
						 			style="position:absolute; width:0%; height: 100%; background-color:#4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				0% 
						 			</div>
						 		</div>
					 		</div>
						 	</br>
						 	<center>
						 		<input type="number" class="form-control" name="datos[asistencia]" required value = "0" style="width:65px ; display:block; "maxlength="3">
						 	</center>
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
						<center>
							<input type="number" class="form-control" name="datos[comprension]" required value = "20" style="width:65px ; display:block; "maxlength="3">
						</center>
					 </td>
	
						<td width='500'>
							<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
								<div id="mybar" style="position: absolute; width: 10% ;height: 100%; background-color: #4caf50;">	
									<div id="label" 
										style="text-align: center; line-height: 30px; color: white;">
										10%
									</div>
								</div>
							</div>
							</br>
							<center>
								<input type="number" class="form-control" name="datos[participacion]" required value = "10" style="width:65px ; display:block; "maxlength="3">
							</center>
						</td>
						
						<td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: 10% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				10% 
						 			</div>
						 		</div>
						 	</div>
						  </br>
						 	<center>
						 		<input type="number" class="form-control" name="datos[actividades]" required value = "10" style="width:65px ; display:block; "maxlength="3">
						 	</center>
						</td>
						
						<td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: 23% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				23% 
						 			</div>
						 		</div>
						 	</div>
						 	</br>
						</td>
	
						<td width='500'>
							<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
								<div id="mybar" style="position: absolute; width: 13% ;height: 100%; background-color: #4caf50;">
									<div id="label" 
										style="text-align: center; line-height: 30px; color: white;">
										13%
									</div>
								</div>
							</div>
						</td>
	
						<td style="vertical-align:middle">
							<a style="text-decoration:none" 
								href="redacta.php?accion=redactarI&info1=A&info2=22222222">
								<img src="../Images/sobre.png">
							</a>
							<input type="submit" style='display: none'/>
							<a style="text-decoration:none"
								href="grupo.php?accion=libros&info=24&info2=22222222">
								<img src="../Images/libros.png">
							</a>
						</td>
	
					</form>
	
				</tr>
							<tr> 
					 <form class='form-inline' action='grupo.php?info1=A' method='post'>
						 <input type="hidden" name="datos[cveeval]" value="22"> 
						 <td width='500' style="vertical-align:middle"> Alumno 3 </td>
						 <td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" 
						 			style="position:absolute; width:0%; height: 100%; background-color:#4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				0% 
						 			</div>
						 		</div>
					 		</div>
						 	</br>
						 	<center>
						 		<input type="number" class="form-control" name="datos[asistencia]" required value = "0" style="width:65px ; display:block; "maxlength="3">
						 	</center>
						</td>
	
					 <td width='500'>  
					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
					 		<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;"> 
					 			<div id="label"style="text-align: center; line-height: 30px; color: white;"> 
					 				0% 
					 			</div>
					 		</div>
					 	</div>
					 	</br>
						<center>
							<input type="number" class="form-control" name="datos[comprension]" required value = "0" style="width:65px ; display:block; "maxlength="3">
						</center>
					 </td>
	
						<td width='500'>
							<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
								<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;">	
									<div id="label" 
										style="text-align: center; line-height: 30px; color: white;">
										0%
									</div>
								</div>
							</div>
							</br>
							<center>
								<input type="number" class="form-control" name="datos[participacion]" required value = "0" style="width:65px ; display:block; "maxlength="3">
							</center>
						</td>
						
						<td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				0% 
						 			</div>
						 		</div>
						 	</div>
						  </br>
						 	<center>
						 		<input type="number" class="form-control" name="datos[actividades]" required value = "0" style="width:65px ; display:block; "maxlength="3">
						 	</center>
						</td>
						
						<td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				0% 
						 			</div>
						 		</div>
						 	</div>
						 	</br>
						</td>
	
						<td width='500'>
							<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
								<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;">
									<div id="label" 
										style="text-align: center; line-height: 30px; color: white;">
										0%
									</div>
								</div>
							</div>
						</td>
	
						<td style="vertical-align:middle">
							<a style="text-decoration:none" 
								href="redacta.php?accion=redactarI&info1=A&info2=33333333">
								<img src="../Images/sobre.png">
							</a>
							<input type="submit" style='display: none'/>
							<a style="text-decoration:none"
								href="grupo.php?accion=libros&info=25&info2=33333333">
								<img src="../Images/libros.png">
							</a>
						</td>
	
					</form>
	
				</tr>
							<tr> 
					 <form class='form-inline' action='grupo.php?info1=A' method='post'>
						 <input type="hidden" name="datos[cveeval]" value="23"> 
						 <td width='500' style="vertical-align:middle"> Tommy Varcetti </td>
						 <td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" 
						 			style="position:absolute; width:0%; height: 100%; background-color:#4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				0% 
						 			</div>
						 		</div>
					 		</div>
						 	</br>
						 	<center>
						 		<input type="number" class="form-control" name="datos[asistencia]" required value = "0" style="width:65px ; display:block; "maxlength="3">
						 	</center>
						</td>
	
					 <td width='500'>  
					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
					 		<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;"> 
					 			<div id="label"style="text-align: center; line-height: 30px; color: white;"> 
					 				0% 
					 			</div>
					 		</div>
					 	</div>
					 	</br>
						<center>
							<input type="number" class="form-control" name="datos[comprension]" required value = "0" style="width:65px ; display:block; "maxlength="3">
						</center>
					 </td>
	
						<td width='500'>
							<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
								<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;">	
									<div id="label" 
										style="text-align: center; line-height: 30px; color: white;">
										0%
									</div>
								</div>
							</div>
							</br>
							<center>
								<input type="number" class="form-control" name="datos[participacion]" required value = "0" style="width:65px ; display:block; "maxlength="3">
							</center>
						</td>
						
						<td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				0% 
						 			</div>
						 		</div>
						 	</div>
						  </br>
						 	<center>
						 		<input type="number" class="form-control" name="datos[actividades]" required value = "0" style="width:65px ; display:block; "maxlength="3">
						 	</center>
						</td>
						
						<td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				0% 
						 			</div>
						 		</div>
						 	</div>
						 	</br>
						</td>
	
						<td width='500'>
							<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
								<div id="mybar" style="position: absolute; width: 0% ;height: 100%; background-color: #4caf50;">
									<div id="label" 
										style="text-align: center; line-height: 30px; color: white;">
										0%
									</div>
								</div>
							</div>
						</td>
	
						<td style="vertical-align:middle">
							<a style="text-decoration:none" 
								href="redacta.php?accion=redactarI&info1=A&info2=66666666">
								<img src="../Images/sobre.png">
							</a>
							<input type="submit" style='display: none'/>
							<a style="text-decoration:none"
								href="grupo.php?accion=libros&info=26&info2=66666666">
								<img src="../Images/libros.png">
							</a>
						</td>
	
					</form>
	
				</tr>
					</table>		
		</div>
		
	

</body>
</html>
<?php }
}
