<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:18:20
  from "/var/www/html/SALAS_LECTURAS/templates/admin/periodos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf4acdb7c81_09958645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9927f65860c52ec2a4c93dca08c95f79a018b539' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/periodos.html',
      1 => 1470329842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf4acdb7c81_09958645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '56167226857fcf4acd7e5a5_40184426';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<?php echo $_smarty_tpl->tpl_vars['tabla2']->value;?>

<?php echo $_smarty_tpl->tpl_vars['periodos']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
