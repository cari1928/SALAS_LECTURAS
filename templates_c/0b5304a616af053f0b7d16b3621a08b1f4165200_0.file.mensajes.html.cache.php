<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-28 05:38:41
  from "/home/ubuntu/workspace/templates/mensajes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_595340e10a4d09_41903945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b5304a616af053f0b7d16b3621a08b1f4165200' => 
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
function content_595340e10a4d09_41903945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1149997752595340e0e85705_40237497';
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
