<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-30 04:02:20
  from "/home/ubuntu/workspace/templates/usuario/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5865dc4c09e7f4_63399768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1243bf04a498ec570551390659a3708e90bdca3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/index.html',
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
function content_5865dc4c09e7f4_63399768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1394269115865dc4c0804c8_15126109';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
