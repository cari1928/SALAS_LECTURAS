<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-20 08:38:40
  from "/var/www/html/SALAS_LECTURAS/templates/registrar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5808c8e0685d51_18803577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7d92a148e3d83852dac3db23b8bb1bafe295be5' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/registrar.html',
      1 => 1476970715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5808c8e0685d51_18803577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center>
    <?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>

       <form class="form-inline" action='registrar.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <br/>
  <div class="form-group">
    <label>Alumno: </label><input type="radio" name="datos[tipo]" value="U">
    <label>Promotor: </label><input type="radio" name="datos[tipo]" value="P"> 
  </div>
  <br/> 
  <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
    
  <br/>      
  <div class="form-group">
    <label>Nombre Completo: </label>
    <br/>
    <input class="form-control" id="exampleInputEmail3" placeholder="Nombre y Apellidos" name="datos[nombre]" id="producto" required>
  </div>
  <br/>
  <br/>
  <label>Especialidad: </label>
    <br/>
      <?php echo $_smarty_tpl->tpl_vars['especialidad']->value;?>

    <br/>
    <br/>
    <div class="form-group">
    <label>Usuario: </label>
    <br/>
    <input class="form-control" id="exampleInputPassword3" placeholder="noControl/RFC" name="datos[usuario]" id="producto" maxlength="13" required>
  </div>
  <br/>
  <?php echo $_smarty_tpl->tpl_vars['noControl']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['rfc']->value;?>

  <br/>
  <br/>
  <div class="form-group">
  <label>Correo: </label>
    <br/>
    <input class="form-control" placeholder="Correo" name="datos[correo]" id="producto" maxlength="75" required>
    <label>@itcelaya.edu.mx </label>
    <br/>  
    <?php echo $_smarty_tpl->tpl_vars['correo']->value;?>

  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label>Contraseña:</label>
    <br/>
    <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Contraseña" name="datos[contrasena]" id="producto" required>
  </div>
  <div class="form-group">
    <label>Confirmar contraseña:</label>
    <br/>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar contraseña" name="datos[confcontrasena]" id="producto" required>
  </div>
  <br/>
  <?php echo $_smarty_tpl->tpl_vars['contrasena']->value;?>

  <br/>
  <br/>
  <button type="submit" class="btn btn-default" value='Registrar' name="guardar">Registrar</button> </br>
  <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>

  <br/>
  <br/>
  <br/>
  <br/>

</form>
</center>
    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
