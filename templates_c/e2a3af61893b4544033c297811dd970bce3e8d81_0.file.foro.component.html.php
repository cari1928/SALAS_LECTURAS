<?php
/* Smarty version 3.1.30-dev/53, created on 2017-07-20 01:14:04
  from "/home/ubuntu/workspace/templates/foro.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_597003dcddf914_78551988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a3af61893b4544033c297811dd970bce3e8d81' => 
    array (
      0 => '/home/ubuntu/workspace/templates/foro.component.html',
      1 => 1500513241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597003dcddf914_78551988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-12 col-md-12"> <div class="single-blog single-column"> <div class="post-thumb"> <a href="foro_libro.php"> <img src="Images/portadas/<?php echo $_smarty_tpl->tpl_vars['libro']->value['portada'];?>
" class="img-responsive" alt=""> </a> <div class="post-overlay"> <span class="uppercase"><a href="foro_libro.php"><small>Entrar</small></a></span> </div> </div> <div class="post-content overflow"> <h2 class="post-title bold"><a href="foro_libro.php"><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</a></h2> <h3 class="post-author"><a href="#">Escrito por <?php echo $_smarty_tpl->tpl_vars['libro']->value['autor'];?>
</a></h3> <p><?php echo $_smarty_tpl->tpl_vars['libro']->value['intro'];?>
</p> <a href="foro_libro.php" class="read-more">Ver más</a> </div> </div> </div><?php }
}
