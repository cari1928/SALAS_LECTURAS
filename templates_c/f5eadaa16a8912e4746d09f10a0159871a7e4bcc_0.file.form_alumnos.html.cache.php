<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-31 04:13:34
  from "/home/ubuntu/workspace/templates/admin/form_alumnos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5867306e8be218_61064471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5eadaa16a8912e4746d09f10a0159871a7e4bcc' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_alumnos.html',
      1 => 1483157603,
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
function content_5867306e8be218_61064471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19382155155867306e86d8f9_81845384';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
    
<?php $_smarty_tpl->_subTemplateRender("file:../number_style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
      	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
      	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

      	</div>
      <?php }?>
      <form action="alumnos.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>update<?php } else { ?>insert<?php }?>" method="post">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> Actualizar Alumno - Número de Control: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>

              <?php } else { ?> Nuevo Alumno <?php }?>
            </h3>
          </div>
          <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
              <input type="hidden" name="datos[usuario]" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
">
            <?php }?>
            <div class="form-group">
              <label>Nombre Completo: </label>
              <input class="form-control" placeholder="Nombre y Apellidos" name="datos[nombre]" required 
              <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
" <?php }?>>
            </div>
            <div class="form-group">
              <label>Especialidad: </label>
              <?php echo $_smarty_tpl->tpl_vars['cmb_especialidad']->value;?>

            </div>
            <?php if (!isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
              <div class="form-group">
                <label>Número de Control:</label>
                <input class="form-control" placeholder="8 caracteres numéricos" name="datos[usuario]" maxlength="8" required type="number">
              </div>
            <?php }?>
            <div class="form-group">
              <label>Correo:</label>
              <input type='email' class="form-control" placeholder="Correo" name="datos[correo]" maxlength="75"
              <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['correo'];?>
" <?php }?>>
            </div>
            
            <!-- Si es update se muestra el radio button -->
            <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
              <div id='js' class="form-group">
                <label id="l1">Modificar contraseña</label>
                <input id="r1" type="radio" class="btn btn-default" value='true' name="datos[pass]" onclick="mostrar()">
                <label id ="l2" style="display:none">Mantener contraseña original</label>
                <input id="r2" type="radio"  class="btn btn-default" value='false' name="datos[pass]" onclick="mostrar()" checked style="display:none">
              </div>
              <div id='oculto' class="form-group" style="display:none">
                <div class="form-group">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]">
                </div>
                <div class="form-group">
                  <label>Nueva contraseña:</label>
                  <input type="password" class="form-control" placeholder="Nueva contraseña" name="datos[contrasenaN]">
                </div>
                <div class="form-group">
                  <label>Confirmar Nueva contraseña:</label>
                  <input type="password" class="form-control" placeholder="Confirmar nueva contraseña" name="datos[confcontrasenaN]">
                </div>
              </div>
            <!--Si es insert se muestran los input directamente-->
            <?php } else { ?>
              <div class="form-group">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]">
                </div>
                <div class="form-group">
                  <label>Confirmar contraseña:</label>
                  <input type="password" class="form-control" placeholder="Confirmar contraseña" name="datos[confcontrasena]">
                </div>
            <?php }?>
            
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">
            <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> Actualizar 
            <?php } else { ?> Guardar <?php }?>
          </button>
        </div>
      </form>
    </nav>
  </div>
</div>
<?php echo '<script'; ?>
>
  var bandera = 0;
    function mostrar()
    {
      var test = document.getElementsByName('datos[pass]');
       if(test[0].checked == true) {
          document.getElementById('oculto').style.display="block";
          document.getElementById('r2').style.display="inline";
          document.getElementById('l2').style.display="inline";
          document.getElementById('r1').style.display="none";
          document.getElementById('l1').style.display="none";
        }
        if(test[1].checked == true) {
          document.getElementById('oculto').style.display="none";
          document.getElementById('r2').style.display="none";
          document.getElementById('l2').style.display="none";
          document.getElementById('r1').style.display="inline";
          document.getElementById('l1').style.display="inline";
        }
    }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
