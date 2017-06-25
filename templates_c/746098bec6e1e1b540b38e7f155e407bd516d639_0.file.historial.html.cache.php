<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 03:17:37
  from "/home/ubuntu/workspace/templates/admin/historial.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_594f2b51c227d4_16751930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746098bec6e1e1b540b38e7f155e407bd516d639' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/historial.html',
      1 => 1484906129,
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
function content_594f2b51c227d4_16751930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '780585336594f2b51bfead1_93801177';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" type="text/css" href="../css/menu.css">
<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['accion']->value == 'periodo') {?>
  <h3>Generar historial en base a:</h3>
	<nav id="colorNav">
		<ul>
			<li id="icon" class="green">
			  <a href="promotor.php?accion=historial&info1=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
"><center>
			  	<img src="../Images/promotor.png">Promotores
		  	</center></a>
			</li>
			<li id="icon" class="green">
			  <a href="alumnos.php?accion=historial&info1=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
"><center>
		  	<img src="../Images/alumnos.png">Alumnos</center></a>
			</li>
		</ul>
	</nav>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
