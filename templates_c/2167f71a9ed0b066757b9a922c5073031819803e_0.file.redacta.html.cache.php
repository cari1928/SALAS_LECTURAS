<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-29 06:35:03
  from "/home/ubuntu/workspace/templates/promotor/redacta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59549f97e09085_79621666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2167f71a9ed0b066757b9a922c5073031819803e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/redacta.html',
      1 => 1498718092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59549f97e09085_79621666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '85280821759549f97d80eb5_79215294';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>jQuery Bootstrap FileStyle Demos</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
		<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../css/bootstrap/bootstrap-filestyle.js"><?php echo '</script'; ?>
>
	</head>

	<body>
    <div id="jquery-script-menu">
<div class="jquery-script-center">
<div class="jquery-script-ads"><?php echo '<script'; ?>
 type="text/javascript">
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
<?php echo '</script'; ?>
></div>
<div class="jquery-script-clear"></div>
</div>
</div>

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
            
            <!--<div class="container" style="margin-top: 150px;margin-bottom: 30px; background-color:#fafafa;">-->
    			<!--<div class="row">-->
    				<!--<div class="span12">-->
    					<!--<div class="row">-->
    						<!--<div class="col-xs-6">-->
    							<div class="form-group">
    								<label>Subir libro</label>
    								<input type="file" id="input12">
    							</div>
    						<!--</div>-->
    					<!--</div>-->
    				<!--</div>-->
    			<!--</div>-->
    		<!--</div>-->
            
            
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
}?>&receptor=<?php if (isset($_smarty_tpl->tpl_vars['receptor']->value)) {
echo $_smarty_tpl->tpl_vars['receptor']->value;
}?>" method="POST" id="messageform" enctype="multipart/form-data">
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
        
        
        <div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label>Remove text button</label>
					<input type="file" id="input12" name="example">
				</div>
			</div>
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
}?>

<?php echo '<script'; ?>
 type="text/javascript">

	$('#input12').filestyle({
		buttonText : ''
	});

	
<?php echo '</script'; ?>
>
</body><?php echo '<script'; ?>
 type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
