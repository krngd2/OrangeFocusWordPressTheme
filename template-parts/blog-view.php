<?php
/**
 * Template part for displaying posts details
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dories
 */

?>
 
      <div class="post-details">  
        <div class="entry-meta ">
            <?php dories_post_thumbnail(); 
                
                the_title( '<h2 class="entry-title post-title">','</h2>' );
                dories_posted_on();
                dories_posted_by();
            ?>
            <a href="javascript:void(0);" class="category"><i class="fas fa-folder"></i> Web Development</a>
        </div>
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
        </div>
        <ul class="tags">
          <li><strong>Tags:</strong></li>
          <li><a href="javascript:void(0);">non-characteristic</a></li>
          <li><a href="javascript:void(0);">injected</a></li>
          <li><a href="javascript:void(0);">repetition</a></li>
          <li><a href="javascript:void(0);">handful</a></li>
          <li><a href="javascript:void(0);">combined</a></li>
          <li><a href="javascript:void(0);">making</a></li>
        </ul>
        <ul class="share">
          <li><strong>Share:</strong></li>
          <li><a href="javascript:void(0);"><i class="fab fa-facebook"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fab fa-google-plus"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fab fa-twitch"></i></a></li>
        </ul>
      <!--post-details--> <br />
      <br />
      <ul class="pagination pg">
        <li class="page-item"> <a class="page-link" href="javascript:void(0);" aria-label="Previous"><span aria-hidden="true">&laquo;</span> Previus Post</a> </li>
        <li class="page-item"> <a class="page-link" href="javascript:void(0);" aria-label="Next">Next Post <span aria-hidden="true">&raquo;</span> </a> </li>
      </ul>
      <div class="clearfix"></div>
      <!--clearfix--> <br />
      <br />
      
      <div class="clearfix"></div>
 
