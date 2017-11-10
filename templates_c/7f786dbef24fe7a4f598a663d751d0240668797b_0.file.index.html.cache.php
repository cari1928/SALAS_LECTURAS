<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 06:12:54
  from "/home/ubuntu/workspace/templates/promotor/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a054366cebb57_02782620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f786dbef24fe7a4f598a663d751d0240668797b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/index.html',
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
function content_5a054366cebb57_02782620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16194012455a054366cd7a07_42254096';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
