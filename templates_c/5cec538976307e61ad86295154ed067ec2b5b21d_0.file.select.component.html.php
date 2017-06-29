<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-29 15:19:32
  from "/home/ubuntu/workspace/templates/select.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59551a84c5ef25_07913785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cec538976307e61ad86295154ed067ec2b5b21d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/select.component.html',
      1 => 1498662878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59551a84c5ef25_07913785 (Smarty_Internal_Template $_smarty_tpl) {
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
      </select>
      <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>

      <?php echo $_smarty_tpl->tpl_vars['tipo']->value[0];
}
}
