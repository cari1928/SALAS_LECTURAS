<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-11 04:13:52
  from "/home/ubuntu/workspace/templates/promotor/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59dd9a80058408_93309921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd30dddbe76326c3f4c52577113bad4ba39ce7b6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/grupo.html',
      1 => 1507695223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:../number_style.html' => 1,
    'file:../mensajes.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59dd9a80058408_93309921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../number_style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
	<center><div class="form-group" style ="background-color:#f0f0f0"><label>
		Sala: <?php echo $_smarty_tpl->tpl_vars['info']->value['nombre'];?>
<br>
		Ubicación: <?php echo $_smarty_tpl->tpl_vars['info']->value['ubicacion'];?>
<br>
		Periodo: <?php echo $_smarty_tpl->tpl_vars['info']->value['fechainicio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info']->value['fechafinal'];?>
<br>
		Grupo: <?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>

	</div></center>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['libros']->value)) {?>

	<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
	
		<div style="float:right; padding-bottom:10px">
	
			<?php if (isset($_smarty_tpl->tpl_vars['formato_preguntas']->value)) {?>
				<a style="text-decoration:none; color:black; padding-right:10px" 
					href="grupo.php?accion=formato_preguntas">
					<img src="../Images/reporte.png"> Formato-Reporte
				</a>
			<?php }?>
			
			<a style="text-decoration:none; color:black; padding-right:10px" 
				href="grupo.php?accion=lista_asistencia&info=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
" target="_blank">
				<img src="../Images/lista_asistencia.png"> Lista-Asistencia
			</a>
				
			<?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
				<a style="text-decoration:none; color:black; padding-right:10px" 
					href="grupo.php?accion=form_observaciones&info=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
">
					<img src="../Images/notas.png"> Observaciones
				</a>
				
				<a style="text-decoration:none; color:black; padding-right:20px" 
					href="redacta.php?accion=redactar&info=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
">
					<img src="../Images/sobre.png"> Mensaje Grupal
				</a>
			<?php }?>
			
		</div>
		
		<div class="table-info">
			<table class='table table-striped' width='500'>
			<tr>
				<th><center>ALUMNO</center></th>
				<th><center>ASISTENCIA</center></th>
				<th><center>COMPRENSIÓN</center></th> 
				<th><center>PARTICIPACIÓN</center></th> 
				<th><center>ACTIVIDADES</center></th>
				<th><center>REPORTE</center></th>
				<th><center>TERMINADO</center></th>
				<th><center>OPCIONES</center></th>
			</tr>
	
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'alumno');
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
$_smarty_tpl->tpl_vars['alumno']->_loop = true;
$__foreach_alumno_0_saved = $_smarty_tpl->tpl_vars['alumno'];
?>
				<tr> 
					 <form class='form-inline' action='grupo.php?info1=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
' method='post'>
						 <input type="hidden" name="datos[cveeval]" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveeval'];?>
"> 
						 <td width='500' style="vertical-align:middle"> <?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
 </td>
						 <td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" 
						 			style="position:absolute; width:<?php echo $_smarty_tpl->tpl_vars['alumno']->value['asistencia'];?>
%; height: 100%; background-color:#4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['asistencia'];?>
% 
						 			</div>
						 		</div>
					 		</div>
						 	</br>
						 	<center>
						 		<input type="number" class="form-control" name="datos[asistencia]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['asistencia'];?>
" style="width:65px ; display:block; "maxlength="3" max="0" min="100">
						 	</center>
						</td>
	
					 <td width='500'>  
					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
					 		<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['comprension'];?>
% ;height: 100%; background-color: #4caf50;"> 
					 			<div id="label"style="text-align: center; line-height: 30px; color: white;"> 
					 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['comprension'];?>
% 
					 			</div>
					 		</div>
					 	</div>
					 	</br>
						<center>
							<input type="number" class="form-control" name="datos[comprension]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['comprension'];?>
" style="width:65px ; display:block; "maxlength="3" max="0" min="100">
						</center>
					 </td>
	
						<td width='500'>
							<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
								<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['participacion'];?>
% ;height: 100%; background-color: #4caf50;">	
									<div id="label" 
										style="text-align: center; line-height: 30px; color: white;">
										<?php echo $_smarty_tpl->tpl_vars['alumno']->value['participacion'];?>
