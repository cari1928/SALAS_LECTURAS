<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-25 21:57:00
  from "/home/ubuntu/workspace/templates/admin/alumnos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_595031ac36e9e9_94921793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0789ec1ceeeeb05b636d48d811f485939715a511' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/alumnos.html',
      1 => 1486869845,
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
function content_595031ac36e9e9_94921793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '989434041595031ac32efa7_24449674';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
	<table class='table'>
		<tr><td colspan='4' align='right'>
			<a href='alumnos.php?accion=form_insert'><img src='../Images/add.png' /> </a>
		</td></tr>
	</table>
<?php } else { ?>
	<table class='table'>
		<tr><td colspan='4' align='right'>
			<a href='reporte_pdf.php?accion=alumnos&info1=1&info2=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
'>
			Reporte General <img src='../Images/pdf.png' title='Reporte - Alumnos'/></a>
		</td></tr>
	</table>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th><center>CLAVE</center></th>
				<th><center>ALUMNO</center></th>
				<th><center>ESPECIALIDAD</center></th>
				<th><center>CORREO</center></th>
				<th><center>ESTADO  CREDITO</center></th>
					<?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
						<th><center>ELIMINAR</center></th>
				    <th><center>ACTUALIZAR</center></th>
					<?php } else { ?>
						<th><center>REPORTE</center></th>
					<?php }?>
				<th><center>GRUPOS</center></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>CLAVE</th>
        <th>ALUMNO</th>
        <th>ESPECIALIDAD</th>
        <th>CORREO</th>
        <th>ESTADO - CREDITO</th>
        <?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
       		<th>ELIMINAR</th>
	        <th>ACTUALIZAR</th>
       	<?php } else { ?>
       		<th>REPORTE</th>
       	<?php }?>
       	<th>GRUPOS</th>
      </tr>
    </tfoot>
  </table>
  
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      
    	var table = $('#example').DataTable( {
        "ajax": "TextFiles/alumnos.txt",
        "columnDefs": [ {
        <?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
            "targets": -3,
            "data": null,
            "defaultContent": "<center><a href='#' class='delete'><img src='../Images/cancelar.png'></a></center>"
	        }, {	
        <?php }?>
        	"className": "dt-center", 
					"targets": "_all"
        } ]
	    } );
	    
	    <?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
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
	    <?php }?>
	    
    } );
  <?php echo '</script'; ?>
>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
