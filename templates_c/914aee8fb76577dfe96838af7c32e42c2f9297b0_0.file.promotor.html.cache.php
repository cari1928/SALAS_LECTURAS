<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-28 17:31:17
  from "/home/ubuntu/workspace/templates/admin/promotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5863f6e52ef1e5_89365079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914aee8fb76577dfe96838af7c32e42c2f9297b0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/promotor.html',
      1 => 1482946272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5863f6e52ef1e5_89365079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8565798335863f6e52bd241_61760987';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<table class='table table-striped'>
	<tr><td colspan='4' align='right'>
		<a href='promotor.php?accion=form_insert'>
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
if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
	<table class='table table-striped'>
		<tr>		
			<th>RFC</th>
			<th>PROMOTOR</th>
			<th>EMAIL</th>
			<th>ESPECIALIDAD</th>
			<th>ELIMINAR</th>
			<th>ACTUALIZAR</th>
			<th>MOSTRAR</th>
		</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotores']->value, 'promotor');
foreach ($_from as $_smarty_tpl->tpl_vars['promotor']->value) {
$_smarty_tpl->tpl_vars['promotor']->_loop = true;
$__foreach_promotor_0_saved = $_smarty_tpl->tpl_vars['promotor'];
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['promotor']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['promotor']->value['correo'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['promotor']->value['Especialidad'];?>
</td>
			<td><a href="promotor.php?accion=delete&info1=<?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];?>
">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="promotor.php?accion=form_update&info1=<?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];?>
">
				<img src="../Images/edit.png">
			</a></td>
			<td><a href="promotor.php?accion=mostrar&info1=<?php echo $_smarty_tpl->tpl_vars['promotor']->value['cveusuario'];?>
">
				<img src="../Images/mostrar.png">
			</a></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['promotor'] = $__foreach_promotor_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
