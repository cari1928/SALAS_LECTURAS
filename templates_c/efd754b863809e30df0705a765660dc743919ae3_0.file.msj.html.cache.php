<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 22:50:50
  from "/home/ubuntu/workspace/templates/usuario/msj.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59503e4ab814b4_11127351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd754b863809e30df0705a765660dc743919ae3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/msj.html',
      1 => 1498431049,
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
function content_59503e4ab814b4_11127351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '113435332759503e4ab593d1_24378790';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['mensajes']->value)) {?>
  <table class='table table-striped display' cellspacing="0" width="100%">
		<tr>    
      <th><center>ASUNTO</center></th>
      <th><center>TIPO</center></th>
      <th><center>FECHA</center></th>
      <th><center>EXPIRA</center></th>
      <th><center>VISUALIZAR</center></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mensajes']->value, 'msj');
foreach ($_from as $_smarty_tpl->tpl_vars['msj']->value) {
$_smarty_tpl->tpl_vars['msj']->_loop = true;
$__foreach_msj_0_saved = $_smarty_tpl->tpl_vars['msj'];
?>
    <tr>
      <td><center><?php echo $_smarty_tpl->tpl_vars['msj']->value['introduccion'];?>
</center></td>
      <td><center><?php echo $_smarty_tpl->tpl_vars['msj']->value['descripcion'];?>
</center></td>
      <td><center><?php echo $_smarty_tpl->tpl_vars['msj']->value['fecha'];?>
</center></td>
      <td><center><?php echo $_smarty_tpl->tpl_vars['msj']->value['expira'];?>
</center></td>
      <td><center><a href="msj.php?accion=leer&info=<?php echo $_smarty_tpl->tpl_vars['msj']->value['cvemsj'];?>
">
        <img src="../Images/leer.png">
      </a></center></td>
    </tr>
  <?php
$_smarty_tpl->tpl_vars['msj'] = $__foreach_msj_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
