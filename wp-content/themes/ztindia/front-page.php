<?php
/**
 * Front Page Template
 */
get_header();

if ( have_posts() ) {
	// Main Loop
	while ( have_posts() ) :
		the_post();

		// Flexible content loop starts
		if ( have_rows( 'contents' ) ) {
			while ( have_rows( 'contents' ) ) :
				the_row();
				$layout = get_row_layout();
				get_template_part( 'template-parts/acf-templates/'. $layout );
		endwhile;
		}
	endwhile;
}
get_footer();