<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-31 04:26:11
  from "/home/ubuntu/workspace/templates/admin/libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5867336309e1c4_26627858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcccd6da476436f04c4b21db795551acbdb6ca22' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/libros.html',
      1 => 1483158328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5867336309e1c4_26627858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2490611065867336305e603_51628770';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<table class='table table-striped'>
	<tr>
		<td colspan='4' align='right'>
			<a href='libros.php?accion=form_insert&tabla=periodo'>
				<img src='../Images/add.png'/> 
			</a>
		</td>
	</tr> 
</table>
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>
	<table class='table table-striped'>
		<tr>		
			<th width="300">CLAVE</th>
			<th width="300">AUTOR</th>
			<th width="300">TÍTULO</th>
			<th width="300">EDITORIAL</th>
			<th width="300">PRECIO</th>
			<th width="300">ELIMINAR</th>
			<th width="300">ACTUALIZAR</th>
		</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->_loop = true;
$__foreach_libro_0_saved = $_smarty_tpl->tpl_vars['libro'];
?>
		<tr>
			<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
				<td><a href="gruposHistorial.php?info1=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
&info2=<?php echo $_smarty_tpl->tpl_vars['libro']->value['fechainicio'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>

				</a></td>
			<?php } else { ?>
				<td><?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
</td>
			<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['libro']->value['autor'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['libro']->value['editorial'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['libro']->value['precio'];?>
</td>
			<td><a href="libros.php?accion=delete&info1=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</table>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
