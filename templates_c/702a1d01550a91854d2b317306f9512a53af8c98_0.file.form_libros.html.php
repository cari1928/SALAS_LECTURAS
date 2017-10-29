<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-12 14:22:51
  from "/home/ubuntu/workspace/templates/admin/form_libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59df7abb7b5f27_55610104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702a1d01550a91854d2b317306f9512a53af8c98' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_libros.html',
      1 => 1500904993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:../number_style.html' => 1,
    'file:../mensajes.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59df7abb7b5f27_55610104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:../number_style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
      <form class="form form-vertical" method="post" enctype="multipart/form-data" 
        action="libros.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>update<?php } else { ?>insert<?php }?>" novalidate>
        
        <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?><input type="hidden" name="cvelibro" value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['cvelibro'];?>
"><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['portada']->value)) {?><input type="hidden" name="portada" value="<?php echo $_smarty_tpl->tpl_vars['portada']->value;?>
"><?php }?>
        
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title">
              <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> Actualizar Libro <?php } else { ?> Nuevo Libro <?php }?>
            </h3>
          </div>

          <div class="panel-body">
            
            <div class="row">
              
              <?php if (isset($_smarty_tpl->tpl_vars['upload_libros']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['upload_libros']->value == 'UPDATE') {?>
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group" style="text-align:right">
                          <label> Portada Default </label> 
                        </div>
                      </div>
                      
                      <div class="col-sm-6">
                        <div class="onoffswitch">
                          <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"
                            onclick="show()" <?php if ($_smarty_tpl->tpl_vars['portada']->value == 'no_disponible.jpg') {?> checked <?php }?>>
                          <label class="onoffswitch-label" for="myonoffswitch"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-12" id="imgPortada">
                    <div id="kv-avatar-errors-2" class="center-block" style="display:none"></div>
                    <div class="kv-avatar center-block text-center form-group" style="width:400px">
                      <input id="portada" name="portada" type="file" class="file-loading" accept="image/*" 
                        required/>
                    </div>
                  </div>
                  
                  <div class="col-sm-12" id="imgDefault" style="display:none">
                    <center>
                      <div class="form-group" style="width:400px">
                        <img src="../../Images/portadas/no_disponible.jpg" alt="portada" style="width:380px">
                      </div>
                    </center>
                  </div>
                <?php } else { ?>
                  <div class="col-sm-12" id="imgPortada">
                    <div id="kv-avatar-errors-2" class="center-block" style="display:none"></div>
                    <div class="kv-avatar center-block text-center form-group" style="width:400px">
                      <input id="portada" name="portada" type="file" class="file-loading" accept="image/*" 
                        required/>
                    </div>
                  </div>
                <?php }?>
              <?php }?>
              
              <div class="col-sm-12">
                <div class="row">
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Título <span class="kv-reqd">*</span></label> 
                      <input class="form-control" name="titulo" placeholder="Título del Libro" maxlength="255" required
                      <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['titulo'];?>
" <?php }?>>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Autor <span class="kv-reqd">*</span></label>
                      <input class="form-control" name="autor" placeholder="Nombre del Autor" maxlength="75" required
                      <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['autor'];?>
" <?php }?>>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Editorial <span class="kv-reqd">*</span></label> 
                      <input class="form-control" name="editorial" placeholder="Editorial del Libro" maxlength="25" required
                      <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['editorial'];?>
" <?php }?>>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Cantidad <span class="kv-reqd">*</span></label> 
                      <input type="number" class="form-control" name="cantidad" placeholder="Cantidad"
                        min="0" max="999999999999999" required <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['cantidad'];?>
" <?php }?>>
                    </div>
                  </div>
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label> Sinopsis <span class="kv-reqd">*</span></label> 
                      <textarea class="form-control" name="sinopsis" required rows="8" 
                        placeholder="Escriba la sinopsis del libro..." style="text-align:left; resize:none"
                        cols="20"><?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {
echo $_smarty_tpl->tpl_vars['libros']->value['sinopsis'];
}?></textarea>
                    </div>
                  </div>
                  
                </div> <!--end row-->
                
                <hr/>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary"><?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> Actualizar <?php } else { ?> Guardar <?php }?></button>
                </div>
                
              </div><!-- end col-sm-8 -->
            </div> <!--end row-->
          </div> <!-- end-panel-body -->
        </div> <!-- end-panel-panel-default -->
      </form>
      
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
      defaultPreviewContent: '<img src="../../Images/portadas/<?php echo $_smarty_tpl->tpl_vars['portada']->value;?>
" alt="portada" style="width:380px"><h6 class="text-muted">Clic aquí para subir portada</h6>',
       layoutTemplates: {main2: '{preview} {remove} {browse}'}, 
      allowedFileExtensions: ["jpg", "png", "gif"]
  });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
