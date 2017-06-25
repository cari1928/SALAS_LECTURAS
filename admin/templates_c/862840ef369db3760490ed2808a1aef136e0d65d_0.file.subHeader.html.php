<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 00:06:13
  from "/home/ubuntu/workspace/templates/admin/pdf/subHeader.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_594efe757f4b45_53225018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '862840ef369db3760490ed2808a1aef136e0d65d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/pdf/subHeader.html',
      1 => 1497920731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594efe757f4b45_53225018 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="subHeader">
  <div class="usuario">
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'u');
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
$__foreach_u_0_saved = $_smarty_tpl->tpl_vars['u'];
?>
  	  <b><?php echo $_smarty_tpl->tpl_vars['u']->value['titulo'];?>
: </b><?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
<br>
  	<?php
$_smarty_tpl->tpl_vars['u'] = $__foreach_u_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  </div>
  
  <div class="grupo">
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grupo']->value, 'g');
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_g_1_saved = $_smarty_tpl->tpl_vars['g'];
?>
  	  <b><?php echo $_smarty_tpl->tpl_vars['g']->value['titulo'];?>
: </b><?php echo $_smarty_tpl->tpl_vars['g']->value['nombre'];?>
<br>
  	<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  </div>
</div><?php }
}
