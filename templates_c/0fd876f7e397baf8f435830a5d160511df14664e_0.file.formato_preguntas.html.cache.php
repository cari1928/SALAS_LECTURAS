<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-15 22:21:57
  from "/home/ubuntu/workspace/templates/admin/formato_preguntas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5943088567ecd9_55899246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd876f7e397baf8f435830a5d160511df14664e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/formato_preguntas.html',
      1 => 1497565315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5943088567ecd9_55899246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '154109520359430885661013_02087777';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/bootstrap/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../css/bootstrap/fileinput/js/fileinput.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<form action="formato_preguntas.php?accion=fileinput" method="post" enctype="multipart/form-data">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Subir formato de preguntas</h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
            <input id="file-1" type="file" class="file" multiple=true 
                data-preview-file-type="any" name="datos[archivo]">
        </div>
      </div>
    </div>
</form>
  
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
