<?php
/* Smarty version 3.1.30-dev/53, created on 2017-07-26 16:37:47
  from "/home/ubuntu/workspace/templates/promotor/redacta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5978c55bdc9694_49240828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2167f71a9ed0b066757b9a922c5073031819803e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/redacta.html',
      1 => 1501087066,
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
function content_5978c55bdc9694_49240828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13036881995978c55bc0d899_65243082';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
      <?php if (isset($_smarty_tpl->tpl_vars['para']->value)) {?> <?php if (isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
        <form name="messageform" action="redacta.php?accion=enviar&para=<?php echo $_smarty_tpl->tpl_vars['para']->value;?>
&cveperiodo=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
" method="post" id="messageform" 
          enctype="multipart/form-data">
          
          <div class="panel panel-default">
          
            <div class="panel-heading">
              <h3 class="panel-title"> Aviso <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 </h3>
            </div>
            
            <div class="panel-body">
              
              <div class="small-10 columns form-group">
                <label> Asunto<span class="kv-reqd">*</span></label>
                <input class="span12 form-control" name="introduccion" id="subject" placeholder="Asunto" data-toggle="tooltip" 
                  title="Se aceptan entre 10 y 80 caracteres" data-validation-required-message="Por favor, ingrese el asunto" required 
                  value='<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['introduccion'];
}?>' <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>>
              </div>
              
              <div class="small-10 columns form-group">
                <label> Contenido del mensaje<span class="kv-reqd">*</span></label>
                <textarea class="form-control span12" name="descripcion" id="content" rows="7" cols="100"
                  placeholder="Contenido del mensaje" data-validation-required-message="Por favor, ingrese su mensaje" minlength="5" 
                  data-validation-minlength-message="Mínimo 5 caracteres" data-toggle="tooltip" 
                  title="Se aceptan entre 50 y 500 caracteres" required 
                  <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['descripcion'];
}?></textarea>                    
              </div>
              
              <div class="small-10 columns form-group">
                <label> Fecha de Expiracion<span class="kv-reqd">*</span></label>
                <input type="date"  class="form-control" name="expira" required
                  value='<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['expira'];
}?>' <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>>                      
              </div>
              
              <?php if (!isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?> <?php if (!isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
              <div class="small-10 columns form-group">
                <label>Subir archivo</label>
                <input type="file" id="input12" name="archivo">
              </div>
              <?php }
}?>
              
              <div class="small-10 columns form-group" align="right">
                <input type="reset" value="Cancelar" class="btn btn-danger" data-toggle="tooltip" data-placement="top" 
                  title="Borrar datos" id="_cancel" name="_cancel">
                <input type="submit" value="Enviar" class="btn btn-success" data-toggle="tooltip" data-placement="top" 
                  title="Publicar aviso" id="_send" name="_send">
              </div>
            
            </div><!--end panel-body-->
          
          </div> <!--end panel panel-defaul-->
          
          <!--<div class="small-6 columns" style="margin-top:15px;"></div>-->
          <!--<div class="small-6 columns"></div>-->
        </form>
      <?php }?> <?php }?>
      
      <?php if (isset($_smarty_tpl->tpl_vars['accion']->value)) {?>
        <form name="messageform" method="post" id="messageform" enctype="multipart/form-data"
          action="redacta.php?accion=enviarI&para=<?php if (isset($_smarty_tpl->tpl_vars['grupo']->value)) {
echo $_smarty_tpl->tpl_vars['grupo']->value;
}?>&receptor=<?php if (isset($_smarty_tpl->tpl_vars['receptor']->value)) {
echo $_smarty_tpl->tpl_vars['receptor']->value;
}?>">
          
          <input type="hidden" name="action" id="action">
          
          <div class="panel panel-default">
            
            <div class="panel-heading">
              <h3 class="panel-title"> Aviso <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 </h3>
            </div>
            
            <div class="panel-body">
              
              <div class="small-10 columns form-group">
                <label>Asunto<span class="kv-reqd">*</span></label>
                <input class="span12 form-control" name="introduccion" id="subject" placeholder="Asunto" 
                  data-toggle="tooltip" required value='<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['introduccion'];
}?>' 
                  <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>>
              </div>
              
              <div class="small-10 columns form-group">
                <label> Contenido del mensaje<span class="kv-reqd">*</span></label>
                <textarea class="form-control span12" name="descripcion" id="content" rows="7"
                  placeholder="Contenido del mensaje" minlength="5" data-toggle="tooltip" required
                  <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['descripcion'];
}?></textarea>
              </div>
              
              <div class="small-10 columns form-group">
                <label>Fecha de Expiracion<span class="kv-reqd">*</span></label>
                <input type="date" class="form-control" name="expira" required value='<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['expira'];
}?>' 
                  <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>>
              </div>
              
              <?php if (!isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
                <div class="small-10 columns form-group">
                  <label>Subir archivo</label>
                  <input type="file" id="input12" name="archivo">
                </div>
                
                <div class="small-6 columns form-group" align="right">
                  <input type="reset" value="Cancelar" class="btn btn-danger" data-toggle="tooltip" 
                    data-placement="top" id="_cancel" name="_cancel">
                  <input type="submit" value="Enviar" class="btn btn-success" data-toggle="tooltip" data-placement="top" 
                  id="_send" name="_send">
                </div>
              <?php }?>
              
              <?php if (isset($_smarty_tpl->tpl_vars['archivo']->value)) {?>
                <a style="text-decoration:none; color:black; padding-right:10px" 
                  href="<?php if (!isset($_smarty_tpl->tpl_vars['eliminado']->value)) {?>msj.php?accion=archivo&info=<?php echo $_smarty_tpl->tpl_vars['archivo']->value;
} else { ?>#<?php }?>">
                  <img src="../Images/docs.png"> <?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>

                </a>
              <?php }?>
              
            </div>
          </div>
          
          <div class="small-6 columns" style="margin-top:15px;"></div>
          <div class="small-6 columns"></div>
        </form>
      <?php } else { ?> <?php if (!isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
        <div class="small-6 columns">
          <label>No se a especificado destinatario</label>
        </div>
      <?php }?> <?php }?>
      
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
