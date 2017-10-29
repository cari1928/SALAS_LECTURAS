<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-29 21:51:40
  from "/home/ubuntu/workspace/templates/prueba.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59f64d6cac76e4_41974878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47d0703c453855fc5aeb6ae785321ff47a5461e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/prueba.html',
      1 => 1509313898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:foro_header.html' => 1,
    'file:mensajes.html' => 1,
  ),
),false)) {
function content_59f64d6cac76e4_41974878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '104021000159f64d6cab35e2_40798956';
$_smarty_tpl->_subTemplateRender("file:foro_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<section id="blog" class="padding-top">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 col-sm-9">
        <div class="row">
          <div id="page-content" class="page-content"></div>
        </div>
        
        <!--pages-->
        <div class="blog-pagination">
          <ul id="pagination-demo" class="pagination-lg"></ul>
        </div>
      </div>

      <div class="col-sm-12 col-md-12">
        <div class="single-blog single-column">
          <div class="col-sm-6 col-md-6" align="center">
            <a href="foro_libro.php?action=show&info=libro_cvelibro">
              <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
Images/portadas/1.jpg"/>
            </a>
            <div class="post-overlay">
              <span class="uppercase">
                <a href="foro_libro.php?action=show&info=libro_cvelibro">
                  <small>
                    Entrar
                  </small>
                </a>
              </span>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <h2 class="post-title bold">
              <a href="foro_libro.php?action=show&info=libro_cvelibro">
                Libro_titulo
              </a>
            </h2>
            <h3 class="post-author">
              <a href="#">
                Escrito por libro_autor
              </a>
            </h3>
            <p>
              Libro_intro
            </p>
            <a class="read-more" href="foro_libro.php?action=show&info=libro_cvelibro">
              Ver más
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php }
}
