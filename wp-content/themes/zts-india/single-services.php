<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zts-india
 */

get_header();
?>
<main id="primary" class="site-main">
    <?php
    $flexibleContentPath = get_template_directory() . '/template-parts/flexible-content/';
    while( have_posts() ): the_post();
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
    endwhile; 
    ?>
</main>
<?php
get_footer();
