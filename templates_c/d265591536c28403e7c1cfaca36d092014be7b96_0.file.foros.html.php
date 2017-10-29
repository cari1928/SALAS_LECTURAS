<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-29 22:43:16
  from "/home/ubuntu/workspace/templates/usuario/foro/foros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59f6598406f092_10176728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd265591536c28403e7c1cfaca36d092014be7b96' => 
    array (
      0 => '/home/ubuntu/workspace/templates/usuario/foro/foros.html',
      1 => 1506310088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:foro/foro_header.html' => 1,
    'file:../mensajes.html' => 1,
  ),
),false)) {
function content_59f6598406f092_10176728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:foro/foro_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:../mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

<?php echo '<script'; ?>
 type="text/javascript">
  var pages = [];
  
  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['fin']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['fin']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    pages[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] = '<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['libros']->value[$_prefixVariable1];?>
';
  <?php }
}
?>


  $('#pagination-demo').twbsPagination(
    { 
    totalPages: <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
,
    visiblePages: 5,
    next: 'Siguiente',
    prev: 'Anterior',
    onPageClick: function (event, page) 
    { 
      //fetch content and render here
      $('#page-content').html(pages[(page-1)]);
    } 
  } 
  );
<?php echo '</script'; ?>
>

<?php }
}
