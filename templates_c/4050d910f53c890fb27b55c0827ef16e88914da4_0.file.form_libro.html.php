<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 17:45:37
  from "/home/ubuntu/workspace/templates/usuario/form_libro.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a05e5c139bfd5_54715731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4050d910f53c890fb27b55c0827ef16e88914da4' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/form_libro.html',
      1 => 1510335777,
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
function content_5a05e5c139bfd5_54715731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="page-header">
  <h2>Selección de Libros</h2>
</div>

<div class="container-fluid">
  <div class="main row">
      <nav class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-push-2">

      <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
      	<table id="example" class="display" cellspacing="0" width="100%">
      		<thead>
            <tr>
      				<th><center>AUTOR</center></th>
      				<th><center>TITULO</center></th>
      				<th><center>EDITORIAL</center></th>
      				<th><center>CANTIDAD</center></th>
      				<th width="50"><center>PORTADA</center></th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th><center>AUTOR</center></th>
      				<th><center>TITULO</center></th>
      				<th><center>EDITORIAL</center></th>
      				<th><center>CANTIDAD</center></th>
      				<th width="50"><center>PORTADA</center></th>
            </tr>
          </tfoot>
        </table>
        
        <?php echo '<script'; ?>
 type="text/javascript">
          $(document).ready(function() {
            $('#example').DataTable( {
              "ajax": "TextFiles/libros.txt",
              "columns": [
                { "data": "autor" },
                { "data": "titulo" },
                { "data": "editorial" },
                { "data": "cantidad" },
                { "img": "portada" }
              ],
              "columnDefs": [ {
        				"className": "dt-center", 
        				"targets": "_all"
        			}]
            } );
          } );
        <?php echo '</script'; ?>
>
      <?php }?>

    </nav>
  </div>
</div>

<!--Tabla de libros-->
<?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>
  <form action="grupo.php?accion=fileinput&info1=<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
" method="post" enctype="multipart/form-data">
    
    <div class="page-header">
      <h2>Listado de Libros</h2>
      Para subir un reporte, selecciona el libro en la columna REPORTE y después sube el archivo.
    </div>
    <table class='table table-striped'>
      <tr>
  			<th style="vertical-align:middle"><center>TITULO</center></th>
        <th style="vertical-align:middle"><center>REPORTE</center></th>
        <th style="vertical-align:middle"><center>OPCIONES</center></th>
        <th style="vertical-align:middle"><center>ESTADO LIBRO</center></th>
  		</tr>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->_loop = true;
$__foreach_libro_0_saved = $_smarty_tpl->tpl_vars['libro'];
?>
  			<tr>
  				<td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</center></td>
          <td style="vertical-align:middle"><center>
            <input id="r4" type="radio" class="btn btn-default" value='<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
' name="datos[reporte]">
          </center></td>
          <td style="vertical-align:middle"><center>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['libro']->value['reporte'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 1) {?>
              <a href="grupo.php?accion=down&info=2&info2=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
&info3=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"><img src="../Images/reporte.png" title="Descargar"></img></a>
              <!--<a href="grupo.php?accion=del&info=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
&info2=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"><img src="../Images/borrar.png" title="Eliminar"></img></a>-->
            <?php } else { ?>
              <img src="../Images/noexiste.png"></img>
            <?php }?>
          </center></td>
          <td style="vertical-align:middle"><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['estado'];?>
</center></td>
  			</tr>
  		<?php
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  	</table>
    
    <div class="page-header">
      <h2>Reporte</h2>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Subir reporte</h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <input id="file-1" type="file" class="file-loading" multiple=true data-preview-file-type="any" name="datos[archivo]">
        </div>
      </div>
    </div>
  
  </form>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
