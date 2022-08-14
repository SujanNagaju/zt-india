<?php 
/**
 * Template Name: Portfolio Archive
 */
get_header();
?>

<?php
/**
 * Portfolio Filter Template.
 */

$section_pre_title  = get_sub_field( 'section_pre_title' );
$section_main_title = get_sub_field( 'section_main_title' );

$pf_categories = get_terms(
	array(
		'taxonomy'   => 'portfolio-categories',
		'hide_empty' => false,
	)
);
?>
<section class="our-work-section py-60">
	<div class="container">
        <div class="section-title">
            <h5>Case Studies</h5>
            <h2>Some of <span>Our Work</span></h2>
        </div><!-- section-title -->
		<div class="project-wrapper">
			<?php
			$args = array(
				'post_type'      => 'portfolios',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
			);

			$portfolios = new WP_Query( $args );

			if ( $portfolios->have_posts() ) :
				?>
				<div class="project-grid">
					<?php
					while ( $portfolios->have_posts() ) :
						$portfolios->the_post();
						$associated_terms = get_the_terms( get_the_ID(), 'portfolio-categories' );
						$filter_cat       = array();
						foreach ( $associated_terms as $term ) {
							$filter_cat[] = 'cat-'.$term->term_id;
						}
						
						?>
						<div class="project-card">
							<div class="card-inner">
								<div class="card-image">
									<?php the_post_thumbnail( 'full' ); ?>
								</div>
								<div class="card-hover">
									<div class="hover-content">
										<h3><?php the_title(); ?></h3>
										<p>Web Design</p>
									</div><!-- hover-content -->
								</div><!-- card-hover -->
								<a href="<?php the_permalink(); ?>" class="stretched-link"><?php echo _e( 'Read More', 'zts-india' ); ?></a>
							</div><!-- card-inner -->
						</div><!-- project-card -->
						<?php
					endwhile;
					wp_reset_postdata();
					?>

				</div><!-- project-grid -->
			<?php endif; ?>
		</div><!-- project-wrapper -->
	</div><!-- container -->
</section><!-- our-work-section -->

<?php
get_footer();