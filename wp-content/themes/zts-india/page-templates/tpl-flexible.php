<?php 
/**
 * Template Name: Flexible Content
 */

get_header();
$flexibleContentPath = get_template_directory() . '/template-parts/flexible-content/';
if ( have_rows( 'zts_modules' ) ) :
	while ( have_rows( 'zts_modules' ) ) :
		the_row();
		$layout = get_row_layout();
		$file = ( $flexibleContentPath .  $layout . '.php' );
		if ( file_exists( $file ) ) {
			include( $file );
		}
	endwhile;
endif; 
get_footer();
