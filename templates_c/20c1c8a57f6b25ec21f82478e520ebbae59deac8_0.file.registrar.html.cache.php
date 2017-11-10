<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 00:38:38
  from "/home/ubuntu/workspace/templates/registrar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a04f50edce709_49622436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c1c8a57f6b25ec21f82478e520ebbae59deac8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/registrar.html',
      1 => 1499804260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:mensajes.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a04f50edce709_49622436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14222788225a04f50edbcf77_11492603';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../css/bootstrap/fileinput/js/fileinput.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="JS/script_foto.js"><?php echo '</script'; ?>
>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3"> 
    
      <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
      
      <form action='registrar.php' method='post'>
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title"><center><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</center></h3>
          </div>
          
          <div class="panel-body">
            <div class="form-group">
              <label>Nombre Completo:</label>
              <input class="form-control" placeholder="Nombre y Apellidos" name="datos[nombre]" required>
            </div>
            
            <div class="form-group">
              <label>Especialidad:</label>
              <?php echo $_smarty_tpl->tpl_vars['especialidad']->value;?>

            </div>
            
            <div class="form-group">
              <label>Usuario:</label>
              <input class="form-control" placeholder="Número de Control" name="datos[usuario]" maxlength="13" required>
            </div>
            
            <div class="form-group">
              <label>Correo:</label>
              <input class="form-control" placeholder="Correo" name="datos[correo]" maxlength="75" required>
            </div>
            
            <div class="form-group">
              <label>Contraseña:</label>
              <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]" required>
            </div>
            
            <div class="form-group">
              <label>Confirmar contraseña:</label>
              <input type="password" class="form-control" placeholder="Confirmar contraseña" name="datos[confcontrasena]" required>
            </div>

          </div>
      </div>
        
        <div align="right">
          <button type="submit" class="btn btn-primary" value='Registrar' name="guardar">Registrar</button>  
        </div>
        
      </form>
      
    </nav>
  </div>  
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
