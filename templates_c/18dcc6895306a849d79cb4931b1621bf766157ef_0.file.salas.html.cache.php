<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-12 15:37:49
  from "/home/ubuntu/workspace/templates/admin/salas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59df8c4d464453_79637778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18dcc6895306a849d79cb4931b1621bf766157ef' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/salas.html',
      1 => 1506825450,
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
function content_59df8c4d464453_79637778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '76850508459df8c4d4349d6_63498725';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<h3>Listado de Salas</h3>
<table class='table'>
	<tr><td colspan='4' align='right'>
		<a href='salas.php?accion=form_insert&tabla=sala'>
			<img src='../Images/add.png'/>
		</a>
	</td></tr>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['salones']->value)) {?>
	<table id="example" class='table table-striped display' cellspacing="0" width="100%">
		<tr>		
			<th><center>CLAVE</center></th>
			<th><center>UBICACION</center></th>
			<th><center>ESTADO</center></th>
			<th><center>ELIMINAR</center></th>
			<th><center>ACTUALIZAR</center></th>
		</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['salones']->value, 'salon');
foreach ($_from as $_smarty_tpl->tpl_vars['salon']->value) {
$_smarty_tpl->tpl_vars['salon']->_loop = true;
$__foreach_salon_0_saved = $_smarty_tpl->tpl_vars['salon'];
?>
		<tr>
			<td><center><?php echo $_smarty_tpl->tpl_vars['salon']->value['cvesala'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['salon']->value['ubicacion'];?>
</center></td>
			<td><center><?php if ($_smarty_tpl->tpl_vars['salon']->value['disponible'] == 'f') {?>No Disponible<?php } else { ?>Disponible<?php }?></center></td>
			<td><center><a class="delete" href="salas.php?accion=delete&info1=<?php echo $_smarty_tpl->tpl_vars['salon']->value['cvesala'];?>
">
				<img src="../Images/cancelar.png">
			</a></center></td>
			<td><center><a href="salas.php?accion=form_update&info2=<?php echo $_smarty_tpl->tpl_vars['salon']->value['cvesala'];?>
">
				<img src="../Images/edit.png">
			</a></center></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['salon'] = $__foreach_salon_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
