<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-19 02:36:38
  from "/home/ubuntu/workspace/templates/mensajes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58802636d0df72_21337848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '729efe3547fe208d845edb48f56f7531e372eec4' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mensajes.html',
      1 => 1484620939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58802636d0df72_21337848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '66401978958802636cfbae0_23854513';
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
