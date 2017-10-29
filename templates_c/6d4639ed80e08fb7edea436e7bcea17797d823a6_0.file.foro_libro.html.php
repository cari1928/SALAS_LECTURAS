<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-29 22:41:53
  from "/home/ubuntu/workspace/templates/admin/foro/foro_libro.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59f6593155fdd5_36294682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d4639ed80e08fb7edea436e7bcea17797d823a6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/foro/foro_libro.html',
      1 => 1509316911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:foro/foro_header.html' => 1,
    'file:../../mensajes.html' => 1,
  ),
),false)) {
function content_59f6593155fdd5_36294682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:foro/foro_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>

<section id="page-breadcrumb">
  <div class="vertical-center sun">
    <div class="container">
      <div class="row">
        <div class="action">
          <div class="col-sm-12">
            <h1 class="title">Foro: <?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</h1>
          </div>                                                                                
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#page-breadcrumb-->

<section id="blog-details" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-7">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="single-blog blog-details two-column">
              
              <div class="post-thumb" align="center">
                <a href="#"><img src="../Images/portadas/<?php echo $_smarty_tpl->tpl_vars['libro']->value['portada'];?>
" class="img-responsive" alt=""></a>
              </div>
              
              <div class="post-content overflow">
                <h2 class="post-title bold"><a href="#"><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</a></h2>
                <h3 class="post-author"><a href="#">Escrito por: <?php echo $_smarty_tpl->tpl_vars['libro']->value['autor'];?>
</a></h3>
                <p align="justify"><?php echo $_smarty_tpl->tpl_vars['libro']->value['sinopsis'];?>
</p>
                <div class="post-bottom overflow">
                  <ul class="nav navbar-nav post-nav">
                    <li style="color:#337ab7"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['num_comentarios']->value;?>
 comentarios</li>
                  </ul>
                </div>
                
                <div class="blog-share">
                  <!-- <span class='st_facebook_hcount'></span>
                  <span class='st_twitter_hcount'></span>
                  <span class='st_linkedin_hcount'></span>
                  <span class='st_pinterest_hcount'></span>
                  <span class='st_email_hcount'></span> -->
                </div>
                
                <?php if (isset($_smarty_tpl->tpl_vars['rol']->value)) {?>
                  <div class="response-area">
                    <h2 class="bold">Déjanos conocer tu opinión</h2>
                    <form action="foro_libro.php?action=comment&info=<?php echo $_smarty_tpl->tpl_vars['libro']->value['cvelibro'];?>
" method="post">
                      <div class="form-group">
                        <textarea class="form-control" name="review" rows="5" placeholder="Máximo 1000 caracteres"></textarea>
                      </div>
                      <div class="form-group" align="right">
                        <input class="btn btn-primary" type="submit" value="Comentar"/>
                      </div>
                    </form>
                  </div>
                <?php } else { ?>
                  <div class="response-area">
                    <h2 class="bold">Si quieres dejar un comentario <a href="registrar.php">regístrate<a/> o <a href="login.php">ingresa aquí<a/></h2>
                  </div>
                <?php }?>
                
                <div class="response-area">
                  <?php if (isset($_smarty_tpl->tpl_vars['comentarios']->value)) {?>
                    <h2 class="bold">Comentarios</h2>
                    <ul class="media-list">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
$__foreach_comentario_0_saved = $_smarty_tpl->tpl_vars['comentario'];
?>
                        <li class="media">
                          <div class="post-comment">
                            <a class="pull-left" href="#">
                              <img class="media-object" src="../Images/fotos/<?php echo $_smarty_tpl->tpl_vars['comentario']->value['foto'];?>
" alt="">
                            </a>
                            <div class="media-body">
                              <span class="glyphicon glyphicon-user" aria-hidden="true" style="color:#337ab7"> Publicado por <?php echo $_smarty_tpl->tpl_vars['comentario']->value['nombre'];?>
</span>
                              <p><?php echo $_smarty_tpl->tpl_vars['comentario']->value['contenido'];?>
</p>
                              <ul class="nav navbar-nav post-nav">
                                <li><span class="glyphicon glyphicon-calendar" aria-hidden="true" style="color:#337ab7"> <?php echo $_smarty_tpl->tpl_vars['comentario']->value['fecha'];?>
</span></li>
                                <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true" style="color:#337ab7"> <a href="#">Responder</a></span></li>
                              </ul>
                            </div>
                          </div>
                          
                          <?php if (isset($_smarty_tpl->tpl_vars['comentario']->value['respuesta'])) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentario']->value['respuesta'], 'respuesta');
foreach ($_from as $_smarty_tpl->tpl_vars['respuesta']->value) {
$_smarty_tpl->tpl_vars['respuesta']->_loop = true;
$__foreach_respuesta_1_saved = $_smarty_tpl->tpl_vars['respuesta'];
?>
                              <div class="parrent">
                                <ul class="media-list">
                                  <li class="post-comment reply">
                                    <a class="pull-left" href="#">
                                      <img class="media-object" src="../Images/fotos/<?php echo $_smarty_tpl->tpl_vars['respuesta']->value['foto'];?>
" alt="">
                                    </a>
                                    <div class="media-body">
                                      <span class="glyphicon glyphicon-user" aria-hidden="true" style="color:#337ab7"> Comentario de <?php echo $_smarty_tpl->tpl_vars['respuesta']->value['nombre'];?>
</span>
                                      <p><?php echo $_smarty_tpl->tpl_vars['respuesta']->value['contenido'];?>
 </p>
                                      <ul class="nav navbar-nav post-nav">
                                        <li><span class="glyphicon glyphicon-calendar" aria-hidden="true" style="color:#337ab7"> <?php echo $_smarty_tpl->tpl_vars['respuesta']->value['fecha'];?>
</span></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            <?php
$_smarty_tpl->tpl_vars['respuesta'] = $__foreach_respuesta_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                          <?php }?>
                        </li>
                      <?php
$_smarty_tpl->tpl_vars['comentario'] = $__foreach_comentario_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                    </ul>         
                  <?php } else { ?>
                    <h2 class="bold">No hay comentarios</h2>
                  <?php }?>
                </div><!--/Response-area-->
              </div>
            </div>
          </div>
        </div>
      </div>
 
      <!--<div class="col-md-3 col-sm-5">-->
      <!--  <div class="sidebar blog-sidebar">-->
          
      <!--    <div class="sidebar-item  recent">-->
            
      <!--      <h3>Comments</h3>-->
      <!--      <div class="media">-->
      <!--        <div class="pull-left">-->
      <!--          <a href="#"><img src="../Images/foro/portfolio/project1.jpg" alt=""></a>-->
      <!--        </div>-->
      <!--        <div class="media-body">-->
      <!--          <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>-->
      <!--          <p>posted on  07 March 2014</p>-->
      <!--        </div>-->
      <!--      </div>-->
            
      <!--      <div class="media">-->
      <!--        <div class="pull-left">-->
      <!--          <a href="#"><img src="../Images/foro/portfolio/project2.jpg" alt=""></a>-->
      <!--        </div>-->
      <!--        <div class="media-body">-->
      <!--          <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>-->
      <!--          <p>posted on  07 March 2014</p>-->
      <!--        </div>-->
      <!--      </div>-->
            
      <!--      <div class="media">-->
      <!--        <div class="pull-left">-->
      <!--          <a href="#"><img src="../Images/foro/portfolio/project3.jpg" alt=""></a>-->
      <!--        </div>-->
      <!--        <div class="media-body">-->
      <!--          <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>-->
      <!--          <p>posted on  07 March 2014</p>-->
      <!--        </div>-->
      <!--      </div>-->
            
      <!--    </div>-->
          
      <!--    <div class="sidebar-item categories">-->
      <!--      <h3>Categories</h3>-->
      <!--      <ul class="nav navbar-stacked">-->
      <!--        <li><a href="#">Lorem ipsum<span class="pull-right">(1)</span></a></li>-->
      <!--        <li class="active"><a href="#">Dolor sit amet<span class="pull-right">(8)</span></a></li>-->
      <!--        <li><a href="#">Adipisicing elit<span class="pull-right">(4)</span></a></li>-->
      <!--        <li><a href="#">Sed do<span class="pull-right">(9)</span></a></li>-->
      <!--        <li><a href="#">Eiusmod<span class="pull-right">(3)</span></a></li>-->
      <!--        <li><a href="#">Mockup<span class="pull-right">(4)</span></a></li>-->
      <!--        <li><a href="#">Ut enim ad minim <span class="pull-right">(2)</span></a></li>-->
      <!--        <li><a href="#">Veniam, quis nostrud <span class="pull-right">(8)</span></a></li>-->
      <!--      </ul>-->
      <!--    </div>-->
          
      <!--    <div class="sidebar-item tag-cloud">-->
      <!--      <h3>Tag Cloud</h3>-->
      <!--      <ul class="nav nav-pills">-->
      <!--        <li><a href="#">Corporate</a></li>-->
      <!--        <li><a href="#">Joomla</a></li>-->
      <!--        <li><a href="#">Abstract</a></li>-->
      <!--        <li><a href="#">Creative</a></li>-->
      <!--        <li><a href="#">Business</a></li>-->
      <!--        <li><a href="#">Product</a></li>-->
      <!--      </ul>-->
      <!--    </div>-->
          
      <!--    <div class="sidebar-item popular">-->
      <!--      <h3>Latest Photos</h3>-->
      <!--      <ul class="gallery">-->
      <!--        <li><a href="#"><img src="../Images/foro/portfolio/popular1.jpg" alt=""></a></li>-->
      <!--        <li><a href="#"><img src="../Images/foro/portfolio/popular2.jpg" alt=""></a></li>-->
      <!--        <li><a href="#"><img src="../Images/foro/portfolio/popular3.jpg" alt=""></a></li>-->
      <!--        <li><a href="#"><img src="../Images/foro/portfolio/popular4.jpg" alt=""></a></li>-->
      <!--        <li><a href="#"><img src="../Images/foro/portfolio/popular5.jpg" alt=""></a></li>-->
      <!--        <li><a href="#"><img src="../Images/foro/portfolio/popular1.jpg" alt=""></a></li>-->
      <!--      </ul>-->
      <!--    </div>-->
            
      <!--  </div>-->
      <!--</div>-->
      
    </div>
  </div>
</section>
<!--/#blog-->

<?php }
}
