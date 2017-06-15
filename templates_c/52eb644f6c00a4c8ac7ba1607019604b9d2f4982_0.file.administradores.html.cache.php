<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-15 21:46:33
  from "/home/ubuntu/workspace/templates/admin/administradores.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59430039b34674_69567495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52eb644f6c00a4c8ac7ba1607019604b9d2f4982' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/administradores.html',
      1 => 1486873409,
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
function content_59430039b34674_69567495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '25039460359430039aaf3e5_40673295';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<table class='table'>
	<tr><td colspan='4' align='right'>
		<a href='administradores.php?accion=form_insert'><img src='../Images/add.png' /> </a>
	</td></tr>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th><center>CLAVE</center></th>
				<th><center>ADMINISTRADOR</center></th>
				<th><center>ESPECIALIDAD</center></th>
				<th><center>CORREO</center></th>
				<th><center>ELIMINAR</center></th>
		    <th><center>ACTUALIZAR</center></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th><center>CLAVE</center></th>
				<th><center>ADMINISTRADOR</center></th>
				<th><center>ESPECIALIDAD</center></th>
				<th><center>CORREO</center></th>
				<th><center>ELIMINAR</center></th>
		    <th><center>ACTUALIZAR</center></th>
      </tr>
    </tfoot>
  </table>
  
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      
    	var table = $('#example').DataTable( {
        "ajax": "TextFiles/administradores.txt",
        "columnDefs": [ {
            "targets": -2,
            "data": null,
            "defaultContent": "<center><a href='#' class='delete'><img src='../Images/cancelar.png'></a></center>"
	        }, {	
        	"className": "dt-center", 
					"targets": "_all"
        } ]
	    } );
	    
	    $('#example tbody').on( 'click', 'a.delete', function () {
        event.preventDefault();
        
        var data = table.row( $(this).parents('tr') ).data();
				var url = data[4];
				
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