%
									</div>
								</div>
							</div>
							</br>
							<center>
								<input type="number" class="form-control" name="datos[participacion]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['participacion'];?>
" style="width:65px ; display:block; "maxlength="3" max="0" min="100">
							</center>
						</td>
						
						<td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['actividades'];?>
% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['actividades'];?>
% 
						 			</div>
						 		</div>
						 	</div>
						  </br>
						 	<center>
						 		<input type="number" class="form-control" name="datos[actividades]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['actividades'];?>
" style="width:65px ; display:block; "maxlength="3" max="0" min="100">
						 	</center>
						</td>
						
						<td width='500'>
						 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['reporte'];?>
% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['reporte'];?>
% 
						 			</div>
						 		</div>
						 	</div>
						 	</br>
						</td>
	
						<td width='500'>
							<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
								<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['terminado'];?>
% ;height: 100%; background-color: #4caf50;">
									<div id="label" 
										style="text-align: center; line-height: 30px; color: white;">
										<?php echo $_smarty_tpl->tpl_vars['alumno']->value['terminado'];?>
%
									</div>
								</div>
							</div>
						</td>
	
						<td style="vertical-align:middle">
							<a style="text-decoration:none" 
								href="redacta.php?accion=redactarI&info1=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
&info2=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nocontrol'];?>
">
								<img src="../Images/sobre.png">
							</a>
							<input type="submit" style='display: none'/>
							<a style="text-decoration:none"
								href="grupo.php?accion=libros&info=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cvelectura'];?>
&info2=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nocontrol'];?>
&info3=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
">
								<img src="../Images/libros.png">
							</a>
						</td>
					</form>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['alumno'] = $__foreach_alumno_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		</table>		
	</div>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>
	<table class='table'>
		<tr>
			<td colspan='4' align='right'>
				<a href='libros.php?info=<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
&info2=<?php echo $_smarty_tpl->tpl_vars['nocontrol']->value;?>
&info3=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
'>
					<img src='../Images/add.png'/> 
				</a>
			</td>
		</tr> 
	</table>

	<div class="page-header">
    <h2>Lista de Libros del Alumno</h2>
  </div>

  <table class='table table-striped' width='500'>
    
    <tr>
			<th><center>TITULO</center></th>
			<th><center>ESTADO</center></th>
			<th><center>REPORTE</center></th>
			<th width='500'><center>CALIFICACIÓN</center></th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->_loop = true;
$__foreach_libro_1_saved = $_smarty_tpl->tpl_vars['libro'];
?>
			<tr>
				<form class='form-inline' 
					action="grupo.php?accion=calificar_reporte&info1=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelista'];?>
&info2=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelectura'];?>
&info3=<?php echo $_smarty_tpl->tpl_vars['libro']->value['nocontrol'];?>
&info4=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
" 
					method='post'>
					<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</center></td>
					<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['combo'];?>
</center></td>
					<td style="vertical-align:middle"><center>
						<?php if (isset($_smarty_tpl->tpl_vars['libro']->value['archivoExiste'])) {?>
							<a href="grupo.php?accion=reporte&info=<?php echo $_smarty_tpl->tpl_vars['libro']->value['archivoExiste'];?>
&info2=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
"> 
					  	<img src="../Images/reporte.png"></a>
						<?php } else { ?>
							<img src="../Images/noexiste.png"></a>
						<?php }?>
					</center></td>
					
					<td style="vertical-align:middle" width='500'>
						<center>
						 	<div id="myprogress" style=" position: relative; width: 130px; height: 30px; background-color: #ddd;">	
						 		<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['libro']->value['calif_reporte'];?>
% ;height: 100%; background-color: #4caf50;">
						 			<div id="label" 
						 				style="text-align: center; line-height: 30px; color: white;">
						 				<?php echo $_smarty_tpl->tpl_vars['libro']->value['calif_reporte'];?>
% 
						 			</div>
						 		</div>
						 	</div>
					 		</br>
							<input type="number" class="form-control" name="calificacion" required 
								value="<?php echo $_smarty_tpl->tpl_vars['libro']->value['calif_reporte'];?>
" style="width:65px; display:block;" 
								maxlength="3" max="100" min="0"/>
							<input type="submit" style='display: none'/>
					 	</center>
					</td>

				</form>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
