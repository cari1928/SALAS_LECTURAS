<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-19 02:03:18
  from "/home/ubuntu/workspace/templates/admin/periodos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58801e66c24830_97532160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020700f5320e5e8bab0862a8b81e7e44f45b56a3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/periodos.html',
      1 => 1484772008,
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
function content_58801e66c24830_97532160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '103951282058801e66bd6bb3_87569144';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   

<?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
	<table class='table'>
			<tr><td colspan='4' align='right'>
				<a href='periodos.php?accion=form_insert&tabla=periodo'>
					<img src='../Images/add.png'/> 
				</a>
			</td></tr>
	</table>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {?><h3>Seleccione un periodo</h3><?php }?>
	<table class='table table-hover'>
		<tr class='info'>		
			<th><center>CLAVE</center></th>
			<th><center>FECHA INICIO</center></th>
			<th><center>FECHA FINAL</center></th>
			<?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?><th><center>ELIMINAR</center></th><?php }?>
			<?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?><th><center>ACTUALIZAR</center></th><?php }?>
		</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periodos']->value, 'periodo');
foreach ($_from as $_smarty_tpl->tpl_vars['periodo']->value) {
$_smarty_tpl->tpl_vars['periodo']->_loop = true;
$__foreach_periodo_0_saved = $_smarty_tpl->tpl_vars['periodo'];
?>
		<tr>
			<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
				<td><center>
					<a href="historial.php?accion=periodo&info1=<?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
</center>
				</a></td>
			<?php } else { ?>
				<td><center><?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
</center></td>
			<?php }?>
			<td><center><?php echo $_smarty_tpl->tpl_vars['periodo']->value['fechainicio'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['periodo']->value['fechafinal'];?>
</center></td>
			<?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
				<td><center>
					<a class="delete" href="periodos.php?accion=eliminar&info1=<?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
">
					<img src="../Images/cancelar.png">
				</a></center></td>
				<td><center><a href="periodos.php?accion=form_update&info2=<?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
">
				<img src="../Images/edit.png">
				</a></center></td>
			<?php }?>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['periodo'] = $__foreach_periodo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
