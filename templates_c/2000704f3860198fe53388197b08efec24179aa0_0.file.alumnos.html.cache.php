<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-13 12:25:42
  from "/var/www/html/SALAS_LECTURAS/templates/admin/alumnos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57ffc396e7dcf5_92555369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2000704f3860198fe53388197b08efec24179aa0' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/alumnos.html',
      1 => 1470329817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57ffc396e7dcf5_92555369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '132682549357ffc396bf4c29_97342820';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<?php echo $_smarty_tpl->tpl_vars['tabla2']->value;?>

<?php echo $_smarty_tpl->tpl_vars['alumnos']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
