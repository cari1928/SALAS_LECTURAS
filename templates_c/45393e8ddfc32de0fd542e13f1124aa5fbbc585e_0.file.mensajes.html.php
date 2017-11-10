<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 04:18:22
  from "/home/ubuntu/workspace/templates/mensajes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a05288e600d00_24778181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45393e8ddfc32de0fd542e13f1124aa5fbbc585e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mensajes.html',
      1 => 1499623674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a05288e600d00_24778181 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }
}
}
