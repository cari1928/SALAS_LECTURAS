<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-19 07:12:21
  from "/home/ubuntu/workspace/templates/admin/grupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_588066d525caf9_16866580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76a61c44dc90f4cad86d05da148916a12928f543' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/grupos.html',
      1 => 1484809881,
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
function content_588066d525caf9_16866580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1638212652588066d5206540_40933794';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['tablegrupos']->value)) {?>
	<table class="table table-hover">
		<tr class='info'>
			<th><center>GRUPO</center></th>
			<th><center>SALA</center></th>
			<?php if ($_smarty_tpl->tpl_vars['table']->value == 'grupos') {?><th><center>PROMOTOR</center></th><?php }?>
			<th><center>UBICACIÓN</center></th>
			<th width="150"><center>LIBRO GRUPAL</center></th>
			<th width="400"><center>HORARIO</center></th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablegrupos']->value, 'grupo');
foreach ($_from as $_smarty_tpl->tpl_vars['grupo']->value) {
$_smarty_tpl->tpl_vars['grupo']->_loop = true;
$__foreach_grupo_0_saved = $_smarty_tpl->tpl_vars['grupo'];
?>
			<tr>
				<td style="vertical-align:middle"><center><a href="grupo.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {
echo $_smarty_tpl->tpl_vars['bandera']->value;
} else { ?>grupos<?php }?>&info1=<?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>
&info2=<?php if ($_smarty_tpl->tpl_vars['table']->value == 'grupos') {
echo $_smarty_tpl->tpl_vars['grupo']->value['cvepromotor'];
}
if ($_smarty_tpl->tpl_vars['table']->value == 'promotores') {
echo $_smarty_tpl->tpl_vars['promotor']->value;
} else {
echo $_smarty_tpl->tpl_vars['grupo']->value['nocontrol'];
}?>">
				  <?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>

			  </a></center></td>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['nombre'];?>
</center></td>
				<?php if ($_smarty_tpl->tpl_vars['table']->value == 'grupos') {?>
				  <td style="vertical-align:middle">
				    <center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['nombre_promotor'];?>
</center>
			    </td><?php }?>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['ubicacion'];?>
</center></td>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['titulo'];?>
</center></td>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['horario'];?>
</center></td>
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
