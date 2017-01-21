<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-20 10:05:41
  from "/home/ubuntu/workspace/templates/mensajes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5881e0f5cbb595_60282572',
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
function content_5881e0f5cbb595_60282572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14726099705881e0f5cae417_31502634';
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
