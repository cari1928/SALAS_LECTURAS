<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-29 22:42:10
  from "/home/ubuntu/workspace/templates/admin/promotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59f65942b51691_25958658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914aee8fb76577dfe96838af7c32e42c2f9297b0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/promotor.html',
      1 => 1498851413,
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
function content_59f65942b51691_25958658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
  
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<table class='table'>
	
	<?php if (!isset($_smarty_tpl->tpl_vars['bandera']->value)) {?>
		<tr><td colspan='4' align='right'>
			<a href='promotor.php?accion=form_insert'><img src='../Images/add.png'/> </a>
		</td></tr>
	<?php } else { ?>
		<tr><td colspan='4' align='right'>
			<a class="btn btn-primary active" title='Reporte Promotores-Periodos'
			href='reporte_pdf.php?accion=promotores&info1=1&info2=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
' 			
			target="_blank">
			  <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Reporte General
			</a>
		</td></tr>
	<?php }?>
	
</table>

<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?> 
  <table id="example" class="display" cellspacing="0" width="100%">
  	<thead>
      <tr>
        <th style="vertical-align:middle"><center>RFC</center></th>
				<th style="vertical-align:middle"><center>PROMOTOR</center></th>
				<th style="vertical-align:middle"><center>EMAIL</center></th>
				<th style="vertical-align:middle"><center>ESPECIALIDAD</center></th>
				<?php if (!isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
					<th style="vertical-align:middle"><center>ELIMINAR</center></th>
					<th style="vertical-align:middle"><center>ACTUALIZAR</center></th>
				<?php }?>
				<th style="vertical-align:middle"><center>GRUPOS</center></th>
				<?php if (isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
					<th style="vertical-align:middle"><center>LISTADO ALUMNOS</center></th>
					<th style="vertical-align:middle"><center>CALIFICACIONES</center></th>
				<?php }?>
      </tr>
    </thead>
    
    <tfoot>
      <tr>
        <th style="vertical-align:middle"><center>RFC</center></th>
				<th style="vertical-align:middle"><center>PROMOTOR</center></th>
				<th style="vertical-align:middle"><center>EMAIL</center></th>
				<th style="vertical-align:middle"><center>ESPECIALIDAD</center></th>
				<?php if (!isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
					<th style="vertical-align:middle"><center>ELIMINAR</center></th>
					<th style="vertical-align:middle"><center>ACTUALIZAR</center></th>
				<?php }?>
				<th style="vertical-align:middle"><center>GRUPOS</center></th>
				<?php if (isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
					<th width='150'><center>LISTADO ALUMNOS</center></th>
					<th width='150'><center>CALIFICACIONES</center></th>
				<?php }?>
      </tr>
    </tfoot>
  </table>
  
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      
    	var table = $('#example').DataTable( {
        "ajax": "TextFiles/promotores.txt",
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
