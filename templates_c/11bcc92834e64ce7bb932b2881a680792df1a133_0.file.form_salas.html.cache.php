<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-04 20:21:02
  from "/home/ubuntu/workspace/templates/admin/form_salas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_586d592eab1bc1_82821787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11bcc92834e64ce7bb932b2881a680792df1a133' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_salas.html',
      1 => 1483561207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_586d592eab1bc1_82821787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1216761498586d592ea76cd5_20223301';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
   
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
      <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> 
        <form action="salas.php?accion=update" method="post">  
      <?php } else { ?> 
        <form action="salas.php?accion=insert" method="post">
      <?php }?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> Actualizar Sala
            <?php } else { ?> Nueva Sala <?php }?>
          </h3>
        </div>
        <div class="panel-body">
          <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?>
            <input type="hidden" name="cvesala" value="<?php echo $_smarty_tpl->tpl_vars['salas']->value['cvesala'];?>
">
          <?php }?>
          <div class="form-group">
            <label>Clave:</label>
            <input class="form-control" placeholder="Clave de la Sala" name="datos[cvesala]" maxlength="3" required
            <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['salas']->value['cvesala'];?>
" readonly <?php }?>>
          </div>
          <div class="form-group">
            <label>Ubicacion:</label>
            <input class="form-control" placeholder="Ubicacion de la Sala" name="datos[ubicacion]" required
            <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['salas']->value['ubicacion'];?>
" <?php }?>>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">
        <?php if (isset($_smarty_tpl->tpl_vars['salas']->value)) {?> Actualizar 
        <?php } else { ?> Guardar <?php }?>
      </button>
    </nav>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
