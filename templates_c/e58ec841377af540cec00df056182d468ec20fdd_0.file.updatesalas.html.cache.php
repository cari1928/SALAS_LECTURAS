<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:17:42
  from "/var/www/html/SALAS_LECTURAS/templates/admin/updatesalas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf4861e6cc6_04029775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e58ec841377af540cec00df056182d468ec20fdd' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/updatesalas.html',
      1 => 1476194271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf4861e6cc6_04029775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '97972751257fcf486193724_12848581';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<center>
       <form class="form-inline" action='updatesalas.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <br/>
  <br/>      
    <div class="form-group">
    <label>Hora Inicial:   Hora Final:</label>
    <br/>
    <input type="time" class="form-control" id="exampleInputPassword3" name="datos[horainicial]" id="producto" required value="<?php echo $_smarty_tpl->tpl_vars['horaInicial']->value;?>
">

    <div class="form-group">
    <input type="time" class="form-control" id="exampleInputPassword3" name="datos[horafinal]" id="producto" required value="<?php echo $_smarty_tpl->tpl_vars['horaFinal']->value;?>
">
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Ubicacion:</label>
    <br/>
    <input class="form-control" id="exampleInputEmail3" placeholder="Ubicacion de la sala" name="datos[ubicacion]" id="producto" required value="<?php echo $_smarty_tpl->tpl_vars['ubicacion']->value;?>
">
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Limite:</label>
    <br/>
    <input class="form-control" id="exampleInputEmail3" placeholder="Numero de Alumnos" name="datos[limite]" id="producto" required value="<?php echo $_smarty_tpl->tpl_vars['limite']->value;?>
" onkeypress="return justNumbers(event);" maxlength="2">
    <br/>
    <?php echo $_smarty_tpl->tpl_vars['msjlimite']->value;?>

  </div>
  <br/>
  <br/>
  <input type ="hidden" class="btn btn-default" value='<?php echo $_smarty_tpl->tpl_vars['cve2']->value;?>
' name="datos[respaldo]">
  <button type="submit" class="btn btn-default" value='<?php echo $_smarty_tpl->tpl_vars['cve']->value;?>
' name="datos[guardar]">Actualizar</button> </br>
  <br/>
  <br/>
  <br/>
  <br/>

</form>
</center>

	<?php echo '<script'; ?>
>
		function justNumbers(e)
		{
			var keyNum = Window.event ? Window.event.keyCode : e.which;
			if((keyNum == 0) || keyNum==15)
			{
				return true;
			}
			return /\d/.test(String.fromCharCode(keyNum));
		}
	<?php echo '</script'; ?>
>

    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
