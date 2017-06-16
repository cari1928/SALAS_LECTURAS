<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-15 23:05:56
  from "/home/ubuntu/workspace/templates/usuario/form_libro.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_594312d41a5ca7_87386248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4050d910f53c890fb27b55c0827ef16e88914da4' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/form_libro.html',
      1 => 1497563702,
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
function content_594312d41a5ca7_87386248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1899252550594312d4159a63_82161311';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
      <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
      
      <form action="grupo.php?accion=insert" method="post">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Seleccionar Libro</h3>
          </div>
          <div class="panel-body">
            <input type="hidden" name="datos[cvelectura]" value="<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
">
            <div class="form-group">
              <label>Libro: </label>
              <?php echo $_smarty_tpl->tpl_vars['cmb_libro']->value;?>

            </div>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </nav>
  </div>
</div>
<!--Tabla de libros-->


<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/bootstrap/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../css/bootstrap/fileinput/js/fileinput.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<form action="grupo.php?accion=fileinput&info1=<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Subir reporte</h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
        <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any" name="datos[archivo]">
    </div>
  </div>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>
      <div class="page-header">
        <h2>Lista de Libros</h2>
      </div>
      <table class='table table-striped'>
        <tr>
          <th><center>CLAVE</center></th>
    			<th><center>TITULO</center></th>
    			<th><center>REPORTE</center></th>
          <th><center>ESTADO</center></th>
    		</tr>
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->_loop = true;
$__foreach_libro_0_saved = $_smarty_tpl->tpl_vars['libro'];
?>
    			<tr>
    			  <td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
</center></td>
    				<td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</center></td>
            <td><center>
              <input id="r4" type="radio" class="btn btn-default" value='<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
' name="datos[reporte]">
            </center></td>
            <td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['estado'];?>
</center></td>
    			</tr>
    		<?php
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    	</table>
    <?php }?>
  </form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
