<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dories
 */

?>

<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Keep up to date — get updates with latest topics.</h3>
      </div>
      <!--col-sm-6-->
      <div class="col-sm-6">
        <form>
          <div class="form-group">
            <input type="email" class="form-control no-radius" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email address" />
          </div>
          <!--form-group-->
          <button name="btn" class="btn no-radius">Send</button>
        </form>
      </div>
      <!--col-sm-6-->
      <div class="clearfix"></div>
      <!--clearfix--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</section>
<!--newsletter--> 


<footer>
  <div class="container">
    <div class="row">
    <?php
      if(is_active_sidebar('footerwidgets')){
        dynamic_sidebar('footerwidgets');
      } ?>
      <!--col-sm-4-->
      <div class="clearfix"></div>
      <!--clearfix--> 
    </div>
    <!--row--> 
  </div>
  <!--container-->
  <center>
    All Rights Reserved© 2019 DORIS Technologies Ltd UK Registered.
  </center>
</footer>

<!----------------------------Footer Section Code Ends Here-------------------------->
</body>
</html>
