<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-11 16:40:32
  from "/home/ubuntu/workspace/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59de4980c11a51_85893091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f1c52414f3b0ea81b7614456e228cb8138b09e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/index.html',
      1 => 1499722672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:mensajes.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59de4980c11a51_85893091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '28749093759de4980b0c125_08500752';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->_subTemplateRender("file:mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <center><h1>SALAS LECTURA</h1></center>
  <div class="wrapper"> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
 </div>
  
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
