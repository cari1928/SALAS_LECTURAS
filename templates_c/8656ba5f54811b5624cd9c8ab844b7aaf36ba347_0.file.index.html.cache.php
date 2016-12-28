<?php
/* Smarty version 3.1.30-dev/53, created on 2016-12-27 16:09:02
  from "/home/ubuntu/workspace/templates/admin/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5862921e9958b8_01694382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8656ba5f54811b5624cd9c8ab844b7aaf36ba347' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/index.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5862921e9958b8_01694382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7194554575862921e981f58_69168508';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<div>
  <table>
    <tr>
      <th>
        <a href="periodos.php">
          Periodos
        </a>
      </th>
    </tr>
    <tr>
      <th>
        <a href="salas.php">
          Salas
        </a>
      </th>
    </tr>
    <tr>
      <th>
        <a href="promotor.php">
          Promotores
        </a>
      </th>
    </tr>
    <tr>
      <th>
        <a href="alumnos.php">
          Alumnos
        </a>
      </th>
    </tr>
    <tr>
      <th>
        <a href="historial.php">
          Historial
        </a>
      </th>
    </tr>
    <tr>
      <th>
        <a href="libros.php">
          Libros
        </a>
      </th>
    </tr>
  </table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
