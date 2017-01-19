<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-19 04:35:56
  from "/home/ubuntu/workspace/templates/admin/alumnos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5880422cc79bb4_02519444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0789ec1ceeeeb05b636d48d811f485939715a511' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/alumnos.html',
      1 => 1484675685,
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
function content_5880422cc79bb4_02519444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20954938325880422cc58ec8_32149939';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
<table class='table'>
	<tr><td colspan='4' align='right'>
		<a href='alumnos.php?accion=form_insert'>Nuevo Alumno
			<img src='../Images/add.png' /> 
		</a>
	</td></tr>
</table>
<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>CLAVE</th>
            <th>ALUMNO</th>
            <th>ESPECIALIDAD</th>
            <th>CORREO</th>
            <th>ESTADO - CREDITO</th>
            <th>ELIMINAR</th>
            <th>ACTUALIZAR</th>
            <th>GRUPOS</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>CLAVE</th>
            <th>ALUMNO</th>
            <th>ESPECIALIDAD</th>
            <th>CORREO</th>
            <th>ESTADO - CREDITO</th>
            <th>ELIMINAR</th>
            <th>ACTUALIZAR</th>
            <th>GRUPOS</th>
        </tr>
    </tfoot>
  </table>
  
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      
    	var table = $('#example').DataTable( {
        "ajax": "alumnos.txt",
        "columnDefs": [ {
            "targets": -3,
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
