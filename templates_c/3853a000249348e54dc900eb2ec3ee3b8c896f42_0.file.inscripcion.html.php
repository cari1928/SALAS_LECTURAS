<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-12 14:24:50
  from "/home/ubuntu/workspace/templates/usuario/inscripcion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59df7b328a3863_92501616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3853a000249348e54dc900eb2ec3ee3b8c896f42' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/inscripcion.html',
      1 => 1506907101,
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
function content_59df7b328a3863_92501616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
  <div class="page-header">
    <h1>Selección de Sala</h1>
  </div>
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th><center>GRUPO</center></th>
        <th><center>NOMBRE SALA</center></th>
        <th><center>UBICACION</center></th>
        <th><center>PROMOTOR</center></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th><center>GRUPO</center></th>
        <th><center>NOMBRE SALA</center></th>
        <th><center>UBICACION</center></th>
        <th><center>PROMOTOR</center></th>
      </tr>
    </tfoot>
  </table>
  
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable( {
          "ajax": "TextFiles/inscripcion.txt",
          "columns": [
              { "data": "letra" },
              { "data": "nombre_grupo" },
              { "data": "ubicacion" },
              { "data": "nombre_promotor" }
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
