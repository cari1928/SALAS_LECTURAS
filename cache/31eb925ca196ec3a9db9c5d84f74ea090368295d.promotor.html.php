<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-05 16:57:47
  from "/home/ubuntu/workspace/templates/admin/promotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d6648bac0068_74486932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914aee8fb76577dfe96838af7c32e42c2f9297b0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/promotor.html',
      1 => 1498851413,
      2 => 'file',
    ),
    '7c2e35bfb8e3c1543301fa6f15779ac80eaaef9b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/header.html',
      1 => 1507071681,
      2 => 'file',
    ),
    '729efe3547fe208d845edb48f56f7531e372eec4' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mensajes.html',
      1 => 1499623674,
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
function content_59d6648bac0068_74486932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Mostrar logo-->
  <link rel="shortcut icon" type="image/x-icon" href="../Images/logo.ico">
  
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" 
    crossorigin="anonymous">
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
  
  <!--Upload files-->
    
  
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
        <a class="navbar-brand" href="datos.php" style="color:white">DIOS - Administrador</a>

        <ul class="nav navbar-nav navbar-right">     
          <li><a href="foros.php" style="color: white">Foros</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Cuenta<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="datos.php">DIOS</a></li>   
                <li><a href="../logout.php">Logout</a></li> 
                <li><a href="../roles.php?accion=cambiar">Cambiar rol</a></li> 
            </ul>
          </li>
        </ul>     
        <ul class="nav navbar-nav navbar-right">
          <div class="form-group">
                      </div>
        </ul>   
      </div><!-- /.navbar-collapse -->
      
    </div><!-- /.container-fluid -->
  </nav>
<div><label><a href="index.php">index</a></label> > <label>promotor</label></div>  
 	<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> No se pudo completar la operación
	</div>
 
<table class='table'>
	
			<tr><td colspan='4' align='right'>
			<a href='promotor.php?accion=form_insert'><img src='../Images/add.png'/> </a>
		</td></tr>
		
</table>

 
  <table id="example" class="display" cellspacing="0" width="100%">
  	<thead>
      <tr>
        <th style="vertical-align:middle"><center>RFC</center></th>
				<th style="vertical-align:middle"><center>PROMOTOR</center></th>
				<th style="vertical-align:middle"><center>EMAIL</center></th>
				<th style="vertical-align:middle"><center>ESPECIALIDAD</center></th>
									<th style="vertical-align:middle"><center>ELIMINAR</center></th>
					<th style="vertical-align:middle"><center>ACTUALIZAR</center></th>
								<th style="vertical-align:middle"><center>GRUPOS</center></th>
				      </tr>
    </thead>
    
    <tfoot>
      <tr>
        <th style="vertical-align:middle"><center>RFC</center></th>
				<th style="vertical-align:middle"><center>PROMOTOR</center></th>
				<th style="vertical-align:middle"><center>EMAIL</center></th>
				<th style="vertical-align:middle"><center>ESPECIALIDAD</center></th>
									<th style="vertical-align:middle"><center>ELIMINAR</center></th>
					<th style="vertical-align:middle"><center>ACTUALIZAR</center></th>
								<th style="vertical-align:middle"><center>GRUPOS</center></th>
				      </tr>
    </tfoot>
  </table>
  
  <script type="text/javascript">
    $(document).ready(function() {
      
    	var table = $('#example').DataTable( {
        "ajax": "TextFiles/promotores.txt",
        "columnDefs": [ {
                    "targets": -3,
            "data": null,
            "defaultContent": "<center><a href='#' class='delete'><img src='../Images/cancelar.png'></a></center>"
	        }, {	
                	"className": "dt-center", 
					"targets": "_all"
        } ]
	    } );
	    
	    		    $('#example tbody').on( 'click', 'a.delete', function () {
	        event.preventDefault();
	        
	        var data = table.row( $(this).parents('tr') ).data();
					var url = data[5];
					
			    swal({
			      title: "¿Seguro? Se borrará toda la información relacionada", 
			      text: "Si está seguro ingrese la contraseña de seguridad", 
			      type: "input",
			      inputType: "password",
			      showCancelButton: true,
			      confirmButtonText: "Aceptar",
			      cancelButtonText: "Cancelar"
			      
			    }, function(typedPassword) {
			    	// console.log(typedPassword);
			    	if(typedPassword != "") {
			    		url += "&infoc=" + typedPassword;
			      	window.open(url, '_self');	
			      	return false;
			    	}
			    });
		    } );
	    	    
    } );
  </script>

</body>
</html><?php }
}
