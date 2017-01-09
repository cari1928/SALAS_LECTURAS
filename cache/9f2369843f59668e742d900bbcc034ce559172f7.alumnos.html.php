<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 08:39:47
  from "/home/ubuntu/workspace/templates/admin/alumnos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58734c531812e7_64416885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0789ec1ceeeeb05b636d48d811f485939715a511' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/alumnos.html',
      1 => 1483949426,
      2 => 'file',
    ),
    '7c2e35bfb8e3c1543301fa6f15779ac80eaaef9b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/header.html',
      1 => 1483467882,
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
function content_58734c531812e7_64416885 (Smarty_Internal_Template $_smarty_tpl) {
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
<div><label><a href="index.php">index</a></label> > <label>alumnos</label></div>   
<table class='table table-striped'>
	<tr><td colspan='4' align='right'>
		<a href='alumnos.php?accion=form_insert'>
			<img src='../Images/add.png' /> 
		</a>
	</td></tr>
</table>
	<table class='table table-striped'>
		<tr>		
			<th>NO. CONTROL</th>
			<th>NOMBRE</th>
			<th>ESPECIALIDAD</th>
			<th>CORREO</th>
			<th>ELIMINAR</th>
			<th>ACTUALIZAR</th>
			<th>MOSTRAR</th>
		</tr>
					<tr>
				<td>11030846</td>
				<td>Enríquez Pérez Gabriela</td>
				<td>Ingeniería Informática</td>
				<td>11030846@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=11030846"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=11030846"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=11030846"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030013</td>
				<td>Mendoza Arredondo Alizon Gabriela</td>
				<td>Ingeniería En Sistemas Computacionales</td>
				<td>12030013@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030013"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030013"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030013"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030186</td>
				<td>Silva Jaraleño Francisco Javier</td>
				<td>Ingeniería Informática</td>
				<td>12030186@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030186"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030186"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030186"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030188</td>
				<td>Hernández Sierra María del Rosario</td>
				<td>Ingeniería Bioquímica</td>
				<td>12030188@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030188"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030188"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030188"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030194</td>
				<td>Andrés Hernández Rosales</td>
				<td>Ingeniería En Sistemas Computacionales</td>
				<td>12030194@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030194"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030194"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030194"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030366</td>
				<td>Gonzáles Freyre Izabel</td>
				<td>Ingeniería Mecatrónica</td>
				<td>12030366@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030366"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030366"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030366"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030458</td>
				<td>Ortega Sánchez Paulina</td>
				<td>Ingeniería Bioquímica</td>
				<td>12030458@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030458"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030458"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030458"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030479</td>
				<td>Ortíz Ramírez Lesli Abril</td>
				<td>Ingeniería Bioquímica</td>
				<td>12030479@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030479"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030479"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030479"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030484</td>
				<td>Suarez García Adolfo Angel</td>
				<td>Ingeniería Bioquímica</td>
				<td>12030484@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030484"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030484"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030484"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030799</td>
				<td>Pilero Espinoza Juan Daniel</td>
				<td>Ingeniería En Sistemas Computacionales</td>
				<td>12030799@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030799"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030799"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030799"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030835</td>
				<td>Alfaro Padilla Edson Daniel</td>
				<td>Ingeniería En Sistemas Computacionales</td>
				<td>12030835@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030835"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030835"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030835"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030847</td>
				<td>Ramírez Casados María del Rosario</td>
				<td>Ingeniería Informática</td>
				<td>ros1004tk@hotmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=12030847"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030847"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030847"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030850</td>
				<td>Carmona Medina Jaqueline</td>
				<td>Ingeniería Informática</td>
				<td>12030850@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=12030850"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030850"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030850"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>12030909</td>
				<td>Castro Espinoza Sergio Daniel</td>
				<td>Ingeniería Mecatrónica</td>
				<td>daniel_gow19@hotmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=12030909"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=12030909"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=12030909"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13030063</td>
				<td>Jaime Trinidad Susana</td>
				<td>Ingeniería Bioquímica</td>
				<td>13030063@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=13030063"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13030063"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13030063"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13030067</td>
				<td>Parra Sánchez Paulina del C.</td>
				<td>Ingeniería Bioquímica</td>
				<td>13030067@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=13030067"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13030067"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13030067"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13030086</td>
				<td>Martínez Jaramillo Daniela Fernanda</td>
				<td>Ingeniería Bioquímica</td>
				<td>13030086@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=13030086"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13030086"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13030086"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13030411</td>
				<td>Zamora Lgunas Karla Beatriz</td>
				<td>Licenciatura En Administración</td>
				<td>karla_21@yahoo.com</td>
				<td><a href="alumnos.php?accion=delete&info1=13030411"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13030411"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13030411"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13030596</td>
				<td>Huitzache Hernádez Francisco Javier</td>
				<td>Ingeniería En Sistemas Computacionales</td>
				<td>13030596@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=13030596"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13030596"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13030596"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13030615</td>
				<td>Ramírez Bautista Aarón</td>
				<td>Ingeniería En Sistemas Computacionales</td>
				<td>13030615@itcelay.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=13030615"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13030615"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13030615"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13030661</td>
				<td>Aguirre Buendia Jairo</td>
				<td>Ingeniería Química</td>
				<td>13030661@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=13030661"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13030661"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13030661"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13030903</td>
				<td>Solórzano Girón Agustín</td>
				<td>Ingeniería Gestión Empresarial</td>
				<td>13030903@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=13030903"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13030903"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13030903"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>13031136</td>
				<td>Lana Serrano Paal Alfonos </td>
				<td>Ingeniería Mecánica</td>
				<td>paal.alfonso.lana.serrano@gmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=13031136"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=13031136"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=13031136"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14030331</td>
				<td>Godinez Martínez Juan Ignacio</td>
				<td>Ingeniería Bioquímica</td>
				<td>14030331@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=14030331"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14030331"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14030331"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14030333</td>
				<td>Salinas Castillo Rocio Iczamari</td>
				<td>Ingeniería Bioquímica</td>
				<td>14030333@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=14030333"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14030333"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14030333"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14030791</td>
				<td>Alfaro Godínez Pilar Andrea</td>
				<td>Ingeniería Química</td>
				<td>cosmica_andhe@hotmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=14030791"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14030791"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14030791"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031139</td>
				<td>Aguirre C. Serafin Gustavo</td>
				<td>Ingeniería Industrial</td>
				<td>gustavoaguirre@gamil.com</td>
				<td><a href="alumnos.php?accion=delete&info1=14031139"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031139"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031139"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031465</td>
				<td>Hernández Guerrero Andrea</td>
				<td>Ingeniería Bioquímica</td>
				<td>14031465@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=14031465"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031465"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031465"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031471</td>
				<td>Ramirez Campos Elizabeth</td>
				<td>Ingeniería Bioquímica</td>
				<td>elizabet_ramirezcampos@gmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=14031471"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031471"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031471"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031486</td>
				<td>Ameca Tapia Itzel</td>
				<td>Ingeniería Bioquímica</td>
				<td>itzy.1395@gmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=14031486"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031486"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031486"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031496</td>
				<td>Guzmán Herrera Blanca Pada</td>
				<td>Ingeniería Bioquímica</td>
				<td>blanca1600@gmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=14031496"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031496"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031496"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031525</td>
				<td>Mancera González Liliana</td>
				<td>Ingeniería Bioquímica</td>
				<td>lili_mg03@hotmial.com</td>
				<td><a href="alumnos.php?accion=delete&info1=14031525"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031525"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031525"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031547</td>
				<td>González Tovar Veronica</td>
				<td>Ingeniería Bioquímica</td>
				<td>14031547@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=14031547"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031547"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031547"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031556</td>
				<td>Moreno Garcia María Fernanda</td>
				<td>Ingeniería En Sistemas Computacionales</td>
				<td>14041556@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=14031556"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031556"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031556"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031560</td>
				<td>Bustos Mendoza Alan Samuel</td>
				<td>Ingeniería Mecatrónica</td>
				<td>samuelbumz@hotmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=14031560"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031560"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031560"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031684</td>
				<td>Mancera Patiño Daniel Alejandro</td>
				<td>Ingeniería Mecatrónica</td>
				<td>eziop1@gmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=14031684"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031684"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031684"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>14031860</td>
				<td>Bustos Mendoza Alan Samuel</td>
				<td>Ingeniería Mecatrónica</td>
				<td>14031860@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=14031860"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=14031860"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=14031860"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>15030322</td>
				<td>González González Diego Ernesto</td>
				<td>Ingeniería Mecánica</td>
				<td>15030322@gmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=15030322"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=15030322"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=15030322"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>15030552</td>
				<td>Rodríguez Estrada Israel</td>
				<td>Ingeniería Electrónica</td>
				<td>15030552@itcelaya.edu.mx</td>
				<td><a href="alumnos.php?accion=delete&info1=15030552"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=15030552"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=15030552"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
					<tr>
				<td>16031330</td>
				<td>Gonzalez Conejo Daniel Alejandro</td>
				<td>Ingeniería Industrial</td>
				<td>man3comic@gmail.com</td>
				<td><a href="alumnos.php?accion=delete&info1=16031330"> 
					<img src="../Images/cancelar.png">
				</a></td>
				<td><a href="alumnos.php?accion=form_update&info2=16031330"> 
					<img src="../Images/edit.png">
				</a></td>
				<td><a href="showalumnos.php?info1=16031330"> 
					<img src="../Images/mostrarL.png">
				</a></td>
			</tr>
			</table>
</body>
</html><?php }
}
