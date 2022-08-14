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

		<section class="section-blog-detail">
			<div class="container">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					// the_post_navigation(
					// 	array(
					// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'zts-india' ) . '</span> <span class="nav-title"></span>',
					// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'zts-india' ) . '</span> <span class="nav-title"></span>',
					// 	)
					// );

				endwhile; // End of the loop.
				?>
			</div><!-- container -->
		</section><!-- default-section -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
