<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-05 16:45:53
  from "/home/ubuntu/workspace/templates/usuario/datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d661c1e6a758_29930140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dbc66296f89df6d4a92036ea50847cc5cee5633' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/datos.html',
      1 => 1507221951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:../mensajes.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59d661c1e6a758_29930140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
      
<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
      <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
        <form action="datos.php?accion=update" method="post" enctype="multipart/form-data" novalidate>  
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Actualizar Alumno - Número de Control: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
</h3>
            </div>

            <div class="panel-body">
              <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?><input type="hidden" name="cveusuario" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
"><?php }?>
              
              <div class="row">
                <div class="col-sm-12" id="imgPortada">
                  <label>Imagen de Perfil</label>
                  <div id="kv-avatar-errors-2" class="center-block" style="display:none"></div>
                  <div class="kv-avatar center-block text-center form-group" style="width:200px">
                    <input id="portada" name="foto" type="file" class="file-loading" accept="image/*" required/>
                  </div>
                </div>
              </div> <!--end row-->
              
              <div class="form-group">
                <label>Nombre Completo:</label>
                <input class="form-control" placeholder="Nombre y Apellidos" name="datos[nombre]"  required
                  <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombreUsuario'];?>
" <?php }?>>
              </div>
                
              <div class="form-group">
                <label>Especialidad:</label>
                <label id="l4" style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] == 'O') {?>block<?php } else { ?>none<?php }?>">Carrera</label>
                <input id="r4" type="radio" class="btn btn-default" value='true' name="datos[especialidad]" 
                  style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] == 'O') {?>block<?php } else { ?>none<?php }?>" onclick="otro()">
                
                <div id="carrera" class="form-group" 
                  style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] != 'O') {?>block<?php } else { ?>none<?php }?>">
                  <?php echo $_smarty_tpl->tpl_vars['combo']->value;?>

                </div>
              </div>
                
              <?php if (!isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
                <div class="form-group">
                  <label>RFC: </label>
                  <input class="form-control" placeholder="RFC" name="datos[usuario]" maxlength="13" required>
                </div>
              <?php }?>
              
              <div class="form-group">
                <label>Correo: </label>
                <input type="email" class="form-control" placeholder="Correo" name="datos[correo]" maxlength="75" required
                <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['correo'];?>
" <?php }?>>
              </div>
              
              <?php if (!isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
                <div class="form-group">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]" required>
                </div>
                
                <div class="form-group">
                  <label>Confirmar contraseña:</label>
                  <input type="password" class="form-control" placeholder="Confirmar contraseña" 
                    name="datos[confcontrasena]" required>
                </div>
              <?php }?>
              
              <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
                <div id='js' class="form-group">
                  <label id="l1">Modificar contraseña</label>
                  <input id="r1" type="radio" class="btn btn-default" value='true' name="datos[pass]" onclick="mostrar()">
                  <label id ="l2" style="display:none">Mantener contraseña original</label>
                  <input id="r2" type="radio" class="btn btn-default" value='false' name="datos[pass]" 
                    onclick="mostrar()" checked style="display:none">
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
                    <input type="password" class="form-control" placeholder="Confirmar nueva contraseña" 
                      name="datos[confcontrasenaN]">
                  </div>
                  
                </div>
              <?php }?>
              
            </div>
          </div>
          
          <div class="form-group" align="right">
            <button type="submit" class="btn btn-primary">
              <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> Actualizar <?php } else { ?> Guardar <?php }?>
            </button>
          </div>
        </form>
      <?php }?>
    </nav>
  </div>
</div>  

<?php echo '<script'; ?>
 type="text/javascript">
  $("#portada").fileinput({
    overwriteInitial: true,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancela o reinicia',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="../../Images/fotos/<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" alt="portada" style="width:120px"><h6 class="text-muted">Clic aquí para subir imagen</h6>',
     layoutTemplates: {main2: '{preview} {remove} {browse}'}, 
    allowedFileExtensions: ["jpg", "png"]
  });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
