<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-30 17:19:51
  from "/home/ubuntu/workspace/templates/admin/periodos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_586697376179f8_41804480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020700f5320e5e8bab0862a8b81e7e44f45b56a3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/periodos.html',
      1 => 1483072425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_586697376179f8_41804480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '155498926458669737537467_68997545';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<table class='table table-striped'>
	<tr><td colspan='4' align='right'>
		<a href='periodos.php?accion=form_insert&tabla=periodo'>
			<img src='../Images/add.png'/> 
		</a>
	</td></tr>
</table>
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?>
	<table class='table table-striped'>
		<tr>		
			<th>CLAVE PERIODO</th>
			<th>FECHA INICIO</th>
			<th>FECHA FINAL</th>
			<th>ELIMINAR</th>
			<th>ACTUALIZAR</th>
		</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periodos']->value, 'periodo');
foreach ($_from as $_smarty_tpl->tpl_vars['periodo']->value) {
$_smarty_tpl->tpl_vars['periodo']->_loop = true;
$__foreach_periodo_0_saved = $_smarty_tpl->tpl_vars['periodo'];
?>
		<tr>
			<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
				<td><a href="gruposHistorial.php?info1=<?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
&info2=<?php echo $_smarty_tpl->tpl_vars['periodo']->value['fechainicio'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>

				</a></td>
			<?php } else { ?>
				<td><?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
</td>
			<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['periodo']->value['fechainicio'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['periodo']->value['fechafinal'];?>
</td>
			<td><a href="periodos.php?accion=eliminar&info1=<?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="periodos.php?accion=form_update&info2=<?php echo $_smarty_tpl->tpl_vars['periodo']->value['cveperiodo'];?>
">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['periodo'] = $__foreach_periodo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
