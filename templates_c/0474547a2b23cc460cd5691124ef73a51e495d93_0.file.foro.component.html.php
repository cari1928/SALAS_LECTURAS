<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-05 01:30:22
  from "/home/ubuntu/workspace/templates/foro.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59d58b2e2105a7_96638661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0474547a2b23cc460cd5691124ef73a51e495d93' => 
    array (
      0 => '/home/ubuntu/workspace/templates/foro.component.html',
      1 => 1506310812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d58b2e2105a7_96638661 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-12 col-md-12"> <div class="single-blog single-column"> <div class="post-thumb"> <a href="foro_libro.php?action=show&info=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"> <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
Images/portadas/<?php echo $_smarty_tpl->tpl_vars['libro']->value['portada'];?>
"> </img> </a> <div class="post-overlay"> <span class="uppercase"> <a href="foro_libro.php?action=show&info=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"> <small> Entrar </small> </a> </span> </div> </div> <div class="post-content overflow"> <h2 class="post-title bold"> <a href="foro_libro.php?action=show&info=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"> <?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
 </a> </h2> <h3 class="post-author"> <a href="#"> Escrito por <?php echo $_smarty_tpl->tpl_vars['libro']->value['autor'];?>
 </a> </h3> <p> <?php echo $_smarty_tpl->tpl_vars['libro']->value['intro'];?>
 </p> <a class="read-more" href="foro_libro.php?action=show&info=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
"> Ver más </a> </div> </div> </div><?php }
}
