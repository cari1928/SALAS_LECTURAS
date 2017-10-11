<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-03 22:49:29
  from "/home/ubuntu/workspace/templates/promotor/redacta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d413f9b20de4_21506017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2167f71a9ed0b066757b9a922c5073031819803e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/redacta.html',
      1 => 1501194040,
      2 => 'file',
    ),
    '246c672fe5ca3256d40504dd670153229332191f' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/header.html',
      1 => 1506315197,
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
function content_59d413f9b20de4_21506017 (Smarty_Internal_Template $_smarty_tpl) {
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
  
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../css/bootstrap/bootstrap-filestyle.js"></script>
    
    <link rel="stylesheet" href="../css/avisos.css" type="text/css" />
    <script type="text/javascript" src="../JS/avisos.js"></script>
  
  <title>Salas Lectura</title>
</head>

<body id="contenedor">
  <header></header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid" style="background-color:#337ab7">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
        aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color:white" href="index.php">Salas Lectura</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <a class="navbar-brand" style="color: white"> Toni - Promotor</a>
        
        <ul class="nav navbar-nav navbar-right">       
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color:white">
              Cuenta<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="datos.php">Toni</a></li>   
                <li><a href="../logout.php">Logout</a></li>      
            </ul>
          </li>
        </ul>     
  
        <ul class="nav navbar-nav navbar-right">     
          <li><a style="color:white; font-size:14px" href="foros.php">Foros</a></li>
          <li><a style="color:white; font-size:14px" href="salas.php">Crear Grupo</a></li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color:white">
              Grupos<span class="caret"></span>
            </a>
            <ul class="dropdown-menu"><li><a href= "grupos.php">Ver todos</a></li><li><a href= "grupo.php?info1=A">A - Sala Barrels - Red Barrels</a></li><li><a href= "grupo.php?info1=B">B - SALA - B - Murkoff</a></li><li><a href= "grupo.php?info1=C">C - SALA - C - Sala de Usos Múltiples</a></li></ul>
          </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right"><li>
                  </li></ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<div><label><a href="index.php">index</a></label> > <label><a href="grupos.php">grupos</a></label> > <label>redactar</label></div>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
               <form name="messageform" action="redacta.php?accion=enviar&para=A&cveperiodo=14" method="post" id="messageform" 
          enctype="multipart/form-data">
          
          <div class="panel panel-default">
          
            <div class="panel-heading">
              <h3 class="panel-title"> Mensaje Grupal </h3>
            </div>
            
            <div class="panel-body">
              
              <div class="small-10 columns form-group">
                <label> Asunto<span class="kv-reqd">*</span></label>
                <input class="span12 form-control" name="introduccion" id="subject" placeholder="Asunto" data-toggle="tooltip" 
                  title="Se aceptan entre 10 y 80 caracteres" data-validation-required-message="Por favor, ingrese el asunto" required 
                  value='' >
              </div>
              
              <div class="small-10 columns form-group">
                <label> Contenido del mensaje<span class="kv-reqd">*</span></label>
                <textarea class="form-control span12" name="descripcion" id="content" rows="7" cols="100"
                  placeholder="Contenido del mensaje" data-validation-required-message="Por favor, ingrese su mensaje" minlength="5" 
                  data-validation-minlength-message="Mínimo 5 caracteres" data-toggle="tooltip" 
                  title="Se aceptan entre 50 y 500 caracteres" required 
                  ></textarea>                    
              </div>
              
              <div class="small-10 columns form-group">
                <label> Fecha de Expiracion<span class="kv-reqd">*</span></label>
                <input type="date"  class="form-control" name="expira" required
                  value='' >                      
              </div>
              
                             <div class="small-10 columns form-group">
                <label>Subir archivo</label>
                <input type="file" id="input12" name="archivo">
              </div>
                            
              <div class="small-10 columns form-group" align="right">
                <input type="reset" value="Cancelar" class="btn btn-danger" data-toggle="tooltip" data-placement="top" 
                  title="Borrar datos" id="_cancel" name="_cancel">
                <input type="submit" value="Enviar" class="btn btn-success" data-toggle="tooltip" data-placement="top" 
                  title="Publicar aviso" id="_send" name="_send">
              </div>
            
            </div><!--end panel-body-->
          
          </div> <!--end panel panel-defaul-->

        </form>
             
            
    </div>
  </div>
</div>

</body>
</html><?php }
}
