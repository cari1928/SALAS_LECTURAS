<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-30 06:28:59
  from "/home/ubuntu/workspace/templates/admin/form_promotores.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5865feabd36543_60955181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae5657e9878229d8453f3c2da5a7bb0d8c5de3c9' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_promotores.html',
      1 => 1483079328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5865feabd36543_60955181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5829966925865feabcdb1e9_90306912';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
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
      <form action="promotor.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>update<?php } else { ?>insert<?php }?>" method="post">  
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> Actualizar Promotor - RFC: <?php echo $_smarty_tpl->tpl_vars['promotores']->value['cveusuario'];?>

              <?php } else { ?> Nuevo Promotor <?php }?>
            </h3>
          </div>
          <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
              <input type="hidden" name="cveusuario" value="<?php echo $_smarty_tpl->tpl_vars['promotores']->value['cveusuario'];?>
">
            <?php }?>
            <div class="form-group">
              <label>Nombre Completo:</label>
              <input class="form-control" placeholder="Nombre y Apellidos" name="datos[nombre]"  required
              <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['promotores']->value['nombre'];?>
" <?php }?>>
            </div>
            <div class="form-group">
              <label>Especialidad:</label>
              <?php echo $_smarty_tpl->tpl_vars['combito']->value;?>

            </div>
            <?php if (!isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
            <div class="form-group">
              <label>RFC: </label>
              <input class="form-control" placeholder="RFC" name="datos[usuario]" maxlength="13" required>
            </div>
            <?php }?>
            <div class="form-group">
              <label>Correo: </label>
              <input type="email" class="form-control" placeholder="Correo" name="datos[correo]" maxlength="75" required
              <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['promotores']->value['correo'];?>
" <?php }?>>
            </div>
            <?php if (!isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
            <div class="form-group">
              <label>Contraseña:</label>
              <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]" required>
            </div>
            <div class="form-group">
              <label>Confirmar contraseña:</label>
              <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar contraseña" name="datos[confcontrasena]" id="producto" required>
            </div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
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
              <?php }?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">
          <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> Actualizar 
          <?php } else { ?> Guardar <?php }?>
        </button>
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
