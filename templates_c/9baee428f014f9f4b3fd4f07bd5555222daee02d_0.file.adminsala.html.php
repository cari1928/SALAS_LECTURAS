<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-12 15:37:39
  from "/home/ubuntu/workspace/templates/admin/adminsala.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59df8c43cdacb2_88399578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9baee428f014f9f4b3fd4f07bd5555222daee02d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/adminsala.html',
      1 => 1507679901,
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
function content_59df8c43cdacb2_88399578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (!isset($_smarty_tpl->tpl_vars['horas']->value)) {
if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
  <div class="page-header">
    <h1>Selección de Sala</h1>
  </div>
  
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>CLAVE</th>
        <th>UBICACION</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>CLAVE</th>
        <th>UBICACION</th>
      </tr>
    </tfoot>
  </table>
  
<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['cvesala']->value)) {?>
  <div class="page-header">
    <h1>Creación de su horario</h1>
    Seleccione 2 horas en total, pueden ser en el mismo día o en diferentes
  </div>
  <form method="post" action="grupos.php?accion=add_group&step=3">
    <table class="table">
      <tr>
        <td>LUNES</td>
        <td>MARTES</td>
        <td>MIÉRCOLES</td>
        <td>JUEVES</td>
        <td>VIERNES</td>
        <td>SÁBADO</td>
      </tr>
      <tr>
        <td>
          <?php if (isset($_smarty_tpl->tpl_vars['horas1']->value)) {?>
            <?php
$__section_cont_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cont']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = new Smarty_Variable(array());
if (true) {
for ($__section_cont_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] = 0; $__section_cont_0_iteration <= 2; $__section_cont_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']++){
?>
              <div class="form-group">
                <select name="datos[horas1_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null);?>
]" class="form-control">
                  <option value="-1">Seleccione una Hora</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horas1']->value, 'i', false, 'myId');
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_0_saved = $_smarty_tpl->tpl_vars['i'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cvehoras'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['hora_inicial'];?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value['hora_final'];?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </select>
              </div>
            <?php
}
}
if ($__section_cont_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = $__section_cont_0_saved;
}
?>
          <?php } else { ?>
            <div class="alert alert-warning" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Aviso:</span>
              No hay horas disponibles
            </div>
          <?php }?>
        </td>
        <td>
          <?php if (isset($_smarty_tpl->tpl_vars['horas2']->value)) {?>
            <?php
$__section_cont_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cont']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = new Smarty_Variable(array());
if (true) {
for ($__section_cont_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] = 0; $__section_cont_1_iteration <= 2; $__section_cont_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']++){
?>
              <div class="form-group">
                <select name="datos[horas2_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null);?>
]" class="form-control">
                  <option value="-1">Seleccione una Hora</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horas2']->value, 'i', false, 'myId');
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_1_saved = $_smarty_tpl->tpl_vars['i'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cvehoras'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['hora_inicial'];?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value['hora_final'];?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </select>
            </div>
            <?php
}
}
if ($__section_cont_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = $__section_cont_1_saved;
}
?>
          <?php } else { ?>
            <div class="alert alert-warning" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Aviso:</span>
              No hay horas disponibles
            </div>
          <?php }?>
        </td>
        <td>
          <?php if (isset($_smarty_tpl->tpl_vars['horas3']->value)) {?>
            <?php
$__section_cont_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cont']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = new Smarty_Variable(array());
if (true) {
for ($__section_cont_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] = 0; $__section_cont_2_iteration <= 2; $__section_cont_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']++){
?>
              <div class="form-group">
                <select name="datos[horas3_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null);?>
]" class="form-control">
                  <option value="-1">Seleccione una Hora</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horas3']->value, 'i', false, 'myId');
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_2_saved = $_smarty_tpl->tpl_vars['i'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cvehoras'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['hora_inicial'];?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value['hora_final'];?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </select>
            </div>
            <?php
}
}
if ($__section_cont_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = $__section_cont_2_saved;
}
?>
          <?php } else { ?>
            <div class="alert alert-warning" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Aviso:</span>
              No hay horas disponibles
            </div>
          <?php }?>
        </td>
        <td>
          <?php if (isset($_smarty_tpl->tpl_vars['horas4']->value)) {?>
            <?php
$__section_cont_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cont']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = new Smarty_Variable(array());
if (true) {
for ($__section_cont_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] = 0; $__section_cont_3_iteration <= 2; $__section_cont_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']++){
?>
              <div class="form-group">
                <select name="datos[horas4_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null);?>
]" class="form-control">
                  <option value="-1">Seleccione una Hora</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horas4']->value, 'i', false, 'myId');
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_3_saved = $_smarty_tpl->tpl_vars['i'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cvehoras'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['hora_inicial'];?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value['hora_final'];?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </select>
            </div>
            <?php
}
}
if ($__section_cont_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = $__section_cont_3_saved;
}
?>
          <?php } else { ?>
            <div class="alert alert-warning" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Aviso:</span>
              No hay horas disponibles
            </div>
          <?php }?>
        </td>
        <td>
          <?php if (isset($_smarty_tpl->tpl_vars['horas5']->value)) {?>
            <?php
$__section_cont_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cont']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = new Smarty_Variable(array());
if (true) {
for ($__section_cont_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] = 0; $__section_cont_4_iteration <= 2; $__section_cont_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']++){
?>
              <div class="form-group">
                <select name="datos[horas5_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null);?>
]" class="form-control">
                  <option value="-1">Seleccione una Hora</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horas5']->value, 'i', false, 'myId');
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_4_saved = $_smarty_tpl->tpl_vars['i'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cvehoras'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['hora_inicial'];?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value['hora_final'];?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </select>
            </div>
            <?php
}
}
if ($__section_cont_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = $__section_cont_4_saved;
}
?>
          <?php } else { ?>
            <div class="alert alert-warning" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Aviso:</span>
              No hay horas disponibles
            </div>
          <?php }?>
        </td>
        <td>
          <?php if (isset($_smarty_tpl->tpl_vars['horas6']->value)) {?>
            <?php
$__section_cont_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cont']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = new Smarty_Variable(array());
if (true) {
for ($__section_cont_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] = 0; $__section_cont_5_iteration <= 2; $__section_cont_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']++){
?>
              <div class="form-group">
                <select name="datos[horas6_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null);?>
]" class="form-control">
                  <option value="-1">Seleccione una Hora</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horas6']->value, 'i', false, 'myId');
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_5_saved = $_smarty_tpl->tpl_vars['i'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cvehoras'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['hora_inicial'];?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value['hora_final'];?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </select>
              </div>
            <?php
}
}
if ($__section_cont_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = $__section_cont_5_saved;
}
?>
          <?php } else { ?>
            <div class="alert alert-warning" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Aviso:</span>
              No hay horas disponibles
            </div>
          <?php }?>
        </td>
      </tr>
      <tr>
        <td colspan="6">
          <div class="form-group" align="right">
          </div>
        </td>
      </tr>
    </table>
    
    <input type="hidden" name="datos[cvesala]" value="<?php echo $_smarty_tpl->tpl_vars['cvesala']->value;?>
"/>
    
    <div class="form-group">
      <h3>Seleccione libro grupal:</h3>
      <?php echo $_smarty_tpl->tpl_vars['libros']->value;?>

    </div>
    
    
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['promodisponibles']->value)) {?>
  <div class="page-header">
    <h1>Selección de Promotor</h1>
  </div>
  
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>CLAVE</th>
        <th>PROMOTOR</th>
        <th>SELECCION</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>CLAVE</th>
        <th>PROMOTOR</th>
        <th>SELECCION</th>
      </tr>
    </tfoot>
  </table>
  
  <div class="form-group" align='right' style="margin-top: 25px">
    <input type="submit" value="Guardar" class="btn btn-primary btn-block"/>  
  </div>
    
  </form>
  
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
