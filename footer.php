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
      <div class="col-sm-5">
        <div class="f-columns"> <a href="index.html"><img src="images/logo.png" alt="Footer Logo" class="img-fluid" /></a>
          <p>We are IT architects and experts who have worked with thousands of clients to transform their business growth to its zenith through migrating to cloud, applying automation and ensure business continuity with desired pace.</p>
          <i class="fa fa-map-marker"></i>
          <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
        </div>
        <!--f-columns--> 
      </div>
      <!--col-sm-5-->
      <div class="col-sm-3">
        <div class="f-columns">
          <h3>Common &amp; Useful Links</h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#services">Our Services</a></li>
            <!-- <li><a href="index.html#pricing">Pricing</a></li>
            <li><a href="index.html#testimonials">Testimonials</a></li> -->
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
            <!-- <li><a href="blog.html">Blog</a></li> -->
            <li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
            <li><a href="javascript:void(0);">Privacy Policy</a></li>
            <!-- <li><a href="faqs.html">FAQs</a></li> -->
          </ul>
        </div>
        <!--f-columns--> 
      </div>
      <!--col-sm-3-->
      <div class="col-sm-4">
        <div class="f-columns">
          <h3>Photos from Instagram</h3>
          <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> <img src="<?php get_image_tag(); ?>" class="img-fluid insta" alt="Instagram" /> </div>
        <!--f-columns--> 
      </div>
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
<!--modal--> 

