<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-26 15:22:25
  from "/home/ubuntu/workspace/templates/select.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_595126b1ceb166_19613978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0496f140ced8719ae232d86debff2d602278951a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/select.component.html',
      1 => 1484458466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595126b1ceb166_19613978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '491786899595126b1c78eb6_97925769';
?>
      <select class="form-control" name="datos[<?php echo $_smarty_tpl->tpl_vars['nombrecolumna']->value;?>
]">
        <option value="-1">Selecciona una opción</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'tipo');
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->_loop = true;
$__foreach_tipo_0_saved = $_smarty_tpl->tpl_vars['tipo'];
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['tipo']->value[0] == $_smarty_tpl->tpl_vars['selected']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['tipo']->value[1];?>
</option>
      <?php
$_smarty_tpl->tpl_vars['tipo'] = $__foreach_tipo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
      </select><?php }
}