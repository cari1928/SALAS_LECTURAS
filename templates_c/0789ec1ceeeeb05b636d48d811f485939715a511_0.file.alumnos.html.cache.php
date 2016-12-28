<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-27 19:00:13
  from "/home/ubuntu/workspace/templates/admin/alumnos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5862ba3d2c3b69_30353718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0789ec1ceeeeb05b636d48d811f485939715a511' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/alumnos.html',
      1 => 1482865202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5862ba3d2c3b69_30353718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12679803295862ba3d213590_83928911';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<table class='table table-striped'>
	<tr><td colspan='4' align='right'>
			<a href='alumnos.php?accion=form_insert'>
				<img src='../Images/add.png' /> 
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
if (isset($_smarty_tpl->tpl_vars['alumnos']->value)) {?>
	<table class='table table-striped'>
		<tr>		
			<th>NO. CONTROL</th>
			<th>NOMBRE</th>
			<th>ESPECIALIDAD</th>
			<th>CORREO</th>
			<th>ELIMINAR</th>
			<th>ACTUALIZAR</th>
			<th>MOSTRAR</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alumnos']->value, 'alumno');
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
$_smarty_tpl->tpl_vars['alumno']->_loop = true;
$__foreach_alumno_0_saved = $_smarty_tpl->tpl_vars['alumno'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['alumno']->value['Usuario'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['alumno']->value['Especialidad'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['alumno']->value['correo'];?>
</td>
				<td>
					<a href="alumnos.php?accion=delete&info1=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
"> 
						<img src="../Images/cancelar.png">
					</a>
				</td>
				<td>
					<a href="alumnos.php?accion=form_update&info2=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
"> 
						<img src="../Images/edit.png">
					</a>
				</td>
				<td>
					<a href="showalumnos.php?info1=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
"> 
						<img src="../Images/mostrarL.png">
					</a>
				</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['alumno'] = $__foreach_alumno_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
