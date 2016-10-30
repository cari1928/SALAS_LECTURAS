<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:20:07
  from "/var/www/html/SALAS_LECTURAS/templates/admin/updateperiodos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf517d75a26_92902188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8d02946fe9bbbf3b795ca2e088e694772b24ce' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/updateperiodos.html',
      1 => 1470329874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf517d75a26_92902188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '105431160357fcf517cd9551_43506853';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<center>
    
       <form class="form-inline" action='updateperiodos.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <div class="form-group">
    <label>Fecha Inicio:</label>
    <br/>
    <input TYPE="date"  class="form-control" id="exampleInputEmail3" name="datos[fechaInicio]" id="producto" require value="<?php echo $_smarty_tpl->tpl_vars['fechaInicio']->value;?>
">
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Fecha Final:</label>
    <br/>
    <input TYPE="date"  class="form-control" id="exampleInputEmail3" name="datos[fechaFinal]" id="producto" require value="<?php echo $_smarty_tpl->tpl_vars['fechaFinal']->value;?>
">
  </div>
  <br/>
  <br/>
  
  <button type="submit" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['cve']->value;?>
" name="datos[cve]">Crear</button></br>

</form>
</center>
    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
