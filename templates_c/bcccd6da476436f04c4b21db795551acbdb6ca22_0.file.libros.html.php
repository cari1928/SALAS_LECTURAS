<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-04 03:01:31
  from "/home/ubuntu/workspace/templates/admin/libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d44f0b301641_08190468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcccd6da476436f04c4b21db795551acbdb6ca22' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/libros.html',
      1 => 1499921993,
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
function content_59d44f0b301641_08190468 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>CLAVE</th>
        <th>AUTOR</th>
        <th>TITULO</th>
        <th>EDITORIAL</th>
        <th>CANTIDAD</th>
        <th>ELIMINAR</th>
        <th>ACTUALIZAR</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>CLAVE</th>
        <th>AUTOR</th>
        <th>TITULO</th>
        <th>EDITORIAL</th>
        <th>CANTIDAD</th>
        <th>ELIMINAR</th>
        <th>ACTUALIZAR</th>
      </tr>
    </tfoot>
  </table>
	
	<?php echo '<script'; ?>
 type="text/javascript">
	  $(document).ready(function() {
	  	var table = $('#example').DataTable( {
	      "ajax": "TextFiles/libros.txt",
	      "columnDefs": [ {
	          "targets": -2,
	          "data": null,
	          "defaultContent": "<center><a href='#' class='delete'><img src='../Images/cancelar.png'></a></center>"
	      } ]
	    } );
	    
	    $('#example tbody').on( 'click', 'a.delete', function () {
	      event.preventDefault();
	      
	      var data = table.row( $(this).parents('tr') ).data();
				var url = data[5];
				
		    swal({
		      title: "¿Seguro? Se borrará toda la información relacionada", 
		      text: "Si está seguro ingrese la contraseña de seguridad", 
		      type: "input",
		      inputType: "password",
		      showCancelButton: true,
		      confirmButtonText: "Aceptar",
		      cancelButtonText: "Cancelar"
		    }, function(typedPassword) {
		    	// console.log(typedPassword);
		    	if(typedPassword != "") {
		    		url += "&infoc=" + typedPassword;
		      	window.open(url, '_self');	
		      	return false;
		    	}
		    });
	    } );
	  } );
	<?php echo '</script'; ?>
>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
