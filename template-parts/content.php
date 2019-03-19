<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dories
 */

?>
	

<?php
if ( is_singular() ) : 
	get_template_part( 'template-parts/blog-view', get_post_type() );
else:
	?> 
	
	<a href="<?php get_permalink() ?>">
	<div class="col-md-6 col-sm-12 " id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<div class="posts">
			<a href="javascript:void(0);" class="post-img">
				<?php dories_post_thumbnail(); ?></a>
			<a href="javascript:void(0);" class="category"><i class="fas fa-folder"></i> Web Development</a> <small><i class="fas fa-calendar"></i>
				03/25/2019</small>
			<?php
				the_title( '<h2 class="entry-title post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>

			<?php
				if ( 'post' === get_post_type() ) :
					?>
				<div class="entry-meta ">
						<?php
					dories_posted_on();
					dories_posted_by();
					?>
					<div class="entry-content">
						<?php
							the_content( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dories' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dories' ),
								'after'  => '</div>',
							) );
						?>
					<a href="<?php the_permalink(); ?>"><button class="btn">Read More</button></a>
					<ul>
						<li><strong>Share:</strong></li>
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php  esc_url(the_permalink("")); ?>"><i class="fab fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/intent/tweet?url=<?php esc_url(the_permalink()); ?>"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/share?url=<?php esc_url(the_permalink()); ?>"><i class="fab fa-google-plus"></i></a></li>
					</ul>							
					</div><!-- .entry-content -->						
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
		
	</div></a>
	<!-- .entry-header -->
	<?php endif;?>  
