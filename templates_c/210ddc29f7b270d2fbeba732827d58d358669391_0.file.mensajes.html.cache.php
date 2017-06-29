<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-29 06:16:08
  from "/home/ubuntu/workspace/templates/promotor/mensajes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59549b28a0ec06_44592604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210ddc29f7b270d2fbeba732827d58d358669391' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/mensajes.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59549b28a0ec06_44592604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '73412694759549b2899cb68_18035747';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="main-content">
	<article><h1>Mensajes</h1></article>
</section>
<?php if ($_smarty_tpl->tpl_vars['datos']->value == "No se puede acceder a los mensajes") {?>
	<?php echo $_smarty_tpl->tpl_vars['datos']->value;?>

<?php } else { ?>
	<center>
		<table cellspacing=0 cellpadding=2 class="table table-striped">
			<tr>
				<th>Intrducuccion</th>
				<th>Tipo</th>
				<th>Emisor</th>
				<th>Receptor</th>
				<th>Fecha</th>
				<th>Expiración</th>
				<th>Ver</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'mensaje');
foreach ($_from as $_smarty_tpl->tpl_vars['mensaje']->value) {
$_smarty_tpl->tpl_vars['mensaje']->_loop = true;
$__foreach_mensaje_0_saved = $_smarty_tpl->tpl_vars['mensaje'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['introduccion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['tipo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['nombre'];?>
</td>
				<td>Grupo: <?php echo $_smarty_tpl->tpl_vars['mensaje']->value[6];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['fecha'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['expira'];?>
</td>
				<td><a href="msj.php?cvemsj=<?php echo $_smarty_tpl->tpl_vars['mensaje']->value['cvemsj'];?>
&accion=ver"><img src="../Images/lupa.png"></a></td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['mensaje'] = $__foreach_mensaje_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datosI']->value, 'mensaje');
foreach ($_from as $_smarty_tpl->tpl_vars['mensaje']->value) {
$_smarty_tpl->tpl_vars['mensaje']->_loop = true;
$__foreach_mensaje_1_saved = $_smarty_tpl->tpl_vars['mensaje'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['introduccion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['tipo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['nombree'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['nombrer'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['fecha'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['expira'];?>
</td>
				<td><a href="msj.php?cvemsj=<?php echo $_smarty_tpl->tpl_vars['mensaje']->value['cvemsj'];?>
&accion=ver"><img src="../Images/lupa.png"></a></td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['mensaje'] = $__foreach_mensaje_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		</table>
	</center>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
