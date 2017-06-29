<?php
/* Smarty version 3.1.30-dev/53, created on 2017-06-28 15:20:06
  from "/home/ubuntu/workspace/templates/select.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5953c926c88ca9_76222820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c44592d62b9a3d8b0b4f6c7ba78f5ea0a4581eab' => 
    array (
      0 => '/home/ubuntu/workspace/templates/select.component.html',
      1 => 1498662878,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5953c926c88ca9_76222820 (Smarty_Internal_Template $_smarty_tpl) {
?>
      
      <select class="form-control" name="datos[cveestado]"  onchange="location = this.value" >
        <option value="-1">Selecciona una opción</option>
                        <option value="grupo.php?accion=estado&estado=1&info=24&info2=22222222&info3=14" >En Espera</option>
                                <option value="grupo.php?accion=estado&estado=2&info=24&info2=22222222&info3=14"  selected >En Proceso</option>
                                <option value="grupo.php?accion=estado&estado=3&info=24&info2=22222222&info3=14" >Terminado</option>
                                <option value="grupo.php?accion=estado&estado=4&info=24&info2=22222222&info3=14" >No Terminado</option>
                    </select>
      2
      4<?php }
}
