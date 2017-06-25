<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 03:29:54
  from "/home/ubuntu/workspace/templates/admin/pdf/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_594f2e32e5d2e9_36767918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8716ccf0d1a5bae8508ab12e95f3c63b26b8bae5' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/pdf/header.html',
      1 => 1498169559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594f2e32e5d2e9_36767918 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reporte</title> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
    <style type="text/css">
        *
        {
            padding-bottom: 5px;
        }
    
        div#cap 
        {
            /*background-color: green;*/
            text-align: left;
            padding: 10px;
        }
        
        div#cap h1 
        {
            float: right;
            margin-right: 150px;
        }
        
        .usuario
        {
            float: right;
        }
        
        .grupo
        {
            text-align: left;
        }
        
        .table_container
        {
            margin-top: 10px;
        }
        
        .table_header
        {
          font-size: 15px;
          font-weight: bold;
        }
    </style>
</head>
<body>
    
<div id="cap">
    <h1>Salas de Lectura</h1>
    <img src="../Images/logo.jpg" width="200" height="90" alt=""></img>
</div>

<div class="logoHeader">
    <div class="info" align="left">
        <b>Instituto Tecnológico de Celaya</b><br>
        <b>Telefono:</b><br>
        <b>Correo:</b>
    </div>
</div><?php }
}
