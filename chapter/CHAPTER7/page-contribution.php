<?php get_header(); ?>
			  <div class="page-inner">
                <div class="page-main" id="pg-contribution">
				  <div class="contribution">
<?php
$common_pages = get_child_pages();
if( $common_pages->have_posts() ):
	while( $common_pages->have_posts() ): $common_pages->the_post();
		get_template_part( 'content-contribution' );
	endwhile;
	wp_reset_postdata();
endif;
?>
                  </div>
                </div>
              </div>
<?php get_footer(); ?>
