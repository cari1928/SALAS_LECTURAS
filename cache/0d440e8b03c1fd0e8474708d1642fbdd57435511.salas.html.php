<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 05:04:42
  from "/home/ubuntu/workspace/templates/admin/salas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_587319ea1eb309_42445994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18dcc6895306a849d79cb4931b1621bf766157ef' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/salas.html',
      1 => 1483561164,
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
function content_587319ea1eb309_42445994 (Smarty_Internal_Template $_smarty_tpl) {
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
<div><label><a href="index.php">index</a></label> > <label>salas</label></div>   
<table class='table'>
	<tr><td colspan='4' align='right'>
		<a href='salas.php?accion=form_insert&tabla=sala'>
			<img src='../Images/add.png'/>
		</a>
	</td></tr>
</table>
	<table id="example" class='table table-striped display' cellspacing="0" width="100%">
		<!--<thead>-->
  <!--          <tr>-->
  <!--              <th>Name</th>-->
  <!--              <th>Position</th>-->
  <!--              <th>Office</th>-->
  <!--              <th>Extn.</th>-->
  <!--              <th>Start date</th>-->
  <!--              <th>Salary</th>-->
  <!--              <th>Salary</th>-->
  <!--          </tr>-->
  <!--      </thead>-->
  <!--      <tfoot>-->
  <!--          <tr>-->
  <!--              <th>Name</th>-->
  <!--              <th>Position</th>-->
  <!--              <th>Office</th>-->
  <!--              <th>Extn.</th>-->
  <!--              <th>Start date</th>-->
  <!--              <th>Salary</th>-->
  <!--              <th>Salary</th>-->
  <!--          </tr>-->
  <!--      </tfoot>-->
  
  <tr>		
			<th>CLAVE SALA</th>
			<th>UBICACION</th>
			<th>ELIMINAR</th>
			<th>ACTUALIZAR</th>
		</tr>
			<tr>
			<td>P00</td>
			<td>PRUEBA</td>
			<td><a href="salas.php?accion=delete&info1=P00">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="salas.php?accion=form_update&info2=P00">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
			<td>P01</td>
			<td>BIBLIOTECA CAMPUS 2</td>
			<td><a href="salas.php?accion=delete&info1=P01">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="salas.php?accion=form_update&info2=P01">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
			<td>P02</td>
			<td>BIBLIOTECA CAMPUS 2</td>
			<td><a href="salas.php?accion=delete&info1=P02">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="salas.php?accion=form_update&info2=P02">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
			<td>S01</td>
			<td>Biblioteca</td>
			<td><a href="salas.php?accion=delete&info1=S01">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="salas.php?accion=form_update&info2=S01">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
			<td>S02</td>
			<td>Biblioteca</td>
			<td><a href="salas.php?accion=delete&info1=S02">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="salas.php?accion=form_update&info2=S02">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
			<td>S03</td>
			<td>Biblioteca</td>
			<td><a href="salas.php?accion=delete&info1=S03">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="salas.php?accion=form_update&info2=S03">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
			<td>S04</td>
			<td>Biblioteca</td>
			<td><a href="salas.php?accion=delete&info1=S04">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="salas.php?accion=form_update&info2=S04">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
		</table>
<!---->
</body>
</html>
<script type="text/javascript">
// 	$(document).ready(function() {
//     $('#example').DataTable( {
//         "ajax": "arrays.txt"
//     } );
// } );
</script><?php }
}
