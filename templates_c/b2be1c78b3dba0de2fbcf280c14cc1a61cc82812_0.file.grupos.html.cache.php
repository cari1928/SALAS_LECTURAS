<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:18:26
  from "/var/www/html/SALAS_LECTURAS/templates/admin/grupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf4b22c7ee4_97405035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2be1c78b3dba0de2fbcf280c14cc1a61cc82812' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/grupos.html',
      1 => 1475760659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf4b22c7ee4_97405035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '68713586657fcf4b21f1550_65373778';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php if (isset($_smarty_tpl->tpl_vars['periodo']->value)) {?>      
<center>
	<label><?php echo $_smarty_tpl->tpl_vars['periodo']->value;?>
</label>
</center>
<?php }
echo $_smarty_tpl->tpl_vars['tabla']->value;?>
       
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
