<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-12 15:37:52
  from "/home/ubuntu/workspace/templates/admin/form_salas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59df8c50b55cd1_08309806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11bcc92834e64ce7bb932b2881a680792df1a133' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_salas.html',
      1 => 1507744276,
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
function content_59df8c50b55cd1_08309806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '34686296059df8c50af0ae5_73176715';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>
      <form action="salas.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?>update<?php } else { ?>insert<?php }?>" method="post">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> Actualizar<?php } else { ?> Nueva<?php }?> Sala
            </h3>
          </div>
          <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?>
              <input type="hidden" name="datos[cvesala]" value="<?php echo $_smarty_tpl->tpl_vars['salas']->value['cvesala'];?>
">
            <?php }?>
            <div class="form-group">
              <label>Ubicación:</label>
              <input class="form-control" placeholder="Ingrese la ubicación de la Sala" name="datos[ubicacion]" required
                <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['salas']->value['ubicacion'];?>
" <?php }?>>
            </div>
            <div class="form-group">
              <label>Estado:</label>
              <select class="form-control" name="datos[disponible]">
                <option <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['salas']->value['disponible'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 'f') {?> selected <?php }?> <?php }?> value="f">No Disponible</option>
                <option <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['salas']->value['disponible'];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 't') {?> selected <?php }?> <?php }?> value="t">Disponible</option>
              </select>
            </div>
          </div>
        </div>
        <div align="right">
          <button type="submit" class="btn btn-primary">
            <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> Actualizar <?php } else { ?> Guardar <?php }?>
          </button>
        </div>
      </form>
    </nav>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
