<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-01 01:11:16
  from "/home/ubuntu/workspace/templates/registrar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58685734502b77_01537591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94e9263a63d37dc0dcdfa6eb967d8996ee32b73c' => 
    array (
      0 => '/home/ubuntu/workspace/templates/registrar.html',
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
function content_58685734502b77_01537591 (Smarty_Internal_Template $_smarty_tpl) {
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
