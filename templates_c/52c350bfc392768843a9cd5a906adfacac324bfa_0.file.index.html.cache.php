<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:26:58
  from "/var/www/html/SALAS_LECTURAS/templates/promotor/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf6b2e96af3_66045184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52c350bfc392768843a9cd5a906adfacac324bfa' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/promotor/index.html',
      1 => 1470336813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf6b2e96af3_66045184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7072944357fcf6b2e6c3f8_44892326';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
