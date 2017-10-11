<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-08 23:51:18
  from "/home/ubuntu/workspace/templates/admin/form_periodos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59dab9f62651a4_90069111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abb8f66b9684d42ebf3402120ab44fe7826bd03d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_periodos.html',
      1 => 1501267216,
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
function content_59dab9f62651a4_90069111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">

      <form action="periodos.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?>update<?php } else { ?>insert<?php }?>" method="post">  
        
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?>Actualizar Periodo<?php } else { ?>Nuevo Periodo<?php }?></h3>
          </div>
          
          <div class="panel-body">
            
            <?php if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?>
              <input type="hidden" name="cveperiodo" value="<?php echo $_smarty_tpl->tpl_vars['periodos']->value['cveperiodo'];?>
">
            <?php }?>
            
            <div class="form-group">
              <label>Fecha Inicio:</label>
              <input type="date" class="form-control" name="datos[fechaInicio]" required
                <?php if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['periodos']->value['fechainicio'];?>
" <?php }?>>
            </div>
            
            <div class="form-group">
              <label>Fecha Final:</label>
              <input type="date" class="form-control" name="datos[fechaFinal]" required
                <?php if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['periodos']->value['fechafinal'];?>
" <?php }?>>
            </div>

            <div class="form-group" align="right">
              <button type="submit" class="btn btn-primary"><?php if (isset($_smarty_tpl->tpl_vars['periodos']->value)) {?>Actualizar<?php } else { ?>Guardar<?php }?></button>
            </div>
            
          </div>
        </div>
        
    </form>
    </nav>
  </div>
</div>  

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
