<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:17:17
  from "/var/www/html/SALAS_LECTURAS/templates/admin/addsalas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf46d74feb2_49972060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ecad3ec717e69f6881cbc8cea27e5e20f6fc7fd' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/addsalas.html',
      1 => 1473174323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf46d74feb2_49972060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '194445226057fcf46d6a3ec9_54907764';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<center>
       <form class="form-inline" action='addsalas.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <br/>
  <br/>      
  <div class="form-group">
    <label>Clave Sala: </label>
    <br/>
    <input class="form-control" id="exampleInputEmail3" placeholder="Clave de la sala" name="datos[cvesala]" id="producto" maxlength="3" required>
  </div>
    <br/>
    <br/>
    <div class="form-group">
    <label>Hora Inicial:   Hora Final:</label>
    <br/>
    <input type="time" class="form-control" id="exampleInputPassword3"  name="datos[horainicial]" id="producto" required>

    <div class="form-group">
    <input type="time" class="form-control" id="exampleInputPassword3" name="datos[horafinal]" id="producto" required>
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Ubicacion:</label>
    <br/>
    <input class="form-control" id="exampleInputEmail3" placeholder="Ubicacion de la sala" name="datos[ubicacion]" id="producto" required>
  </div>
  <br/>
  <br/>
  <div class="form-group">
  <label>Limite:</label>
    <br/>
    <input class="form-control" id="exampleInputEmail3" placeholder="Numero de Alumnos" name="datos[limite]" id="producto" required  onkeypress="return justNumbers(event);" maxlength="2">
    <br/>
    <?php echo $_smarty_tpl->tpl_vars['msjlimite']->value;?>

  </div>
  <br/>
  <br/>
  <button type="submit" class="btn btn-default" value='Registrar' name="guardar">Registrar</button> </br>
  <br/>
  <br/>
  <br/>
  <br/>

</form>
</center>
    </body>

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

</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
