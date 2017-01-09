<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 07:34:29
  from "/home/ubuntu/workspace/templates/admin/form_libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58733d05ebcd15_31008623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702a1d01550a91854d2b317306f9512a53af8c98' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_libros.html',
      1 => 1483939450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:../number_style.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58733d05ebcd15_31008623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '34749530158733d05e711b7_02575996';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:../number_style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
    <div class="main row">
      <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
        <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
          	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissible" role="alert">
          	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          	  <strong>¡Aviso!</strong> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

          	</div>
         <?php }?>
        <form action="libros.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>update<?php } else { ?>insert<?php }?>" method="post">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> Actualizar Libro
                <?php } else { ?> Nuevo Libro <?php }?>
              </h3>
            </div>
            <div class="panel-body">
              <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?>
                <input type="hidden" name="cvelibro" value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['cvelibro'];?>
">
              <?php }?>
              <div class="form-group">
                <label> Título </label> 
                <input class="form-control" name="titulo" placeholder="Título del Libro" maxlength="100" required
                <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['titulo'];?>
" <?php }?>>
              </div>
              <div class="form-group">
                <label> Autor </label>
                <input class="form-control" name="autor" placeholder="Nombre del Autor" maxlength="75" required
                <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['autor'];?>
" <?php }?>>
              </div>
              <div class="form-group">
                <label> Editorial </label> 
                <input class="form-control" name="editorial" placeholder="Editorial del Libro" maxlength="255" required
                <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['editorial'];?>
" <?php }?>>
              </div>
              <div class="form-group">
                <label> Precio </label> 
                <input type="number" class="form-control" name="precio" placeholder="Precio del Libro" min="0" max="999999999999999" required
                <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['libros']->value['precio'];?>
" <?php }?>>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
              <?php if (isset($_smarty_tpl->tpl_vars['libros']->value)) {?> Actualizar 
              <?php } else { ?> Guardar <?php }?>
          </button>
        </form>
      </nav>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
