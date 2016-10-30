<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-20 09:15:49
  from "/var/www/html/SALAS_LECTURAS/templates/admin/addpromotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5808d195b50e21_38964454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ab8b8d9951d1d23d1172af805c112be245c9bf' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/admin/addpromotor.html',
      1 => 1476972559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5808d195b50e21_38964454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1101907905808d195b08504_85579889';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<center>
       <form class="form-inline" action='addpromotor.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <br/>
  <br/> 
   
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
  <button type="submit" class="btn btn-default" name="guardar">Crear</button> </br>
  <?php echo $_smarty_tpl->tpl_vars['msgusuario']->value;?>

  <br/>
  <br/>
  <br/>
  <br/>

</form>
</center>
    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
