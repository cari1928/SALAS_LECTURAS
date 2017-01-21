<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-21 01:18:46
  from "/home/ubuntu/workspace/templates/formulario_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5882b6f6ab5435_57577981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb100a1cd2a3b41db18016af96932eb4c4d72468' => 
    array (
      0 => '/home/ubuntu/workspace/templates/formulario_login.html',
      1 => 1484331591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5882b6f6ab5435_57577981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }?>
<center>
    <h3>¡Bienvenido! <br> Por favor, inicia sesion. <br/></h3>
       <form class="form-inline" action='login.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <div class="form-group">
    <label>Usuario:</label>
    <br/>
    <input  class="form-control" id="exampleInputEmail3" placeholder="NoControl/RFC" name="datos[cveUsuario]" id="producto" required maxlength="13">
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Contraseña: </label>
    <br/>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="datos[contrasena]" id="producto" required >
  </div>
  <br/>
  <br/>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Recordar esta cuenta
    </label>
  </div>
  <button type="submit" class="btn btn-default" value='Login' name="guardar">Sign in</button> </br>
  <label><a href="formcontrasena.php">No recuerdo mi contraseña</a></label>
</form>
</center>
    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
