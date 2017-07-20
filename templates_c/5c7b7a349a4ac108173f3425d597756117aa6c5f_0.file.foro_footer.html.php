<?php
/* Smarty version 3.1.30-dev/53, created on 2017-07-20 01:06:51
  from "/home/ubuntu/workspace/templates/foro_footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5970022bda9cb4_55928524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7b7a349a4ac108173f3425d597756117aa6c5f' => 
    array (
      0 => '/home/ubuntu/workspace/templates/foro_footer.html',
      1 => 1499722966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970022bda9cb4_55928524 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <footer id="footer">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-12 text-center bottom-separator">
          <img src="Images/foro/home/under.png" class="img-responsive inline" alt="">
        </div>
        
        <div class="col-md-4 col-sm-6">
          <div class="testimonial bottom">
            <h2>Testimonial</h2>
            
            <div class="media">
              <div class="pull-left">
                <a href="#"><img src="Images/foro/home/profile1.png" alt=""></a>
              </div>
              <div class="media-body">
                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                <h3><a href="#">- Jhon Kalis</a></h3>
              </div>
            </div>
            
            <div class="media">
              <div class="pull-left">
                <a href="#"><img src="Images/foro/home/profile2.png" alt=""></a>
              </div>
              <div class="media-body">
                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                <h3><a href="">- Abraham Josef</a></h3>
              </div>
            </div>  
            
          </div> 
        </div>
        
        <div class="col-md-3 col-sm-6">
          <div class="contact-info bottom">
            <h2>Contacts</h2>
            <address>
            E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
            Phone: +1 (123) 456 7890 <br> 
            Fax: +1 (123) 456 7891 <br> 
            </address>
  
            <h2>Address</h2>
            <address>
            Unit C2, St.Vincent's Trading Est., <br> 
            Feeder Road, <br> 
            Bristol, BS2 0UY <br> 
            United Kingdom <br> 
            </address>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-12">
          <div class="contact-form bottom">
            <h2>Send a message</h2>
            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
              
              <div class="form-group">
                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
              </div>
              
              <div class="form-group">
                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
              </div>
              
              <div class="form-group">
                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
              </div>   
              
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
              </div>
              
            </form>
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="copyright-text text-center">
            <p>&copy; Your Company 2014. All Rights Reserved.</p>
            <p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a></p>
          </div>
        </div>
        
      </div>
    </div>
  </footer>

  <!--Final Javascript-->
  <?php echo '<script'; ?>
 type="text/javascript" src="JS/foro/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="JS/foro/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="JS/foro/lightbox.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="JS/foro/wow.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="JS/foro/main.js"><?php echo '</script'; ?>
>   
  
</body>
</html><?php }
}
