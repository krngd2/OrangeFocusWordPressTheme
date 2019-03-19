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

<div class="modal fade" id="loginRegister" tabindex="-1" role="dialog" aria-labelledby="loginRegisterLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title signin">Sign In</h5>
        <h5 class="modal-title signup">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <!--modal-header-->
      <div class="modal-body">
        <form class="login-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter email" />
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" />
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <button type="submit" class="btn no-radius"> &nbsp; SIGN IN &nbsp; </button>
          <strong>Don't have an account? <a href="javascript:void(0);">SIGN UP</a></strong>
        </form>
        <form class="register-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="First Name" />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Last Name" />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your email" />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Confirm email" />
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Your password" />
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm password" />
          </div>
          <button type="submit" class="btn no-radius"> &nbsp; SIGN UP &nbsp; </button>
          <strong>Already have an account? <a href="javascript:void(0);">SIGN IN</a></strong>
        </form>
      </div>
      <!--modal-body--> 
    </div>
    <!--modal-content--> 
  </div>
  <!--modal-dialog--> 
</div>
</body>
</html>
