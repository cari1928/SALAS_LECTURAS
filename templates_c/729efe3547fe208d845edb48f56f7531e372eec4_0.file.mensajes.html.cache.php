<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 01:13:38
  from "/home/ubuntu/workspace/templates/mensajes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_594f0e4258d605_45407094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '729efe3547fe208d845edb48f56f7531e372eec4' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mensajes.html',
      1 => 1485650237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594f0e4258d605_45407094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1237325769594f0e425619d9_16669072';
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
