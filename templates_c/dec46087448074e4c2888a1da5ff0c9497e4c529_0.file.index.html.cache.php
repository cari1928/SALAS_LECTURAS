<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:11:12
  from "/var/www/html/SALAS_LECTURAS/templates/admin/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf300bfa1d9_15100237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dec46087448074e4c2888a1da5ff0c9497e4c529' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/index.html',
      1 => 1475157121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf300bfa1d9_15100237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '73088190757fcf300b5f2d2_20234176';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<div>
	<table>
		<tr>
			<th>
				<a href="periodos.php">Periodos</a>
			</th>
		</tr>
		<tr>
			<th>
				<a href="salas.php">Salas</a>
			</th>
		</tr>
		<tr>
			<th>
				<a href="promotor.php">Promotores</a>
			</th>
		</tr>
		<tr>
			<th>
				<a href="alumnos.php">Alumnos</a>
			</th>
		</tr>
		<tr>
			<th>
				<a href="historial.php">Historial</a>
			</th>
		</tr>
	</table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
