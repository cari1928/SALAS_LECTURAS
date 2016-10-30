<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:15:31
  from "/var/www/html/SALAS_LECTURAS/templates/admin/salas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf4037a1455_71955755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02d2c4b34dcff19ff234b607ace69139f45f0a5a' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/salas.html',
      1 => 1476195187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf4037a1455_71955755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '129322071257fcf40376cdc1_07149594';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<?php echo $_smarty_tpl->tpl_vars['tabla2']->value;?>

<?php echo $_smarty_tpl->tpl_vars['salones']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
