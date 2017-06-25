<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 03:17:35
  from "/home/ubuntu/workspace/templates/admin/periodos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_594f2b4f76b614_44654352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020700f5320e5e8bab0862a8b81e7e44f45b56a3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/periodos.html',
      1 => 1485412314,
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
function content_594f2b4f76b614_44654352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1272481680594f2b4f721183_07229669';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
	<table class='table'>
		<tr><td colspan='4' align='right'>
			<a href='periodos.php?accion=form_insert&tabla=periodo'>
				<img src='../Images/add.png'/> 
			</a>
		</td></tr>
	</table>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {?><h3>Seleccione un periodo</h3><?php }?>
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th><center>CLAVE</center></th>
				<th><center>FECHA INICIO</center></th>
				<th><center>FECHA FINAL</center></th>
        <?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
        	<th><center>ELIMINAR</center></th>
					<th><center>ACTUALIZAR</center></th>
				<?php } else { ?>
					<th><center>ROLES</center></th>
				<?php }?>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <tr>
        <th><center>CLAVE</center></th>
				<th><center>FECHA INICIO</center></th>
				<th><center>FECHA FINAL</center></th>
        <?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
        	<th><center>ELIMINAR</center></th>
					<th><center>ACTUALIZAR</center></th>
				<?php } else { ?>
					<th><center>ROLES</center></th>
				<?php }?>
      </tr>
      </tr>
    </tfoot>
  </table>
  
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      
    	var table = $('#example').DataTable( {
        "ajax": "TextFiles/periodos.txt",
        "columnDefs": [ {
        <?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
				    "targets": -2,
				    "data": null,
				    "defaultContent": "<center><a href='#' class='delete'><img src='../Images/cancelar.png'></a></center>"
				  }, {	
				<?php }?>
					"className": "dt-center", 
					"targets": "_all"
				}]
	    } );
	    
	    <?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
		    $('#example tbody').on( 'click', 'a.delete', function () {
	        event.preventDefault();
	        
	        var data = table.row( $(this).parents('tr') ).data();
					var url = data[3];
					
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
	    <?php }?>
	    
    } );
  <?php echo '</script'; ?>
>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
