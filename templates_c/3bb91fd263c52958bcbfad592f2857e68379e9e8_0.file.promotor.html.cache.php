<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:17:48
  from "/var/www/html/SALAS_LECTURAS/templates/admin/promotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf48ce36f32_62229113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb91fd263c52958bcbfad592f2857e68379e9e8' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/promotor.html',
      1 => 1470329863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf48ce36f32_62229113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '24597272357fcf48cdfa9d2_61974938';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<?php echo $_smarty_tpl->tpl_vars['tabla2']->value;?>

<?php echo $_smarty_tpl->tpl_vars['promotor']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
