<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dories
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<?php //dories_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		// the_content();

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dories' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div class="container"> 
      <div class="col-sm-12 no-padding "> 
            <!-- <?php the_title( '<h2 >', '</h2>' ); ?>  -->
        <?php
          the_content();

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dories' ),
            'after'  => '</div>',
          ) );
          ?> 
	 
    <!--clearfix--> 
    </div>
  <!--container--> 
</article>