<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 03:29:54
  from "/home/ubuntu/workspace/templates/admin/pdf/table.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_594f2e32e4be86_85009596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159cc9fc5dbb0b0e64b1483e6fdad048a24fce22' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/pdf/table.html',
      1 => 1498352729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594f2e32e4be86_85009596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="table_container">
  <div class="table_header">
    <center><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</center>
    <center><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</center>
  </div>

  <table class="table table-bordered">
    <thead class="thead-default">
      <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
$__foreach_column_2_saved = $_smarty_tpl->tpl_vars['column'];
?>
          <?php if ($_smarty_tpl->tpl_vars['column']->value == "NOMBRE") {?>
            <th style="text-align:center" width="80"><?php echo $_smarty_tpl->tpl_vars['column']->value;?>
</th>
          <?php } else { ?>
            <th style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['column']->value;?>
</th>
          <?php }?>
        <?php
$_smarty_tpl->tpl_vars['column'] = $__foreach_column_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
      </tr>
    </thead>
    
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_3_saved = $_smarty_tpl->tpl_vars['row'];
?>
        <tr>
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['fin']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['fin']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <td style="text-align; font-size:13px; vertical-align:middle" 
                valign="middle" align="center" <?php if ($_smarty_tpl->tpl_vars['i']->value == 1 && $_smarty_tpl->tpl_vars['table']->value == "alumnos") {?>width="80"<?php }?>><?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['row']->value[$_prefixVariable1];?>
</td>
          <?php }
}
?>

        </tr>
      <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </tbody>
  </table>
</div>
<?php }
}
