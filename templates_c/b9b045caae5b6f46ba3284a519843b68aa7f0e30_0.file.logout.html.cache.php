<?php
/* Smarty version 3.1.30-dev/53, created on 2017-03-22 19:42:26
  from "/home/ubuntu/workspace/templates/logout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58d2d3a2d82f78_74872985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9b045caae5b6f46ba3284a519843b68aa7f0e30' => 
    array (
      0 => '/home/ubuntu/workspace/templates/logout.html',
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
function content_58d2d3a2d82f78_74872985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '182168631458d2d3a2d6cfd6_43377946';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center><h1>Sesión finalizada</h1></center>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
