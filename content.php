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
		if ( is_singular() ) :   ?> 
		<?php the_content();?>
		<!-- .entry-header -->
		<?php endif;?>  
