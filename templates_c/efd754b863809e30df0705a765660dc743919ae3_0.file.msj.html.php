<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-04 03:03:47
  from "/home/ubuntu/workspace/templates/usuario/msj.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d44f93119204_22783220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd754b863809e30df0705a765660dc743919ae3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/msj.html',
      1 => 1501193696,
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
function content_59d44f93119204_22783220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['mensajes']->value)) {?>
  <div class="page-header">
    <h3>Mensajes</h3>
  </div>

  <table class='table table-striped display' cellspacing="0" width="100%">
    
		<tr class='info'>    
      <th width="500px"><center>ASUNTO</center></th>
      <th><center>TIPO</center></th>
      <th><center>FECHA</center></th>
      <th><center>EXPIRA</center></th>
      <th><center>LEER</center></th>
    </tr>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mensajes']->value, 'msj');
foreach ($_from as $_smarty_tpl->tpl_vars['msj']->value) {
$_smarty_tpl->tpl_vars['msj']->_loop = true;
$__foreach_msj_0_saved = $_smarty_tpl->tpl_vars['msj'];
?>
      <tr>
        <td><center><?php echo $_smarty_tpl->tpl_vars['msj']->value['introduccion'];?>
</center></td>
        <td><center><?php echo $_smarty_tpl->tpl_vars['msj']->value['descripcion'];?>
</center></td>
        <td><center><?php echo $_smarty_tpl->tpl_vars['msj']->value['fecha'];?>
</center></td>
        <td><center><?php echo $_smarty_tpl->tpl_vars['msj']->value['expira'];?>
</center></td>
        <td><center><a href="msj.php?accion=leer&info=<?php echo $_smarty_tpl->tpl_vars['msj']->value['cvemsj'];?>
">
          <img src="../Images/lupa.png">
        </a></center></td>
      </tr>
    <?php
$_smarty_tpl->tpl_vars['msj'] = $__foreach_msj_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
	</table>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
  <div class="container-fluid">
    <div class="main row">
      <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
        <form>
          
          <div class="panel panel-default">
            
            <div class="panel-heading">
              <h3 class="panel-title">Contenido del Aviso</h3>
            </div>
            
            <div class="panel-body">
              
              <div class="small-10 columns form-group">
                <label>Asunto</label>
                <input class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>value='<?php echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['introduccion'];?>
' readonly<?php }?>>
              </div>
              
              <div class="small-10 columns form-group">
                <label>Contenido del mensaje</label>
                <textarea class="form-control" rows="10" cols="100" 
                  <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>readonly<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['descripcion'];
}?>
                </textarea>                    
              </div>
              
              <div class="small-10 columns form-group">
                <label>Fecha de Expiracion</label>
                <input type="date" class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>value='<?php echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['expira'];?>
' readonly<?php }?>>
              </div>
              
              <!--<div class="small-6 columns" style="margin-top:15px;"></div>-->
              <!--<div class="small-6 columns"></div>-->
              
              <?php if (isset($_smarty_tpl->tpl_vars['archivo']->value)) {?>
                <div class="form-group" align="center">
                  <a style="text-decoration:none; color:black; padding-right:10px" 
                    href="<?php if (!isset($_smarty_tpl->tpl_vars['eliminado']->value)) {?>msj.php?accion=archivo&info=<?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>
&info2=<?php echo $_smarty_tpl->tpl_vars['mensaje']->value[0]['cveletra'];
} else { ?>#<?php }?>">
                    <img src="../Images/docs.png"> <?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>

                  </a>
                </div>
              <?php }?>
              
            </div>
            
          </div>
          
        </form>
      </nav>
    </div>
  </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
