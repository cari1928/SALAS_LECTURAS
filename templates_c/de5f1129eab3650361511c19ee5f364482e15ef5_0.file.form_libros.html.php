<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-11 01:40:53
  from "/home/ubuntu/workspace/templates/promotor/form_libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59dd76a51af4f5_26735469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de5f1129eab3650361511c19ee5f364482e15ef5' => 
    array (
      0 => '/home/ubuntu/workspace/templates/promotor/form_libros.html',
      1 => 1507686050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:../number_style.html' => 1,
    'file:../mensajes.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59dd76a51af4f5_26735469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:../number_style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
      <form class="form form-vertical" method="post" enctype="multipart/form-data" 
        action="libros.php?accion=save_book&info=<?php echo $_smarty_tpl->tpl_vars['cvelectura']->value;?>
&info2=<?php echo $_smarty_tpl->tpl_vars['nocontrol']->value;?>
&info3=<?php echo $_smarty_tpl->tpl_vars['grupo']->value;?>
" novalidate>
        
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title">
               Nuevo Libro
            </h3>
          </div>

          <div class="panel-body">
            
            <div class="row">
              
              
              <div class="col-sm-12">
                <div class="row">
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Título <span class="kv-reqd" style="color:red">*</span></label> 
                      <input class="form-control" name="titulo" placeholder="Título del Libro" maxlength="255" required>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Autor <span class="kv-reqd" style="color:red">*</span></label>
                      <input class="form-control" name="autor" placeholder="Nombre del Autor" maxlength="75" required>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Editorial <span class="kv-reqd" style="color:red">*</span></label> 
                      <input class="form-control" name="editorial" placeholder="Editorial del Libro" maxlength="25" required>
                    </div>
                  </div>
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label> Sinopsis <span class="kv-reqd" style="color:red">*</span></label> 
                      <textarea class="form-control" name="sinopsis" required rows="8" 
                        placeholder="Escriba la sinopsis del libro..." style="text-align:left; resize:none"
                        cols="20"></textarea>
                    </div>
                  </div>
                  
                </div> <!--end row-->
                
                <hr/>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                
              </div><!-- end col-sm-8 -->
            </div> <!--end row-->
          </div> <!-- end-panel-body -->
        </div> <!-- end-panel-panel-default -->
      </form>
      
    </nav>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
