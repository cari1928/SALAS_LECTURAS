<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-27 16:44:54
  from "/home/ubuntu/workspace/templates/admin/updatepromotor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58629a8641fa53_01579980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e99b6d723bbeff299f077bab1320dc63fb515483' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/updatepromotor.html',
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
function content_58629a8641fa53_01579980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '189765838158629a86402403_33311105';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<center>
    <form class="form-inline" action='updatepromotor.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
        <br/> 
        <br/>
        <div class="form-group">
          <label>Nombre Completo: </label>
          <br/>
          <input class="form-control" id="exampleInputEmail3" placeholder="Nombre y Apellidos" name="datos[nombre]" id="producto" value='<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' required>
        </div>
        <br/>
        <br/>
        <label>Especialidad: </label> 
        <br/>
        <?php echo $_smarty_tpl->tpl_vars['combo']->value;?>

        <br/> 
        <br/>
        <div class="form-group">
          <label>Correo: </label>
          <br/>
          <input class="form-control" placeholder="Correo" name="datos[correo]" value="<?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
" maxlength="75" required>
          <label> @itcelaya.edu.mx </label>
        </div>
        <br/> 
        <br/>
        <div id='js' class="form-group">
          <label id="l1">Modificar contraseña</label>
          <input id="r1" type="radio" class="btn btn-default" value='true' name="datos[pass]" onclick="mostrar()">
          <br/>
          <label id="l2" style="display:none">Mantener contraseña original</label>
          <input id="r2" type="radio" class="btn btn-default" value='false' name="datos[pass]" onclick="mostrar()" checked style="display:none">
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
        <?php echo $_smarty_tpl->tpl_vars['contrasena']->value;?>

        <br/>
        <button type="submit" class="btn btn-default" value='<?php echo $_smarty_tpl->tpl_vars['cveUser']->value;?>
' name="datos[guardar]">Actualizar</button> </br>

        <br/>
        <br/>
        <br/>
        <br/>

    </form>
</center>
<?php echo '<script'; ?>
>
    var bandera = 0;

    function mostrar() {
        var test = document.getElementsByName('datos[pass]');
        if (test[0].checked == true) {
            document.getElementById('oculto').style.display = "block";
            document.getElementById('r2').style.display = "inline";
            document.getElementById('l2').style.display = "inline";
            document.getElementById('r1').style.display = "none";
            document.getElementById('l1').style.display = "none";
        }
        if (test[1].checked == true) {
            document.getElementById('oculto').style.display = "none";
            document.getElementById('r2').style.display = "none";
            document.getElementById('l2').style.display = "none";
            document.getElementById('r1').style.display = "inline";
            document.getElementById('l1').style.display = "inline";
        }

    }
<?php echo '</script'; ?>
>

</body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
