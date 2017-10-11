<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-04 03:59:04
  from "/home/ubuntu/workspace/templates/usuario/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d45c881cfe02_53917868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe0176e9a42abcd9596e15556a37411e2a6fbac4' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/grupo.html',
      1 => 1507048145,
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
function content_59d45c881cfe02_53917868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
	<center>
		<div class="form-group" style ="background-color:#f0f0f0">
			<label>
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

			</label>
		</div>
	</center>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
	
	<div class="links" style="float:right; padding-bottom:10px">
		
		<?php if (isset($_smarty_tpl->tpl_vars['formato_reporte']->value)) {?>
			<a href="grupo.php?accion=down&info=1&info2=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
"> 
	  		<img src="../Images/reporte.png"> Formato-Reporte
  		</a>
		<?php }?>
		
		<a href="msj.php?accion=listado&info=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
">
			<img src="../Images/sobre.png"> Mensajes
		</a>
		
		<a href="grupo.php?accion=form_libro&info1=<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
&info2=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
" style="text-decoration:none" >
			<img src="../Images/libros.png" width="30"> Libros
		</a>

	</div>

	<table class='table table-striped' width='500'>
		
		<tr>
			<th><center>ASISTENCIA</center></th>
			<th><center>COMPRENSIÓN</center></th> 
			<th><center>PARTICIPACIÓN</center></th> 
			<th><center>REPORTE</center></th>
			<th><center>ACTIVIDADES</center></th>
			<th><center>TERMINADO</center></th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'alumno');
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
$_smarty_tpl->tpl_vars['alumno']->_loop = true;
$__foreach_alumno_0_saved = $_smarty_tpl->tpl_vars['alumno'];
?>
			<tr> 
				 <form class='form - inline' action='grupo.php?info1=<?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>
' method='post' >
					 <input type="hidden" name="datos[nocontrol]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['alumno']->value['nocontrol'];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
" > 
					 
					 <td width='500'>  
					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['asistencia'];?>
% ;height: 100%; background-color: #4caf50;"> 
					 			<div id="label"style="text-align: center; line-height: 30px; color: white;"> 
					 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['asistencia'];?>
% 
					 			</div>
					 		</div>
					 	</div>
					 </br>
					 </td>
					 
					 <td width='500'>  
					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['comprension'];?>
% ;height: 100%; background-color: #4caf50;"> 
					 			<div id="label"style="text-align: center; line-height: 30px; color: white;"> 
					 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['comprension'];?>
% 
					 			</div>
					 		</div>
					 	</div>
					 </br>
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
						</br>
					</td>

					<td width='500'>
						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;"> <div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['reporte'];?>
% ;height: 100%; background-color: #4caf50;">	<div id="label"style="text-align: center; line-height: 30px; color: white;">
								<?php echo $_smarty_tpl->tpl_vars['alumno']->value['reporte'];?>
% 
								</div>
							</div>
						</div>
						</br>
					</td>
					
					<td width='500'>
					 	<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">	<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['actividades'];?>
% ;height: 100%; background-color: #4caf50;">
					 			<div id="label"style="text-align: center; line-height: 30px; color: white;">
					 				<?php echo $_smarty_tpl->tpl_vars['alumno']->value['actividades'];?>
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
						</br>
					</td>
				</form>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['alumno'] = $__foreach_alumno_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }
}
