<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-04 20:19:28
  from "/home/ubuntu/workspace/templates/admin/salas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_586d58d039b367_48501962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18dcc6895306a849d79cb4931b1621bf766157ef' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/salas.html',
      1 => 1483561164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_586d58d039b367_48501962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '188806832586d58d036abd8_41822362';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<table class='table'>
	<tr><td colspan='4' align='right'>
		<a href='salas.php?accion=form_insert&tabla=sala'>
			<img src='../Images/add.png'/>
		</a>
	</td></tr>
</table>
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['salones']->value)) {?>
	<table id="example" class='table table-striped display' cellspacing="0" width="100%">
		<!--<thead>-->
  <!--          <tr>-->
  <!--              <th>Name</th>-->
  <!--              <th>Position</th>-->
  <!--              <th>Office</th>-->
  <!--              <th>Extn.</th>-->
  <!--              <th>Start date</th>-->
  <!--              <th>Salary</th>-->
  <!--              <th>Salary</th>-->
  <!--          </tr>-->
  <!--      </thead>-->
  <!--      <tfoot>-->
  <!--          <tr>-->
  <!--              <th>Name</th>-->
  <!--              <th>Position</th>-->
  <!--              <th>Office</th>-->
  <!--              <th>Extn.</th>-->
  <!--              <th>Start date</th>-->
  <!--              <th>Salary</th>-->
  <!--              <th>Salary</th>-->
  <!--          </tr>-->
  <!--      </tfoot>-->
  
  <tr>		
			<th>CLAVE SALA</th>
			<th>UBICACION</th>
			<th>ELIMINAR</th>
			<th>ACTUALIZAR</th>
		</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['salones']->value, 'salon');
foreach ($_from as $_smarty_tpl->tpl_vars['salon']->value) {
$_smarty_tpl->tpl_vars['salon']->_loop = true;
$__foreach_salon_0_saved = $_smarty_tpl->tpl_vars['salon'];
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['salon']->value['cvesala'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['salon']->value['ubicacion'];?>
</td>
			<td><a href="salas.php?accion=delete&info1=<?php echo $_smarty_tpl->tpl_vars['salon']->value['cvesala'];?>
">
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="salas.php?accion=form_update&info2=<?php echo $_smarty_tpl->tpl_vars['salon']->value['cvesala'];?>
">
				<img src="../Images/edit.png">
			</a></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['salon'] = $__foreach_salon_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }?>
<!--<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
// 	$(document).ready(function() {
//     $('#example').DataTable( {
//         "ajax": "arrays.txt"
//     } );
// } );
<?php echo '</script'; ?>
><?php }
}
