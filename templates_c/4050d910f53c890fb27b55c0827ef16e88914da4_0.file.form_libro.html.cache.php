<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 08:23:10
  from "/home/ubuntu/workspace/templates/usuario/form_libro.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5873486e23e608_57450752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4050d910f53c890fb27b55c0827ef16e88914da4' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/form_libro.html',
      1 => 1483950188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5873486e23e608_57450752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6945476315873486e204533_39010801';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
      	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
      	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      	    <span aria-hidden="true">&times;</span></button>
      	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

      	</div>
      <?php }?>
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
<!--Poner tabla de libros aquí!!-->
    <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>
      <div class="page-header">
        <h2>Lista de Libros</h2>
      </div>
      <table class='table table-striped'>
        <tr>
    			<th><center>TITULO</center></th>
    			<th><center>AUTOR</center></th>
          <th><center>EDITORIAL</center></th>
    		</tr>
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->_loop = true;
$__foreach_libro_0_saved = $_smarty_tpl->tpl_vars['libro'];
?>
    			<tr>
    				<td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</center></td>
            <td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['autor'];?>
</center></td>
            <td><center><?php echo $_smarty_tpl->tpl_vars['libro']->value['editorial'];?>
</center></td>
    			</tr>
    		<?php
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    	</table>
    <?php }
$_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
