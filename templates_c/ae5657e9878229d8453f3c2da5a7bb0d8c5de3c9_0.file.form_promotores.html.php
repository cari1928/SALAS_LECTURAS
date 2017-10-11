<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-06 04:23:07
  from "/home/ubuntu/workspace/templates/admin/form_promotores.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d7052bc8df85_47398891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae5657e9878229d8453f3c2da5a7bb0d8c5de3c9' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/form_promotores.html',
      1 => 1507263785,
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
function content_59d7052bc8df85_47398891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
      <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
      
      <form method="post"
        action="promotor.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>update<?php } else { ?>insert<?php }?>">  

        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title">
              <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> 
                Actualizar Promotor - RFC: <?php echo $_smarty_tpl->tpl_vars['promotores']->value['cveusuario'];?>

              <?php } else { ?> 
                Nuevo Promotor 
              <?php }?>
            </h3>
          </div>
          
          <div class="panel-body">
            
            <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
              <input type="hidden" name="cveusuario" value="<?php echo $_smarty_tpl->tpl_vars['promotores']->value['cveusuario'];?>
">
            <?php }?>

            <div class="form-group">
              <label>Nombre Completo:</label>
              <input class="form-control" placeholder="Nombre y Apellidos" name="datos[nombre]"  required
              <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['promotores']->value['nombreUsuario'];?>
" <?php }?>>
            </div>

            <div class="form-group">
              <label>Especialidad:</label>
              <label id="l4" style="display:<?php if ($_smarty_tpl->tpl_vars['promotores']->value['cveespecialidad'] == 'O') {?>block<?php } else { ?>none<?php }?>">Carrera</label>
              <input id="r4" type="radio" class="btn btn-default" value='true' name="datos[especialidad]" style="display:<?php if ($_smarty_tpl->tpl_vars['promotores']->value['cveespecialidad'] == 'O') {?>block<?php } else { ?>none<?php }?>" onclick="otro()" checked>
              <div id="carrera" class="form-group" style="display:<?php if ($_smarty_tpl->tpl_vars['promotores']->value['cveespecialidad'] != 'O') {?>block<?php } else { ?>none<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['combito']->value;?>

              </div>
              
              <!--label|input display:inline -> texto y radio button en el mismo renglón-->
              <label id="l3" style="display:<?php if ($_smarty_tpl->tpl_vars['promotores']->value['cveespecialidad'] != 'O') {?>inline<?php } else { ?>none<?php }?>">Otro</label>
              <input id="r3" type="radio" value='false' name="datos[especialidad]" style="display:<?php if ($_smarty_tpl->tpl_vars['promotores']->value['cveespecialidad'] != 'O') {?>inline<?php } else { ?>none<?php }?>" onclick="otro()">
              
              <div id="especialidad" class="form-group" style="display:<?php if ($_smarty_tpl->tpl_vars['promotores']->value['cveespecialidad'] == 'O') {?>block<?php } else { ?>none<?php }?>">
                <label>¿Cual otro?</label>
                <input class="form-control" placeholder="Escriba Cual" name="datos[otro]"
                <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['promotores']->value['otro'];?>
" <?php }?>>
              </div>
            </div>

            <?php if (!isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
              <div class="form-group">
                <label>RFC: </label>
                <input class="form-control" placeholder="RFC" name="datos[usuario]" maxlength="13" required>
              </div>
            <?php }?>

            <div class="form-group">
              <label>Correo: </label>
              <input type="email" class="form-control" placeholder="Correo" 
              name="datos[correo]" maxlength="75" required
              <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['promotores']->value['correo'];?>
" <?php }?>>
            </div>

            <?php if (!isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
              <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" class="form-control" placeholder="Contraseña" 
                name="datos[contrasena]" required>
              </div>
              <div class="form-group">
                <label>Confirmar contraseña:</label>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar contraseña" name="datos[confcontrasena]" 
                id="producto" required>
              </div>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?>
              
              <div id='js' class="form-group">
                <label id="l1">Modificar contraseña</label>
                <input id="r1" type="radio" class="btn btn-default" value='true' name="datos[pass]" onclick="mostrar()">
                <label id ="l2" style="display:none">Mantener contraseña original</label>
                <input id="r2" type="radio"  class="btn btn-default" value='false' name="datos[pass]" onclick="mostrar()" checked style="display:none">
              </div>

              <div id='oculto' class="form-group" style="display:none">

                <div class="form-group">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]">
                </div>

                <div class="form-group">
                  <label>Nueva contraseña:</label>
                  <input type="password" class="form-control" 
                  placeholder="Nueva contraseña" name="datos[contrasenaN]">
                </div>

                <div class="form-group">
                  <label>Confirmar Nueva contraseña:</label>
                  <input type="password" class="form-control" placeholder="Confirmar nueva contraseña" name="datos[confcontrasenaN]">
                </div>

              </div>
            <?php }?>

          </div>
        </div>

        <div class="form-group" align="right">
          <button type="submit" class="btn btn-primary">
            <?php if (isset($_smarty_tpl->tpl_vars['promotores']->value)) {?> Actualizar <?php } else { ?> Guardar <?php }?>
          </button>
        </div>

    </form>

    </nav>
  </div>
</div>  

<?php echo '<script'; ?>
>
  var bandera = 0;
    function mostrar()
    {
      var test = document.getElementsByName('datos[pass]');
       if(test[0].checked == true) {
          document.getElementById('oculto').style.display="block";
          document.getElementById('r2').style.display="inline";
          document.getElementById('l2').style.display="inline";
          document.getElementById('r1').style.display="none";
          document.getElementById('l1').style.display="none";
        }
        if(test[1].checked == true) {
          document.getElementById('oculto').style.display="none";
          document.getElementById('r2').style.display="none";
          document.getElementById('l2').style.display="none";
          document.getElementById('r1').style.display="inline";
          document.getElementById('l1').style.display="inline";
        }
    }
    
    function otro(){
      var test = document.getElementsByName('datos[especialidad]');
      if(test[0].checked == false) {
        document.getElementById('carrera').style.display="none";
        document.getElementById('especialidad').style.display="block";
        document.getElementById('r3').style.display="none";
        document.getElementById('l3').style.display="none";
        document.getElementById('r4').style.display="inline";
        document.getElementById('l4').style.display="inline";
      }
      else{
        document.getElementById('carrera').style.display="block";
        document.getElementById('especialidad').style.display="none";
        document.getElementById('r3').style.display="inline";
        document.getElementById('l3').style.display="inline";
        document.getElementById('r4').style.display="none";
        document.getElementById('l4').style.display="none";
      }
    }
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
