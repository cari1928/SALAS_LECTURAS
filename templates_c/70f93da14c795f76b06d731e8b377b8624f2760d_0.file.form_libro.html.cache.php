<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 07:03:40
  from "/home/ubuntu/workspace/templates/promotor/form_libro.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_587335cc457fa4_78093871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70f93da14c795f76b06d731e8b377b8624f2760d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/form_libro.html',
      1 => 1483945384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_587335cc457fa4_78093871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '134368149587335cc444ee4_11538866';
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
