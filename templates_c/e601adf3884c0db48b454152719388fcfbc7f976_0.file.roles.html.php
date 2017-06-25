<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 02:56:48
  from "/home/ubuntu/workspace/templates/roles.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_594f2670a20269_82133336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e601adf3884c0db48b454152719388fcfbc7f976' => 
    array (
      0 => '/home/ubuntu/workspace/templates/roles.html',
      1 => 1498280664,
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
function content_594f2670a20269_82133336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<link rel="stylesheet" type="text/css" href="css/menu.css">

<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)) {?>
	<h3>Selecciona el tipo de cuenta a acceder</h3>
	<nav id="colorNav">
	  <ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'rol');
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->_loop = true;
$__foreach_rol_0_saved = $_smarty_tpl->tpl_vars['rol'];
?>
				<li id="icon" class="green">
					<a  href="login.php?info=<?php echo $_smarty_tpl->tpl_vars['rol']->value['cverol'];?>
" >
						<center><img src="Images/<?php if ($_smarty_tpl->tpl_vars['rol']->value['cverol'] == 1) {?>admin.png<?php }
if ($_smarty_tpl->tpl_vars['rol']->value['cverol'] == 2) {?>promotor.png<?php }
if ($_smarty_tpl->tpl_vars['rol']->value['cverol'] == 3) {?>alumnos.png<?php }?>">
							<?php if ($_smarty_tpl->tpl_vars['rol']->value['cverol'] == 1) {?>Administrador<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['rol']->value['cverol'] == 2) {?>Promotor<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['rol']->value['cverol'] == 3) {?>Alumno<?php }?>
						</center></a>
				</li>
			<?php
$_smarty_tpl->tpl_vars['rol'] = $__foreach_rol_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	  </ul>
	</nav>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
