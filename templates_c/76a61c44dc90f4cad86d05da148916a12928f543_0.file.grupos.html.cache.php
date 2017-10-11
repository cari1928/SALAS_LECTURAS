<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-06 19:06:57
  from "/home/ubuntu/workspace/templates/admin/grupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d7d4515aaf32_47291909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76a61c44dc90f4cad86d05da148916a12928f543' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/grupos.html',
      1 => 1506281041,
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
function content_59d7d4515aaf32_47291909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '130906028459d7d4514857d7_78254622';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<table class='table'>
	<tr><td colspan='4' align='right'>
		<a href='grupos.php?accion=add_group&step=1'>
			<img src='../Images/add.png'/>
		</a>
	</td></tr>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['tablegrupos']->value)) {?>
	<table class="table table-hover">
		
		<tr class='info'>
			<th style="vertical-align:middle"><center>GRUPO</center></th>
			<th style="vertical-align:middle"><center>SALA</center></th>
			<?php if (isset($_smarty_tpl->tpl_vars['table']->value)) {?>
			  <?php if ($_smarty_tpl->tpl_vars['table']->value == 'grupos') {?><th><center>PROMOTOR</center></th><?php }?>
			<?php }?>
			<th style="vertical-align:middle"><center>UBICACIÓN</center></th>
			<th style="vertical-align:middle" width="150"><center>LIBRO GRUPAL</center></th>
			<th style="vertical-align:middle" width="300"><center>HORARIO</center></th>
			<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {
if ($_smarty_tpl->tpl_vars['bandera']->value == 'historial') {?>
		    <th width='140'><center>REPORTE GRUPAL</center></th>
		  <?php }
}?>
		  <?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {
if ($_smarty_tpl->tpl_vars['bandera']->value == 'index_grupos') {?>
				<th style="vertical-align:middle"><center>ELIMINAR</center></th>
	    <?php }
}?>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablegrupos']->value, 'grupo');
foreach ($_from as $_smarty_tpl->tpl_vars['grupo']->value) {
$_smarty_tpl->tpl_vars['grupo']->_loop = true;
$__foreach_grupo_0_saved = $_smarty_tpl->tpl_vars['grupo'];
?>
			<tr>
				<td style="vertical-align:middle"><center>
				  <?php if ($_smarty_tpl->tpl_vars['bandera']->value == 'historial') {?>
				    <?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>

          <?php } else { ?>
  				  <a 
  				  	href="grupo.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {
echo $_smarty_tpl->tpl_vars['bandera']->value;
}?>&info1=<?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];
if (isset($_smarty_tpl->tpl_vars['cveusuario']->value)) {?>&info2=<?php echo $_smarty_tpl->tpl_vars['cveusuario']->value;
} else {
if ($_smarty_tpl->tpl_vars['bandera']->value == 'alumnos' || $_smarty_tpl->tpl_vars['bandera']->value == 'grupos') {?>&info2=<?php echo $_smarty_tpl->tpl_vars['grupo']->value['nocontrol'];
}
}?>"><?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>
</a>
				  <?php }?>
			  </center></td>

				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['nombre'];?>
</center></td>

				<?php if (isset($_smarty_tpl->tpl_vars['table']->value)) {
if ($_smarty_tpl->tpl_vars['table']->value == 'grupos') {?>
				  <td style="vertical-align:middle">
				    <center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['nombre_promotor'];?>
</center>
			    </td>
  			<?php }
}?>

				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['ubicacion'];?>
</center></td>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['titulo'];?>
</center></td>
				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['grupo']->value['horario'];?>
</center></td>

				<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {
if ($_smarty_tpl->tpl_vars['bandera']->value == 'historial') {?>
			    <td style="vertical-align:middle" colspan='4' align='right'><center>
  					<a 
  						href='reporte_pdf.php?accion=grupo&info1=1&info2=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
&info3=<?php echo $_smarty_tpl->tpl_vars['cveusuario']->value;?>
&info4=<?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>
'>
  					<img src='../Images/pdf.png' title='Reporte Promotor-Grupo'/></a>
  				<center></td>
			  <?php }
}?>

			  <?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {
if ($_smarty_tpl->tpl_vars['bandera']->value == 'index_grupos') {?>
		      <td><center>
  					<a class="delete" href="grupos.php?accion=delete&info1=<?php echo $_smarty_tpl->tpl_vars['grupo']->value['letra'];?>
">
  						<img src="../Images/cancelar.png">
  					</a>
  				</center></td>
		    <?php }
}?>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['grupo'] = $__foreach_grupo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
