<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-28 14:37:17
  from "/home/ubuntu/workspace/templates/select.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5953bf1d291ea0_49579466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0496f140ced8719ae232d86debff2d602278951a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/select.component.html',
      1 => 1498660472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5953bf1d291ea0_49579466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6487556655953bf1d25ef38_22734561';
?>
      
      <select class="form-control" name="datos[<?php echo $_smarty_tpl->tpl_vars['nombrecolumna']->value;?>
]" <?php if (isset($_smarty_tpl->tpl_vars['redireccion']->value)) {?> onchange="location = this.value" <?php }?>>
        <option value="-1">Selecciona una opción</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'tipo');
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->_loop = true;
$__foreach_tipo_0_saved = $_smarty_tpl->tpl_vars['tipo'];
?>
        <?php if (isset($_smarty_tpl->tpl_vars['redireccion']->value)) {?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['redireccion']->value['pagina'];
echo $_smarty_tpl->tpl_vars['redireccion']->value['accion'];
echo $_smarty_tpl->tpl_vars['redireccion']->value['nombre'];?>
=<?php echo $_smarty_tpl->tpl_vars['tipo']->value[0];
echo $_smarty_tpl->tpl_vars['redireccion']->value['get'];?>
" <?php if ($_smarty_tpl->tpl_vars['tipo']->value[0] == $_smarty_tpl->tpl_vars['selected']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['tipo']->value[1];?>
</option>
        <?php } else { ?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['tipo']->value[0] == $_smarty_tpl->tpl_vars['selected']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['tipo']->value[1];?>
</option>
        <?php }?>
      <?php
$_smarty_tpl->tpl_vars['tipo'] = $__foreach_tipo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
      </select><?php }
}
