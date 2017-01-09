<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 06:19:51
  from "/home/ubuntu/workspace/templates/promotor/vergrupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58732b87033986_31127394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d4d6d688fcfd4e98ed779a060ab6c5e44399c19' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/vergrupos.html',
      1 => 1483942044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58732b87033986_31127394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '187492258158732b8700b3d1_18213984';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['tablegrupos']->value)) {?>
		<table cellspacing=0 cellpadding=2 class="table table-striped">
			<tr>
				<th><center>GRUPO</center></th>
				<th><center>SALA</center></th>
				<th><center>UBICACIÓN</center></th>
				<th><center>HORARIO</center></th>
				<th><center>ACTUALIZAR</center></th>
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
					<td><center><a href="#"><img src="../Images/periodos.png"></a></center></td>
					<td><center><a href="grupos.php?accion=form_update&info=<?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>
"><img src="../Images/edit.png"></a></center></td>
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
