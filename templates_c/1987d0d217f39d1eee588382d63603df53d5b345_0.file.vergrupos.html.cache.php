<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 04:20:40
  from "/home/ubuntu/workspace/templates/usuario/vergrupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a0529188e5f14_21533002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1987d0d217f39d1eee588382d63603df53d5b345' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/vergrupos.html',
      1 => 1510287639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:../mensajes.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a0529188e5f14_21533002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15004835705a05291884d5c7_18537299';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['tablegrupos']->value)) {?>
	<table cellspacing=0 cellpadding=2 class="table table-striped">
		<tr>
			<th><center>GRUPO</center></th>
			<th><center>SALA</center></th>
			<th><center>UBICACIÓN</center></th>
			<!--<th><center>HORARIO</center></th>-->
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablegrupos']->value, 'grupo');
foreach ($_from as $_smarty_tpl->tpl_vars['grupo']->value) {
$_smarty_tpl->tpl_vars['grupo']->_loop = true;
$__foreach_grupo_0_saved = $_smarty_tpl->tpl_vars['grupo'];
?>
			<tr>
				<td><center>
					<a href="grupo.php?info1=<?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>
"><?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>
</a></center>
				</td>
				<td><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['nombre'];?>
</center></td>
				<td><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['ubicacion'];?>
</center></td>
				<!--<td><center><a href=""><img src="../Images/periodos.png"></a></center></td>-->
			</tr>
		<?php
$_smarty_tpl->tpl_vars['grupo'] = $__foreach_grupo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
