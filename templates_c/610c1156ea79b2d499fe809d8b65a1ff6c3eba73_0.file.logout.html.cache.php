<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:26:52
  from "/var/www/html/SALAS_LECTURAS/templates/logout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf6acdc3f65_93220413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610c1156ea79b2d499fe809d8b65a1ff6c3eba73' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/logout.html',
      1 => 1461646299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf6acdc3f65_93220413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12748182057fcf6acd9dff6_89669191';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center><h1>Sesión finalizada</h1></center>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
