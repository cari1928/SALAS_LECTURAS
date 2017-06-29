<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-28 04:27:20
  from "/home/ubuntu/workspace/templates/formulario_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59533028ba45e7_68605306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb100a1cd2a3b41db18016af96932eb4c4d72468' => 
    array (
      0 => '/home/ubuntu/workspace/templates/formulario_login.html',
      1 => 1486869845,
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
function content_59533028ba45e7_68605306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-md-push-4">
      
      <form action='login.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title"><center>Inicio de Sesión</center></h3>
          </div>
          
          <div class="panel-body">
            <div class="form-group">
              <label>Usuario:</label>
              <input  class="form-control" placeholder="NoControl / RFC" name="datos[cveUsuario]" required maxlength="13">
            </div>
            <div class="form-group">
              <label>Contraseña:</label>
              <input type="password" class="form-control" placeholder="Password" name="datos[contrasena]" required >
            </div>
            <div align="right">
              Recordar esta cuenta
              <input type="checkbox">
            </div>
            
            <?php if (isset($_smarty_tpl->tpl_vars['usuario_clave']->value)) {?>
              <input type="hidden" name="usuario_clave" value="<?php echo $_smarty_tpl->tpl_vars['usuario_clave']->value;?>
" />
            <?php }?>
            
            <?php if (isset($_smarty_tpl->tpl_vars['validar']->value)) {?>
              <input type="hidden" name="validar" value="<?php echo $_smarty_tpl->tpl_vars['validar']->value;?>
"/>
            <?php }?>
            
          </div>
        </div>
        <div class="form-group" align="right">
          <label><a href="formcontrasena.php">No recuerdo mi contraseña</a></label>  
          <button type="submit" class="btn btn-primary" value='Login' name="guardar">Sign in</button>
          </div>
      </form>
      
    </nav>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
