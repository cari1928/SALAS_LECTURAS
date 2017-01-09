<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 06:19:46
  from "/home/ubuntu/workspace/templates/promotor/form_vergrupos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58732b824dde75_39670934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84bbb910a46c7304c1a6938588123a1c134e5368' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/form_vergrupos.html',
      1 => 1483942698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58732b824dde75_39670934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '56029151658732b824b4fa2_63696241';
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
      <form action="grupos.php?accion=update" method="post">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Actualizar Grupo</h3>
          </div>
          <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['grupos']->value)) {?>
              <input type="hidden" name="datos[cveletra]" value="<?php echo $_smarty_tpl->tpl_vars['grupos']->value['cveletra'];?>
">
            <?php }?>
            <div class="form-group">
              <label> Nombre </label> 
              <input class="form-control" name="datos[nombre]" placeholder="Nombre del Grupo" maxlength="75" required
              <?php if (isset($_smarty_tpl->tpl_vars['grupos']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['grupos']->value['nombre'];?>
" <?php }?>>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
    </nav>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
