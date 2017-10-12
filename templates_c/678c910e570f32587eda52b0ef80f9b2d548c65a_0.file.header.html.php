<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-11 17:15:11
  from "/home/ubuntu/workspace/templates/usuario/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59de519fd6ad94_77133820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '678c910e570f32587eda52b0ef80f9b2d548c65a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/header.html',
      1 => 1507222496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de519fd6ad94_77133820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Mostrar logo-->
  <link rel="shortcut icon" type="image/x-icon" href="../Images/logo.ico">
  
  <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.12.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"><?php echo '</script'; ?>
>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  
  <?php if (isset($_smarty_tpl->tpl_vars['mensajes']->value)) {?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <?php echo '<script'; ?>
 type="text/javascript" src="../JS/avisos_alumnos.js"><?php echo '</script'; ?>
>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
    <link rel="stylesheet" href="../css/links_menu.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="../JS/datos.js"><?php echo '</script'; ?>
>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['foto']->value) || isset($_smarty_tpl->tpl_vars['upload']->value)) {?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/css/fileinput.min.css" />
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/plugins/canvas-to-blob.min.js" 
      type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/plugins/sortable.min.js" 
      type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/plugins/purify.min.js" 
      type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/fileinput.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/themes/gly/theme.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.5/js/locales/es.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript" src="../JS/formato_reporte.js"><?php echo '</script'; ?>
>
    
    <link rel="stylesheet" href="../css/libros_portada.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="../JS/portada_libros.js"><?php echo '</script'; ?>
>
  <?php }?>

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
      <a class="navbar-brand" style="color: white"> <?php echo $_smarty_tpl->tpl_vars['nombrecuenta']->value;?>
</a>
        
      <ul class="nav navbar-nav navbar-right">      
        <li><a style="color:white; font-size:14px" href="foros.php">Foros</a></li>
        <li><a href="inscripcion.php" style="color: white">Inscribir</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Lecturas<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <?php echo $_smarty_tpl->tpl_vars['grupos']->value;?>
     
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Cuenta<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="datos.php"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</a></li>  
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><?php }
}
