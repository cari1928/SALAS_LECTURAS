<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-05 16:33:41
  from "/home/ubuntu/workspace/templates/usuario/foto.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d65ee584ac91_57921180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be6ddbca251b7fe452f170f52a0bf22b0b7f4226' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/foto.html',
      1 => 1507170244,
      2 => 'file',
    ),
    '678c910e570f32587eda52b0ef80f9b2d548c65a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/header.html',
      1 => 1507221193,
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
function content_59d65ee584ac91_57921180 (Smarty_Internal_Template $_smarty_tpl) {
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
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  
    
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/css/fileinput.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/plugins/canvas-to-blob.min.js" 
      type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/plugins/sortable.min.js" 
      type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/plugins/purify.min.js" 
      type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/fileinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/themes/gly/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/locales/es.js"></script>
    
    <script type="text/javascript" src="../JS/formato_reporte.js"></script>
    
    <link rel="stylesheet" href="../css/libros_portada.css" type="text/css" />
    <script type="text/javascript" src="../JS/portada_libros.js"></script>
  
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
      <a class="navbar-brand" style="color: white"> Alumno - Alumno</a>
        
      <ul class="nav navbar-nav navbar-right">      
        <li><a style="color:white; font-size:14px" href="foros.php">Foros</a></li>
        <li><a href="inscripcion.php" style="color: white">Inscribir</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Lecturas<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href= "grupos.php">Ver todos</a></li><li><a href= "grupo.php?info1=A">A - Sala Barrels - Red Barrels</a></li>     
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Cuenta<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="datos.php">Alumno</a></li>  
              <li><a href="foto.php">Foto</a></li>  
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div><label><a href="index.php">index</a></label> > <label>foto</label></div> 

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      <form class="form form-vertical" method="post" enctype="multipart/form-data" action="foto.php?accion=upload" novalidate>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Imagen de Perfil</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12" id="imgPortada">
                <div id="kv-avatar-errors-2" class="center-block" style="display:none"></div>
                <div class="kv-avatar center-block text-center form-group" style="width:200px">
                  <input id="portada" name="foto" type="file" class="file-loading" accept="image/*" required/>
                </div>
              </div>
            </div> <!--end row-->
          </div> <!-- end-panel-body -->
        </div> <!-- end-panel-panel-default -->
      </form>
    </nav>
  </div>
</div>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      <div class="panel panel-default">
        
        <div class="alert alert-warning alert-dismissible" role="alert">
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      		<span aria-hidden="true">&times;</span></button>
      	  <strong>¡Aviso!</strong> Si toma una foto desde la webcam, se guardará automáticamente como foto de perfil.
      	</div>
              
        <div class="panel-heading">
          <h3 class="panel-title">Foto de perfil</h3>
        </div>
              
        <div class="form-group">
          <div class="well">
              <div class="container-fluid">
                <label>Tomar foto desde la webcam:</label>
                
                <div class="row-fluid">
                  <div style="float:left;">
                    <div class="span12">
                      <!--<div class="form-actions">-->
                        <!--<div>-->
                          <input id='botonIniciar' type='button' value='Iniciar Camara' class="btn btn-info"/>
                        <!--</div>-->
                      <!--</div>-->
          
                      <div class="span4">
                        <div class="titulo">Cámara</div>
                        <video id="camara" width="127px" High="137px" autoplay controls></video>
                      </div>
                    </div>
                  </div>
                      
                  <div style="float:right;">
                    <div class="span4">
                      <input id='botonFoto' type='button' value='Tomar Foto' class="btn btn-danger "/>
                      <div class="titulo">Foto</div>
                      <canvas id="foto" width="127px" High="137px" ></canvas>
                    </div> 
    
                    <div class="span4">
                      <div id="consola"></div>  
                    </div> 
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>  

<script type="text/javascript">
  $("#portada").fileinput({
    overwriteInitial: true,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    showUpload: true,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancela o reinicia',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="../../Images/fotos/33333333.jpeg" alt="portada" style="width:120px"><h6 class="text-muted">Clic aquí para subir imagen</h6>',
     layoutTemplates: {main2: '{preview} {remove} {upload} {browse}'}, 
    allowedFileExtensions: ["jpg", "png"]
  });
</script>

</body>
</html><?php }
}
