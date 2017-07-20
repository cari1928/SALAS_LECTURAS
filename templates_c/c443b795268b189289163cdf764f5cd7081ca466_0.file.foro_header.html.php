<?php
/* Smarty version 3.1.30-dev/53, created on 2017-07-20 01:06:51
  from "/home/ubuntu/workspace/templates/foro_header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5970022bd95d84_10971148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c443b795268b189289163cdf764f5cd7081ca466' => 
    array (
      0 => '/home/ubuntu/workspace/templates/foro_header.html',
      1 => 1500180047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970022bd95d84_10971148 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--Metas-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta charset="utf-8">
  <title>Foros</title>
  
  <!--Logo-->
  <link rel="shortcut icon" href="Images/logo.ico">
  
  <!--CSS-->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> <!--Pagination-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="css/foro/bootstrap.min.css" rel="stylesheet">
  <link href="css/foro/font-awesome.min.css" rel="stylesheet">
  <link href="css/foro/lightbox.css" rel="stylesheet"> 
  <link href="css/foro/animate.min.css" rel="stylesheet"> 
	<link href="css/foro/main.css" rel="stylesheet">
	<link href="css/foro/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->       
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Images/foro/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Images/foro/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Images/foro/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="Images/foro/ico/apple-touch-icon-57-precomposed.png">
  
  <!--Initial Javascript-->
  <?php echo '<script'; ?>
 type="text/javascript">var switchTo5x=true;<?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="http://w.sharethis.com/button/buttons.js"><?php echo '</script'; ?>
>
  <!--Javascript Pagination-->
  <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="JS/pagination/jquery.twbsPagination.js" type="text/javascript"><?php echo '</script'; ?>
>
    
</head>

<body id="contenedor">
  <header><!--Para desplegar el banner--></header>
  
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
        <a class="navbar-brand" href="index.php" style="color: white">Salas Lectura</a>
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="mensaje.php" style="color: white">Avisos</a></li>
          <li><a href="foros.php" style="color: white">Foros</a></li>
          <li><a href="login.php" style="color: white">Login</a></li>      
          <li><a href="registrar.php" style="color: white">Registrar</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
      
    </div><!-- /.container-fluid -->
  </nav>
</body><?php }
}
