<?php
/* Smarty version 3.1.30-dev/53, created on 2017-03-22 19:43:56
  from "/home/ubuntu/workspace/templates/admin/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58d2d3fce39664_46099286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8656ba5f54811b5624cd9c8ab844b7aaf36ba347' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/index.html',
      1 => 1486869845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58d2d3fce39664_46099286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '138267632158d2d3fce0bcd9_42576732';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<link rel="stylesheet" type="text/css" href="../css/menu.css">
<nav id="colorNav">
	<ul>
		<li id="icon" class="green">
			<a  href="periodos.php" ><center><img src="../Images/periodos.png">Periodos</center></a>
		</li>
		<li  id="icon" class="green">
		  <a href="salas.php" ><center><img src="../Images/salas.png">Salas</center></a>
		</li>
		<li  id="icon" class="green">
		  <a href="promotor.php" ><center><img src="../Images/promotor.png">Promotores</center></a>
		</li>
		<li  id="icon" class="green">
		  <a href="alumnos.php" ><center><img src="../Images/alumnos.png">Alumnos</center></a>
		</li>
		<li  id="icon" class="green">
		  <a href="historial.php" ><center><img src="../Images/historial.png">Historial</center></a>
		</li>
		<li  id="icon" class="green">
		  <a href="libros.php" ><center><img src="../Images/libros.png">Libros</center></a>
		</li>
		<li  id="icon" class="green">
		  <a href="grupos.php" ><center><img src="../Images/grupos.png">Grupos</center></a>
		</li>
		<li  id="icon" class="green">
		  <a href="avisos.php" ><center><img src="../Images/aviso.png"> Avisos</center></a>
		</li>
		<li  id="icon" class="green">
		  <a href="administradores.php"><center><img src="../Images/admin.png">
		  	<font size=4>Administradores</font>
	  	</center></a>
		</li>
		<?php if (isset($_smarty_tpl->tpl_vars['especial']->value)) {?>
			<li  id="icon" class="green">
			  <a href="especial.php" ><center><img src="../Images/aviso.png"> Querys</center></a>
			</li>
		<?php }?>
	</ul>
</nav>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
