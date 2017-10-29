<?php
/* Smarty version 3.1.30-dev/53, created on 2017-10-29 22:09:12
  from "/home/ubuntu/workspace/templates/foros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_59f65188f134d9_74477848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fa14b32221ce59baf251ec64b73f9d4d1552c10' => 
    array (
      0 => '/home/ubuntu/workspace/templates/foros.html',
      1 => 1509314900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:foro_header.html' => 1,
    'file:mensajes.html' => 1,
  ),
),false)) {
function content_59f65188f134d9_74477848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:foro_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php $_smarty_tpl->_subTemplateRender("file:mensajes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
