<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zts-india
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="blog-section">
			<div class="container">
				
				<?php
					if ( have_posts() ) :
					?>
					<?php
					if ( is_home() && ! is_front_page() ) :
						?>
						<div class="section-title text-center">
							<h2><?php single_post_title(); ?></h2>
						</div><!-- section-title -->
						<?php
					endif;
					?>
					<div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );
					?>
					</div><!-- row -->

					<?php
				endif;
				?>
			</div><!-- container -->
		</section><!-- blog-section -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
