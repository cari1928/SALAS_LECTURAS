<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-29 21:51:40
  from "/home/ubuntu/workspace/templates/prueba.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59f64d6cacda30_09538822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47d0703c453855fc5aeb6ae785321ff47a5461e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/prueba.html',
      1 => 1509313898,
      2 => 'file',
    ),
    'f88261f29070225f7792e37fec39cb23675e4d2e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/foro_header.html',
      1 => 1506308877,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_59f64d6cacda30_09538822 (Smarty_Internal_Template $_smarty_tpl) {
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
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->       
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Images/foro/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Images/foro/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Images/foro/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="Images/foro/ico/apple-touch-icon-57-precomposed.png">
  
  <!--Initial Javascript-->
  <script type="text/javascript">var switchTo5x=true;</script>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <!--Javascript Pagination-->
  <script src="//code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="JS/pagination/jquery.twbsPagination.js" type="text/javascript"></script>
    
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
</body>
<div><label><a href="index.php">index</a></label> > <label>foros</label></div>

<section id="blog" class="padding-top">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 col-sm-9">
        <div class="row">
          <div id="page-content" class="page-content"></div>
        </div>
        
        <!--pages-->
        <div class="blog-pagination">
          <ul id="pagination-demo" class="pagination-lg"></ul>
        </div>
      </div>

      <div class="col-sm-12 col-md-12">
        <div class="single-blog single-column">
          <div class="col-sm-6 col-md-6" align="center">
            <a href="foro_libro.php?action=show&info=libro_cvelibro">
              <img alt="" class="img-responsive" src="Images/portadas/1.jpg"/>
            </a>
            <div class="post-overlay">
              <span class="uppercase">
                <a href="foro_libro.php?action=show&info=libro_cvelibro">
                  <small>
                    Entrar
                  </small>
                </a>
              </span>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <h2 class="post-title bold">
              <a href="foro_libro.php?action=show&info=libro_cvelibro">
                Libro_titulo
              </a>
            </h2>
            <h3 class="post-author">
              <a href="#">
                Escrito por libro_autor
              </a>
            </h3>
            <p>
              Libro_intro
            </p>
            <a class="read-more" href="foro_libro.php?action=show&info=libro_cvelibro">
              Ver más
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php }
}
