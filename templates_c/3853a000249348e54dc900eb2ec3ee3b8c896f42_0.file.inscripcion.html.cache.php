<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-05 20:09:54
  from "/home/ubuntu/workspace/templates/usuario/inscripcion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_586ea81270e8f8_23085962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3853a000249348e54dc900eb2ec3ee3b8c896f42' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/inscripcion.html',
      1 => 1483646964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_586ea81270e8f8_23085962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2011856483586ea8126dcfa6_08157192';
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
            <th>GRUPO</th>
            <th>NOMBRE SALA</th>
            <th>CLAVE SALA</th>
            <th>UBICACION</th>
            <th>PROMOTOR</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>GRUPO</th>
            <th>NOMBRE SALA</th>
            <th>CLAVE SALA</th>
            <th>UBICACION</th>
            <th>PROMOTOR</th>
        </tr>
    </tfoot>
  </table>
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable( {
          // "ajax": "<?php echo $_smarty_tpl->tpl_vars['datos']->value;?>
",
          "ajax": "inscripcion.txt",
          "columns": [
              { "data": "letra" },
              { "data": "nombre_grupo" },
              { "data": "cvesala" },
              { "data": "ubicacion" },
              { "data": "nombre_promotor" }
          ]
      } );
    } );
  <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
