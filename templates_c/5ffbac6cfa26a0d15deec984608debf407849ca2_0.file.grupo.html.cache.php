<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 05:44:28
  from "/home/ubuntu/workspace/templates/admin/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5873233ca5d351_15405940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ffbac6cfa26a0d15deec984608debf407849ca2' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/grupo.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5873233ca5d351_15405940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7877952235873233ca466f7_24507220';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

  <center>
   <div class="form-group" style ="background-color:#f0f0f0">
      <label><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</label>
      <br/>
    </div>
   </center>
  <?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
