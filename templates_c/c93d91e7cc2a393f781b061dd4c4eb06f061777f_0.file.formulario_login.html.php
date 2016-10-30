<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:26:53
  from "/var/www/html/SALAS_LECTURAS/templates/formulario_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf6adee53e0_36662628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c93d91e7cc2a393f781b061dd4c4eb06f061777f' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/formulario_login.html',
      1 => 1470940249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf6adee53e0_36662628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
  <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

  <br/>
  <label><a href="formcontrasena.php">No recuerdo mi contraseña</a></label>
</form>
</center>
    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
