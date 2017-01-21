<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-21 01:18:52
  from "/home/ubuntu/workspace/templates/roles.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5882b6fca0ec53_05210581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e601adf3884c0db48b454152719388fcfbc7f976' => 
    array (
      0 => '/home/ubuntu/workspace/templates/roles.html',
      1 => 1484331458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5882b6fca0ec53_05210581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" type="text/css" href="css/menu.css">
<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }?>
<h3>Selecciona el tipo de cuenta a acceder</h3>
<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)) {?>
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
					<center><img src="../Images/<?php if ($_smarty_tpl->tpl_vars['rol']->value['cverol'] == 1) {?>administrador.png<?php }
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
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
