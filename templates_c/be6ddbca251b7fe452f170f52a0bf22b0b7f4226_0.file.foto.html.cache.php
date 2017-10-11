<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-05 02:32:40
  from "/home/ubuntu/workspace/templates/usuario/foto.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d599c8f2c6f2_95172110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be6ddbca251b7fe452f170f52a0bf22b0b7f4226' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/foto.html',
      1 => 1507170244,
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
function content_59d599c8f2c6f2_95172110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '166191299359d599c8f0ce36_44389151';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      <form class="form form-vertical" method="post" enctype="multipart/form-data" action="foto.php?accion=upload" novalidate>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Imagen de Perfil</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12" id="imgPortada">
                <div id="kv-avatar-errors-2" class="center-block" style="display:none"></div>
                <div class="kv-avatar center-block text-center form-group" style="width:200px">
                  <input id="portada" name="foto" type="file" class="file-loading" accept="image/*" required/>
                </div>
              </div>
            </div> <!--end row-->
          </div> <!-- end-panel-body -->
        </div> <!-- end-panel-panel-default -->
      </form>
    </nav>
  </div>
</div>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      <div class="panel panel-default">
        
        <div class="alert alert-warning alert-dismissible" role="alert">
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      		<span aria-hidden="true">&times;</span></button>
      	  <strong>¡Aviso!</strong> Si toma una foto desde la webcam, se guardará automáticamente como foto de perfil.
      	</div>
              
        <div class="panel-heading">
          <h3 class="panel-title">Foto de perfil</h3>
        </div>
              
        <div class="form-group">
          <div class="well">
              <div class="container-fluid">
                <label>Tomar foto desde la webcam:</label>
                
                <div class="row-fluid">
                  <div style="float:left;">
                    <div class="span12">
                      <!--<div class="form-actions">-->
                        <!--<div>-->
                          <input id='botonIniciar' type='button' value='Iniciar Camara' class="btn btn-info"/>
                        <!--</div>-->
                      <!--</div>-->
          
                      <div class="span4">
                        <div class="titulo">Cámara</div>
                        <video id="camara" width="127px" High="137px" autoplay controls></video>
                      </div>
                    </div>
                  </div>
                      
                  <div style="float:right;">
                    <div class="span4">
                      <input id='botonFoto' type='button' value='Tomar Foto' class="btn btn-danger "/>
                      <div class="titulo">Foto</div>
                      <canvas id="foto" width="127px" High="137px" ></canvas>
                    </div> 
    
                    <div class="span4">
                      <div id="consola"></div>  
                    </div> 
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
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
    showUpload: true,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancela o reinicia',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="../../Images/fotos/<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" alt="portada" style="width:120px"><h6 class="text-muted">Clic aquí para subir imagen</h6>',
     layoutTemplates: {main2: '{preview} {remove} {upload} {browse}'}, 
    allowedFileExtensions: ["jpg", "png"]
  });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
