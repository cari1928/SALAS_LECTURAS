<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-19 02:36:12
  from "/home/ubuntu/workspace/templates/admin/promotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5880261cea3091_51387493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914aee8fb76577dfe96838af7c32e42c2f9297b0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/promotor.html',
      1 => 1484792449,
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
function content_5880261cea3091_51387493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3210514795880261cd71b21_13573279';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
  

<table class='table'>
	<?php if (!isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
		<tr><td colspan='4' align='right'>
			<a href='promotor.php?accion=form_insert'><img src='../Images/add.png'/> </a>
		</td></tr>
	<?php } else { ?>
		<tr><td colspan='4' align='right'>
			<a href='reporte_pdf.php?accion=promotores&info1=1&info2=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
'>
			<img src='../Images/pdf.png' title='Reporte Promotores-Periodos'/>
		</a></td></tr>
	<?php }?>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
	<table class='table table-hover'>
		<tr class='info'>		
			<th><center>RFC</center></th>
			<th><center>PROMOTOR</center></th>
			<th><center>EMAIL</center></th>
			<th><center>ESPECIALIDAD</center></th>
			<?php if (!isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
				<th><center>ELIMINAR</center></th>
				<th><center>ACTUALIZAR</center></th>
			<?php }?>
			<th><center>GRUPOS</center></th>
			<?php if (isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?><th><center>REPORTE</center></th><?php }?>
		</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotores']->value, 'promotor');
foreach ($_from as $_smarty_tpl->tpl_vars['promotor']->value) {
$_smarty_tpl->tpl_vars['promotor']->_loop = true;
$__foreach_promotor_0_saved = $_smarty_tpl->tpl_vars['promotor'];
?>
		<tr>
			<td><center><?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['promotor']->value['nombre'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['promotor']->value['correo'];?>
</center></td>
			<td><center>
				<?php if ($_smarty_tpl->tpl_vars['promotor']->value['cveespecialidad'] == 'O') {?>
					<?php echo $_smarty_tpl->tpl_vars['promotor']->value['Otro'];?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['promotor']->value['Especialidad'];?>

				<?php }?>
			</center></td>
			<?php if (!isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
				<td><center>
					<a class="delete" href="promotor.php?accion=delete&info1=<?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];?>
">
						<img src="../Images/cancelar.png">
					</a></center></td>
				<td><center><a href="promotor.php?accion=form_update&info1=<?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];?>
">
					<img src="../Images/edit.png">
				</a></center></td>
			<?php }?>
			<td><center><a href="promotor.php?accion=mostrar&info1=<?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];
if (isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>&info2<?php }?>">
				<img src="../Images/mostrar.png">
			</a></center></td>
			<?php if (isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
				<td colspan='4' align='right'><center>
					<a href='reporte_pdf.php?accion=promotor&info1=1&info2=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
&info3=<?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];?>
'>
					<img src='../Images/pdf.png' title='Reporte Promotor-Periodo'/></a>
				<center></td>
			<?php }?>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['promotor'] = $__foreach_promotor_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
