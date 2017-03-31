<?php
/* Smarty version 3.1.30-dev/53, created on 2017-03-31 06:01:37
  from "/home/ubuntu/workspace/templates/usuario/inscripcion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58ddf0c153da92_15165324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3853a000249348e54dc900eb2ec3ee3b8c896f42' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/inscripcion.html',
      1 => 1485078056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58ddf0c153da92_15165324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '62534713058ddf0c150d513_85139666';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span></button>
	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
  <div class="page-header">
    <h1>Selección de Sala</h1>
  </div>
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th><center>GRUPO</center></th>
        <th><center>NOMBRE SALA</center></th>
        <th><center>CLAVE SALA</center></th>
        <th><center>UBICACION</center></th>
        <th><center>PROMOTOR</center></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th><center>GRUPO</center></th>
        <th><center>NOMBRE SALA</center></th>
        <th><center>CLAVE SALA</center></th>
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
              { "data": "cvesala" },
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
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
