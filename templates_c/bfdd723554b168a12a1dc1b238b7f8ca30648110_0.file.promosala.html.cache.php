<?php
/* Smarty version 3.1.30-dev/53, created on 2016-10-11 09:27:06
  from "/var/www/html/SALAS_LECTURAS/templates/promotor/promosala.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57fcf6ba01ad31_83680707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfdd723554b168a12a1dc1b238b7f8ca30648110' => 
    array (
      0 => '/var/www/html/SALAS_LECTURAS/templates/promotor/promosala.html',
      1 => 1474558541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57fcf6ba01ad31_83680707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '159450612057fcf6b9ed5083_07213814';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<center>

       <form class="form-inline" action='promosala.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
  <label><?php echo $_smarty_tpl->tpl_vars['periodo']->value;?>
</label>        
  <br/>
  <br/>
  <div class="form-group">
    <label id ="r1">Sala: </label><input type="radio" name="datos[tipo]" onclick ="mostrar()" value="cvesala">
    <label id ="r2">Ubicacion: </label><input type="radio" name="datos[tipo]" onclick ="mostrar()" value="ubicacion"> 
    <label id ="r3">Horario: </label><input type="radio" name="datos[tipo]" onclick ="mostrar()" value="horario"> 
  </div>
<br/>
  <div class="form-group">
    
    <br/>
    <?php echo $_smarty_tpl->tpl_vars['combosala']->value;?>

    <br/>
    <?php echo $_smarty_tpl->tpl_vars['comboubicacion']->value;?>

    <br/>
    <?php echo $_smarty_tpl->tpl_vars['combohorario']->value;?>


  </div>
  <br/>
  <br/>
    <input type="hidden" name="datos[cveperiodo]" value="<?php echo $_smarty_tpl->tpl_vars['cveperiodo']->value;?>
">
    <button type="submit" class="btn btn-default" value='Registrar' name="Mostrar" <?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
 >Mostrar</button> <br/><br/>
    <?php echo $_smarty_tpl->tpl_vars['msjboton']->value;?>


  <?php echo $_smarty_tpl->tpl_vars['table']->value;?>

</form>
</center>
    <?php echo '<script'; ?>
>
    var bandera=0;
      function mostrar()
      {
        var test = document.getElementsByName('datos[tipo]');
         if(test[0].checked == true)
          {
            document.getElementById('cvesala').style.display="block";
            document.getElementById('horario').style.display="none";
            document.getElementById('ubicacion').style.display="none";
          }
          if(test[1].checked == true)
          {
           document.getElementById('cvesala').style.display="none";
            document.getElementById('horario').style.display="none";
            document.getElementById('ubicacion').style.display="block";
          }
          if(test[2].checked == true)
          {
            document.getElementById('cvesala').style.display="none";
            document.getElementById('horario').style.display="block";
            document.getElementById('ubicacion').style.display="none";
          }
        
      }
    <?php echo '</script'; ?>
>

    </body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
