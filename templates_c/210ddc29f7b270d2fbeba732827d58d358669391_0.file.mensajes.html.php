<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-04 02:47:00
  from "/home/ubuntu/workspace/templates/promotor/mensajes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d44ba44b0380_48692908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210ddc29f7b270d2fbeba732827d58d358669391' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/mensajes.html',
      1 => 1501191439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59d44ba44b0380_48692908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


<div class="page-header">
  <h3>Mensajes Enviados</h3>
  Grupo: <?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>

</div>

<?php if ($_smarty_tpl->tpl_vars['datos']->value == "No se puede acceder a los mensajes") {?>
	<?php echo $_smarty_tpl->tpl_vars['datos']->value;?>

<?php } else { ?>
	<center>
		<table class="table table-striped">
			<tr class="info">
				<th width="400px"><center>INTRODUCCIÓN</center></th>
				<th><center>TIPO</center></th>
				<th><center>FECHA</center></th>
				<th><center>EXPIRACIÓN</center></th>
				<th><center>LEER</center></th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'mensaje');
foreach ($_from as $_smarty_tpl->tpl_vars['mensaje']->value) {
$_smarty_tpl->tpl_vars['mensaje']->_loop = true;
$__foreach_mensaje_0_saved = $_smarty_tpl->tpl_vars['mensaje'];
?>
			<tr>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['introduccion'];?>
</center></td>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['tipo'];?>
</center></td>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['fecha'];?>
</center></td>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['expira'];?>
</center></td>
				<td style="vertical-align:middle"><center>
					<a href="msj.php?accion=ver&info=<?php echo $_smarty_tpl->tpl_vars['mensaje']->value['cvemsj'];?>
"><img src="../Images/lupa.png"></a>
				</center></td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['mensaje'] = $__foreach_mensaje_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		</table>
	</center>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
