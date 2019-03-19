<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dories
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="top-row" id="home">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <ul>
          <li>
            <p>Follow Us:</p>
          </li>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php esc_url( home_url( '/' ) ); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://twitter.com/intent/tweet?url=<?php esc_url( home_url( '/' ) ); ?>" target="_blank" ><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com/share?url=<?php esc_url( home_url( '/' ) ); ?>" target="_blank" ><i class="fab fa-google-plus-g"></i></a></li>
          
        </ul>
      </div>
      <!--col-sm-6-->
      <div class="col-xs-6"> <a href="javascript:void(0);" class="btn no-radius" data-toggle="modal" data-target="#loginRegister"><i class="fas fa-sign-out-alt"></i> Sign In / Sign Up</a> </div>
      <!--col-sm-6-->
      <div class="clearfix"></div>
      <!--clearfix--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</div>
<div class="mid-row">
  <div class="container">
    <div class="row">
      <div class="col-sm-5"> 
		<a href="<?php esc_url( home_url( '/' ) ); ?>">
			<?php the_custom_logo(); ?>
		</a> 
	  </div>
      <!--col-sm-5-->
      <div class="col-sm-7">
        <div class="fa-pull-right">
          <div class="c-info"> <i class="fa fa-envelope"></i> <span> <strong>Email Us</strong> <a href="mailto:info@emprasa.com">info@emprasa.com</a> </span> </div>
          <!--c-info-->
          <div class="c-info"> <i class="fa fa-phone"></i> <span> <strong>Call Us Now</strong> <a href="tel:+012345678901">(+01) 234 5678 901</a> </span> </div>
          <!--c-info--></div>
      </div>
      <!--col-sm-7-->
      <div class="clearfix"></div>
      <!--clearfix--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</div>
<div id="page" class="site mid-row">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dories' ); ?></a>

<nav id="mainNav" class="main-navigation navbar navbar-expand-lg navbar-light menu">
	<div class="container">
		<button class="navbar-toggler" aria-expanded="false"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span><?php esc_html_e( '', 'dories' ); ?></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'menu_class'	 => 'navbar-nav mr-auto',
			'container'  	 => 'ul', 
			// 'link_before'     => '<a class="nav-link js-scroll-trigger">',
			// 'link_after'      => '</a>', 
			// 'container_class' => 'nav-item', 
			
		) );
		?>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button type="button" class="btn no-radius"><i class="fas fa-search"></i></button>
		</form>
		</div>
	</div>
</nav>
	<div id="content" class="site-content">
  </div>
  <?php get_the_content(); ?>
