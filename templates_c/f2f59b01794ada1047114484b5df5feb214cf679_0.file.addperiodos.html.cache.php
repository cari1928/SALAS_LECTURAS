<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:19:18
  from "/var/www/html/SALAS_LECTURAS/templates/admin/addperiodos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf4e6d06d43_77203217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f59b01794ada1047114484b5df5feb214cf679' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/addperiodos.html',
      1 => 1475592585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf4e6d06d43_77203217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '97229620557fcf4e6cd8a37_58845600';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<center>
    
       <form class="form-inline" action='addperiodos.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <div class="form-group">
    <label>Fecha Inicio:</label>
    <br/>
    <input TYPE="date"  class="form-control" id="exampleInputEmail3" name="datos[fechaInicio]" id="producto" require>
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Fecha Final:</label>
    <br/>
    <input TYPE="date"  class="form-control" id="exampleInputEmail3" name="datos[fechaFinal]" id="producto" require>
  </div>
  <br/>
  <br/>
  <?php echo $_smarty_tpl->tpl_vars['msjfecha']->value;?>

  <br/>
  <br/>
  <button type="submit" class="btn btn-default" value='Crear' name="crear">Crear</button></br>

</form>
</center>
    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
