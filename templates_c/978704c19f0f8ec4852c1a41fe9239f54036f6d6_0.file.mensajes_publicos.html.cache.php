<?php
/* Smarty version 3.1.30-dev/53, created on 2017-03-31 05:55:56
  from "/home/ubuntu/workspace/templates/mensajes_publicos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58ddef6c7965a6_23024833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978704c19f0f8ec4852c1a41fe9239f54036f6d6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mensajes_publicos.html',
      1 => 1485750880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:mensajes.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58ddef6c7965a6_23024833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '39765673658ddef6c6c5382_20271246';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <center><h1>Aviso</h1></center>
    <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['mensajes']->value)) {?>
    <center><h1>Avisos</h1></center>
    <table class='table table-hover'>
		<tr class='info'>		
			<th style="vertical-align:middle"><center>TITULO</center></th>
			<th style="vertical-align:middle"><center>TIPO</center></th>
			<th style="vertical-align:middle"><center>EMISOR</center></th>
			<th style="vertical-align:middle"><center>FECHA</center></th>
			<th style="vertical-align:middle"><center>EXPIRA</center></th>
			<th style="vertical-align:middle"><center>LEER MAS</center></th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mensajes']->value, 'mensaje');
foreach ($_from as $_smarty_tpl->tpl_vars['mensaje']->value) {
$_smarty_tpl->tpl_vars['mensaje']->_loop = true;
$__foreach_mensaje_0_saved = $_smarty_tpl->tpl_vars['mensaje'];
?>
		<tr>
			<td><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['introduccion'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['descripcion'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['nombre'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['fecha'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['expira'];?>
</center></td>
			<td><center><a href="mensaje.php?msj=<?php echo $_smarty_tpl->tpl_vars['mensaje']->value['cvemsj'];?>
">
				<img src="../Images/leer.png">
			</a></center></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['mensaje'] = $__foreach_mensaje_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
