<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 04:17:37
  from "/home/ubuntu/workspace/templates/admin/formato_reporte.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a0528619b9567_54351617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756b79040c1c0a13113fb38cedaf1de8aaa20611' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/formato_reporte.html',
      1 => 1507071494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a0528619b9567_54351617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7963305815a0528619a4931_43241767';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


<form action="formato_reporte.php?accion=fileinput" method="post" enctype="multipart/form-data">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Subir formato del reporte</h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
          <input id="file-1" type="file" class="file-loading" multiple=true data-preview-file-type="any" name="datos[archivo]">
      </div>
    </div>
  </div>
</form>
  
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
