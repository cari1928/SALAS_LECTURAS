<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-29 15:19:32
  from "/home/ubuntu/workspace/templates/registrar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59551a84c97a19_90145186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94e9263a63d37dc0dcdfa6eb967d8996ee32b73c' => 
    array (
      0 => '/home/ubuntu/workspace/templates/registrar.html',
      1 => 1486151815,
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
function content_59551a84c97a19_90145186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3"> 
    
      <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
      <br><br><br>
    </nav>
  </div>  
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
