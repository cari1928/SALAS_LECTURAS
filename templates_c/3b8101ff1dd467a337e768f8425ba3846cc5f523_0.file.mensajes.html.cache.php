<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 00:38:38
  from "/home/ubuntu/workspace/templates/mensajes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a04f50edd8134_29903855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b8101ff1dd467a337e768f8425ba3846cc5f523' => 
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
function content_5a04f50edd8134_29903855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17648454905a04f50edd1d32_88363254';
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
