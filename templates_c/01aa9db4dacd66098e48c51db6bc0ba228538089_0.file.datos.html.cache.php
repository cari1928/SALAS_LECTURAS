<?php
/* Smarty version 3.1.30-dev/53, created on 2017-03-24 18:56:41
  from "/home/ubuntu/workspace/templates/promotor/datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58d56be96b46d8_43639558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01aa9db4dacd66098e48c51db6bc0ba228538089' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/datos.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58d56be96b46d8_43639558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '178478562858d56be9677388_04743278';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<center>
    <?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>

       <form class="form-inline" action='datos.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <br/>
  <br/> 
  <?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
    
  <br/>
  <br/>      
  <div class="form-group">
    <label>Nombre Completo: </label>
    <br/>
    <input class="form-control" id="exampleInputEmail3" placeholder="Nombre y Apellidos" name="datos[nombre]" id="producto" value ='<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' required>
  </div>
  <br/>
  <br/>
  <div class="form-group">
  <label>Correo: </label>
    <br/>
    <input class="form-control" placeholder="Correo" name="datos[correo]" id="producto" maxlength="75" required value= '<?php echo $_smarty_tpl->tpl_vars['correoEx']->value;?>
'>
    <label>@itcelaya.edu.mx</label>
    <br/>  
    <?php echo $_smarty_tpl->tpl_vars['correo']->value;?>

  </div>
  <br/>
  <br/>
  <label>Especialidad: </label>
    <br/>
      <?php echo $_smarty_tpl->tpl_vars['combo']->value;?>

    <br/>
    <br/>
  <div id='js' class="form-group">
    <label id="l1">Modificar contraseña</label>
    <input id="r1" type="radio"  class="btn btn-default" value='true' name="datos[pass]" onclick="mostrar()">
    <br/>
    <label id ="l2" style="display:none">Mantener contraseña original</label>
    <input id="r2" type="radio"  class="btn btn-default" value='false' name="datos[pass]" onclick="mostrar()" checked style="display:none">

  </div>
  <br/>
  <br/>
  <div id='oculto' class="form-group" style="display:none">
    <div class="form-group">
    <label>Contraseña:</label>
    <br/>
    <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Contraseña" name="datos[contrasena]" id="producto">
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Nueva contraseña:</label>
    <br/>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar contraseña" name="datos[contrasenaN]" id="producto">
  </div>
  <div class="form-group">
    <label>Confirmar nueva contraseña:</label>
    <br/>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar contraseña" name="datos[confcontrasenaN]" id="producto">
  </div>
  </div>
  <br/>
  <?php echo $_smarty_tpl->tpl_vars['contrasena']->value;?>

  <br/>
  <br/>
  <button type="submit" class="btn btn-default" value='Registrar' name="guardar">Actualizar</button> </br>
  
  <br/>
  <br/>
  <br/>
  <br/>

</form>
</center>
    <?php echo '<script'; ?>
>
    var bandera=0;
      function mostrar()
      {
        var test = document.getElementsByName('datos[pass]');
         if(test[0].checked == true)
          {
            document.getElementById('oculto').style.display="block";
            document.getElementById('r2').style.display="inline";
            document.getElementById('l2').style.display="inline";
            document.getElementById('r1').style.display="none";
            document.getElementById('l1').style.display="none";
          }
          if(test[1].checked == true)
          {
            document.getElementById('oculto').style.display="none";
            document.getElementById('r2').style.display="none";
            document.getElementById('l2').style.display="none";
            document.getElementById('r1').style.display="inline";
            document.getElementById('l1').style.display="inline";
          }
        
      }
    <?php echo '</script'; ?>
>

    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
