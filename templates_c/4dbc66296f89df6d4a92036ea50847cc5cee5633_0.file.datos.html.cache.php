<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-05 02:40:26
  from "/home/ubuntu/workspace/templates/usuario/datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d59b9a29f483_29996167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dbc66296f89df6d4a92036ea50847cc5cee5633' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/datos.html',
      1 => 1499047600,
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
function content_59d59b9a29f483_29996167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '173994675059d59b9a23f785_51871872';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container-fluid">
  <div class="main row">
    <nav class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-3">
      
      <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
        <form action="datos.php?accion=update" method="post">  
        
            <div class="panel panel-default">
              
              <div class="panel-heading">
                <h3 class="panel-title">Actualizar Alumno - Número de Control: <?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
</h3>
              </div>
              
              <div class="panel-body">
                <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?><input type="hidden" name="cveusuario" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['cveusuario'];?>
"><?php }?>
                
                <div class="form-group">
                  <label>Nombre Completo:</label>
                  <input class="form-control" placeholder="Nombre y Apellidos" name="datos[nombre]"  required
                    <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombreUsuario'];?>
" <?php }?>>
                </div>
                
                <div class="form-group">
                  <label>Especialidad:</label>
                  <label id="l4" style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] == 'O') {?>block<?php } else { ?>none<?php }?>">Carrera</label>
                  <input id="r4" type="radio" class="btn btn-default" value='true' name="datos[especialidad]" 
                    style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] == 'O') {?>block<?php } else { ?>none<?php }?>" onclick="otro()">
                  
                  <div id="carrera" class="form-group" 
                    style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] != 'O') {?>block<?php } else { ?>none<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['combo']->value;?>

                  </div>
                  
                  <label id="l3" style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] != 'O') {?>inline<?php } else { ?>none<?php }?>">Otro</label>
                  <input id="r3" type="radio" value='false' name="datos[especialidad]" 
                    style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] != 'O') {?>inline<?php } else { ?>none<?php }?>" onclick="otro()">
                  
                  <div id="especialidad" class="form-group" style="display:<?php if ($_smarty_tpl->tpl_vars['alumno']->value['cveespecialidad'] == 'O') {?>block<?php } else { ?>none<?php }?>">
                    <label>¿Cual otro?</label>
                    <input class="form-control" placeholder="Escriba Cual" name="datos[otro]"
                    <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['otro'];?>
" <?php }?>>
                  </div>
                  
                </div>
                
                <?php if (!isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
                  <div class="form-group">
                    <label>RFC: </label>
                    <input class="form-control" placeholder="RFC" name="datos[usuario]" maxlength="13" required>
                  </div>
                <?php }?>
                
                <div class="form-group">
                  <label>Correo: </label>
                  <input type="email" class="form-control" placeholder="Correo" name="datos[correo]" maxlength="75" required
                  <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['correo'];?>
" <?php }?>>
                </div>
                
                <?php if (!isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
                  <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]" required>
                  </div>
                  
                  <div class="form-group">
                    <label>Confirmar contraseña:</label>
                    <input type="password" class="form-control" placeholder="Confirmar contraseña" 
                      name="datos[confcontrasena]" required>
                  </div>
                <?php }?>
                
                <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?>
                  <div id='js' class="form-group">
                    <label id="l1">Modificar contraseña</label>
                    <input id="r1" type="radio" class="btn btn-default" value='true' name="datos[pass]" onclick="mostrar()">
                    <label id ="l2" style="display:none">Mantener contraseña original</label>
                    <input id="r2" type="radio" class="btn btn-default" value='false' name="datos[pass]" 
                      onclick="mostrar()" checked style="display:none">
                  </div>
                  
                  <div id='oculto' class="form-group" style="display:none">
                    
                    <div class="form-group">
                      <label>Contraseña:</label>
                      <input type="password" class="form-control" placeholder="Contraseña" name="datos[contrasena]">
                    </div>
                    
                    <div class="form-group">
                      <label>Nueva contraseña:</label>
                      <input type="password" class="form-control" placeholder="Nueva contraseña" name="datos[contrasenaN]">
                    </div>
                    
                    <div class="form-group">
                      <label>Confirmar Nueva contraseña:</label>
                      <input type="password" class="form-control" placeholder="Confirmar nueva contraseña" 
                        name="datos[confcontrasenaN]">
                    </div>
                    
                  </div>
                <?php }?>
                
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary">
              <?php if (isset($_smarty_tpl->tpl_vars['alumno']->value)) {?> Actualizar 
              <?php } else { ?> Guardar <?php }?>
            </button>
            
        </form>
      <?php }?>
      
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
