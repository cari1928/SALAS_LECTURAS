<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-29 21:12:15
  from "/home/ubuntu/workspace/templates/admin/foro/foro_header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59f6442fa1c3a8_40667298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3354f05b6e1b1c5b20fd971d480b70dfc1f78b0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/foro/foro_header.html',
      1 => 1506316183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f6442fa1c3a8_40667298 (Smarty_Internal_Template $_smarty_tpl) {
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
  <link rel="shortcut icon" href="../Images/logo.ico">
  
  <!--CSS-->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> <!--Pagination-->
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link href="../css/foro/bootstrap.min.css" rel="stylesheet">
  <link href="../css/foro/font-awesome.min.css" rel="stylesheet">
  <link href="../css/foro/lightbox.css" rel="stylesheet"> 
  <link href="../css/foro/animate.min.css" rel="stylesheet"> 
  <link href="../css/foro/main.css" rel="stylesheet">
  <link href="../css/foro/responsive.css" rel="stylesheet">
	
  <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->       
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../Images/foro/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../Images/foro/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../Images/foro/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../Images/foro/ico/apple-touch-icon-57-precomposed.png">
  
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
 src="../JS/pagination/jquery.twbsPagination.js" type="text/javascript"><?php echo '</script'; ?>
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

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <a class="navbar-brand" href="datos.php" style="color:white"><?php echo $_smarty_tpl->tpl_vars['nombrecuenta']->value;?>
</a>
        
        <ul class="nav navbar-nav navbar-right">     
          <li><a href="foros.php" style="color: white">Foros</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Cuenta<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="datos.php"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</a></li>   
                <li><a href="../logout.php">Logout</a></li> 
                <?php if (isset($_smarty_tpl->tpl_vars['bandera_roles']->value)) {?><li><a href="../roles.php?accion=cambiar">Cambiar rol</a></li><?php }?> 
            </ul>
          </li>
        </ul>     
        <ul class="nav navbar-nav navbar-right">
          <div class="form-group">
            <?php if (isset($_smarty_tpl->tpl_vars['bandera_mensajes']->value)) {?>
              <h6><a href="redacta.php?info=<?php echo $_smarty_tpl->tpl_vars['para']->value;?>
&accion=redactar&periodo=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
"><img src="../Images/sobre.png"></a></h6>
            <?php }?>
          </div>
        </ul>   
      </div><!-- /.navbar-collapse -->
      
    </div><!-- /.container-fluid -->
  </nav>
</body><?php }
}
