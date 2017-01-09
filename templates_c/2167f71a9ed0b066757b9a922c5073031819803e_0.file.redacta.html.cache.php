<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-06 18:47:35
  from "/home/ubuntu/workspace/templates/promotor/redacta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_586fe64793bc94_09276681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2167f71a9ed0b066757b9a922c5073031819803e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/redacta.html',
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
function content_586fe64793bc94_09276681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '54801808586fe6478aa371_72739334';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center>
    <?php if (isset($_smarty_tpl->tpl_vars['msj']->value)) {?>
        <label style="color:red;"><?php echo $_smarty_tpl->tpl_vars['msj']->value;?>
</label>
    <?php }?>
</center>   
<?php if (isset($_smarty_tpl->tpl_vars['para']->value)) {?> 
    <?php if (isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
        <form name="messageform" action="redacta.php?accion=enviar&para=<?php echo $_smarty_tpl->tpl_vars['para']->value;?>
&cveperiodo=<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
" method="POST" id="messageform">
            <div class="small-10 columns">
                <label style="color:black;"> Asunto*</label>
                <input class="span12" type="text" name="introduccion" id="subject" placeholder="Asunto" data-toggle="tooltip" title="Input Message Subject between 10 to 80" data-validation-required-message="Please enter subject" required value='<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['introduccion'];
}?>' <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>>
            </div>
            <div class="small-10 columns" style="margin-top:15px;">
                <label style="color:black;"> Contenido del mensaje*</label>
                <textarea class="form-control span12" name="descripcion" id="content" rows="10" cols="100" placeholder="Contenido del mensaje" data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" data-toggle="tooltip" title="Input Message Content between 50 to 500" required <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['descripcion'];
}?></textarea>                    </div>
            <div class="small-10 columns" style="margin-top:15px;">
                <label style="color:black;"> Fecha de Expiracion*</label>
                      <input style="width:200px;"TYPE="date"  class="form-control" id="exampleInputEmail3" name="expira" id="producto" require value='<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['expira'];
}?>' <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>>                      
            </div>
            <?php if (!isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
                <div class="small-6 columns" style="margin-top:15px;">
                    <input type="submit" value="Send" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Send the Message" id="_send" name="_send">&nbsp;&nbsp;
                    <input type="reset" value="Cancel" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Send the Message" id="_cancel" name="_cancel">
                    <input type="hidden" name="action" id="action">
                </div>
            <?php }?>
            <div class="small-6 columns" style="margin-top:15px;"></div>
            <div class="small-6 columns"></div>
        </form>
    <?php }
}
if (isset($_smarty_tpl->tpl_vars['accion']->value)) {?>
    <form name="messageform" action="redacta.php?accion=enviarI&para=<?php if (isset($_smarty_tpl->tpl_vars['grupo']->value)) {
echo $_smarty_tpl->tpl_vars['grupo']->value;
}?>&periodo=<?php if (isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {
echo $_smarty_tpl->tpl_vars['cveperiodo']->value;
}?>&receptor=<?php if (isset($_smarty_tpl->tpl_vars['receptor']->value)) {
echo $_smarty_tpl->tpl_vars['receptor']->value;
}?>" method="POST" id="messageform">
        <div class="small-10 columns">
            <label style="color:black;"> Asunto*</label>
            <input class="span12" type="text" name="introduccion" id="subject" placeholder="Asunto" data-toggle="tooltip" title="Input Message Subject between 10 to 80" data-validation-required-message="Please enter subject" required value='<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['introduccion'];
}?>' <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>>
        </div>
        <div class="small-10 columns" style="margin-top:15px;">
            <label style="color:black;"> Contenido del mensaje*</label>
            <textarea class="form-control span12" name="descripcion" id="content" rows="10" cols="100" placeholder="Contenido del mensaje" data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" data-toggle="tooltip" title="Input Message Content between 50 to 500" required <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['descripcion'];
}?></textarea>                    </div>
        <div class="small-10 columns" style="margin-top:15px;">
            <label style="color:black;"> Fecha de Expiracion*</label>
                  <input style="width:200px;"TYPE="date"  class="form-control" id="exampleInputEmail3" name="expira" id="producto" require value='<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['expira'];
}?>' <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>>                      
        </div>
        <div class="small-6 columns" style="margin-top:15px;">
            <input type="submit" value="Send" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Send the Message" id="_send" name="_send">&nbsp;&nbsp;
            <input type="reset" value="Cancel" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Send the Message" id="_cancel" name="_cancel">
            <input type="hidden" name="action" id="action">
        </div>
        <div class="small-6 columns" style="margin-top:15px;">
            
        </div>
         
        <div class="small-6 columns">
        </div>
    </form>
<?php } else { ?>
    <?php if (!isset($_smarty_tpl->tpl_vars['cveperiodo']->value)) {?>
        <div class="small-6 columns">
          <label>No se a especificado destinatario</label>
        </div>
    <?php }
}
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
