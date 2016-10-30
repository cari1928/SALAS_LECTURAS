<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:41:57
  from "/var/www/html/SALAS_LECTURAS/templates/promotor/vergrupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcfa35a704b5_66745723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc142bd9ce038fdea475c1a9787e752d35508af0' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/promotor/vergrupos.html',
      1 => 1470336903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcfa35a704b5_66745723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '135962582857fcfa35a06989_20298107';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
