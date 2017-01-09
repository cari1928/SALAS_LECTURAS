<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 09:01:49
  from "/home/ubuntu/workspace/templates/promotor/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5873517d824d09_75206522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd30dddbe76326c3f4c52577113bad4ba39ce7b6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/grupo.html',
      1 => 1483952506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:../number_style.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5873517d824d09_75206522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9202501745873517d798c38_13090420';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../number_style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
	<center>
		<div class="form-group" style ="background-color:#f0f0f0">
			<label>
				Sala: <?php echo $_smarty_tpl->tpl_vars['info']->value['nombre'];?>
<br>
				Ubicación: <?php echo $_smarty_tpl->tpl_vars['info']->value['ubicacion'];?>
<br>
				Periodo: <?php echo $_smarty_tpl->tpl_vars['info']->value['fechainicio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info']->value['fechafinal'];?>
<br>
				Grupo: <?php echo $_smarty_tpl->tpl_vars['info']->value['letra'];?>

			</label>
		</div>
	</center>
<?php }
if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
	<table class='table table - striped' width='500'>
		<tr>
			<th>Alumno</th>
			<th>Comprensión</th> 
			<th>Motivación</th>
			<th>Reporte</th> 
			<th>Tema</th>
			<th>Participación</th> 
			<th>Terminado</th>
			<th>Opciones </th>
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
					 <td width='500'> <?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
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
					 <center>
				 		<input type="number" class="form-control" name="datos[comprension]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['comprension'];?>
" style="width:65px ; display:block; "maxlength="3">
				 	</center>
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
					 </br>
				 	<center>
				 		<input type="number" class="form-control" name="datos[motivacion]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['motivacion'];?>
" style="width:65px ; display:block; "maxlength="3">
				 	</center>
					</td>

					<td width='500'>
						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;">
							<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['reporte'];?>
% ;height: 100%; background-color: #4caf50;">	<div id="label"style="text-align: center; line-height: 30px; color: white;">
								<?php echo $_smarty_tpl->tpl_vars['alumno']->value['reporte'];?>
% 
								</div>
							</div>
						</div>
						</br>
						<center>
							<input type="number" class="form-control" name="datos[reporte]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['reporte'];?>
" style="width:65px ; display:block; "maxlength="3">
						</center>
					</td>

					<td width='500'>
						<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;"> 	<div id="mybar" style="position: absolute; width: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['tema'];?>
% ;height: 100%; background-color: #4caf50;">		<div id="label"style="text-align: center; line-height: 30px; color: white;">
									<?php echo $_smarty_tpl->tpl_vars['alumno']->value['tema'];?>
%
								</div>
							</div>
						</div>
					</br>
					<center>
						<input type="number" class="form-control" name="datos[tema]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['tema'];?>
" style="width:65px ; display:block; "maxlength="3">
					</center>
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
						<center>
							<input type="number" class="form-control" name="datos[participacion]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['participacion'];?>
" style="width:65px ; display:block; "maxlength="3">
						</center>
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
						<center>
							<input type="number" class="form-control" name="datos[terminado]" required value = "<?php echo $_smarty_tpl->tpl_vars['alumno']->value['terminado'];?>
" style="width:65px ; display:block; "maxlength="3">
						</center>
					</td>
						<td>
							<a href="redacta.php?accion=redactarI&info=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
&receptor=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nocontrol'];?>
&grupo=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
&periodo=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveperiodo'];?>
">
								<img src="../Images/sobre.png">
							</a>
							<a href="grupo.php?accion=libros&info=<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cvelectura'];?>
">
								<img src="../Images/mostrarL.png">
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
<?php }
if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>
	<div class="page-header">
    <h2>Lista de Libros</h2>
  </div>
  <table class='table table-striped'>
    <tr>
    	<th><center>CLAVE</center></th>
			<th><center>TITULO</center></th>
			<th><center>AUTOR</center></th>
      <th><center>EDITORIAL</center></th>
      <th><center>PRECIO</center></th>
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
        <td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['autor'];?>
</center></td>
        <td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['editorial'];?>
</center></td>
        <td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['precio'];?>
</center></td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</table>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
