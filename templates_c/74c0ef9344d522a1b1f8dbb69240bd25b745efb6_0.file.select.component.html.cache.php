<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 00:38:38
  from "/home/ubuntu/workspace/templates/select.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a04f50edb4499_92279384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74c0ef9344d522a1b1f8dbb69240bd25b745efb6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/select.component.html',
      1 => 1507695840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a04f50edb4499_92279384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15665206415a04f50ed74d51_11934719';
?>
<select class="form-control" name="datos[<?php echo $_smarty_tpl->tpl_vars['nombrecolumna']->value;?>
]" <?php if (isset($_smarty_tpl->tpl_vars['redireccion']->value)) {?> onchange="location=this.value" <?php }?> required>
  <option value="<?php if (isset($_smarty_tpl->tpl_vars['redireccion']->value)) {
echo $_smarty_tpl->tpl_vars['redireccion']->value['pagina'];
echo $_smarty_tpl->tpl_vars['redireccion']->value['accion'];
echo $_smarty_tpl->tpl_vars['redireccion']->value['nombre'];?>
=<?php echo $_smarty_tpl->tpl_vars['tipo']->value[0];
echo $_smarty_tpl->tpl_vars['redireccion']->value['get'];?>
&info4=1<?php } else { ?>-1<?php }?>">Selecciona una opción</option>
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
" 
          <?php if ($_smarty_tpl->tpl_vars['tipo']->value[0] == $_smarty_tpl->tpl_vars['selected']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['tipo']->value[1];?>
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
