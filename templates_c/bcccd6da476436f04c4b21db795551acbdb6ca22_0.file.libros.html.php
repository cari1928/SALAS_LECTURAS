<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-27 17:07:57
  from "/home/ubuntu/workspace/templates/admin/libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59f367ed219161_11631473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcccd6da476436f04c4b21db795551acbdb6ca22' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/libros.html',
      1 => 1509124075,
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
function content_59f367ed219161_11631473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<table class='table'>
	<tr>
		<td colspan='4' align='right'>
			<a href='libros.php?accion=form_insert&tabla=periodo'>
				<img src='../Images/add.png'/> 
			</a>
		</td>
	</tr> 
</table>

<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
	<table id="example" class="display" cellspacing="0" width="100%">
		<thead>
      <tr>
        <th><center>CLAVE</center></th>
				<th><center>AUTOR</center></th>
				<th><center>TITULO</center></th>
				<th><center>EDITORIAL</center></th>
				<th><center>CANTIDAD</center></th>
				<th width="50"><center>PORTADA</center></th>
				<th><center>ELIMINAR</center></th>
				<th><center>ACTUALIZAR</center></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th><center>CLAVE</center></th>
				<th><center>AUTOR</center></th>
				<th><center>TITULO</center></th>
				<th><center>EDITORIAL</center></th>
				<th><center>CANTIDAD</center></th>
				<th><center>PORTADA</center></th>
				<th><center>ELIMINAR</center></th>
				<th><center>ACTUALIZAR</center></th>
      </tr>
    </tfoot>
  </table>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
