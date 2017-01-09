<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-30 17:19:56
  from "/home/ubuntu/workspace/templates/admin/grupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5866973c879453_60693249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76a61c44dc90f4cad86d05da148916a12928f543' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/grupos.html',
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
function content_5866973c879453_60693249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2245930765866973c85fdb2_90776504';
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
