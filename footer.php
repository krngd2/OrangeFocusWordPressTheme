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

<!--modal-->  
</body>
</html>
