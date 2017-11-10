<?php
/* Smarty version 3.1.30-dev/53, created on 2017-11-10 00:34:05
  from "/home/ubuntu/workspace/templates/logout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5a04f3fd91ab22_74946861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9b045caae5b6f46ba3284a519843b68aa7f0e30' => 
    array (
      0 => '/home/ubuntu/workspace/templates/logout.html',
      1 => 1499629815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a04f3fd91ab22_74946861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8419943285a04f3fd90aec7_32457520';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <center><h1>Sesión finalizada</h1></center>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
