<?php
/* Smarty version 3.1.30-dev/53, created on 2017-03-31 06:09:16
  from "/home/ubuntu/workspace/templates/admin/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58ddf28ceda760_48545396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ffbac6cfa26a0d15deec984608debf407849ca2' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/grupo.html',
      1 => 1490379182,
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
function content_58ddf28ceda760_48545396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '93300689558ddf28ce16022_62113267';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
	<center><div class="form-group" style ="background-color:#f0f0f0"><label>
		Grupo: <?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
<br>
		Sala: <?php echo $_smarty_tpl->tpl_vars['info']->value['nombre_grupo'];?>
<br>
		Ubicación: <?php echo $_smarty_tpl->tpl_vars['info']->value['ubicacion'];?>
<br>
		Periodo: <?php echo $_smarty_tpl->tpl_vars['info']->value['fechainicio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info']->value['fechafinal'];?>
<br>
		Promotor: <?php echo $_smarty_tpl->tpl_vars['info']->value['nombre_promotor'];?>

		<?php if (isset($_smarty_tpl->tpl_vars['cmb_libro']->value)) {?>
		  <br>Número de Control: <?php echo $_smarty_tpl->tpl_vars['info2']->value['cveusuario'];?>
<br>
			Alumno: <?php echo $_smarty_tpl->tpl_vars['info2']->value['nombre'];?>

		<?php }?>
	</label></div></center>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['libros_promo']->value)) {?>
  <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
    <div class="page-header">
      <h2>Calificaciones</h2>
    </div>
  	<table class='table table-striped' width='500'>
  		<tr>
  		  <?php if (!isset($_smarty_tpl->tpl_vars['alumnos']->value)) {?><th><center>ALUMNO</center></th><?php }?>
        <th><center>COMPRENSIÓN</center></th> 
        <th><center>MOTIVACIÓN</center></th>
        <th><center>PARTICIPACIÓN</center></th> 
        <th><center>ASISTENCIA</center></th>
        <th><center>TERMINADO</center></th>
        <?php if (!isset($_smarty_tpl->tpl_vars['cmb_libro']->value)) {?><th><center>OPCIONES</center></th><?php }?>
  		</tr>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'alumno');
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
$_smarty_tpl->tpl_vars['alumno']->_loop = true;
$__foreach_alumno_0_saved = $_smarty_tpl->tpl_vars['alumno'];
?>
  			<tr> 
  				 <form class='form-inline' action='grupo.php?info1=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
' method='post' >
  					 <input type="hidden" name="datos[nocontrol]" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nocontrol'];?>
" > 
  					 <?php if (!isset($_smarty_tpl->tpl_vars['alumnos']->value)) {?><td width='500'><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
</td><?php }?>
  					 <td width='500'>  
  					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['comprension'];?>
% ;height: 100%; background-color: #4caf50;"> 
  					 			<div id="label"style="text-align: center; line-height: 30px; color: white;"> 
  					 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['comprension'];?>
% 
  					 			</div>
  					 		</div>
  					 	</div>
  					 </td>
  
  					 <td width='500'>
  					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['motivacion'];?>
% ;height: 100%; background-color: #4caf50;">
  					 			<div id="label"style="text-align: center; line-height: 30px; color: white;">
  					 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['motivacion'];?>
% 
  					 			</div>
  					 		</div>
  					 	</div>
  					</td>
  
  					<td width='500'>
  						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
  							<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['participacion'];?>
% ;height: 100%; background-color: #4caf50;">	<div id="label"style="text-align: center; line-height: 30px; color: white;">
  									<?php echo $_smarty_tpl->tpl_vars['alumno']->value['participacion'];?>
%
  								</div>
  							</div>
  						</div>
  					</td>
  					
  					<td width='500'>
  						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
  							<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['asistencia'];?>
% ;height: 100%; background-color: #4caf50;">	<div id="label"style="text-align: center; line-height: 30px; color: white;">
  									<?php echo $_smarty_tpl->tpl_vars['alumno']->value['asistencia'];?>
%
  								</div>
  							</div>
  						</div>
  					</td>
  
  					<td width='500'>
  						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
  							<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['terminado'];?>
% ;height: 100%; background-color: #4caf50;">
  								<div id="label"style="text-align: center; line-height: 30px; color: white;">
  									<?php echo $_smarty_tpl->tpl_vars['alumno']->value['terminado'];?>
%
  								</div>
  							</div>
  						</div>
  					</td>
  					<?php if (!isset($_smarty_tpl->tpl_vars['cmb_libro']->value)) {?> <!--Para que no se muestre en la sección del alumno-->
  					  <td><center>
    						<!--<a href="redacta.php?accion=redactarI&info=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
&receptor=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nocontrol'];?>
&periodo=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveperiodo'];?>
">-->
    						<!--	<img src="../Images/sobre.png">-->
    						<!--</a>-->
    						<a  class='delete' href="grupo.php?accion=delete_alumno&info1=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['letra'];?>
&info2=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nocontrol'];?>
">
              		<img src="../Images/cancelar.png">
          			</a>
    						<a href="grupo.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['bandera']->value)) {
if ($_smarty_tpl->tpl_vars['bandera']->value == 'index_grupos_libros') {
echo $_smarty_tpl->tpl_vars['bandera']->value;
} else { ?>historial<?php }
} else { ?>libros<?php }?>&info1=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['letra'];?>
&info2=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nocontrol'];?>
&info3=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cvepromotor'];?>
">
    							<img src="../Images/libros.png">
    						</a>
    						
  						</center></td>
  					<?php }?>
  				</form>
  			</tr>
  		<?php
$_smarty_tpl->tpl_vars['alumno'] = $__foreach_alumno_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  	</table>
  <?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['cmb_libro']->value)) {?>
  <div class="page-header">
    <h2>Libros</h2>
  </div>
	<form action="grupo.php?accion=insert" method="post">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h3 class="panel-title">Añadir Libro</h3>
	    </div>
	    <div class="panel-body">
	      <?php if (isset($_smarty_tpl->tpl_vars['libros_promo']->value)) {?>
	      <input type="hidden" name="promotor" value="<?php echo $_smarty_tpl->tpl_vars['libros_promo']->value;?>
">
	      <?php }?>
	      <input type="hidden" name="datos[cvelectura]" value="<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
">
	      <div class="form-group">
	        <label>Libro:</label>
	        <?php echo $_smarty_tpl->tpl_vars['cmb_libro']->value;?>

	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <button type="submit" class="btn btn-primary">Guardar</button>
	  </div>
	</form>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>
	<div class="page-header">
    <h4>Lista de Libros</h4>
  </div>
	<table class='table table-striped'>
		<tr>		
			<th width="100"><center>CLAVE</center></th>
			<th width="800"><center>TÍTULO</center></th>
			<th width="300"><center>ELIMINAR</center></th>
		  <th width="300"><center>REPORTE</center></th>
		  <th width="300"><center>CALIFICACIÓN</center></th>
		  <th width="300"><center>ESTADO</center></th>
		</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->_loop = true;
$__foreach_libro_1_saved = $_smarty_tpl->tpl_vars['libro'];
?>
		<tr>
			<td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</center></td>
			<td>
			  <center><a href="grupo.php?accion=delete<?php if (isset($_smarty_tpl->tpl_vars['libros_promo']->value)) {
if ($_smarty_tpl->tpl_vars['libros_promo']->value == 'libros') {?>_promotor<?php }
}?>&info1=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
&info2=<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
" class="delete">
				<img src="../Images/cancelar.png">
			</a></center>
			</td>
			<td><center>
			  <?php echo $_smarty_tpl->tpl_vars['libro']->value['calif_reporte'];?>

			  <a href="grupo.php?accion=reporte&info1=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"> 
			  <img src="../Images/reporte.png"></a>
			</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['calif_reporte'];?>
</center></td>
			<td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['estado'];?>
</center></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</table>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
