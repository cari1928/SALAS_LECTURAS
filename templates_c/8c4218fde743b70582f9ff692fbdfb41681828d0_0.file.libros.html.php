<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-11 01:40:51
  from "/home/ubuntu/workspace/templates/promotor/libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59dd76a38d6fa8_32083560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4218fde743b70582f9ff692fbdfb41681828d0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/libros.html',
      1 => 1507685999,
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
function content_59dd76a38d6fa8_32083560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<table class='table'>
	<tr>
		<td colspan='4' align='right'>
			<a href='libros.php?accion=form_add&info=<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
&info2=<?php echo $_smarty_tpl->tpl_vars['nocontrol']->value;?>
&info3=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
'>
				<img src='../Images/add.png'/> 
			</a>
		</td>
	</tr> 
</table>

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
    <tr>
      <th>AUTOR</th>
      <th>TITULO</th>
      <th>EDITORIAL</th>
      <th>ASIGNAR LIBRO</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>AUTOR</th>
      <th>TITULO</th>
      <th>EDITORIAL</th>
      <th>ASIGNAR LIBRO</th>
    </tr>
  </tfoot>
</table>
	
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
